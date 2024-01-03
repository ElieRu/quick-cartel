<template>
    <div v-if="descriptions.length > 0" class="bg-body border rounded border-0 shadow mb-2" style="padding: 10px;">
        <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span
                class="bg-body-secondary border rounded border-0 d-flex align-items-center"
                style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor"
                    style="font-size: 12px;margin-right: 7px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M400 32h-352C21.49 32 0 53.49 0 80v352C0 458.5 21.49 480 48 480h245.5c16.97 0 33.25-6.744 45.26-18.75l90.51-90.51C441.3 358.7 448 342.5 448 325.5V80C448 53.49 426.5 32 400 32zM64 96h320l-.001 224H320c-17.67 0-32 14.33-32 32v64H64V96z">
                    </path>
                </svg><span style="font-size: 12px;">Les déscriptions</span></span><span></span></div>
        <div class="row row-cols-1 row-cols-sm-2 mb-2" v-for="description in descriptions">
            <div class="col">
                <span class="text-body-tertiary" style="font-size: 13px;">{{ description.nom }}</span>
            </div>
            <div class="col d-flex justify-content-sm-end"><span class="text-capitalize d-flex justify-content-sm-end"
                    style="font-size: 13px;">{{ description.valeur }}</span></div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        descriptions: Object
    }
}
</script>