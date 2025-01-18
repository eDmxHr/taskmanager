<x-layout />
<div class="mx-auto container bg-red-50 p-4 rounded-lg shadow-md space-y-2 w-1/3">
    <h2 class="text-2xl font-mono font-bold tracking-tight text-gray-700">{{ $task['title'] }}</h2>
    <p class="font-normal text-sm text-gray-500">{{ $task['description'] }}</p>
    <div class="flex justify-end">
        <a class="py-2 px-3 bg-blue-100 rounded-md w-1/6 hover:bg-blue-200 text-sm font-sans transition-colors duration-300 text-gray-600 text-center cursor-pointer"
            href="/tasks/{{ $task->id }}/edit">Edit</a>
    </div>
</div>
