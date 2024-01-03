<template>
    <Header></Header>
    <div class="container" style="padding-top: 30px;">
        <div>
            <div class="row d-block d-sm-flex">
                <div class="col-12 col-sm-5 col-md-4 mb-3">
                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
                        <div class="d-flex flex-column justify-content-center align-items-center mt-3 mb-3">
                            <div class="mb-2"
                                style="width: 114px;height: 115px;border-radius: 100%;border-width: 2px;border-style: dashed;padding: 3px;">

                                <img :src="boutique.logo ? '...' : '/images/img logo.jpg'"
                                    style="width: 100%;height: 100%;border-radius: 100%;" />

                            </div>
                        </div>
                        <div class="d-flex flex-column mb-2" v-if="boutique.nom">
                            <label class="form-label fw-bold" style="font-size: 13px;margin-bottom: 0px;">Nom</label><label
                                class="form-label text-lowercase text-body-secondary">{{ boutique.nom }}</label>
                        </div>
                        <div class="d-flex flex-column mb-2">
                            <label class="form-label fw-bold" style="font-size: 13px; margin-bottom: 0px;">Adresse
                                mail</label><label class="form-label text-lowercase text-body-secondary"
                                style="font-size: 13px;">{{ boutique.email ? boutique.email : 'Non définie' }}</label>
                        </div>
                        <div class="d-flex flex-column mb-2"><label class="form-label fw-bold"
                                style="font-size: 13px;margin-bottom: 0px;">Adresse</label><label
                                class="form-label text-lowercase text-body-secondary" style="font-size: 13px;">{{
                                    boutique.adresse ? boutique.adresse : 'Non définie' }}</label>
                        </div>
                        <div class="d-flex flex-column"><label class="form-label fw-bold"
                                style="font-size: 13px;margin-bottom: 0px;">Déscription</label>
                            <div><span>{{ boutique.description ? boutique.description : 'Votre description*' }}</span></div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-7 col-md-8 mb-3">
                    <div class="bg-body border rounded border-0 shadow mb-3" style="padding: 10px;">
                        <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span
                                class="bg-body-secondary border rounded border-0 d-flex align-items-center"
                                style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                    fill="currentColor" style="font-size: 12px;margin-right: 7px;">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                    </path>
                                </svg><span style="font-size: 12px;">Le propriétaire</span></span><span></span></div>
                        <div v-if="boutique.user_name" class="d-flex flex-column justify-content-between flex-sm-row mb-2">
                            <label class="form-label fw-bold" style="font-size: 13px;margin-bottom: 0px;">Nom</label><label
                                class="form-label text-body-secondary" style="font-size: 13px;">
                                {{ boutique.user_name }} {{ boutique.postname }}
                            </label>
                        </div>
                        <div v-if="boutique.user_mail" class="d-flex flex-column justify-content-between flex-sm-row mb-2">
                            <label class="form-label fw-bold" style="font-size: 13px;margin-bottom: 0px;"
                                >Adresse mail</label><label
                                class="form-label text-lowercase text-body-secondary" style="font-size: 13px;">{{
                                    boutique.user_mail }}</label>
                        </div>
                        <div class="d-flex flex-column justify-content-between flex-sm-row mb-2">
                            <label class="form-label fw-bold" style="font-size: 13px;margin-bottom: 0px;">Date
                                de naissance</label><label class="form-label text-body-secondary" style="font-size: 13px;"
                                >{{ boutique.birthday ? boutique.birthday : 'Non définie' }}</label>
                        </div>
                        <div class="d-flex flex-column justify-content-between flex-sm-row mb-2">
                            <label class="form-label fw-bold" style="font-size: 13px;margin-bottom: 0px;"
                                >Sexe</label><label class="form-label text-body-secondary"
                                style="font-size: 13px;">{{ boutique.sexe ? boutique.sexe : 'Non définie' }}</label>
                        </div>
                        <div class="d-flex flex-column justify-content-between flex-sm-row">
                            <label class="form-label fw-bold" style="font-size: 13px;margin-bottom: 0px;"
                                >Profession</label><label class="form-label text-body-secondary"
                                style="font-size: 13px;">{{ boutique.profession ? boutique.profession : 'Non définie' }}</label>
                        </div>
                    </div>


                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
                        <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span
                                class="bg-body-secondary border rounded border-0 d-flex align-items-center"
                                style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em"
                                    fill="currentColor" style="font-size: 12px;margin-right: 7px;">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4 318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3 281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2 247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7 230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L467.5 380z">
                                    </path>
                                </svg><span style="font-size: 12px;">Plus d&#39;informations</span></span><span></span>
                        </div>
                        <div class="mb-2"><span style="font-size: 13px;font-weight: bold;">Mes contacts : </span>
                            <div v-for="contact in contacts" class="d-flex align-items-center mb-1" style="margin-left: 15px;"><span
                                    style="margin-left: 10px;">֍    (+243) {{ contact.phone }}</span></div>
                        </div>

                        <div><span style="font-size: 13px;font-weight: bold;">Mes liens : </span>
                            <div class="d-flex flex-row align-items-center mb-1">

                                <a v-for="lien in liens" class="btn btn-primary btn-sm bg-body border-dark-subtle shadow-none d-flex justify-content-center align-items-center"
                                    role="button" :href="lien.lien" style="width: 32px;height: 32px;margin-right: 10px;"
                                    target="_blank"><svg class="text-body-secondary" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M172.5 131.1C228.1 75.51 320.5 75.51 376.1 131.1C426.1 181.1 433.5 260.8 392.4 318.3L391.3 319.9C381 334.2 361 337.6 346.7 327.3C332.3 317 328.9 297 339.2 282.7L340.3 281.1C363.2 249 359.6 205.1 331.7 177.2C300.3 145.8 249.2 145.8 217.7 177.2L105.5 289.5C73.99 320.1 73.99 372 105.5 403.5C133.3 431.4 177.3 435 209.3 412.1L210.9 410.1C225.3 400.7 245.3 404 255.5 418.4C265.8 432.8 262.5 452.8 248.1 463.1L246.5 464.2C188.1 505.3 110.2 498.7 60.21 448.8C3.741 392.3 3.741 300.7 60.21 244.3L172.5 131.1zM467.5 380C411 436.5 319.5 436.5 263 380C213 330 206.5 251.2 247.6 193.7L248.7 192.1C258.1 177.8 278.1 174.4 293.3 184.7C307.7 194.1 311.1 214.1 300.8 229.3L299.7 230.9C276.8 262.1 280.4 306.9 308.3 334.8C339.7 366.2 390.8 366.2 422.3 334.8L534.5 222.5C566 191 566 139.1 534.5 108.5C506.7 80.63 462.7 76.99 430.7 99.9L429.1 101C414.7 111.3 394.7 107.1 384.5 93.58C374.2 79.2 377.5 59.21 391.9 48.94L393.5 47.82C451 6.731 529.8 13.25 579.8 63.24C636.3 119.7 636.3 211.3 579.8 267.7L467.5 380z">
                                        </path>
                                    </svg></a>

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
    components: {
        Header
    },

    props: {
        boutique: Object,
        liens: '',
        contacts: '',
    },

    mounted() {
        // console.log(this.liens.length);
    }
}

</script>