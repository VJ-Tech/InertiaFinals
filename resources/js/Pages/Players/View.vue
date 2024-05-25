<script setup>
import { Link, useForm } from '@inertiajs/vue3'
import { ref } from 'vue'
import Homelayout from '@/Layouts/Homelayout.vue';

defineOptions({
    layout: Homelayout
})

const props = defineProps({
    players: Object
})

const showEdit = ref(false)

const form = useForm({
    imageUrl: props.players.imageUrl,
    player_id: props.players.player_id,
    username: props.players.username,
    email: props.players.email,
    password: props.players.password
})

const submit = () => {
    form.submit('put', '/players/' + props.players.id)
}

const delPlayer = () => {
    const del = confirm("Player no longer active, continue to delete?")
    if (del)
        form.submit('delete', '/players/' + props.players.id)
}
</script>

<template>
    <div class="portfolio">
      <div class="player-details">
        <button @click="delPlayer" class="btn btn-danger">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
        <header class="text-xl font-bold text-center mb-5">Player Details</header>
        <div v-if="!showEdit">
          <div class="info-card img-container">
            <img :src="players.imageUrl" alt="profile-image">
          </div>
          <div class="info-card">
            <strong>Player ID:</strong> {{ players.player_id }}
          </div>
          <div class="info-card">
            <strong>Username:</strong> {{ players.username }}
          </div>
          <div class="info-card">
            <strong>Email:</strong> {{ players.email }}
          </div>
          <div class="info-card">
            <strong>Password:</strong> {{ players.password }}
          </div>
        </div>
        <div v-else>
          <div>
            <h2 class="edit-title">Edit Player Information</h2>
            <form @submit.prevent="submit" class="edit-form">
              <div class="form-group">
                <label for="imageUrl">Image URL:</label>
                <input type="text" id="imageUrl" v-model="form.imageUrl" class="form-control">
              </div>
              <div class="form-group">
                <label for="player_id">Player ID:</label>
                <input type="number" id="player_id" v-model="form.player_id" class="form-control">
              </div>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" v-model="form.username" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" v-model="form.email" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" id="password" v-model="form.password" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
      <div class="buttons flex">
        <Link href="/player-list" class="btn-link bg-gray-700 mr-5">Return</Link>
        <button @click="showEdit = !showEdit" class="btn btn-secondary bg-gray-700">{{ showEdit ? 'Cancel' : 'Edit' }}</button>
      </div>
    </div>
  </template>  

<style scoped>
img {
  height: 200px;
  width: 200px;
}

.portfolio {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.player-details {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 8px;
  margin-bottom: 20px;
}

.info-card {
  margin-bottom: 10px;
  text-align: center;
}

.img-container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.game-card {
  background-color: #e0e0e0;
  padding: 10px;
  border-radius: 8px;
}

.edit-title {
  text-align: center;
  font-weight: bold;
  margin-bottom: 20px;
  font-size: 24px;
}

.edit-form {
  max-width: 400px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 4px;
  border: none;
  color: #fff;
}

.btn-link {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 4px;
  font-weight: bold;
  color: #fff;
}

.btn-link:hover {
  background-color: rgb(158, 158, 158);
}

.btn-primary {
  background-color: rgb(74, 74, 77);
  font-weight: bold;
}

.btn-primary:hover {
  background-color: blue;
}

.btn-secondary {
  font-weight: bold;
}

.btn-secondary:hover {
  background-color: blue;
}

.btn-danger {
  color: black;
  margin-left: 660px;
}

.btn-danger:hover {
  color: red;
}

</style>
