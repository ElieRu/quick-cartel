<template>
    <div class="d-flex justify-content-end" v-if="myDatas.data.length >= 15">
        <template class="flex" v-for="link in myDatas.links" :key="link.id">
            <Link v-if="link.url === null" v-html="link.label" :disabled="link.url == null" as="button" type="button"
                method="get" class="btn-sm btn btn-light border-1 border-dark-subtle" style="margin-right: 5px;">
            </Link>
            <Link v-else :href="link.url" v-html="link.label" as="button" type="button" method="get"
                class="btn-sm btn btn-light border-1 border-dark-subtle" :class="{ 'bg-dark-subtle': link.active }"
                style="margin-right: 5px;">
            </Link>
        </template>
    </div>
</template>

<script>

import { Link } from "@inertiajs/vue3";

export default {
    components: { Link },
    props: {
        myDatas: Object
    }
}
</script>