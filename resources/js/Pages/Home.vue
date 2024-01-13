<template>
    <body class="bg-dark-subtle">

        <Header :myUser="myUser"></Header>

        <div class="container" style="padding-top: 15px;">

            <div class="d-flex mb-4" style="height: 380px;">
                <div id="div-list-categories" class="bg-body border rounded border-0 shadow-sm d-none d-md-block">
                    <div class="d-flex align-items-center" style="height: 10%;padding: 5px;">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item"><a class="nav-link fw-bold link-body-emphasis"><svg class="me-2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                        fill="currentColor">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M256 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H256C273.7 32 288 46.33 288 64C288 81.67 273.7 96 256 96zM256 352H32C14.33 352 0 337.7 0 320C0 302.3 14.33 288 32 288H256C273.7 288 288 302.3 288 320C288 337.7 273.7 352 256 352zM0 192C0 174.3 14.33 160 32 160H416C433.7 160 448 174.3 448 192C448 209.7 433.7 224 416 224H32C14.33 224 0 209.7 0 192zM416 480H32C14.33 480 0 465.7 0 448C0 430.3 14.33 416 32 416H416C433.7 416 448 430.3 448 448C448 465.7 433.7 480 416 480z">
                                        </path>
                                    </svg> Catégories </a></li>
                        </ul>
                    </div>
                    <div id="div-cont-categories">
                        <div>
                            <ul class="nav nav-pills flex-column mb-auto">
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=ordinateur"><svg class="bi bi-laptop me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z">
                                            </path>
                                        </svg> Ordinateurs</a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=téléphones"><svg class="bi bi-phone me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z">
                                            </path>
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                                        </svg> Téléphones</a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=tablettes"><svg class="bi bi-inbox me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z">
                                            </path>
                                        </svg> Tablettes</a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=télévisions"><svg class="bi bi-magnet me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a7 7 0 0 0-7 7v3h4V8a3 3 0 0 1 6 0v3h4V8a7 7 0 0 0-7-7Zm7 11h-4v3h4v-3ZM5 12H1v3h4v-3ZM0 8a8 8 0 1 1 16 0v8h-6V8a2 2 0 1 0-4 0v8H0V8Z">
                                            </path>
                                        </svg> Télévisions</a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=chemises"><svg class="bi bi-universal-access me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9V5.5Z">
                                            </path>
                                        </svg> Chemises</a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=pantalons"><svg class="bi bi-palette2 me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a2.99 2.99 0 0 1-2.121-.879A2.99 2.99 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188v5.647zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zM15 15v-4H9.258l-4.015 4H15zM0 .5v12.495V.5z">
                                            </path>
                                            <path d="M0 12.995V13a3.07 3.07 0 0 0 0-.005z"></path>
                                        </svg> Pantalons</a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=robes"><svg class="bi bi-egg-fried me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                            <path
                                                d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z">
                                            </path>
                                        </svg> Robes</a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=chaussures"><svg class="bi bi-magic me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 2.672a.5.5 0 1 0 1 0V.843a.5.5 0 0 0-1 0v1.829Zm4.5.035A.5.5 0 0 0 13.293 2L12 3.293a.5.5 0 1 0 .707.707L14 2.707ZM7.293 4A.5.5 0 1 0 8 3.293L6.707 2A.5.5 0 0 0 6 2.707L7.293 4Zm-.621 2.5a.5.5 0 1 0 0-1H4.843a.5.5 0 1 0 0 1h1.829Zm8.485 0a.5.5 0 1 0 0-1h-1.829a.5.5 0 0 0 0 1h1.829ZM13.293 10A.5.5 0 1 0 14 9.293L12.707 8a.5.5 0 1 0-.707.707L13.293 10ZM9.5 11.157a.5.5 0 0 0 1 0V9.328a.5.5 0 0 0-1 0v1.829Zm1.854-5.097a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L8.646 5.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0l1.293-1.293Zm-3 3a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L.646 13.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0L8.354 9.06Z">
                                            </path>
                                        </svg> Chaussures</a></li>
                                <li class="nav-item"><a id="link-list-categories" class="nav-link link-body-emphasis"
                                        href="?categorie=staté et beauté"><svg class="bi bi-person-bounding-box me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z">
                                            </path>
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z">
                                            </path>
                                        </svg> Santé et beauté</a></li>
                                <li class="nav-item"><a id="link-list-categories-15" class="nav-link link-body-emphasis"
                                        href="?categorie=autres"><svg class="bi bi-pentagon me-2"
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M7.685 1.545a.5.5 0 0 1 .63 0l6.263 5.088a.5.5 0 0 1 .161.539l-2.362 7.479a.5.5 0 0 1-.476.349H4.099a.5.5 0 0 1-.476-.35L1.26 7.173a.5.5 0 0 1 .161-.54l6.263-5.087Zm8.213 5.28a.5.5 0 0 0-.162-.54L8.316.257a.5.5 0 0 0-.631 0L.264 6.286a.5.5 0 0 0-.162.538l2.788 8.827a.5.5 0 0 0 .476.349h9.268a.5.5 0 0 0 .476-.35l2.788-8.826Z">
                                            </path>
                                        </svg> Autres</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div id="div-pub-panel">
                    <div style="padding-bottom: 15px;overflow: hidden;/*height: 17%;*/">
                        <div class="bg-body border rounded-pill border-0 shadow-sm"
                            style="/*border-radius: 15px;*//*border-style: solid;*//*border-color: var(--bs-light-border-subtle);*/overflow: hidden;">


                            <div class="d-flex" style="height: 42px;"><button
                                    class="btn btn-primary link-light border rounded-pill shadow-none d-flex d-md-none align-items-center"
                                    type="button" style="margin: 2px;outline: none;" data-bs-target="#modal-categorie"
                                    data-bs-toggle="modal"><i class="fas fa-tasks"></i></button><input
                                    class="bg-transparent border-0 shadow-none" type="search" placeholder="Recherche"
                                    name="search" style="width: 100%;outline: none;padding-left: 15px;" /><button
                                    class="btn btn-primary link-light border rounded-pill border-0" type="submit"
                                    style="margin: 3px;outline: none;"><i class="fas fa-search"></i></button></div>


                        </div>
                    </div>
                    <div id="pub-panel" class="carousel slide border rounded border-0 shadow-sm" data-bs-ride="carousel"
                        data-bs-interval="15000" data-bs-pause="false">
                        <div class="carousel-inner border rounded border-0 shadow-sm"
                            style="height: 100%;/*border-radius: 15px;*/cursor: pointer;">
                            <div id="my-slide" class="carousel-item active border rounded border-0">
                                <div style="width: 100%;height: 100%;">
                                    <img class="border rounded border-0" style="width: 100%;height: 100%;"
                                        src="/images/image1.jpg" />
                                </div>
                            </div>
                            <div id="my-slide" class="carousel-item border rounded border-0">
                                <div style="width: 100%;height: 100%;">
                                    <img class="border rounded border-0" style="width: 100%;height: 100%;"
                                        src="images/image2.jpg" />
                                </div>
                            </div>
                            <div id="my-slide" class="carousel-item border rounded border-0">
                                <div style="width: 100%;height: 100%;">
                                    <img class="border rounded border-0" style="width: 100%;height: 100%;"
                                        src="images/test3.jpg" />
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicators"><button class="active" type="button" data-bs-target="#pub-panel"
                                data-bs-slide-to="0"></button><button type="button" data-bs-target="#pub-panel"
                                data-bs-slide-to="1"></button><button type="button" data-bs-target="#pub-panel"
                                data-bs-slide-to="2"></button></div>
                    </div>
                </div>

                <div id="div-account" class="d-none d-lg-block">

                    <div style="height: 40%;padding-bottom: 15px;text-align: center;">
                        <div class="bg-body border rounded border-0 shadow-sm"
                            style="padding: 10px;height: 100%;overflow: hidden;padding-top: 23px;">
                            <div id="div-gradient" style="margin-bottom: 15px;">
                                <h3 style="font-family: Montserrat, sans-serif;">Bienvenue</h3>
                            </div>
                            <p style="font-size: 13px;width: 80%;margin: auto;">Consuler, créer un compte et pasez des
                                achats</p>
                            <!-- <p v-if="checkBoutique">
                                get access to boutique
                            </p>
                            <p v-if="checkAuth && !checkBoutique">
                                create boutique
                            </p>
                            <p v-if="!checkAuth">
                                register or get connection
                            </p> -->
                        </div>
                    </div>

                    <!-- Liste des boutiques -->
                    <BoutiqueListe :boutiques="boutiques"></BoutiqueListe>

                </div>
            </div>

            <div v-for="categorie in categories">
                <ArticleBoxList :myUser="myUser" :contacts="contacts" :categorie="categorie"></ArticleBoxList>
            </div>

        </div>

        <div id="modal-categorie" class="modal fade" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Catégories</h4><button class="btn-close shadow-none" type="button"
                            aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item"><a id="link-list-categories-1" class="nav-link link-body-emphasis"
                                    href="?categorie=ordinateur"><svg class="bi bi-laptop me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z">
                                        </path>
                                    </svg> Ordinateurs</a></li>
                            <li class="nav-item"><a id="link-list-categories-2" class="nav-link link-body-emphasis"
                                    href="?categorie=téléphones"><svg class="bi bi-phone me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z">
                                        </path>
                                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                                    </svg> Téléphones</a></li>
                            <li class="nav-item"><a id="link-list-categories-3" class="nav-link link-body-emphasis"
                                    href="?categorie=tablettes"><svg class="bi bi-inbox me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M4.98 4a.5.5 0 0 0-.39.188L1.54 8H6a.5.5 0 0 1 .5.5 1.5 1.5 0 1 0 3 0A.5.5 0 0 1 10 8h4.46l-3.05-3.812A.5.5 0 0 0 11.02 4H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438L14.933 9zM3.809 3.563A1.5 1.5 0 0 1 4.981 3h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 13H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .106-.374l3.7-4.625z">
                                        </path>
                                    </svg> Tablettes</a></li>
                            <li class="nav-item"><a id="link-list-categories-4" class="nav-link link-body-emphasis"
                                    href="?categorie=télévisions"><svg class="bi bi-magnet me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a7 7 0 0 0-7 7v3h4V8a3 3 0 0 1 6 0v3h4V8a7 7 0 0 0-7-7Zm7 11h-4v3h4v-3ZM5 12H1v3h4v-3ZM0 8a8 8 0 1 1 16 0v8h-6V8a2 2 0 1 0-4 0v8H0V8Z">
                                        </path>
                                    </svg> Télévisions</a></li>
                            <li class="nav-item"><a id="link-list-categories-5" class="nav-link link-body-emphasis"
                                    href="?categorie=chemises"><svg class="bi bi-universal-access me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9V5.5Z">
                                        </path>
                                    </svg> Chemises</a></li>
                            <li class="nav-item"><a id="link-list-categories-6" class="nav-link link-body-emphasis"
                                    href="?categorie=pantalons"><svg class="bi bi-palette2 me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M0 .5A.5.5 0 0 1 .5 0h5a.5.5 0 0 1 .5.5v5.277l4.147-4.131a.5.5 0 0 1 .707 0l3.535 3.536a.5.5 0 0 1 0 .708L10.261 10H15.5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5H3a2.99 2.99 0 0 1-2.121-.879A2.99 2.99 0 0 1 0 13.044m6-.21 7.328-7.3-2.829-2.828L6 7.188v5.647zM4.5 13a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zM15 15v-4H9.258l-4.015 4H15zM0 .5v12.495V.5z">
                                        </path>
                                        <path d="M0 12.995V13a3.07 3.07 0 0 0 0-.005z"></path>
                                    </svg> Pantalons</a></li>
                            <li class="nav-item"><a id="link-list-categories-7" class="nav-link link-body-emphasis"
                                    href="?categorie=robes"><svg class="bi bi-egg-fried me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                        <path
                                            d="M13.997 5.17a5 5 0 0 0-8.101-4.09A5 5 0 0 0 1.28 9.342a5 5 0 0 0 8.336 5.109 3.5 3.5 0 0 0 5.201-4.065 3.001 3.001 0 0 0-.822-5.216zm-1-.034a1 1 0 0 0 .668.977 2.001 2.001 0 0 1 .547 3.478 1 1 0 0 0-.341 1.113 2.5 2.5 0 0 1-3.715 2.905 1 1 0 0 0-1.262.152 4 4 0 0 1-6.67-4.087 1 1 0 0 0-.2-1 4 4 0 0 1 3.693-6.61 1 1 0 0 0 .8-.2 4 4 0 0 1 6.48 3.273z">
                                        </path>
                                    </svg> Robes</a></li>
                            <li class="nav-item"><a id="link-list-categories-8" class="nav-link link-body-emphasis"
                                    href="?categorie=chaussures"><svg class="bi bi-magic me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 2.672a.5.5 0 1 0 1 0V.843a.5.5 0 0 0-1 0v1.829Zm4.5.035A.5.5 0 0 0 13.293 2L12 3.293a.5.5 0 1 0 .707.707L14 2.707ZM7.293 4A.5.5 0 1 0 8 3.293L6.707 2A.5.5 0 0 0 6 2.707L7.293 4Zm-.621 2.5a.5.5 0 1 0 0-1H4.843a.5.5 0 1 0 0 1h1.829Zm8.485 0a.5.5 0 1 0 0-1h-1.829a.5.5 0 0 0 0 1h1.829ZM13.293 10A.5.5 0 1 0 14 9.293L12.707 8a.5.5 0 1 0-.707.707L13.293 10ZM9.5 11.157a.5.5 0 0 0 1 0V9.328a.5.5 0 0 0-1 0v1.829Zm1.854-5.097a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L8.646 5.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0l1.293-1.293Zm-3 3a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L.646 13.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0L8.354 9.06Z">
                                        </path>
                                    </svg> Chaussures</a></li>
                            <li class="nav-item"><a id="link-list-categories-9" class="nav-link link-body-emphasis"
                                    href="?categorie=staté et beauté"><svg class="bi bi-person-bounding-box me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z">
                                        </path>
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z">
                                        </path>
                                    </svg> Santé et beauté</a></li>
                            <li class="nav-item"><a id="link-list-categories-10" class="nav-link link-body-emphasis"
                                    href="?categorie=autres"><svg class="bi bi-pentagon me-2"
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M7.685 1.545a.5.5 0 0 1 .63 0l6.263 5.088a.5.5 0 0 1 .161.539l-2.362 7.479a.5.5 0 0 1-.476.349H4.099a.5.5 0 0 1-.476-.35L1.26 7.173a.5.5 0 0 1 .161-.54l6.263-5.087Zm8.213 5.28a.5.5 0 0 0-.162-.54L8.316.257a.5.5 0 0 0-.631 0L.264 6.286a.5.5 0 0 0-.162.538l2.788 8.827a.5.5 0 0 0 .476.349h9.268a.5.5 0 0 0 .476-.35l2.788-8.826Z">
                                        </path>
                                    </svg> Autres</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container py-4 py-lg-5">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                        <h3 class="fs-6">Services</h3>
                        <ul class="list-unstyled">
                            <li><a class="link-secondary" href="#">Web design</a></li>
                            <li><a class="link-secondary" href="#">Development</a></li>
                            <li><a class="link-secondary" href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                        <h3 class="fs-6">About</h3>
                        <ul class="list-unstyled">
                            <li><a class="link-secondary" href="#">Company</a></li>
                            <li><a class="link-secondary" href="#">Team</a></li>
                            <li><a class="link-secondary" href="#">Legacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                        <h3 class="fs-6">Careers</h3>
                        <ul class="list-unstyled">
                            <li><a class="link-secondary" href="#">Job openings</a></li>
                            <li><a class="link-secondary" href="#">Employee success</a></li>
                            <li><a class="link-secondary" href="#">Benefits</a></li>
                        </ul>
                    </div>
                    <div
                        class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                        <div class="fw-bold d-flex align-items-center mb-2"><span
                                class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2"><svg
                                    class="bi bi-bezier" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                                    </path>
                                    <path
                                        d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                                    </path>
                                </svg></span><span>Brand</span></div>
                        <p class="text-muted copyright">Sem eleifend donec molestie, integer quisque orci aliquam.</p>
                    </div>
                </div>
                <hr />
                <div class="d-flex justify-content-between align-items-center pt-3">
                    <p class="text-muted mb-0">Copyright © 2023 Brand</p>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg"
                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                            </path>
                        </svg></li>
                    <li class="list-inline-item"><svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg"
                            width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></li>
                </ul>
            </div>
        </div>
    </footer>
</body></template>

<script>

import Header from '../Components/Header/Header.vue';
import BoutiqueListe from './Home/BoutiqueListe.vue';
import ArticleBoxList from './Home/Articles/Articles.vue';


export default {
    components: {
        Header,
        BoutiqueListe,
        ArticleBoxList
    },

    props: {
        myUser: Object,
        contacts: Object,
        checkBoutique: '',
        checkAuth: '',
        boutiques: Object,
        categories: Object,
    },

    mounted() {
        // console.log(this.contacts);
    }
}



</script>

