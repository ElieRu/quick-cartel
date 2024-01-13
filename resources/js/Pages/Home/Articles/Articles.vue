<template>
    <div class="bg-body border rounded border-0 mb-4" style="padding: 10px;">

        <div class="d-flex justify-content-between" style="margin-bottom: 10px;">
            <span class="bg-body-secondary border rounded border-0 d-flex align-items-center"
                style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor"
                    style="font-size: 12px;margin-right: 7px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                    </path>
                </svg><span style="font-size: 12px;">Articles</span>
            </span>

            <a class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0 shadow-none" role="button"
                href="#">Plus</a>
        </div>


        <div id="div-articles" class="border rounded border-0" style="overflow-x: scroll;padding-bottom: 5px;">
            <div class="border-0 d-inline-flex">
                
                
                <div v-for="article in categorie" class="border rounded" style="width: 200px;height: 100%;margin-right: 15px;padding: 5px;">

                    <div class="border rounded border-0" style="height: 180px;overflow: overlay;cursor: pointer;"
                        @click="initialDataModal(article)" ref="monBouton" data-bs-target='#panier' data-bs-toggle="modal"  >
                        <img :src="'/storage/'+article.src" style="width:100%; height:100%;" />
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="height: 40px;margin-top: 10px;">
                        <div class="d-flex" style="width:100%;">
                            <div class="border rounded-circle" style="width: 40px;height: 40px;overflow: hidden;">
                                <Link 
                                    href="/account"
                                    method="get"
                                    :data="{ id: article.boutique_id }">
                                    
                                    <img style="width: 100%;height: 100%;" :src="article.logo == null ? '/images/img logo.jpg' : '/storage/' + article.logo " />
                                    
                                </Link>
                            </div>

                            <div style="margin-left: 5px;width:80%;">
                                <div class="d-flex justify-content-between" style="width:100%;">
                                    <span style="font-size: 13px;">{{ article.nom }}</span>
                                    <span>{{ article.prix + '$'}}</span>
                                </div>
                                <span class="text-body-tertiary" style="font-size: 11px;">{{ article.nomSpec }}</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <PaymentModal @close-modal="callback" :myUser="myUser" :contacts="contacts" :article="myArticle"></PaymentModal>

    </div>
</template>

<style scoped>
::-webkit-scrollbar {
    background: transparent;
    height: 10px;
}
</style>

<script>

import PaymentModal from './PaymentModal.vue'
import { Link } from '@inertiajs/vue3'

export default {
    components: {
        PaymentModal,
        Link
    },
    props: {
        categorie: Object,
        contacts: Object,
        myUser: Object
    },
    data() {
        return {
            myArticle: Object,
            panier: ''
        }
    },
    methods: {
        initialDataModal (article) {
            this.myArticle = article
            // console.log(this.myArticle);
        },
        callback () {
            this.$refs.monBouton.click()
        }
    },

    mounted() {
        console.log(this.myUser);
    }
}

</script>

