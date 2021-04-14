<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn bg-dark text-white inline-flex items-center px-4 py-2 rounded-md font-semibold  uppercase tracking-widest   disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
