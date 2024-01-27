<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'rounded-2xl bg-' . $color . ' py-[13px] text-center']) }}>
    {{ $slot }}
</button>
