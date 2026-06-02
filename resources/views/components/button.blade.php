@props(['type' => 'button'])

    <button type="{{ $type }}" {{ $attributes->merge([
            'class' => 'px-4 py-2 rounded bg-blue-500'
                ]) }}>
            {{ $slot }}
    </button>