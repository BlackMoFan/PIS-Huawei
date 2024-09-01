<!-- resources/views/livewire/sections/public/hero.blade.php -->
{{-- <div>
    <div class="relative hero">
        <div class="bg-cover bg-[#000000] bg-center w-full h-[620px] z-0">
            <!-- Use Embla Carousel Component -->
            <x-embla-carousel />
        </div>
        <div class="absolute inset-0 z-10 flex flex-col justify-center px-16">
            <h1 class="uppercase text-[#FDD247] text-[52px] mb-8" x-text="['Need Immediate Assistance?', 'Latest News', 'Latest News', 'Latest News', 'Latest News'][currentSlide]"></h1>
            <p class="text-white text-[18px] max-w-[830px]" x-text="[
                `When it comes to poison exposure, every second counts...`,
                `A new study finds that a chemical formed when we digest...`,
                `A new study shows that micro and nanoplastic particles...`,
                `A new study finds that more than 80% of intravenous drug users...`,
                `A new study finds that exposure to 'forever chemicals'...`
            ][currentSlide]"></p>
            <div class="flex flex-row items-center mt-10">
                <a href="{{ url('/help') }}">
                    <button class="text-black hover:text-white font-semibold bg-[#FDD247] min-w-[80px] sm:px-8 px-4 hover:bg-[#0067A2] active:bg-[#0067A2]">
                        Get Help Online
                    </button>
                </a>
                <span class="text-white text-[18px] mx-5">or</span>
                <button class="text-white hover:text-black font-semibold bg-[#0067A2] hover:bg-[#FDD247] active:bg-[#FDD247] sm:px-14 px-4">
                    <i class="mr-4 fa fa-phone"></i> Call 033-333-3333
                </button>
            </div>
        </div>
    </div>
    <div class="w-full relative h-[280px]">
        <img src="{{ asset('/images/menu-control.svg') }}" alt="menu-control" class="object-cover w-full h-full"/>
    </div>
</div> --}}

<div>
    <div x-data="{
        // Sets the time between each slides in milliseconds
        autoplayIntervalTime: 6000,
        slides: [
            {
                imgSrc: '{{ asset('/images/hero.webp') }}',
                imgAlt: 'Hero 1',
                title: 'Need Immediate Assistance?',
                description: 'When it comes to poison exposure, every second counts. Thats why were here, providing you with instant access to comprehensive poison information and guidance. Whether youre a concerned parent, caregiver, healthcare professional, or simply someone seeking knowledge, weve got you covered.',
            },
            {
                imgSrc: '{{ asset('/images/hero2.webp') }}',
                imgAlt: 'Hero 2',
                title: 'Latest News',
                description: 'A new study finds that a chemical formed when we digest a widely used sweetener is genotoxic, meaning it breaks up DNA. This could have implications for the safety of this sweetener, which is used in many food and beverage products.',
            },
            {
                imgSrc: '{{ asset('/images/hero3.webp') }}',
                imgAlt: 'Hero 3',
                title: 'Latest News',
                description: 'A new study shows that micro and nanoplastic particles can have endocrine disrupting effects, meaning they can interfere with the bodys hormones. This could have implications for human health, as exposure to these particles is becoming increasingly common.',
            },
            {
                imgSrc: '{{ asset('/images/hero4.webp') }}',
                imgAlt: 'Hero 3',
                title: 'Latest News',
                description: 'A new study finds that more than 80% of intravenous drug users test positive for fentanyl, a powerful synthetic opioid that is often mixed with other drugs. This is a serious public health concern, as fentanyl can be highly addictive and can cause fatal overdoses.',
            },
            {
                imgSrc: '{{ asset('/images/hero5.webp') }}',
                imgAlt: 'Hero 3',
                title: 'Latest News',
                description: 'A new study finds that exposure to forever chemicals during pregnancy may increase the risk of childhood obesity. These chemicals are a group of man-made chemicals that are known to be persistent in the environment and can build up in the body.',
            },
        ],
        currentSlideIndex: 1,
        isPaused: false,
        autoplayInterval: null,
        previous() {
            if (this.currentSlideIndex > 1) {
                this.currentSlideIndex = this.currentSlideIndex - 1
            } else {
                // If it's the first slide, go to the last slide
                this.currentSlideIndex = this.slides.length
            }
        },
        next() {
            if (this.currentSlideIndex < this.slides.length) {
                this.currentSlideIndex = this.currentSlideIndex + 1
            } else {
                // If it's the last slide, go to the first slide
                this.currentSlideIndex = 1
            }
        },
        autoplay() {
            this.autoplayInterval = setInterval(() => {
                if (! this.isPaused) {
                    this.next()
                }
            }, this.autoplayIntervalTime)
        },
        // Updates interval time
        setAutoplayInterval(newIntervalTime) {
            clearInterval(this.autoplayInterval)
            this.autoplayIntervalTime = newIntervalTime
            this.autoplay()
        },
    }" x-init="autoplay" class="relative w-full overflow-hidden">

        <!-- slides -->
        <!-- Change min-h-[50svh] to your preferred height size -->
        <div class="relative min-h-[620px] w-full">
            <template x-for="(slide, index) in slides">
                <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>

                    <!-- Title and description -->
                    <div class="absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 px-16 py-12 text-center lg:px-32 lg:py-14 bg-gradient-to-t from-slate-900/85 to-transparent">

                        <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-[#FDD247] uppercase" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                        {{-- <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white">LATEST NEWS</h3> --}}
                        <p class="w-full text-sm text-white lg:w-1/2 text-pretty" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>

                        <div class="z-50 flex flex-row items-center">
                            <a href="{{ route('help-form') }}">
                                <button
                                    type="button"
                                    class="text-black hover:text-white font-semibold bg-[#FDD247] min-w-[80px] px-8 py-2 hover:bg-[#0067A2] active:bg-[#0067A2]"
                                >
                                    Get Help Online
                                </button>
                            </a>

                            <span class="text-white text-[18px] mx-5">or</span>

                            <a href="tel:3332333">
                                <button
                                    title="Call 335-1554 or 333-2333"
                                    type="button"
                                    class="inline-flex gap-3 text-white hover:text-black font-semibold bg-[#0067A2] hover:bg-[#FDD247] active:bg-[#FDD247] px-8 py-2"
                                >
                                    {{-- <i class="mr-4 fas fa-phone"></i> --}}
                                    <x-zondicon-phone class="w-4" />
                                    Call 333-2333
                                </button>
                            </a>
                        </div>
                    </div>

                    <img class="absolute inset-0 object-cover w-full h-full text-slate-700 dark:text-slate-300" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                </div>
            </template>
        </div>

        <!-- Pause/Play Button -->
        <button type="button" class="absolute z-20 transition rounded-full opacity-50 bottom-5 right-5 text-slate-300 hover:opacity-80 focus-visible:opacity-80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 active:outline-offset-0" aria-label="pause carousel" x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
            <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd">
            </svg>
            <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
                <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd">
            </svg>
        </button>

        <!-- indicators -->
        <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
            <template x-for="(slide, index) in slides">
                <button class="transition rounded-full cursor-pointer size-2" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
            </template>
        </div>
    </div>

    <div class="w-full relative h-[280px]">
        <img src="{{ asset('/images/menu-control.svg') }}" alt="menu-control" class="object-cover w-full h-full"/>
    </div>

</div>
