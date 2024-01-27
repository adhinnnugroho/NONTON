<input
    {{ $attributes->merge([
        'class' =>
            "w-full px-3 py-1.5 min-h-10 text-sm font-normal text-gray-700
            bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition
            ease-in-out m-0 ease-in-out m-0 focus:outline-none focus:text-gray-700 focus:ring-0 focus:border-gray-300
            dark:bg-gray-700 dark:text-gray-200
            disabled:bg-gray-100 disabled:border disabled:border-gray-300 disabled:text-gray-900 disabled:text-sm disabled:rounded-lg
            disabled:cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:disabled:!text-gray-400
            " . (isset($error) && !is_null($error) && $errors->has($error) ? 'border-red-500' : ''),
        'value' => isset($error) ? old($error) : '',
    ]) }}
    wire:loading.attr="disabled">

@if (isset($error) && !is_null($error))
    @error($error)
        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
    @enderror
@endif
