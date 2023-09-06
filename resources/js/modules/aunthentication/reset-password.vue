<template>

<body class="d-flex flex-column justify-content-center" id="body-cont-auth">
    <div class="text-center" id="div-cont-veri">
        <div class="text-start">
            <div class="text-center mt-4 mb-4" id="div-img-logo"><i class="fas fa-code" style="font-size: 50px;"></i></div><label class="form-label fs-4 text-start">Nouveau mot de passe</label>
            <form method="post">
                <callInput fields="2" left-icons="['fas fa-lock', 'fas fa-lock']" placeholder="['Mot de passe', 'Confirmation']" type="['password', 'password']" name="['password', 'password_confirmation']"></callInput>
                <div style="margin-top: -20px;"><label class="form-label text-primary">Formulaire incorrecte</label></div>
                <div class="mt-3 mb-3"><button class="btn btn-primary link-light border-0" type="submit" style="width: 100%;">Valider</button></div>
            </form>
        </div>
    </div>
</body>

</template>

<script>
import callInput from '../components/input.vue'
export default {
    components: {
        callInput
    }
}
</script>
