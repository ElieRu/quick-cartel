<template>
  <div>
    <h2>Categories managment</h2>
    <form action="/" method="post">
        <input type="hidden" name="id" v-model="categorie.id">
        <input type="text" name="name" id="name" v-model="categorie.name" placeholder="Your name bro"> <br>
        <button type="submit" @click.prevent="mixtCall(categorie)">{{ label }}</button>
    </form>
    <p>{{ msg.message }}</p>
    <p>{{ tmpCharge }}</p>
    <ul v-for="(category,key) in categories" :key="key">
        <li>{{ category.id }} {{ category.name }} <button @click="deleteCategory(category.id)">Delete</button> <button @click="manageLabel(category)">Edit</button> </li>
    </ul>
  </div>
</template>

<script>
export default {
    name:"categories",
    data(){
        return {
            categories: [],
            msg: String,
            categorie: {
                id: '',
                name: ''
            },
            label: 'Save',
            tmpCharge: String
        }
    },
    mounted(){
        this.getCategories()
    },
    methods: {
        async getCategories() {
            this.myChargement (true) 
            await axios.get(`/api/category`).then(
                response => {
                    this.tmpCharge = ""
                    this.categories = response.data
                }).catch(error => {
                    console.log(error)
                }
            )
        },
        async deleteCategory(id) {
            // if (confirm("Voulez-vous supprimer ce catégorie ?")) {
                this.tmpDelete = "En cour de suppression ..."
                await axios.delete(`/api/category/${id}`)
                .then(response => {
                    this.getCategories()
                    this.tmpDelete = ""
                    this.msg = response.data
                }).catch(error => {
                    this.msg = "Categorie not deleted"
                })
            // }
        },
        async saveCategorie () {
            await axios.post(`/api/category`, this.categorie)
            .then(response => {
                this.getCategories()
                this.categorie.name = ''
                this.msg = response.data
            }).catch(error => {
                this.msg = 'Not saved'
            })
        },
        async editCategory(categorie) {
            await axios.put(`/api/category/${categorie.id}`, categorie)
            .then(response => {
                this.getCategories()
                this.categorie = ''
                this.msg = response.data
            }).catch(errors => {
                console.log(error)
            })
        },
        manageLabel(category) {
            this.categorie.id = category.id
            this.categorie.name = category.name
            this.label = 'Edit'
        },
        mixtCall (categorie) {
            return this.label == 'Save' ? this.saveCategorie () : this.editCategory(categorie)
        },
        myChargement (test) {
            if (test == true) {
                return this.tmpCharge = "En cour de chargement ..."
            }
        }
    }
}
</script>

