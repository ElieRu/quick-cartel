<template>
    <div class="d-flex flex-column justify-content-center" style="background-color: white;" id="body-cont-auth">
        <div id="div-cont-veri" class="text-center">
            <div class="text-center">
                <div id="div-para-forgotPassword"><label class="form-label fs-4">Réitialisation</label>
                    <p>Entrez l&#39;adresse mail associé à votre compte pour la récupération du mot de passe.</p>
                </div>
                <form method="post" @submit.prevent="forgotPassword.post('/forgot-password')">
                    <div>
                        <div class="border rounded border-1 d-flex flex-row align-items-center mb-1">
                            <i class="fas fa-user" style="margin-left: 10px;margin-right: 5px;"></i>
                            <input class="bg-transparent border rounded-0 border-0 shadow-none form-control" type="email"
                                placeholder="Votre adresse mail" v-model="forgotPassword.email" name="email" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between" style="height: 20px;">
                        <label class="form-label text-primary" style="font-size: 12px;">{{ forgotPassword.errors.email }}</label>
                    </div>
                    <div class="mt-3 mb-3">
                        <button class="btn btn-primary link-light border-0" type="submit" style="width: 100%;">Envoie des instructions</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>


<script setup>

import { useForm } from "@inertiajs/vue3";

// const errors = defineProps(['errors'])

// console.log(errors);

const forgotPassword = useForm({
    email: ''
})


</script>