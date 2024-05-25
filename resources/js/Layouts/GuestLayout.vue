<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <div class="min-h-screen flex flex-col justify-center items-center pt-6 bg-gradient-to-b from-gray-800 to-gray-400">
    <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoPqGtHrqlykqfW4h8s237m9VCSWS4-0nYsqSy3ExbvnMyv6wuYrlF70SJNmP5pgWYibc&usqp=CAU" alt="">
    <p class="font-bold text-white text-2xl">Gamespace</p>
    <div class="w-full max-w-md mt-6 px-6 py-4 bg-gray-400 shadow-lg rounded-lg mb-5">
      <slot />
    </div>
    <Link href="/" class="py-2 px-4 border border-white text-white bg-transparent rounded-full mb-4 hover:bg-white hover:text-black transition duration-300 ease-in-out">← Return</Link>
  </div>
</template>

<style scoped>
img{
  height: 100px;
  width: 100px;
  border-radius: 50%;
}
a {
  text-decoration: none;
}
p {
  background: linear-gradient(45deg, #ff6b6b, #f8e8a2, #6bff95);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
</style>
