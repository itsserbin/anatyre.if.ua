<script setup>
const prom = import.meta.env.VITE_APP_PROM;
</script>

<template>
    <section class="bg-zinc-900 text-center text-white grid gap-4 py-8">
        <div class="text-5xl md:text-7xl font-[400] font-heading">
            Наш товар
        </div>
        <div class="text-2xl md:text-3xl font-heading font-[300]">
            Знайдіть свій товар у нас в магазині
        </div>
        <div class="text-center">
            <a :href="prom" target="_blank">
                <button type="button" class="bg-[#CF9236] rounded-xl text-black px-6 py-2 font-heading">ПРОМ</button>
            </a>
        </div>
    </section>
</template>
