<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Espace des ventes</h4>
        </div>

        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-end">
                    <div class="bg-body-secondary border rounded-pill border-0"><input class="bg-transparent border-0"
                            type="search" style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;"
                            placeholder="Recherche" data-bs-theme="light" /></div>
                </div>
                <div class="d-flex">
                    <a type="button" href="ventes/historique"
                        class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                        style="margin-right: 10px;">
                        <span>Historique</span>
                    </a>
                    <!-- <button type="button" class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                        :disabled="true" data-bs-target="#call-panier" data-bs-toggle="modal" ref="CommanderButton"
                        @click="callPanier()" style="margin-right: 10px;"><span>Réserver</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                        :disabled="!articles_ventes.length >= 1" data-bs-target="#call-panier" data-bs-toggle="modal"
                        ref="CommanderButton" @click="callPanier()" style="margin-right: 10px;"><span>Commander</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                        :disabled="!articles_ventes.length >= 1" data-bs-target="#call-panier" data-bs-toggle="modal"
                        ref="buttonPanier" @click="callPanier()"><span>Vendre</span>
                    </button> -->
                    <button type="button" class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                        data-bs-target="#call-panier" data-bs-toggle="modal" ref="buttonPanier"><span>Panier</span>
                    </button>
                </div>
            </div>

            <select v-model="action" @change="myAction">
                <option value="vente">vente</option>
                <option value="commande">commande</option>
                <option value="Résérvation">Résérvation</option>
            </select>

            <div class="table-responsive" style="overflow: inherit;">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th id="cell_id">#</th>
                            <th id="cell_name">Nom de l&#39;article</th>
                            <th id="cell_cat" class="d-none d-sm-table-cell">Categorie</th>
                            <th id="cell_spec" class="d-none d-md-table-cell">Spécification</th>
                            <th id="cell_price" class="d-none d-lg-table-cell">Prix unitaire</th>
                            <th id="cell_price" class="d-none d-lg-table-cell">Stock disponible</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(article, index) in articles" :key="index">
                            <td>
                                <input :id="'article' + article.id" v-model="article.checked" type="checkbox"
                                    @change="addPanier(article)" name="select">
                            </td>
                            <td>
                                <label :for="'article' + article.id" style="cursor: pointer;">
                                    {{ article.nom }}
                                </label>
                            </td>
                            <td class="text-capitalize d-none d-sm-table-cell">
                                <label :for="'article' + article.id" style="cursor: pointer;">
                                    {{ article.catNom }}
                                </label>
                            </td>
                            <td class="text-capitalize d-none d-md-table-cell">
                                <label :for="'article' + article.id" style="cursor: pointer;">
                                    {{ article.specNom }}
                                </label>
                            </td>
                            <td class="text-capitalize d-none d-lg-table-cell">
                                <label :for="'article' + article.id" style="cursor: pointer;">
                                    {{ article.prix }} {{ article.devise == 'USD'
                                        ? '$' : 'Fc' }}
                                </label>
                            </td>
                            <td class="d-none d-lg-table-cell">
                                <label :for="'article' + article.id" style="cursor: pointer;">
                                    {{ article.qtte }} article{{
                                        article.qtte > 1 ? 's' : '' }}
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="call-panier" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Panier d'articles</h4>
                    <button class="btn-close shadow-none" type="button" data-bs-target="#call-panier"
                        data-bs-toggle="modal"></button>
                    <button v-if="articles_ventes.length >= 1" class="btn btn-primary btn-sm shadow-none"
                        @click="clearPanier">vider le panier</button>
                </div>
                <div class="modal-body border-0">
                    <span v-if="articles_ventes.length == 0">Aucun article séléctionné</span>
                    <form method="post" @submit.prevent="submitPanier(articles_ventes, informations, client)">
                        <div v-for="articles_vente in articles_ventes">

                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input id="nom" v-model="articles_vente.nom"
                                    class="bg-transparent border-0 form-control form-control-sm" type="text"
                                    style="width: 100%;outline: none;" name="nom" placeholder="Nom" disabled />
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div style="width: 48%;"><label class="form-label"
                                        style="font-size: 12px;margin-bottom: 2px;" for="qtte">Quantité</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">
                                        <input id="qtte" v-model="articles_vente.qtteVente"
                                            class="border-0 shadow-none form-control form-control-sm" type="number"
                                            style="width: 100%;outline: none;" placeholder="Quantité" min="1" />
                                    </div><span class="text-primary" style="font-size: 13px;"
                                        v-if="vente.errors.qtteVente">{{
                                            vente.errors.qtteVente }}</span>
                                </div>

                                <div style="width: 48%;"><label class="form-label"
                                        style="font-size: 12px;margin-bottom: 2px;" for="nom">Prix unitaire</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;"><input v-model="articles_vente.prix"
                                            class="border-0 shadow-none form-control form-control-sm" type="number"
                                            style="width: 100%;outline: none;" placeholder="Prix unitaire" />
                                        <select disabled v-model="articles_vente.devise"
                                            style="border: none; background: transparent; outline: none">
                                            <option value="USD">USD</option>
                                            <!-- <option value="CDF">CDF</option> -->
                                        </select>
                                    </div>
                                    <span class="text-primary" style="font-size: 13px;" v-if="vente.errors.prix">{{
                                        vente.errors.prix }}</span>
                                </div>
                            </div>
                        </div>

                        <div v-if="articles_ventes.length >= 1 && action == 'commande'" class="mb-2"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;" for="nom">Date disponible de l'article</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <input id="dateDisponible" v-model="informations.dateDisponible"
                                    class="border-0 shadow-none form-control form-control-sm" type="date"
                                    style="width: 100%;outline: none;" />
                                <!-- v-model="articles_vente.qtteVente" -->
                            </div>
                        </div>

                        <div v-if="articles_ventes.length >= 1" class="mb-2"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;" for="nom">Lier à un client</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <select v-model="client.client_id" class="border-0 shadow-none form-control form-control-sm"
                                    style="border: none; background: transparent; outline: none">
                                    <option label="Choisir un client" :value=null></option>
                                    <option v-for="client in clients" :value="client.id" :key="client.id"
                                        class="text-capitalize">{{ client.nom }}
                                        {{ client.postnom }}</option>
                                </select>

                            </div><span class="text-primary" style="font-size: 13px;" v-if="vente.errors.prixTotal">{{
                                vente.errors.prixTotal }}</span>
                            <div style="padding-top: 10px;" class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-sm bg-transparent border-0 shadow-none" type="button"
                                    style="padding: 0px;" @click="callDisable()">{{ message ? message : '' }}</button>

                                <button class="btn btn-primary btn-sm link-light border-0" type="submit" >Valider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Header from '../../Components/Header/Header.vue';
import { useForm, Link, router } from "@inertiajs/vue3";
import { Inertia, defineComponent } from "@inertiajs/inertia"

export default {
    components: { Header },

    props: ['categories', 'specifications', 'articles', 'clients', 'message', 'default_action'],

    data() {
        return {
            vente: useForm({
                article_id: null,
                article_nom: null,
                qtte: 1,
                prix: null,
                devise: null,
                client_id: null
            }),

            form: useForm({
                // id: null,
                nom: null,
                categorie: null,
                specification: null,
                prix: null,
                devise: null,
                boutique_id: null
            }),

            painerForm: useForm({
                nom: null,
                qtte: null,
                prix: null,
                devise_id: null,
            }),

            action: this.default_action,

            selected: true,

            informations: {
                dateDisponible: null
            },

            client: {
                client_id: null
            },

            articles_ventes: [],
        }
    },

    mounted() {

    },

    methods: {
        addPanier(article) {

            article.qtteVente = 1
            let index = this.articles_ventes.indexOf(article);
            if (index === -1) {
                article.checked = true
                this.articles_ventes.push(article);
            } else {
                article.checked = false
                this.articles_ventes.splice(index, 1);
            }

        },

        submitPanier(articles_vente, informations, client) {
            
            let form = []
            form.push(articles_vente)
            form.push(client)

            let myForm = ""
            myForm = useForm(form)


            // console.log(this.action);
            if (this.action === 'vente' || this.action === null || this.action === '') {
                
                myForm.post('/ventes', {
                    onSuccess: () => {
                        this.$refs.buttonPanier.click()
                        this.articles_ventes = [];
                        this.client.client_id = null;
                        myForm.reset()
                    }
                })

            } else if (this.action === 'commande') {
                
                form.push(informations)
                
                let commandeData = ""
                commandeData = useForm(form)

                commandeData.post('/commandes', {
                    onSuccess: () => {
                        this.$refs.buttonPanier.click()
                        this.informations.dateDisponible = null
                        this.articles_ventes = [];
                        commandeData.reset()
                        this.client.client_id = null;
                    }
                })

            } else {

                let reservationData = ""
                reservationData = useForm(form)

                reservationData.post('/reservations')

            }

        },

        callPanier() {
            // console.log(this.articles_ventes);
        },

        clearPanier() {
            this.$inertia.reload()
            this.articles_ventes = [];
            this.$refs.buttonPanier.click()
        },

        myAction() {
            // console.log(this.articles);
            this.articles_ventes = [];
            this.$inertia.get('/ventes', {
                action: this.action
            }, {
                preserveState: true,
                replace: true
            })
        },

        cancelArticle(id) {
            this.$refs.articleChecked.click();
        }
    },

}


</script>