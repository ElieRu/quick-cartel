<template>
    <div id="all-promotions" class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 30px;">
        <div v-if="promotions.length == 0" class="d-flex flex-column justify-content-center align-items-center"
            style="margin-top: 10px;height: 240px;"><svg class="fs-3 mb-2" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M480 179.6C498.6 188.4 512 212.1 512 240C512 267.9 498.6 291.6 480 300.4V448C480 460.9 472.2 472.6 460.2 477.6C448.3 482.5 434.5 479.8 425.4 470.6L381.7 426.1C333.7 378.1 268.6 352 200.7 352H192V480C192 497.7 177.7 512 160 512H96C78.33 512 64 497.7 64 480V352C28.65 352 0 323.3 0 288V192C0 156.7 28.65 128 64 128H200.7C268.6 128 333.7 101 381.7 53.02L425.4 9.373C434.5 .2215 448.3-2.516 460.2 2.437C472.2 7.39 480 19.06 480 32V179.6zM200.7 192H192V288H200.7C280.5 288 357.2 317.8 416 371.3V108.7C357.2 162.2 280.5 192 200.7 192V192z">
                </path>
            </svg>
            <div class="text-center d-flex flex-column"><button ref="formPromotions"
                    class="btn btn-primary btn-sm link-body-emphasis link-opacity-50 bg-transparent border-0 shadow-none d-flex flex-column align-items-center"
                    type="button" style="font-size: 13px;" data-bs-target="#form-promotion"
                    data-bs-toggle="modal"><span>Ajouter</span><span>une promotion</span></button></div>
        </div>
        <FormPromotions @hide-form="hideForm" :article="article"></FormPromotions>
        <ListPromotions :promotions="promotions"></ListPromotions>

        <div v-if="promotions.length >= 3" class="d-flex justify-content-end">
            <Link method="get" as="button" href="/promotions" :data="{ article_id: article.id }"    
                class="btn btn-primary btn-sm link-dark link-opacity-75 bg-transparent border-0 shadow-none" role="button">
            Plus</Link>
        </div>
    </div>
</template>

<script>

import ListPromotions from './ListPromotions.vue'
import FormPromotions from './FormPromotions.vue'
import { Link } from "@inertiajs/vue3"

export default {
    components: {
        ListPromotions,
        FormPromotions,
        Link
    },
    props: {
        article: Object,
        promotions: Object
    },
    mounted() {
        // console.log(this.promotions);
    },
    methods: {
        hideForm() {
            this.$refs.formPromotions.click()
        }
    },
}
</script>