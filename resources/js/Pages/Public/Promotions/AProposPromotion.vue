<template>
    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
        <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span
                class="bg-body-secondary border rounded border-0 d-flex align-items-center"
                style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor"
                    style="font-size: 12px;margin-right: 7px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M480 179.6C498.6 188.4 512 212.1 512 240C512 267.9 498.6 291.6 480 300.4V448C480 460.9 472.2 472.6 460.2 477.6C448.3 482.5 434.5 479.8 425.4 470.6L381.7 426.1C333.7 378.1 268.6 352 200.7 352H192V480C192 497.7 177.7 512 160 512H96C78.33 512 64 497.7 64 480V352C28.65 352 0 323.3 0 288V192C0 156.7 28.65 128 64 128H200.7C268.6 128 333.7 101 381.7 53.02L425.4 9.373C434.5 .2215 448.3-2.516 460.2 2.437C472.2 7.39 480 19.06 480 32V179.6zM200.7 192H192V288H200.7C280.5 288 357.2 317.8 416 371.3V108.7C357.2 162.2 280.5 192 200.7 192V192z">
                    </path>
                </svg><span style="font-size: 12px;">A propos de la
                    promotion </span></span><span></span></div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Nom</span></div>
            <div class="col d-flex justify-content-sm-end"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ promotion.nom }}</span></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Date de
                    début</span></div>
            <div class="col d-flex justify-content-sm-end"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ promotion.dateDebut }}</span></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Date de
                    fin</span></div>
            <div class="col d-flex justify-content-sm-end"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ promotion.dateFin }}</span></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Type</span></div>
            <div class="col d-flex justify-content-sm-end"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ promotion.type }}</span></div>
        </div>
        <div v-if="promotion.type == 'Rémise en pourcentage'" class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Pourcentage</span></div>
            <div class="col" style="text-align: right;"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">-{{ promotion.pourcentage }}%</span></div>
        </div>
        <div v-if="promotion.type == 'Réduction forfaitaire'" class="row row-cols-1 row-cols-sm-2 mb-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Montant de réduction</span></div>
            <div class="col" style="text-align: right;"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">-{{ promotion.montantReduction }}$</span></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Prix
                    promotionnelle</span></div>
            <div class="col" style="text-align: right;"><span
                    class="text-capitalize fw-bold text-success d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ promotion.prixPromotion }}$</span></div>
        </div>
        <div class="row row-cols-1 mb-2" v-if="promotion.description">
            <div class="col"><span class="text-body-tertiary" style="font-size: 13px;">Déscription</span></div>
            <div class="col"><span style="font-size: 13px;">{{ promotion.description }}</span></div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        promotion: Object
    },
}
</script>