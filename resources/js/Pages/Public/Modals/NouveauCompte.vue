<template>
    <div id="modal-nouveau-compte" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title text-body-secondary">Créer un compte</h4><button class="btn-close" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <form method="post">
                        <div class="border rounded mb-3" style="overflow: hidden;"><input
                                class="bg-transparent border-0 shadow-none form-control form-control-sm" type="text"
                                placeholder="Nom" /></div>
                        <div class="border rounded mb-3" style="overflow: hidden;"><input
                                class="bg-transparent border-0 shadow-none form-control form-control-sm" type="email"
                                placeholder="Adresse mail" /></div>
                        <div class="border rounded mb-3" style="overflow: hidden;"><input
                                class="bg-transparent border-0 shadow-none form-control form-control-sm" type="password"
                                placeholder="Mot de passe" /></div>
                        <div class="border rounded mb-3" style="overflow: hidden;"><input
                                class="bg-transparent border-0 shadow-none form-control form-control-sm" type="password"
                            placeholder="Confirmation" /></div>
                    <div class="d-flex justify-content-end mb-3" style="overflow: hidden;"><button
                            class="btn btn-primary btn-sm link-light border-0 shadow-none"
                            type="submit">Soummetre</button></div>
                </form>
            </div>
        </div>
    </div>
</div></template>