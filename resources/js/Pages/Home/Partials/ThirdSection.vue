<script setup>
const prom = import.meta.env.VITE_APP_PROM;
</script>

<template>
    <section class="bg-zinc-900 text-center text-white grid gap-4 py-8">
        <div class="text-4xl md:text-6xl font-medium font-heading">
            Наш товар
        </div>
        <div class="text-2xl font-text">
            Знайдіть свій товар у нас в магазині
        </div>
        <div class="text-center">
            <a :href="prom" target="_blank">
                <button type="button" class="bg-[#CF9236] rounded px-6 py-2 font-heading">ПРОМ</button>
            </a>
        </div>
    </section>
</template>
