<template>
    <Header></Header>

    <div style="position: absolute;height: 77%;width: 100%;" v-if="props.boutique.length === 0">
        <div class="container" style="padding-top: 15px;height: 100%;">
            <div class="bg-body-tertiary border rounded border-0 shadow d-flex flex-column justify-content-center align-items-center"
                style="height: 100%;width: 100%;">
                <div class="row justify-content-center" style="width: 100%;">
                    <div class="col-12 col-sm-6">
                        <div class="d-flex flex-column align-items-center">
                            <img style="width: 130px; height: 140px;" src="images/boutique empty.png" />
                            <form style="width: 100%;" method="post" @submit.prevent="newBtq.post('boutique')">
                                <div class="mb-2 mt-3" style="width: 100%;"><span class="text-body-secondary">Le nom de
                                        votre boutique</span>
                                    <div class="border rounded d-flex align-items-center" style="overflow: hidden;"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em"
                                            height="1em" fill="currentColor" style="margin-left: 10px;">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M0 155.2C0 147.9 2.153 140.8 6.188 134.7L81.75 21.37C90.65 8.021 105.6 0 121.7 0H518.3C534.4 0 549.3 8.021 558.2 21.37L633.8 134.7C637.8 140.8 640 147.9 640 155.2C640 175.5 623.5 192 603.2 192H36.84C16.5 192 .0003 175.5 .0003 155.2H0zM64 224H128V384H320V224H384V464C384 490.5 362.5 512 336 512H112C85.49 512 64 490.5 64 464V224zM512 224H576V480C576 497.7 561.7 512 544 512C526.3 512 512 497.7 512 480V224z">
                                            </path>
                                        </svg><input name="nom" v-model="newBtq.nom"
                                            class="bg-transparent border-0 shadow-none form-control form-control-sm"
                                            type="text" placeholder="Le nom de votre boutique"
                                            style="width: 100%;outline: none;font-size: 13px;" /></div>
                                    <span style="font-size: 12px;" class="text-primary" v-if="newBtq.errors.nom">{{
                                        newBtq.errors.nom }}</span>
                                </div>
                                <div class="mb-2" style="width: 100%;">
                                    <div class="border rounded d-flex align-items-center"
                                        style="overflow: hidden;height: 90px;"><textarea v-model="newBtq.description"
                                            class="bg-transparent border-0 shadow-none form-control"
                                            placeholder="Decrivez vos offres"
                                            style="width: 100%;outline: none;height: 100%;resize: none;padding: 5px;font-size: 13px;"></textarea>
                                    </div><span style="font-size: 12px;" class="text-primary"
                                        v-if="newBtq.errors.description">{{ newBtq.errors.description }}</span>
                                </div><button class="btn btn-primary btn-lg link-light border-0 shadow" type="submit"
                                    style="width: 100%;font-size: 12px;">Créer une boutique</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div v-if="props.boutique.length !== 0" class="container" style="padding-top: 15px;">
        <div class="row d-block d-md-flex">
            <div class="col-12 col-md-8">
                <div>
                    <div class="bg-body shadow"
                        style="width: 100%;height: 250px;border-radius: 15px;overflow: hidden;margin-bottom: 20px;">
                        <div class="bg-body-secondary" style="height: 70%;">
                            <div class="float-end" style="margin: 15px;"><label class="form-label border rounded border-2"
                                    style="padding: 5px;padding-right: 10px;padding-left: 10px;margin: 0px;cursor: pointer;"
                                    for="cover-img"><i class="fas fa-camera"></i></label><input id="cover-img" type="file"
                                    accept="image/*" name="cover-img" style="display: none;" /></div>
                        </div>
                        <div class="d-flex justify-content-between" style="height: 30%;">
                            <div class="d-flex" style="/*width: 80%;*/padding-left: 20px;">
                                <div
                                    style="width: 100px;height: 100px;margin-top: -50px;border-radius: 100%;padding: 2px;overflow: hidden;border: 1.4px dashed var(--bs-gray);">
                                    <div
                                        style="width: 100%;height: 100%;background: var(--bs-gray-600);border-radius: 100%;">
                                        <img style="width: 100%;height: 100%;border-radius: 100%;"
                                            src="images/img logo.jpg" />
                                        <input id="profile-img-1" type="file" accept="image/*" style="display: none;" />
                                        <label
                                            class="form-label bg-body shadow-sm d-flex flex-column justify-content-center align-items-center"
                                            style="cursor: pointer;height: 25px;width: 25px;border-radius: 100%;margin-top: -28px;margin-left: 70px;position: absolute;"
                                            for="profile-img"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                width="1em" height="1em" fill="currentColor" style="font-size: 11px;">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                                                </path>
                                            </svg>
                                        </label>
                                    </div>

                                </div>
                                <div class="d-flex flex-column" style="margin-left: 15px;margin-top: 10px;"><span
                                        class="fw-bold">{{ props.boutique[0].nom }}</span><span
                                        style="font-size: 11px;">2.9k
                                        abonné(és)</span></div>
                            </div>
                            <div class="d-flex flex-column justify-content-end"
                                style="margin-right: 15px;margin-bottom: 15px;">
                                <Link as="button" href="/boutique" method="delete" :data="{ id: props.boutique[0].id }"
                                    class="btn btn-primary btn-sm link-light border rounded-pill border-0" type="button"
                                    style="padding-right: 12px;padding-left: 12px;">Supprimer</Link>
                            </div>
                        </div>
                    </div>
                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 20px;">
                        
                        <form method="post" @submit.prevent="updateBtq.put('/boutique')">
                            <div class="row d-block d-md-flex">
                                <div class="col">
                                    <div>
                                        <div class="mb-3"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;" for="nom">Nom
                                                de l&#39;entreprise</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="nom" v-model="updateBtq.nom"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Nom de l&#39;entreprise" name="nom" /></div><span
                                                class="text-primary" style="font-size: 12px;">{{ updateBtq.errors.nom
                                                }}</span>
                                        </div>
                                        <div class="mb-3"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="postnom">Adresse mail de votre entreprise</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="email" v-model="updateBtq.email"
                                                    class="border-0 shadow-none form-control form-control-sm" type="email"
                                                    placeholder="Adresse mail" name="email" style="outline: none;" /></div>
                                            <span class="text-primary" style="font-size: 12px;">{{ updateBtq.errors.email
                                            }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="mb-3"><label id="birthday-1" class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="sexe">Numéro de téléphone</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="phone" v-model="updateBtq.phone"
                                                    class="border-0 shadow-none form-control form-control-sm" type="tel"
                                                    name="birthday" placeholder="Numéro de téléphone" max="13"
                                                    style="outline: none;" /></div><span class="text-primary"
                                                style="font-size: 12px;">{{ updateBtq.errors.phone }}</span>
                                        </div>
                                        <div class="mb-3"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="sexe">Url</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="url" v-model="updateBtq.url"
                                                    class="border-0 shadow-none form-control form-control-sm" type="url"
                                                    placeholder="Autre url" name="sexe" inputmode="url"
                                                    style="outline: none;" /></div><span class="text-primary"
                                                style="font-size: 12px;">{{ updateBtq.errors.url }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" style="margin-bottom: 12px;">
                                    Descrivez vos offres
                                    <div class="border rounded border-dark-subtle"><textarea
                                            class="border-0 shadow-none form-control form-control-lg" name="description"
                                            placeholder="Decrivez votre entreprise" v-model="updateBtq.description"
                                            style="outline: none;font-size: 14px;resize: none;padding: 5px;"></textarea></div><span
                                        class="text-primary" style="font-size: 12px;">{{ updateBtq.errors.descriotion
                                        }}</span>
                                </div>
                            </div>
                            <div><button class="btn btn-primary btn-sm link-light" type="submit">Personnalisez vos
                                    informations</button></div>
                        </form>


                    </div>
                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 15px;">
                        <form method="post" @submit.prevent="submit_adress">
                            <div class="row d-block d-md-flex">
                                <div class="col">
                                    <div>
                                        <div class="mb-3"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="ville">Ville</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="ville" v-model="adresse.ville"
                                                    style="background-color: transparent;"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Ville*" name="ville" inputmode="url" /></div><span
                                                class="text-primary" style="font-size: 12px;">{{ adresse.errors.ville
                                                }}</span>
                                        </div>
                                        <div class="mb-3"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="commune">Commune</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="commune" v-model="adresse.commune"
                                                    style="background-color: transparent;"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Commune*" name="commune" inputmode="url" /></div><span
                                                class="text-primary" style="font-size: 12px;">{{ adresse.errors.commune
                                                }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <div class="mb-3"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="quartier">Quartier</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="quartier" v-model="adresse.quartier"
                                                    style="background-color: transparent;"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Quartier*" name="quartier" /></div><span
                                                class="text-primary" style="font-size: 12px;">{{ adresse.errors.quartier
                                                }}</span>
                                        </div>
                                        <div class="mb-3"><label class="form-label"
                                                style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                                for="avenue">Avenue</label>
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="Avenue" v-model="adresse.avenue"
                                                    style="background-color: transparent;"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Avenue*" name="avenue" /></div><span class="text-primary"
                                                style="font-size: 12px;">{{ adresse.errors.avenue }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: -8px;">
                                <div class="mt-2"><button class="btn btn-primary btn-sm link-light"
                                        type="submit">Personnalisez votre addresse</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 d-none d-md-block">
                <div id="div-infos-profile"
                    class="bg-body shadow d-flex flex-column justify-content-center align-items-center">
                    <div>
                        <div
                            style="width: 150px;height: 150px;border-radius: 100%;border-width: 2px;border-style: dashed;padding: 3px;">
                            <img src="images/img logo.jpg" style="width: 100%;height: 100%;border-radius: 100%;" />
                        </div>



                    </div>
                    <div style="margin-top: 10px;width: 100%;">
                        <div></div>
                        <div class="d-flex flex-column"><span style="font-size: 12px;">Nom de l&#39;entreprise</span><span
                                style="font-size: 13px;">{{ props.boutique[0].nom }}</span></div>
                        <div class="d-flex flex-column" style="margin-top: 15px;"><span style="font-size: 12px;">Adresse
                                mail*</span><span style="font-size: 13px;">{{ props.boutique[0].email }}</span></div>
                        <div class="d-flex flex-column" style="margin-top: 15px;margin-bottom: 10px;"><span
                                style="font-size: 12px;">Description*</span><span style="font-size: 13px;">{{
                                    props.boutique[0].email }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
    

<script setup>
import Header from '../../Components/Header/Header.vue';
import { Link, useForm } from "@inertiajs/vue3";

const props = defineProps(['boutique', 'adresse'])

console.log(props.boutique)

const newBtq = useForm({
    nom: null,
    description: null,
})


const updateBtq = useForm({
    nom: props.boutique.nom,
    email: props.boutique.email,
    phone: props.boutique.phone,
    url: props.boutique.url,
    description: props.boutique.description
})


const adresse = useForm({
    id: null,
    ville: null,
    commune: null,
    quartier: null,
    avenue: null
})

function submit_adress() {
    if (adresse.id) {
        console.log('update');
        adresse.put('/adresse')
    } else {
        // console.log('save');
        adresse.post('/adresseCreate')
    }
}



// const deleteBtq = useForm({
//     id: null
// })

</script>