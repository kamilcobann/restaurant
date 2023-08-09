<template>
      <div class="">
        <FoodSlider :product-list="products" :isHome="true"/>
      </div>
</template>

<script setup>
import FoodSlider from '@/Components/FoodSlider.vue';
defineProps({
    products: Array
})
</script>