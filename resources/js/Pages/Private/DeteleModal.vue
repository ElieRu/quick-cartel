<template>
    <div id="delete-modal" class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title">Suppression</h4><button class="btn-close shadow-none" type="button"
                        aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body border-0">
                    <p>Voulez-vous vraiment supprimer ces articles?</p>
                    <!-- {{ listClientDelete.length > 1 ? 's' : '' }} -->
                </div>
                <div class="modal-footer border-0 d-flex justify-content-between"><button
                        class="btn btn-primary btn-sm link-body-emphasis link-opacity-50 bg-transparent border-0"
                        type="button" data-bs-target="#delete-modal" data-bs-toggle="modal">Annuler</button>
                    <button @click="deleteSelect" class="btn btn-primary btn-sm bg-transparent" type="button"
                        style="color: var(--bs-btn-border-color);">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
            deleteDatas: useForm({
                id: null
            }),
        }
    },
    methods: {
        deleteSelect() {
            this.deleteDatas.id = this.listClientDelete;

            this.deleteDatas.delete('/articles', {
                onSuccess: () => {
                    this.deleteDatas.reset()
                    this.checkboxs = false
                    this.allChecked = false
                    // this.$refs.deleteButton.click()
                }
            })
        },
    }
}

</script>