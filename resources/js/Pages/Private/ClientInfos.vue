<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;">
        <div id="article-informations">
            <div id="div-existed-articles">
                <div class="row d-flex flex-md-row">
                    <div id="col-form" class="col-12 col-md-4">
                        <div style="position: sticky;top: 144px;">
                            <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 20px;">
                                <div>
                                    <div class="d-flex justify-content-center mb-4 mt-3">
                                        <div>
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="width: 150px;height: 150px;border-radius: 100%;border-width: 2px;border-style: dashed;padding: 3px;">
                                                <img :src="this.client.profileImg ? '/storage/' + this.client.profileImg : ''"
                                                    :style="this.client.profileImg ? 'width: 100%;height: 100%;border-radius: 100%;' : ''" />

                                                <svg v-if="!this.client.profileImg" xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                    height="1em" fill="currentColor" style="font-size: 79px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                                    </path>
                                                </svg>

                                            </div><input id="profile-img" type="file" accept="image/*" @change="onChange"
                                                ref="callButton" style="display: none;" />
                                            <label @click="callFile"
                                                class="form-label bg-body shadow-sm d-flex flex-column justify-content-center align-items-center"
                                                style="cursor: pointer;height: 25px;width: 25px;border-radius: 100%;margin-top: -35px;margin-left: 114px;position: absolute;"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                                    height="1em" fill="currentColor" style="font-size: 11px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                                                    </path>
                                                </svg></label>
                                        </div>
                                    </div>
                                    <form method="post" @submit.prevent="submitUpdate">
                                        <div :class="errorClass" style="overflow: hidden;"><input
                                                class="bg-transparent border-0 shadow-none form-control form-control-sm"
                                                type="text" style="width: 100%;outline: none;" placeholder="Nom"
                                                v-model="form.nom" /></div>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                            style="overflow: hidden;"><input
                                                class="bg-transparent border-0 shadow-none form-control form-control-sm"
                                                type="text" style="width: 100%;outline: none;" placeholder="Postnom"
                                                v-model="form.postnom" />
                                        </div>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                            style="overflow: hidden;"><input
                                                class="bg-transparent border-0 shadow-none form-control form-control-sm"
                                                type="email" style="width: 100%;outline: none;" placeholder="Adresse mail"
                                                v-model="form.email" /></div>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                            style="overflow: hidden;"><input
                                                class="bg-transparent border-0 shadow-none form-control form-control-sm"
                                                type="text" style="width: 100%;outline: none;" placeholder="Adresse"
                                                v-model="form.adresse" />
                                        </div>
                                        <div class="border-secondary-subtle d-flex flex-row align-items-center"><button
                                                :disabled="disabled"
                                                class="btn btn-primary btn-sm link-light border-0 shadow-sm" type="submit"
                                                style="width: 100%;">Mettre à jour</button></div>
                                    </form>
                                </div>

                                <div class="mt-2" style="display: flex; justify-content: space-between;">
                                    <button class="btn btn-primary btn-sm link-primary bg-transparent" style="width: 48%;"
                                        data-bs-target="#contact-form" ref="buttonContact" data-bs-toggle="modal">Ajouter un
                                        contact</button>

                                    <button class="btn btn-primary btn-sm" style="width: 48%; color: white;"
                                        data-bs-target="#delete" data-bs-toggle="modal"
                                        ref="deleteButton">Supprimer</button>
                                </div>
                            </div>

                            <ListContact :contacts="contacts" :client="client"></ListContact>

                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-xl-4 mb-3">
                                <div class="card shadow border-start-primary py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-dark fw-bold h5 mb-0"><span class="text-primary"
                                                        style="font-size: 17px;">{{ nbr_reservations >= 1 ? nbr_reservations
                                                            : 'Aucune' }} résérvation{{ nbr_reservations > 1 ? 's' : ''
    }}</span>
                                                </div>
                                            </div>
                                            <div class="col-auto"><svg class="fa-2x text-gray-300"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                    height="1em" fill="currentColor" style="opacity: 0.50;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM80 256C71.16 256 64 263.2 64 272V368C64 376.8 71.16 384 80 384H176C184.8 384 192 376.8 192 368V272C192 263.2 184.8 256 176 256H80z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 col-xl-4 mb-3">
                                <div class="card shadow border-start-success py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-dark fw-bold h5 mb-0"><span class="text-info"
                                                        style="font-size: 17px;">{{ nbr_commandes >= 1 ? nbr_commandes :
                                                            'Aucune' }} commande{{ nbr_commandes > 1 ? 's' : '' }}</span></div>
                                            </div>
                                            <div class="col-auto"><svg class="fa-2x text-gray-300"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                    height="1em" fill="currentColor" style="opacity: 0.50;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z">
                                                    </path>
                                                </svg></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-4 mb-3">
                                <div class="card shadow border-start-info py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-dark fw-bold h5 mb-0"><span class="text-success"
                                                        style="font-size: 17px;">{{ nbr_ventes >= 1 ? nbr_ventes : 'Aucune'
                                                        }} vente{{ nbr_ventes > 1 ? 's' : '' }}</span></div>
                                            </div>
                                            <div class="col-auto"><svg class="fa-2x text-gray-300"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em"
                                                    height="1em" fill="currentColor" style="opacity: 0.50;">
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
                        <div class="d-flex justify-content-between align-items-center"
                            style="margin-bottom: 15px;overflow: inherit;">
                            <div class="border rounded border-0 d-flex align-items-center">
                                <div class="dropdown"><button
                                        class="btn btn-primary btn-sm link-body-emphasis bg-body border rounded border-0"
                                        aria-expanded="false" data-bs-toggle="dropdown" type="button"
                                        style="width: 31px;height: 31px;"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z">
                                            </path>
                                        </svg></button>
                                    <div class="dropdown-menu border rounded border-0 shadow"
                                        style="padding: 5px;font-size: 13px;"><a id="item-dropdown" class="dropdown-item"
                                            href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512"
                                                width="1em" height="1em" fill="currentColor" style="margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM80 256C71.16 256 64 263.2 64 272V368C64 376.8 71.16 384 80 384H176C184.8 384 192 376.8 192 368V272C192 263.2 184.8 256 176 256H80z">
                                                </path>
                                            </svg>Résérvations</a><a id="item-dropdown" class="dropdown-item" href="#"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                height="1em" fill="currentColor" style="margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z">
                                                </path>
                                            </svg>Commandes</a><a id="item-dropdown" class="dropdown-item" href="#"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em"
                                                height="1em" fill="currentColor" style="margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                                                </path>
                                            </svg>Ventes</a></div>
                                </div><select class="bg-body border-0 shadow-none form-select-sm"
                                    style="margin-left: 14px;outline: none;height: 31px;">
                                    <optgroup label="Trie des données">
                                        <option value="10" selected>10</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div><input class="bg-body border-0 form-control-sm" type="search" placeholder="ID"
                                    style="outline: none;width: 150px;" /></div>
                        </div>
                        <div>
                            <div class="bg-body border rounded border-0 shadow"
                                style="padding: 10px;margin-top: 15px;margin-bottom: 15px;" v-for="vente in ventes">
                                <div id="infos-vente" class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <div class="d-flex mb-1"><span style="font-size: 13px;">ID : </span><span
                                                style="font-size: 13px;">{{ vente[0].vente_id }}</span></div>
                                    </div>
                                    <div class="dropdown"><button style="margin-right: 6px;height: 31px;width: 32px;"
                                            class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0"
                                            aria-expanded="false" data-bs-toggle="dropdown" type="button"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em"
                                                height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z">
                                                </path>
                                            </svg></button>
                                        <div class="dropdown-menu border-0 shadow" style="padding: 0px;"><a
                                                id="item-dropdown" class="dropdown-item d-flex align-items-center"
                                                href="#"><svg class="bi bi-printer-fill" xmlns="http://www.w3.org/2000/svg"
                                                    width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                                                    style="margin-right: 10px;">
                                                    <path
                                                        d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z">
                                                    </path>
                                                    <path
                                                        d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z">
                                                    </path>
                                                </svg>Imprimer</a><a id="item-dropdown"
                                                class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                                    height="1em" fill="currentColor" style="margin-right: 10px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z">
                                                    </path>
                                                </svg>Télécharger</a><a id="item-dropdown"
                                                class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                                    height="1em" fill="currentColor" style="margin-right: 10px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                                    </path>
                                                </svg>Modifier</a><a id="item-dropdown"
                                                class="dropdown-item d-flex align-items-center" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                    height="1em" fill="currentColor" style="margin-right: 10px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z">
                                                    </path>
                                                </svg>Supprimer</a></div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="overflow: inherit;">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th id="cell_id-3">N°</th>
                                                <th id="cell_name-3">Nom de l&#39;article</th>
                                                <th id="cell_cat-3" class="d-none d-sm-table-cell">Quantité</th>
                                                <th id="cell_spec-3" class="d-none d-md-table-cell">Prix unitaire</th>
                                                <th class="d-none d-lg-table-cell">Prix total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(detail_vente, index) in vente">
                                                <td>{{ index + 1 }}</td>
                                                <td class="text-capitalize">{{ detail_vente.nom }}</td>
                                                <td class="text-capitalize d-none d-sm-table-cell" style="font-size: 13px;">
                                                    {{ detail_vente.qtte_vente }} article{{ detail_vente.qtte_vente > 1 ?
                                                        's' : '' }}</td>
                                                <td class="text-capitalize d-none d-md-table-cell" style="font-size: 13px;">
                                                    {{ detail_vente.prixUnitaire }}$</td>
                                                <td class="text-capitalize d-none d-lg-table-cell" style="font-size: 13px;">
                                                    {{ detail_vente.prixTotal }}$</td>
                                            </tr>
                                            <tr class="d-none d-md-table-row">
                                                <td class="border-0"></td>
                                                <td class="text-capitalize border-0 d-none d-md-table-cell"></td>
                                                <td class="text-capitalize border-0 d-none d-lg-table-cell"
                                                    style="font-size: 13px;"></td>
                                                <td class="text-capitalize fw-bold" style="font-size: 13px;">Total</td>
                                                <td class="text-capitalize fw-bold" style="font-size: 13px;">89 $</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="div-prix" class="d-md-none mb-2">
                                    <div class="d-flex mb-1"><span style="font-size: 13px;">Total : </span><span
                                            class="text-capitalize" style="font-size: 13px;">Text</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ListContact @hide-form-contact="hideFormContact" :contacts="contacts" user="" fournisseur="" boutique=""
            :client="client"></ListContact>

    </div>

    <!-- Suppression des clients -->
    <div id="delete" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Suppression</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Voulez-vous vraiment supprimer ce client?
                        Vous supprimer aussi les ventes, les réservations et les commandes qu'il a passé.
                    </p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between"><button
                        class="btn btn-primary btn-sm link-body-emphasis link-opacity-50 bg-transparent border-0"
                        type="button" data-bs-target="#delete" data-bs-toggle="modal">Annuler</button>
                    <button @click="deleteClient" class="btn btn-primary btn-sm bg-transparent" type="button"
                        style="color: var(--bs-btn-border-color);">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import Header from '../../Components/Header/Header.vue';
import { Link, router, useForm } from "@inertiajs/vue3";
import FormContact from './Contacts/FormContact.vue'
import ListContact from './Contacts/listcontact.vue'

export default {

    components: {
        Header,
        Link,
        FormContact,
        ListContact
    },
    props: {
        client: Object,
        ventes: Object,
        contacts: Object,
        nbr_ventes: Number,
        nbr_reservations: Number,
        nbr_commandes: Number,
    },
    data() {
        return {
            form: useForm({
                id: this.client.id,
                nom: this.client.nom,
                postnom: this.client.postnom,
                email: this.client.email,
                adresse: this.client.adresse
            }),

            disabled: false,

            image: ""
        }
    },
    computed: {
        errorClass() {
            let class_value = 'border rounded border-1 d-flex flex-row align-items-center mb-2 '
            if (this.form.errors.nom) {
                class_value = class_value + 'border-primary'
            } else {
                class_value = class_value + 'border-secondary-subtle'
            }
            return class_value
        }
    },
    mounted() {
        console.log(this.ventes);
    },
    methods: {
        submitUpdate() {
            this.disabled = true
            this.form.put('/clients', {
                onSuccess: () => {
                    this.disabled = false
                }
            })
        },
        onChange(e) {
            this.image = e.target.files[0]
            this.$inertia.post('/clients-profile', {
                _method: 'put',
                id: this.client.id,
                image: this.image
            })
        },

        callFile() {
            this.$refs.callButton.click()
        },

        deleteClient() {
            this.form.delete('/clients', {
                onBefore: () => {
                    this.$refs.deleteButton.click()
                }
            })

        },

        hideFormContact() {
            this.$refs.buttonContact.click()
        }
    }
}

</script>