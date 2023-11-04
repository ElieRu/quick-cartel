<template>
    <headerComp aboutBor='border-bottom: 2px solid var(--bs-primary);font-size: 13px;'></headerComp>
    <div class="container" style="padding-top: 15px; height: 500px;">
        sell and buy
    </div>
    <noticeComp></noticeComp >
    <menuComp></menuComp>
</template>

<script>

import headerComp from "../comp/header.vue";
import menuComp from "../comp/menu.vue";
import noticeComp from "../comp/notices.vue";

export default {
    components: {
        headerComp,
        menuComp,
        noticeComp,
    }
}

</script>