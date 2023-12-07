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
                    <button type="button" class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                        :disabled="true" data-bs-target="#call-panier" data-bs-toggle="modal"
                        ref="CommanderButton" @click="callPanier()" style="margin-right: 10px;"><span>Réserver</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                        :disabled="!my_articles.length >= 1" data-bs-target="#call-panier" data-bs-toggle="modal"
                        ref="CommanderButton" @click="callPanier()" style="margin-right: 10px;"><span>Commander</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                        :disabled="!my_articles.length >= 1" data-bs-target="#call-panier" data-bs-toggle="modal"
                        ref="VendreButton" @click="callPanier()"><span>Vendre</span>
                    </button>
                </div>
            </div>
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
                                <input :id="'article' + article.id" type="checkbox" @input="addPanier(article)"
                                    name="select">
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
                                    {{ article.qtte ? article.qtte : '0' }} article{{
                                        article.qtte > 1 ? 's' : '' }}
                                </label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            commande : 
            <ul>
                <li>date disponoble</li>
                <li>montant avance</li>
                <li>statut</li>
            </ul>
        </div>
    </div>

    <div id="call-panier" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Formulaire de vente</h4>
                    <button class="btn-close shadow-none" type="button" @click="closePanier"></button>
                </div>
                <div class="modal-body border-0">
                    <form method="post" @submit.prevent="submitPanier(my_articles, client)">
                        <div v-for="my_article in my_articles">

                            <div class="d-flex justify-content-between bg-dark-subtle border rounded border-0 d-flex align-items-center"
                                style="margin-bottom: 10px; width: 100%;padding: 5px;padding-right: 10px;padding-left: 10px;">
                                <span style="font-size: 12px;" class="text-capitalize">
                                    <svg style="margin-right: 5px;" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M13.97 2.196C22.49-1.72 32.5-.3214 39.62 5.778L80 40.39L120.4 5.778C129.4-1.926 142.6-1.926 151.6 5.778L192 40.39L232.4 5.778C241.4-1.926 254.6-1.926 263.6 5.778L304 40.39L344.4 5.778C351.5-.3214 361.5-1.72 370 2.196C378.5 6.113 384 14.63 384 24V488C384 497.4 378.5 505.9 370 509.8C361.5 513.7 351.5 512.3 344.4 506.2L304 471.6L263.6 506.2C254.6 513.9 241.4 513.9 232.4 506.2L192 471.6L151.6 506.2C142.6 513.9 129.4 513.9 120.4 506.2L80 471.6L39.62 506.2C32.5 512.3 22.49 513.7 13.97 509.8C5.456 505.9 0 497.4 0 488V24C0 14.63 5.456 6.112 13.97 2.196V2.196zM96 144C87.16 144 80 151.2 80 160C80 168.8 87.16 176 96 176H288C296.8 176 304 168.8 304 160C304 151.2 296.8 144 288 144H96zM96 368H288C296.8 368 304 360.8 304 352C304 343.2 296.8 336 288 336H96C87.16 336 80 343.2 80 352C80 360.8 87.16 368 96 368zM96 240C87.16 240 80 247.2 80 256C80 264.8 87.16 272 96 272H288C296.8 272 304 264.8 304 256C304 247.2 296.8 240 288 240H96z">
                                        </path>
                                    </svg>
                                    {{ my_article.nom }}
                                </span>
                                <button class="btn-close shadow-none" type="button" aria-label="Close"
                                    data-bs-dismiss="modal"></button>
                            </div>

                            <input id="nom" v-model="my_article.nom"
                                class="bg-transparent border-0 form-control form-control-sm" type="hidden"
                                style="width: 100%;outline: none;" name="nom" placeholder="Nom" disabled />


                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div style="width: 48%;"><label class="form-label"
                                        style="font-size: 12px;margin-bottom: 2px;" for="qtte">Quantité</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">
                                        <input id="qtte" v-model="my_article.qtteVente"
                                            class="border-0 shadow-none form-control form-control-sm" type="number"
                                            style="width: 100%;outline: none;" placeholder="Quantité" />
                                    </div><span class="text-primary" style="font-size: 13px;"
                                        v-if="vente.errors.qtteVente">{{
                                            vente.errors.qtteVente }}</span>
                                </div>

                                <div style="width: 48%;"><label class="form-label"
                                        style="font-size: 12px;margin-bottom: 2px;" for="nom">Prix unitaire</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;"><input v-model="my_article.prix"
                                            class="border-0 shadow-none form-control form-control-sm" type="number"
                                            style="width: 100%;outline: none;" placeholder="Prix unitaire" />
                                        <select disabled v-model="my_article.devise"
                                            style="border: none; background: transparent; outline: none">
                                            <option value="USD">USD</option>
                                            <option value="CDF">CDF</option>
                                        </select>
                                    </div>
                                    <span class="text-primary" style="font-size: 13px;" v-if="vente.errors.prix">{{
                                        vente.errors.prix }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="nom">Lier à un client</label>
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
                        </div>
                        paiement... <br>
                        date d'achat...
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary btn-sm bg-transparent border-0 shadow-none" type="button"
                                style="padding: 0px;" @click="callDisable()">{{ message ? message : '' }}</button>

                            <button class="btn btn-primary btn-sm link-light border-0" type="submit">Valider</button>
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

export default {
    components: { Header },

    props: ['categories', 'specifications', 'articles', 'clients', 'message'],

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
            
            inputValue: false,

            success: false,
            updateSuccess: false,

            painerForm: useForm({
                nom: null,
                qtte: null,
                prix: null,
                devise_id: null,
            }),

            selected: true,
            client: {
                client_id: null
            },
            my_articles: [],

            ariaLabel: '',
            dataBsDismiss: '',
        }
    },

    mounted() {
        // console.log(this.my_articles.length);
    },

    methods: {
        addPanier(article) {
            // console.log(article);
            // article.value = false
            article.qtteVente = 1
            let index = this.my_articles.indexOf(article);
            if (index === -1) {
                this.my_articles.push(article);
            } else {
                this.my_articles.splice(index, 1);
            }

            // if (this.my_articles.length >= 1) {
            //     this.selected = false
            // } else {
            //     this.selected = true
            // }
        },

        submitPanier(my_article, client) {
            let form = []
            form.push(my_article)
            form.push(client)

            router.post('/ventes', form)
        },

        callPanier() {
            // console.log(this.my_articles);
        },

        closePanier() {
            this.my_articles = [];
            // this.selected = false
            // console.log(this.my_articles.length);
            this.$refs.VendreButton.click()
        }
    },

}


</script>