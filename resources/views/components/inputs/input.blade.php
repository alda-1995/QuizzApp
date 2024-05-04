@props([
    'label' => '',
    'name' => '',
    'id' => '',
    'value' => '',
    'type' => '',
    'required' => false,
    'autofocus' => false,
    'placeholder' => '',
])
<div class="flex flex-col mb-4">
    @if (isset($label))
        <label for="{{ $name }}" class="block font-medium mb-2 title-btn text-natural">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
        class="bg-accent border-[2px] border-neutral text-primary 
        rounded-md focus:ring-base-200 outline-none
        focus:border-base-200 block w-full
        py-2 px-4  @error($name) error-input @enderror"
        value="{{ old($name, $value) }}" @if ($required) required @endif
        @if ($autofocus) autofocus @endif placeholder="{{ $placeholder }}">
    @error($name)
        <span class="block text-red-400 mt-4 small" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
