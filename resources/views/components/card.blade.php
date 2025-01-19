<div class="p-4 rounded-lg shadow-lg bg-red-50 hover:bg-red-100 transition-colors duration-300">
    <div class="flex justify-between items-center">
        <h5 class="mb-2 text-2xl font-mono font-bold tracking-tight text-gray-700">{{ $title }}</h5>
        <div class="flex justify-end space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                class="text-gray-500 animate-pulse">
                <path fill="currentColor" d="M4.25 12a7.75 7.75 0 1 1 15.5 0a7.75 7.75 0 0 1-15.5 0" opacity=".5" />
                <path fill="currentColor" d="M8.25 12a3.75 3.75 0 1 0 7.5 0a3.75 3.75 0 0 0-7.5 0" />
            </svg>
            <p class="text-sm font-serif text-gray-500">{{ $status }}</p>
        </div>
    </div>
    <p class="mb-3 font-normal text-sm text-gray-500">{{ $description }}</p>
</div>
