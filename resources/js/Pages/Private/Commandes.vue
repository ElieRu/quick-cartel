<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Mes commandes</h4>
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
                        :disabled="selected" data-bs-target="#call-panier" data-bs-toggle="modal"><span>Commander</span>
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
                        <tr v-for="(article, index) in articles" :key="index" style="cursor: pointer;">
                            <td>
                                <input :id="'article' + article.id" type="checkbox" @input="addPanier(article)" name="select">
                            </td>
                            <td class="text-capitalize">
                                <label style="cursor: pointer;" :for="'article' + article.id">{{ article.nom }}</label>
                            </td>
                            <td class="text-capitalize d-none d-sm-table-cell">
                                <label style="cursor: pointer;" :for="'article' + article.id">{{ article.catNom }}</label>
                            </td>
                            <td class="text-capitalize d-none d-md-table-cell">
                                <label style="cursor: pointer;" :for="'article' + article.id">{{ article.specNom }}</label>
                            </td>
                            <td class="text-capitalize d-none d-lg-table-cell">
                                <label style="cursor: pointer;" :for="'article' + article.id">{{ article.prix }} {{ article.devise == 'USD'
                                    ? '$' : 'Fc' }}</label>
                            </td>
                            <td class="d-none d-lg-table-cell">
                                <label style="cursor: pointer;" :for="'article' + article.id">
                                    {{ article.qtte ? article.qtte : '0' }} article{{ article.qtte > 1 ? 's' : '' }}
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
                    <h4 class="modal-title">Validez une commande</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <form method="post" @submit.prevent="submitPanier(my_articles, infos)">
                        <div v-for="my_article in my_articles">
                            <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;">Nom de
                                    l&#39;article</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;">
                                    <input id="nom" v-model="my_article.nom"
                                        class="bg-transparent border-0 form-control form-control-sm" type="text"
                                        style="width: 100%;outline: none;" name="nom" placeholder="Nom" disabled />
                                </div>
                                <span class="text-primary" style="font-size: 13px;" v-if="vente.errors.article_nom">{{
                                    vente.errors.article_nom }}</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div style="width: 48%;"><label class="form-label"
                                        style="font-size: 12px;margin-bottom: 2px;" for="qtte">Quantité</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">
                                        <input id="qtte" v-model="my_article.qtteCommande"
                                            class="border-0 shadow-none form-control form-control-sm" type="number"
                                            style="width: 100%;outline: none;" placeholder="Quantité" />
                                    </div><span class="text-primary" style="font-size: 13px;"
                                        v-if="vente.errors.qtteCommande">{{
                                            vente.errors.qtteCommande }}</span>
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
                                for="nom">Date de disponibilité</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <input class="border-0 shadow-none form-control form-control-sm" v-model="infos.date"
                                    type="date" style="outline: none;
                                background-color: transparent;" />
                            </div><span class="text-primary" style="font-size: 13px;" v-if="vente.errors.prixTotal">{{
                                vente.errors.prixTotal }}</span>
                        </div>

                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="nom">Lier à un client</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <select v-model="infos.client_id" class="border-0 shadow-none form-control form-control-sm"
                                    style="border: none; background: transparent; outline: none">
                                    <option label="Choisir un client" :value=null></option>
                                    <option v-for="client in clients" :value="client.id" :key="client.id"
                                        class="text-capitalize">{{ client.nom }} {{ client.postnom }}</option>
                                </select>

                            </div><span class="text-primary" style="font-size: 13px;" v-if="vente.errors.prixTotal">{{
                                vente.errors.prixTotal }}</span>
                        </div>

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
    setup(props) {
        const vente = useForm({
            article_id: null,
            article_nom: null,
            qtte: 1,
            prix: null,
            devise: null,
            client_id: null
        })

        const form = useForm({
            // id: null,
            nom: null,
            categorie: null,
            specification: null,
            prix: null,
            devise: null,
            boutique_id: null
        })

        let success = false
        let updateSuccess = false

        let clients = props.clients

        const painerForm = useForm({
            nom: null,
            qtte: null,
            prix: null,
            devise_id: null,
        })

        return { vente, form, success, updateSuccess, painerForm }
    },

    components: { Header },

    props: ['categories', 'specifications', 'articles', 'clients', 'message'],

    data() {
        return {
            selected: true,
            infos: {
                date: null,
                client_id: null,
            },
            my_articles: []
        }
    },

    mounted() {
        // console.log(this.clients);
    },

    methods: {
        addPanier(article) {
            article.qtteCommande = 1
            let index = this.my_articles.indexOf(article);
            if (index === -1) {
                this.my_articles.push(article);
            } else {
                this.my_articles.splice(index, 1);
            }

            if (this.my_articles.length >= 1) {
                this.selected = false
            } else {
                this.selected = true
            }
        },

        submitPanier(my_article, infos) {
            let form = []
            form.push(my_article)
            form.push(infos)

            router.post('/commandes', form)
        },
    },

}

</script>