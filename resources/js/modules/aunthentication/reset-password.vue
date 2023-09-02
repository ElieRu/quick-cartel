<template>

<body class="d-flex flex-column justify-content-center" id="body-cont-auth">
    <div class="text-center" id="div-cont-veri">
        <div class="text-start">
            <div class="text-center mt-4 mb-4" id="div-img-logo"><i class="fas fa-code" style="font-size: 50px;"></i></div><label class="form-label fs-4 text-start">Nouveau mot de passe</label>
            <form method="post">
                <div>
                    <div class="border rounded border-1 d-flex flex-row align-items-center mb-4"><i class="fas fa-lock" style="margin-left: 10px;margin-right: 5px;"></i><input class="border-0 shadow-none form-control" type="password" placeholder="Nouveau" name="password"><i class="fas fa-eye" style="margin-right: 10px;cursor: pointer;"></i></div>
                    <div class="border rounded border-1 d-flex flex-row align-items-center mb-1"><i class="fas fa-lock" style="margin-left: 10px;margin-right: 5px;"></i><input class="bg-transparent border-0 shadow-none form-control" type="password" placeholder="Confirmation" name="password_confirmation"></div>
                </div>
                <div><label class="form-label text-primary">Formulaire incorrecte</label></div>
                <div class="mt-3 mb-3"><button class="btn btn-primary link-light border-0" type="submit" style="width: 100%;">Valider</button></div>
            </form>
        </div>
    </div>
</body>

</template>
