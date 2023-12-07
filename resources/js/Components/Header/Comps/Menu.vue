
<template>
    <div id="call-menu-navbar" class="offcanvas offcanvas-start" tabindex="-1">
        <div class="offcanvas-header d-flex flex-column" style="padding: 22px;">
            <div class="bg-body-secondary border rounded-pill border-0 d-flex justify-content-between align-items-center"
                style="width: 100%;font-size: 10px;padding: 10px;padding-right: 15px;">
                <div class="d-flex align-items-center">
                    <div
                        style="height: 40px;width: 40px;border-radius: 100%;border: 1px dashed var(--bs-gray-700);padding: 1px;">

                        <img v-if="infos.user && infos.user.image !== null" class="rounded-circle border-0" width="100%"
                            height="100%" src="/images/img_profile1.jpg" />

                        <svg v-if="infos.user == false || infos.user.image == null" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 36px;">

                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z">
                            </path>
                        </svg>

                    </div>
                    <span class="text-start d-flex flex-column" style="margin-left: 15px;">
                        <span class="fw-bold text-capitalize"
                            style="font-size: 12px;">
                            {{ infos.user.name ? infos.user.name : "Vous n'etes pas connecté" }} {{ infos.user.postnom }}
                        </span><span style="font-size: 10px;">
                            {{ infos.user.profession ? infos.user.profession : '...' }}
                        </span></span>
                </div><button class="btn-close shadow-none" type="button" aria-label="Close"
                    data-bs-target="#call-menu-navbar" data-bs-toggle="offcanvas"></button>
            </div>
        </div>
        <div class="offcanvas-body d-flex flex-column pt-0">


            <ul v-if="infos.user" class="nav nav-pills flex-column mb-auto">
                <li v-if="infos.boutique.length == 0" style="background-color: aquamarine;" id="link-menu" class="nav-item">
                    <a id="link-menu" class="nav-link" href="/boutique">
                        Créer un business en ligne
                    </a>
                </li>

                <li id="link-menu" class="nav-item">
                    <a id="link-menu" class="nav-link" href="/dashboard">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                            height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M160 80C160 53.49 181.5 32 208 32H240C266.5 32 288 53.49 288 80V432C288 458.5 266.5 480 240 480H208C181.5 480 160 458.5 160 432V80zM0 272C0 245.5 21.49 224 48 224H80C106.5 224 128 245.5 128 272V432C128 458.5 106.5 480 80 480H48C21.49 480 0 458.5 0 432V272zM400 96C426.5 96 448 117.5 448 144V432C448 458.5 426.5 480 400 480H368C341.5 480 320 458.5 320 432V144C320 117.5 341.5 96 368 96H400z">
                            </path>
                        </svg> Tableau de bord</a>
                </li>
                <li class="nav-item" style="opacity: 0.80;"><a id="link-menu" class="nav-link" href="/achats"><svg
                            class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em"
                            fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z">
                            </path>
                        </svg> Achats</a></li>
                <li v-if="infos.boutique.length !== 0" class="nav-item" style="opacity: 0.80;">
                    <a id="link-menu" class="nav-link" href="/ventes"><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M171.7 191.1H404.3L322.7 35.07C316.6 23.31 321.2 8.821 332.9 2.706C344.7-3.409 359.2 1.167 365.3 12.93L458.4 191.1H544C561.7 191.1 576 206.3 576 223.1C576 241.7 561.7 255.1 544 255.1L492.1 463.5C484.1 492 459.4 512 430 512H145.1C116.6 512 91 492 83.88 463.5L32 255.1C14.33 255.1 0 241.7 0 223.1C0 206.3 14.33 191.1 32 191.1H117.6L210.7 12.93C216.8 1.167 231.3-3.409 243.1 2.706C254.8 8.821 259.4 23.31 253.3 35.07L171.7 191.1zM191.1 303.1C191.1 295.1 184.8 287.1 175.1 287.1C167.2 287.1 159.1 295.1 159.1 303.1V399.1C159.1 408.8 167.2 415.1 175.1 415.1C184.8 415.1 191.1 408.8 191.1 399.1V303.1zM271.1 303.1V399.1C271.1 408.8 279.2 415.1 287.1 415.1C296.8 415.1 304 408.8 304 399.1V303.1C304 295.1 296.8 287.1 287.1 287.1C279.2 287.1 271.1 295.1 271.1 303.1zM416 303.1C416 295.1 408.8 287.1 400 287.1C391.2 287.1 384 295.1 384 303.1V399.1C384 408.8 391.2 415.1 400 415.1C408.8 415.1 416 408.8 416 399.1V303.1z">
                            </path>
                        </svg> Ventes</a>
                </li>
                <li id="link-menu" class="nav-item"><a id="link-menu" class="nav-link" href="/commandes"><svg class="me-2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                            fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z">
                            </path>
                        </svg> Commandes</a></li>
                <li v-if="infos.boutique.length !== 0" id="link-menu" class="nav-item">
                    <a id="link-menu" class="nav-link" href="/articles">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em"
                            height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M320 0H64C37.5 0 16 21.5 16 48v416C16 490.5 37.5 512 64 512h256c26.5 0 48-21.5 48-48v-416C368 21.5 346.5 0 320 0zM240 447.1C240 456.8 232.8 464 224 464H159.1C151.2 464 144 456.8 144 448S151.2 432 160 432h64C232.8 432 240 439.2 240 447.1zM304 384h-224V64h224V384z">
                            </path>
                        </svg> Gestion d&#39;articles
                    </a>
                </li>

                <li v-if="infos.boutique.length !== 0" id="link-menu" class="nav-item">
                    <a id="link-menu" class="nav-link" href="/fournisseurs">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em"
                            height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z">
                            </path>
                        </svg> Mes fournisseurs
                    </a>
                </li>

                <li v-if="infos.boutique.length !== 0" id="link-menu" class="nav-item">
                    <a id="link-menu" class="nav-link" href="/clients">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em"
                            height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M224 256c70.7 0 128-57.31 128-128S294.7 0 224 0C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3c-95.73 0-173.3 77.6-173.3 173.3C0 496.5 15.52 512 34.66 512H413.3C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM479.1 320h-73.85C451.2 357.7 480 414.1 480 477.3C480 490.1 476.2 501.9 470 512h138C625.7 512 640 497.6 640 479.1C640 391.6 568.4 320 479.1 320zM432 256C493.9 256 544 205.9 544 144S493.9 32 432 32c-25.11 0-48.04 8.555-66.72 22.51C376.8 76.63 384 101.4 384 128c0 35.52-11.93 68.14-31.59 94.71C372.7 243.2 400.8 256 432 256z">
                            </path>
                        </svg> Mes clients
                    </a>
                </li>

                <li v-if="infos.boutique.length !== 0" id="link-menu" class="nav-item">
                    <a id="link-menu" class="nav-link" href="/boutique">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em"
                            height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M0 155.2C0 147.9 2.153 140.8 6.188 134.7L81.75 21.37C90.65 8.021 105.6 0 121.7 0H518.3C534.4 0 549.3 8.021 558.2 21.37L633.8 134.7C637.8 140.8 640 147.9 640 155.2C640 175.5 623.5 192 603.2 192H36.84C16.5 192 .0003 175.5 .0003 155.2H0zM64 224H128V384H320V224H384V464C384 490.5 362.5 512 336 512H112C85.49 512 64 490.5 64 464V224zM512 224H576V480C576 497.7 561.7 512 544 512C526.3 512 512 497.7 512 480V224z">
                            </path>
                        </svg>
                        Ma boutique
                    </a>
                </li>
                <li id="link-menu" class="nav-item" style="width: 91%;margin: auto;">
                    <hr style="margin-top: 10px;margin-bottom: 10px;" />
                </li>
                <li id="link-menu" class="nav-item">
                    <a id="link-menu" class="nav-link" href="/profile"><svg class="me-2" xmlns="http://www.w3.org/2000/svg"
                            viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                            </path>
                        </svg> Profile</a>
                </li>

                <li id="link-menu" class="nav-item" style="cursor: pointer;">
                    <a id="link-menu" class="nav-link" @click="desconnect">
                        <i class="fas fa-power-off me-2"></i> Déconnexion
                    </a>
                </li>
            </ul>


            <div v-if="infos.user == false" id="carousel-new-account"
                class="carousel slide bg-body-secondary border rounded border-0" data-bs-ride="carousel"
                style="height: 200px;padding: 10px; margin-bottom: 20px;">
                <div class="carousel-inner" style="height: 100%;">
                    <div class="carousel-item" style="height: 100%;width: 100%;">
                        <div style="height: 100%;">
                            <div id="div-gradient" style="margin-bottom: 15px;">
                                <h1 class="fw-bold" style="font-family: Montserrat, sans-serif;">Your Tittle</h1>
                            </div>
                            <div>
                                <p>Your content</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active" style="height: 100%;width: 100%;">
                        <div style="height: 100%;">
                            <div id="div-gradient" style="margin-bottom: 15px;">
                                <h1 class="fw-bold" style="font-family: Montserrat, sans-serif;">Your Tittl</h1>
                            </div>
                            <div>
                                <p>Your content</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 100%;width: 100%;">
                        <div style="height: 100%;">
                            <div id="div-gradient" style="margin-bottom: 15px;">
                                <h1 class="fw-bold" style="font-family: Montserrat, sans-serif;">Your Tittle</h1>
                            </div>
                            <div>
                                <p>Your content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="!infos.user" style="padding: 10px; margin-bottom: 20px;"
                class="bg-body-secondary border rounded border-0">
                <a href="/register">Créer un nouveau compte</a>
            </div>

            <div v-if="!infos.user" style="padding: 10px; margin-bottom: 20px;"
                class="bg-body-secondary border rounded border-0">
                <a href="/login">Connectez-vous</a>
            </div>
        </div>
    </div>
</template>

<script>

import axios from 'axios'

export default {
    data() {
        return {
            infos: {
                user: '',
                boutique: '',
            },
            unAuth: ''
        }
    },
    async mounted() {
        await axios.post('/userInformations').then((resp) => {
            this.infos.user = resp.data.user ? resp.data.user : false
            this.infos.boutique = resp.data.boutique ? resp.data.boutique : false
        }).catch((err) => {
            this.unAuth = err.response.data.message
        })
    },
    methods: {
        desconnect() {
            axios.post('/logout').then((resp) => {
                window.location.replace('/')
            })
        },
    }
}


</script>