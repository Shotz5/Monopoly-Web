<template>
    <div class="grid grid-cols-13 grid-rows-13 align-center w-[1100px] h-[1100px] [&>*]:border [&>*]:border-black">
        <!-- Top Row -->
        <EdgeTile :config="props.boardConfig[21]" :position="props.position" class="col-span-2 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[22]" :position="props.position" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="props.boardConfig[23]" :position="props.position" class="row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[24]" :position="props.position" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="props.boardConfig[25]" :position="props.position" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="props.boardConfig[26]" :position="props.position" class="row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[27]" :position="props.position" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="props.boardConfig[28]" :position="props.position" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="props.boardConfig[29]" :position="props.position" class="row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[30]" :position="props.position" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="props.boardConfig[31]" :position="props.position" class="col-span-2 row-span-2"></EdgeTile>
        <!-- Right Row -->
        <RightTile :config="props.boardConfig[32]" :position="props.position" class="col-start-12 row-start-3 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="props.boardConfig[33]" :position="props.position" class="col-start-12 row-start-4 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="props.boardConfig[34]" :position="props.position" class="col-start-12 row-start-5 col-span-2"></RightTile>
        <RightTile :config="props.boardConfig[35]" :position="props.position" class="col-start-12 row-start-6 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="props.boardConfig[36]" :position="props.position" class="col-start-12 row-start-7 col-span-2"></RightTile>
        <RightTile :config="props.boardConfig[37]" :position="props.position" class="col-start-12 row-start-8 col-span-2"></RightTile>
        <RightTile :config="props.boardConfig[38]" :position="props.position" class="col-start-12 row-start-9 col-span-2" color="bg-blue-700"></RightTile>
        <RightTile :config="props.boardConfig[39]" :position="props.position" class="col-start-12 row-start-10 col-span-2"></RightTile>
        <RightTile :config="props.boardConfig[40]" :position="props.position" class="col-start-12 row-start-11 col-span-2" color="bg-blue-700"></RightTile>
        <!-- Bottom Row -->
        <EdgeTile :config="props.boardConfig[11]" :position="props.position" class="row-start-12 col-start-1 col-span-2 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[10]" :position="props.position" class="row-start-12 col-start-3 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="props.boardConfig[9]"  :position="props.position" class="row-start-12 col-start-4 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="props.boardConfig[8]"  :position="props.position" class="row-start-12 col-start-5 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[7]"  :position="props.position" class="row-start-12 col-start-6 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="props.boardConfig[6]"  :position="props.position" class="row-start-12 col-start-7 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[5]"  :position="props.position" class="row-start-12 col-start-8 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[4]"  :position="props.position" class="row-start-12 col-start-9 row-span-2" color="bg-orange-900"></EdgeTile>
        <EdgeTile :config="props.boardConfig[3]"  :position="props.position" class="row-start-12 col-start-10 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig[2]"  :position="props.position" class="row-start-12 col-start-11 row-span-2" color="bg-orange-900"></EdgeTile>
        <EdgeTile :config="props.boardConfig[1]"  :position="props.position" class="row-start-12 col-start-12 col-span-2 row-span-2"></EdgeTile>
        <!-- Left Row -->
        <LeftTile :config="props.boardConfig[20]" :position="props.position" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="props.boardConfig[19]" :position="props.position" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="props.boardConfig[18]" :position="props.position" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="props.boardConfig[17]" :position="props.position" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="props.boardConfig[16]" :position="props.position" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="props.boardConfig[15]" :position="props.position" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
        <LeftTile :config="props.boardConfig[14]" :position="props.position" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
        <LeftTile :config="props.boardConfig[13]" :position="props.position" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="props.boardConfig[12]" :position="props.position" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
    </div>
</template>

<script setup>
    import RightTile from './RightTile.vue';
    import LeftTile from './LeftTile.vue';
    import EdgeTile from './EdgeTile.vue';

    const props = defineProps({
        boardConfig: Object,
        position: Number,
    });
</script>
