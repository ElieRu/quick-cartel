<template>
    <div class="bg-body border rounded border-0 shadow mb-4" style="padding: 10px;">
        <div class="d-flex justify-content-center mb-2" style="height: 310px;">
            <img v-if="images[0].image !== null" class="rounded" :src="src" style="width: 90%;height: 100%;" />

            <div v-if="images[0].image == null" class="d-flex justify-content-center align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em" height="1em" fill="currentColor"
                    style="font-size: 110px;">
                    <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M512 32H160c-35.35 0-64 28.65-64 64v224c0 35.35 28.65 64 64 64H512c35.35 0 64-28.65 64-64V96C576 60.65 547.3 32 512 32zM528 320c0 8.822-7.178 16-16 16h-16l-109.3-160.9C383.7 170.7 378.7 168 373.3 168c-5.352 0-10.35 2.672-13.31 7.125l-62.74 94.11L274.9 238.6C271.9 234.4 267.1 232 262 232c-5.109 0-9.914 2.441-12.93 6.574L176 336H160c-8.822 0-16-7.178-16-16V96c0-8.822 7.178-16 16-16H512c8.822 0 16 7.178 16 16V320zM224 112c-17.67 0-32 14.33-32 32s14.33 32 32 32c17.68 0 32-14.33 32-32S241.7 112 224 112zM456 480H120C53.83 480 0 426.2 0 360v-240C0 106.8 10.75 96 24 96S48 106.8 48 120v240c0 39.7 32.3 72 72 72h336c13.25 0 24 10.75 24 24S469.3 480 456 480z">
                    </path>
                </svg>
            </div>

        </div>



        <div v-if="images[0].image !== null" class="d-flex justify-content-center">
            <div v-for="image in images" style="margin-right: 5px; margin-left: 5px;">
                <button @click="showImg(image.image)" style="height: 30px; width: 30px;"
                    class="btn btn-primary btn-sm bg-body-secondary border-0 shadow-none" type="button"><svg
                        class="text-dark-emphasis" xmlns="http://www.w3.org/2000/svg" viewBox="0 -32 576 576" width="1em"
                        height="1em" fill="currentColor">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M528 32H144c-26.51 0-48 21.49-48 48v256c0 26.51 21.49 48 48 48H528c26.51 0 48-21.49 48-48v-256C576 53.49 554.5 32 528 32zM223.1 96c17.68 0 32 14.33 32 32S241.7 160 223.1 160c-17.67 0-32-14.33-32-32S206.3 96 223.1 96zM494.1 311.6C491.3 316.8 485.9 320 480 320H192c-6.023 0-11.53-3.379-14.26-8.75c-2.73-5.367-2.215-11.81 1.332-16.68l70-96C252.1 194.4 256.9 192 262 192c5.111 0 9.916 2.441 12.93 6.574l22.35 30.66l62.74-94.11C362.1 130.7 367.1 128 373.3 128c5.348 0 10.34 2.672 13.31 7.125l106.7 160C496.6 300 496.9 306.3 494.1 311.6zM456 432H120c-39.7 0-72-32.3-72-72v-240C48 106.8 37.25 96 24 96S0 106.8 0 120v240C0 426.2 53.83 480 120 480h336c13.25 0 24-10.75 24-24S469.3 432 456 432z">
                        </path>
                    </svg>
                </button>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    props: {
        images: Object
    },
    data() {
        return {
            src: '/storage/' + this.images[0].image
        }
    },
    mounted() {
        console.log(this.src);
    },
    methods: {
        showImg(src) {
            this.src = '/storage/' + src;
        }
    },
}
</script>