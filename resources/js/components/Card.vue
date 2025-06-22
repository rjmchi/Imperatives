<script setup lang="ts">

defineProps({
    verb: Object
})

</script>

<template>

    <div class="shadow-xl p-3 rounded-xl m-2">
        <div class="grid grid-cols-7 gap-2  ">
            <div class=" p-2 rounded text-lg shadow font-bold col-span-7">{{ verb.verb }}</div>

            <div class="col-start-2 col-span-3 p-2 rounded text-lg shadow">{{ verb.informal }}</div>
            <div class="col-span-3 p-2 rounded text-lg shadow">{{ verb.neginformal }}</div>
            <div class="col-start-2 col-span-3 p-2 rounded text-lg shadow">{{ verb.formal }}</div>
            <div class=" col-span-3 p-2 rounded text-lg shadow">{{ verb.negformal }}</div>
            <div class="col-start-2 col-span-3 p-2 rounded text-lg shadow">{{ verb.plural }}</div>
            <div class=" col-span-3 p-2 rounded text-lg shadow">{{ verb.negplural }}</div>
        </div>
    </div>

</template>