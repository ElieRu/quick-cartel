<template>
    <Header></Header>

    <div class="container" style="padding-top: 15px;">
        <div>
            <h4 class="text-body-tertiary">Liste des clients</h4>
        </div>

        <div class="bg-body border rounded border-0 shadow" style="padding: 15px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-end">
                    <div class="bg-body-secondary border rounded-pill border-0">
                        <input class="bg-transparent border-0 form-control" type="search"
                            style="height: 30px;padding-left: 12px;outline: none;font-size: 12px;" placeholder="Recherche"
                            data-bs-theme="light" />
                    </div>
                </div>
                <div class="flex">
                    <Link type="link" href="/joindre-client-existant" class="btn btn-success btn-sm link-light border-0"
                        style="margin-right: 5px;">Exist</Link>
                    <Link type="link" href="/clients" class="btn btn-success btn-sm link-light border-0"
                        style="margin-right: 5px;">Clients</Link>
                </div>
            </div>
            <div class="table-responsive" style="overflow: inherit;">
                <div class="table-responsive" style="overflow: inherit;">
                    <table class="table table-borderless">
                        <tbody>
                            <tr v-for="user in users">
                                <td>img</td>
                                <td class="text-capitalize">{{ user.name }} {{ user.postnome }}</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Joindre</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

import Header from '../../Components/Header/Header.vue';
import { Link, router, useForm } from "@inertiajs/vue3";
import { ref } from "vue";



export default {
    setup(props) {

        return {}
    },
    components: {
        Header,
        Link
    },
    props: {
        users: Object
    },
    data() {
        return {
            success: false
        }
    },
    mounted() {
        console.log(this.users);
    },
    methods: {}
}

</script>