<template>
    <div id="delete-account" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div class="bg-body-secondary border rounded border-0"
                        style="padding: 5px;padding-right: 10px;padding-left: 10px;"><svg class="fs-6"
                            xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                            fill="currentColor">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M417.1 368c-5.937 10.27-16.69 16-27.75 16c-5.422 0-10.92-1.375-15.97-4.281L256 311.4V448c0 17.67-14.33 32-31.1 32S192 465.7 192 448V311.4l-118.3 68.29C68.67 382.6 63.17 384 57.75 384c-11.06 0-21.81-5.734-27.75-16c-8.828-15.31-3.594-34.88 11.72-43.72L159.1 256L41.72 187.7C26.41 178.9 21.17 159.3 29.1 144C36.63 132.5 49.26 126.7 61.65 128.2C65.78 128.7 69.88 130.1 73.72 132.3L192 200.6V64c0-17.67 14.33-32 32-32S256 46.33 256 64v136.6l118.3-68.29c3.838-2.213 7.939-3.539 12.07-4.051C398.7 126.7 411.4 132.5 417.1 144c8.828 15.31 3.594 34.88-11.72 43.72L288 256l118.3 68.28C421.6 333.1 426.8 352.7 417.1 368z">
                            </path>
                        </svg><span style="margin-left: 10px;">Modification du mot de passe</span></div><button
                        class="btn-close shadow-none" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <form method="post">
                            <div><label class="form-label" for="ancien">Ancien</label>
                                <div class="border rounded mb-3" style="overflow: hidden;"><input id="ancien"
                                        class="border-0 shadow-none form-control form-control-sm" type="password"
                                        name="ancien" placeholder="Ancien" /></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="new">Nouveau</label>
                                <div class="border rounded" style="overflow: hidden;"><input id="new"
                                        class="border-0 shadow-none form-control form-control-sm" type="password" name="new"
                                        placeholder="Nouveau" /></div>
                            </div>
                            <div><label class="form-label" for="confirmation">Confirmation</label>
                                <div class="border rounded" style="overflow: hidden;"><input id="confirmation"
                                        class="border-0 shadow-none form-control form-control-sm" type="password"
                                        name="confirmation" placeholder="Confirmation" /></div>
                        </div>
                        <div><span class="text-primary" style="font-size: 12px;">Text</span>
                            <div style="margin-top: 10px;"><button class="btn btn-primary btn-sm link-light border-0"
                                    type="submit">Modifier le mot de passe</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></template>