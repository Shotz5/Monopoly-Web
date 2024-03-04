<template>
    <div class="grid row-span-2 grid-cols-13">
        <Tile :position="props.position" :tile_id="(0 + props.last_id)" class="col-span-2"></Tile>
        <Tile :position="props.position" :tile_id="(1 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(2 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(3 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(4 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(5 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(6 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(7 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(8 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(9 + props.last_id)"></Tile>
        <Tile :position="props.position" :tile_id="(10 + props.last_id)" class="col-span-2"></Tile>
    </div>
</template>

<script setup>
    import Tile from './Tile.vue';

    const props = defineProps({
        last_id: Number,
        position: Number,
    });
</script>
