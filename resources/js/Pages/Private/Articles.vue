<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;">

        <form @submit.prevent="submit_payment(paymentForm)" method="post" style="margin-top: 10px;">
            <input type="hidden" name="price" v-model="paymentForm.price"> <br>
            <input type="hidden" name="product_name" v-model="paymentForm.product_name"> <br>
            <input type="hidden" name="quantity" v-model="paymentForm.quantity"> <br>
            <button submit>Pay</button>
        </form>

        <div>
            <h4 class="text-body-tertiary">Gestion d&#39;articles</h4>
        </div>
        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-end">
                    <div class="bg-body-secondary border rounded-pill border-0">
                        <input v-model="search" @input="searching" class="bg-transparent border-0" type="search"
                            style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;" placeholder="Recherche"
                            data-bs-theme="light" />
                    </div>
                    <div>
                        <select>
                            <optgroup>Catégories</optgroup>
                        </select>
                    </div>
                    <div>
                        <select>
                            <optgroup>Spécifications</optgroup>
                        </select>
                    </div>
                </div>

                <div class="d-flex">
                    <button class="btn btn-transparent btn-sm link-light border-dark-subtle" style="margin-right: 5px;"
                        type="button">
                        <svg class="text-dark" xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                            height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                            </path>
                        </svg>
                    </button>

                    <!-- <button class="btn btn-primary btn-sm  link-light border-0" style="margin-right: 5px;" type="button">Réq</button> -->

                    <button class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center" type="button"
                        data-bs-target="#article-form" data-bs-toggle="modal"
                        ref="myButtonAdd"><span>Ajouter</span></button>
                </div>
            </div>
            <div class="table-responsive" style="overflow: inherit;">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th id="cell_id">
                                <input type="checkbox" name="select">
                            </th>
                            <th id="cell_name">Nom de l&#39;article</th>
                            <th id="cell_cat" class="d-none d-sm-table-cell">Categorie</th>
                            <th id="cell_spec" class="d-none d-md-table-cell">Spécification</th>
                            <th id="cell_price" class="d-none d-lg-table-cell">Prix unitaire</th>
                            <th id="cell_price" class="d-none d-lg-table-cell">Stock disponible</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(article, index) in articles.data" :key="index">
                            <td>
                                <input type="checkbox" name="select">
                            </td>
                            <td>
                                <a :href="'/articles/article?id=' + article.id"
                                    class="text-capitalize link-body-emphasis link-opacity-75"
                                    style="text-decoration: none;">
                                    {{ article.nom }}
                                </a>
                            </td>
                            <td class="text-capitalize d-none d-sm-table-cell">
                                <a :href="'/articles/article?id=' + article.id"
                                    class="text-capitalize link-body-emphasis link-opacity-75"
                                    style="text-decoration: none;">
                                    {{ article.catNom }}
                                </a>
                            </td>
                            <td class="text-capitalize d-none d-md-table-cell">
                                <a :href="'/articles/article?id=' + article.id"
                                    class="text-capitalize link-body-emphasis link-opacity-75"
                                    style="text-decoration: none;">
                                    {{ article.specNom }}
                                </a>
                            </td>
                            <td class="text-capitalize d-none d-lg-table-cell">
                                <a :href="'/articles/article?id=' + article.id"
                                    class="text-capitalize link-body-emphasis link-opacity-75"
                                    style="text-decoration: none;">
                                    {{ article.prix }} {{ article.devise == 'USD' ? '$' : 'Fc' }}
                                </a>
                            </td>
                            <td class="d-none d-lg-table-cell">
                                <a :href="'/articles/article?id=' + article.id"
                                    class="text-capitalize link-body-emphasis link-opacity-75"
                                    style="text-decoration: none;">
                                    {{ article.qtte ? article.qtte : '0' }} article{{
                                        article.qtte !== null || 0 ? 's' : '' }}
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <Pagination :myDatas="articles"></Pagination>
            </div>
        </div>
    </div>

    <!-- formulaire de gestion d'article -->
    <div id="article-form" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Nouvel article</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <div class="row">
                        <div class="col">
                            <form method="post" @submit.prevent="submit(form)">
                                <div class="mb-2">
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">
                                        <input id="nom" v-model="form.nom" class="bg-transparent border-0 form-control-sm"
                                            type="text" style="width: 100%;outline: none;" name="nom"
                                            placeholder="Nom de l&#39;article" />
                                    </div><span class="text-primary" v-if="form.errors.nom" style="font-size: 13px;">{{
                                        form.errors.nom }}</span>
                                </div>

                                <div class="mb-2">
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">

                                        <select class="bg-transparent border-0 shadow-none" v-model="form.categorie"
                                            style="height: 31px;width: 100%;overflow: hidden;outline: none;"
                                            name="categorie">
                                            <optgroup label="Catégorie">Catégorie</optgroup>
                                            <option v-for="categorie in categories" :value="categorie.id">
                                                {{ categorie.nom }}
                                            </option>
                                        </select>

                                    </div><span v-if="form.errors.categorie" class="text-primary"
                                        style="font-size: 13px;">{{ form.errors.categorie }}</span>
                                </div>

                                <div class="mb-2" v-if="form.categorie">
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">

                                        <select class="bg-transparent border-0 shadow-none" v-model="form.specification"
                                            style="height: 31px;width: 100%;overflow: hidden;outline: none;"
                                            name="specification">
                                            <optgroup label="Spécification">Spécification</optgroup>
                                            <option v-for="specification in getSpecs(form.categorie)"
                                                :value="specification[0]">
                                                {{ specification[1] }}
                                            </option>
                                        </select>

                                    </div><span v-if="form.errors.specification" class="text-primary"
                                        style="font-size: 13px;">{{ form.errors.specification }}</span>
                                </div>

                                <div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary btn-sm link-light border-0"
                                            :disabled="form.processing" type="submit">Enregistrer</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="article-vide" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Erreur</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Cet article n&#39;est pas dans le stock. Veuillez passer une réquisition.</p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-end"><button
                        class="btn btn-primary btn-sm link-light border-0" type="button" data-bs-target="#article-vide"
                        data-bs-toggle="modal">Fermer</button></div>
            </div>
        </div>
    </div>
</template>

<script>

import Header from '../../Components/Header/Header.vue';
import { useForm, Link, router } from "@inertiajs/vue3";
import Pagination from './Pagination.vue';

export default {

    components: { Header, Pagination, Link },

    props: ['categories', 'specifications', 'articles', 'clients', 'message'],
    data() {
        return {
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
            paymentForm: useForm({
                price: 5,
                product_name: 'Laptop',
                quantity: 1
            }),
            selected: true,
            client: {
                client_id: null
            },
            my_articles: [],

            paymentForm: {
                price: 5,
                product_name: 'Laptop',
                quantity: 1
            },
            search: ""

        }
    },
    watch: {
        search() {
            this.$inertia.get('/articles', {
                search: this.search
            }, {
                preserveState: true,
                replace: true
            })
        }
    },

    

    mounted() {
        // console.log(this.articles);
    },

    methods: {
        getSpecs(cat_id) {
            let array = []
            for (let i = 0; i < this.specifications.length; i++) {
                if (this.specifications[i].categorie_id == cat_id) {
                    array.push([
                        this.specifications[i].id,
                        this.specifications[i].nom
                    ])
                }
            }
            return array
        },

        submit(form) {
            router.post('/articles', form, {
                onSuccess: () => {
                    this.$refs.myButtonAdd.click()
                    form.reset()
                }
            }
            )
        },

        submit_payment() {
            router.post('paypal', this.paymentForm)
        }
    },

}



</script>