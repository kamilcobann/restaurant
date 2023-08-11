<template>
    <div
     class="flex justify-center items-center font-bold text-lg lg:text-3xl "
     >
        Müşterilerimiz neler söylüyor?
    </div>



    <div class="flex justify-between bg-gray-400 bg-opacity-20 rounded-lg p-4">
        <div class="flex items-center justify-center">
            <span>
                <img class="h-8" src="https://www.google.com.ua/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="">
            </span>
            <div class="mb-1 ms-2 font-semibold text-xl ">
            Yorumları
            </div>
        </div>
        <button type="button" class="flex items-center justify-center border bg-blue-400 rounded-lg p-2">Yorum Yapın</button>
    </div>




    <div class=" rounded-lg">
        <div class="flex p-2">
            <div class="snap-x snap-mandatory overflow-x-scroll no-scrollbar scroll whitespace-nowrap scroll-smooth flex flex-row">
                <CommentCard v-for="comment in commentList" :key="comment.id" :comment="comment"/>
            </div>
        </div>
    </div>
</template>

<script setup>
import CommentCard from '@/Components/CommentCard.vue'

</script>
