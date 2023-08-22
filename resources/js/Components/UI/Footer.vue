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
                icons
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
                <div class="flex gap-2">
                    
                <a href="https://goo.gl/maps/HFEMyGPifCExcZ3y8" as="button">    
                    <span>Yol Tarifi al</span>
                </a>
                <MapIcon class="h-5"/>
                </div>
            </template>
        </FooterBox>
        <FooterBox>
            <template #title>
                Site Haritası
            </template>
            <template #description>
                <ul>
                    <li><Link :href="route('homepage')">Anasayfa</Link></li>
                    <li><Link :href="route('homepage')">Hakkımızda</Link></li>
                    <li><Link :href="route('product.index')">Menü</Link></li>
                    <li><a as="button" href="tel:+90-541-334-4541">Bize Ulaşın</a></li>
                </ul>
            </template>
        </FooterBox>
        <FooterBox>
            <template #title>
                <div class="flex gap-2">
                    <span>Çalışma Saatleri</span>
                    <ClockIcon class="h-6"/>
                </div>
            </template>
            <template #description>
                Pazartesi: Kapalı
                <br>
                Salı: 12:30-21:00
                <br>
                Çarşamba: 12:30-21:00
                <br>
                Perşembe: 12:30-21:00
                <br>
                Cuma: 12:30-21:00
                <br>
                Cumartesi: 12:30-21:00
                <br>
                Pazar: 12:30-21:00
            </template>
            <template #extra>
            <a href="tel:+90-541-334-4541" class="flex gap-2 border w-full items-center justify-center p-3 hover:bg-gray-600">
                    <span>Rezervasyon Yapın</span>
                    <PhoneIcon class="h-6"/>
            </a>
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
import { ClockIcon, MapIcon, PhoneIcon } from '@heroicons/vue/24/outline';
import { Link } from '@inertiajs/vue3';
// import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

</script>