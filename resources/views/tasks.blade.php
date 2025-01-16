<x-layout />
@foreach ($tasks as $task)
    <a href="/tasks/{{ $task['id'] }}">
        <x-card>
            <x-slot:title>{{ $task['title'] }}</x-slot:title>
            <x-slot:description>{{ Str::limit($task['description'], 100) }}</x-slot:title>
        </x-card>
    </a>
@endforeach
