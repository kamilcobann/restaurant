<template>
  <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6 mx-auto xl:w-3/4 xl:my-10 p-3">
    <!-- <FoodSlider :product-list="products"/> -->
    <MenuItem v-for="product in products" :key="product.id" :product="product"/>
  </div>
</template>

<script setup>
// import FoodSlider from '@/Components/FoodSlider.vue';
import MenuItem from '@/Components/UI/MenuItem.vue'
// import { Link } from '@inertiajs/vue3'
defineProps({ message: String, products:Array})
</script>