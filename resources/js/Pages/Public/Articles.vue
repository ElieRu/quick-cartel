<template>
    <Header></Header>
    <div class="container" style="padding-top: 30px;">
        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div>
                <div class="d-flex justify-content-end mb-3">
                    <div class="border rounded d-flex align-items-center" style="padding-left: 7px;width: 160px;"><i
                            class="fas fa-search text-body-secondary"></i><input
                            class="bg-transparent border-0 shadow-none form-control-sm" type="search"
                            placeholder="Recherche" style="width: 100%;outline: none;" /></div>
                </div>
                <div>
                    <div class="row g-0" style="margin-right: -5px;">
                        <div v-for="article in articles" class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex flex-grow-0"
                            style="padding: 0px;">
                            <div class="bg-body-tertiary border rounded"
                                style="height: 96%;width: 97%;cursor: pointer;padding: 5px;padding-bottom: 15px;">

                                <div class="border rounded border-0 d-flex justify-content-center mb-2"
                                    style="overflow: hidden;height: 210px;">

                                    <img v-if="article.image !== null" class="rounded" :src="'/storage/' + article.image"
                                        style="width: 100%;height: 100%;" />

                                    <div v-if="article.image == null"
                                        class="d-flex justify-content-center align-items-center"
                                        style="width: 100%;height: 100%;">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-body-secondary"
                                            viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor"
                                            style="font-size: 110px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M512 32H160c-35.35 0-64 28.65-64 64v224c0 35.35 28.65 64 64 64H512c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM528 320c0 8.822-7.178 16-16 16h-16l-109.3-160.9C383.7 170.7 378.7 168 373.3 168c-5.352 0-10.35 2.672-13.31 7.125l-62.74 94.11L274.9 238.6C271.9 234.4 267.1 232 262 232c-5.109 0-9.914 2.441-12.93 6.574L176 336H160c-8.822 0-16-7.178-16-16V96c0-8.822 7.178-16 16-16H512c8.822 0 16 7.178 16 16V320zM224 112c-17.67 0-32 14.33-32 32s14.33 32 32 32c17.68 0 32-14.33 32-32S241.7 112 224 112zM456 480H120C53.83 480 0 426.2 0 360v-240C0 106.8 10.75 96 24 96S48 106.8 48 120v240c0 39.7 32.3 72 72 72h336c13.25 0 24 10.75 24 24S469.3 480 456 480z">
                                            </path>
                                        </svg>
                                    </div>

                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex justify-content-between" style="width: 100%;">
                                        <span style="font-size: 13px;" class="text-capitalize">{{ article.nom }}</span>
                                        <span style="font-size: 13px;text-align: end;" class="fw-bolder"></span>

                                        <span
                                            :class="article.prix ? 'text-light border rounded-pill border-0 fw-bolder bg-success' : 'text-light border rounded-pill border-0 bg-danger'"
                                            style="padding-top: 2px;padding-bottom: 2px;padding-right: 10px;padding-left: 10px;font-size: 10px;">
                                            {{ article.prix ? article.prix + ' $' : 'Non définie' }}</span>

                                    </div>
                                    <div class="d-flex flex-column">
                                        <span class="text-body-tertiary" style="font-size: 11px;">{{ article.nomSpec
                                        }}</span>
                                        <span style="font-size: 13px;text-decoration: none;text-align: end;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
    
<script>
import Header from '../../Components/Header/Header.vue';

export default {
    props: {
        articles: Object
    },
    methods: {
        prixClass(val) {
            return 'text-light border rounded-pill border-0 ' + val ? +'bg-danger' : 'bg-success'
        }
    },
    mounted() {
        console.log(this.articles);
    },
    components: {
        Header
    }
}

</script>