<script setup>
import {Head, Link} from '@inertiajs/vue3';
import FirstSection from "@/Pages/Home/Partials/FirstSection.vue";
import SecondSection from "@/Pages/Home/Partials/SecondSection.vue";
import ThirdSection from "@/Pages/Home/Partials/ThirdSection.vue";
import FourthSection from "@/Pages/Home/Partials/FourthSection.vue";
import FifthSection from "@/Pages/Home/Partials/FifthSection.vue";

const phone = import.meta.env.VITE_APP_PHONE;
const formattedPhone = import.meta.env.VITE_APP_FORMATTED_PHONE;
</script>

<template>
    <Head title="Welcome"/>

    <FirstSection :phone="phone" :formattedPhone="formattedPhone"/>
    <SecondSection/>
    <ThirdSection/>
    <FourthSection/>
    <FifthSection :phone="phone" :formattedPhone="formattedPhone"/>
</template>
