<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Card from "../components/Card.vue"
import NewVerb from "../components/NewVerb.vue"

defineProps({
    verbs: Object,
    status: String,
})

</script>

<template>

    <Head title="Imperative Verbs">
    </Head>

    <div>
        <h1 class="text-xl text-center p-2">Imperative Verbs</h1>

        <div v-for="verb in verbs" :key="verb.id">
            <Card :verb="verb" />

        </div>

        <NewVerb :status="status" />

    </div>

</template>
