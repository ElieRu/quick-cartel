<template>
    <div id="recoverInformations" class="modal fade" role="dialog" tabindex="-1" data-bs-backdrop="static">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable modal-fullscreen-lg-down" role="document">
        <div class="modal-content" style="background: transparent;">
            <div class="modal-body border-0 shadow-lg" style="height: 500px;">
                <div id="recoverAllMyInfos" class="carousel slide" data-bs-ride="false" data-bs-pause="false" data-bs-wrap="false" data-bs-keyboard="false" data-bs-touch="false" style="width: 100%;height: 100%;overflow: hidden;">
                    <div class="carousel-inner" style="width: 100%;height: 100%;">
                        <div id="item-slide" class="carousel-item active">
                            <div id="div-content-recover-infos" class="d-flex flex-column align-items-center flex-md-row">
                                <div id="div-left-icon" class="d-flex flex-column justify-content-end align-items-center justify-content-md-center"><img id="img-pub-register" src="images/data-analysis.png" /></div>
                                <div id="type-more-informations">
                                    <div id="call-btn-submit">
                                        <div class="text-center" style="width: 90%;margin: auto;">
                                            <div class="d-none d-md-flex justify-content-center mb-4"><img src="images/profile-picture.png" style="width: 50px;height: 50px;" /></div>
                                            <div id="div-gradient" class="d-none d-md-flex justify-content-sm-center">
                                                <h4 class="mb-4" style="font-family: 'Croissant One', serif;font-weight: bold;">Type de compte</h4>
                                            </div>
                                            <div>
                                                <p class="justify-content-center">Le compte consommateur permet de passer des  commandes ou des achats en ligne, tandis que le compte entreprise vous offre un espace pour gérer vos articles, suivre les ventes et analyser les données.</p>
                                            </div>
                                            <div>
                                                <div class="dropdown d-flex justify-content-center mt-4 mb-3"><button class="btn btn-primary btn-lg dropdown-toggle link-light bg-primary border rounded-pill border-0 shadow" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="font-size: 15px;padding-right: 25px;padding-left: 25px;outline: none;">  Créer un compte pour  </button>
                                                    <div class="dropdown-menu border rounded shadow" style="padding: 0px;">
                                                        <a id="item-dropdown" class="dropdown-item" @click="typeAccount(false)" href="#recoverAllMyInfos" role="button" data-bs-slide="next">un consommateur<span class="d-none carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Text</span></a>
                                                        <a id="item-dropdown" class="dropdown-item" @click="typeAccount(true)" href="#recoverAllMyInfos" role="button" data-bs-slide="next">une entreprise<span class="d-none carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Text</span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="item-slide" class="carousel-item">
                            <div id="div-content-recover-infos" class="d-flex">
                                <div class="row g-0" style="width: 100%;">
                                    <div class="col-6 d-none d-md-block" style="height: 100%;">
                                        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100%;width: 100%;"><img id="your-article-img" src="images/shopping-delivery.png" /></div>
                                    </div>
                                    <div class="col-12 col-md-6" style="height: 100%;">
                                        <div class="d-flex flex-column justify-content-between" style="height: 100%;width: 100%;">
                                            <div id="divTitle">
                                                <div id="div-gradient">
                                                    <h4 class="fw-bold" style="font-family: 'Croissant One', serif;">Quels articles offrez-vous?</h4>
                                                </div><span>Personnalisez votre profil et permettez aux autres de reconnaître les articles que vous proposez habituellement.</span>
                                            </div>
                                            <div id="divContent" class="d-block" style="padding-right: 5px;">
                                                <label v-for="offer in offers" id="label-article-entreprise" class="form-label d-flex justify-content-between align-items-center" for="check-1">
                                                    <span class="d-flex">
                                                        <input id="check-1" type="radio" name="article" />
                                                        <span class="d-flex flex-column" style="margin-left: 15px;">
                                                            <span style="font-size: 14px;margin-bottom: 8px;">Des habits pour les femmes.</span>
                                                            <span style="font-size: 12px;">Je ne sais pas ce que je vends</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div id="divSubmit" class="d-flex justify-content-end align-items-end" style="margin-top: 10px;"><a id="btn-next-slide" class="btn btn-primary btn-lg link-light border rounded-pill border-0" role="button" href="#recoverAllMyInfos" data-bs-slide="next">Suivant<span class="d-none carousel-control-next" aria-hidden="true">Text</span><span class="visually-hidden">Text</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="item-slide" class="carousel-item">
                            <div id="div-content-recover-infos" class="d-flex">
                                <div class="d-none d-md-flex flex-column justify-content-center align-items-center" style="width: 50%;"><img src="images/trail-map.png" style="width: 320px;height: 130px;" /></div>
                                <div id="type-more-informations-location" class="text-center d-flex flex-column justify-content-center">
                                    <div style="/*height: 90%;*/">
                                        <div class="d-flex flex-column mb-4">
                                            <div class="mb-2"><img src="images/location-marker.png" style="width: 50px;height: 50px;" /></div>
                                            <div id="div-gradient">
                                                <h4 class="fw-bold" style="font-family: 'Croissant One', serif;">Où sera situé votre entreprise?</h4>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="justify-content-center">La localisation de votre entreprise contribuera non seulement à renforcer la confiance, mais aussi à construire une meilleure interaction avec vos consommateurs.</p>
                                        </div>
                                        <div id="div-input-location" class="d-flex flex-column"><label class="form-label text-start" for="input-ville">Ville / Région</label>
                                            <div class="border rounded d-flex flex-row align-items-center" style="height: 40px;padding: 2px;"><i class="fas fa-map-marker-alt text-primary" style="font-size: 17px;margin-right: 10px;margin-left: 7px;"></i><input id="input-ville" class="bg-transparent border-0 shadow-none" type="search" style="height: 100%;width: 100%;outline: none;" placeholder="Cherchez votre ville" /></div><span class="text-start text-primary mt-1">Formulaire incorrecte</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center" style="position: absolute;bottom: 0px;right: 0px;"><a id="btn-next-slide-confit" class="btn btn-primary btn-lg link-light border rounded-pill border-0" role="button" href="#recoverAllMyInfos" data-bs-slide="next" @click="callConfettiAction()">Suivant<span class="d-none carousel-control-next" aria-hidden="true">Text</span><span class="visually-hidden">Text</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div id="item-slide" class="carousel-item">
                            <div id="div-content-recover-infos" class="d-flex justify-content-center">
                                <div id="div-cont-welcom">
                                    <div id="call-btn-submit" class="d-flex flex-column">
                                        <div id="div-label-welcom" class="text-center">
                                            <div class="d-flex justify-content-center mb-4"><svg class="text-body-emphasis" xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" style="font-size: 50px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path d="M414.8 40.79L286.8 488.8C281.9 505.8 264.2 515.6 247.2 510.8C230.2 505.9 220.4 488.2 225.2 471.2L353.2 23.21C358.1 6.216 375.8-3.624 392.8 1.232C409.8 6.087 419.6 23.8 414.8 40.79H414.8zM518.6 121.4L630.6 233.4C643.1 245.9 643.1 266.1 630.6 278.6L518.6 390.6C506.1 403.1 485.9 403.1 473.4 390.6C460.9 378.1 460.9 357.9 473.4 345.4L562.7 256L473.4 166.6C460.9 154.1 460.9 133.9 473.4 121.4C485.9 108.9 506.1 108.9 518.6 121.4V121.4zM166.6 166.6L77.25 256L166.6 345.4C179.1 357.9 179.1 378.1 166.6 390.6C154.1 403.1 133.9 403.1 121.4 390.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4L121.4 121.4C133.9 108.9 154.1 108.9 166.6 121.4C179.1 133.9 179.1 154.1 166.6 166.6V166.6z"></path>
                                                </svg></div>
                                            <div id="div-gradient" class="d-flex flex-column align-items-center mb-4">
                                                <h1 class="fw-bold" style="font-family: 'Croissant One', serif;">Bienvenue sur mktPlace <img src="images/confetti.png" width="154" height="128" style="height: 30px;width: 30px;" /></h1>
                                                <p class="justify-content-center"> Vous l&#39;avez fait. Personnaliser et ajouter vos articles. </p>
                                            </div>
                                            <div></div>
                                            <div class="mt-4"><button id="btn-next-slide" class="btn btn-primary btn-lg link-light border rounded-pill border-0 shadow" type="button" data-bs-slide="next" style="outline: none;">Consultez votre compte<span class="d-none carousel-control-next" aria-hidden="true">Text</span><span class="visually-hidden">Text</span></button></div>
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
</div>

</template>

<script>

import decisionRegistration from "./decision-registration.vue"
import spinner from '../../globalComponents/spinner.vue'


export default {
    props: ['href', 'dataBsSlide'],
    components: {
        decisionRegistration,
        spinner
    },

    data() {
        return {
            more: {
                type: Boolean,
            },
            offers: []
        }
    },

    mounted () {},

    computed: {},

    methods: {
        typeAccount (type) {
            this.more.type = type
            console.log("type : " + this.more.type)
        },

        async accountArticlesOffers () {
            await axios.get(`api/articlesOffers`)
            .then((resp) => {
                this.offers = resp.data
            })
            console.log(this.offers)
        },

        callConfettiAction () {
           // start
            const start = () => {
                setTimeout(function() {
                    confetti.start()
                }, 500); // 1000 is time that after 1 second start the confetti ( 1000 = 1 sec)
            };

            //  Stop
            const stop = () => {
                setTimeout(function() {
                    confetti.stop()
                }, 5000); // 5000 is time that after 5 second stop the confetti ( 5000 = 5 sec)
            };

            start();
            stop();
        }
    }
}

</script>
