<template>
    <div v-for="item, i in parseInt(fields)">
        <div :class="class_name[i]" style="overflow: hidden;">
            <i v-if="my_left_icon[i]" :class="my_left_icon[i]" style="margin-left: 10px;margin-right: 5px;"></i>
            <input @click="clicked(i)" :class="input" v-model="values[i]" :type="my_type[i]"
                :placeholder="this.my_placeholder[i]" :name="my_name[i]" autocomplete="current-password">
            <i v-if="password_icon[i]" :class="password_icon[i]" @click="display_password(i)"
                style="margin-right: 10px;cursor: pointer;"></i>
        </div>
    </div>
    {{ display }}
</template>

<script>

export default {
    props: {
        fields: {
            default: 1
        },
        placeholder: String,
        leftIcons: String,
        type: String,
        name: String
    },

    data() {
        return {
            input: [],
            class_name: [], // -end
            my_left_icon: [],
            my_type: [],
            my_name: [],
            values: [],
            password_icon: [],
            tmp: 0,
            tmp_style: `border rounded border-1 d-flex flex-row align-items-center mb-4`,
            tmp_style_clicked: `border rounded border-1 d-flex flex-row align-items-center mb-4 border-primary`,
            my_placeholder: [],

            init: [],
            tempo: [],
            atts: [],

            msg: []
        }
    },

    mounted() {
        try {
            for (let i = 0; i < this.fields; i++) {
                this.values.push('')
                this.my_placeholder.push('Initial text')
                this.class_name.push(`border rounded border-1 d-flex flex-row align-items-center mb-4`)
                this.input.push(`bg-transparent border rounded-2-end border-0 shadow-none form-control`)
                console.log(this.type)
            }

            let init = []

            init.push(this.placeholder)
            init.push(this.leftIcons)
            init.push(this.type)
            init.push(this.name)
            
            for (let i = 0; i < init.length; i++) {
                this.tempo[i] = init[i].replace(/'/g, "\"")
                this.atts[i] = JSON.parse(this.tempo[i])
            }
            
            this.my_placeholder = this.atts[0]
            this.my_left_icon = this.atts[1]
            this.my_type = this.atts[2]
            this.my_name = this.atts[3]

            for (let i = 0; i < this.my_type.length; i++) {
                if (this.my_type[i] == 'password') {
                    this.password_icon.push('fas fa-eye')
                } else {
                    this.password_icon.push('')
                }
            }

            // console.log(this.my_type)
            // for (let i = 0; i < this.my_left_icon.length; i++) {
            //     if (this.my_left_icon[i]) {
            //         // this.input[i] = 
            //     } else {
            //         this.password_icon.push('')
            //     }
            // }


        } catch (error) {}
    },

    computed: {
        display() {
            if (this.values[this.tmp] != '') {
                this.class_name[this.tmp] = this.tmp_style
            }
        },
    },

    methods: {
        clicked(i) {
            this.tmp = i
            this.class_name[i] = this.tmp_style_clicked
        },

        display_password(i) {
            this.my_type[i] = this.my_type[i] == 'password' ? 'text' : 'password'
            this.password_icon[i] = this.password_icon[i] == 'fas fa-eye' ? 'fas fa-eye-slash' : 'fas fa-eye'
        },
    }

}
</script>
