<script setup lang="ts">

defineProps({
    verb: Object
})

</script>

<template>
    <div class="shadow-xl p-3 rounded-xl m-2 bg-neutral-300">
        <div class="grid grid-cols-7 gap-2  ">
            <div class=" p-2 rounded text-lg bg-indigo-100 font-bold col-span-7">{{ verb.verb }}</div>

            <div class="col-start-2 col-span-3 p-2 rounded text-lg bg-indigo-100">{{ verb.informal }}</div>
            <div class="col-span-3 p-2 rounded text-lg bg-indigo-100">{{ verb.neginformal }}</div>
            <div class="col-start-2 col-span-3 p-2 rounded text-lg bg-indigo-100">{{ verb.formal }}</div>
            <div class=" col-span-3 p-2 rounded text-lg bg-indigo-100">{{ verb.negformal }}</div>
            <div class="col-start-2 col-span-3 p-2 rounded text-lg bg-indigo-100">{{ verb.plural }}</div>
            <div class=" col-span-3 p-2 rounded text-lg bg-indigo-100">{{ verb.negplural }}</div>
        </div>
    </div>
</template>