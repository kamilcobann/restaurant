<template>
<WelcomeCard/>
<div class="container mx-auto my-10 p-4 ">
<FoodSlider :isHome="true" :product-list="products" class="mb-10"/>
<Comment/>
</div>

</template>

<script setup>
import FoodSlider from '@/Components/FoodSlider.vue';
import Comment from '@/Components/Comment.vue';
import WelcomeCard from '@/Components/WelcomeCard.vue';
defineProps({
    products: Array,
})
</script>