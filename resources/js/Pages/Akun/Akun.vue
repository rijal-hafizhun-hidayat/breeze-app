<script setup>
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
  import { Head } from '@inertiajs/inertia-vue3';
  import { Link } from '@inertiajs/inertia-vue3';

  const destroy = () => {
    console.log(true)
  }

</script>
<template>
    <Head title="Akun" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Akun</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex flex-col">
                      <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                          <div class="overflow-hidden">
                            <Link :href="route('akuns.create')" as="button" type="button" class="bg-cyan-500 px-3 py-1 rounded text-white font-bold font-sans transition duration-200 hover:bg-cyan-600">Tambah</Link>
                            
                            <table class="min-w-full divide-y divide-black">
                              <thead class="">
                                <tr>
                                  <th scope="col" class="text-base font-bold text-gray-900 px-6 py-4 text-left">
                                    #
                                  </th>
                                  <th scope="col" class="text-base font-bold text-gray-900 px-6 py-4 text-left">
                                    Name
                                  </th>
                                  <th scope="col" class="text-base font-bold text-gray-900 px-6 py-4 text-left">
                                    Username
                                  </th>
                                  <th scope="col" class="text-base font-bold text-gray-900 px-6 py-4 text-left">
                                    Role
                                  </th>
                                  <th scope="col" class="text-base font-bold text-gray-900 px-6 py-4 text-left">
                                    Action
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="transition duration-300 hover:bg-gray-100">
                                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Mark
                                  </td>
                                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    Otto
                                  </td>
                                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    @mdo
                                  </td>
                                  <td>
                                    <Link @click="destroy" as="button" type="button" class="bg-red-500 px-3 py-1 rounded transition duration-200 hover:bg-red-600">
                                      <i class="fa-solid fa-trash text-white"></i>
                                    </Link>
                                    <Link as="button" type="button" class="bg-amber-300 px-3 py-1 rounded ml-3 transition duration-200 hover:bg-amber-400">
                                      <i class="fa-solid fa-pencil text-white"></i>
                                    </Link>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>