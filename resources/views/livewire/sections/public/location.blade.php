<!-- resources/views/components/location.blade.php -->

{{-- <div class="flex flex-col px-4 mb-20 sm:px-16">
    <h1 class="text-black text-[32px] md:text-[42px] font-semibold mt-20 text-center md:text-left">
        Where we are located
    </h1>
    <div class="relative flex items-center justify-center mt-10">
        <div class="relative flex items-center justify-center w-full max-w-6xl overflow-hidden mt-14 rounded-2xl">
            <img src="{{ asset('images/location/map.png') }}" alt="map" class="object-contain rounded-lg brightness-[.9] w-full h-auto" />
            <div x-data="{ open: false }" class="relative group">
                <div class="absolute z-20 cursor-pointer" @mouseenter="open = true" @mouseleave="open = false">
                    <img src="{{ asset('images/location/map-pin.png') }}" alt="map-pin" class="object-cover w-16 h-16 mt-6 sm:w-20 sm:h-20" />
                </div>
                <div x-show="open" class="absolute bottom-10 left-1/2 transform -translate-x-1/2 w-full max-w-lg h-[360px] sm:max-w-xl sm:w-[560px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1689247461747!6m8!1m7!1szeOC6IQ5WAT3_17xOnYs3g!2m2!1d10.7124106073564!2d122.5604242779992!3f277.27604139346255!4f15.864990502272619!5f0.7820865974627469"
                        allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="w-full h-full rounded-2xl"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row items-center mt-10">
        <x-fas-location-dot class="mr-2 text-4"/>
        <h1 class="font-semibold text-[14px] sm:text-[16px]">
            WVSU PoisonWatch
            <span class="font-normal"> - BINHI Bldg. Magsaysay Road, West Visayas State University, Iloilo City, Iloilo, 5000</span>
        </h1>
    </div>
</div> --}}

<div x-data="{ showMap: false }" class="flex flex-col mb-20 text-black sm:px-6 md:px-8 lg:px-16">
    <h1 class="text-black text-[42px] font-semibold mt-20 text-center md:text-left">Where we are located</h1>
    <div class="flex items-center justify-center px-8">
        <div class="relative flex items-center justify-center mt-14 map-box rounded-2xl">
            <img src="{{ asset('images/location/map.png') }}" alt="map" width="1220" height="810" class="object-contain rounded-lg brightness-[.9]" />
            <div class="group absolute z-20 hover:cursor-pointer mr-[297px]" @mouseenter="showMap = true" @mouseleave="showMap = false">
                <div class="max-w-[80px]">
                    <img src="{{ asset('images/location/map-pin.png') }}" alt="map-pin" width="80" height="80" class="object-cover mt-6" />
                </div>
                <div x-show="showMap" class="absolute bottom-10 left-[85px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1689247461747!6m8!1m7!1szeOC6IQ5WAT3_17xOnYs3g!2m2!1d10.7124106073564!2d122.5604242779992!3f277.27604139346255!4f15.864990502272619!5f0.7820865974627469" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-2xl w-[280px] h-[180px] lg:w-[560px] lg:h-[360px]"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-row items-center px-8 mx-auto mt-10">
        <x-fas-map-location-dot class="w-6 mr-2" />
        <h1 class="font-semibold text-[16px]">
            WVSU PoisonWatch
            <span class="font-normal"> - BINHI Bldg. Magsaysay Road, West Visayas State University, Iloilo City, Iloilo, 5000</span>
        </h1>
    </div>
</div>
