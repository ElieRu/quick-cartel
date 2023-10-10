<template>

<body class="d-flex flex-column justify-content-center" id="body-cont-auth">
    <div class="text-center" id="div-cont-veri">
        <div class="text-center">
            <div id="div-para-reset"><label class="form-label fs-4">Réitialisation</label>
                <p>Entrez l'adresse mail associé à votre compte pour la récupération du mot de passe.</p>
            </div>
            <form method="post">
                <callInput 
                :fields="this.$store.getters.atts(1)"
                :leftIcons="this.$store.getters.atts(['fas fa-user'])" 
                :placeholder="this.$store.getters.atts(['Votre adresse mail'])" 
                :type="['email']" 
                :name="param.name"
                :value="param.value"></callInput>
                <div class="d-flex justify-content-between"><label class="form-label text-primary">Formulaire incorrecte</label></div>
                <div class="mt-3 mb-3"><button class="btn btn-primary link-light border-0" type="submit" style="width: 100%;">Envoie des instructions</button></div>
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
                name: ['email'],
                value: ['']
            }
        }
    }
}
</script>
