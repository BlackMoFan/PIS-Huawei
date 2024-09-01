<nav class="flex flex-col justify-center align-center md:flex-row">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="rounded-md px-3 py-2 text-gray-400 ring-1 text-sm md:text-md ring-transparent transition hover:text-gray-400/70 focus:outline-none focus-visible:ring-[#FF2D20]"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            {{-- class="rounded-md px-3 py-2 w-full text-gray-400 ring-1 text-sm md:text-md ring-transparent transition hover:text-gray-400/70 focus:outline-none focus-visible:ring-[#FF2D20]" --}}
            class="text-black font-semibold bg-[#FDD247] min-w-[160px] md:px-10 hover:bg-[#f1d476] active:bg-[#f1d476] flex flex-row relative justify-center items-center py-2 px-3 outline-none;"
        >
            Log in
        </a>

        {{-- @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-gray-400 ring-1 text-sm md:text-md ring-transparent transition hover:text-gray-400/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Register
            </a>
        @endif --}}
    @endauth
</nav>
