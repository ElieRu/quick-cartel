<template>
    <Header></Header>

    <div class="container" style="padding-top: 30px;">



        <div id="article-informations">
            <div class="bg-body border rounded border-0 shadow" style="margin-bottom: 30px;">
                <div class="row d-flex flex-column flex-md-row">
                    <div id="col-form" class="col">

                        <div class="bg-dark-subtle border rounded-pill border-0 d-flex justify-content-between mt-4"
                            v-if="images.length >= 1"
                            style="position: absolute;width: 90px;padding: 3px;overflow: hidden;margin-left: 10px;">

                            <button
                                class="btn btn-primary btn-sm bg-body-secondary border rounded-circle border-0 shadow-none d-flex justify-content-center align-items-center"
                                type="button" style="padding: 0px;width: 25px;height: 25px;margin-right: 5px;"><svg
                                    class="text-body-emphasis" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    width="1em" height="1em" fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                    </path>
                                </svg></button>

                            <button
                                class="btn btn-primary btn-sm bg-body-secondary border rounded-circle border-0 shadow-none d-flex justify-content-center align-items-center"
                                type="button" style="padding: 0px;width: 25px;height: 25px;margin-right: 5px;"><svg
                                    class="text-body-emphasis" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    width="1em" height="1em" fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M480 256c0 123.4-100.5 223.9-223.9 223.9c-48.86 0-95.19-15.58-134.2-44.86c-14.14-10.59-17-30.66-6.391-44.81c10.61-14.09 30.69-16.97 44.8-6.375c27.84 20.91 61 31.94 95.89 31.94C344.3 415.8 416 344.1 416 256s-71.67-159.8-159.8-159.8C205.9 96.22 158.6 120.3 128.6 160H192c17.67 0 32 14.31 32 32S209.7 224 192 224H48c-17.67 0-32-14.31-32-32V48c0-17.69 14.33-32 32-32s32 14.31 32 32v70.23C122.1 64.58 186.1 32.11 256.1 32.11C379.5 32.11 480 132.6 480 256z">
                                    </path>
                                </svg></button>

                            <button data-bs-target="#delete-image" data-bs-toggle="modal"
                                class="btn btn-primary btn-sm bg-primary border rounded-circle border-0 border-primary d-flex justify-content-center align-items-center"
                                type="button" style="padding: 0px;width: 25px;height: 25px;"><svg class="text-white"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                    fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z">
                                    </path>
                                </svg></button>
                        </div>


                        <div v-if="images.length >= 1 && images[0].image !== null" style="height: 350px; width: 100%; padding: 10px;"
                            class="d-flex justify-content-center align-items-center">
                            <img class="border-0 rounded"
                                :src="imageLink ? '/storage/' + imageLink : '/storage/' + images[0].image"
                                style="height: 85%;">
                        </div>

                        <div v-if="images[0].image == null" style="height: 350px;">
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;"><svg
                                    class="text-dark-emphasis" xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576"
                                    width="1em" height="1em" fill="currentColor" style="font-size: 170px;">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M528 32H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48H528c26.51 0 48-21.49 48-48v-256C576 53.49 554.5 32 528 32zM223.1 96c17.68 0 32 14.33 32 32S241.7 160 223.1 160c-17.67 0-32-14.33-32-32S206.3 96 223.1 96zM494.1 311.6C491.3 316.8 485.9 320 480 320H192c-6.023 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.332-16.68l70-96C252.1 194.4 256.9 192 262 192c5.111 0 9.916 2.441 12.93 6.574l22.35 30.66l62.74-94.11C362.1 130.7 367.1 128 373.3 128c5.348 0 10.34 2.672 13.31 7.125l106.7 160C496.6 300 496.9 306.3 494.1 311.6zM456 432H120c-39.7 0-72-32.3-72-72v-240C48 106.8 37.25 96 24 96S0 106.8 0 120v240C0 426.2 53.83 480 120 480h336c13.25 0 24-10.75 24-24S469.3 432 456 432z">
                                    </path>
                                </svg></div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="border rounded border-0" style="padding: 10px;height: 100%;">

                            <div class="mt-2 mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="text-body-secondary">Les détails</h4>

                                    <div class="d-flex">

                                        <button style="width: 32px; height: 31px; margin-left: 10px;"
                                            data-bs-target="#modify-article" data-bs-toggle="modal" ref="modifyButton"
                                            class="btn btn-primary btn-sm link-body-emphasis bg-transparent border-dark-subtle shadow-sm"
                                            type="button"><svg class="text-dark-emphasis" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z">
                                                </path>
                                            </svg></button>

                                        <button style="width: 32px; height: 31px; margin-left: 10px;"
                                            data-bs-target="#delete-article" data-bs-toggle="modal" ref="deleteButton"
                                            class="btn btn-primary btn-sm link-body-emphasis bg-transparent border-dark-primary shadow-sm"
                                            type="button"><svg class="text-dark-emphasis" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                </path>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card shadow-none border-1 py-2 mb-3">
                                        <div class="card-body">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col me-2">
                                                    <div class="text-dark fw-bold h5 mb-0"><span
                                                            class="fs-6 text-body-secondary"
                                                            style="font-size: 17px;">Quantité
                                                            en stock : {{ article.qtte }}</span></div>
                                                </div>
                                                <div class="col-auto"><svg class="fa-2x text-gray-300"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576"
                                                        width="1em" height="1em" fill="currentColor" style="opacity: 0.50;">
                                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                                        </path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card shadow-none border-1 py-2 mb-3">
                                        <div class="card-body">
                                            <div class="row align-items-center no-gutters">
                                                <div class="col me-2">
                                                    <div class="text-dark fw-bold h5 mb-0"><span
                                                            class="fs-6 text-body-secondary"
                                                            style="font-size: 17px;">Quantité
                                                            en réservation : {{ article.qtteEnReservation }} </span></div>
                                                </div>
                                                <div class="col-auto"><svg class="fa-2x text-gray-300"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576"
                                                        width="1em" height="1em" fill="currentColor" style="opacity: 0.50;">
                                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                        <path
                                                            d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                                        </path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex mt-2">
                                    <button @click="addImage" :disabled="images.length == 5"
                                        class="btn btn-primary btn-sm bg-transparent border-1 border-dark-primary shadow-sm d-flex justify-content-center align-items-center"
                                        type="button" style="margin-right: 10px;height: 31px;width: 32px;"><svg
                                            class="text-body-tertiary" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z">
                                            </path>
                                        </svg>
                                    </button>

                                    <div class="d-flex" v-if="images[0].image !== null" v-for="image in images">
                                        <button @click="myImages(image)"
                                            class="btn btn-primary bg-body border-dark-subtle d-flex justify-content-center align-items-center shadow-sm"
                                            aria-expanded="false" data-bs-toggle="dropdown"
                                            style="margin-right: 10px;height: 31px;width: 32px;padding: 0px;"><svg
                                                class="text-body-tertiary" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M528 32H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48H528c26.51 0 48-21.49 48-48v-256C576 53.49 554.5 32 528 32zM223.1 96c17.68 0 32 14.33 32 32S241.7 160 223.1 160c-17.67 0-32-14.33-32-32S206.3 96 223.1 96zM494.1 311.6C491.3 316.8 485.9 320 480 320H192c-6.023 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.332-16.68l70-96C252.1 194.4 256.9 192 262 192c5.111 0 9.916 2.441 12.93 6.574l22.35 30.66l62.74-94.11C362.1 130.7 367.1 128 373.3 128c5.348 0 10.34 2.672 13.31 7.125l106.7 160C496.6 300 496.9 306.3 494.1 311.6zM456 432H120c-39.7 0-72-32.3-72-72v-240C48 106.8 37.25 96 24 96S0 106.8 0 120v240C0 426.2 53.83 480 120 480h336c13.25 0 24-10.75 24-24S469.3 432 456 432z">
                                                </path>
                                            </svg></button>
                                    </div>

                                    <input type="file" style="display: none;" accept="image/*" @change="onChange"
                                        ref="AddImageButton" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div id="div-existed-articles">
                <div class="row d-flex flex-md-row">
                    <div class="col-12 col-md-4">

                        <Promotion :article="article" :promotions="promotions"></Promotion>

                        <Description :article_id="this.article.id" :descriptions="descriptions"></Description>

                    </div>

                    <div id="col-right" class="col-12 col-md-8">
                        <div class="border-0 mb-3">

                            <div class="border-0 mb-4">
                                <div class="mb-2">
                                    <h3 class="text-body-secondary">Réquisitions</h3>
                                </div>
                                <div class="bg-body border rounded border-0 shadow"
                                    style="padding: 10px;padding-bottom: 0px;height: 300px;padding-bottom: 0px;">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="bg-transparent border rounded" style="overflow: hidden;"><select
                                                class="border-0 form-select-sm" style="height: 100%;outline: none;">
                                                <optgroup label="Dernières activités">
                                                    <option value="10" selected>10</option>
                                                    <option value="15">15</option>
                                                    <option value="20">20</option>
                                                </optgroup>
                                            </select></div>
                                        <div class="d-flex">

                                            <Link as="button" method="get" href="/requisitions/historique"
                                                :data="{ id: article.id }"
                                                class="btn btn-primary d-flex justify-content-center align-items-center btn-sm link-body-emphasis bg-body-secondary border rounded border-0"
                                                role="button"><i class="text-dark-emphasis fas fa-history"></i></Link>

                                            <button
                                                class="btn btn-primary btn-sm link-light bg-primary border rounded border-0"
                                                data-bs-target="#requisition" data-bs-toggle="modal" ref="callRequisition"
                                                type="button" style="margin-left: 10px;">Ajouter</button>
                                        </div>
                                    </div>
                                    <div style="height: 85%;overflow: overlay;">
                                        <div class="table-responsive bg-transparent" style="overflow: inherit;">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th id="cell_id" style="width: 60px;">#</th>
                                                        <th id="cell_name">Date</th>
                                                        <th id="cell_cat">Quantité</th>
                                                        <th id="cell_spec">Prix d&#39;achat</th>
                                                        <!-- <th id="cell_cat">Statut</th> -->
                                                        <th id="cell_price">Fournisseur</th>
                                                        <th id="cell_price"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr style="cursor: pointer;"
                                                        v-for="(requisition, index) in requisitions">
                                                        <td style="width: 60px;padding-top: 10px;">
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>{{ requisition.created_at }}</td>
                                                        <td style="font-size: 13px;">{{ requisition.qtte }} article{{
                                                            requisition.qtte > 1 ? 's' : '' }}</td>
                                                        <td style="font-size: 13px;">{{ requisition.montant }} $</td>
                                                        <!-- <td style="font-size: 13px;">
                                                            <select v-model="requisition.statut"
                                                                @change="updateStatutRequisition(requisition)">
                                                                <option value="En attente">En attente</option>
                                                                <option value="Approuvé">Approuvé</option>
                                                                <option vlaue="Annulé">Annulé</option>
                                                            </select>
                                                        </td> -->
                                                        <td class="text-capitalize" style="font-size: 13px;">{{
                                                            requisition.nomFournisseur }}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <button style="height: 30px; margin-right: 10px;"
                                                                    @click="updateRequisition(requisition)"
                                                                    class="btn btn-primary d-flex justify-content-center align-items-center btn-sm link-body-emphasis bg-transparent border rounded border-0"
                                                                    role="button" data-bs-target="#requisition"
                                                                    data-bs-toggle="modal">
                                                                    <svg class="text-dark-emphasis"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" width="1em" height="1em"
                                                                        fill="currentColor">
                                                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                        <path
                                                                            d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                                                        </path>
                                                                    </svg></button>

                                                                <Link as="button" method="delete" href="/requisitions"
                                                                    :preserveScroll="true" :data="{ id: requisition.id }"
                                                                    style="height: 30px;"
                                                                    class="btn btn-primary d-flex justify-content-center align-items-center btn-sm link-body-emphasis bg-transparent border rounded border-0"
                                                                    role="button">
                                                                <svg class="text-dark-emphasis"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="-32 0 512 512" width="1em" height="1em"
                                                                    fill="currentColor">
                                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z">
                                                                    </path>
                                                                </svg></Link>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-body border rounded border-0 shadow"
                                style="padding: 10px;height: 300px;padding-bottom: 0px;">
                                <div class="d-flex justify-content-between mb-2">

                                    <div class="d-flex">

                                        <div class="bg-transparent border rounded" style="overflow: hidden;">
                                            <select v-model="selection" @input="mySelection" class="border-0 form-select-sm"
                                                style="height: 100%;outline: none;">
                                                <option value="ventes">Ventes</option>
                                                <option value="commandes">Commandes</option>
                                                <option value="réservations">Réservations</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div>
                                        <Link
                                            class="btn btn-primary link-body-emphasis btn-sm bg-body-secondary border rounded border-0"
                                            as="button" method="get" href="/ventes/historique"
                                            :data="{ id: article.id, selection: selection }" role="button">Voir plus</Link>
                                    </div>
                                </div>
                                <div style="height: 88%;overflow: overlay;">
                                    <div class="table-responsive bg-transparent" style="overflow: inherit;">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th id="cell_id" style="width: 60px;">#</th>
                                                    <th id="cell_name">Date</th>
                                                    <th id="cell_cat">Quantité</th>
                                                    <th id="cell_spec">Prix unitaire</th>
                                                    <th id="cell_spec">Prix total</th>
                                                    <th id="cell_price">Concerné</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="cursor: pointer;" v-for="(activite, index) in activites">
                                                    <td style="width: 60px;">
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td>{{ activite.dateActivite }}</td>
                                                    <td style="font-size: 13px;">{{ activite.qtte }} article{{ activite.qtte
                                                        > 1 ? 's' : '' }}</td>
                                                    <td style="font-size: 13px;">{{ activite.prixUnitaire }}$</td>
                                                    <td style="font-size: 13px;">{{ activite.prixTotal }}$</td>
                                                    <td class="text-capitalize" style="font-size: 13px;">{{
                                                        activite.nomClient }} {{ activite.postnomClient }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div id="requisition" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Ajouter une réquisition</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <form method="post" @submit.prevent="submitRequisition">

                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="nom">Quantité requise</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <input v-model="formRequisition.qtte"
                                    class="bg-transparent border-0 shadow-none form-control form-control-sm" type="number"
                                    placeholder="Quantité" min="1" style="width: 100%;outline: none;" />
                            </div><span class="text-primary" style="font-size: 13px;" v-if="formRequisition.errors.qtte">{{
                                formRequisition.errors.qtte }}</span>
                        </div>


                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="prix">Prix d'achat</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">

                                <input id="price-3" class="bg-transparent border-0 shadow-none"
                                    v-model="formRequisition.montant" type="number"
                                    style="width: 100%;outline: none;height: 31px;padding-left: 10px;" name="prix"
                                    placeholder="Prix d'achat" min="0" />

                                <select v-model="formRequisition.devise" class="bg-transparent border-0 shadow-none"
                                    style="height: 100%;outline: none;" name="devise">
                                    <option value="USD">USD</option>
                                    <option value="CDF">CDF</option>
                                </select>
                            </div><span class="text-primary" style="font-size: 13px;"
                                v-if="formRequisition.errors.montant || formRequisition.errors.devise">Ce champ n'est pas
                                correcte</span>
                        </div>


                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="specification">Date d&#39;achat</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <input class="bg-transparent border-0 form-control" type="date"
                                    v-model="formRequisition.date" style="width: 100%;outline: none;height: 30px;" />
                            </div><span class="text-primary" style="font-size: 13px;" v-if="formRequisition.errors.date">{{
                                formRequisition.errors.date }}</span>
                        </div>


                        <div class="mb-2" v-if="fournisseurs.length > 0"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;" for="prix">Lier à un fournisseur</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">

                                <select v-model="formRequisition.fournisseur_id"
                                    class="bg-transparent border-0 shadow-none form-select form-select-sm"
                                    style="height: 100%;outline: none;">
                                    <option :value=null>Choisir un fournisseur</option>
                                    <option :value="fournisseur.id" v-for="fournisseur in fournisseurs">{{ fournisseur.nom
                                    }}</option>
                                </select>
                            </div>
                            <span class="text-primary" style="font-size: 13px;"
                                v-if="formRequisition.errors.fournisseur_id">{{ formRequisition.errors.fournisseur_id
                                }}</span>
                        </div>

                        <div>
                            <div style="display: flex; justify-content: space-between;">
                                <button class="btn btn-primary btn-sm link-light border-0" type="submit"
                                    :disabled="formRequisition.processing">Enregistrer</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal update article... -->
    <div id="modify-article" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-fullscreen-sm-down" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Modifier l'article</h4><button class="btn-close" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <div class="bg-body border rounded border-0 mb-3">
                        <form method="post" @submit.prevent="updateArticle">

                            <div class="mb-2">
                                <label>Nom</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;"><input v-model="form.nom" id="nom"
                                        class="bg-transparent border-0 form-control-sm" type="text"
                                        style="width: 100%;outline: none;" name="nom" placeholder="Nom de l&#39;article" />
                                </div><span class="text-primary" style="font-size: 13px;" v-if="form.errors.nom">{{
                                    form.errors.nom }}</span>
                            </div>

                            <div class="mb-2">
                                <label>Catégories</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;">
                                    <select v-model="form.categorie_id"
                                        class="bg-transparent border-0 shadow-none form-select-sm"
                                        style="width: 100%;outline: none;">
                                        <optgroup label="Catégories">Catégories</optgroup>
                                        <option v-for="categorie in categories" :value="categorie.id">
                                            {{ categorie.nom }}
                                        </option>
                                    </select>
                                </div><span class="text-primary" style="font-size: 13px;" v-if="form.errors.categorie_id">{{
                                    form.errors.categorie_id }}</span>
                            </div>

                            <div class="mb-2" v-if="form.categorie_id">
                                <label>Spécifications</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;">
                                    <select v-model="form.specification_id"
                                        class="bg-transparent border-0 shadow-none form-select-sm"
                                        style="width: 100%;outline: none;">
                                        <optgroup label="Spécification">Spécification</optgroup>
                                        <option v-for="specification in get(form.categorie_id)" :value="specification.id">{{
                                            specification.nom }}</option>
                                    </select>
                                </div><span class="text-primary" style="font-size: 13px;"
                                    v-if="form.errors.specification_id">{{
                                        form.errors.specification_id }}</span>
                            </div>

                            <div class="mb-2">
                                <label>Prix unitaire</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;">
                                    <input id="price-3" class="bg-transparent border-0 shadow-none" v-model="form.prix"
                                        type="number" style="width: 100%;outline: none;height: 31px;padding-left: 10px;"
                                        name="prix" placeholder="Prix unitaire" min="0" step="1" />
                                    <select disabled class="bg-transparent border-0 shadow-none"
                                        style="height: 100%;outline: none;" name="devise">
                                        <optgroup label="Prix unitaire">Prix unitaire</optgroup>
                                        <option value="USD">USD</option>
                                        <!-- <option value="CDF">CDF</option> -->
                                    </select>
                                </div><span class="text-primary" style="font-size: 13px;"
                                    v-if="form.errors.prix || form.errors.devise">Ce champ n'est pas correcte</span>
                            </div>

                            <div class="mb-2">
                                <label>Déscription</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;">
                                    <textarea class="bg-transparent border-0 shadow-none form-control-sm"
                                        v-model="form.description"
                                        style="width: 100%;height: 100px;outline: none;resize: none;"
                                        placeholder="La description de l&#39;article"></textarea>
                                </div><span class="text-primary" style="font-size: 13px;" v-if="form.errors.description">{{
                                    form.errors.description }}</span>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary btn-sm link-light border-0" :disabled="form.processing"
                                    type="submit">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Suppression des article -->
    <div id="delete-article" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Suppression</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Voulez-vous vraiment supprimer cet article?</p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between"><button
                        class="btn btn-primary btn-sm link-body-emphasis link-opacity-50 bg-transparent border-0"
                        type="button" data-bs-target="#delete" data-bs-toggle="modal">Annuler</button>
                    <button @click="deleteArticle" class="btn btn-primary btn-sm bg-transparent" type="button"
                        style="color: var(--bs-btn-border-color);">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- annuler une réquisition -->
    <div id="annuler-requisition" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Annulation</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Voulez-vous annuler cette réquisition?</p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-end">
                    <button @click="cancelRequisition(requisition)" class="btn btn-primary btn-sm bg-transparent"
                        type="button" style="color: var(--bs-btn-border-color);">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Suppression de l'image -->
    <div id="delete-image" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Suppression</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Voulez-vous supprimer cette image?</p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between"><button
                        class="btn btn-primary btn-sm link-body-emphasis link-opacity-50 bg-transparent border-0"
                        type="button" data-bs-target="#delete" data-bs-toggle="modal">Annuler</button>
                    <button @click="deleteImage" class="btn btn-primary btn-sm bg-transparent" type="button"
                        style="color: var(--bs-btn-border-color);">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</template>
    
<script>

import { Link, useForm, router } from '@inertiajs/vue3';
import Header from '../../../Components/Header/Header.vue';
import Promotion from '../Promotions/Promotions.vue'
import Description from '../Description.vue';

export default {
    components: {
        Link,
        Header,
        Description,
        Promotion
    },
    props: {
        article: Object,
        categories: Object,
        specifications: Object,
        fournisseurs: Object,
        devises: Object,
        descriptions: Object,
        requisitions: Object,
        paiements: Object,
        images: Object,
        activites: Object,
        promotions: Object,
    },
    mounted() {
        console.log(this.images[0].image);
    },
    data() {
        return {

            imageLink: null,

            form: useForm({
                id: this.article.id,
                nom: this.article.nom,
                categorie: this.article.nomCat,
                specification: this.article.nomSpec,
                categorie_id: this.article.categorie_id,
                specification_id: this.article.specification_id,
                prix: this.article.prix,
                devise: this.article.devise,
                description: this.article.description
            }),

            formDetails: useForm({
                id: null,
                nom: null,
                valeur: null,
                article_id: this.article.id
            }),

            formRequisition: useForm({
                article_id: this.article.id,
                id: null,
                qtte: null,
                date: null,
                montant: null,
                devise: null,
                fournisseur_id: null
            }),

            deleteRequisition: useForm({
                id: null
            }),

            deleteDetail: useForm({
                id: null
            }),

            paiementForm: useForm({
                requisition_id: null,
                mode: null,
                montant: null,
                date: null,
                devise_id: null
            }),

            success: false,
            detailsUpdateSuccess: false,
            detailsSuccess: false,
            requisition_id: '',

            selection: ''
        }
    },
    watch: {
        selection() {
            this.$inertia.get('articles', {
                id: this.article.id,
                select: this.selection
            }, {
                replace: true,
                preserveState: true,
                preserveScroll: true,
            })
        },
    },
    methods: {
        addImage() {
            this.$refs.AddImageButton.click()
        },

        onChange(e) {
            this.image = e.target.files[0]
            this.$inertia.post('/images-articles', {
                article_id: this.article.id,
                image: this.image
            }, {
                onSuccess: () => {
                    let last = this.images.slice(-1)
                    this.imageLink = last[0].image
                }
            })
        },

        updateArticle() {
            this.form.put('/articles', {
                onSuccess: () => {
                    this.$refs.modifyButton.click()
                }
            })
        },

        get(car) {
            let array = []
            for (let i = 0; i < this.specifications.length; i++) {
                if (this.specifications[i].categorie_id == car) {
                    array.push(this.specifications[i])
                }
            }

            return array
        },

        submitRequisition() {
            if (this.formRequisition.id == null) {
                this.formRequisition.post('/requisitions', {
                    onSuccess: () => {
                        this.$refs.callRequisition.click()
                        this.formRequisition.reset()
                    }
                })
            } else {
                this.formRequisition.put('/requisitions', {
                    onSuccess: () => {
                        this.$refs.callRequisition.click()
                        this.formRequisition.reset()
                    }
                })
            }

        },

        updateRequisition(requisition) {

            this.formRequisition.id = requisition.id
            this.formRequisition.qtte = requisition.qtte
            this.formRequisition.devise = requisition.devise
            this.formRequisition.montant = requisition.montant
            this.formRequisition.date = requisition.date
            this.formRequisition.fournisseur_id = requisition.fournisseur_id
        },

        updateStatutRequisition(requisition) {
            this.$inertia.get("/cancel-requisitions", {
                preserveScroll: true,
                article_id: this.article.id,
                article_qtte: this.article.qtte,
                requisition_id: requisition.id,
                requisition_statut: requisition.statut,
                requisition_qtte: requisition.qtte
            })
        },

        deleteReq(id) {
            this.deleteRequisition.id = id
            this.deleteRequisition.delete('/requisitions', { id: id })
        },

        clearForm() {
            formDetails.id = ''
            formDetails.nom = ''
            formDetails.valeur = ''
        },

        deleteArticle() {
            this.form.delete('/articles', {
                onBefore: () => {
                    this.$refs.deleteButton.click()
                    router.get('/articles')
                }
            })
        },

        myImages(image) {
            this.imageLink = image.image;
        }
    }
}



</script>