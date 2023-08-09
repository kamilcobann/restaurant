<template>
    <div id="card" class="snap-center text-center rounded-xl my-10 ml-5">
        <img src="https://picsum.photos/300/300?random=1" class="shadow-md rounded-md mx-auto max-w-fit">
        <div class="my-3">
            <div>
                <ProductTitle :product="product" class="text-gray-300"/>
            </div>
            <br>
            <div v-if="isHome==false">
                <ProductPrice :product="product" />
            </div>

        </div>
    </div>
    </template>
    
<script setup>
import ProductTitle from '@/Components/UI/ProductTitle.vue';
import ProductPrice from '@/Components/UI/ProductPrice.vue';
const props = defineProps({
    product: Object,
    isHome: Boolean,
})
</script>