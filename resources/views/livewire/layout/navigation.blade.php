<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/');
    }
}; ?>

@props(['activeTab' => ''])

<div x-data="{ isSidebarOpen: false, isDropdownOpen: false }" class="relative">
    <!-- Button to toggle sidebar on mobile -->
    <button @click="isSidebarOpen = !isSidebarOpen" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>

    <!-- Sidebar for mobile and desktop -->
    <aside id="logo-sidebar" :class="{ '-translate-x-full': !isSidebarOpen, 'translate-x-0': isSidebarOpen }" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-[#0067A2] border-r border-black" aria-label="Sidebar">
        <div class="flex flex-col h-full px-3 py-4 overflow-y-auto">
            <div>
                <ul>
                    <!-- Logo -->
                    <li>
                        <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-white">
                            <img class="w-16 h-16 ml-3" src="{{ asset('images/logo.svg') }}" alt="logo" />
                        </a>
                    </li>

                    <!-- Navigation Links -->
                    @foreach([
                        'Enquiries' => 'admin.enquiries'
                    ] as $label => $routeName)
                        <li @click="activeTab = '{{ $label }}'">
                            <a href="{{ route($routeName) }}"
                               class="{{ request()->routeIs($routeName) ? 'bg-gradient-to-r from-[#0067A2] from-10% via-[#0067A2] via-30% to-[#fff] to-90% border-l-4 border-[#FDD247] flex items-center p-2 text-base font-light text-white rounded-lg' : 'flex items-center p-2 text-base font-light text-white rounded-lg hover:bg-gray-100' }}">
                                @include('icons.' . Str::kebab($label))
                                <span class="ml-3">{{ $label }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Settings Dropdown at the bottom -->
            <div class="mt-auto">
                <button @click="isDropdownOpen = !isDropdownOpen" class="flex items-center w-full p-2 mt-4 text-white bg-[#0067A2] rounded-lg">
                    <div x-data="{ name: '{{ auth()->user()->name }}' }" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                    <svg class="w-4 h-4 fill-current ms-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="isDropdownOpen" @click.away="isDropdownOpen = false" class="mt-2 bg-white rounded-lg shadow-lg">
                    <ul>
                        <li>
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                                {{ __('Profile') }}
                            </a>
                        </li>
                        <!-- Authentication -->
                        <li>
                            <button wire:click="logout" class="w-full px-4 py-2 text-left text-gray-800 hover:bg-gray-100">
                                {{ __('Log Out') }}
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>

    <!-- Mobile Overlay -->
    <div x-show="isSidebarOpen" @click="isSidebarOpen = false" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-30 bg-gray-900 bg-opacity-50 sm:hidden"></div>
</div>
