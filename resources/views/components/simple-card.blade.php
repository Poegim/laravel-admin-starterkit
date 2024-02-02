<div
    {{ $attributes->merge(['class' => 'bg-red-500 rounded-lg bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200']) }} >
    <div class="block py-4 w-full">
        <div class="w-full px-2">
            {{ $slot }}
        </div>
    </div>
</div>
