<template>
    <div>
                    <div class="bg-body border rounded border-0 shadow"
                        style="width: 100%;height: 250px;overflow: hidden;margin-bottom: 20px;">
                        <div class="bg-body-secondary" style="height: 75%;">
                            <div class="float-end" style="margin: 15px;"><label class="form-label border rounded border-2"
                                    style="padding: 5px;padding-right: 10px;padding-top: 10px; padding-bottom: 10px; padding-left: 10px;margin: 0px;cursor: pointer; "
                                    for="cover-img"><i class="fas fa-camera"></i></label><input id="cover-img" type="file"
                                    accept="image/*" name="cover-img" style="display: none;" /></div>
                        </div>
                        <div class="d-flex justify-content-between" style="height: 25%;">
                            <div class="d-flex" style="/*width: 80%;*/padding-left: 20px;">
                                <div
                                    style="width: 100px;height: 100px;margin-top: -50px;border-radius: 100%;padding: 2px;overflow: hidden;border: 1.5px dashed var(--bs-gray-500);">
                                    <div
                                        style="width: 100%;height: 100%;background: var(--bs-gray-600);border-radius: 100%;">
                                        <img style="width: 100%;height: 100%;border-radius: 100%;" :src="'/storage/' + boutique.img" />
                                    </div>
                                </div>

                                <button
                                    @click="putLogoBoutique"
                                    class="form-label border-0 bg-body shadow-sm d-flex flex-column justify-content-center align-items-center"
                                    style="cursor: pointer;height: 25px;width: 25px;border-radius: 100%;margin-top: 13px;margin-left: 75px;position: absolute;"
                                    for="profile-logo-boutique"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor"
                                        style="font-size: 11px;">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M194.6 32H317.4C338.1 32 356.4 45.22 362.9 64.82L373.3 96H448C483.3 96 512 124.7 512 160V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V160C0 124.7 28.65 96 64 96H138.7L149.1 64.82C155.6 45.22 173.9 32 194.6 32H194.6zM256 384C309 384 352 341 352 288C352 234.1 309 192 256 192C202.1 192 160 234.1 160 288C160 341 202.1 384 256 384z">
                                        </path>
                                    </svg>
                                </button>

                                <input id="profile-logo-boutique" ref="inputLogoBoutique" type="file" accept="image/*" style="display: none;" />


                                <div class="d-flex flex-column" style="margin-left: 15px;margin-top: 10px;"><span
                                        class="fw-bold">{{ boutique.nom }}</span><span style="font-size: 11px;">2.9k
                                        abonné(és)</span></div>
                            </div>
                            <div class="d-flex flex-column justify-content-end"
                                style="/*width: 50%;*/margin-right: 15px;margin-bottom: 15px;"><button
                                    class="btn btn-primary btn-sm link-light border rounded-pill border-0 d-block d-md-none"
                                    type="button" style="padding-right: 12px;padding-left: 12px;" data-bs-target="#abonnes"
                                    data-bs-toggle="offcanvas">Abonnés</button></div>
                        </div>
                    </div>
                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;margin-bottom: 15px;">
                        <form method="post" @submit.prevent="update.put('/boutique', {
                            onSuccess: () => { this.success = true }
                        })">
                            <div class="row d-block d-md-flex">
                                <div class="col">
                                    <div>
                                        <div class="mb-2">
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="nom" v-model="update.nom"
                                                    class="border-0 shadow-none form-control form-control-sm" type="text"
                                                    placeholder="Nom de l&#39;entreprise" name="nom" /></div><span
                                                v-if="update.errors.nom" class="text-primary" style="font-size: 12px;">{{
                                                    update.errors.nom }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div>
                                        <div class="mb-2">
                                            <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                                style="overflow: hidden;"><input id="phone" v-model="update.phone"
                                                    class="border-0 shadow-none form-control form-control-sm" type="tel"
                                                    name="birthday" placeholder="Numéro de téléphone" max="13"
                                                    style="outline: none;" /></div><span class="text-primary"
                                                style="font-size: 12px;" v-if="update.errors.phone">{{ update.errors.phone
                                                }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-2">
                                        <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                            style="overflow: hidden;"><input id="postnom" v-model="update.email"
                                                class="border-0 shadow-none form-control form-control-sm" type="email"
                                                placeholder="Adresse mail" name="email" style="outline: none;" /></div>
                                        <span class="text-primary" style="font-size: 12px;" v-if="update.errors.email">{{
                                            update.errors.email }}</span>
                                    </div>
                                </div>

                                <div class="col-12" style="margin-bottom: 12px;">
                                    <div class="border rounded border-dark-subtle">
                                        <textarea v-model="update.description"
                                            class="border-0 shadow-none form-control form-control-lg" name="description"
                                            placeholder="Decrivez votre entreprise"
                                            style="outline: none;font-size: 13px;resize: none;"></textarea>
                                    </div><span class="text-primary" style="font-size: 12px;"
                                        v-if="update.errors.description">{{ update.errors.description }}</span>
                                </div>
                            </div>
                            <div>
                                <div v-if="success">Modifié avec succès</div>
                                <button class="btn btn-primary btn-sm link-light" type="submit">Personnalisez</button>
                            </div>
                        </form>
                    </div>
                </div>
</template>