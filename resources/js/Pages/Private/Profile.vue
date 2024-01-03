<template>
    <Header></Header>
    <div class="container" style="padding-top: 20px;">
        <div class="row d-block d-md-flex">
            <div class="col-12 col-md-4 d-none d-md-block">
                <div id="div-infos-profile"
                    class="bg-body shadow d-flex flex-column justify-content-center align-items-center">
                    <div>
                        <div
                            style="width: 150px;height: 150px;border-radius: 100%;border-width: 2px;border-style: dashed;padding: 3px;">
                            <img src="images/img_profile1.png" style="width: 100%;height: 100%;border-radius: 100%;" />
                        </div>
                        <input id="profile-img-1" type="file" accept="image/*" style="display: none;" /><label
                            class="form-label bg-body shadow-sm d-flex flex-column justify-content-center align-items-center"
                            style="cursor: pointer;height: 25px;width: 25px;border-radius: 100%;margin-top: -35px;margin-left: 114px;position: absolute;"
                            for="profile-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em"
                                height="1em" fill="currentColor" style="font-size: 11px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                                </path>
                            </svg></label>
                    </div>
                    <div style="margin-top: 10px;width: 100%;">

                        <div class="d-flex flex-column" v-if="user.name || user.postnom"><span style="font-size: 12px;">Nom
                                &amp; Postnom</span><span style="font-size: 13px;" class="text-capitalize">{{ user.name }}
                                {{ user.postnom }}</span></div>

                        <div class="d-flex flex-column" v-if="user.email" style="margin-top: 15px;"><span
                                style="font-size: 12px;">Adresse
                                mail</span><span style="font-size: 13px;" class="text-lowercase">{{ user.email
                                }}</span></div>

                        <div class="d-flex flex-column" v-if="user.sexe" style="margin-top: 15px;">
                            <span style="font-size: 12px;">Sexe
                            </span><span class="text-capitalize" style="font-size: 13px;">{{ user.sexe }}</span>
                        </div>
                        <div class="d-flex flex-column" v-if="user.profession" style="margin-top: 15px;"><span
                                style="font-size: 12px;">Profession</span>
                            <span class="text-capitalize" style="font-size: 13px;">{{ user.profession }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div>
                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 20px;">
                        <div class="d-flex d-md-none justify-content-center" style="margin-top: 15px;margin-bottom: 25px;">
                            <div>
                                <div
                                    style="width: 150px;height: 150px;border-radius: 100%;border-width: 2px;border-style: dashed;padding: 3px;">
                                    <img src="images/img_profile1.jpg"
                                        style="width: 100%;height: 100%;border-radius: 100%;" />
                                </div><input id="profile-img-2" type="file" accept="image/*" style="display: none;" /><label
                                    class="form-label bg-body shadow-sm d-flex flex-column justify-content-center align-items-center"
                                    style="cursor: pointer;height: 25px;width: 25px;border-radius: 100%;margin-top: -35px;margin-left: 114px;position: absolute;"
                                    for="profile-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        width="1em" height="1em" fill="currentColor" style="font-size: 11px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                                        </path>
                                    </svg></label>
                            </div>
                        </div>

                        <form method="post" @submit.prevent="form.post('/profile')">
                            <div class="row d-block d-md-flex">
                                <div class="col">
                                    <div>
                                        <div class="mb-2"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="nom">Nom</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="nom"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Nom" name="name" v-model="form.name" /></div>
                                            <span style="font-size: 12px; color: var(--bs-primary);">{{ form.errors.name
                                            }}</span>
                                        </div>
                                        <div class="mb-2"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="postnom">Postnom</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="postnom"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Postnom" name="postnom" v-model="form.postnom" /></div>
                                            <span style="font-size: 12px; color: var(--bs-primary);">{{ form.errors.postnom
                                            }}</span>
                                        </div>
                                    </div>
                                    <div class="mb-2"><label class="form-label"
                                            style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="email">Adresse
                                            mail</label>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                            style="overflow: hidden;"><input id="email"
                                                class="border-0 shadow-none form-control form-control-sm" type="email"
                                                placeholder="Adresse mail" v-model="form.email" name="email" /></div>
                                        <span style="font-size: 12px; color: var(--bs-primary);">{{ form.errors.email
                                        }}</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="mb-2"><label id="date_de_naissance" class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="sexe">Date
                                                de naissance</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="date_de_naissance"
                                                    v-model="form.date_de_naissance"
                                                    class="border-0 shadow-none form-control form-control-sm" type="date"
                                                    name="date_de_naissance" />
                                            </div>
                                            <span style="font-size: 12px; color: var(--bs-primary);">{{
                                                form.errors.date_de_naissance }}</span>
                                        </div>
                                        <div class="mb-2"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="sexe">Sexe</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;">
                                                <select id="sexe" v-model="form.sexe"
                                                    class="border-0 shadow-none form-select form-select-sm" name="sexe">
                                                    <option :selected="form.sexe == 'homme' ? true : false" value="homme">
                                                        Homme</option>
                                                    <option :selected="form.sexe == 'femme' ? true : false" value="femme">
                                                        Femme</option>
                                                </select>
                                            </div>
                                            <span style="font-size: 12px; color: var(--bs-primary);"> {{ form.errors.sexe
                                            }}</span>
                                        </div>
                                        <div class="mb-2">
                                            <label id="profession" class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="profession">Profession</label>
                                            <div class="border rounded border-1 d-flex flex-row align-items-center border-secondary-subtle"
                                                style="overflow: hidden;">
                                                <input id="profession"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Profession" name="profession" v-model="form.profession" />
                                            </div>
                                            <span style="font-size: 12px;color: var(--bs-primary);">{{
                                                form.errors.profession }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 0px;">
                                <button class="btn btn-primary btn-sm link-light" type="submit">
                                    Personnalisez</button>
                            </div>
                        </form>
                    </div>

                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 15px;">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-between" style="margin-bottom: 10px;"><span
                                    class="bg-dark-subtle border rounded border-0 d-flex align-items-center"
                                    style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                        fill="currentColor" style="font-size: 12px;margin-right: 7px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                        </path>
                                    </svg><span style="font-size: 12px;">Mon contact</span>
                                </span><span></span></div>
                            <div class="border rounded" style="overflow: hidden;padding: 6px;padding-left: 7px;">
                                <form class="d-flex" @submit.prevent="userPhone.post('')">

                                    <!-- <div> -->
                                    <input class="border-0 shadow-none form-control" type="tel"
                                        style="width: 100%;height: 30px;padding-left: 3px;outline: none;"
                                        placeholder="Le numéro de téléphone" v-model="userPhone.phone" />
                                    <!-- </div> -->

                                    {{ userPhone.errors.phone }}
                                    <button class="btn btn-primary bg-transparent border-0" type="submit"
                                        style="padding: 0px;margin-right: 4px;"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor"
                                            style="font-size: 24px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M256 0C114.6 0 0 114.6 0 256c0 141.4 114.6 256 256 256s256-114.6 256-256C512 114.6 397.4 0 256 0zM406.6 278.6l-103.1 103.1c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25L306.8 288H128C110.3 288 96 273.7 96 256s14.31-32 32-32h178.8l-49.38-49.38c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l103.1 103.1C414.6 241.3 416 251.1 416 256C416 260.9 414.6 270.7 406.6 278.6z">
                                            </path>
                                        </svg>
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-sm link-primary bg-transparent" type="button"
                        data-bs-target="#contact-form" ref="buttonContact" data-bs-toggle="modal"
                        style="width: 48%;">Ajouter un contact</button>
                    <FormContact @hide-form-contact="hideFormContact" :contacts="contacts" fournisseur="" :user="user" boutique="" client=""></FormContact>
                    <ListContact :contacts="contacts" :user="user"></ListContact>

                </div>
            </div>
        </div>

    </div>
</template>
    
<script>
import Header from '../../Components/Header/Header.vue';

import { useForm } from '@inertiajs/vue3'
import FormContact from './Contacts/FormContact.vue'
import ListContact from './Contacts/ListContact.vue'

export default {
    components: {
        Header,
        FormContact,
        ListContact
    },
    props: ['user', 'contacts'],
    mounted() { },
    data() {
        return {
            form: useForm({
                id: this.user.id,
                name: this.user.name,
                postnom: this.user.postnom,
                email: this.user.email,
                date_de_naissance: this.user.date_de_naissance,
                sexe: this.user.sexe,
                profession: this.user.profession,
            }),
            
            userPhone: useForm({
                // phone: this.user.phone
            }),
        }
    },
    methods: {
        formSubmitContact() {
            this.formContact.post('/contacts', {
                onSuccess: () => {
                    this.$refs.buttonContact.click()
                }
            })
        },

        updateContact(contact) {
            this.formContact.phone = contact.phone,
                this.formContact.type = contact.type,
                this.formContact.id = contact.id
            this.formContact.put('/contacts')
        },

        deleteContact(id) {
            this.formContact.id = id
            this.formContact.delete('/contacts')
        },

        hideFormContact() {
            this.$refs.buttonContact.click()
        },
    }
}

</script>