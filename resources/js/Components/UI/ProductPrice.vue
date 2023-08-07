<template>
        <span>
            {{ props.product.portion_price }} / 1 portion
        </span>
        <span>
            {{ props.product.kilogram_price }} / 1 kg
        </span>
</template>

<script setup>
const props = defineProps({
    product: Object
})
</script>
