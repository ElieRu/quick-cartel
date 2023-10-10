<template>
    <div v-for="item, i in parseInt(fields)">
        <div :class="boxClass[i]" style="overflow: hidden;">
            <i v-if="leftIcons[i]" :class="leftIcons[i]" style="margin-left: 10px;margin-right: 5px;"></i>
            <input @click="clicked(i)" :class="input" :type="type[i]" v-model="value[i]"
                :placeholder="this.placeholder[i]" :name="name[i]" >
            <i v-if="password_icon[i]" :class="password_icon[i]" @click="display_password(i)"
                style="margin-right: 10px;cursor: pointer;"></i>
        </div>
    </div>
    {{ display }}
</template>

<script>

export default {
    props: {
        fields: {default: 1},
        placeholder: {type: Array},
        leftIcons: {type: Array},
        type: {type: Array},
        name: {type: Array},
        value: {type: Array, default: []}
    },

    data() {
        return {
            input: [],
            boxClass: [],

            password_icon: [],
            tmp: 0,
            tmp_style: `border rounded border-1 d-flex flex-row align-items-center mb-4`,
            tmp_style_clicked: `border rounded border-1 d-flex flex-row align-items-center mb-2 border-primary`,
        }
    },

    mounted() {

        try {
            for (let i = 0; i < this.fields; i++) {
                this.placeholder.push('Initial text')
                this.boxClass.push(`border rounded border-1 d-flex flex-row align-items-center mb-4`)
                this.input.push(`bg-transparent border rounded-2-end border-0 shadow-none form-control`)
            }

            this.boxClass[this.boxClass.length -1] = `border rounded border-1 d-flex flex-row align-items-center mb-1`

            for (let i = 0; i < this.type.length; i++) {
                if (this.type[i] == 'password') {
                    this.password_icon.push('fas fa-eye')
                } else {
                    this.password_icon.push('')
                }
            }

        } catch (error) {}

    },

    computed: {
        display() {
            if (this.value[this.tmp] != '') {
                this.boxClass[this.tmp] = this.tmp_style
                this.boxClass[this.boxClass.length -1] = `border rounded border-1 d-flex flex-row align-items-center mb-1`
            }
        },
    },

    methods: {
        clicked(i) {
            this.tmp = i
            this.boxClass[i] += ' border-primary'
        },

        display_password(i) {
            this.type[i] = this.type[i] == 'password' ? 'text' : 'password'
            this.password_icon[i] = this.password_icon[i] == 'fas fa-eye' ? 'fas fa-eye-slash' : 'fas fa-eye'
        },
    }

}
</script>
