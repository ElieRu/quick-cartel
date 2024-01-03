<template>
    <div class="bg-body border rounded border-0 shadow-sm" style="height: 60%;">
        <div class="align-content-center" style="padding: 10px;padding-bottom: 0px;">
            <div class="bg-body-secondary border rounded border-0 d-flex"><input id="input_research"
                    class="bg-transparent border-0" type="text" placeholder="Recherche" style="outline: none;"
                    data-bs-theme="dark" /><i class="fas fa-search" style="margin: 7px;"></i></div>
        </div>
        <div id="div-list-compte">
            <div>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li v-for="boutique in boutiques" class="nav-item">
                        <Link 
                            class="nav-link link-body-emphasis" 
                            
                            href="/account"
                            method="get"
                            as="button"
                            :data="{ id: boutique.id }"

                            style="padding-right: 3px;padding-left: 8px;">
                            <img :src="'/storage/' + boutique.img" width="30px"
                                height="30px" style="border-radius: 100%;" /> {{ boutique.nom }}
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'
export default {
    components: {
        Link
    },
    props: {
        boutiques: Object
    }
}
</script>