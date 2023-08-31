<template>

<Box class="md:w-1/2 md:mx-auto mt-3 mx-3">
    <form @submit.prevent="upload">
        <section class="flex items-center gap-2 my-4">
            <input
                class="border w-full rounded-md file:px-4 file:py-2 border-gray-200  file:border-0 file:bg-gray-100 file:font-medium"
            type="file" @input="addFiles" multiple>
        </section>
        <div class="flex justify-end gap-2">
        <button type="submit" class="button-outline disabled:opacity-25 disabled:touch-none" :disabled="!canUpload">Yükle</button>
        <button type="reset" class="button-normal" @click="reset">Sıfırla</button>
        </div>
    </form>
    <div v-if="imageErrors.length" class="input-error">
        <div v-for="(error,index) in imageErrors" :key="index">
            {{ error }}
        </div>
    </div>
</Box>

<Box v-if="product.images.length" class="md:w-1/2 md:mx-auto mt-4 mx-3">
    <template #header>Yüklenmiş Resimler</template>
    <section class="mt-4  gap-4 grid md:grid-cols-3">
        <div v-for="image in product.images" :key="image.id" class="flex flex-col justify-between gap-1">
            <img :src="image.src" class="rounded-md object-cover h-48 w-96"/>
            <Link method="delete" as="button" :href="route('admin.product.image.destroy', {product: product.id, image: image.id})" class="border-gray-300 hover:border-gray-400 hover:bg-gray-50 p-1 rounded-md border shadow-sm text-center text-sm">Sil</Link>
        </div>
    </section>
</Box>
</template>

<script setup>
import { computed } from 'vue';
import Box from '@/Components/UI/Box.vue'
import { useForm } from '@inertiajs/vue3';
import NProgress from 'nprogress'
import { router } from '@inertiajs/vue3'
import {Link} from '@inertiajs/vue3';

router.on('progress',(event)=>{
    if(event.detail.progress.percentage){
        NProgress.set((event.detail.progress.percentage))
    }
})

const canUpload = computed (
    () => form.images.length
)

const props = defineProps({
    product: Object,
})

const form = useForm({
    images: []
})
const imageErrors = computed(() => Object.values(form.errors))

const upload = () => {
    form.post(
        route('admin.product.image.store', {product: props.product.id}),
        {
            onSuccess: () => form.reset('images')
        }
    )
}

const addFiles = (event) =>{
    for(const image of event.target.files){
        form.images.push(image)
    }
}

const reset = () => form.reset('images')
</script>
