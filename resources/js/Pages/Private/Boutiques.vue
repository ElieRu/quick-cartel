<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;" v-if="boutique">
        <div class="row d-block d-md-flex">
            <div class="col-12 col-md-8">
                <div>
                    <div class="bg-body border rounded border-0 shadow"
                        style="width: 100%;height: 250px;overflow: hidden;margin-bottom: 20px;">
                        <div class="bg-body-secondary" style="height: 75%;">
                            <div class="float-end" style="margin: 15px;"><label class="form-label border rounded border-2"
                                    style="padding: 5px;padding-right: 10px;padding-top: 10px; padding-bottom: 10px; padding-left: 10px;margin: 0px;cursor: pointer; "
                                    for="cover-img"><i class="fas fa-camera"></i></label><input id="cover-img" type="file"
                                    accept="image/*" name="cover-img" style="display: none;" /></div>
                        </div>
                        <div class="d-flex justify-content-between" style="height: 25%;">
                            <div class="d-flex" style="/*width: 80%;*/padding-left: 20px;">
                                <div
                                    style="width: 100px;height: 100px;margin-top: -50px;border-radius: 100%;padding: 2px;overflow: hidden;border: 1.5px dashed var(--bs-gray-500);">
                                    <div
                                        style="width: 100%;height: 100%;background: var(--bs-gray-600);border-radius: 100%;">
                                        <img style="width: 100%;height: 100%;border-radius: 100%;" :src="'/storage/' + boutique.img" />
                                    </div>
                                </div>

                                <button
                                    @click="putLogoBoutique"
                                    class="form-label border-0 bg-body shadow-sm d-flex flex-column justify-content-center align-items-center"
                                    style="cursor: pointer;height: 25px;width: 25px;border-radius: 100%;margin-top: 13px;margin-left: 75px;position: absolute;"
                                    for="profile-logo-boutique"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor"
                                        style="font-size: 11px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                                        </path>
                                    </svg>
                                </button>

                                <input id="profile-logo-boutique" ref="inputLogoBoutique" type="file" accept="image/*" style="display: none;" />


                                <div class="d-flex flex-column" style="margin-left: 15px;margin-top: 10px;"><span
                                        class="fw-bold">{{ boutique.nom }}</span><span style="font-size: 11px;">2.9k
                                        abonné(és)</span></div>
                            </div>
                            <div class="d-flex flex-column justify-content-end"
                                style="/*width: 50%;*/margin-right: 15px;margin-bottom: 15px;"><button
                                    class="btn btn-primary btn-sm link-light border rounded-pill border-0 d-block d-md-none"
                                    type="button" style="padding-right: 12px;padding-left: 12px;" data-bs-target="#abonnes"
                                    data-bs-toggle="offcanvas">Abonnés</button></div>
                        </div>
                    </div>
                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 15px;">
                        <form method="post" @submit.prevent="update.put('/boutique', {
                            onSuccess: () => { this.success = true }
                        })">
                            <div class="row d-block d-md-flex">
                                <div class="col">
                                    <div>
                                        <div class="mb-2">
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="nom" v-model="update.nom"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Nom de l&#39;entreprise" name="nom" /></div><span
                                                v-if="update.errors.nom" class="text-primary" style="font-size: 12px;">{{
                                                    update.errors.nom }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div>
                                        <div class="mb-2">
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="phone" v-model="update.phone"
                                                    class="border-0 shadow-none form-control form-control-sm" type="tel"
                                                    name="birthday" placeholder="Numéro de téléphone" max="13"
                                                    style="outline: none;" /></div><span class="text-primary"
                                                style="font-size: 12px;" v-if="update.errors.phone">{{ update.errors.phone
                                                }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                            style="overflow: hidden;"><input id="postnom" v-model="update.email"
                                                class="border-0 shadow-none form-control form-control-sm" type="email"
                                                placeholder="Adresse mail" name="email" style="outline: none;" /></div>
                                        <span class="text-primary" style="font-size: 12px;" v-if="update.errors.email">{{
                                            update.errors.email }}</span>
                                    </div>
                                </div>

                                <div class="col-12" style="margin-bottom: 12px;">
                                    <div class="border rounded border-dark-subtle">
                                        <textarea v-model="update.description"
                                            class="border-0 shadow-none form-control form-control-lg" name="description"
                                            placeholder="Decrivez votre entreprise"
                                            style="outline: none;font-size: 13px;resize: none;"></textarea>
                                    </div><span class="text-primary" style="font-size: 12px;"
                                        v-if="update.errors.description">{{ update.errors.description }}</span>
                                </div>
                            </div>
                            <div>
                                <div v-if="success">Modifié avec succès</div>
                                <button class="btn btn-primary btn-sm link-light" type="submit">Personnalisez</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <div class="col d-none d-md-block">
                <div id="div-infos-profile" class="bg-body border rounded border-0 shadow d-flex flex-column"
                    style="padding: 10px;height: 320px;position: sticky;top: 144px;">
                    <div class="border rounded d-flex align-items-center" style="overflow: hidden;padding-right: 10px;">
                        <input class="bg-transparent border-0 shadow-none form-control-sm" type="text"
                            placeholder="Recherche" style="width: 100%;outline: none;" /><i class="fas fa-search"></i>
                    </div>
                    <div style="width: 100%;margin-top: 15px;height: 90%;">
                        <div class="d-flex flex-column justify-content-center align-items-center"
                            style="width: 100%;height: 100%;"><svg class="fs-1 text-body-secondary mb-2"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em"
                                fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M319.9 320c57.41 0 103.1-46.56 103.1-104c0-57.44-46.54-104-103.1-104c-57.41 0-103.1 46.56-103.1 104C215.9 273.4 262.5 320 319.9 320zM369.9 352H270.1C191.6 352 128 411.7 128 485.3C128 500.1 140.7 512 156.4 512h327.2C499.3 512 512 500.1 512 485.3C512 411.7 448.4 352 369.9 352zM512 160c44.18 0 80-35.82 80-80S556.2 0 512 0c-44.18 0-80 35.82-80 80S467.8 160 512 160zM183.9 216c0-5.449 .9824-10.63 1.609-15.91C174.6 194.1 162.6 192 149.9 192H88.08C39.44 192 0 233.8 0 285.3C0 295.6 7.887 304 17.62 304h199.5C196.7 280.2 183.9 249.7 183.9 216zM128 160c44.18 0 80-35.82 80-80S172.2 0 128 0C83.82 0 48 35.82 48 80S83.82 160 128 160zM551.9 192h-61.84c-12.8 0-24.88 3.037-35.86 8.24C454.8 205.5 455.8 210.6 455.8 216c0 33.71-12.78 64.21-33.16 88h199.7C632.1 304 640 295.6 640 285.3C640 233.8 600.6 192 551.9 192z">
                                </path>
                            </svg><span class="text-body-secondary" style="font-size: 12px;">Aucun abonné.</span></div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <div id="boutique-empty" style="position: absolute;height: 77%;width: 100%;" v-if="!boutique">
        <div class="container" style="padding-top: 15px;height: 100%;">
            <div class="bg-body border rounded border-0 shadow d-flex flex-column justify-content-center align-items-center"
                style="height: 100%;width: 100%;padding: 10px;">
                <div class="row g-0" style="width: 100%;height: 100%;">
                    <div class="col" style="width: 100%;height: 100%;">
                        <div id="create-boutique" class="carousel slide" data-bs-ride="false" data-bs-pause="false"
                            data-bs-keyboard="false" data-bs-touch="false" style="width: 100%;height: 100%;">
                            <div class="carousel-inner" style="width: 100%;height: 100%;">
                                <div class="carousel-item active" style="width: 100%;height: 100%;">
                                    <div class="d-flex flex-column justify-content-center align-items-center"
                                        style="width: 100%;height: 100%;">
                                        <div><img src="images/casual-life-3d-shop-facade-with-awning-and-chalkboard-2ui.png"
                                                style="width: 200px;height: 160px;" /></div>
                                        <div class="text-center" style="margin-top: 5px;">
                                            <div id="div-gradient" style="margin-bottom: -3px;"><span class="fs-3"
                                                    style="font-family: Montserrat, sans-serif;">Crée ta boutique.</span>
                                            </div><span class="text-body-secondary" style="font-size: 12px;">Soit ...</span>
                                        </div><a
                                            class="btn btn-primary bg-primary border rounded-pill border-0 shadow carousel-control-next"
                                            role="button"
                                            style="padding-right: 30px;padding-left: 30px;margin-top: 15px;position: relative;opacity: 1;font-size: 12px;height: 30px;width: 90px;color: white;"
                                            href="#create-boutique" data-bs-slide="next">Suivant</a>
                                    </div>
                                </div>
                                <div class="carousel-item" style="width: 100%;height: 100%;">
                                    <div class="d-flex flex-column justify-content-center align-items-center"
                                        style="width: 100%;height: 100%;">
                                        <div><img src="images/life-t-shirt-mockup.png"
                                                style="width: 180px;height: 140px;" /></div>
                                        <div class="text-center" style="margin-top: 5px;">
                                            <div id="div-gradient" style="margin-bottom: -3px;"><span class="fs-3"
                                                    style="font-family: Montserrat, sans-serif;">Ajoutez les articles</span>
                                            </div><span class="text-body-secondary" style="font-size: 12px;">Text</span>
                                        </div><a
                                            class="btn btn-primary bg-primary border rounded-pill border-0 shadow carousel-control-next"
                                            role="button"
                                            style="padding-right: 30px;padding-left: 30px;margin-top: 15px;position: relative;opacity: 1;font-size: 12px;height: 30px;width: 90px;color: white;"
                                            href="#create-boutique" data-bs-slide="next">Suivant</a>
                                    </div>
                                </div>
                                <div class="carousel-item" style="width: 100%;height: 100%;">
                                    <div class="d-flex flex-column justify-content-center align-items-center"
                                        style="width: 100%;height: 100%;">
                                        <div><img src="images/3d-casual-life-smiling-man-with-laptop-waving-hand.png"
                                                style="width: 180px;height: 140px;" /></div>
                                        <div class="text-center" style="margin-top: 5px;">
                                            <div id="div-gradient" style="margin-bottom: -3px;"><span class="fs-3"
                                                    style="font-family: Montserrat, sans-serif;">Put your title</span></div>
                                            <span class="text-body-secondary" style="font-size: 12px;">Text</span>
                                        </div><button class="btn btn-primary bg-primary border rounded-pill border-0 shadow"
                                            type="button"
                                            style="padding-right: 30px;padding-left: 30px;margin-top: 15px;position: relative;opacity: 1;font-size: 12px;height: 30px;color: white;"
                                            data-bs-target="#new-boutique-modal" data-bs-toggle="modal">Créer ma
                                            boutique</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="new-boutique-modal" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Créez votre boutique</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <div class="d-flex flex-column align-items-center">
                        <form style="width: 100%;" @submit.prevent="createBoutique(form)">
                            <div class="mb-2" style="width: 100%;">
                                <div class="border rounded d-flex align-items-center" style="overflow: hidden;"><input
                                        class="bg-transparent border-0 shadow-none form-control form-control-sm" type="text"
                                        placeholder="Le nom de votre boutique" v-model="form.nom"
                                        style="width: 100%;outline: none;font-size: 13px;" /></div><span
                                    class="text-primary" style="font-size: 11px;" v-if="form.errors.nom">{{ form.errors.nom
                                    }}</span>
                            </div>
                            <div class="mb-2" style="width: 100%;">
                                <div class="border rounded d-flex align-items-center"
                                    style="overflow: hidden;height: 90px;"><textarea v-model="form.description"
                                        class="bg-transparent border-0 shadow-none form-control"
                                        placeholder="Decrivez vos offres"
                                        style="width: 100%;outline: none;height: 100%;resize: none;padding: 5px;font-size: 13px;"></textarea>
                                </div><span class="text-primary" style="font-size: 11px;" v-if="form.errors.description">{{
                                    form.errors.description }}</span>
                            </div><button class="btn btn-primary btn-lg link-light border-0 shadow" type="submit"
                                style="width: 100%;font-size: 12px;">Créer une boutique</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-body p-2" v-if="boutique">
        <button
            class="btn btn-primary btn-sm bg-dark-subtle border-1 border-dark-subtle shadow-none d-flex justify-content-center align-items-center"
            type="button" data-bs-target="#lien-form" data-bs-toggle="modal" ref="buttonFormLien"
            style="margin-right: 6px;height: 31px;width: 32px;"><svg xmlns="http://www.w3.org/2000/svg"
                viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z">
                </path>
            </svg></button>

        <FormLien @hide-form-link="hideLinkForm" :boutique_id="boutique.id"></FormLien>
        <ListLiens :liens="liens"></ListLiens>
    </div>

    <div class="container d-flex" v-if="boutique">

        <div class="container">
            <div class="container">
                supprimer
                <form method="post" @submit.prevent="deleteBtk.delete('/boutique', {
                    onSuccess: () => {
                        this.deleteSuccess = true
                    },
                })">
                    <input type="password" name="password" placeholder="Mot de passe" v-model="deleteBtk.password"> <br>
                    <div v-if="deleteSuccess"> Mot de passe incorrecte </div>
                    <button type="submit">Supprimer</button>
                </form>

                <button class="btn btn-primary btn-sm link-primary bg-transparent" type="button"
                    data-bs-target="#contact-form" ref="buttonContact" data-bs-toggle="modal">Ajouter un contact</button>

            </div>



            <FormContact @hide-form-contact="hideFormContact" :contacts="contacts" fournisseur="" user=""
                :boutique="boutique" client=""></FormContact>

            <ListContact :contacts="contacts" :boutique="boutique"></ListContact>

        </div>


    </div>
</template>
    

<script>

import Header from '../../Components/Header/Header.vue';
import ListContact from './Contacts/ListContact.vue';
import FormContact from './Contacts/FormContact.vue';
import ListLiens from './Liens/ListLiens.vue';
import FormLien from './Liens/FormLien.vue';
import { Link, useForm, router } from "@inertiajs/vue3";


const hide = document.getElementsByClassName("modal-backdrop fade show")

export default {
    components: {
        Header,
        ListContact,
        FormContact,
        ListLiens,
        FormLien,
    },
    mounted() {
        // console.log(this.boutique);
    },

    props: ['boutique', 'contacts', 'liens'],

    data() {
        return {

            form: useForm({
                nom: null,
                description: null
            }),

            update: useForm({
                nom: this.boutique.length === 1 ? this.boutique[0].nom : null,
                email: this.boutique.length === 1 ? this.boutique[0].email : null,
                phone: this.boutique.length === 1 ? this.boutique[0].phone : null,
                description: this.boutique.length === 1 ? this.boutique[0].description : null
            }),

            deleteBtk: useForm({
                id: this.boutique.id ? this.boutique.id : null,
                password: null
            }),

            profileImg: useForm({
                img: null
            }),
            success: false,
            successAdress: false,
            deleteSuccess: false
        }
    },

    methods: {
        profile(event) {
            this.profileImg.img = event.target.files[0]
            this.profileImg.post('/boutique-profile-img', this.profileImg.img)
        },

        createBoutique(form) {
            this.form.post('/boutique')

            const div = document.querySelector(".modal-backdrop")
            const myAtt = document.querySelector("body")
            myAtt.removeAttribute('style')
            div.remove();
        },

        putLogoBoutique() {
            // 
        },

        hideFormContact() {
            this.$refs.buttonContact.click()
        },

        hideLinkForm() {
            this.$refs.buttonFormLien.click()
        }
    }

}


</script>

