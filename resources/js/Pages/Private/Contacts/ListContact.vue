<template>
    <div id="contact" class="bg-body border rounded border-0 shadow" style="padding: 10px; margin-bottom: 10px;"
        v-for="(contact, index) in contacts">
        <div>
            <div>
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-2"><span
                            style="font-size: 13px;">Contact {{ index + 1 }}</span><button
                            @click="deleteContact(contact.id)"
                            class="btn btn-primary btn-sm bg-secondary-subtle border-0 align-items-center"
                            type="button"
                            style="margin-right: 6px;height: 31px;width: 32px;"><svg class="text-body-emphasis" xmlns="http://www.w3.org/2000/svg"
                                viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                </path>
                            </svg></button></div>
                    <form method="post" @submit.prevent="updateContact(contact)">
                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                            style="overflow: hidden;"><input v-model="contact.phone"
                                class="bg-transparent border-0 shadow-none form-control form-control-sm" type="tel"
                                style="width: 100%;outline: none;" placeholder="Numéro de téléphone" /></div>
                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                            style="overflow: hidden;"><select v-model="contact.type"
                                class="bg-transparent border-0 shadow-none form-select form-select-sm"
                                style="outline: none;">
                                <option value="Personnel">Personnel</option>
                                <option value="Bureau">Bureau</option>
                                <option value="Domicile">Domicile</option>
                                <option value="Travail">Travail</option>
                            </select></div>
                        <div class="border-secondary-subtle d-flex flex-row align-items-center"><button
                                class="btn btn-primary btn-sm link-light border-0 shadow-sm" type="submit"
                                style="width: 100%;">Mettre à jour</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import { router, useForm } from '@inertiajs/vue3';

export default {
    props: ['user', 'contacts', 'client', 'boutique', 'fournisseur'],
    mounted() {
        // console.log(this.client);
    },
    data() {
        return {
            formContact: useForm({
                id: '',
                phone: '',
                type: '',
                // user_id: this.user.id ? this.user.id : null,
                // client_id: this.client.id ? this.client.id : null,
                // boutique_id: this.boutique.id ? this.boutique.id : null,
                // fournisseur_id: this.fournisseur.id ? this.fournisseur.id : null,
            })
        }
    },
    methods: {
        deleteContact(id) {
            this.formContact.id = id
            this.formContact.delete('/contacts')
        },

        updateContact(contact) {
            this.formContact.phone = contact.phone,
            this.formContact.type = contact.type,
            this.formContact.id = contact.id
            this.formContact.put('/contacts', {
                onSuccess: () => {
                    this.formContact.phone = ''
                    this.formContact.type = ''
                }
            })
        },
    }
}
</script>