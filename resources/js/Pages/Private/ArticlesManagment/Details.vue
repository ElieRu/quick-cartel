<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;">
        <div id="article-informations">
            <div style="margin-bottom: 20px;">
                <div class="row d-flex flex-column flex-md-row">
                    <div id="col-form" class="col">
                        <div class="bg-body border rounded border-0 shadow" style="padding: 10px;position: relative;"><img
                                class="border rounded border-0" style="width: 100%;height: 300px;"
                                src="phones/computer.jpeg" />
                            <div></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
                            <div>
                                <div class="d-flex justify-content-between mb-2"><span style="font-size: 13px;">Nom de
                                        l&#39;article</span>

                                    <span class="text-body-secondary text-capitalize" style="font-size: 13px;">{{
                                        article.nom }}</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2"><span
                                        style="font-size: 13px;">Catégorie</span>
                                    <span class="text-body-secondary text-capitalize" style="font-size: 13px;">{{
                                        article.nomCat }}</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2"><span
                                        style="font-size: 13px;">Spécificité</span><span
                                        class="text-body-secondary text-capitalize" style="font-size: 13px;">{{
                                            article.nomSpec }}</span></div>
                                <div class="d-flex justify-content-between mb-2"><span style="font-size: 13px;">Prix
                                        unitaire</span><span class="text-body-secondary" style="font-size: 13px;">
                                        {{ article.prix }} {{ article.devise == 'USD' ? '$' : 'Fc' }}</span></div>
                                <div class="d-flex justify-content-between mb-2"><span style="font-size: 13px;">Quantité en
                                        stock</span><span class="text-body-secondary" style="font-size: 13px;">
                                        {{ article.qtte ? article.qtte : 0 }} article{{ article.qtte > 1 ? 's' : ''
                                        }}</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2"><span style="font-size: 13px;">Quantité en
                                        résérvation</span><span class="text-body-secondary" style="font-size: 13px;">
                                        {{ article.qtteEnReservation ? article.qtteEnReservation : 0 }} article{{ article.qtte > 1 ? 's' : ''
                                        }}</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <button
                                        class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0 shadow-none"
                                        type="button" style="height: 35px; width: 35px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M480 179.6C498.6 188.4 512 212.1 512 240C512 267.9 498.6 291.6 480 300.4V448C480 460.9 472.2 472.6 460.2 477.6C448.3 482.5 434.5 479.8 425.4 470.6L381.7 426.1C333.7 378.1 268.6 352 200.7 352H192V480C192 497.7 177.7 512 160 512H96C78.33 512 64 497.7 64 480V352C28.65 352 0 323.3 0 288V192C0 156.7 28.65 128 64 128H200.7C268.6 128 333.7 101 381.7 53.02L425.4 9.373C434.5 .2215 448.3-2.516 460.2 2.437C472.2 7.39 480 19.06 480 32V179.6zM200.7 192H192V288H200.7C280.5 288 357.2 317.8 416 371.3V108.7C357.2 162.2 280.5 192 200.7 192V192z">
                                            </path>
                                        </svg></button>


                                    <button data-bs-target="#modifier-article" data-bs-toggle="modal"
                                        class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0 shadow-none"
                                        type="button" style="margin-left: 10px; height: 35px; width: 35px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z">
                                            </path>
                                        </svg></button>


                                    <button data-bs-target="#suppression-article" data-bs-toggle="modal"
                                        class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0 shadow-none"
                                        type="button" style="margin-left: 10px; height: 35px; width: 35px;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z">
                                            </path>
                                        </svg></button>

                                </div><button class="btn btn-primary btn-sm bg-transparent border-primary shadow-none"
                                    type="button" data-bs-target="#details" data-bs-toggle="modal"
                                    style="color: var(--bs-btn-border-color);">Les détails</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="div-existed-articles">
                <div class="row d-flex flex-column-reverse flex-md-row">
                    <div class="col">
                        <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-end">
                                    <div class="bg-body-secondary border rounded-pill border-0"><input
                                            class="bg-transparent border-0" type="search"
                                            style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;"
                                            placeholder="Recherche" data-bs-theme="light" /></div>
                                </div>
                                <div>
                                    <select>
                                        <option value="Ventes">Ventes</option>
                                        <option value="Réservations">Réservations</option>
                                        <option value="Réquisitions">Réquisitions</option>

                                    </select>
                                    <button ref="monButton"
                                        class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center"
                                        type="button" data-bs-target="#requisition" data-bs-toggle="modal">
                                        <span>Ajouter</span>
                                    </button>
                                </div>
                            </div>

                            <div class="table-responsive" style="overflow: inherit;">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th id="cell_id">#</th>
                                            <th id="cell_name">Date</th>
                                            <th id="cell_cat" class="d-none d-sm-table-cell">Quantité</th>
                                            <th id="cell_spec" class="d-none d-md-table-cell">Prix d'achat</th>
                                            <th id="cell_price" class="d-none d-lg-table-cell">Fournisseur</th>
                                            <th id="cell_actions"
                                                class="d-flex justify-content-end justify-content-md-center">
                                                <span><strong>Actions</strong></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(requisition, index) in requisitions" :key="requisition.id"
                                            style="cursor: pointer;">
                                            <td>{{ index + 1 }}</td>
                                            <td>{{ requisition.date }}
                                            </td>
                                            <td class="d-none d-sm-table-cell" style="font-size: 13px;">
                                                {{ requisition.qtte }} article{{ requisition.qtte > 1 ? 's' : '' }}
                                            </td>
                                            <td class="d-none d-md-table-cell text-capitalize" style="font-size: 13px;">
                                                {{ requisition.montant }} {{ requisition.devise == 'USD' ? '$' : 'Fc' }}
                                            </td>
                                            <td class="text-capitalize d-none d-lg-table-cell" style="font-size: 13px;">
                                                {{ requisition.nomFournisseur }}
                                            </td>
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

                                                            <a id="item-dropdown" class="dropdown-item" href="#"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 -32 576 576" width="1em" height="1em"
                                                                    fill="currentColor" style="margin-right: 10px;">
                                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M160 256C160 185.3 217.3 128 288 128C358.7 128 416 185.3 416 256C416 326.7 358.7 384 288 384C217.3 384 160 326.7 160 256zM288 336C332.2 336 368 300.2 368 256C368 211.8 332.2 176 288 176C287.3 176 286.7 176 285.1 176C287.3 181.1 288 186.5 288 192C288 227.3 259.3 256 224 256C218.5 256 213.1 255.3 208 253.1C208 254.7 208 255.3 208 255.1C208 300.2 243.8 336 288 336L288 336zM95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6V112.6zM288 80C222.8 80 169.2 109.6 128.1 147.7C89.6 183.5 63.02 225.1 49.44 256C63.02 286 89.6 328.5 128.1 364.3C169.2 402.4 222.8 432 288 432C353.2 432 406.8 402.4 447.9 364.3C486.4 328.5 512.1 286 526.6 256C512.1 225.1 486.4 183.5 447.9 147.7C406.8 109.6 353.2 80 288 80V80z">
                                                                    </path>
                                                                </svg>Visualiser</a>


                                                            <a id="item-dropdown" class="dropdown-item"
                                                                data-bs-target="#requisition" data-bs-toggle="modal"
                                                                @click.prevent="updateRequisition(requisition)"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                    width="1em" height="1em" fill="currentColor"
                                                                    style="margin-right: 10px;">
                                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z">
                                                                    </path>
                                                                </svg>Modifier</a>


                                                            <a id="item-dropdown" class="dropdown-item"
                                                                @click.prevent="deleteReq(requisition.id)"><svg
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



    <div id="modifier-article" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Modification de l&#39;article</h4><button class="btn-close shadow-none"
                        type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">

                    <form method="post" @submit.prevent="form.put('/articles')">

                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="nom">Image de l&#39;article</label>
                            <div class="border-1 border-secondary-subtle d-flex flex-row align-items-center"><input
                                    class="bg-transparent border-0 shadow-none form-control-sm" type="file"
                                    style="width: 100%;" accept="image/*" /></div><span class="text-primary"
                                style="font-size: 13px;">Formulaire</span>
                        </div>

                        <div class="mb-2">
                            <label class="form-label" style="font-size: 12px;margin-bottom: 2px;" for="nom">Nom de
                                l'article</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input v-model="form.nom" id="nom"
                                    class="bg-transparent border-0 form-control-sm" type="text"
                                    style="width: 100%;outline: none;" name="nom" placeholder="Nom de l&#39;article" />
                            </div><span class="text-primary" style="font-size: 13px;" v-if="form.errors.nom">{{
                                form.errors.nom }}</span>
                        </div>

                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="prix">Catégorie</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <select v-model="form.categorie_id"
                                    class="bg-transparent border-0 shadow-none form-select-sm"
                                    style="width: 100%;outline: none;">
                                    <option v-for="categorie in categories" :value="categorie.id">
                                        {{ categorie.nom }}
                                    </option>
                                </select>
                            </div><span class="text-primary" style="font-size: 13px;" v-if="form.errors.categorie_id">{{
                                form.errors.categorie_id }}</span>
                        </div>

                        <div class="mb-2" v-if="form.categorie_id"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;" for="prix">Spécification</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <select v-model="form.specification_id"
                                    class="bg-transparent border-0 shadow-none form-select-sm"
                                    style="width: 100%;outline: none;">
                                    <option v-for="specification in get(form.categorie_id)" :value="specification.id">{{
                                        specification.nom }}</option>
                                </select>
                            </div><span class="text-primary" style="font-size: 13px;" v-if="form.errors.specification_id">{{
                                form.errors.specification_id }}</span>
                        </div>

                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="prix">Prix
                                unitaire</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">

                                <input id="price-3" class="bg-transparent border-0 shadow-none" v-model="form.prix"
                                    type="number" style="width: 100%;outline: none;height: 31px;padding-left: 10px;"
                                    name="prix" placeholder="Prix unitaire" min="0" step="1" />

                                <select v-model="form.devise" class="bg-transparent border-0 shadow-none"
                                    style="height: 100%;outline: none;" name="devise">
                                    <option value="USD">USD</option>
                                    <option value="CDF">CDF</option>
                                </select>
                            </div><span class="text-primary" style="font-size: 13px;"
                                v-if="form.errors.prix || form.errors.devise">Ce champ n'est pas correcte</span>
                        </div>

                        <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                for="specification">Description de l'article</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">

                                <textarea class="bg-transparent border-0 shadow-none" v-model="form.description"
                                    style="width: 100%;height: 100px;outline: none;resize: none;"
                                    placeholder="La description de l&#39;article"></textarea>
                            </div><span class="text-primary" style="font-size: 13px;" v-if="form.errors.description">{{
                                form.errors.description }}</span>
                        </div>

                        <div>
                            <div>
                                <button class="btn btn-primary btn-sm link-light border-0" :disabled="form.processing"
                                    type="submit">Modifier</button>
                            </div>
                        </div>
                    </form>

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


    <div id="details" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Ajouter un détail</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <form method="post" @submit.prevent="formDetails.id === null ?
                        formDetails.post('/articles/details', {
                            onSuccess: () => {
                                detailsSuccess = true
                                detailsUpdateSuccess = false
                                formDetails.reset()
                            }
                        }) : formDetails.put('/articles/details', {
                            onSuccess: () => {
                                detailsUpdateSuccess = true
                                detailsSuccess = false
                                formDetails.reset()
                            }
                        })">
                        <div>
                            <div class="mb-2">
                                <label class="form-label" style="font-size: 12px;margin-bottom: 2px;" for="nom">Nom du
                                    détail</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;">
                                    <input id="nom-3" v-model="formDetails.nom"
                                        class="bg-transparent border-0 form-control-sm" type="text"
                                        style="width: 100%;outline: none;" name="nom" placeholder="Nom" />
                                </div><span class="text-primary" v-if="formDetails.errors.nom" style="font-size: 13px;">{{
                                    formDetails.errors.nom }}</span>
                            </div>
                            <div class="mb-2"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;"
                                    for="nom">Valeur du détaille</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;"><input v-model="formDetails.valeur"
                                        class="bg-transparent border-0 form-control-sm" type="text"
                                        style="width: 100%;outline: none;" placeholder="Valeur" /></div><span
                                    class="text-primary" v-if="formDetails.errors.valeur" style="font-size: 13px;">{{
                                        formDetails.errors.valeur }}</span>
                            </div>
                            <div class="mb-2">
                                <div style="display: flex; justify-content: space-between;">
                                    <button :disabled="form.processing" class="btn btn-primary btn-sm link-light"
                                        type="submit">{{ formDetails.id ? 'Modifier' : 'Ajouter' }}</button>
                                    <button style="border: none; background-color: transparent;"
                                        @click.prevent="clearForm()">Vider</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div>
                        <div>
                            <span class="fw-bold">Les détails de l&#39;article</span>
                        </div>
                        <div v-for="detail in details" class="bg-body-secondary border rounded border-0 mb-2"
                            style="padding: 10px;">
                            <div class="d-flex justify-content-between align-items-center"><span style="font-size: 13px;"
                                    class="text-capitalize">{{
                                        detail.nom }}</span>
                                <div>
                                    <button @click="updateDetail(detail)"
                                        class="btn btn-primary btn-sm link-body-emphasis bg-transparent border-0 shadow-none"
                                        type="button" style="padding: 0px;"><svg class="fs-6"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z">
                                            </path>
                                        </svg></button>

                                    <button @click="deleteThisDetail(detail.id)"
                                        class="btn btn-primary btn-sm link-body-emphasis bg-transparent border-0 shadow-none"
                                        type="button" style="margin-left: 25px;padding: 0px;"><svg class="fs-6"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                            </path>
                                        </svg></button>
                                </div>
                            </div>
                            <div style="margin-top: 5px;"><span class="text-capitalize text-body-secondary"
                                    style="font-size: 13px;">{{
                                        detail.valeur }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="visualiser" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-fullscreen-md-down" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Title</h4><button class="btn-close" type="button" aria-label="Close"
                        data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>The content of your modal.</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button"
                        data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>


    <div id="suppression-article" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Suppression</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Voulez-vous supprimer cet article?</p>
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between"><button
                        class="btn btn-light btn-sm bg-transparent border-0" type="button"
                        data-bs-dismiss="modal">Annuler</button>

                    <button class="btn btn-primary btn-sm link-light border-0" @click="deleteThisArticle()"
                        type="button">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</template>
    
<script>
import { Link, useForm, router } from '@inertiajs/vue3';
import Header from '../../../Components/Header/Header.vue';

export default {
    components: {
        Header
    },
    props: {
        article: Object,
        categories: Object,
        specifications: Object,
        fournisseurs: Object,
        devises: Object,
        details: Object,
        requisitions: Object,
        paiements: Object
    },
    mounted() {
        // console.log(this.article);
    },
    data() {
        return {

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

            deleteArticle: useForm({
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
        }
    },
    methods: {
        get(car) {
            let array = []
            for (let i = 0; i < this.specifications.length; i++) {
                if (this.specifications[i].categorie_id == car) {
                    array.push(this.specifications[i])
                }
            }

            return array
        },

        updateDetail(detail) {
            formDetails.id = detail.id;
            formDetails.nom = detail.nom;
            formDetails.valeur = detail.valeur;
        },

        submitRequisition() {
            this.formRequisition.post('/requisitions', {
                onSuccess: () => {
                    this.$refs.monButton.click()
                    this.formRequisition.reset()
                }
            })
        },

        deleteThisDetail(id) {
            deleteDetail.id = id
            deleteDetail.delete('/articles/details', { id: id })
        },

        updateRequisition(requisition) {

            console.log(updateRequisition);

            this.formRequisition.id = requisition.id
            this.formRequisition.qtte = requisition.qtte
            this.formRequisition.devise = requisition.devise
            this.formRequisition.montant = requisition.montant
            this.formRequisition.date = requisition.date
            this.formRequisition.fournisseur_id = requisition.fournisseur_id
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

        deleteThisArticle() {
            deleteArticle.id = article.id
            deleteArticle.delete('/articles', { id: article.id })
            router.get('/articles')

            const div = document.querySelector(".modal-backdrop")
            const myAtt = document.querySelector("body")
            myAtt.removeAttribute('style')
            div.remove();
        }
    }
}



</script>