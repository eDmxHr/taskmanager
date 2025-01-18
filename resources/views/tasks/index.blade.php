<x-layout />
<div class="container mx-auto">
    <div class="flex justify-end mb-4">
        <a class="py-2 px-3 bg-blue-100 rounded-md w-1/7 hover:bg-blue-200 text-sm font-sans transition-colors duration-300 text-gray-600 text-center cursor-pointer"
            href="/tasks/create">Create a task</a>
    </div>
    <div class=" lg:grid lg:grid-cols-3 items-center gap-6 md:grid md:grid-cols-2 sm:grid sm:grid-cols-1">
        @foreach ($tasks as $task)
            <a href="/tasks/{{ $task->id }}">
                <x-card>
                    <x-slot:title>{{ $task['title'] }}</x-slot:title>
                    <x-slot:description>{{ Str::limit($task['description'], 100) }}</x-slot:title>
                </x-card>
            </a>
        @endforeach
    </div>
    {{-- paginator links --}}
    <div class="mt-6">
        {{ $tasks->links() }}
    </div>
</div>
