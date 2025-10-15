<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Card from "@/components/Card.vue"
import NewVerb from "@/components/NewVerb.vue"
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import { Input } from '@/components/ui/input';

defineProps({
    verbs: Object,
    status: String,
})

</script>

<template>

    <Head title="Imperative Verbs">
    </Head>

    <div>
        <div class="flex justify-between items-center px-8 py-1 bg-teal-700 text-neutral-50 ">
            <div class="flex aspect-square size-10 items-center justify-center rounded-md ">
                <AppLogoIcon class="size-10 fill-current" />
            </div>
            <h1 class="text-xl text-center p-2">Imperative Verbs</h1>
            <p>Welcome</p>

        </div>

        <div class=" my-2 flex justify-end pr-5 ">
            <form action="">
                <Input label="" icon="magnifying-glass" placeholder="Search..." class="border rounded px-2 py-1" />
            </form>
        </div>


        <div v-for="verb in verbs" :key="verb.id">
            <Card :verb="verb" />

        </div>

        <NewVerb :status="status" />

    </div>

</template>
