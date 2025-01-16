@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-400 rounded-xl text-sm/6 font-semibold text-gray-900 px-3 py-1' : 'text-sm/6 font-semibold text-gray-900 px-3 py-1' }}">{{ $slot }}</a>
