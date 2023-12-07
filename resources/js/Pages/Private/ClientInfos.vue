<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Mon tableau de bord</h4>
        </div>

        <ul>
            <li><a href="#">Résérvations</a></li>
            <li><a href="#">Commandes</a></li>
            <li>
                <Link href="/ventes/historique" :data="{ client_id: client.id }">Ventes</Link>
            </li>
            <li><a href="#">Profile</a></li>
        </ul>

        <div style="height: 100px; width: 100px;">
            <img :src="'/storage/' + client.profileImg" alt="profile" style="width: 100%; height: 100%;" />
        </div>

        <div>
            <input type="file" style="display: none;" accept="image/*" @change="onChange" ref="callButton">
            <button @click="callFile">profile Img</button>
        </div>

        <div class="d-flex">
            <form method="post" @submit.prevent="form.put('/clients')">
                <input placeholder="nom" type="text" v-model="form.nom"> <br>
                <div v-if="form.errors.nom"><span>{{ form.errors.nom }}</span></div>
                <input placeholder="postnom" type="text" v-model="form.postnom"> <br>
                <input placeholder="email" type="email" v-model="form.email"> <br>
                <input placeholder="phone" type="tel" v-model="form.phone"> <br>
                <input placeholder="nom" type="text" v-model="form.adresse"> <br>
                <button type="submit" class="btn btn-primary btn-sm">Mod</button>
            </form>
            <div>
                <p>Ventes : {{ nbr_ventes >= 1 ? nbr_ventes : 'Aucune' }}</p>
                <p>Résérvations : </p>
                <p>Commandes : </p>
            </div>
        </div>

        <button class="btn btn-primary btn-sm" data-bs-target="#delete" data-bs-toggle="modal"
            ref="deleteButton">Supp</button>

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
                        <button @click="deleteClient" class="btn btn-primary btn-sm bg-transparent" type="button"
                            style="color: var(--bs-btn-border-color);">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Header from '../../Components/Header/Header.vue';
import { Link, router, useForm } from "@inertiajs/vue3";

export default {

    components: {
        Header,
        Link
    },
    props: {
        client: Object,
        nbr_ventes: Number
    },
    data() {
        return {
            form: useForm({
                id: this.client.id,
                nom: this.client.nom,
                postnom: this.client.postnom,
                email: this.client.email,
                phone: this.client.phone,
                adresse: this.client.adresse
            }),

            image: ""
        }
    },
    mounted() {
        // console.log(this.nbr_ventes);
    },
    methods: {
        onChange(e) {
            this.image = e.target.files[0]
            this.$inertia.post('/clients-profile', {
                _method: 'put',
                id: this.client.id,
                image: this.image
            })
        },

        callFile() {
            this.$refs.callButton.click()
        },

        deleteClient() {
            this.form.delete('/clients')
            this.$refs.deleteButton.click()
            this.$inertia.visit('/clients')
        }

    }
}

</script>