<template>
    <div id="card" class="snap-center text-center rounded-xl my-10">
        <img :src="props.product.first_image.src" class="shadow-md rounded-md mx-4 h-40 object-fit max-w-fit">
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