<template>
    <div id="div-chargement" class="d-flex flex-column justify-content-center align-items-center"
        style="width: 100%;height: 100%;">
        <span class="spinner-border spinner-border-sm" role="status"></span>
        <a role="button" :[href]="value" :[data]="next">Next manual<span class="d-none carousel-control-next-icon"
                aria-hidden="true"></span><span class="visually-hidden">Text</span></a>
    </div>
</template>

<script>

export default {
    // props: ['href', 'value', 'data', 'next'],
    data () {
        return {
            href: '', 
            value: '',
            data: '', 
            next: ''
        }
    },

    mounted () {
        this.call()
    },

    methods: {
        call () {
            this.href = 'href', 
            this.value = '#carousel-2',
            this.data = 'data-bs-slide', 
            this.next = 'next'
        }
    }
}

</script>