<template>
    <Header></Header>

    <div class="container">
        <h5>When the account is created </h5>
    </div>

    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Mes clients</h4>
        </div>

        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-end">
                    <div class="bg-body-secondary border rounded-pill border-0">
                        <form method="get" @submit.prevent="search.get('/clients', { search: this.search })" class="flex">
                            <input v-model="search.search" class="bg-transparent border-0 form-control" type="search"
                                style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;"
                                placeholder="Recherche" data-bs-theme="light" />
                            <button type="submit">Rec</button>
                        </form>
                    </div>
                </div>
                <div class="d-flex">
                    <button data-bs-target="#delete" data-bs-toggle="modal" ref="deleteButton"
                        v-if="checkboxs && listClientDelete.length >= 1"
                        class="btn btn-primary btn-sm link-light border-0" style="margin-right: 5px;">Sup</button>
                    <button data-bs-target="#form-client" @click="clearForm" data-bs-toggle="modal"
                        class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center" type="button"
                        ref="saveButton"><span>Ajouter</span></button>
                </div>
            </div>

            <div class="table-responsive" style="overflow: inherit;">
                <div class="table-responsive" style="overflow: inherit;">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th id="cell_id-1">
                                    <input type="checkbox" v-model="allChecked" @input="isAllChecked()">
                                </th>
                                <th id="cell_name-1">Nom du client</th>
                                <th id="cell_cat-1" class="d-none d-sm-table-cell">Réservations</th>
                                <th id="cell_spec-1" class="d-none d-md-table-cell">Ventes</th>
                                <th id="cell_actions-1"
                                    class="d-none d-lg-table-cell justify-content-end justify-content-md-center">
                                    <strong>Commandes</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="client in clients.data" :key="client.id">
                                <td>
                                    <div v-if="!checkboxs"><span>img</span></div>
                                    <div v-if="checkboxs">
                                        <input type="checkbox" @input="isChecked(client.id)" :id="'client' + client.id">
                                    </div>
                                </td>
                                <td class="text-capitalize">
                                    <Link v-if="!checkboxs" href="/clients/client" :data="{ id: client.id }"
                                        class="link-body-emphasis link-opacity-75"
                                        style="cursor: pointer; text-decoration: none;">
                                    {{ client.nom }} {{ client.postnom }}
                                    </Link>
                                    <label v-if="checkboxs" :for="'client' + client.id" style="cursor: pointer;">
                                        {{ client.nom }} {{ client.postnom }}
                                    </label>
                                </td>
                                <td class="text-lowercase d-none d-sm-table-cell">
                                    <Link href="/clients/client" :data="{ id: client.id }" v-if="!checkboxs"
                                        class="link-body-emphasis link-opacity-75"
                                        style="cursor: pointer; text-decoration: none;">
                                    ...
                                    </Link>
                                    <label v-if="checkboxs" :for="'client' + client.id" style="cursor: pointer;">
                                        ...
                                    </label>
                                </td>
                                <td class="text-capitalize d-none d-md-table-cell">
                                    <Link href="/clients/client" :data="{ id: client.id }" v-if="!checkboxs"
                                        class="link-body-emphasis link-opacity-75"
                                        style="cursor: pointer; text-decoration: none;">
                                    ...
                                    </Link>
                                    <label v-if="checkboxs" :for="'client' + client.id" style="cursor: pointer;">
                                        ...
                                    </label>
                                </td>
                                <td class="d-none d-lg-table-cell justify-content-end justify-content-md-center">
                                    <Link href="/clients/client" :data="{ id: client.id }" v-if="!checkboxs"
                                        class="link-body-emphasis link-opacity-75"
                                        style="cursor: pointer; text-decoration: none;">
                                    ...
                                    </Link>
                                    <label v-if="checkboxs" :for="'client' + client.id" style="cursor: pointer;">
                                        ...
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <template v-if="clients.total > 3" class="flex" v-for="link in clients.links" :key="link.id">
                        <!-- manage the link.active* to show the lick which is activate -->
                        <Link :href="link.url ? link.url : ''" :disabled="link.url == null" as="button"
                            class="btn-sm btn btn-success" style="margin-right: 5px;">
                        {{ link.label }}</Link>
                    </template>
                </div>
            </div>

        </div>
    </div>

    <!-- Formulaire d'enregistrement -->
    <div id="form-client" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Ajouter un client</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <form method="post" @submit.prevent="formSubmit">
                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="nom">Nom</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input id="nom" v-model="form.nom"
                                    class="bg-transparent border-0 form-control form-control-sm" type="text"
                                    style="width: 100%;outline: none;" name="nom" placeholder="Nom du client" />
                            </div><span class="text-primary" style="font-size: 13px;" v-if="form.errors.nom">{{
                                form.errors.nom }}</span>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-sm link-light border-0" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Suppression des clients -->
    <div id="delete" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Suppression</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Voulez-vous vraiment supprimer ces clients?</p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between"><button
                        class="btn btn-primary btn-sm link-body-emphasis link-opacity-50 bg-transparent border-0"
                        type="button" data-bs-target="#delete" data-bs-toggle="modal">Annuler</button>
                    <button @click="deleteSelect" class="btn btn-primary btn-sm bg-transparent" type="button"
                        style="color: var(--bs-btn-border-color);">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { Inertia } from '@inertiajs/inertia';
import Header from '../../Components/Header/Header.vue';
import { Link, router, useForm } from "@inertiajs/vue3";

export default {
    components: {
        Header,
        Link,
    },
    computed: {},
    props: {
        clients: Object,
        users: Object,
    },
    data() {
        return {
            form: useForm({
                nom: null,
            }),
            clientsDelete: useForm({
                id: null
            }),
            search: useForm({
                search: null
            }),
            success: false,
            checkboxs: false,
            select: true,
            listClientDelete: [],
            allChecked: false
        }
    },
    mounted() {
        // console.log(this.clients);
    },
    methods: {
        formSubmit() {
            this.form.post('/clients', {
                onSuccess: () => {
                    this.$refs.saveButton.click()
                }
            });
        },
        clearForm() {
            this.form.nom = ''
            this.form.phone = ''
            this.form.errors.nom = ''
            this.form.errors.phone = ''
        },
        isChecked(client) {
            let index = this.listClientDelete.indexOf(client);
            if (index === -1) {
                this.listClientDelete.push(client);
            } else {
                this.listClientDelete.splice(index, 1);
            }
        },
        deleteSelect() {
            this.clientsDelete.id = this.listClientDelete;

            this.clientsDelete.delete('/clients', {
                onSuccess: () => {
                    this.clientsDelete.reset()
                    this.checkboxs = false
                    this.allChecked = false
                    this.$refs.deleteButton.click()
                }
            })
        },
        isAllChecked() {
            if (this.allChecked) {
                this.checkboxs = false
                this.listClientDelete = []
            } else {
                this.checkboxs = true
            }
        }
    }
}

</script>