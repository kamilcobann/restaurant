<template>
    <div class="flex justify-between items-center dark:text-gray-300">
        <span>
            {{ props.product.portion_price }} / 1 portion
        </span>
        <span>
            {{ props.product.kilogram_price }} / 1 kg
        </span>
    </div>
</template>

<script setup>
const props = defineProps({
    product: Object
})
</script>
