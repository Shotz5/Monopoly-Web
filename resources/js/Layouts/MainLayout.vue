<template>
    <header>
        <nav class="flex items-center justify-between flex-wrap bg-gray-500 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <span class="font-semibold text-xl tracking-tight">Monopoly for the Web</span>
            </div>
            <div>
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">
                    Reset Board
                </a>
            </div>
        </nav>
    </header>

    <main>
        <slot>Default</slot>
    </main>
</template>