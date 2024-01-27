<input
    {{ $attributes->merge(['class' => 'rounded-2xl bg-form-bg py-[13px] px-7 w-full focus:outline-alerange focus:outline-none']) }} />

@if (isset($error) && !is_null($error))
    @error($error)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
@endif
