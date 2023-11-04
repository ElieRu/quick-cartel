<template>
    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 15px;">
        <form method="post" @submit.prevent="formAddr.post('/adresse')">
            <div class="row d-block d-md-flex">
                <div class="col">
                    <div>
                        <div class="mb-3"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="ville">Ville</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input id="ville"
                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                    placeholder="Ville*" name="ville" v-model="formAddr.ville" /></div>
                                    <div class="text-primary" style="font-size: 11px;" v-if="formAddr.errors.ville">{{ formAddr.errors.ville }}</div>
                        </div>
                        <div class="mb-3"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="commune">Commune</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input id="commune"
                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                    placeholder="Commune*" name="commune" v-model="formAddr.commune" /></div>
                                    <div class="text-primary" style="font-size: 11px;" v-if="formAddr.errors.commune">{{ formAddr.errors.commune }}</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <div class="mb-3"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="quartier">Quartier</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input id="quartier"
                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                    placeholder="Quartier*" name="quartier" v-model="formAddr.quartier" /></div>
                                    <div class="text-primary" style="font-size: 11px;" v-if="formAddr.errors.quartier">{{ formAddr.errors.quartier }}</div>
                        </div>
                        <div class="mb-3"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="adress">Avenue</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input id="Avenue"
                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                    placeholder="Avenue*" name="avenue" v-model="formAddr.avenue" /></div>
                                    <div class="text-primary" style="font-size: 11px;" v-if="formAddr.errors.avenue">{{ formAddr.errors.avenue }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="mt-2"><button class="btn btn-primary btn-sm link-light" type="submit">Personnalisez votre addresse</button></div>
            </div>
        </form>
    </div>
</template>

<script setup>

import { useForm } from '@inertiajs/vue3'


const props = defineProps(['address']);


const formAddr = useForm({
    id: props.address.id,
    ville: props.address.ville,
    commune: props.address.commune,
    quartier: props.address.quartier,
    avenue: props.address.avenue
})



</script>