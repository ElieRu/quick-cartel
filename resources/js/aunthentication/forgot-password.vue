<template>

<body class="d-flex flex-column justify-content-center" id="body-cont-auth">
    <div class="text-center" id="div-cont-veri">
        <div class="text-center">
            <div id="div-para-reset"><label class="form-label fs-4">Réitialisation</label>
                <p>Entrez l'adresse mail associé à votre compte pour la récupération du mot de passe.</p>
            </div>
            <form method="post">
                <div>
                    <div class="border rounded border-1 d-flex flex-row align-items-center mb-1"><i class="fas fa-user" style="margin-left: 10px;margin-right: 5px;"></i><input class="bg-transparent border rounded-0 border-0 shadow-none form-control" type="email" placeholder="Votre adresse mail" name="email"></div>
                </div>
                <div class="d-flex justify-content-between"><label class="form-label text-primary">Formulaire incorrecte</label></div>
                <div class="mt-3 mb-3"><button class="btn btn-primary link-light border-0" type="submit" style="width: 100%;">Envoie des instructions</button></div>
            </form>
        </div>
    </div>
</body>
</template>
