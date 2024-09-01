
<div class="flex flex-col justify-center w-full mx-auto bg-[#F4F3F2]">
    <div x-data="{ open: false }" class="flex flex-col w-full mx-auto md:px-12 md:items-center md:justify-between md:flex-row lg:px-32">
      <div class="flex items-center justify-between px-12 py-4 text-black max-width sm:px-2">
        {{-- <a class="inline-flex items-center gap-3 text-xl font-bold tracking-tight text-black" href="/">
          <span> ❖ </span>
          <span>Windstatic</span>
        </a> --}}
        <a href="/" class="flex items-center justify-center">
            <img
                src= {{ asset('images/logo.svg') }}
                alt="logo"
                width=118
                height=18
                class="drop-shadow-2xl shadow-black"
            />
            <div class="w-full text-center lg:ml-6">
                <h1 class="uppercase font-bold text-[14px] md:text-[17px] xl:text-[28px]">
                    Poison Information Service
                </h1>
                <hr class="border-b-[2px] border-solid border-[#FDD247] mx-auto ml-4 mt-1 mb-1" />
                <h1 class="uppercase font-bold text-[11px] md:text-[15px] xl:text-[22px]">
                    west visayas state university
                </h1>
            </div>
        </a>
        <button class="pl-2 rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden gap-3 p-4 px-5 overflow-hidden text-sm font-medium text-gray-500 transition-all duration-300 lg:justify-end md:px-0 md:pb-0 md:flex md:justify-start md:flex-row lg:p-0 md:mt-0">
        {{-- <a class="hover:text-black focus:outline-none focus:text-gray-500 md:ml-auto" href="#_">Features
        </a>
        <a class="hover:text-black focus:outline-none focus:text-gray-500" href="#_">About
        </a> --}}

        <div class="ml-10 lg:mx-60 md:block">
          <div class="relative border-2 border-black rounded-2xl">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg class="text-gray-400 size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
            <input type="text" disabled class="w-full py-2 pl-10 pr-4 text-black bg-white border border-gray-200 cursor-not-allowed focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-500 sm:text-sm rounded-xl placeholder:text-gray-400 focus:border-blue-500" placeholder="Search" aria-label="Search">
          </div>
        </div>

        <div class="hidden ml-5 md:block">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </div>
    </nav>
        {{-- <a class="inline-flex items-center justify-center w-full h-8 gap-3 px-5 py-3 text-xs font-medium text-white duration-200 bg-gray-900 rounded-lg md:w-auto hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-black" href="#_" role="button">
          Button
        </a> --}}

        <section :class="{'flex': open, 'hidden': !open}" class="flex-col gap-3 pb-5 leading-5 text-left">
            <div class="items-center px-8 mx-auto max-w-7xl lg:px-16 md:px-12">
                <div class="justify-center w-full mx-auto lg:p-10">
                <div class="flex flex-col w-64 mx-auto">
                    <div class="flex flex-col flex-grow overflow-y-auto">
                    <div class="flex flex-col flex-grow px-4">
                        <nav class="flex-1 space-y-1">
                        {{-- <p class="px-4 pt-4 text-xs font-bold text-black uppercase">
                            Account Navigation
                        </p> --}}
                        <ul class="flex items-center justify-center w-full mb-6 text-gray-400 text-md">
                            @if (Route::has('login'))
                                <livewire:welcome.navigation />
                            @endif
                            {{-- <li>
                            <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500" href="#_">
                                <ion-icon class="size-4 md hydrated" name="aperture-outline" role="img" aria-label="aperture outline"></ion-icon>
                                <span class="ml-4"> Dashboard </span>
                            </a>
                            </li>
                            <li>
                            <a class="inline-flex items-center w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-blue-500" href="#_">
                                <ion-icon class="size-4 md hydrated" name="trending-up-outline" role="img" aria-label="trending up outline"></ion-icon>
                                <span class="ml-4"> Performance </span>
                            </a>
                            </li> --}}
                        </ul>
                        {{-- <p class="px-4 pt-4 pb-2 text-xs font-bold text-black uppercase">
                            Website Navigation
                        </p> --}}
                        <ul class="flex flex-col items-center justify-center w-full gap-3 text-gray-400 text-md">
                            <li>
                                <a
                                    href="/PAInformation"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Poison Info
                                </a>
                            </li>
                            <li>
                                <a
                                    href="/statistics"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Statistics
                                </a>
                            </li>
                            <li>
                                <a
                                    href="/"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Facilities
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#linkages"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Linkages
                                </a>
                            </li>
                            <li>
                                <a
                                    href="/"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Laboratory
                                </a>
                            </li>
                            <li>
                                <a
                                    href="/antidotes"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Antidotes
                                </a>
                            </li>
                            <li>
                                <a
                                    href="/trainings"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Trainings
                                </a>
                            </li>
                            <li>
                                <a
                                    href="/helpFAQ"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Help & FAQ
                                </a>
                            </li>
                            <li>
                                <a
                                    href="/"
                                    class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
                                >
                                    Support Us
                                </a>
                            </li>
                        </ul>
                        </nav>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>


        {{-- <nav>
        <div :class="{'flex': open, 'hidden': !open}" class="flex-col gap-3 leading-5 text-left">
            <a
                href="/PAInformation"
                class="mx-4 font-semibold text-black text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Poison Info
            </a>
            <a
                href="/statistics"
                class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Statistics
            </a>
            <a
                href="/"
                class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Facilities
            </a>
            <a
                href="#linkages"
                class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Linkages
            </a>
            <a
                href="/"
                class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Laboratory
            </a>
            <a
                href="/antidotes"
                class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Antidotes
            </a>
            <a
                href="/trainings"
                class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Trainings
            </a>
            <a
                href="/helpFAQ"
                class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Help & FAQ
            </a>
            <a
                href="/"
                class="mx-4 font-semibold text-sm md:text-md hover:underline hover:text-[#FDD247] border-b-2 border-b-[#FDD247]"
            >
                Support Us
            </a>
        </div>
      </nav> --}}
    </div>
    <div class="md:flex bg-[#0067A2] h-[80px] items-center justify-between hidden">
        <div class="max-w-[1240px] mx-auto sm:px-2 px-6 py-4 ">
            <a
                href="/PAInformation"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Poison Info
            </a>
            <a
                href="/statistics"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Statistics
            </a>
            <a
                href="/"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Facilities
            </a>
            <a
                href="#linkages"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Linkages
            </a>
            <a
                href="/"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Laboratory
            </a>
            <a
                href="/antidotes"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Antidotes
            </a>
            <a
                href="/trainings"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Trainings
            </a>
            <a
                href="/helpFAQ"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Help & FAQ
            </a>
            <a
                href="/"
                class="text-white mx-4 font-semibold text-[9px] md:text-[13px] lg:text-[18px] hover:underline hover:text-[#FDD247]"
            >
                Support Us
            </a>
        </div>
    </div>
</div>

