@props([
    'logos' => [
        ['src' => 'DOH.svg', 'alt' => 'DOH'],
        ['src' => 'DICT.svg', 'alt' => 'DICT'],
        ['src' => 'DA.svg', 'alt' => 'DA'],
        ['src' => 'DTI.svg', 'alt' => 'DTI'],
        ['src' => 'WVSUMC.svg', 'alt' => 'WVSUMC'],
        ['src' => 'WVSU.svg', 'alt' => 'WVSU'],
        ['src' => 'DOST.svg', 'alt' => 'DOST'],
        ['src' => 'FDA.svg', 'alt' => 'FDA'],
    ]
])

<div class="flex flex-col mt-10" id="linkages">
    <h1 class="text-black text-[32px] md:text-[42px] font-semibold px-16 text-center md:text-left">Linkages</h1>
    <div class="flex justify-center">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($logos as $logo)
                <div
                    x-data="{ showTooltip: false }"
                    @mouseenter="showTooltip = true"
                    @mouseleave="showTooltip = false"
                    class="h-[280px] w-[300px] flex justify-center items-center relative"
                >
                    <img
                        src="{{ asset('images/linkages/' . $logo['src']) }}"
                        alt="{{ $logo['alt'] }}"
                        class="h-[162px] w-[{{ $logo['alt'] === 'DICT' ? '248' : '162' }}px] hover:cursor-pointer hover:h-[202px] hover:w-[{{ $logo['alt'] === 'DICT' ? '280' : '202' }}px] ease-in duration-300"
                    />

                    <!-- Tooltip -->
                    <div
                        x-show="showTooltip"
                        x-transition
                        class="absolute px-4 py-2 mb-2 text-sm text-white bg-black rounded-lg opacity-75 bottom-full"
                    >
                        {{ $logo['alt'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
