<script setup>
defineProps([
    'phone',
    'formattedPhone',
]);

const instagram = import.meta.env.VITE_APP_INSTAGRAM;
const facebook = import.meta.env.VITE_APP_FACEBOOK;
const prom = import.meta.env.VITE_APP_PROM;
</script>

<template>
    <section class="bg-zinc-900 grid gap-4 py-6">
        <div class="max-w-xl mx-auto px-4 grid grid-cols-3 gap-4 ">
            <a :href="instagram" target="_blank">
                <div class="bg-zinc-200 rounded p-2 h-full flex flex-col justify-between items-center">
                    <div class="flex items-center justify-center h-full">
                        <img src="/img/instagram.svg" alt="Instagram" class="text-center w-full max-w-[60px]">
                    </div>
                    <div class="text-base md:text-lg font-[700] font-heading">Instagram</div>
                </div>
            </a>
            <a :href="facebook" target="_blank">
                <div class="bg-zinc-200 rounded flex flex-col justify-between items-center p-2 h-full">
                    <div class="flex items-center justify-center h-full">
                        <img src="/img/facebook.svg" alt="Facebook" class="text-center w-full max-w-[40px]">
                    </div>
                    <div class="text-base md:text-lg font-[700] font-heading">Facebook</div>
                </div>
            </a>
            <a :href="prom" target="_blank">
                <div class="bg-zinc-200 rounded flex flex-col justify-between items-center p-2 h-full">
                    <div class="flex items-center justify-center h-full">
                        <img src="/img/prom_icon.svg" alt="Prom" class="text-center w-full max-w-[60px]">
                    </div>
                    <div class="text-base md:text-lg font-[700] font-heading">Prom.ua</div>
                </div>
            </a>
        </div>
        <div class="mx-auto px-10 mt-10">
            <a class="rounded block bg-zinc-600 p-4 text-center text-lg md:text-2xl text-white font-[700] font-heading"
               :href="`tel:${phone}`"
            >{{ formattedPhone }}</a>
        </div>
    </section>
</template>
