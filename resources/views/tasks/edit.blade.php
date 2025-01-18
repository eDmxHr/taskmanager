<x-layout />
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Edit the task</h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="POST" action="/tasks/{{ $task->id }}">
            @csrf
            @method('PATCH')

            {{-- Task Title Input Field --}}
            <div>
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                    <input type="text" name="title" id="title" value="{{ $task->title }}" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-red-100 sm:text-sm/6">
                </div>
            </div>

            {{-- Task Description Input Field --}}
            <div>
                <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                <div class="mt-2">
                    <input type="text" name="description" id="description" value="{{ $task->description }}" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-red-100 sm:text-sm/6">
                </div>
            </div>
            <div class="flex space-x-10">
                <a href="/tasks/{{ $task->id }}" type="submit"
                    class="flex w-full justify-center px-3 py-1.5 text-sm/6 font-semibold text-red-500 hover:text-red-600 transition-colors duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus:outline-red-100">Cancel</a>
                <button type="submit" form="delete-form"
                    class="flex w-full justify-center rounded-md bg-red-400 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-red-500 transition-colors duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus:outline-red-100">Delete</button>
            </div>
            <button type="submit"
                class="flex w-full justify-center rounded-md bg-gray-400 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-gray-500 transition-colors duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus:outline-red-100">Update</button>
        </form>
    </div>
    <form action="/tasks/{{ $task->id }}" method="POST" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</div>
