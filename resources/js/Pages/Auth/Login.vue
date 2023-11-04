
<template>
  <div id="body-cont-auth" class="d-flex flex-column justify-content-center" style="background-color: white;">
    <div id="div-cont-veri" class="text-start" style="justify-content: space-between;">
      <div id="div-img-logo" class="text-center mt-4 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor"
          style="font-size: 50px;">
          <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
          <path
            d="M414.8 40.79L286.8 488.8C281.9 505.8 264.2 515.6 247.2 510.8C230.2 505.9 220.4 488.2 225.2 471.2L353.2 23.21C358.1 6.216 375.8-3.624 392.8 1.232C409.8 6.087 419.6 23.8 414.8 40.79H414.8zM518.6 121.4L630.6 233.4C643.1 245.9 643.1 266.1 630.6 278.6L518.6 390.6C506.1 403.1 485.9 403.1 473.4 390.6C460.9 378.1 460.9 357.9 473.4 345.4L562.7 256L473.4 166.6C460.9 154.1 460.9 133.9 473.4 121.4C485.9 108.9 506.1 108.9 518.6 121.4V121.4zM166.6 166.6L77.25 256L166.6 345.4C179.1 357.9 179.1 378.1 166.6 390.6C154.1 403.1 133.9 403.1 121.4 390.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4L121.4 121.4C133.9 108.9 154.1 108.9 166.6 121.4C179.1 133.9 179.1 154.1 166.6 166.6V166.6z">
          </path>
        </svg>
      </div>
      <form method="post" @submit.prevent="login.post('/login')">
        <label class="form-label fs-4 text-start">Connectez-vous</label>
        <div>
          <div class="mb-3">
            <div class="border rounded border-1 d-flex flex-row align-items-center">
              <i class="fas fa-user" style="margin-left: 10px;margin-right: 5px;"></i>
              <input class="bg-transparent border rounded-0 border-0 shadow-none form-control" type="email"
                placeholder="Adresse mail" v-model="login.email" name="email" />
            </div>
            <span style="color: rgb(232, 62, 140); font-size: 12px;"> {{ login.errors.password }} </span>

          </div>


          <div class="border rounded border-1 d-flex flex-row align-items-center mb-1">
            <i class="fas fa-lock" style="margin-left: 10px;margin-right: 5px;"></i>
            <input class="bg-transparent border-0 shadow-none form-control" type="password" placeholder="Mot de passe"
              v-model="login.password" name="password" />
            <i class="fas lock-fa" style="margin-right: 10px;cursor: pointer;"></i>
          </div>
        </div>
        <div class="d-flex justify-content-between">
          <span>
            <span style="color: rgb(232, 62, 140); font-size: 12px;"> {{ login.errors.password }} </span>
          </span>
          <div>
            <div class="form-check">
              <input id="remember" class="form-check-input" type="checkbox" v-model="login.remember"
                name="remember" /><label class="form-check-label" for="remember" style="cursor: pointer;">Rappel
                moi</label>
            </div>
          </div>
        </div>
        <div class="mt-3 mb-3">
          <button class="btn btn-primary link-light border-0 shadow" type="submit" style="width: 100%;">Connexion</button>
        </div>
      </form>
      <div class="d-flex justify-content-between mb-3">
        <Link href="/forgot-password" style="text-decoration: none; color: rgb(232, 62, 140);">Mot de passe oublié?</Link>
        <Link href="/register" style="text-decoration: none; color: rgb(232, 62, 140);">Nouveau compte </Link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/vue3';

const login = useForm({
  email: null,
  password: null,
  remember: false
})

</script>

<style></style>


