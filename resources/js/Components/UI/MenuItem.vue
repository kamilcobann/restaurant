<template>
    <Box>
        <Link :href="route('product.show',{product: product.id})">
        <div class="flex justify-center items-center">
            <img src="https://picsum.photos/300/300?random=1">
        </div>
        </Link>
        <div class="flex justify-center items-center">
            <ProductTitle :product="props.product"/>
        </div>
        <div class="flex justify-center items-center">
            <ProductDesc :product="props.product"/>
        </div>
        <div class="flex justify-between items-center">
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
