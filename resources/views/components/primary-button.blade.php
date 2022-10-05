<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-currentGold border border-transparent rounded-ls font-semibold text-xs text-white uppercase tracking-widest hover:bg-hoverGold active:bg-hoverGold focus:outline-none focus:border-hoverGold focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
