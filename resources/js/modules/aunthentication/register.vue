<template>
    <div style="position: absolute; width: 100%; height: 100%;" class="d-flex flex-column justify-content-center">
        <div id="div-cont-form" class="text-center" style="overflow: hidden;">
            <div id="div-img-logo" class="mt-4 mb-4"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640"
                    width="1em" height="1em" fill="currentColor" style="font-size: 50px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M414.8 40.79L286.8 488.8C281.9 505.8 264.2 515.6 247.2 510.8C230.2 505.9 220.4 488.2 225.2 471.2L353.2 23.21C358.1 6.216 375.8-3.624 392.8 1.232C409.8 6.087 419.6 23.8 414.8 40.79H414.8zM518.6 121.4L630.6 233.4C643.1 245.9 643.1 266.1 630.6 278.6L518.6 390.6C506.1 403.1 485.9 403.1 473.4 390.6C460.9 378.1 460.9 357.9 473.4 345.4L562.7 256L473.4 166.6C460.9 154.1 460.9 133.9 473.4 121.4C485.9 108.9 506.1 108.9 518.6 121.4V121.4zM166.6 166.6L77.25 256L166.6 345.4C179.1 357.9 179.1 378.1 166.6 390.6C154.1 403.1 133.9 403.1 121.4 390.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4L121.4 121.4C133.9 108.9 154.1 108.9 166.6 121.4C179.1 133.9 179.1 154.1 166.6 166.6V166.6z">
                    </path>
                </svg></div>
            <div class="text-start"><label class="form-label fs-4 text-start">Créer un compte</label>
                <form method="post">
                    <div>
                        <div id="carousel-1" class="carousel slide" data-bs-ride="false" data-bs-keyboard="false"
                            data-bs-touch="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="border rounded border-1 d-flex flex-row align-items-center mb-4"><i
                                            class="fas fa-user" style="margin-left: 10px;margin-right: 5px;"></i><input
                                            class="border rounded border-0 shadow-none form-control" v-model="datas.username" type="text"
                                            placeholder="Nom d&#39;utilisateur" name="username" :[access]="access" /><button
                                            class="btn btn-primary link-body-emphasis bg-transparent border-0 shadow-none btn btn-lg btn-danger"
                                            type="button" style="padding: 0px;margin-right: 10px;margin-left: 5px;"
                                            data-bs-toggle="popover"
                                            data-bs-content="Ce champ ne peut pas être vide, ne peut avoir moins de cinq caractères ou contenir d’espace."
                                            data-bs-placement="bottom" data-bs-trigger="focus"><i
                                                class="fas fa-exclamation-circle text-body-secondary"
                                                style="font-size: 15px;"></i></button></div>
                                    <div class="border rounded border-1 d-flex flex-row align-items-center mb-1"><i
                                            class="fas fa-user" style="margin-left: 10px;margin-right: 5px;"></i><input v-model="datas.email"
                                            class="bg-transparent border rounded-0 border-0 shadow-none form-control"
                                            type="email" placeholder="Adresse mail" name="email" :[access]="access" /></div>
                                    <div><label class="form-label text-primary"> {{ labelFormState }} </label></div>
                                    <div class="d-flex justify-content-end mb-4">
                                        <a @click="authorization()" ref="myLink" id="btn-carousel-next"
                                            :class="class" role="button" :href="next" data-bs-slide='next' style="outline: none;">
                                            <span aria-hidden="true" style="font-size: 14px;">
                                                <span v-if="!load">Suivant</span>
                                                <span v-if="load" class="spinner-grow spinner-grow-sm text-white" role="status"></span>
                                                <span class="visually-hidden">Text</span></span>
                                        </a></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="border rounded border-1 d-flex flex-row align-items-center mb-4"><i
                                            class="fas fa-lock" style="margin-left: 10px;margin-right: 5px;"></i><input
                                            class="bg-transparent border-0 shadow-none form-control" type="password"
                                            placeholder="Mot de passe" name="password" v-model="passwords.password" /><i class="fas fa-eye"
                                            style="margin-right: 10px;cursor: pointer;"></i></div>
                                    <div class="border rounded border-1 d-flex flex-row align-items-center mb-1"><i
                                            class="fas fa-lock" style="margin-left: 10px;margin-right: 5px;"></i><input
                                            class="bg-transparent border-0 shadow-none form-control" type="password"
                                            placeholder="Confirmation" name="confirmation" v-model="passwords.confirmation"  /></div>
                                    <div><label class="form-label text-primary">{{ label2 }}</label></div>
                                    <div class="d-flex justify-content-end mb-4">
                                        <!-- <a id="btn-prec"
                                            class="btn btn-primary btn-sm link-secondary shadow-none carousel-control-prev"
                                            role="button" href="#carousel-1" data-bs-slide="prev"><span
                                                aria-hidden="true">Précédent<span
                                                    class="visually-hidden">Text</span></span></a> -->
                                        <button class="btn btn-primary btn-sm link-light shadow-none" type="button"
                                            @click="passwordValid()" :data-bs-target="passwordForm[0]" :data-bs-toggle="passwordForm[1]"
                                            style="outline: none;">Soumettre</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="mb-3">
                <p>Avez-vous un compte? <a href="#">Connectez-vous</a></p>
            </div>
        </div>
        <recoverInformations />
        <div style="display: none;">{{ chargement }} </div>
    </div>
</template>

<script>
import router from '../../routes';

import loading from '../globalComponents/loading.vue'
import recoverInformations from './components/recover-informations.vue'

import emailValidator from 'email-validator'
import { useVuelidate } from '@vuelidate/core'
import { required, minLength, sameAs } from '@vuelidate/validators'

export default {
    setup () {
        return { v$: useVuelidate() }
    },
    props: ['count'],
    components: {
        loading,
        recoverInformations
    },

    data() {
        return {
            next: '#caro',
            datas: {
                username: '',
                email: '',
            },

            labelFormState: '',

            formValid: false,
            access: '',
            load: false,
            class: 'btn btn-primary shadow-none carousel-control-next ',
            test: false,

            // passwords
            passwords: {
                password: '',
                confirmation: ''
            },

            label2: ''
        }
    },

    validations () {
        return {
            passwords: {
                password: { 
                    required, 
                    minLength: minLength(8) 
                },
                confirmation: { 
                    required,
                    sameAsPassword: sameAs('password')
                }
            }
        }
    },

    mounted() { },

    computed: {
        chargement () {
            if (this.validation()) {
                this.formValid = true
                this.labelFormState = ''
            }
        },
        passwordForm () {
            return this.passwordValid() ? ['#recoverInformations', 'modal'] : ['', '']
        }
    },

    methods: {
        validation () {
            let checkSpace = ! /\s/g.test(this.datas.username)
            let username = this.datas.username !== '' && this.datas.username.length >= 5 ? checkSpace : false
            let email = emailValidator.validate(this.datas.email);
            return username && email ? true : false
        },

        authorization () {
            if (!this.formValid) {
                this.labelFormState = 'Formulaire incorrecte'
            } else {
                this.enableForm(true)
                this.userExisted()
            }
        },

        enableForm (activation) {
            let classForm = 'btn btn-primary shadow-none carousel-control-next'
            this.load = activation ? true : false
            this.access = activation ? 'disabled' : ''
            if (activation) {
                this.class += ' disabled'
            } else {
                this.class = classForm
            }
        },
        
        async userExisted() {
            await axios.post(`/api/account`, this.datas)
            .then((resp) => {
                // setTimeout(() => {
                    if (resp) {
                        this.load = false
                        this.class = 'btn btn-primary shadow-none carousel-control-next'
                        this.next = '#carousel-1'
                    }
                // }, 2000);
            })
            .catch((err) => {
                if (err.response.data.errors && err.response.status === 422) {
                    let label = 'associé à ce compte existe déjà.'
                    setTimeout(() => {
                        if (err.response.data.errors.username) {
                            this.labelFormState = "Le nom d'utilisateur " + label
                            this.enableForm(false)
                            this.next = '#'
                        } else if (err.response.data.errors.email) {
                            this.labelFormState = "L'addresse mail " + label
                            this.enableForm(false)
                            this.next = '#'
                        } else {
                            this.labelFormState = "Formulaire invalide"
                            this.next = '#'
                        }
                    }, 3000);
                }
            });
        },

        passwordValid () {
            if (this.passwords.password === '' || this.passwords.confirmation === '') {
                // this.label2 = 'Formulaire incorrect'
                return false
            } else {
                if (this.passwords.password.length >= 8) {
                    if (this.passwords.password === this.passwords.confirmation) {
                        this.label2 = ''
                        return true
                    } else {
                        this.label2 = 'Confirmation incorrecte'
                        return false
                    }
                } else {
                    this.label2 = 'Entrez au moin 8 caractères'
                    return false
                }
            }
        },
    }
}


</script>
