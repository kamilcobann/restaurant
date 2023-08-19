<template>
    <div id="card" class="snap-center rounded-xl border mx-3 bg-white  ">

            <div class="flex">
                <img :src="comment.customer_image"
                    class="shadow-md ms-2 mt-2 max-w-fit rounded-full" 
                >
                <div class="flex w-full justify-start items-center ms-2">{{ comment.customer_name }}
                </div>
                <div class="mt-2 me-2"></div>
            </div>
            <p class="break-words no-scrollbar leading-normal overflow-y-auto text-sm w-60 h-36 m-3 ">
                {{ comment.comment }}
           </p>
    </div>
    </template>
    
    <script setup>
    const props = defineProps({
        comment: Object,
    })
    </script>