

<template>
    <form method="post" @submit.prevent="form.post('/profile')">
        <div class="row d-block d-md-flex">
            <div class="col">
                <div>
                    <div class="mb-3"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                            for="nom">Nom</label>
                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                            style="overflow: hidden;"><input id="nom"
                                class="border-0 shadow-none form-control form-control-sm" type="text" placeholder="Nom"
                                name="name" v-model="form.name" /></div>
                    </div>
                    <div class="mb-3"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                            for="postnom">Postnom</label>
                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                            style="overflow: hidden;"><input id="postnom"
                                class="border-0 shadow-none form-control form-control-sm" type="text" placeholder="Postnom"
                                name="postnom" v-model="form.postname" /></div>
                    </div>
                </div>
                <div class="mb-3"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                        for="email">Adresse
                        mail</label>
                    <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                        style="overflow: hidden;"><input id="email"
                            class="border-0 shadow-none form-control form-control-sm" type="email"
                            placeholder="Adresse mail" v-model="form.email" name="email" /></div>
                </div>
            </div>
            <div class="col">
                <div>
                    <div class="mb-3"><label id="birthday" class="form-label"
                            style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="sexe">Date
                            de naissance</label>
                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                            style="overflow: hidden;"><input id="birthday" v-model="form.birthday"
                                class="border-0 shadow-none form-control form-control-sm" type="date" name="birthday" />
                        </div>
                    </div>
                    <div class="mb-3"><label class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                            for="sexe">Sexe</label>
                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                            style="overflow: hidden;"><select id="sexe"
                                class="border-0 shadow-none form-select form-select-sm" name="sexe">
                                    <option disabled  :selected="form.sexe == '' ? true : false" label="choisir le sexe"></option>
                                    <option :selected="form.sexe == 'homme' ? true : false">Homme</option>
                                    <option :selected="form.sexe == 'femme' ? true : false" value="femme">Femme</option>
                            </select></div>
                    </div>
                    <div class="mb-3">
                        <label id="profession" class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="profession">Profession</label>
                        <div class="border rounded border-1 d-flex flex-row align-items-center border-secondary-subtle" style="overflow: hidden;">
                            <input id="profession" class="border-0 shadow-none form-control form-control-sm" type="text"
                                placeholder="Profession" name="profession" v-model="form.profession" />
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: -15px;">
            <div style="margin-bottom: 12px;font-size: 13px; height: 15px;">
                <span v-if="form.errors.profession" style="font-size: 12px;color: var(--bs-primary);">Le formulaire n'est pas valide</span></div>
            <button class="btn btn-primary btn-sm link-light" type="submit">
                Personnalisez vos informations</button>
        </div>
    </form>
</template>


<script setup>

import { useForm } from '@inertiajs/vue3'

const props = defineProps(['user'])

const form = useForm({
    id: props.user.id,
    name: props.user.name,
    postname: props.user.postname,
    email: props.user.email,
    birthday: props.user.birthday,
    sexe: props.user.sexe,
    profession: props.user.profession,
})


</script>

