<!-- resources/views/components/mission-vision.blade.php -->

<div class="flex flex-col max-w-[1440px] px-4 sm:px-6 lg:px-8 text-black">
    <h1 class="text-[32px] text-[32px] md:text-[42px] font-semibold mt-8 sm:ml-9 text-center md:text-left">
        Mission & Vision
    </h1>

    <div class="flex flex-col lg:flex-row">
        <!-- Mission Section -->
        <div class="flex flex-col w-full mt-8 lg:w-1/2">
            <div class="flex items-center py-4 ml-4 sm:ml-16 lg:ml-24">
                <div class="h-8 border-r-4 sm:border-r-8 border-solid border-[#FDD247] mr-4"></div>
                <h1 class= text-[18px] sm:text-[22px] font-normal">Our Mission</h1>
            </div>
            <div class="py-2 ml-8 sm:ml-20 lg:ml-36">
                <p class="w-full sm:w-[482px] text-[14px] sm:text-[16px]">
                    The WVSU PIS commits to promote the safety of the Filipino people
                    from poisons through adequate clinical management of poisoned
                    patients, education and training of healthcare professionals and
                    the community, and research in toxicology.
                </p>
            </div>
        </div>

        <!-- Vision Section -->
        <div class="flex flex-col w-full mt-8 lg:w-1/2 lg:mt-0">
            <div class="flex items-center py-4 ml-4 sm:ml-16 lg:ml-24 lg:mr-24">
                <div class="h-8 border-r-4 sm:border-r-8 border-solid border-[#0067A2] mr-4"></div>
                <h1 class= text-[18px] sm:text-[22px] font-normal">Our Vision</h1>
            </div>
            <div class="py-2 ml-8 sm:ml-20 lg:ml-36">
                <p class="w-full sm:w-[482px] text-[14px] sm:text-[16px]">
                    To be an internationally recognized academic, community, and
                    research-oriented national poison center by 2030.
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-8 lg:flex-row">
        <!-- Objectives Section -->
        <div class="flex flex-col w-full mt-8 lg:w-1/2">
            <div class="flex items-center py-4 ml-4 sm:ml-16 lg:ml-24">
                <div class="h-8 border-r-4 sm:border-r-8 border-solid border-[#FDD247]"></div>
                <div class="ml-2 h-8 border-r-4 sm:border-r-8 border-solid border-[#0067A2] mr-4"></div>
                <h1 class= text-[18px] sm:text-[22px] font-normal">Objectives</h1>
            </div>
            <div class="py-2 ml-8 sm:ml-20 lg:ml-36">
                <ul class="list-disc list-inside w-full sm:w-[482px] text-[14px] sm:text-[16px]">
                    <li class="mb-4">Provide adequate and timely information on poisoning to health professionals and the community.</li>
                    <li class="mb-4">Provide sufficient provisions in the clinical management of poisoning cases.</li>
                    <li class="mb-4">Conduct regular trainings on poisoning for health professionals.</li>
                    <li class="mb-4">Publish relevant and timely research and articles on poisoning.</li>
                </ul>
            </div>
        </div>

        <!-- Rationale Section -->
        <div class="flex flex-col w-full mt-8 lg:w-1/2 lg:mt-0">
            <div class="flex items-center py-4 ml-4 sm:ml-16 lg:ml-24 lg:mr-24">
                <div class="h-8 border-r-4 sm:border-r-8 border-solid border-[#FDD247]"></div>
                <div class="ml-2 h-8 border-r-4 sm:border-r-8 border-solid border-[#0067A2] mr-4"></div>
                <h1 class= text-[18px] sm:text-[22px] font-normal">Rationale</h1>
            </div>
            <div class="py-2 ml-8 sm:ml-20 lg:ml-36">
                <p class="w-full sm:w-[482px] text-[14px] sm:text-[16px] line-clamp-6">
                    Poisoning remains an important global issue, thus poison centers,
                    which are specialized units that deal with the prevention,
                    diagnosis, and management of poisoning, were established worldwide...
                </p>
                <div class="mt-4">
                    <a href="{{ url('/rationale') }}">
                        <button class="drop-shadow-md hover:text-white font-semibold bg-[#FDD247] min-w-[80px] sm:px-8 px-4 hover:bg-[#0067A2] active:bg-[#0067A2]">
                            Read More
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
