<template>
  <section class="bg-zinc-900 text-center text-white grid gap-4 py-8">
    <div class="mx-6 md:mx-12 grid gap-4">
      <div class="text-4xl md:text-6xl font-[700] font-heading text-[#FFFFFF]">
        Ми знаходимось:
      </div>
      <a :href="getGoogleMapsLink()" target="_blank" class="rounded-lg">
          <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2622.5742061312244!2d24.717349015676003!3d48.904451379291956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDjCsDU0JzE2LjAiTiAyNMKwNDMnMTAuMyJF!5e0!3m2!1suk!2sua!4v1690529216651!5m2!1suk!2sua" 
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                class="rounded-lg"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
