@props([
    'name',
    'label',
    'type' => 'text',
    'value' => '',
    'required' => false
])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input
        id="{{ $name }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $type === 'password' ? '' : $value }}"
        {{ $required ? 'required' : '' }}
        {{ $attributes->merge(['class' => 'form-control']) }}
    >
    @error($name)
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>
