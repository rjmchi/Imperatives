<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps({
    status: String,
})

const form = useForm({
    verb: '',
    informal: '',
    neginformal: '',
    formal: '',
    negformal: '',
    plural: '',
    negplural: '',
});

const submit = () => {
    form.post(route('verb.store'), {
        onSuccess: () => form.reset(),
        preserveScroll: true,
    });
};
</script>

<template>

    <h1 class="mt-3 text-2xl font-bold text-center">
        Add a Verb
    </h1>

    <div v-if="status" class="mb-4 text-center text-sm font-medium text-green-600">
        {{ status }}
    </div>

    <form @submit.prevent="submit" class="flex flex-col gap-6 w-1/2 mx-auto border border-neutral-300 rounded p-3">
        <div class="grid gap-6">
            <div class="grid gap-2">
                <Label for="verb">Verb:</Label>
                <Input id="verb" type="text" autofocus :tabindex="1" v-model="form.verb" placeholder="Infinitive..." />
                <InputError :message="form.errors.verb" />
            </div>
            <div class="flex">
                <div class="grid gap-2">
                    <Label for="informal">Informal:</Label>
                    <Input id="informal" type="text" autofocus :tabindex="2" v-model="form.informal"
                        placeholder="Informal..." />
                    <InputError :message="form.errors.informal" />
                </div>
                <div class="grid gap-2">
                    <Label for="neginformal">Negative Informal:</Label>
                    <Input id="neginformal" type="text" autofocus :tabindex="3" v-model="form.neginformal"
                        placeholder="Negative Informal..." />
                    <InputError :message="form.errors.neginformal" />
                </div>
            </div>
            <div class="flex">
                <div class="grid gap-2">
                    <Label for="formal">Formal:</Label>
                    <Input id="formal" type="text" autofocus :tabindex="4" v-model="form.formal"
                        placeholder="Formal..." />
                    <InputError :message="form.errors.neginformal" />
                </div>
                <div class="grid gap-2">
                    <Label for="negformal">Negative Formal:</Label>
                    <Input id="negiormal" type="text" autofocus :tabindex="5" v-model="form.negformal"
                        placeholder="Negative Formal..." />
                    <InputError :message="form.errors.negformal" />
                </div>
            </div>
            <div class="flex">

                <div class="grid gap-2">
                    <Label for="plural">Plural:</Label>
                    <Input id="plural" type="text" autofocus :tabindex="6" v-model="form.plural"
                        placeholder="Plural..." />
                    <InputError :message="form.errors.plural" />
                </div>

                <div class="grid gap-2">
                    <Label for="negplural">Negative Plural:</Label>
                    <Input id="negplural" type="text" autofocus :tabindex="7" v-model="form.negplural"
                        placeholder="Negative Plural..." />
                    <InputError :message="form.errors.negplural" />
                </div>
            </div>

            <Button type="submit" class="mt-4 " :tabindex="8" :disabled="form.processing">
                <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                Submit
            </Button>
        </div>

    </form>
</template>
