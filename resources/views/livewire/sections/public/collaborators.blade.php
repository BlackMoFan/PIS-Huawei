@props([
    'logos' => [
        ['src' => 'collaborators/spark_logo.png', 'alt' => 'Spark']
    ]
])

<div class="flex flex-col">
    <h1 class="text-black text-[32px] md:text-[42px] font-semibold px-16 text-center md:text-left">Collaborators</h1>
    <div class="flex items-center justify-center mt-8">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Collaborator Logos -->
            @foreach($logos as $logo)
                <div
                    x-data="{ showTooltip: false }"
                    @mouseenter="showTooltip = true"
                    @mouseleave="showTooltip = false"
                    class="h-[280px] w-[280px] relative flex justify-center items-center rounded-full"
                >
                    <img
                        src="{{ asset('images/' . $logo['src']) }}"
                        alt="{{ $logo['alt'] }}"
                        class="object-contain rounded-full hover:cursor-pointer hover:h-[280px] hover:w-[280px] ease-in duration-300"
                        width="200"
                        height="200"
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
