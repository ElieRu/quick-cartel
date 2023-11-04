<template>
    <Header></Header>
    <div class="container" style="margin-top: 20px;">



        <div id="div-empty-articles" class="text-center" v-if="false">
            <div class="d-flex justify-content-center" style="margin-bottom: 30px;"><img
                    src="images/3d-casual-life-e-commerce-completed-order.png" style="width: 250px;height: 130px;" /></div>
            <span>Votre liste d&#39;articles est vide. <span class="text-primary" style="cursor: pointer;"
                    data-bs-target="#formulaire-d-article" data-bs-toggle="modal">Ajoutez des artiles.</span></span>
        </div>


        <div>
            <div class="row d-flex flex-column-reverse flex-md-row">
                <div class="col-12 col-md-8">
                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;">
                        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 15px;">
                            <div class="d-flex flex-column"><span class="fs-6 fw-bold">Liste des articles</span><span
                                    style="font-size: 13px;">Personnalisez</span></div>
                            <div class="bg-body-secondary border rounded-pill border-0"><input
                                    class="bg-transparent border-0" type="search"
                                    style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;"
                                    placeholder="Recherche" data-bs-theme="light" /></div>
                        </div>
                        <div class="table-responsive" style="overflow: inherit;">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th id="cell_id">#</th>
                                        <th id="cell_name">Nom de l&#39;article</th>
                                        <th id="cell_cat" class="d-none d-sm-table-cell">Categorie</th>
                                        <th id="cell_spec" class="d-none d-md-table-cell">Spécification</th>
                                        <th id="cell_price" class="d-none d-lg-table-cell">Prix</th>
                                        <th id="cell_actions" class="d-flex justify-content-end justify-content-md-center">
                                            <span><strong>Actions</strong></span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 13px;">1</td>
                                        <td>
                                            <button class="btn btn-primary text-start link-body-emphasis bg-body border-0"
                                                type="button" style="width: 100%; padding: 0px; font-size: 13px;">
                                                Button
                                            </button>
                                        </td>
                                        <td class="d-none d-sm-table-cell" style="font-size: 13px;">Cell 2</td>
                                        <td class="d-none d-md-table-cell" style="font-size: 13px;">Cell 2</td>
                                        <td class="text-capitalize d-none d-lg-table-cell" style="font-size: 13px;">Cell 2
                                        </td>
                                        <td class="d-flex justify-content-end justify-content-md-center">
                                            <div>
                                                <div class="dropdown"><button
                                                        class="btn btn-primary btn-sm link-body-emphasis bg-body-secondary border-0"
                                                        aria-expanded="false" data-bs-toggle="dropdown" type="button"><svg
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512"
                                                            width="1em" height="1em" fill="currentColor">
                                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                            <path
                                                                d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z">
                                                            </path>
                                                        </svg></button>
                                                    <div class="dropdown-menu border-0 shadow"
                                                        style="border-radius: 10px;padding: 5px;font-size: 13px;"><a
                                                            id="item-dropdown" class="dropdown-item" href="#"><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                                width="1em" height="1em" fill="currentColor"
                                                                style="margin-right: 10px;">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path
                                                                    d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z">
                                                                </path>
                                                            </svg>Modifier</a><a id="item-dropdown" class="dropdown-item"
                                                            href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="-32 0 512 512" width="1em" height="1em"
                                                                fill="currentColor" style="margin-right: 10px;">
                                                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                                <path
                                                                    d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z">
                                                                </path>
                                                            </svg>Supprimer</a></div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-end">
                            <nav>
                                <ul class="list-inline d-flex">
                                    <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                                        style="width: 30px;height: 30px;"><a
                                            class="text-center link-primary d-flex flex-column justify-content-center"
                                            href="#" style="text-decoration: none;width: 100%;height: 100%;" disable><span
                                                style="color: rgb(108, 117, 125);">«</span></a></li>
                                    <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                                        style="width: 30px;height: 30px;"><a
                                            class="text-center link-primary d-flex flex-column justify-content-center"
                                            href="#" style="text-decoration: none;width: 100%;height: 100%;"><span
                                                style="color: rgb(108, 117, 125);">1</span></a></li>
                                    <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                                        style="width: 30px;height: 30px;"><a
                                            class="text-center link-primary d-flex flex-column justify-content-center"
                                            href="#" style="text-decoration: none;width: 100%;height: 100%;"><span
                                                style="color: rgb(108, 117, 125);">2</span></a></li>
                                    <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                                        style="width: 30px;height: 30px;"><a
                                            class="text-center link-primary d-flex flex-column justify-content-center"
                                            href="#" style="text-decoration: none;width: 100%;height: 100%;"><span
                                                style="color: rgb(108, 117, 125);">3</span></a></li>
                                    <li class="list-inline-item border rounded-circle border-0 shadow-sm d-flex"
                                        style="width: 30px;height: 30px;"><a
                                            class="text-center link-primary d-flex flex-column justify-content-center"
                                            href="#" style="text-decoration: none;width: 100%;height: 100%;"><span
                                                style="color: rgb(108, 117, 125);">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div id="col-form" class="col-12 col-md-4">
                    <div class="bg-body border rounded border-0 shadow" style="padding: 10px;position: sticky;top: 144px;">
                        <form method="post" @submit.prevent="form.post('/boutique/articles')">
                            <div class="mb-2">
                                <label class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                    for="nom">Nom de
                                    l&#39;article</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;"><input id="nom"
                                        class="bg-transparent border-0 form-control-sm" type="text"
                                        style="width: 100%;outline: none;" name="nom" placeholder="Nom de l&#39;article" />
                                </div>
                                <span class="text-primary" style="font-size: 13px;">{{ form.errors.nom }}</span>
                            </div>
                            <div class="mb-2">
                                <label class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                    for="categorie">Catégorie</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;"><select class="bg-transparent border-0 shadow-none"
                                        style="height: 31px;width: 100%;overflow: hidden;outline: none;"
                                        name="categorie"></select></div>
                                <span class="text-primary" style="font-size: 13px;">{{ form.errors.categorie }}</span>
                            </div>
                            <div class="mb-2">
                                <label class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                    for="specification">Spécification</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;"><select class="bg-transparent border-0 shadow-none"
                                        style="height: 31px;width: 100%;overflow: hidden;outline: none;"
                                        name="specification"></select></div><span class="text-primary"
                                    style="font-size: 13px;">{{ form.errors.specification }}</span>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" style="font-size: 12px;margin-bottom: 2px;margin-left: 5px;"
                                    for="prix">Prix</label>
                                <div class="border rounded border-1 border-secondary-subtle d-flex flex-row align-items-center"
                                    style="overflow: hidden;">
                                    <input id="price" class="bg-transparent border-0 shadow-none" type="number"
                                        style="width: 100%;outline: none;height: 31px;padding-left: 10px;" name="prix"
                                        placeholder="Prix unitaire" min="0" max="10" step="1" />
                                    <select class="bg-transparent border-0 shadow-none" style="height: 100%;outline: none;"
                                        name="devise">
                                        <optgroup label="Votre dévise">
                                            <option value="USD">USD</option>
                                            <option value="CDF">CDF</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-3"><span class="text-primary"
                                        style="font-size: 13px;">{{ form.errors.prix }}</span><span class="text-primary"
                                        style="font-size: 13px;">{{ form.errors.devise }}</span></div>
                                <div>
                                    <button class="btn btn-primary btn-sm link-light border-0"
                                    type="submit">Enregistrer un article</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
    
<script setup>

import { useForm, Link } from '@inertiajs/vue3';
import { ref, onMounted, nextTick } from 'vue'

import Header from '../../Components/Header/Header.vue';

const props = defineProps(['articles', 'categories', 'specifications', 'devise_monetaires'])
const hide = ref(null)


function submit() {
    if (form.id) {
        form.put('/articles')
    } else {
        form.post('/articles')
    }
}

const form = useForm({
    id: null,
    nom: null,
    categorie: null,
    specification: null,
    prix: null,
    devise: null
})


// const formDelete = useForm({ id: null })

function mod(article) {
    form.id = article.id
    form.nom = article.nom
    form.categorie = article.categorie_id
    form.specification = article.specification_id,
        form.prix = article.prix,
        form.devise = article.devise
}

const searching = useForm({
    article: null
})

// Recuperation categorie_id dans articles
const idCatDispo = []
for (let i = 0; i < props.articles.length; i++) {
    if (!idCatDispo.includes(props.articles[i].categorie_id)) {
        idCatDispo.push(props.articles[i].categorie_id);
    }
}

// récuperation de sa désignation (nom ou valeur)
const catsDispo = []
for (let i = 0; i < props.categories.length; i++) {
    if (idCatDispo.includes(props.categories[i].id)) {
        catsDispo.push(props.categories[i].designation)
    }
}

const cat = []

for (let i = 0; i < props.categories.length; i++) {
    cat.push(props.categories[i].specification_id)
}

const spec = []
for (let i = 0; i < props.specifications.length; i++) {
    spec.push(props.specifications[i].categories_id)
}

// const arch = []
// for (let i = 0; i < cat.length; i++) {
//     for (let j = 0; j < spec.length; j++) {
//         if (cat[i] == spec[j]) {
//             arch[cat[i]] = spec[j]
//         }
//     }
// }

// console.log(arch);

const trieCategorie = useForm({
    cat: null
})

const trieSpecification = useForm({
    nom: null
})


</script>