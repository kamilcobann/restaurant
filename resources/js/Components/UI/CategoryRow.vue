<template>
    <tr v-if="!category.deleted_at" class="border rounded-lg border-slate-600 bg-green-300 hover:bg-green-200">
        <td class="py-2 text-center rounded-tl-lg rounded-bl-lg">
                    {{ category.id }}
                </td>
                <td class="py-2 text-center">
                    {{ category.name }}
                </td>
                <td class="py-2 text-center">
                    {{ category.products_count }}
                </td>
                <td class="rounded-tr-lg rounded-br-lg text-center py-2">
                    <div class="flex justify-center items-center">
                        <Link
                            :href="
                                route('admin.category.edit', {
                                    category: category.id,
                                })
                            "
                            as="button"
                            ><PencilIcon class="h-5 mx-1"
                        /></Link>
                        <Link
                            :href="
                                route('admin.category.destroy', {
                                    category: category.id,
                                })
                            "
                            method="delete"
                            as="button"
                            ><TrashIcon class="h-5 mx-1"
                        /></Link>
                    </div>
                </td>
    </tr>
    <tr v-if="category.deleted_at" class="border rounded-lg border-slate-600 bg-red-300 hover:bg-red-200">
        <td class="py-2 text-center rounded-tl-lg rounded-bl-lg">
                    {{ category.id }}
                </td>
                <td class="py-2 text-center">
                    {{ category.name }}
                </td>
                <td class="py-2 text-center">
                    {{ category.products_count }}
                </td>
                <td class="rounded-tr-lg rounded-br-lg text-center py-2">
                    <div class="flex justify-center items-center">
                        <Link
                            :href="
                                route('admin.category.edit', {
                                    category: category.id,
                                })
                            "
                            as="button"
                            ><PencilIcon class="h-5 mx-1"
                        /></Link>
                        <Link
                            :href="
                                route('admin.category.restore', {
                                    category: category.id,
                                })
                            "
                            method="put"
                            as="button"
                            ><ShieldCheckIcon class="h-5 mx-1"
                        /></Link>
                    </div>
                </td>
    </tr>






</template>

<script setup>
import { PencilIcon, ShieldCheckIcon, TrashIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
const props = defineProps({
category: Object
})
</script>
