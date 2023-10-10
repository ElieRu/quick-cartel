<template>
    <div id="div-decision" class="d-flex" style="width: 100%;height: 100%;">
        <div style="width: 50%;"></div>
        <div class="d-flex flex-column justify-content-center" style="width: 50%;text-align: center;height: 100%;">
            <div class="text-center" style="width: 90%;margin: auto;">
                <div class="d-flex justify-content-center mb-4"><svg class="text-body-emphasis"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                        fill="currentColor" style="font-size: 50px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z">
                        </path>
                    </svg></div>
                <h5 class="fw-bold mb-4">Bienvenue <span class="text-capitalize">ruhamya </span><span
                        class="text-capitalize">elie</span></h5>
                <div>
                    <p class="d-flex justify-content-center">......</p>
                </div>
                <div class="mt-4"><button class="btn btn-primary link-light bg-success border rounded-pill border-0 shadow"
                        type="button" style="padding-left: 25px;padding-right: 25px;">Consulter mon compte</button></div>
            </div>
        </div>
    </div>
</template>
    
<script>

export default {
    data() {
        return {
            validation: false,
            decision: true
        }
    },

    methods: {
        callDecision() {
            this.decision = false
        }
    }
}

</script>
