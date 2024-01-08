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
                                <img style="width: 100%;height: 100%;border-radius: 100%;" :src="datas.logo ? '/storage/' + datas.logo : '/images/img logo.jpg'" />
                            </div>
                        </div>
                        <div class="d-flex flex-column" style="margin-left: 15px;margin-top: 10px;"><span
                                class="fw-bold">{{ datas.name }}</span><span style="font-size: 11px;">
                                    {{ datas.number }} abonné{{ datas.number > 1 ? 's' : '' }} </span></div>
                    </div>
                    <div class="d-flex flex-column justify-content-end"
                        style="/*width: 50%;*/margin-right: 15px;margin-bottom: 15px;">
                        <button @click="handleClick" :disabled="!datas.auth"
                            class="btn btn-primary btn-sm link-light border rounded-pill border-0 shadow" type="button"
                            style="padding-right: 12px;padding-left: 12px;">
                                <span>{{ !datas.action ? "S'abonner" : "Désabonner" }}</span>
                            </button>
                    </div>
                </div>
            </div>
        </div>
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
            myDatas: Object
        }
    },
    props: {
        logo: ''
    },
    computed: {
        datas() {
            axios.get('/abonnements', { preserveScroll: true }).then((resp) => {
                this.myDatas = resp.data;
            })
            return this.myDatas;
        }
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

