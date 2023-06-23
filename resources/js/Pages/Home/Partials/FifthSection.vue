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
                <div class="bg-zinc-200 rounded p-2 h-full">
                    <div class="p-2 grid justify-center">
                        <i class="pi pi-instagram text-center" style="font-size: 2rem"></i>
                    </div>
                    <div class="text-base md:text-lg font-medium font-heading">Instagram</div>
                </div>
            </a>
            <a :href="facebook" target="_blank">
                <div class="bg-zinc-200 rounded grid justify-center p-2 h-full">
                    <div class="p-2 grid justify-center">
                        <i class="pi pi-facebook text-center" style="font-size: 2rem"></i>
                    </div>
                    <div class="text-base md:text-lg font-medium font-heading">Facebook</div>
                </div>
            </a>
            <a :href="prom" target="_blank">
                <div class="bg-zinc-200 rounded grid justify-center p-2 h-full">
                    <img src="/img/prom_icon.svg" alt="" class="text-center w-12 mx-auto">
                    <div class="text-base md:text-lg font-medium font-heading">Prom.ua</div>
                </div>
            </a>
        </div>
        <div class="mx-auto px-10">
            <a class="rounded block bg-zinc-600 p-4 text-center font-bold text-lg md:text-2xl text-white font-heading"
               :href="`tel:${phone}`"
            >{{ formattedPhone }}</a>
        </div>
    </section>
</template>
