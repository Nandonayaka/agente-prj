@props([
    'label',
    'name',
    'type' => 'text',
    'value' => old($name)
    ])

<div class="mb-4">
    <label class="block text-sm mb-1">{{ $label }}</label>

    <input 
        type="{{ $type }}" 
        name="{{ $name }}"
        value="{{ $value }}"
        {{ $attributes->merge([
            'class' => 'w-full border px-3 py-2 rounded-lg'
        ]) }}
    >

    @error($name)
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>