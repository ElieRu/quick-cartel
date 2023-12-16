<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;">
        <div id="article-informations">
            <div id="div-existed-articles">
                <div class="row d-flex flex-md-row">
                    <div id="col-form" class="col-12 col-md-4" style="z-index: 10;">
                        <div style="position: sticky;top: 144px;">
                            <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 20px;">
                                <div>
                                    <div class="d-flex justify-content-center mb-3">
                                        <div>
                                            <div class="d-flex justify-content-center align-items-center"
                                                style="width: 150px;height: 150px;border-radius: 100%;border-width: 2px;border-style: dashed;padding: 3px;">
                                                
                                                <img 
                                                    :src="this.fournisseur.photo ? '/storage/'+this.fournisseur.photo : ''" alt=""
                                                    :style="this.fournisseur.photo ? 'width: 100%; height: 100%; border-radius: 100%;' : ''">

                                                <svg v-if="!this.fournisseur.photo" xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em"
                                                    height="1em" fill="currentColor" style="font-size: 79px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z">
                                                    </path>
                                                </svg>

                                            </div>
                                            <input id="profile-img" type="file" accept="image/*" @change="onChange"
                                                style="display: none;" /><label
                                                class="form-label bg-body shadow-sm d-flex flex-column justify-content-center align-items-center"
                                                style="cursor: pointer;height: 25px;width: 25px;border-radius: 100%;margin-top: -35px;margin-left: 114px;position: absolute;"
                                                for="profile-img"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor"
                                                    style="font-size: 11px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                                                    </path>
                                                </svg></label>
                                        </div>
                                    </div>
                                    <form method="post" @submit.prevent="update">
                                        <div :class="errorClass" style="overflow: hidden;"><input v-model="form.nom"
                                                class="bg-transparent border-0 shadow-none form-control form-control-sm"
                                                type="text" style="width: 100%;outline: none;" placeholder="Nom" /></div>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                            style="overflow: hidden;"><select v-model="form.type"
                                                class="bg-transparent border-0 shadow-none form-select form-select-sm"
                                                style="outline: none;">
                                                <optgroup label="Type">
                                                    <option value="Fabricant" selected>Fabricant</option>
                                                    <option value="Grossiste">Grossiste</option>
                                                    <option value="Détaillant">Détaillant</option>
                                                </optgroup>
                                            </select></div>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                            style="overflow: hidden;"><input v-model="form.email"
                                                class="bg-transparent border-0 shadow-none form-control form-control-sm"
                                                type="email" style="width: 100%;outline: none;"
                                                placeholder="Adresse mail" /></div>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                            style="overflow: hidden;"><input v-model="form.adresse"
                                                class="bg-transparent border-0 shadow-none form-control form-control-sm"
                                                type="text" style="width: 100%;outline: none;" placeholder="Adresse" />
                                        </div>
                                        <div class="border-secondary-subtle d-flex flex-row align-items-center">
                                            <button :disabled="updateSuccess"
                                                class="btn btn-primary btn-sm link-light border-0 shadow-sm" type="submit"
                                                style="width: 100%;">Mettre à jour</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-between mt-2"><button
                                        class="btn btn-primary btn-sm link-primary bg-transparent" type="button"
                                        data-bs-target="#contact-form" ref="buttonContact" data-bs-toggle="modal"
                                        style="width: 48%;">Ajouter un contact</button><button
                                        class="btn btn-primary btn-sm link-light border-0 shadow-none" type="button"
                                        data-bs-target="#delete-fournisseur" data-bs-toggle="modal" style="width: 48%;"
                                        ref="buttonDelete">Supprimer</button></div>
                                <div class="d-flex mt-2">
                                    <button
                                        class="btn btn-primary btn-sm bg-dark-subtle border-1 border-dark-subtle shadow-none d-flex justify-content-center align-items-center"
                                        type="button" data-bs-target="#lien-form" data-bs-toggle="modal"
                                        ref="buttonFormLien" style="margin-right: 6px;height: 31px;width: 32px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z">
                                            </path>
                                        </svg></button>

                                    <ListLiens :liens="liens"></ListLiens>

                                </div>
                            </div>

                            <ListContact :contacts="contacts" :fournisseur="fournisseur"></ListContact>

                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <div class="card shadow border-start-info py-2">
                                    <div class="card-body">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col me-2">
                                                <div class="text-dark fw-bold h5 mb-0"><span class="text-success"
                                                        style="font-size: 17px;">Aucune réquisition</span></div>
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
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <FormLien @hide-form-link="hideLinkForm" :fournisseur_id="fournisseur.id"></FormLien>

    <!-- Suppression des fournisseur -->
    <div id="delete-fournisseur" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Suppression</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Voulez-vous vraiment supprimer ce fournisseur?</p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between"><button
                        class="btn btn-primary btn-sm link-body-emphasis link-opacity-50 bg-transparent border-0"
                        type="button" data-bs-target="#delete" data-bs-toggle="modal">Annuler</button>
                    <button @click="deleteFournisseur" class="btn btn-primary btn-sm bg-transparent" type="button"
                        style="color: var(--bs-btn-border-color);">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Fournisseurs / Historique</h4>
        </div>
        <div>
            form
        </div>

        <FormContact @hide-form-contact="hideFormContact" :contacts="contacts" :fournisseur="fournisseur" user=""
            boutique="" client=""></FormContact>

        <div id="article-informations">
            <div id="div-existed-articles">
                <div class="row d-flex flex-column-reverse flex-md-row">
                    <div>
                        <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
                            <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 15px;">
                            </div>
                            <div class="table-responsive" style="overflow: inherit;">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th id="cell_id">#</th>
                                            <th id="cell_name">Date</th>
                                            <th id="cell_cat" class="d-none d-sm-table-cell">Quantité</th>
                                            <th id="cell_spec" class="d-none d-md-table-cell">Prix total</th>
                                            <!-- <th id="cell_price" class="d-none d-lg-table-cell">Statut</th> -->
                                            <th id="cell_actions"
                                                class="d-flex justify-content-end justify-content-md-center">
                                                <span><strong>Actions</strong></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(requisition, index) in requisitions" :key="requisition.id">
                                            <td>{{ index + 1 }}</td>
                                            <td>
                                                {{ requisition.date }}
                                            </td>
                                            <td class="d-none d-sm-table-cell" style="font-size: 13px;">
                                                {{ requisition.qtte }} article{{ requisition.qtte > 1 ? 's' : '' }}
                                            </td>
                                            <td class="text-capitalize d-none d-md-table-cell" style="font-size: 13px;">
                                                {{ requisition.montant }} {{ requisition.devise == 'USD' ? '$' : 'Fc' }}
                                            </td>
                                            <!-- <td class="text-capitalize d-none d-lg-table-cell" style="font-size: 13px;">
                                                {{ requisition.statut }}
                                            </td> -->

                                            <td class="d-flex justify-content-end justify-content-md-center">
                                                <div>
                                                    <div class="dropdown"><button style="height: 30px;"
                                                            class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0"
                                                            aria-expanded="false" data-bs-toggle="dropdown"
                                                            type="button"><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="-128 0 512 512" width="1em" height="1em"
                                                                fill="currentColor">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path
                                                                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                                                </path>
                                                            </svg></button>
                                                        <div class="dropdown-menu border rounded border-0 shadow"
                                                            style="padding: 5px;font-size: 13px;">

                                                            <a id="item-dropdown" class="dropdown-item" href="#"
                                                                data-bs-target="#suppression" data-bs-toggle="modal"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="-32 0 512 512" width="1em" height="1em"
                                                                    fill="currentColor" style="margin-right: 10px;">
                                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                                    </path>
                                                                </svg>Visualisez</a>

                                                            <a id="item-dropdown" class="dropdown-item" href="#"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                    width="1em" height="1em" fill="currentColor"
                                                                    style="margin-right: 10px;">
                                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z">
                                                                    </path>
                                                                </svg>Modifier</a>

                                                            <a id="item-dropdown" class="dropdown-item" href="#"
                                                                data-bs-target="#suppression" data-bs-toggle="modal"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="-32 0 512 512" width="1em" height="1em"
                                                                    fill="currentColor" style="margin-right: 10px;">
                                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                                    </path>
                                                                </svg>Supprimer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
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
</template>

<script>

import Header from '../../Components/Header/Header.vue';
import ListContact from './Contacts/ListContact.vue'
import FormContact from './Contacts/FormContact.vue'
import FormLien from './Liens/FormLien.vue'
import ListLiens from './Liens/ListLiens.vue'
import { Link, useForm } from "@inertiajs/vue3";

export default {
    components: {
        Header,
        FormContact,
        ListContact,
        FormLien,
        ListLiens
    },
    props: {
        fournisseur: Object,
        requisitions: Object,
        contacts: Object,
        liens: Object,
    },
    mounted() {
        console.log(this.fournisseur.photo);
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
    data() {
        return {
            form: useForm({
                id: this.fournisseur.id,
                nom: this.fournisseur.nom,
                email: this.fournisseur.email,
                type: this.fournisseur.type,
                adresse: this.fournisseur.adresse
            }),
            updateSuccess: false,
            image: ""
        }
    },
    methods: {
        onChange(e) {
            this.image = e.target.files[0]
            this.$inertia.post('/fournisseurs-profile', {
                _method: 'put',
                id: this.fournisseur.id,
                image: this.image
            })
        },

        update() {
            this.updateSuccess = true
            this.form.put('/fournisseurs', {
                onSuccess: () => {
                    this.updateSuccess = false
                }
            })
        },

        deleteFournisseur() {
            this.form.delete('/fournisseurs', {
                onBefore: () => {
                    this.$refs.buttonDelete.click()
                }
            })
        },

        hideFormContact() {
            this.$refs.buttonContact.click()
        },

        hideLinkForm() {
            this.$refs.buttonFormLien.click()
        }
    }
}


</script>