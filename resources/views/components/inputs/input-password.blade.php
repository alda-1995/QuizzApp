@props([
    'label' => '',
    'name' => '',
    'id' => '',
    'value' => '',
    'required' => false,
    'autofocus' => false,
    'placeholder' => '',
])
<div class="flex flex-col mb-4">
    @if (isset($label))
        <label for="{{ $name }}" class="block font-medium mb-2 title-btn text-natural">{{ $label }}</label>
    @endif
    <div class="relative password-inputs">
        <input type="password" id="{{ $id }}" name="{{ $name }}"
            class="bg-accent border-[2px] border-neutral text-primary 
            rounded-md focus:ring-base-200 outline-none
            focus:border-base-200 block w-full
            py-2 px-4  @error($name) error-input @enderror"
            value="{{ old($name, $value) }}" @if ($required) required @endif
            @if ($autofocus) autofocus @endif placeholder="{{ $placeholder }}">
        <div class="btn-password absolute top-1/2 -translate-y-1/2 cursor-pointer right-2 h-8 w-8 flex justify-center items-center text-base-100">
            <div id="eye-hidden">
                <span class="iconify" data-icon="mdi-eye"></span>
            </div>
            <div id="eye-show" class="hidden">
                <span class="iconify" data-icon="mdi-eye-off"></span>
            </div>
        </div>
    </div>
    @error($name)
        <span class="block text-red-400 mt-4 small" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
