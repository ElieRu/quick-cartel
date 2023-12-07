<template>
    <Header ></Header>
    <div class="container" style="padding-top: 20px;">
    <div>
        <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 20px;">
            <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span class="bg-body-secondary border rounded border-0 d-flex align-items-center" style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" style="font-size: 12px;margin-right: 7px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M0 155.2C0 147.9 2.153 140.8 6.188 134.7L81.75 21.37C90.65 8.021 105.6 0 121.7 0H518.3C534.4 0 549.3 8.021 558.2 21.37L633.8 134.7C637.8 140.8 640 147.9 640 155.2C640 175.5 623.5 192 603.2 192H36.84C16.5 192 .0003 175.5 .0003 155.2H0zM64 224H128V384H320V224H384V464C384 490.5 362.5 512 336 512H112C85.49 512 64 490.5 64 464V224zM512 224H576V480C576 497.7 561.7 512 544 512C526.3 512 512 497.7 512 480V224z"></path>
                    </svg><span style="font-size: 12px;">Les informations</span></span><span></span></div>
            <div class="row d-block d-md-flex">
                <div class="col">
                    <div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;">Nom de la boutique</label><label class="form-label text-body-secondary" style="font-size: 13px;">text</label></div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;">Adresse mail</label><label class="form-label text-lowercase text-body-secondary" style="font-size: 13px;">el@gmail.com</label></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;">Url</label>
                            <div class="border rounded d-flex" style="overflow: hidden;"><input class="bg-transparent border-0 form-control-sm" type="url" style="width: 100%;outline: none;" placeholder="Your link" /><button class="btn btn-primary bg-transparent border-0" type="button"><svg class="text-body-tertiary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"></path>
                                    </svg></button></div>
                        </div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;">Numéro de téléphone</label><label class="form-label text-body-secondary" style="font-size: 13px;">text</label></div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;">Déscription</label><label class="form-label text-capitalize text-body-secondary" style="font-size: 13px;">m</label></div>
        </div>
        <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 20px;">
            <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span class="bg-body-secondary border rounded border-0 d-flex align-items-center" style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 12px;margin-right: 7px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path>
                    </svg><span style="font-size: 12px;">Adresse de la boutique</span></span><span></span></div>
            <div class="row d-block d-md-flex">
                <div class="col">
                    <div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="ville">Ville</label><label class="form-label text-body-secondary" style="font-size: 13px;">Ville</label></div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="commune">Commune</label><label class="form-label text-body-secondary" style="font-size: 13px;">Commune</label></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="quartier">Quartier</label><label class="form-label text-body-secondary" style="font-size: 13px;">Quartier</label></div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="adress">Avenu</label><label class="form-label text-body-secondary" style="font-size: 13px;">Avenu</label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
            <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span class="bg-body-secondary border rounded border-0 d-flex align-items-center" style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 12px;margin-right: 7px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path>
                    </svg><span style="font-size: 12px;">Le propriétaire</span></span><span></span></div>
            <div class="row d-block d-md-flex">
                <div class="col">
                    <div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;">Nom &amp; Post-nom</label><label class="form-label text-body-secondary" style="font-size: 13px;">text</label></div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="commune">Adresse mail</label><label class="form-label text-lowercase text-body-secondary" style="font-size: 13px;">el@gmail.com</label></div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="commune">Date de naissance</label><label class="form-label text-body-secondary" style="font-size: 13px;" for="commune">text</label></div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="quartier">Sexe</label><label class="form-label text-capitalize text-body-secondary" style="font-size: 13px;" for="quartier">m</label></div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="quartier">Profession</label><label class="form-label text-body-secondary" style="font-size: 13px;" for="quartier">etu</label></div>
                        <div class="d-flex flex-column mb-2"><label class="form-label" style="font-size: 13px;margin-bottom: 0px;" for="adress">Numéro de téléphone.</label><label class="form-label text-body-secondary" style="font-size: 13px;" for="adress">098</label></div>
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
        }
    }
    
    </script>