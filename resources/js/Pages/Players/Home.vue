<script setup>
import { Link } from '@inertiajs/vue3';
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})

</script>

<template>
    <main id="page-trans">
        <div class="container py-4">
            <div class="image-container">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoPqGtHrqlykqfW4h8s237m9VCSWS4-0nYsqSy3ExbvnMyv6wuYrlF70SJNmP5pgWYibc&usqp=CAU" alt="">
            </div>
                <header class="py-2 px-4 text-center font-bold text-4xl">Gamespace</header>
                <section class="py-8 px-4">
                    <div class="max-w-3xl mx-auto text-center">
                    <p class="text-lg text-gray-900">
                        Welcome to Gamespace! A vibrant community for gamers and gaming enthusiasts alike. Dive into the world of gaming with us and discover a space where your passion for games can thrive.
                    </p>
                    <p class="mt-4 text-lg text-gray-900">
                        This platform provides the latest news, reviews, and insights into the gaming world. Whether you're here to catch up on the latest game releases, read in-depth articles, or connect with fellow gamers, Gamespace is your go-to source.
                    </p>
                    <p class="mt-4 text-lg text-gray-900 mb-5">
                        Join the Gamespace community today and be part of the ultimate gaming experience!
                    </p>
                    <Link class="link py-2 px-4 bg-gray-600 text-white rounded font-bold" href="/list">Start now</Link>
        </div>
      </section>
        </div>
    </main>
  </template>

<style scoped>
.container{
    background: linear-gradient(45deg, #ff6b6b, #f8e8a2, #6bff95);
    height: 90vh;
}
img {
    height: 100px;
    width: 100px;
    border-radius: 50px;
}
.image-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.link:hover {
    color: #000;
    background-color: white;
}
</style>