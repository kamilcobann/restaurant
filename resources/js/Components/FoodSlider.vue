<template>

    <div class="dark:bg-gray-800 rounded-lg">
        <div  v-if="isHome==true" class="py-3 px-3 justify-center items-center flex text-slate-50 text-xl">Ürünlerimiz</div>
        <hr class="opacity-30">
        <div class="flex p-2">

            <div class=" snap-x snap-mandatory overflow-x-scroll no-scrollbar scroll whitespace-nowrap scroll-smooth flex flex-row no-scrollbar mx-auto w-full ">
                <FoodCard v-for="product in productList" :key="product.id" :product="product" :isHome="isHome"/>                
            </div>

        </div>


    </div>

</template>


<script setup>
import FoodCard from "@/Components/FoodCard.vue";
// import axios from "axios";
// import {ref, /*onMounted*/} from 'vue';

// const productList = ref([])
defineProps({
    productList: Array,
    isHome: Boolean,
})
// const getMusicList = () => {
//     axios.get(route('getDummyMusic')).then(response => {
//         musicList.value = response.data.dummy_data
//         console.log("Music List Geldi")
//     });
// }
// onMounted(
//     () => getMusicList()
// );

// function next(){
//     console.log("selam")
// }
</script>