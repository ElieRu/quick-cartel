<template>
    <div id="panier" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Visualisation</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <div class="row d-flex flex-column flex-lg-row">



                        <div class="col">
                            <div class="mb-3">
                                <div v-for="image in article.images">
                                    <img v-if="image.default" class="border rounded border-0 mb-2"
                                        :src="src ? '/storage/' + src : '/storage/' + image.image"
                                        style="width: 100%;height: 350px;" />
                                </div>
                                <div class="d-flex">
                                    <button v-for="image in article.images" @click="activeImg(image.image)"
                                        class="btn btn-primary bg-body-secondary border-0 shadow-none d-flex flex-column justify-content-center"
                                        type="button" style="width: 40px;height: 36px;margin-right: 10px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em"
                                            height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M512 32H160c-35.35 0-64 28.65-64 64v224c0 35.35 28.65 64 64 64H512c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM528 320c0 8.822-7.178 16-16 16h-16l-109.3-160.9C383.7 170.7 378.7 168 373.3 168c-5.352 0-10.35 2.672-13.31 7.125l-62.74 94.11L274.9 238.6C271.9 234.4 267.1 232 262 232c-5.109 0-9.914 2.441-12.93 6.574L176 336H160c-8.822 0-16-7.178-16-16V96c0-8.822 7.178-16 16-16H512c8.822 0 16 7.178 16 16V320zM224 112c-17.67 0-32 14.33-32 32s14.33 32 32 32c17.68 0 32-14.33 32-32S241.7 112 224 112zM456 480H120C53.83 480 0 426.2 0 360v-240C0 106.8 10.75 96 24 96S48 106.8 48 120v240c0 39.7 32.3 72 72 72h336c13.25 0 24 10.75 24 24S469.3 480 456 480z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>



                        <div id="col-description" class="col" style="overflow: hidden;">
                            <div id="div-cont-payment">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2"><span
                                            class="bg-body-secondary border rounded border-0 d-flex align-items-center"
                                            style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                height="1em" fill="currentColor" style="font-size: 12px;margin-right: 7px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                                </path>
                                            </svg><span style="font-size: 12px;">Les informations</span></span>
                                        <div :class="article.qtte > 0 ? 'bg-success border rounded-pill border-0' : 'bg-primary border rounded-pill border-0'"
                                            style="padding: 1px;padding-right: 10px;padding-left: 10px;font-size: 12px;">
                                            <span class="text-light" style="font-size: 11px;"> {{ article.qtte > 0 ?
                                                'Disponible' : 'Non disponible' }} </span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-2"><span
                                                style="font-size: 13px;">Nom de l&#39;article</span><span
                                                class="text-body-secondary" style="font-size: 13px;">{{ article.nom
                                                }}</span>
                                        </div>
                                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-2"><span
                                                style="font-size: 13px;">Catégorie</span><span class="text-body-secondary"
                                                style="font-size: 13px;">{{ article.nomCat }}</span></div>
                                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-2"><span
                                                style="font-size: 13px;">Spécification</span><span
                                                class="text-body-secondary" style="font-size: 13px;">{{ article.nomSpec
                                                }}</span></div>
                                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-2"><span
                                                style="font-size: 13px;">Prix</span><span class="text-body-secondary"
                                                style="font-size: 13px;">{{ article.prix + '$' }}</span></div>
                                        <div class="d-flex flex-column" v-if="article.description"><span
                                                style="font-size: 13px;">Description</span><span class="text-body-secondary"
                                                style="font-size: 13px;">{{ article.description }}</span></div>
                                    </div>
                                </div>


                                <div style="margin-bottom: 5px;"
                                    v-if="article.descriptions ? article.descriptions.length > 0 : ''">
                                    <div class="d-flex mb-2">
                                        <span class="bg-body-secondary border rounded border-0 d-flex align-items-center"
                                            style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                height="1em" fill="currentColor" style="font-size: 12px;margin-right: 7px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                                </path>
                                            </svg><span style="font-size: 12px;">Les détails</span></span>
                                    </div>

                                    <div class="mb-3">
                                        <div v-for="description in article.descriptions"
                                            class="d-flex flex-column flex-sm-row justify-content-sm-between mb-2">
                                            <span style="font-size: 13px;">{{ description.nom }}</span>
                                            <span class="text-body-secondary" style="font-size: 13px;">{{ description.valeur
                                            }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="btn-group dropup">
                                        <button class="btn btn-primary link-light border-0"
                                            type="button" :disabled="article.qtte > 0 ? false : true"
                                            style="padding-right: 15px;padding-left: 15px;font-size: 13px;">Acheter</button>
                                        <button
                                            class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split link-light"
                                            data-bs-toggle="dropdown" aria-expanded="false" type="button"></button>
                                        <div class="dropdown-menu border rounded border-0 shadow" style="padding: 10px;">
                                            <a id="item-dropdown" class="dropdown-item bg-transparent"
                                                href="#">Commander</a>
                                            <Link 
                                                :disabled="article.qtte > 0 ? false : true"
                                                id="item-dropdown"
                                                :class="article.qtte > 0 ? 'dropdown-item bg-transparent' : 'dropdown-item bg-primary-subtle'"
                                                href="#"
                                            >Réserver</Link>
                                        </div>
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

import { Link } from "@inertiajs/inertia";

export default {
    props: {
        article: ''
    },

    components: {
        Link
    },

    data() {
        return {
            src: ''
        }
    },

    methods: {
        activeImg(src) {
            this.src = src
        }
    },
}
</script>