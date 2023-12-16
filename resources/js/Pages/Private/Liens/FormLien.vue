<template>
    <!-- Formulaire des liens -->
    <div id="lien-form" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Ajouter un lien</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <div>
                        <form method="post" @submit.prevent="submitLink">
                            <div class="mb-2"><label class="form-label" style="font-size: 12px;">Votre site
                                    concerné</label>
                                <div :class="errorClass"
                                    style="overflow: hidden;"><select v-model="form.site"
                                        class="bg-transparent border-0 shadow-none form-select form-select-sm"
                                        style="outline: none;width: 100%;">
                                        <optgroup label="Type">
                                            <option value="Facebook" selected>Facebook</option>
                                            <option value="Instagram">Instagram</option>
                                            <option value="Shopify">Shopify</option>
                                            <option value="Autres">Autres</option>
                                        </optgroup>
                                    </select></div>
                            </div>
                            <div class="mb-2">
                                <div :class="errorClass"
                                    style="overflow: hidden;"><textarea v-model="form.lien"
                                        class="bg-transparent border-0 shadow-none form-control"
                                        style="width: 100%;height: 70px;resize: none;outline: none;" inputmode="url"
                                        placeholder="Entre votre url"></textarea></div>
                            </div>
                            <div class="mb-3"><button class="btn btn-primary btn-sm link-light border-0 shadow-none"
                                    type="submit" style="width: 100%;">Modifier</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { useForm } from '@inertiajs/vue3';
import { integer } from '@vuelidate/validators';

export default {
    props: {
        fournisseur_id: integer
    },
    emit: ['hide-form-link'],
    data() {
        return {
            form: useForm({
                site: null,
                lien: null,
                fournisseur_id: this.fournisseur_id ? this.fournisseur_id : null
            })
        }
    },
    computed: {
        errorClass() {
            let class_value = 'border rounded border-1 d-flex flex-row align-items-center mb-2 '
            if (this.form.errors.site) {
                class_value = class_value + 'border-primary'
            } else if (this.form.errors.lien) {
                class_value = class_value + 'border-primary'
            } else {
                class_value = class_value + 'border-secondary-subtle'
            }
            return class_value
        }
    },
    methods: {
        submitLink () {
            this.form.post('/liens', {
                onSuccess: () => {
                    this.form.reset()
                    this.$emit('hide-form-link')
                }
            })
        }
    }
}
</script>