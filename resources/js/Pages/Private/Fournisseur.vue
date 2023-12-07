<template>
    <Header></Header>

    <!-- <div style="display: flex;">
        <form @submit.prevent="submit(value)">
            <input v-model="value" type="text" placeholder="Rechercher...">
        </form>
        <Link href="/fournisseurs" as="button">Reload</Link>
    </div> -->

    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Mes fournisseurs</h4>
        </div>
        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div class="d-flex justify-content-between align-items-center">

                <div class="d-flex justify-content-end">
                    <div class="bg-body-secondary border rounded-pill border-0">
                        <form class="d-flex"><input class="bg-transparent border-0 form-control" type="search"
                                style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;"
                                placeholder="Recherche" data-bs-theme="light" /><button
                                class="btn btn-primary btn-sm link-body-emphasis bg-transparent border-0" type="submit"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                                    fill="currentColor">
                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                    <path
                                        d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z">
                                    </path>
                                </svg></button></form>
                    </div>
                </div>

                <div><button class="btn btn-primary btn-sm link-light border-0 d-flex align-items-center" type="button"
                        data-bs-target="#form-fournisseur" data-bs-toggle="modal"><span>Ajouter</span></button></div>
            </div>
            <div class="table-responsive" style="overflow: inherit;">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th id="cell_id-1">#</th>
                            <th id="cell_name-1">Nom du fournisseur</th>
                            <th id="cell_cat-1" class="d-none d-sm-table-cell">Adresse mail</th>
                            <th id="cell_spec-1" class="d-none d-md-table-cell">Contact</th>
                            <th id="cell_actions-1" class="d-flex justify-content-end justify-content-md-center">
                                <span><strong>Actions</strong></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(fournisseur, index) in fournisseurs" :key="index">
                            <td>{{ index + 1 }}</td>
                            <td>
                                <Link href="/fournisseurs/fournisseur" class="text-capitalize"
                                    style="background-color: transparent; width: 100%; text-align: left; border: none; padding: 0px;"
                                    as="button" method="get" :data="{ id: fournisseur.id }">{{ fournisseur.nom }}</Link>
                            </td>
                            <td class="text-lowercase d-none d-sm-table-cell">{{ fournisseur.email ? fournisseur.email : 'Non définie' }}</td>
                            <td class="text-capitalize d-none d-md-table-cell">{{ fournisseur.phone ? fournisseur.phone : 'Non définie' }}</td>
                            <td class="d-flex justify-content-end justify-content-md-center">
                                <div>
                                    <div class="dropdown"><button style="height: 30px;"
                                            class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0"
                                            aria-expanded="false" data-bs-toggle="dropdown" type="button"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                                height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                                </path>
                                            </svg></button>
                                        <div class="dropdown-menu border rounded border-0 shadow"
                                            style="border-radius: 10px;padding: 5px;font-size: 13px;">

                                            <a id="item-dropdown" @click.prevent="recoverValues(fournisseur)"
                                                class="dropdown-item" data-bs-target="#form-fournisseur"
                                                data-bs-toggle="modal"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor"
                                                    style="margin-right: 10px;">
                                                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                    <path
                                                        d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z">
                                                    </path>
                                                </svg>Modifier</a>

                                            <Link id="item-dropdown" class="dropdown-item" href="/fournisseurs"
                                                method="delete" as="button" :data="{ id: fournisseur.id }" type="button"
                                                data-bs-target="#delete-modal" data-bs-toggle="modal"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em"
                                                height="1em" fill="currentColor" style="margin-right: 10px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                </path>
                                            </svg>Supprimer</Link>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end" v-if="false">
                <nav>
                    <ul class="list-inline d-flex">
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;" disable><span
                                    style="color: rgb(108, 117, 125);">«</span></a></li>
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;"><span
                                    style="color: rgb(108, 117, 125);">1</span></a></li>
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;"><span
                                    style="color: rgb(108, 117, 125);">2</span></a></li>
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;"><span
                                    style="color: rgb(108, 117, 125);">3</span></a></li>
                        <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                            style="width: 30px;height: 30px;"><a
                                class="text-center link-primary d-flex flex-column justify-content-center" href="#"
                                style="text-decoration: none;width: 100%;height: 100%;"><span
                                    style="color: rgb(108, 117, 125);">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Formulaire d'enregistrement -->
    <div id="form-fournisseur" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Ajouter un fournisseur</h4><button class="btn-close" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <form method="post" @submit.prevent="
                        form.id ? form.put('/fournisseurs', {
                            onSuccess: () => {
                                success = false
                                successUpdate = true
                                form.reset()
                            }
                        }) :
                            form.post('/fournisseurs', {
                                onSuccess: () => {
                                    successUpdate = false
                                    success = true
                                    form.reset()
                                }
                            })">
                        <div class="mb-2"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="nom">Nom du
                                fournisseur</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;">
                                <input id="nom" class="bg-transparent border-0 form-control-sm" v-model="form.nom"
                                    type="text" style="width: 100%;outline: none;" name="nom"
                                    placeholder="Nom du fournisseur" />
                            </div>
                            <span class="text-primary" v-if="form.errors.nom" style="font-size: 13px;">{{ form.errors.nom
                            }}</span>
                        </div>
                        <div class="mb-2"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="specification">Numéro de
                                téléphone</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input v-model="form.phone"
                                    class="bg-transparent border-0 shadow-none" type="tel" name="phone"
                                    placeholder="Le numéro de téléphone"
                                    style="height: 30px;width: 100%;outline: none;padding-left: 10px;" /></div>
                            <span class="text-primary" v-if="form.errors.phone" style="font-size: 13px;">{{
                                form.errors.phone }}</span>
                        </div>
                        <div class="mb-2"><label class="form-label"
                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="prix">L&#39;adresse
                                mail</label>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                style="overflow: hidden;"><input v-model="form.email" id="price-2"
                                    class="bg-transparent border-0 shadow-none" type="email"
                                    style="width: 100%;outline: none;height: 31px;padding-left: 10px;" name="email"
                                    placeholder="L&#39;adresse mail (optionnel)" min="0" max="10" step="1" /></div>
                            <span v-if="form.errors.email" class="text-primary" style="font-size: 13px;">{{
                                form.errors.email }}</span>
                        </div>
                        
                        <div>
                            <div v-if="success || successUpdate"
                                style="padding: 5px; margin-bottom: 5px; border-radius: 5px; background-color: rgb(231, 231, 231);">
                                <span v-if="success">Fournisseur ajouté</span>
                                <span v-if="successUpdate">Article modifié</span>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <button type="submit" :disabled="form.processing"
                                    class="btn btn-primary btn-sm link-light border-0"> {{ form.id ? 'Modifier' :
                                        'Enregistrer' }} </button>
                                <button @click.prevent="clean()" style="background: transparent; border: none;">Vider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

import Header from '../../Components/Header/Header.vue';
import { Link, router, useForm } from "@inertiajs/vue3";
import { ref, watch, defineProps } from "vue";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    fournisseurs: Object
})


let success = false
let successUpdate = false

const form = useForm({
    id: null,
    nom: null,
    email: null,
    phone: null
})

function recoverValues(fournisseur) {
    this.form.id = fournisseur.id
    this.form.nom = fournisseur.nom;
    this.form.email = fournisseur.email;
    this.form.phone = fournisseur.phone;
} 

let value = ''

function submit(value) {
    router.get('/fournisseurs', { search: value })
}

function clean() {
    form.id = ''
    form.nom = ''
    form.email = ''
    form.phone = ''
}





</script>