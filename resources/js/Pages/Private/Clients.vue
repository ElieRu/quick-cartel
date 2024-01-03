<template>
    <Header></Header>

    <div class="container" v-if="this.clients.total">
        <h5>When the account is created </h5>
    </div>

    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Clients</h4>
        </div>

        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-end">
                    <div class="bg-body-secondary border rounded-pill border-0">
                        <input v-model="search" @input="searching" class="bg-transparent border-0" type="search"
                            style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;" placeholder="Recherche"
                            data-bs-theme="light" />
                    </div>
                </div>
                <div class="d-flex">
                    <button data-bs-target="#delete" data-bs-toggle="modal" ref="deleteButton"
                        v-if="checkboxs && listClientDelete.length >= 1"
                        class="btn btn-transparent btn-sm link-light border-dark-subtle" style="margin-right: 5px;">
                        <svg class="text-dark" xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                            height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                            </path>
                        </svg>
                    </button>
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
                                <th id="cell_id-1" style="height: 40px; padding-left: 15px;">
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
                            <tr v-for="client in clients.data" :key="client.id" style="height: 40px;">
                                <td style="width: 60px;">
                                    <div v-if="!checkboxs"
                                        class="border rounded-circle d-flex justify-content-center align-items-center"
                                        style="height: 25px;width: 25px;font-size: 21px;">
                                        <img :src="client.profileImg ? '/storage/' + client.profileImg : ''"
                                            :style="client.profileImg ? 'width: 100%;height: 100%;border-radius: 100%;' : ''" />

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div v-if="checkboxs" style="padding-left: 7px; padding-top: 8px;">
                                        <input type="checkbox" @input="isChecked(client.id)" :id="'client' + client.id">
                                    </div>
                                </td>
                                <td class="text-capitalize" style="padding-top: 12px;">
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
                    <Pagination :myDatas="clients"></Pagination>
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
                        <div class="mb-2">
                            <div :class="errorClass" style="overflow: hidden;"><input id="nom" v-model="form.nom"
                                    class="bg-transparent border-0 form-control form-control-sm" type="text"
                                    style="width: 100%;outline: none;" name="nom" placeholder="Nom du client" />
                            </div>
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
                    <p>Voulez-vous vraiment supprimer ce{{ listClientDelete.length > 1 ? 's' : '' }} client{{
                        listClientDelete.length > 1 ? 's' : '' }}?</p>
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

import Header from '../../Components/Header/Header.vue';
import { Link, router, useForm } from "@inertiajs/vue3";
import Pagination from './Pagination.vue';

export default {
    components: {
        Header,
        Link,
        Pagination
    },
    computed: {
        errorClass() {
            let class_value = 'border rounded border-1 d-flex flex-row align-items-center mb-2 '
            if (this.form.errors.nom) {
                class_value = class_value + 'border-primary'
            } else {
                class_value = class_value + 'border-secondary-subtle'
            }
            return class_value
        },
    },
    props: {
        clients: Object,
        users: Object
    },
    data() {
        return {
            form: useForm({
                nom: null,
            }),
            clientsDelete: useForm({
                id: null
            }),
            success: false,
            checkboxs: false,
            select: true,
            listClientDelete: [],
            allChecked: false,
            search: ""
        }
    },
    mounted() {
        console.log(this.clients.total);
    },
    watch: {
        search() {
            this.$inertia.get('/clients', {
                search: this.search
            }, {
                preserveState: true,
                replace: true,
                preserveScroll: true,
            })
        }
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
        },
    }
}

</script>