<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]']) }}>
    {{ $slot }}
</button>
