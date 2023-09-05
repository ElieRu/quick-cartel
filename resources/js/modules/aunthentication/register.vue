<template>

<body class="d-flex flex-column justify-content-center" id="body-cont-auth">
    <div class="text-center" id="div-cont-form">
        <div id="div-img-logo" class="mt-4 mb-4"><i class="fas fa-code" style="font-size: 50px;"></i></div>
        <div class="text-start"><label class="form-label fs-4 text-start">Créer un compte</label>
            <form method="post">
                <callInput fields="4" leftIcons="['fas fa-chart-pie', 'fas fa-user', 'fas fa-lock', 'fas fa-lock']" placeholder="['Nom du compte', 'Adresse mail', 'Mot de passe', 'Confirmation']" type="['text', 'email', 'password', 'password']" name="['name', 'email', 'password', 'confirmation_password']"></callInput>
                <div style="margin-top: -20px;"><label class="form-label text-primary">Formulaire incorrecte</label></div>
                <div class="mt-3 mb-3"><button class="btn btn-primary link-light border-0" type="submit" style="width: 100%;">Connexion</button></div>
            </form>
        </div>
        <div class="mb-3">
            <p>Avez-vous un compte?&nbsp;<RouterLink :to="{name: 'login'}" >Connectez-vous</RouterLink></p>
        </div>
    </div>
</body>

</template>

<script>
import callInput from './components/input.vue'

export default {
    components: {
        callInput
    }
}
</script>
