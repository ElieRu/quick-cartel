<template>
    <Header></Header>
    <div class="container" style="margin-top: 30px;">
        <div>
            <h4 class="text-body-tertiary">Promotions</h4>
        </div>
        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div>
                <div class="d-flex justify-content-end mb-3">
                    <div class="border rounded d-flex align-items-center" style="padding-left: 7px;width: 160px;"><i
                            class="fas fa-search text-body-secondary"></i><input v-model="search"
                            class="bg-transparent border-0 shadow-none form-control-sm" type="search"
                            placeholder="Recherche" style="width: 100%;outline: none;" /></div>
                </div>
                <div>
                    <div class="row g-0" style="margin-right: -10px;">

                        <Link 
                            v-for="promotion in promotions" 
                            class="col-12 col-sm-6 col-md-4 col-lg-3 flex-grow-0 border-0 bg-transparent"
                            style="padding: 0px; outline:none;"
                            
                            as="button"
                            method="get"
                            href="/promotions/promotion"
                            :data="{ id: promotion.idPromo }" 

                            >
                            <div class="bg-body-tertiary border rounded"
                                style="height: 96%;width: 97%;cursor: pointer;padding: 5px;padding-bottom: 15px;">
                                
                                <div class="border rounded border-0 d-flex justify-content-center mb-2"
                                    style="overflow: hidden;height: 210px;">

                                    <img v-if="promotion.image !== null" class="rounded"
                                        :src="'/storage/' + promotion.image" style="height:100%;width:100%" />

                                    <div v-if="promotion.image == null" class="d-flex justify-content-center align-items-center"
                                        style="width: 100%;height: 100%;">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="text-body-secondary"
                                            viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor"
                                            style="font-size: 110px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M512 32H160c-35.35 0-64 28.65-64 64v224c0 35.35 28.65 64 64 64H512c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM528 320c0 8.822-7.178 16-16 16h-16l-109.3-160.9C383.7 170.7 378.7 168 373.3 168c-5.352 0-10.35 2.672-13.31 7.125l-62.74 94.11L274.9 238.6C271.9 234.4 267.1 232 262 232c-5.109 0-9.914 2.441-12.93 6.574L176 336H160c-8.822 0-16-7.178-16-16V96c0-8.822 7.178-16 16-16H512c8.822 0 16 7.178 16 16V320zM224 112c-17.67 0-32 14.33-32 32s14.33 32 32 32c17.68 0 32-14.33 32-32S241.7 112 224 112zM456 480H120C53.83 480 0 426.2 0 360v-240C0 106.8 10.75 96 24 96S48 106.8 48 120v240c0 39.7 32.3 72 72 72h336c13.25 0 24 10.75 24 24S469.3 480 456 480z">
                                            </path>
                                        </svg></div>

                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex">
                                        <div class="d-flex flex-column justify-content-center text-capitalize"><span
                                                style="font-size: 13px;">{{ promotion.nomArticle }}</span><span
                                                class="text-body-tertiary d-flex justify-content-start text-capitalize" style="font-size: 11px;">{{
                                                    promotion.nomPromotion }}</span></div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div>
                                            <span class="text-primary"
                                                style="font-size: 13px;text-decoration: line-through;">
                                                {{ promotion.prix }}$
                                            </span>
                                            <span> ({{ promotion.montantReduction ? '-' + promotion.montantReduction + '$' :
                                                '-' + promotion.pourcentage + '%' }})
                                            </span>
                                        </div>
                                        <span class="fw-bold d-flex justify-content-end" style="font-size: 13px;">
                                            {{ promotion.prixPromotion }}$
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </Link>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<style scoped>
::-webkit-scrollbar {
    background: transparent;
    height: 10px;
}
</style>

<script>
import Header from '../../Components/Header/Header.vue';
import { Link } from '@inertiajs/vue3';
export default {
    components: {
        Header,
        Link
    },
    props: {
        promotions: Object
    },
    data() {
        return {
            search: ""
        }
    },
    watch: {
        search() {
            this.$inertia.get('/promotions', {
                search: this.search
            }, {
                preserveState: true,
                replace: true,
                preserveScroll: true,
            })
        }
    },
    mounted() {
        console.log(this.promotions);
    },
}

</script>