<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
<div class="w-full max-w-md mt-6 px-6 py-4 bg-gray-400 shadow-lg rounded-lg mb-5">
      <slot />
    </div>
    <Link href="/" class="py-2 px-4 border border-white text-white bg-transparent rounded-full mb-4 hover:bg-white hover:text-black transition duration-300 ease-in-out">← Return</Link>
</template>

<style scoped>

a {
  text-decoration: none;
  color: black;
}
p {
  background: linear-gradient(45deg, #ff6b6b, #f8e8a2, #6bff95);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
</style>
