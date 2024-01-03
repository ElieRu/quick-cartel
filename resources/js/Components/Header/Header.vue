
<template>
    <div v-if="!enable" style="padding: 10px;background: var(--bs-primary);">
        <div class="container d-flex justify-content-center">
            <div><a href="#" style="color: var(--bs-white); ">Téléchager l&#39;application<br /></a></div>
        </div>
    </div>

    <header id="my-home-header" class="bg-body shadow" style="padding-bottom: 10px;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center" style="padding-top: 10px;">
                <div>
                    <a href="/" class="text-secondary-emphasis">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em"
                            fill="currentColor" style="font-size: 35px;">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M414.8 40.79L286.8 488.8C281.9 505.8 264.2 515.6 247.2 510.8C230.2 505.9 220.4 488.2 225.2 471.2L353.2 23.21C358.1 6.216 375.8-3.624 392.8 1.232C409.8 6.087 419.6 23.8 414.8 40.79H414.8zM518.6 121.4L630.6 233.4C643.1 245.9 643.1 266.1 630.6 278.6L518.6 390.6C506.1 403.1 485.9 403.1 473.4 390.6C460.9 378.1 460.9 357.9 473.4 345.4L562.7 256L473.4 166.6C460.9 154.1 460.9 133.9 473.4 121.4C485.9 108.9 506.1 108.9 518.6 121.4V121.4zM166.6 166.6L77.25 256L166.6 345.4C179.1 357.9 179.1 378.1 166.6 390.6C154.1 403.1 133.9 403.1 121.4 390.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4L121.4 121.4C133.9 108.9 154.1 108.9 166.6 121.4C179.1 133.9 179.1 154.1 166.6 166.6V166.6z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="d-flex flex-row">
                    <div class="d-flex">
                        <div class="theme-switcher dropdown border rounded-circle border-0 d-flex flex-column justify-content-center align-items-center"
                            style="width: 40px;height: 40px;"><button class="btn btn-link" aria-expanded="false"
                                data-bs-toggle="dropdown" type="button"
                                style="color: var(--bs-body-color);padding: 0px;"><svg class="bi bi-sun-fill fs-5"
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" style="margin-bottom: 0px;">
                                    <path
                                        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                    </path>
                                </svg></button>
                            <!-- all -->
                            <Theme></Theme>

                        </div>
                        <button id="btn-params"
                            class="btn btn-primary link-body-emphasis link-opacity-75 bg-body border rounded-circle border-0 d-flex flex-column justify-content-center align-items-center"
                            type="button"
                            style="margin-right: 10px;margin-left: 10px;width: 40px;height: 40px;padding: 0px;"
                            data-bs-target="#notices" data-bs-toggle="offcanvas"><svg class="fs-5"
                                xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M256 32V51.2C329 66.03 384 130.6 384 208V226.8C384 273.9 401.3 319.2 432.5 354.4L439.9 362.7C448.3 372.2 450.4 385.6 445.2 397.1C440 408.6 428.6 416 416 416H32C19.4 416 7.971 408.6 2.809 397.1C-2.353 385.6-.2883 372.2 8.084 362.7L15.5 354.4C46.74 319.2 64 273.9 64 226.8V208C64 130.6 118.1 66.03 192 51.2V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32H256zM224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512z">
                                </path>
                            </svg><span class="badge rounded-pill bg-primary"
                                style="position: absolute;top: 15px;margin-left: 16px;font-size: 8px;">+9</span></button>
                        <div id="btn-dropdown"
                            class="dropdown bg-body-tertiary border rounded-pill border-0 shadow-sm d-none d-md-block">


                            <button id="btn-show-profile" class="btn border rounded-pill border-0 d-flex flex-row"
                                aria-expanded="false" data-bs-toggle="dropdown" type="button"
                                style="padding: 0px;padding-right: 1px;">
                                <span style="width: 38px;height: 38px;overflow: hidden;margin: 1px;"><img
                                        class="border rounded-circle border-0" style="width: 100%;height: 100%;"
                                        src="images/img_profile1.jpg" /></span><span class="d-flex flex-column"
                                    style="text-align: left;margin-left: 10px;font-size: 13px;overflow: hidden;margin-right: 10px;"><span
                                        id="span-profile" class="fw-bold" style="font-size: 12px;">RUHAMYA... Elie</span><span
                                        id="span-profile"
                                        style="font-size: 11px;/*height: 16px;*/">Administrateur</span></span></button>

                            <Dropdown></Dropdown>
                        </div>
                    </div><button
                        class="btn btn-primary link-body-emphasis link-opacity-75 bg-transparent border-0 d-md-none"
                        type="button" style="padding: 0px;width: 40px;height: 40px;" data-bs-target="#call-menu-navbar"
                        data-bs-toggle="offcanvas"><svg class="fs-5" xmlns="http://www.w3.org/2000/svg"
                            viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z">
                            </path>
                        </svg></button>
                </div>
            </div>
            <Navbar :boutique="callBoutique" v-if="enable || my_boutique_id"></Navbar>
        </div>
    </header>

    <Menu></Menu>
    <notices></notices>

</template>

<script>

import Menu from './Comps/Menu.vue';
import Notices from './Comps/Notices.vue';
import Navbar from './Comps/navbar.vue';
import Theme from './Comps/Theme.vue'
import Dropdown from './Comps/Dropdown-menu-computer-version.vue'

import axios from 'axios'

export default {
    data() {
        return {
            boutique: '',
            enable: window.location.pathname === '/' ? false : true
        }
    },
    
    components: {
        Menu,
        Notices,
        Navbar,
        Theme,
        Dropdown
    },

    props: {
        my_boutique_id: ''
    },

    computed: {
        callBoutique() {
            axios.get('/menu').then((res) => {
                this.boutique = res.data.boutique
            }).catch((err) => {
                this.boutique = ''
            })
            return this.boutique
        }
    }
}

</script>
