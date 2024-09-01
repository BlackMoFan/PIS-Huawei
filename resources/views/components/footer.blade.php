<!-- resources/views/components/footer.blade.php -->

@props([
    'footerLinks' => [
        [
            'title' => 'About',
            'links' => [
                ['title' => 'How it works', 'url' => '/about'],
                ['title' => 'Featured', 'url' => '/'],
                ['title' => 'Partnership', 'url' => '/'],
                ['title' => 'Business Relation', 'url' => '/'],
                ['title' => 'Team', 'url' => '/'],
            ]
        ],
        [
            'title' => 'Company',
            'links' => [
                ['title' => 'Events', 'url' => '/'],
                ['title' => 'Blog', 'url' => '/'],
                ['title' => 'Podcast', 'url' => '/'],
                ['title' => 'Invite a friend', 'url' => '/'],
            ]
        ],
        [
            'title' => 'Socials',
            'links' => [
                ['title' => 'Discord', 'url' => '/'],
                ['title' => 'Instagram', 'url' => '/'],
                ['title' => 'Twitter', 'url' => '/'],
                ['title' => 'Facebook', 'url' => '/'],
            ]
        ],
    ]
])

<footer class="flex flex-col mt-5 border-t border-gray-100 text-black-100 justify-content">
    <div class="flex flex-col flex-wrap justify-between gap-5 px-6 py-6 md:flex-row sm:px-16">
        <!-- Logo and Information -->
        <div class="flex flex-col items-start justify-start gap-6">

            <div class="flex flex-row items-center gap-8 justify-content">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo.svg') }}" alt="logo" class="object-contain w-32 h-auto" />
                </a>
                <a href="/">
                    <p class="text-base hover:font-bold font-semibold hover:text-[#0067A2]">
                        Poison Information Service
                    </p>
                </a>
            </div>

            <p class="text-base">
                <span class="font-semibold">Weekdays Operational Hours:</span><br />
                7:00 AM - 5:00 PM & 5:00 PM - 11:00 PM
            </p>
            <p class="text-base">
                <span class="font-semibold">Weekends and Public Holidays:</span><br />
                8:00 AM - 5:00 PM
            </p>
        </div>

        <!-- Footer Links -->
        <div class="flex flex-row gap-6 lg:items-center lg:justify-content">
            @foreach ($footerLinks as $item)
                <div class="flex flex-col">
                    <h3 class="text-lg font-bold">{{ $item['title'] }}</h3>
                    <div class="flex flex-col gap-3 mt-3">
                        @foreach ($item['links'] as $link)
                            <a href="{{ $link['url'] }}" class="text-base hover:font-semibold hover:text-[#0067A2]">
                                {{ $link['title'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer Bottom Section -->
    <div class="flex flex-col flex-wrap items-center justify-between px-6 py-6 mt-10 border-t border-gray-100 md:flex-row sm:px-16">
        <p>© Poison Information Service 2023</p>
        <p class="mt-2 md:ml-8 md:mt-0">All Rights Reserved</p>

        <div class="flex flex-col gap-4 mt-4 md:flex-row md:mt-0">
            <a href="/" class="text-base hover:font-semibold hover:text-[#0067A2]">
                Privacy & Policy
            </a>
            <a href="/" class="text-base hover:font-semibold hover:text-[#0067A2]">
                Terms & Condition
            </a>
        </div>
    </div>
</footer>
