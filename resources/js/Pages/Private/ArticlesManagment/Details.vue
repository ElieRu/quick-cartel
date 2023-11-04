<template>
    <Header></Header>
    <div class="container" style="margin-top: 20px;">
        <h3>Dscription</h3>
        $ image : ajout, modification, suppression <br>
        <form method="post" @submit.prevent="submit">
            <input type="file"  name="image" accept="image/*">
            <!-- v-model="form.img" -->
            <button type="submit">valider</button>
        </form>

    	$ affichage des informations de l'article <br>
        <h4>{{ props.article.nom }}</h4>


    	$ ajout du formulaire sur les informations de base (caractéristiques) <br>
        <form method="post" @submit.prevent="caracteristiques.post('/articles/save-details')">
            <input type="text" name="nom" v-model="caracteristiques.nom" placeholder="nom"> <br>
            <div v-if="caracteristiques.errors.nom">{{ caracteristiques.errors.nom }}</div>
            <input type="text" name="valeur" v-model="caracteristiques.valeur" placeholder="valeur"> <br>
            <div v-if="caracteristiques.errors.valeur">{{ caracteristiques.errors.valeur }}</div>
            <button type="submit">valider</button>
        </form>
        
    	$ Liste des details de l'article <br>
        <ul>
            <li v-for="car in props.caracteristiques" :key="car.id">
                <Link href="#" as="button"> {{ car.nom }} </Link> : {{ car.valeur }}
                <button @click="mod()">mod</button>
                <Link as="button" href="/articles/delete-details" :data="{ id: car.id }" method="delete" type="button">del</Link>
                <!-- @click="del(car.id) -->
            </li>
        </ul>

        $ Button pour valider une ventes

        $ Button pour faire la promotion d'une article (les besoins, chat gpt)
    	$ Quantité en stock <br>

        <a href="#">Réquisitions</a> <br>
        <a href="#">...</a> <br>
        <a href="#">Historique des ventes</a> <br>

    </div>
</template>
    
<script setup>
import { Link, useForm } from '@inertiajs/vue3';
import Header from '../../../Components/Header/Header.vue';

const props = defineProps(['article', 'caracteristiques'])

// console.log(props.caracteristiques);

const form = useForm({
    img: null
})

function submit()
{
    form.post('/articles/description')
}

const caracteristiques = useForm({
    nom: null,
    valeur: null,
    specification_id: props.article.specification_id
})

function del(id) {
    const deleteForm = useForm({
        id: id
    })
    deleteForm.delete('/articles/delete-details', { id: deleteForm });
}

</script>