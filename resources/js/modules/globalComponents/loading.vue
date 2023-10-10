<template>
    <div id="loading" :style="mystyle">
        <div style="width: 100%; height: 100%;" class="d-flex flex-column justify-content-center align-items-center">
            <span class="spinner-grow spinner-border-sm text-white" role="status"></span>
        </div>
        <div style="display: none;">{{ userExisted }}</div>
    </div>
</template>

<script>

export default {
    props: {
        datas: {
            default: null
        },
        mystyle: {
            // default: 'display: none;'
        }
    },

    data() {
        return {
            decision: null,
        }
    },
    
    mounted() {},

    computed: {
        async userExisted() {
            // console.log(this.mystyle)
            if (this.datas.username && this.datas.email) {
                await axios.post(`/api/account`, this.datas)
                .then((resp) => {
                    if (!resp.data) {
                        setTimeout(() => {
                            console.log(this.mystyle)
                            console.log('formulaire invalide ou Compte existant')
                        }, 2000)
                    }
                })
            }
        }
    },

    methods: { }
}

</script>