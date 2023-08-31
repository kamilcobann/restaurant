<template>
                <tr v-if="!product.deleted_at" class="border rounded-lg border-slate-600 bg-green-300 hover:bg-gray-200">
                    <td class="py-2 rounded-tl-lg rounded-bl-lg text-center ">
                        <Link class="block"  :href="route('product.show', $props.product.id)">{{ product.id }}</Link>
                    </td>
                    <td class="py-2 text-center ">
                        <Link class="block" :href="route('product.show', $props.product.id)">{{ product.title }}</Link>
                    </td>
                    <td class="py-2 text-center">
                        <Link class="block" :href="route('product.show', $props.product.id)">{{ product.kilogram_price }}</Link>
                    </td>
                    <td class="py-2 text-center">
                        <Link class="block" :href="route('product.show', $props.product.id)">{{ product.portion_price }}</Link>
                    </td>
                    <td class="rounded-tr-lg rounded-br-lg text-center">
                        <div class="flex justify-center items-center">
                        <Link :href="route('admin.product.image.create', $props.product.id)" as="button"><EyeIcon class="h-5 me-1"/></Link>
                        <Link :href="route('admin.product.edit', $props.product.id)" as="button"><PencilIcon class="h-5 mx-1"/></Link>
                        <Link :href="route('admin.product.destroy', $props.product.id)" method="delete" as="button"><TrashIcon class="h-5 mx-1 "/></Link>
                        </div>
                    </td>
                </tr>
                <tr v-else class="border rounded-lg border-slate-600 bg-red-300 hover:bg-gray-200">
                    <td class="py-2 rounded-tl-lg rounded-bl-lg text-center ">
                        <Link class="block"  :href="route('product.show', $props.product.id)">{{ product.id }}</Link>
                    </td>
                    <td class="py-2 text-center ">
                        <Link class="block" :href="route('product.show', $props.product.id)">{{ product.title }}</Link>
                    </td>
                    <td class="py-2 text-center">
                        <Link class="block" :href="route('product.show', $props.product.id)">{{ product.kilogram_price }}</Link>
                    </td>
                    <td class="py-2 text-center">
                        <Link class="block" :href="route('product.show', $props.product.id)">{{ product.portion_price }}</Link>
                    </td>
                    <td class="rounded-tr-lg rounded-br-lg text-center py-2">
                    <div class="flex justify-center items-center">
                        <Link :href="route('admin.product.show', $props.product.id)" as="button"><EyeIcon class="h-5 me-1"/></Link>
                        <Link :href="route('admin.product.edit', $props.product.id)" as="button"><PencilIcon class="h-5 mx-1"/></Link>
                        <Link :href="route('admin.product.restore', $props.product.id)" method="put" as="button"><ShieldCheckIcon class="h-5 mx-1"/></Link>
                    </div>
                    </td>
                </tr>
                


                
                

</template>

<script setup>
import { EyeIcon, PencilIcon, ShieldCheckIcon, TrashIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
const props = defineProps({
    product: Object
})
</script>
