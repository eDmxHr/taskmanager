<x-layout />
<div class="mx-auto container bg-red-50 p-4 rounded-lg shadow-md space-y-2 w-1/3">
    <div class="flex justify-between items-center">
        <h5 class="mb-2 text-2xl font-mono font-bold tracking-tight text-gray-700">{{ $task['title'] }}</h5>
        <div class="flex justify-end space-x-1">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    class="text-gray-500 animate-pulse">
                    <path fill="currentColor" d="M4.25 12a7.75 7.75 0 1 1 15.5 0a7.75 7.75 0 0 1-15.5 0"
                        opacity=".5" />
                    <path fill="currentColor" d="M8.25 12a3.75 3.75 0 1 0 7.5 0a3.75 3.75 0 0 0-7.5 0" />
                </svg>
            </div>
            <p class="text-sm font-serif text-gray-500">{{ $task['status'] }}</p>
        </div>
    </div>
    <p class="font-normal text-sm text-gray-500">{{ $task['description'] }}</p>
    @can('edit-task', $task)
        <div class="flex justify-end">
            <a class="py-2 px-3 bg-blue-100 rounded-md w-1/6 hover:bg-blue-200 text-sm font-sans transition-colors duration-300 text-gray-600 text-center cursor-pointer"
                href="/tasks/{{ $task->id }}/edit">Edit</a>
        </div>
    @endcan

</div>
