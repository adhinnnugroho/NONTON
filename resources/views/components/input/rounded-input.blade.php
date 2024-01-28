<input
    {{ $attributes->merge([
        'class' =>
            "w-full px-3 py-1.5 min-h-10 text-sm font-normal text-gray-700 border border-gray-600 rounded-md
                                " . (isset($error) && !is_null($error) && $errors->has($error) ? 'border-red-500' : ''),
        'value' => isset($error) ? old($error) : '',
    ]) }}
    wire:loading.attr="disabled">

@if (isset($error) && !is_null($error))
    @error($error)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
@endif
