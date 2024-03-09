<template>
    <div class="grid grid-cols-13 grid-rows-13 align-center w-[1100px] h-[1100px] my-10 [&>*]:border [&>*]:border-black">
        <!-- Top Row -->
        <EdgeTile :config="props.boardConfig.C21" class="col-span-2 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C22" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C23" class="row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C24" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C25" class="row-span-2" color="bg-red-600"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C26" class="row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C27" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C28" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C29" class="row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C30" class="row-span-2" color="bg-yellow-300"></EdgeTile>
        <EdgeTile :config="props.boardConfig.C31" class="col-span-2 row-span-2"></EdgeTile>
        <!-- Right Row -->
        <RightTile :config="props.boardConfig.D32" class="col-start-12 row-start-3 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="props.boardConfig.D33" class="col-start-12 row-start-4 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="props.boardConfig.D34" class="col-start-12 row-start-5 col-span-2"></RightTile>
        <RightTile :config="props.boardConfig.D35" class="col-start-12 row-start-6 col-span-2" color="bg-green-500"></RightTile>
        <RightTile :config="props.boardConfig.D36" class="col-start-12 row-start-7 col-span-2"></RightTile>
        <RightTile :config="props.boardConfig.D37" class="col-start-12 row-start-8 col-span-2"></RightTile>
        <RightTile :config="props.boardConfig.D38" class="col-start-12 row-start-9 col-span-2" color="bg-blue-700"></RightTile>
        <RightTile :config="props.boardConfig.D39" class="col-start-12 row-start-10 col-span-2"></RightTile>
        <RightTile :config="props.boardConfig.D40" class="col-start-12 row-start-11 col-span-2" color="bg-blue-700"></RightTile>
        <!-- Bottom Row -->
        <EdgeTile :config="props.boardConfig.A11"  class="row-start-12 col-start-1 col-span-2 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A10"  class="row-start-12 col-start-3 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A9"  class="row-start-12 col-start-4 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A8"  class="row-start-12 col-start-5 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A7"  class="row-start-12 col-start-6 row-span-2" color="bg-slate-500"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A6"  class="row-start-12 col-start-7 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A5"  class="row-start-12 col-start-8 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A4"  class="row-start-12 col-start-9 row-span-2" color="bg-orange-900"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A3"  class="row-start-12 col-start-10 row-span-2"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A2" class="row-start-12 col-start-11 row-span-2" color="bg-orange-900"></EdgeTile>
        <EdgeTile :config="props.boardConfig.A1" class="row-start-12 col-start-12 col-span-2 row-span-2"></EdgeTile>
        <!-- Left Row -->
        <LeftTile :config="props.boardConfig.B20" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="props.boardConfig.B19" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="props.boardConfig.B18" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="props.boardConfig.B17" class="col-start-1 col-span-2" color="bg-orange-600"></LeftTile>
        <LeftTile :config="props.boardConfig.B16" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="props.boardConfig.B15" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
        <LeftTile :config="props.boardConfig.B14" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
        <LeftTile :config="props.boardConfig.B13" class="col-start-1 col-span-2"></LeftTile>
        <LeftTile :config="props.boardConfig.B12" class="col-start-1 col-span-2" color="bg-pink-600"></LeftTile>
    </div>
</template>

<script setup>
    import RightTile from './RightTile.vue';
    import LeftTile from './LeftTile.vue';
    import EdgeTile from './EdgeTile.vue';

    const props = defineProps({
        boardConfig: Object
    });
</script>
