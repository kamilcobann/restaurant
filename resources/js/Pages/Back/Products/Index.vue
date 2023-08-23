<template>
    <div class="">
        <table class="table-auto w-1/2 border-separate  border-spacing-y-1 border-spacing-x-0 mx-auto border-slate-500">
            <TableHeader/>
            <tbody>
                <TableRow v-for="product in products" :key="product.id" :product="product"/>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import TableRow from '@/Components/Admin/TableRow.vue'
import TableHeader from '@/Components/Admin/TableHeader.vue'
defineProps({
    products:Array
})
</script>
