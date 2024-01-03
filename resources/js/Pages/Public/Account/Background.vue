<template>
    <div class="row d-flex flex-column flex-md-row mb-4">
        <div class="col-12">
            <div class="bg-body border rounded border-0 shadow" style="overflow: hidden;height: 260px;">
                <div id="div-background-img" class="bg-body-secondary" style="height: 79%;"></div>
                <div class="d-flex justify-content-between" style="height: 21%;">
                    <div class="d-flex" style="/*width: 80%;*/padding-left: 20px;">
                        <div
                            style="width: 90px;height: 90px;margin-top: -50px;border-radius: 100%;padding: 2px;overflow: hidden;border: 1.5px dashed var(--bs-gray-500);">
                            <div style="width: 100%;height: 100%;background: var(--bs-gray-600);border-radius: 100%;">
                                <img style="width: 100%;height: 100%;border-radius: 100%;" src="jpg/img logo.jpg" />
                            </div>
                        </div>
                        <div class="d-flex flex-column" style="margin-left: 15px;margin-top: 10px;"><span
                                class="fw-bold">#MPlace officiel</span><span style="font-size: 11px;">2.9k
                                abonné(és)</span></div>
                    </div>
                    <div class="d-flex flex-column justify-content-end"
                        style="/*width: 50%;*/margin-right: 15px;margin-bottom: 15px;">
                        <button @click="handleClick"
                            class="btn btn-primary btn-sm link-light border rounded-pill border-0 shadow" type="button"
                            style="padding-right: 12px;padding-left: 12px;"><span
                                class="d-none d-sm-block">S&#39;abonner</span><svg class="d-sm-none"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M244 84L255.1 96L267.1 84.02C300.6 51.37 347 36.51 392.6 44.1C461.5 55.58 512 115.2 512 185.1V190.9C512 232.4 494.8 272.1 464.4 300.4L283.7 469.1C276.2 476.1 266.3 480 256 480C245.7 480 235.8 476.1 228.3 469.1L47.59 300.4C17.23 272.1 0 232.4 0 190.9V185.1C0 115.2 50.52 55.58 119.4 44.1C164.1 36.51 211.4 51.37 244 84C243.1 84 244 84.01 244 84L244 84zM255.1 163.9L210.1 117.1C188.4 96.28 157.6 86.4 127.3 91.44C81.55 99.07 48 138.7 48 185.1V190.9C48 219.1 59.71 246.1 80.34 265.3L256 429.3L431.7 265.3C452.3 246.1 464 219.1 464 190.9V185.1C464 138.7 430.4 99.07 384.7 91.44C354.4 86.4 323.6 96.28 301.9 117.1L255.1 163.9z">
                                </path>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
        {{ verifyAuth }}
    </div>
</template>

<style scoped>
::-webkit-scrollbar {
    background: transparent;
    height: 10px;
}
</style>

<script>
import { router } from '@inertiajs/vue3';
import axios from 'axios';


export default {
    data() {
        return {
            verifyAuth: ''
        }
    },
    computed: {
        verify() {
            axios.get('/abonnements').then((resp) => {
                this.verifyAuth = resp.data.auth;
            })
        }
    },
    mounted() {
        // console.log(this.verifyAuth);
    },
    methods: {
        handleClick() {
            router.post('/abonnements', {
                action: true
            })
        }
    }
}


</script>

