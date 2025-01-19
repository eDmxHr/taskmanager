<div class=" mt-28">
    <header class="absolute inset-x-0 top-0 z-50 bg-gray-100">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
            </div>
            <div class="flex lg:hidden">
            </div>
            <div class="lg:flex lg:gap-x-12">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="tasks" :active="request()->is('tasks')">Tasks</x-nav-link>
                <x-nav-link href="about" :active="request()->is('about')">About</x-nav-link>
            </div>
            @guest
                <div class="lg:flex lg:flex-1 lg:justify-end space-x-4">
                    <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                    <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                </div>
            @endguest
            @auth
                <div class="lg:flex lg:flex-1 lg:justify-end space-x-4">
                    <form action="/logout" method="POST">
                        @csrf
                        <x-nav-link href="/logout" class="underline hover:text-gray-600 transition-colors duration-300">Log
                            Out </x-nav-link>
                    </form>
                </div>
            @endauth
        </nav>
    </header>
</div>
