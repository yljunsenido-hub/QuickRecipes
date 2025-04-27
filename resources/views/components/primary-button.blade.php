<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-center bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded']) }}>
    {{ $slot }}
</button>
