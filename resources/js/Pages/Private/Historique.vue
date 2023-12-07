<template>
    <Header></Header>


    <div class="container" style="padding-top: 15px;">
        <div style="margin-bottom: 15px;">
            <h4 class="text-body-tertiary">Ventes / Historique</h4>
        </div>

        <ul>
            <li>Trie selon le status de la commande</li>
        </ul>

        <div v-for="(vente, key) in ventes" class="bg-body border rounded border-0 shadow"
            style="padding: 10px;margin-top: 15px;">
            <div id="infos-vente" class="d-flex justify-content-between mb-3">
                <div>
                    <div class="d-flex mb-1"><span style="font-size: 13px;">Nom &amp; Postnom : </span><span
                            class="text-capitalize" style="font-size: 13px;">Text</span></div>
                    <div class="d-flex mb-1"><span style="font-size: 13px;">Adresse mail : </span><span
                            class="text-lowercase" style="font-size: 13px;">Text</span></div>
                    <div class="d-flex mb-1"><span style="font-size: 13px;">Numéro de téléphone : </span><span
                            style="font-size: 13px;">Text</span></div>
                    <div class="d-flex mb-1"><span style="font-size: 13px;">Adresse : </span><span
                            style="font-size: 13px;">Text</span></div>
                    <div class="d-flex mb-1"><span style="font-size: 13px;">Date : </span><span style="font-size: 13px;">
                            ...</span></div>
                    <div class="d-flex mb-1"><span style="font-size: 13px;">N° : </span><span style="font-size: 13px;">{{
                        key }}</span></div>
                </div>

                <div class="dropdown"><button style="height: 30px;"
                        class="btn btn-primary btn-sm bg-body-secondary border-0" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button"><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z">
                            </path>
                        </svg></button>
                    <div class="dropdown-menu border-0 shadow" style="padding: 0px;"><a id="item-dropdown"
                            class="dropdown-item d-flex align-items-center" href="#"><svg class="bi bi-printer-fill"
                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                viewBox="0 0 16 16" style="margin-right: 10px;">
                                <path
                                    d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z">
                                </path>
                                <path
                                    d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z">
                                </path>
                            </svg>Imprimer</a><a id="item-dropdown" class="dropdown-item d-flex align-items-center"
                            href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                fill="currentColor" style="margin-right: 10px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M480 352h-133.5l-45.25 45.25C289.2 409.3 273.1 416 256 416s-33.16-6.656-45.25-18.75L165.5 352H32c-17.67 0-32 14.33-32 32v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96C512 366.3 497.7 352 480 352zM432 456c-13.2 0-24-10.8-24-24c0-13.2 10.8-24 24-24s24 10.8 24 24C456 445.2 445.2 456 432 456zM233.4 374.6C239.6 380.9 247.8 384 256 384s16.38-3.125 22.62-9.375l128-128c12.49-12.5 12.49-32.75 0-45.25c-12.5-12.5-32.76-12.5-45.25 0L288 274.8V32c0-17.67-14.33-32-32-32C238.3 0 224 14.33 224 32v242.8L150.6 201.4c-12.49-12.5-32.75-12.5-45.25 0c-12.49 12.5-12.49 32.75 0 45.25L233.4 374.6z">
                                </path>
                            </svg>Télécharger</a><a id="item-dropdown" class="dropdown-item d-flex align-items-center"
                            href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                fill="currentColor" style="margin-right: 10px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M490.3 40.4C512.2 62.27 512.2 97.73 490.3 119.6L460.3 149.7L362.3 51.72L392.4 21.66C414.3-.2135 449.7-.2135 471.6 21.66L490.3 40.4zM172.4 241.7L339.7 74.34L437.7 172.3L270.3 339.6C264.2 345.8 256.7 350.4 248.4 353.2L159.6 382.8C150.1 385.6 141.5 383.4 135 376.1C128.6 370.5 126.4 361 129.2 352.4L158.8 263.6C161.6 255.3 166.2 247.8 172.4 241.7V241.7zM192 63.1C209.7 63.1 224 78.33 224 95.1C224 113.7 209.7 127.1 192 127.1H96C78.33 127.1 64 142.3 64 159.1V416C64 433.7 78.33 448 96 448H352C369.7 448 384 433.7 384 416V319.1C384 302.3 398.3 287.1 416 287.1C433.7 287.1 448 302.3 448 319.1V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V159.1C0 106.1 42.98 63.1 96 63.1H192z">
                                </path>
                            </svg>Modifier</a><a id="item-dropdown" class="dropdown-item d-flex align-items-center"
                            href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                height="1em" fill="currentColor" style="margin-right: 10px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z">
                                </path>
                            </svg>Supprimer</a></div>
                </div>
            </div>

            <div class="table-responsive" style="overflow: inherit;">
                <div class="table-responsive" style="overflow: inherit;">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th id="cell_id-1">N°</th>
                                <th id="cell_name-1">Nom de l&#39;article</th>
                                <th id="cell_cat-1" class="d-none d-sm-table-cell">Quantité</th>
                                <th id="cell_spec-1" class="d-none d-md-table-cell">Prix unitaire</th>
                                <th class="d-none d-lg-table-cell">Prix total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(detail, detailKey) in vente">
                                <td>{{ detailKey+1 }}</td>
                                <td class="text-capitalize">
                                    HP Elitebook
                                </td>
                                <td class="text-capitalize d-none d-sm-table-cell" style="font-size: 13px;">2 articles</td>
                                <td class="text-capitalize d-none d-md-table-cell" style="font-size: 13px;">490$</td>
                                <td class="text-capitalize d-none d-lg-table-cell" style="font-size: 13px;">89 USD</td>
                            </tr>
                            <tr class="d-none d-md-table-row">
                                <td class="border-0"></td>
                                <td class="text-capitalize border-0 d-none d-md-table-cell"></td>
                                <td class="text-capitalize border-0 d-none d-lg-table-cell" style="font-size: 13px;"></td>
                                <td class="text-capitalize fw-bold" style="font-size: 13px;">Total</td>
                                <td class="text-capitalize fw-bold" style="font-size: 13px;">89 $</td>
                            </tr>
                            <tr class="d-none d-md-table-row">
                                <td class="border-0"></td>
                                <td class="text-capitalize border-0 d-none d-md-table-cell"></td>
                                <td class="border-0 d-none d-lg-table-cell" style="font-size: 13px;"></td>
                                <td class="text-capitalize fw-bold" style="font-size: 13px;">Total</td>
                                <td class="text-capitalize fw-bold" style="font-size: 13px;">89 Fc</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="div-prix" class="d-md-none mb-2">
                <div class="d-flex mb-1"><span style="font-size: 13px;">Total en $ : </span><span class="text-capitalize"
                        style="font-size: 13px;">Text</span></div>
                <div class="d-flex mb-1"><span style="font-size: 13px;">Total en Fc : </span><span class="text-lowercase"
                        style="font-size: 13px;">Text</span></div>
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
    props: ['ventes'],
    mounted() {
        console.log(this.ventes);
    },
}


</script>