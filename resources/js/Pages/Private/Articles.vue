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
                    <!-- <div>
                        <select>
                            <optgroup>Catégories</optgroup>
                        </select>
                    </div>
                    <div>
                        <select>
                            <optgroup>Spécifications</optgroup>
                        </select>
                    </div> -->
                </div>

                <div class="d-flex">
                    
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
                                <!-- <input type="checkbox" name="select"> -->
                                #
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
                                {{ index+1 }}
                                <!-- <input type="checkbox" @input="isChecked(article.id)" :id="'article' + article.id"> -->
                                <!-- <input type="checkbox"> -->
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


    <!-- <DeteleModal></DeteleModal> -->


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
import DeteleModal from './DeteleModal.vue';

export default {

    components: { Header, Pagination, Link, DeteleModal },

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
            clientsDelete: useForm({
                id: null
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
            listClientDelete: [],
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
        // isChecked(article) {
        //     let index = this.listClientDelete.indexOf(article);
        //     if (index === -1) {
        //         this.listClientDelete.push(article);
        //     } else {
        //         this.listClientDelete.splice(index, 1);
        //     }
        // },
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