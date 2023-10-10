<template>
    <body class="d-flex flex-column justify-content-center" id="body-cont-auth">
        <div class="text-start" id="div-cont-veri" style="justify-content: space-between;">
            <div class="text-center mt-4 mb-4" id="div-img-logo"><i class="fas fa-code" style="font-size: 50px;"></i></div>
            <form method="post"><label class="form-label fs-4 text-start">Connectez-vous</label>

                <callInput 
                :fields="this.$store.getters.atts(2)"
                :left-icons="this.$store.getters.atts(['fas fa-user', 'fas fa-lock'])" 
                :placeholder="['Adresse mail', 'Mot de passe']" 
                :type="this.$store.getters.atts(['email', 'password'])" 
                :name="param.name"
                :value="param.value">
            </callInput>
                
                <div class="d-flex justify-content-between"><span class="form-label text-primary">Formulaire incorrecte</span>
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
                <RouterLink :to="{ name: 'register' }">Nouveau compte </RouterLink>
            </div>
        </div>
    </body>
</template>

<script>

import callInput from '../globalComponents/input.vue'

export default {
    components: {
        callInput
    },

    data () {
        return {
            param: {
                name: ['email', 'password'],
                value: ['', ''],
            }
        }
    }
}
</script>
