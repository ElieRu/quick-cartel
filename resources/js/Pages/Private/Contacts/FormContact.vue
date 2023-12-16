<template>
    <!-- Ajout d'un contact -->
    <div id="contact-form" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Ajouter un contact</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <form method="post" @submit.prevent="formSubmitContact">
                        <div class="mb-2">
                            <div :class="errorClass"
                                style="overflow: hidden;"><input v-model="formContact.phone"
                                    class="bg-transparent border-0 form-control form-control-sm" type="tel"
                                    style="width: 100%;outline: none;" name="nom" placeholder="Numéro de téléphone" />
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-sm link-light border-0" type="submit">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/vue3'

export default {
    props: ['user', 'contacts', 'client', 'boutique', 'fournisseur'],
    emits: ['hide-form-contact'],
    mounted() {
        // console.log(this.user);
    },
    computed: {
        errorClass() {
            let class_value = 'border rounded border-1 d-flex flex-row align-items-center mb-2 '
            if (this.formContact.errors.phone) {
                class_value = class_value + 'border-primary'
            } else {
                class_value = class_value + 'border-secondary-subtle'
            }
            return class_value
        }
    },
    data() {
        return {
            formContact: useForm({
                id: '',
                phone: '',
                type: '',
                user_id: this.user.id ? this.user.id : null,
                client_id: this.client.id ? this.client.id : null,
                boutique_id: this.boutique.id ? this.boutique.id : null,
                fournisseur_id: this.fournisseur.id ? this.fournisseur.id : null,
            }),
        }
    },
    mounted() {
        // console.log(this.fournisseur);
    },
    methods: {
        formSubmitContact() {
            this.formContact.post('/contacts', {
                onSuccess: () => {
                    this.formContact.phone = ''
                    this.formContact.type = ''
                    this.$emit('hide-form-contact')
                }
            })
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