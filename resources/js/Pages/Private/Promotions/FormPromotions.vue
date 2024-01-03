<template>
    <div id="form-promotion" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Promotion</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <div v-if="article.prix == null" class="bg-secondary-subtle border rounded border-0 mb-2"
                        style="overflow: hidden;padding: 8px;">
                        <span>Le prix de cet article n'est pas défini.</span>
                    </div>
                    <div>
                        <form method="post" @submit.prevent="submit">
                            <div class="mb-2">
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;"><input id="nom" v-model="form.nom"
                                        class="bg-transparent border-0 form-control form-control-sm" type="text"
                                        style="width: 100%;outline: none;" name="nom" placeholder="Nom" /></div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div><label id="date-debut" class="form-label" style="margin-bottom: 2px;">Date de
                                            début</label>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                            style="overflow: hidden;"><input id="date-debut" v-model="form.dateDebut"
                                                class="form-control border-0 form-control-sm"
                                                style="width: 100%;outline: none;" type="date" /></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div><label id="date-fin" class="form-label" style="margin-bottom: 2px;">Date de
                                            fin</label>
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                            style="overflow: hidden;"><input id="date-fin" v-model="form.dateFin"
                                                class="form-control border-0 form-control-sm"
                                                style="width: 100%;outline: none;" type="date" /></div>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                style="overflow: hidden;"><select v-model="form.type"
                                    class="bg-transparent border-0 shadow-none form-select form-select-sm"
                                    style="outline: none;">
                                    <optgroup label="Type">
                                        <option value="Rémise en pourcentage" selected>Rémise en pourcentage</option>
                                        <option value="Réduction forfaitaire">Réduction forfaitaire</option>
                                    </optgroup>
                                </select></div>

                            <div v-if="form.type == 'Rémise en pourcentage'"
                                class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                style="overflow: hidden;"><input class="border-0 shadow-none form-control form-control-sm"
                                    v-model="form.pourcentage" type="number" placeholder="Pourcentage"
                                    style="outline: none;" /></div>

                            <div v-if="form.type == 'Réduction forfaitaire'"
                                class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center mb-2"
                                style="overflow: hidden;"><input v-model="form.montantReduction"
                                    class="bg-transparent border-0 shadow-none" type="number"
                                    style="width: 100%;outline: none;height: 31px;padding-left: 10px;"
                                    placeholder="Montant de réduction" min="1" /><select disabled v-model="form.devise"
                                    class="bg-transparent border-0 shadow-none" style="height: 100%;outline: none;">
                                    <optgroup label="Votre dévise">
                                        <option value="USD">USD</option>
                                    </optgroup>
                                </select></div>

                            <div class="border rounded mb-2 border-dark-subtle" style="overflow: hidden;height: 90px">
                                <textarea v-model="form.description" class="border-0 form-control form-control-sm"
                                    style="resize: none;outline: none;height:100%;" placeholder="Déscription"></textarea>
                            </div>

                            <div class="bg-danger-subtle border rounded border-0 mb-2" v-if="periodeValid"
                                style="overflow: hidden;padding: 8px;"><span>{{ msgError }}</span>
                            </div>

                            <div class="bg-danger-subtle border rounded border-0 mb-2" v-if="montantReductionError"
                                style="overflow: hidden;padding: 8px;"><span>{{ msgError }}</span>
                            </div>

                            <div class="bg-danger-subtle border rounded border-0 mb-2" v-if="pourcentageValidationError"
                                style="overflow: hidden;padding: 8px;"><span>{{ msgError }}</span>
                            </div>

                            <div class="bg-danger-subtle border rounded border-0 mb-2" v-if="form.hasErrors"
                                style="overflow: hidden;padding: 8px;"><span>Formulaire incorrecte</span></div>

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-primary btn-sm link-light border-0" :disabled="article.prix == null"
                                    type="submit">Enregister</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> {{ myErrors }}
</template>

<script>

import { router, useForm } from "@inertiajs/vue3";

export default {
    data() {
        return {

            form: useForm({
                article_id: this.article.id,
                nom: null,
                dateDebut: null,
                dateFin: null,
                description: null,
                type: null,
                pourcentage: null,
                montantReduction: null,
                devise: null
            }),

            success: false,
            periodeValid: false,
            montantReductionError: false,
            pourcentageValidationError: false,
            msgError: ''
        }
    },
    
    emits: ['hide-form'],

    props: {
        article: Object
    },

    computed: {
        myErrors() {
            if (this.form.dateDebut && this.form.dateFin && this.form.dateDebut >= this.form.dateFin) {
                this.periodeValid = true
                this.msgError = 'Période non valide...'
            } else {
                if (this.form.type == 'Réduction forfaitaire' && this.article.prix < this.form.montantReduction) {
                    this.montantReductionError = true
                    this.msgError = 'Montant de réduction n\'est pas valide'
                } else {
                    if (this.form.type == 'Rémise en pourcentage' && this.form.pourcentage && !(this.form.pourcentage > 0 && this.form.pourcentage < 100)) {
                        this.pourcentageValidationError = true
                        this.msgError = 'Pourcentage n\'est pas valide'
                    } else {
                        this.pourcentageValidationError = false
                        this.montantReductionError = false
                        this.periodeValid = false
                        this.msgError = ''
                    }
                }
            }

        }
    },

    methods: {
        submit() {
            this.form.post('/promotions', {
                preserveScroll: true,
                onSuccess: () => {
                    this.$emit('hide-form')
                    this.form.reset()
                }
            })
        }
    },
}
</script>