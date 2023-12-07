<template>
    <Header></Header>

    
    <form @submit.prevent="submit_payment(paymentForm)" method="post" style="margin-top: 10px;">
        <input type="hidden" name="price" v-model="paymentForm.price"> <br>
        <input type="hidden" name="product_name" v-model="paymentForm.product_name"> <br>
        <input type="hidden" name="quantity" v-model="paymentForm.quantity"> <br>
        <button submit>Pay</button>
    </form>



    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Gestion d&#39;articles</h4>
        </div>
        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-end">
                    <div class="bg-body-secondary border rounded-pill border-0"><input class="bg-transparent border-0"
                            type="search" style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;"
                            placeholder="Recherche" data-bs-theme="light" /></div>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center" type="button"
                        data-bs-target="#article-form" data-bs-toggle="modal"
                        ref="myButtonAdd"><span>Ajouter</span></button>
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
                                <!-- <input type="checkbox" @input="addPanier(article)" name="select"> -->
                                {{ index + 1 }}
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
                                <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                        for="nom">Nom de l&#39;article</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">
                                        <input id="nom" v-model="form.nom" class="bg-transparent border-0 form-control-sm"
                                            type="text" style="width: 100%;outline: none;" name="nom"
                                            placeholder="Nom de l&#39;article" />
                                    </div><span class="text-primary" v-if="form.errors.nom" style="font-size: 13px;">{{
                                        form.errors.nom }}</span>
                                </div>

                                <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                        for="categorie">Catégorie</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">

                                        <select class="bg-transparent border-0 shadow-none" v-model="form.categorie"
                                            style="height: 31px;width: 100%;overflow: hidden;outline: none;"
                                            name="categorie">
                                            <option v-for="categorie in categories" :value="categorie.id">{{ categorie.nom
                                            }}</option>
                                        </select>

                                    </div><span v-if="form.errors.categorie" class="text-primary"
                                        style="font-size: 13px;">{{ form.errors.categorie }}</span>
                                </div>

                                <div class="mb-2" v-if="form.categorie"><label class="form-label"
                                        style="font-size: 12px;margin-bottom: 2px;"
                                        for="specification">Spécification</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">

                                        <select class="bg-transparent border-0 shadow-none" v-model="form.specification"
                                            style="height: 31px;width: 100%;overflow: hidden;outline: none;"
                                            name="specification">
                                            <option v-for="specification in getSpecs(form.categorie)"
                                                :value="specification[0]">
                                                {{ specification[1] }}
                                            </option>
                                        </select>

                                    </div><span v-if="form.errors.specification" class="text-primary"
                                        style="font-size: 13px;">{{ form.errors.specification }}</span>
                                </div>

                                <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                        for="prix">Prix unitaire</label>
                                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                        style="overflow: hidden;">
                                        <input v-model="form.prix" class="bg-transparent border-0 shadow-none form-control"
                                            type="number" style="width: 80%;outline: none;height: 31px;padding-left: 10px;"
                                            name="prix" placeholder="Prix unitaire" min="0" />

                                        <select v-model="form.devise"
                                            class="bg-transparent border-0 shadow-none form-select"
                                            style="width: 20%;outline: none;" name="devise">
                                            <option value="USD">USD</option>
                                            <option value="CDF">CDF</option>
                                        </select>
                                    </div><span class="text-primary" style="font-size: 13px;"
                                        v-if="form.errors.prix || form.errors.devise">Montant ou devise non precisé</span>
                                </div>
                                <div>
                                    <div style="display: flex; justify-content: space-between;">
                                        <button class="btn btn-primary btn-sm link-light border-0"
                                            :disabled="form.processing" type="submit">{{ form.id
                                                ? 'Modifier' : 'Enregistrer' }}</button>
                                        <button @click.prevent="form.reset()"
                                            style="border: none; background: transparent;">Vider de formulaire</button>
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

export default {
    setup(props) {

        const form = useForm({
            // id: null,
            nom: null,
            categorie: null,
            specification: null,
            prix: null,
            devise: null,
            boutique_id: null
        })

        let clients = props.clients

        const painerForm = useForm({
            nom: null,
            qtte: null,
            prix: null,
            devise_id: null,
        })

        const paymentForm = useForm({
            price: 5,
            product_name: 'Laptop',
            quantity: 1
        })

        return { form, painerForm, paymentForm }
    },

    components: { Header },

    props: ['categories', 'specifications', 'articles', 'clients', 'message'],

    data() {
        return {
            selected: true,
            client: {
                client_id: null
            },
            my_articles: [],

            paymentForm: {
                price: 5,
                product_name: 'Laptop',
                quantity: 1
            }
        }
    },

    mounted() {
        console.log(this.articles);
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

        vider() {
            form.nom = ""
            form.categorie = ""
            form.specification = ""
            form.prix = ""
            form.devise = ""
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