@php
    use App\TaskStatus;

@endphp

<x-layout />
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Let's create a task</h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="POST" action="/tasks">
            @csrf
            {{-- Task Title Input Field --}}
            <div>
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                    <input type="text" name="title" id="title" placeholder="Learn a new skill" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-red-100 sm:text-sm/6">
                </div>
                @error('title')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            {{-- Task Description Input Field --}}
            <div>
                <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                <div class="mt-2">
                    <input type="text" name="description" id="description" required
                        placeholder="My new year resolution is to learn a new skill..."
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-red-100 sm:text-sm/6">
                </div>
                @error('description')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="status" class="block text-sm/6 font-medium text-gray-900 mb-2">Task Status</label>
                <select name="status" id="status"
                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-red-100 sm:text-sm/6">
                    <option value="pending">Pending</option>
                    <option value="in progress">In progress</option>
                    <option value="completed">Completed</option>
                </select>
            </div>
            <div class="flex space-x-10">
                <button type="submit"
                    class="flex w-full justify-center px-3 py-1.5 text-sm/6 font-semibold text-red-500 hover:text-red-600 transition-colors duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus:outline-red-100">Cancel</button>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-gray-400 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-gray-500 transition-colors duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus:outline-red-100">Create</button>
            </div>
        </form>
    </div>
</div>
