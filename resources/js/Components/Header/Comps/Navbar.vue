<template>
    <div id="div-access-nav" class="d-flex justify-content-center">
        <div id="div-cont-nav" style="margin-top: 20px;">
            <div id="div-link-nav" class="d-flex" style="height: 49px;">
                <Link id="link-nav"
                    class="link-body-emphasis link-opacity-75 d-flex flex-column justify-content-center align-items-center"
                    
                    href="/account"
                    method="get"
                    :data="{ id: my_boutique_id }"

                     style="border-bottom: 2px solid var(--bs-primary);font-size: 13px;"><svg
                        class="fs-6 d-md-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em"
                        height="1em" fill="currentColor" style="font-size: 19px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M511.8 287.6L512.5 447.7C512.5 450.5 512.3 453.1 512 455.8V472C512 494.1 494.1 512 472 512H456C454.9 512 453.8 511.1 452.7 511.9C451.3 511.1 449.9 512 448.5 512H392C369.9 512 352 494.1 352 472V384C352 366.3 337.7 352 320 352H256C238.3 352 224 366.3 224 384V472C224 494.1 206.1 512 184 512H128.1C126.6 512 125.1 511.9 123.6 511.8C122.4 511.9 121.2 512 120 512H104C81.91 512 64 494.1 64 472V360C64 359.1 64.03 358.1 64.09 357.2V287.6H32.05C14.02 287.6 0 273.5 0 255.5C0 246.5 3.004 238.5 10.01 231.5L266.4 8.016C273.4 1.002 281.4 0 288.4 0C295.4 0 303.4 2.004 309.5 7.014L416 100.7V64C416 46.33 430.3 32 448 32H480C497.7 32 512 46.33 512 64V185L564.8 231.5C572.8 238.5 576.9 246.5 575.8 255.5C575.8 273.5 560.8 287.6 543.8 287.6L511.8 287.6z">
                        </path>
                    </svg><label id="label-nav" class="form-label d-md-block">Acceuil</label></Link>

                <Link id="link-nav"
                    class="bg-transparent border-0 link-body-emphasis link-opacity-75 d-flex flex-column justify-content-center align-items-center"
                    href="/account-articles" :data="{ id: getBoutiqueId }" method="get" as="button"
                    style="font-size: 13px;"><svg class="fs-6 d-md-none" xmlns="http://www.w3.org/2000/svg"
                    viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor" style="font-size: 41px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M320 0H64C37.5 0 16 21.5 16 48v416C16 490.5 37.5 512 64 512h256c26.5 0 48-21.5 48-48v-416C368 21.5 346.5 0 320 0zM240 447.1C240 456.8 232.8 464 224 464H159.1C151.2 464 144 456.8 144 448S151.2 432 160 432h64C232.8 432 240 439.2 240 447.1z">
                    </path>
                </svg><label id="label-nav" class="form-label d-inline-block d-md-block"
                    style="margin-bottom: 3px;">Articles</label></Link>

                <a id="link-nav"
                    class="link-body-emphasis link-opacity-75 d-flex flex-column justify-content-center align-items-center"
                    href="/promotions" style="font-size: 13px;"><svg class="fs-6 d-md-none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                        fill="currentColor" style="font-size: 19px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M480 179.6C498.6 188.4 512 212.1 512 240C512 267.9 498.6 291.6 480 300.4V448C480 460.9 472.2 472.6 460.2 477.6C448.3 482.5 434.5 479.8 425.4 470.6L381.7 426.1C333.7 378.1 268.6 352 200.7 352H192V480C192 497.7 177.7 512 160 512H96C78.33 512 64 497.7 64 480V352C28.65 352 0 323.3 0 288V192C0 156.7 28.65 128 64 128H200.7C268.6 128 333.7 101 381.7 53.02L425.4 9.373C434.5 .2215 448.3-2.516 460.2 2.437C472.2 7.39 480 19.06 480 32V179.6zM200.7 192H192V288H200.7C280.5 288 357.2 317.8 416 371.3V108.7C357.2 162.2 280.5 192 200.7 192V192z">
                        </path>
                    </svg><label id="label-nav" class="form-label d-inline-block d-md-block"
                        style="margin-bottom: 3px;">Promotions</label></a>
                        
                        <a id="link-nav"
                    class="link-body-emphasis link-opacity-75 d-flex flex-column justify-content-center align-items-center"
                    href="/about" style="font-size: 13px;"><svg class="fs-6 d-md-none" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 400c-18 0-32-14-32-32s13.1-32 32-32c17.1 0 32 14 32 32S273.1 400 256 400zM325.1 258L280 286V288c0 13-11 24-24 24S232 301 232 288V272c0-8 4-16 12-21l57-34C308 213 312 206 312 198C312 186 301.1 176 289.1 176h-51.1C225.1 176 216 186 216 198c0 13-11 24-24 24s-24-11-24-24C168 159 199 128 237.1 128h51.1C329 128 360 159 360 198C360 222 347 245 325.1 258z">
                        </path>
                    </svg><label id="label-nav" class="form-label d-inline-block d-md-block" style="margin-bottom: 3px;">À
                        propos</label></a>
            </div>
        </div>
    </div>
</template>

<script>

import axios from "axios"
import { Link } from "@inertiajs/vue3"

export default {
    components: { Link },
    props: {
        boutique: '',
        my_boutique_id: ''
    },
    data() {
        return {
            enableBoutiqueNav: '',
            boutique_id: Number
        }
    },
    mounted() {
        console.log(this.boutique);
    },
    computed: {
        getBoutiqueId() {
            // this.boutique_id = this.boutique[0].id
            // return this.boutique_id
        },
        getAccountPublish() {
            axios.get('/account-infos-menu').then((resp) => {
                this.enableBoutiqueNav = resp.data.enableBoutiqueNav;
            }).catch((err) => {
                console.log(err);
            })
        }
    },
}
</script>
