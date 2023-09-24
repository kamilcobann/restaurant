<template>
    <div class="flex justify-between items-center text-black ">
        <span>
            {{ props.product.portion_price }}₺ - 1 porsiyon
        </span>
        <span>
            {{ props.product.kilogram_price }}₺ - 1 Kg
        </span>
    </div>
</template>

<script setup>
const props = defineProps({
    product: Object
})
</script>
