<template>
    <div class="d-flex flex-column justify-content-center" id="body-cont-auth" style="background-color: white;">
        <div id="div-cont-veri" class="text-center">
            <div class="text-start">
                <div id="div-img-logo" class="text-center mt-4 mb-4"><i class="fas fa-code" style="font-size: 50px;"></i>
                </div><label class="form-label fs-4 text-start">Nouveau mot de passe</label>
                <form method="post" @submit.prevent="resetPassword.post('/reset-password')">
                    <div>
                        <input type="hidden" name="email" v-value="resetPassword.email" />

                        <div class="border rounded border-1 d-flex flex-row align-items-center mb-4"><i class="fas fa-lock"
                                style="margin-left: 10px;margin-right: 5px;"></i>
                            <input class="border-0 shadow-none form-control" type="password" placeholder="Nouveau"
                                name="password" v-model="resetPassword.password" style="background-color: transparent;" />
                            <i style="margin-right: 10px;cursor: pointer; "></i>
                        </div>

                        <div class="border rounded border-1 d-flex flex-row align-items-center mb-1"><i class="fas fa-lock"
                                style="margin-left: 10px;margin-right: 5px;"></i>
                            <input class="bg-transparent border-0 shadow-none form-control" placeholder="Confirmation"
                                type="password" name="password_confirmation" v-model="resetPassword.password_confirmation" />
                            <i style="margin-right: 10px;cursor: pointer;"></i>
                        </div>
                    </div>
                    <input type="hidden" name="token" v-model="resetPassword.token">

                    <div style="height: 20px;">
                        <label class="form-label text-primary">  </label>
                    </div>
                    <div class="mt-3 mb-3">
                        <button class="btn btn-primary link-light border-0" type="submit"
                            style="width: 100%;">Valider</button>
                    </div>
                </form>
            </div>
    </div>
</div></template>


<script setup>
import { useForm } from "@inertiajs/vue3";

const props = defineProps(['email', 'token'])

console.log(props);

const resetPassword = useForm({
    email: props.email,
    password: null,
    password_confirmation: null,
    token: props.token
})

// console.log(resetPassword.email);


</script>