<template>
  <section class="bg-zinc-900 text-center text-white grid gap-4 py-8">
    <div class="mx-6 md:mx-12 grid gap-4">
      <div class="text-4xl md:text-6xl font-[700] font-heading text-[#FFFFFF]">
        Ми знаходимось:
      </div>
      <div @click="openGoogleMaps" style="cursor: pointer;">
        <iframe
          width="100%"
          height="400"
          frameborder="0"
          style="border: 0"
          src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2622.5742061312244!2d24.717349015676003!3d48.904451379291956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDjCsDU0JzE2LjAiTiAyNMKwNDMnMTAuMyJF!5e0!3m2!1suk!2sua!4v1690529216651!5m2!1suk!2sua"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </div>
  </section>
</template>

<script setup>
const openGoogleMaps = () => {
  window.open(
    'https://www.google.com/maps?q=48.904451379291956,24.717349015676003&z=16&output=embed',
    '_blank'
  );
};
</script>
