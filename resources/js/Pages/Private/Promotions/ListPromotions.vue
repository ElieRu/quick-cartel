<template>
    <div v-if="promotions.length >= 1">
        <div class="d-flex justify-content-between align-items-center"><span>Mes promotions</span>
            <button data-bs-target="#form-promotion" data-bs-toggle="modal" style="height: 30px" ref="buttonCallPromo"
                class="btn btn-primary btn-sm bg-body-tertiary border-dark-subtle" type="button"><svg class="text-body"
                    xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z">
                    </path>
                </svg></button>
        </div>

        <div style="margin-top: 10px;" v-for="promotion in promotions">
            <div class="border rounded d-flex justify-content-between align-items-center"
                style="padding: 10px;margin-bottom: 8px;">
                
                <Link 
                    
                    as="button"
                    href="/promotions/promotion"
                    :data=" { id: promotion.id }"

                    class="text-start border-0 bg-transparent text-capitalize" style="font-size: 13px;width:100%;">
                    {{ promotion.nom }}
                </Link>

                <Link href="/promotions" method="delete" as="button" :preserveScroll="true" :data="{ id: promotion.id }"
                    class="btn btn-primary btn-sm bg-transparent border-0 shadow-none" type="button"
                    style="height: 30px;width: 30px;"><svg class="text-body-tertiary" xmlns="http://www.w3.org/2000/svg"
                    viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                    </path>
                </svg></Link>
            </div>
        </div>
    </div>
</template>

<script>

import { Link } from "@inertiajs/vue3"

export default {
    components: {
        Link
    },
    props: {
        promotions: Object
    },
    data() {
        return {}
    },
    mounted() {
        console.log(this.promotions);
    },
}
</script>