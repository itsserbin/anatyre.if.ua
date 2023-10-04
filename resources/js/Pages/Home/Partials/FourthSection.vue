<template>
  <section class="bg-zinc-900 text-center text-white grid gap-4 py-8">
    <div class="mx-6 md:mx-12 grid gap-4">
      <div class="text-4xl md:text-6xl font-[700] font-heading text-[#FFFFFF]">
        Ми знаходимось:
      </div>
      <a :href="getGoogleMapsLink()" target="_blank" class="rounded-lg">
        <img
          src="https://maps.googleapis.com/maps/api/staticmap?center=48.904451379291956,24.717349015676003&zoom=16&size=600x300&maptype=roadmap&markers=color:red%7Clabel:A%7C48.904451379291956,24.717349015676003"
          alt="Google Map"
          class="w-full h-auto rounded-lg"
        />
      </a>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

const getGoogleMapsLink = () => {
  const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
  const lat = 48.904451379291956;
  const lng = 24.717349015676003;

  if (isMobile) {
    // Схема URL для відкриття в додатку Google Maps на мобільних пристроях
    return `https://www.google.com/maps/search/?api=1&query=${lat},${lng}`;
  } else {
    // Звичайне посилання для веб-сайту на комп'ютерах
    return `https://www.google.com/maps?q=${lat},${lng}`;
  }
};
</script>
