<template>

<body class="d-flex flex-column justify-content-center" id="body-cont-auth">
    <div class="text-center" id="div-cont-veri">
        <div class="text-start">
            <div class="text-center mt-4 mb-4" id="div-img-logo"><i class="fas fa-code" style="font-size: 50px;"></i></div><label class="form-label fs-4 text-start">Nouveau mot de passe</label>
            <form method="post">
                <callInput 
                :fields="this.$store.getters.atts(2)" 
                :left-icons="this.$store.getters.atts(['fas fa-lock', 'fas fa-lock'])" 
                :placeholder="this.$store.getters.atts(['Mot de passe', 'Confirmation'])" 
                :type="this.$store.getters.atts(['password', 'password'])"
                :name="param.name"
                :value="param.value"></callInput>
                <div><label class="form-label text-primary">Formulaire incorrecte</label></div>
                <div class="mt-3 mb-3"><button class="btn btn-primary link-light border-0" type="submit" style="width: 100%;">Valider</button></div>
            </form>
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
                name: ['password', 'password_confirmation'],
                value: ['', ''],
            }
        }
    }
}
</script>
