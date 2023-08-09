<template>
    <div class="p-4">
        <div class="text-gray-500 font-medium mb-1 flex justify-start items-center">
            <slot name="title"/>
        </div>
        <div class="text-gray-200 mt-3">
            <slot name="description"/>
        </div>
        <div class="text-gray-200 mt-3">
            <slot name="extra"/>
        </div>
    </div>
</template>
