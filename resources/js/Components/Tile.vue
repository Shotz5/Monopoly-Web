<template>
    <div :id=props.tile_id class="flex items-center">
        <span v-if="props.tile_id == props.position">*</span>
    </div>
</template>

<script setup>
    const props = defineProps({
        tile_id: Number,
        position: Number
    });
</script>
