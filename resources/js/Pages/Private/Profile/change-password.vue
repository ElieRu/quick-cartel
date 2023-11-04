<template>
    <div id="new-password" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="bg-body-secondary border rounded border-0"
                        style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg class="fs-6"
                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                            fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                            </path>
                        </svg><span style="margin-left: 10px;">Suppression du compte</span></div><button
                        class="btn-close shadow-none" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <form method="post">
                            <div><label class="form-label" for="password">Mot de passe</label>
                                <div class="border rounded mb-3" style="overflow: hidden;"><input id="password"
                                        class="border-0 shadow-none form-control form-control-sm" type="password"
                                        name="password" placeholder="Mot de passe" /></div>
                            </div>
                            <div><label class="form-label" for="password_confirmation">Confirmation</label>
                                <div class="border rounded" style="overflow: hidden;"><input id="password_confirmation"
                                        class="border-0 shadow-none form-control form-control-sm" type="password"
                                        name="password_confirmation" placeholder="Confirmation" /></div>
                            </div>
                            <div><span class="text-primary" style="font-size: 12px;">Text</span>
                            <div style="margin-top: 10px;"><button class="btn btn-primary btn-sm link-light border-0"
                                    type="submit">Supprimer ce compte</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></template>