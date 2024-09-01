@props(['activeTab' => 0])

<button @click="isSidebarOpen = !isSidebarOpen" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="logo-sidebar" x-data="{ isSidebarOpen: false }" :class="{ '-translate-x-full': !isSidebarOpen, 'translate-x-0': isSidebarOpen }" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#0067A2] dark:bg-gray-800 border-r border-black">
        <ul>
            <li>
                <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-white">
                    <img class="w-16 h-16 ml-3" src={{ asset('images/logo.svg') }} alt="logo" />
                </a>
            </li>
            {{-- @foreach([
                'Overview' => 'admin.overview',
                'Cases' => 'admin.cases',
                'Latest News' => 'admin.latest-news',
                'Poison Awareness' => 'admin.poison-awareness',
                'Community Forums' => 'admin.community-forums',
                'Antidotes' => 'admin.antidotes',
                'Enquiries' => 'admin.enquiries'
            ] as $label => $routeName) --}}

            @foreach([
                'Enquiries' => 'admin.enquiries'
            ] as $label => $routeName)
                <li @click="activeTab = '{{ $label }}'">
                    <a href="{{ route($routeName) }}"
                       class="{{ request()->routeIs($routeName) ? 'bg-gradient-to-r from-[#0067A2] from-10% via-[#0067A2] via-30% to-[#fff] to-90% border-l-4 border-[#FDD247] flex items-center p-2 text-base font-light text-white rounded-lg bg-hover:bg-gray-100 group' : 'flex items-center p-2 text-base font-light text-white rounded-lg bg-hover:bg-gray-100 group' }}">
                        @include('icons.' . Str::kebab($label))
                        <span class="ml-3">{{ $label }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
