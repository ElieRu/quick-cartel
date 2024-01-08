<template>
    <Header :my_boutique_id="my_boutique_id"></Header>
    <div class="container" style="padding-top: 30px;">

        <Background></Background>

        <ArticlesHome :articles="articles"></ArticlesHome>

        <ArticlesPromotions :promotions="promotions"></ArticlesPromotions>

    </div>
</template>
  
<script>
import Header from '../../Components/Header/Header.vue';

import Background from './Account/Background.vue';
import ArticlesHome from './Account/ArticlesHome.vue';
import ArticlesPromotions from './Account/ArticlesPromotions.vue';

export default {
    components: {
        Header,
        Background,
        ArticlesHome,
        ArticlesPromotions
    },
    props: {
        my_boutique_id: '',
        articles: Object,
        promotions: Object,
    },
    mounted() {
        console.log(this.articles);
    },
}

</script>