<script setup>
import {vMaska} from "@/maska"
import {reactive} from "vue";
import Swal from 'sweetalert2'

defineProps([
    'phone',
    'formattedPhone',
]);

const state = reactive({
    isLoading: false,
    item: {
        name: null,
        phone: null,
    }
});

const toggleLoading = () => state.isLoading = !state.isLoading;

const onSubmit = async () => {
    toggleLoading();
    try {
        const response = await axios.post(route('api.new-order'), state.item);
        if (response.data) {
            await Swal.fire({
                title: 'Запит надіслано :)',
                text: 'Менеджер звʼяжеться з вами протягом найближчого часу',
                icon: 'success',
            })
            state.item = {name: null, phone: null};
        }
    } catch (e) {
        console.error(e);
        await Swal.fire({
            title: 'Виникла помилка :(',
            text: 'Будь ласка, перевірте введені дані, або зверніться за контактним номером',
            icon: 'error',
        })
    }
    toggleLoading();
}
</script>

<template>
    <section class="first relative">
        <img src="/img/first-image.svg" alt="" class="absolute object-cover w-full h-full">
        <div class="mx-auto md:py-16 px-4 max-w-7xl relative flex flex-col md:flex-row gap-6">
            <div class="md:w-1/2 flex flex-col justify-center gap-4">
                <img src="/img/logo.svg" alt="">
                <div class="text-5xl sm:text-8xl md:text-6xl xl:text-8xl text-white font-medium font-heading xl:mb-5">
                    Шиномонтаж
                </div>
                <a class="text-[#CF9236] text-3xl sm:text-6xl md:text-4xl xl:text-6xl font-medium font-heading"
                   :href="`tel:${phone}`">
                    {{ formattedPhone }}
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <form class="first-form-bg w-full max-w-[320px] flex flex-col p-6 my-12 gap-4 rounded-lg relative"
                      @submit.prevent="onSubmit">
                    <div class="bg-zinc-900 rounded-full w-20 h-20 mt-[-60px] mx-auto">
                        <img src="/img/first-form-avatar.svg" alt="" class="">
                    </div>
                    <input type="text"
                           v-model="state.item.name"
                           placeholder="Ваше імʼя"
                           class="rounded-xl bg-white p-3 border-0 mt-4 font-text font-[300]"
                    >
                    <input type="text"
                           v-model="state.item.phone"
                           placeholder="+38"
                           class="rounded-xl bg-white p-3 border-0 font-text font-[300]"
                           v-maska
                           data-maska="+38 (###) ###-##-##"
                           required
                    >
                    <button type="submit"
                            class="bg-green-600 rounded-xl p-4 text-white font-text font-[700]"
                            :disabled="state.isLoading"
                    >Замовити
                    </button>
                </form>
            </div>
        </div>
    </section>
</template>
