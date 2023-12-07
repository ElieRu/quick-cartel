<template>
    <Header></Header>


    <div  style="position: absolute;height: 77%;width: 100%;">
        <div class="container" style="padding-top: 15px;height: 100%;">
            <div class="bg-body border rounded border-0 shadow d-flex flex-column justify-content-center align-items-center"
                style="height: 100%;width: 100%;">
                <div class="row justify-content-center" style="width: 100%;">
                    <div class="col-12 col-sm-6">
                        <div class="d-flex flex-column align-items-center"><img id="img-new-boutique"
                                src="/images/3d-casual-life-creating-new-document-with-button.png"
                                style="width: 130px;height: 140px;" />
                            <div class="text-center text-body-tertiary d-flex flex-column"
                                style="font-size: 12px;margin-top: 15px;"><span style="font-size: 12px;">Vous n&#39;avez
                                    passer</span><span>aucun achat.</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div v-if="false" class="container" style="padding-top: 15px;">
        <div>
            <h1>Mes achats</h1>
        </div>
        <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
            <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 15px;">
                <div class="d-flex flex-column"><span class="fs-6 fw-bold">Mes achats</span></div>
                <div class="bg-body-secondary border rounded-pill border-0"><input class="bg-transparent border-0"
                        type="search" style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;"
                        placeholder="Recherche" data-bs-theme="light" /></div>
            </div>
            <div class="table-responsive" style="overflow: inherit;">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th id="cell_id">#</th>
                            <th id="cell_name">Nom de l&#39;article</th>
                            <th id="cell_cat" class="d-none d-sm-table-cell">Quantité</th>
                            <th id="cell_spec" class="d-none d-md-table-cell">Montant</th>
                            <th class="d-none d-lg-table-cell">Date d&#39;achat</th>
                            <th class="d-none d-xl-table-cell">Vendeur</th>
                            <th id="cell_actions" class="d-flex justify-content-end justify-content-md-center">
                                <span><strong>Actions</strong></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-capitalize"><a href="#">Link</a></td>
                            <td class="text-capitalize d-none d-sm-table-cell" style="font-size: 13px;">Cell 2</td>
                            <td class="text-capitalize d-none d-md-table-cell" style="font-size: 13px;">Cell 2</td>
                            <td class="text-capitalize d-none d-lg-table-cell" style="font-size: 13px;">ttttt</td>
                            <td class="text-capitalize d-none d-xl-table-cell" style="font-size: 13px;">Cell 2</td>
                            <td class="d-flex justify-content-end justify-content-md-center">
                                <div>
                                    <div class="dropdown"><button
                                            class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0"
                                            aria-expanded="false" data-bs-toggle="dropdown" type="button"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                                height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                                </path>
                                            </svg></button>
                                        <div class="dropdown-menu border-0 shadow" style="padding: 5px;font-size: 13px;"><a
                                                id="item-dropdown" class="dropdown-item" href="#"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em"
                                                    height="1em" fill="currentColor" style="margin-right: 10px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M160 256C160 185.3 217.3 128 288 128C358.7 128 416 185.3 416 256C416 326.7 358.7 384 288 384C217.3 384 160 326.7 160 256zM288 336C332.2 336 368 300.2 368 256C368 211.8 332.2 176 288 176C287.3 176 286.7 176 285.1 176C287.3 181.1 288 186.5 288 192C288 227.3 259.3 256 224 256C218.5 256 213.1 255.3 208 253.1C208 254.7 208 255.3 208 255.1C208 300.2 243.8 336 288 336L288 336zM95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6V112.6zM288 80C222.8 80 169.2 109.6 128.1 147.7C89.6 183.5 63.02 225.1 49.44 256C63.02 286 89.6 328.5 128.1 364.3C169.2 402.4 222.8 432 288 432C353.2 432 406.8 402.4 447.9 364.3C486.4 328.5 512.1 286 526.6 256C512.1 225.1 486.4 183.5 447.9 147.7C406.8 109.6 353.2 80 288 80V80z">
                                                    </path>
                                                </svg>Visualiser</a><a id="item-dropdown" class="dropdown-item"
                                                href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    width="1em" height="1em" fill="currentColor"
                                                    style="margin-right: 10px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z">
                                                    </path>
                                                </svg>Télécharger</a><a id="item-dropdown" class="dropdown-item"
                                                href="#"><svg class="bi bi-printer-fill" xmlns="http://www.w3.org/2000/svg"
                                                    width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                                                    style="margin-right: 10px;">
                                                    <path
                                                        d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z">
                                                    </path>
                                                    <path
                                                        d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z">
                                                    </path>
                                                </svg>Imprimer</a><a id="item-dropdown" class="dropdown-item" href="#"
                                                data-bs-target="#delete-modal" data-bs-toggle="modal"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                    height="1em" fill="currentColor" style="margin-right: 10px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                    </path>
                                                </svg>Supprimer</a></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end">
                <nav>
                    <ul class="list-inline d-flex">
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;" disable><span
                                    style="color: rgb(108, 117, 125);">«</span></a></li>
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;"><span
                                    style="color: rgb(108, 117, 125);">1</span></a></li>
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;"><span
                                    style="color: rgb(108, 117, 125);">2</span></a></li>
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;"><span
                                    style="color: rgb(108, 117, 125);">3</span></a></li>
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;"><span
                                    style="color: rgb(108, 117, 125);">»</span></a></li>
                    </ul>
                </nav>
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