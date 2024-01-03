<template>
    <Header></Header>
    <div class="container" style="margin-top: 30px;">
        <div>
            <h4 class="text-body-tertiary">Promotions</h4>
        </div>
        <div class="mb-3">
            <div class="row flex-column flex-sm-row">
                <div class="col mb-3">

                    <!-- Les images de l'article -->
                    <Images :images="images"></Images>

                    <!-- Les décriptions -->
                    <Descriptions :descriptions="descriptions"></Descriptions>

                </div>
                <div class="col justify-content-sm-end">
                    <div>

                        <!-- Les informations de l'article -->
                        <Informations :user="user" :informations="informations"></Informations>

                        <AProposPromotion :promotion="promotion"></AProposPromotion>

                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5>D&#39;autres promotions</h5><a
                    class="btn btn-primary btn-sm bg-transparent link-body-emphasis link-opacity-75 border-0 shadow-none"
                    role="button" href="#">Plus</a>
            </div>
            <div id="div-cont-articles" style="overflow-x: auto;">
                <div class="d-inline-flex" style="padding-bottom: 7px;">
                    <div class="bg-body-tertiary border rounded"
                        style="height: 100%;margin-right: 15px;padding: 5px;cursor: pointer;width: 200px;">
                        <div class="border rounded border-0 d-flex mb-2" style="overflow: hidden;height: 169px;"><img
                                src="phones/computer.jpeg" height="100%" width="100%" /></div>
                        <div class="d-flex justify-content-between align-items-center" style="height: 40px;">
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-center"><span style="font-size: 13px;">Vuego
                                        House</span><span class="text-body-tertiary"
                                        style="font-size: 11px;">spécification</span></div>
                            </div>
                            <div class="d-flex flex-column"><span class="text-primary"
                                    style="font-size: 13px;text-decoration: line-through;">200 $</span><span class="fw-bold"
                                    style="font-size: 13px;">150 $</span></div>
                        </div>
                    </div>
                    <div class="bg-body-tertiary border rounded"
                        style="height: 100%;margin-right: 15px;padding: 5px;width: 200px;cursor: pointer;">
                        <div class="border rounded border-0 d-flex mb-2" style="overflow: hidden;height: 169px;"><img
                                src="phones/computer.jpeg" style="height:100%; width:100%;" /></div>
                        <div class="d-flex justify-content-between align-items-center" style="height: 40px;">
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-center"><span style="font-size: 13px;">Vuego
                                        House</span><span class="text-body-tertiary"
                                        style="font-size: 11px;">spécification</span></div>
                            </div>
                            <div class="d-flex flex-column"><span class="text-primary"
                                    style="font-size: 13px;text-decoration: line-through;">200 $</span><span class="fw-bold"
                                    style="font-size: 13px;">150 $</span></div>
                        </div>
                    </div>
                    <div class="bg-body-tertiary border rounded"
                        style="height: 100%;margin-right: 15px;padding: 5px;width: 200px;cursor: pointer;">
                        <div class="border rounded border-0 d-flex mb-2" style="overflow: hidden;height: 169px;"><img
                                src="phones/computer.jpeg" height="100%" width="100%" /></div>
                        <div class="d-flex justify-content-between align-items-center" style="height: 40px;">
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-center"><span style="font-size: 13px;">Vuego
                                        House</span><span class="text-body-tertiary"
                                        style="font-size: 11px;">spécification</span></div>
                            </div>
                            <div class="d-flex flex-column"><span class="text-primary"
                                    style="font-size: 13px;text-decoration: line-through;">200 $</span><span class="fw-bold"
                                    style="font-size: 13px;">150 $</span></div>
                        </div>
                    </div>
                    <div class="bg-body-tertiary border rounded"
                        style="height: 100%;margin-right: 15px;padding: 5px;width: 200px;cursor: pointer;">
                        <div class="border rounded border-0 d-flex mb-2" style="overflow: hidden;height: 169px;"><img
                                src="phones/computer.jpeg" height="100%" width="100%" /></div>
                        <div class="d-flex justify-content-between align-items-center" style="height: 40px;">
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-center"><span style="font-size: 13px;">Vuego
                                        House</span><span class="text-body-tertiary"
                                        style="font-size: 11px;">spécification</span></div>
                            </div>
                            <div class="d-flex flex-column"><span class="text-primary"
                                    style="font-size: 13px;text-decoration: line-through;">200 $</span><span class="fw-bold"
                                    style="font-size: 13px;">150 $</span></div>
                        </div>
                    </div>
                    <div class="bg-body-tertiary border rounded"
                        style="height: 100%;margin-right: 15px;padding: 5px;width: 200px;cursor: pointer;">
                        <div class="border rounded border-0 d-flex mb-2" style="overflow: hidden;height: 169px;"><img
                                src="phones/computer.jpeg" height="100%" width="100%" /></div>
                        <div class="d-flex justify-content-between align-items-center" style="height: 40px;">
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-center"><span style="font-size: 13px;">Vuego
                                        House</span><span class="text-body-tertiary"
                                        style="font-size: 11px;">spécification</span></div>
                            </div>
                            <div class="d-flex flex-column"><span class="text-primary"
                                    style="font-size: 13px;text-decoration: line-through;">200 $</span><span class="fw-bold"
                                    style="font-size: 13px;">150 $</span></div>
                        </div>
                    </div>
                    <div class="bg-body-tertiary border rounded"
                        style="height: 100%;margin-right: 15px;padding: 5px;width: 200px;cursor: pointer;">
                        <div class="border rounded border-0 d-flex mb-2" style="overflow: hidden;height: 169px;"><img
                                src="phones/computer.jpeg" height="100%" width="100%" /></div>
                        <div class="d-flex justify-content-between align-items-center" style="height: 40px;">
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-center"><span style="font-size: 13px;">Vuego
                                        House</span><span class="text-body-tertiary"
                                        style="font-size: 11px;">spécification</span></div>
                            </div>
                            <div class="d-flex flex-column"><span class="text-primary"
                                    style="font-size: 13px;text-decoration: line-through;">200 $</span><span class="fw-bold"
                                    style="font-size: 13px;">150 $</span></div>
                        </div>
                    </div>
                    <div class="bg-body-tertiary border rounded"
                        style="height: 100%;padding: 5px;width: 200px;cursor: pointer;">
                        <div class="border rounded border-0 d-flex mb-2" style="overflow: hidden;height: 169px;"><img
                                src="phones/computer.jpeg" height="100%" width="100%" /></div>
                        <div class="d-flex justify-content-between align-items-center" style="height: 40px;">
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-center"><span style="font-size: 13px;">Vuego
                                        House</span><span class="text-body-tertiary"
                                        style="font-size: 11px;">spécification</span></div>
                            </div>
                            <div class="d-flex flex-column"><span class="text-primary"
                                    style="font-size: 13px;text-decoration: line-through;">200 $</span><span class="fw-bold"
                                    style="font-size: 13px;">150 $</span></div>
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
import Header from '../../../Components/Header/Header.vue';
import Descriptions from './Descriptions.vue'
import Informations from './Informations.vue'
import AProposPromotion from './AProposPromotion.vue'
import Images from './Images.vue'

export default {
    components: {
        Header,
        Descriptions,
        Informations,
        AProposPromotion,
        Images
    },
    props: {
        descriptions: Object,
        informations: Object,
        promotion: Object,
        images: Object,
        user: ''
    }
}

</script>