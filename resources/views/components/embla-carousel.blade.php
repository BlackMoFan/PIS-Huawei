<!-- resources/views/components/embla-carousel.blade.php -->
<div x-data="{ currentSlide: 0, slides: [0, 1, 2, 3, 4], interval: null }"
     x-init="
        interval = setInterval(() => { currentSlide = (currentSlide + 1) % slides.length }, 8000);
        $watch('currentSlide', value => {
            clearInterval(interval);
            interval = setInterval(() => { currentSlide = (currentSlide + 1) % slides.length }, 8000);
        });
     " class="relative">
    <div class="inset-0 overflow-hidden">
        <div class="flex items-center justify-center h-full">
            <div class="w-full">
                <div class="flex">
                    <template x-for="(index, slideIndex) in slides" :key="slideIndex">
                        <div class="flex-shrink-0 w-full">
                            <div class="relative h-[620px]">
                                <div class="h-[620px] z-10">
                                    <img
                                        :src="`/images/slide-${slideIndex + 1}.jpg`"
                                        alt="hero"
                                        class="object-cover h-full w-full brightness-[.35]"
                                    />
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
