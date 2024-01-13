<template>
        <div id="notices" class="offcanvas offcanvas-end" tabindex="-1">
                <div class="offcanvas-header">
                        <header
                                class="link-body-emphasis d-flex align-items-center me-md-auto mb-3 mb-md-0 text-decoration-none">
                                Notifications</header>
                        <button class="btn-close shadow-none" type="button" aria-label="Close"
                                data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-between p-0">
                        <div style="width: 100%; height: 100%;"
                                class="d-flex flex-column justify-content-center align-items-center">
                                <div>
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                                <div class="d-flex flex-column align-items-center"><svg class="fs-1 mb-2"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512"
                                                                width="1em" height="1em" fill="currentColor">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path
                                                                        d="M256 32V51.2C329 66.03 384 130.6 384 208V226.8C384 273.9 401.3 319.2 432.5 354.4L439.9 362.7C448.3 372.2 450.4 385.6 445.2 397.1C440 408.6 428.6 416 416 416H32C19.4 416 7.971 408.6 2.809 397.1C-2.353 385.6-.2883 372.2 8.084 362.7L15.5 354.4C46.74 319.2 64 273.9 64 226.8V208C64 130.6 118.1 66.03 192 51.2V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32H256zM224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512z">
                                                                </path>
                                                        </svg><span
                                                                class="text-center d-flex flex-column"><span>Aucune</span><span>notification</span></span>
                                                </div>
                                        </div>

                                </div>

                                <div v-if="false" class="list-group list-group-flush border-bottom scrollarea">
                                        <a class="list-group-item list-group-item-action py-3 lh-tight" href="#"
                                                aria-current="true">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small>Wed</small></div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Tues</small>
                                                </div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Mon</small></div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#"
                                                aria-current="true">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Wed</small></div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Tues</small>
                                                </div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Mon</small></div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#"
                                                aria-current="true">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Wed</small></div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Tues</small>
                                                </div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Mon</small></div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#"
                                                aria-current="true">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Wed</small></div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Tues</small>
                                                </div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a><a class="list-group-item list-group-item-action py-3 lh-tight" href="#">
                                                <div class="d-flex justify-content-between align-items-center w-100"><strong
                                                                class="mb-1">List group
                                                                item heading</strong><small class="text-muted">Mon</small></div>
                                                <div class="col-10 mb-1 small"><span>Some placeholder content in a paragraph
                                                                below the heading and
                                                                date.</span></div>
                                        </a>
                                </div>
                        </div>
                </div>
</div></template>