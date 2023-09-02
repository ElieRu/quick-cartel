<template>
    <body class="d-flex flex-column justify-content-center" id="body-cont-auth">
        <div class="text-start" id="div-cont-veri" style="justify-content: space-between;">
            <div class="text-center mt-4 mb-4" id="div-img-logo"><i class="fas fa-code" style="font-size: 50px;"></i></div>
            <form method="post"><label class="form-label fs-4 text-start">Connectez-vous</label>
                <div v-for="item, i in box.fields">
                    <div :class="box.class[i]">
                        <i :class="box.icon[i]" style="margin-left: 10px;margin-right: 5px;"></i>
                        <input @click="clicked(i)" :class="box.input" v-model="box.values[i]" :type="box.type[i]"
                            :placeholder="box.placeholder[i]" :name="box.name[i]" >
                            <i :class="box.password_icon[i]" @click="display_password(i)" style="margin-right: 10px;cursor: pointer;"></i>
                    </div>
                </div>{{ display }}
                <div class="d-flex justify-content-between"><label class="form-label text-primary">Formulaire incorrecte</label>
                    <div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="rappel_moi"
                                name="remember"><label class="form-check-label" for="rappel_moi"
                                style="cursor: pointer;">Rappel moi</label></div>
                    </div>
                </div>
                <div class="mt-3 mb-3"><button class="btn btn-primary link-light border-0" type="submit"
                        style="width: 100%;">Connexion</button></div>
            </form>
            <div class="d-flex justify-content-between mb-3">
                <RouterLink :to="{ name: 'forgot_password' }">Mot de passe oublié?</RouterLink>
                <div class="dropdown"><button class="btn btn-primary link-body-emphasis border-0" aria-expanded="false"
                        data-bs-toggle="dropdown" type="button"
                        style="padding: 0px;background: transparent;font-size: 14px;">Créer un compte</button>
                    <div class="dropdown-menu border rounded shadow" style="padding: 0px;overflow: hidden;font-size: 14px;">
                        <RouterLink :to="{ name: 'register' }" class="dropdown-item" id="item-dropdown">pour consommateur
                        </RouterLink>
                        <RouterLink :to="{ name: 'register' }" class="dropdown-item" id="item-dropdown">pour entreprise
                        </RouterLink>
                    </div>
                </div>
            </div>
        </div>
    </body>
</template>

<script>
import store from '../store'

// import { Store, storeKey } from 'vuex'

// import { store } from "store";
export default {
    data() {
        return {
            box: {
                fields: 2,
                input: `bg-transparent border rounded-0 border-0 shadow-none form-control`,
                class: [
                    `border rounded border-1 d-flex flex-row align-items-center mb-4`,
                    `border rounded border-1 d-flex flex-row align-items-center mb-4`
                ],
                icon: ["fas fa-user", "fas fa-lock"],
                type: ["email", "password"],
                name: ["email", "password"],
                placeholder: ["Adresse mail", "Mot de passe"],
                values: ["", ""],
                password_icon: ["","fas fa-eye"]
            },
            tmp: 0,
            tmp_style: `border rounded border-1 d-flex flex-row align-items-center mb-4`
        }
    },

    mounted () {
        this.home ()
        // console.log($store.state.name)
    },

    computed: {
        display () {
            if (this.box.values[this.tmp] != '') {
                this.box.class[this.tmp] = this.tmp_style
                
            } 
        },
    },

    methods: {
        clicked(i) {
            this.tmp = i
            this.box.class[i] = this.box.class[i] + " border-primary"
        },

        display_password(i) {
            this.box.type[i] = this.box.type[i] == 'password' ? 'text' : 'password'
            this.box.password_icon[i] = this.box.password_icon[i] == 'fas fa-eye' ? 'fas fa-eye-slash' : 'fas fa-eye'
        },

        home () {
            // console.log(this.$router)
            // this.$s::
        }
    }
}
</script>
