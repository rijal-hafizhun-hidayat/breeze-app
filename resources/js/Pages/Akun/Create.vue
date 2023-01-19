<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';

const form = useForm({
    name: '',
    username: '',
    email: '',
    password: ''
});

const submit = () => {
    form.post(route('register.store'), {
        onSuccess: () => console.log(true)
    })
}
</script>
<template>
    <Head title="Akun" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Akun</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <form @submit.prevent="submit" class="mt-6 space-y-6">
                        <div>
                            <InputLabel for="nama" value="Nama" />

                            <TextInput
                                id="nama"
                                type="text"
                                class="mt-1 block w-96"
                                v-model="form.name"
                                required
                                autofocus
                                autocomplete="nama"
                            />

                            <InputError class="mt-2" :message="form.errors.name" />
                        </div>

                        <div>
                            <InputLabel for="username" value="Username" />

                            <TextInput
                                id="username"
                                type="text"
                                class="mt-1 block w-96"
                                v-model="form.username"
                                required
                                autofocus
                                autocomplete="username"
                            />

                            <InputError class="mt-2" :message="form.errors.username" />
                        </div>

                         <div>
                            <InputLabel for="email" value="Email" />

                            <TextInput
                                id="email"
                                type="email"
                                class="mt-1 block w-96"
                                v-model="form.email"
                                required
                                autofocus
                                autocomplete="email"
                            />

                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>

                         <div>
                            <InputLabel for="password" value="Password" />

                            <TextInput
                                id="password"
                                type="password"
                                class="mt-1 block w-96"
                                v-model="form.password"
                                required
                                autofocus
                                autocomplete="password"
                            />

                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Register
                        </PrimaryButton>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>