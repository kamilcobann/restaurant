<template>
    <Box class="hover:bg-gray-100">
        <Link :href="route('product.show',{product: product.id})">
        <div class="flex justify-center items-center">
            <img :src="props.product.first_image.src" class="object-fit h-48 w-96">
        </div>
        </Link>
        <div class="flex justify-center items-center mt-2">
            <ProductTitle :product="props.product"/>
        </div>
        <!-- <div class="flex justify-center items-center">
            <ProductDesc :product="props.product"/>
        </div> -->
        <div class="mt-2">
            <ProductPrice :product="props.product"/>
        </div>
    </Box>
</template>

<script setup>
import Box from './Box.vue';
import ProductTitle from './ProductTitle.vue';
import ProductDesc from './ProductDesc.vue';
import { Link } from '@inertiajs/vue3';
import ProductPrice from './ProductPrice.vue';
const props = defineProps({
    product: Object,
})
</script>
