@props([
'label',
'name',
'type' => 'text',
'placeholder' => '',
'value' => ''
])

<div>

    <label
        for="{{ $name }}"
        class="label">

        {{ $label }}

    </label>

    <input

        id="{{ $name }}"

        type="{{ $type }}"

        name="{{ $name }}"

        value="{{ old($name, $value) }}"

        placeholder="{{ $placeholder }}"

        {{ $attributes->merge([
            'class' => 'input'
        ]) }}>

    @error($name)

    <p class="text-red-500 text-sm mt-2">

        {{ $message }}

    </p>

    @enderror

</div>