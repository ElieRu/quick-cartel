<template>
    <div class="bg-body border rounded border-0 shadow mb-4" style="padding: 10px;">
        <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span
                class="bg-body-secondary border rounded border-0 d-flex align-items-center"
                style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor"
                    style="font-size: 12px;margin-right: 7px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M13.97 2.196C22.49-1.72 32.5-.3214 39.62 5.778L80 40.39L120.4 5.778C129.4-1.926 142.6-1.926 151.6 5.778L192 40.39L232.4 5.778C241.4-1.926 254.6-1.926 263.6 5.778L304 40.39L344.4 5.778C351.5-.3214 361.5-1.72 370 2.196C378.5 6.113 384 14.63 384 24V488C384 497.4 378.5 505.9 370 509.8C361.5 513.7 351.5 512.3 344.4 506.2L304 471.6L263.6 506.2C254.6 513.9 241.4 513.9 232.4 506.2L192 471.6L151.6 506.2C142.6 513.9 129.4 513.9 120.4 506.2L80 471.6L39.62 506.2C32.5 512.3 22.49 513.7 13.97 509.8C5.456 505.9 0 497.4 0 488V24C0 14.63 5.456 6.112 13.97 2.196V2.196zM96 144C87.16 144 80 151.2 80 160C80 168.8 87.16 176 96 176H288C296.8 176 304 168.8 304 160C304 151.2 296.8 144 288 144H96zM96 368H288C296.8 368 304 360.8 304 352C304 343.2 296.8 336 288 336H96C87.16 336 80 343.2 80 352C80 360.8 87.16 368 96 368zM96 240C87.16 240 80 247.2 80 256C80 264.8 87.16 272 96 272H288C296.8 272 304 264.8 304 256C304 247.2 296.8 240 288 240H96z">
                    </path>
                </svg><span style="font-size: 12px;">Les informations</span></span><span></span></div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Désignation</span></div>
            <div class="col d-flex justify-content-sm-end"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ informations.nom }}</span></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Catégorie</span>
            </div>
            <div class="col" style="text-align: right;"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ informations.nomCat }}</span></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Spécification</span></div>
            <div class="col" style="text-align: right;"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ informations.nomSpec }}</span></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Prix
                    unitaire</span></div>
            <div class="col" style="text-align: right;"><span
                    class="text-capitalize text-primary d-flex justify-content-sm-end"
                    style="font-size: 13px;font-weight: bold;text-decoration: line-through;">{{ informations.prix }}$</span>
            </div>
        </div>
        <div class="row row-cols-1 mb-2" v-if="informations.description">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Déscription</span></div>
            <div class="col"><span style="font-size: 13px;">{{ informations.description }}</span></div>
        </div>
        <button v-if="!user" data-bs-toggle="modal" data-bs-target="#modal-nouveau-compte" class="btn btn-primary btn-sm text-light">
            Acheter
        </button>
    </div>
    
    <NouveauCompte v-if="!user"></NouveauCompte>

</template>

<script>

import NouveauCompte from '../Modals/NouveauCompte.vue'

export default {
    components: {
        NouveauCompte
    },
    props: {
        informations: Object,
        user: ''
    },
    mounted() {
        // console.log(this.user);
    },
    methods: {},
}
</script>