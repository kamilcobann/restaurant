<template>
                <tr class="border rounded-lg border-slate-600 ">
                    <td class="py-2 rounded-tl-lg rounded-bl-lg text-center text-gray-500 ">{{ product.id }}</td>
                    <td class="py-2 text-center ">{{ product.title }}</td>
                    <td class="py-2 text-center">{{ product.kilogram_price }}</td>
                    <td class="py-2 text-center">{{ product.portion_price }}</td>
                    <td class="rounded-tr-lg rounded-br-lg text-center">CRUD</td>
                </tr>
</template>

<script setup>
defineProps({
    product: Object
})
</script>
