<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div class="login-container">
            <div class="login-header">
                <h1 class="login-title">Sign in</h1>
                <p class="login-subtitle">to continue to YourApp</p>
            </div>

            <div v-if="status" class="status-message">
                {{ status }}
            </div>

            <form @submit.prevent="submit" class="login-form">
                <div>
                    <InputLabel for="email" value="Email" class="login-label" />

                    <TextInput
                        id="email"
                        type="email"
                        class="login-input"
                        v-model="form.email"
                        required
                        autofocus
                        autocomplete="username"
                    />

                    <InputError class="error-message" :message="form.errors.email" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Password" class="login-label" />

                    <TextInput
                        id="password"
                        type="password"
                        class="login-input"
                        v-model="form.password"
                        required
                        autocomplete="current-password"
                    />

                    <InputError class="error-message" :message="form.errors.password" />
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <Checkbox name="remember" v-model:checked="form.remember" />
                        <span class="remember-text">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="forgot-password-link"
                    >
                        Forgot your password?
                    </Link>

                    <PrimaryButton class="login-button" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Log in
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </GuestLayout>
</template>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #fff;
    color: #202124;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    width: 360px;
    padding: 40px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
    background-color: #fff;
}

.logo {
    height: 48px;
    margin-bottom: 20px;
}

.login-header {
    margin-bottom: 20px;
}

.login-title {
    font-size: 24px;
    font-weight: 500;
    margin: 0 0 10px 0;
}

.login-subtitle {
    font-size: 16px;
    color: #5f6368;
    margin: 0 0 20px 0;
}

.status-message {
    margin-bottom: 20px;
    font-size: 14px;
    color: #34a853;
}

.login-form {
    display: flex;
    flex-direction: column;
}

.login-label {
    font-size: 14px;
    font-weight: 500;
    color: #202124;
    margin-bottom: 8px;
}

.login-input {
    height: 44px;
    padding: 0 16px;
    margin-bottom: 20px;
    border: 1px solid #dadce0;
    border-radius: 4px;
    font-size: 16px;
}

.error-message {
    margin-top: 8px;
    font-size: 12px;
    color: #d93025;
}

.remember-text {
    margin-left: 8px;
    font-size: 14px;
    color: #5f6368;
}

.forgot-password-link {
    font-size: 14px;
    color: #1a73e8;
    text-decoration: none;
    margin-right: 20px;
}

.forgot-password-link:hover {
    text-decoration: underline;
}

.login-button {
    height: 44px;
    background-color: #1a73e8;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.3s;
}

.login-button:hover {
    background-color: #1669c1;
}
</style>
