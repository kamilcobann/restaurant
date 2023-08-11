<template class="h-10">
<footer>
    <div>
        <div class="bg-slate-900 grid xl:grid-cols-4 gap-4 pt-4 px-20">

        <FooterBox>
            <template #title>
                <Link :href="route('product.index')">
                        Logo
                </Link>
            </template>
            <template #description>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore vitae quam at ipsam cumque. Tenetur quam perspiciatis tempora tempore et laudantium molestias illum sapiente perferendis eius fugiat, expedita placeat similique voluptas ea, sunt, magni laboriosam eveniet voluptate. Laudantium, molestiae dolor?
            </template>
            <template #extra>
social
            </template>
        </FooterBox>
        <FooterBox>
            <template #title>
                <Link :href="route('product.index')">
                        Adresimiz
                </Link>
            </template>
            <template #description>
                Cumhuriyet, Mehmet Topaç Blv. No: 180/A, 64200 Uşak Merkez/Uşak, Türkiye
            </template>
            <template #extra>
                Yol Tarifi Al
            </template>
        </FooterBox>
        <FooterBox>
            <template #title>
                Site Haritası
            </template>
            <template #description>
                <ul>
                    <li>Anasayfa</li>
                    <li>Hakkımızda</li>
                    <li>Menü</li>
                    <li>Bize Ulaşın</li>
                </ul>
            </template>
        </FooterBox>
        <FooterBox>
            <template #title>
                Çalışma Saatleri
            </template>
            <template #description>

            </template>
            <template #extra>
                <a href="tel:+90-541-334-4541" as="button" class="border border-white rounded-none px-5 py-3 hover:bg-gray-600"> Rezervasyon Yapın </a>
            </template>
        </FooterBox>
        
        </div>
        <div class=" bg-slate-900">
            <div class="">&nbsp;</div>
            <div class="text-gray-900 flex justify-between items-center">
                <div class="ms-20 text-gray-100">Shish&Go Steakhouse</div>
                <div class="me-20 text-gray-100">Uşak/Merkez</div>
            </div>
            <div class="">&nbsp;</div>
        </div>
    </div>
</footer>
</template>

<script setup>
// import Box from './Box.vue';
import FooterBox from '@/Components/UI/Footer/FooterBox.vue';
import { Link } from '@inertiajs/vue3';
// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

</script>