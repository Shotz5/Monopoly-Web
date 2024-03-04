<template>
    <div class="grid grid-rows-13 align-center w-[650px] h-[650px] my-10">
        <EdgeRow :last_id="0" :position="props.position" />
        <MiddleRow v-for="n in 9" :last_id="((n * 2) + 9)" :position="props.position" />
        <EdgeRow :last_id="29" :position="props.position" />
    </div>
</template>

<script setup>
    import EdgeRow from './EdgeRow.vue';
    import MiddleRow from './MiddleRow.vue';

    const props = defineProps({
        position: Number
    });
</script>
