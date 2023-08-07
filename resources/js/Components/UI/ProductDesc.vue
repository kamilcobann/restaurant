<template>
    <span>
        <Link :href="route('product.show',$props.product.id)">
            {{ props.product.description }}
        </Link>
    </span>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    product:Object,
})
</script>
