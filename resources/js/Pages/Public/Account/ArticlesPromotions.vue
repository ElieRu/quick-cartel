<template>
    <div class="mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <span>Promotions</span><a
                class="btn btn-primary btn-sm bg-transparent link-body-emphasis link-opacity-75 border-0 shadow-none"
                role="button" href="#">Plus</a>
        </div>
        <div id="div-cont-articles" style="overflow-x: auto;">
            <div class="d-inline-flex" style="padding-bottom: 7px;">
                <div v-for="promotion in promotions" class="bg-body-tertiary border rounded"
                    style="height: 100%;margin-right: 15px;padding: 5px;cursor: pointer;width: 200px;">
                    <div class="border rounded border-0 d-flex mb-2" style="overflow: hidden;height: 169px;">

                        <img v-if="promotion.image !== null" :src="'/storage/' + promotion.image" style="height:100%; width:100%;" />

                        <div v-if="promotion.image == null" class="d-flex justify-content-center align-items-center"
                            style="width: 100%;height: 100%;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-body-secondary" viewBox="0 -32 576 576"
                                width="1em" height="1em" fill="currentColor" style="font-size: 90px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M512 32H160c-35.35 0-64 28.65-64 64v224c0 35.35 28.65 64 64 64H512c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM528 320c0 8.822-7.178 16-16 16h-16l-109.3-160.9C383.7 170.7 378.7 168 373.3 168c-5.352 0-10.35 2.672-13.31 7.125l-62.74 94.11L274.9 238.6C271.9 234.4 267.1 232 262 232c-5.109 0-9.914 2.441-12.93 6.574L176 336H160c-8.822 0-16-7.178-16-16V96c0-8.822 7.178-16 16-16H512c8.822 0 16 7.178 16 16V320zM224 112c-17.67 0-32 14.33-32 32s14.33 32 32 32c17.68 0 32-14.33 32-32S241.7 112 224 112zM456 480H120C53.83 480 0 426.2 0 360v-240C0 106.8 10.75 96 24 96S48 106.8 48 120v240c0 39.7 32.3 72 72 72h336c13.25 0 24 10.75 24 24S469.3 480 456 480z">
                                </path>
                            </svg>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="height: 40px;">

                        <div style="width: 100%;">
                            <div class="d-flex justify-content-between" style="width: 100%;">
                                <span style="font-size: 13px;">{{ promotion.nomArt }}</span>
                                <div>
                                    <span class="text-primary" style="font-size: 13px;text-decoration: line-through;">{{
                                        promotion.prix + '$' }}
                                    </span>
                                    <span> ({{ promotion.montantReduction ? '-' + promotion.montantReduction + '$' :
                                        '-' + promotion.pourcentage + '%' }})</span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-body-tertiary" style="font-size: 11px;">{{ promotion.nomPromo }}</span>
                                <span class="fw-bold" style="font-size: 13px;">{{ promotion.prixPromotion + '$' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
::-webkit-scrollbar {
    background: transparent;
    height: 10px;
}
</style>

<script>

export default {
    props: {
        promotions: Object
    },
    mounted() {
        console.log(this.promotions);
    }
}

</script>