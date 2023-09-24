<template>
            <thead class="">
                <tr>
                    <th v-for="item in headers" :key="item">
                    {{ item }}
                </th>
                </tr>
            </thead>
</template>

<script setup>
defineProps({
    headers:Array
})
</script>
