<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn text-base bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]']) }}>
    {{ $slot }}
</button>
