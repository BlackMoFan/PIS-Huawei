<!-- resources/views/components/team.blade.php -->

<div class="flex flex-col px-4 mt-10 sm:px-6 md:px-8 lg:px-16">
    <h1 class="text-black text-[32px] md:text-[42px] font-semibold mb-8 mt-6 text-center md:text-left sm:text-left">
        Meet the Team
    </h1>
    <div class="flex justify-center">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 sm:gap-8 md:gap-10">
            @php
                $team_members = [
                    ['name' => 'Neil Clarence Diaz', 'image' => '/images/team/DEV_DIAZ.jpg', 'mt' => 'sm:mt-[110px] lg:mt-[110px]'],
                    ['name' => 'Russel Yasol', 'image' => '/images/team/DEV_yasol.jpg', 'mt' => 'sm:mt-[110px] lg:mt-[110px]'],
                    ['name' => 'Rod Lester Moreno', 'image' => '/images/team/DEV_moreno.jpg', 'mt' => 'sm:mt-[110px] lg:mt-[110px]'],
                    ['name' => 'Dr. Joselito F. Villaruz', 'image' => '/images/team/PROF_villaruz.png', 'mt' => ''],
                    ['name' => 'Dr. Gerard Lorenz M. Penecilla', 'image' => '/images/team/PROF_Penecilla.jpg', 'mt' => ''],
                    ['name' => 'Dr. Joel T. De Castro', 'image' => '/images/team/PROF_CASTRO.jpg', 'mt' => ''],
                    ['name' => 'Dr. Elizabeth Bretaña', 'image' => '/images/team/PROF_BRETANA.jpg', 'mt' => ''],
                    ['name' => 'Evelyn J. Grey, PhD', 'image' => '/images/team/PROF_GREY.jpg', 'mt' => ''],
                    ['name' => 'Evans B. Sansolis, PhD', 'image' => '/images/team/PROF_SANSOLIS.jpg', 'mt' => ''],
                    ['name' => 'Dr. Ma. Luche Sabayle', 'image' => '/images/team/PROF_SABAYLE.jpg', 'mt' => ''],
                    ['name' => 'Luie John Malimit', 'image' => '/images/team/DEV_MALIMIT.png', 'mt' => ''],
                    ['name' => 'Ma. Dyzza Espino', 'image' => '/images/team/DEV_ESPINO.jpg', 'mt' => ''],
                    ['name' => 'Janne Christian Distor', 'image' => '/images/team/DEV_DISTOR.jpg', 'mt' => ''],
                ];
            @endphp

            @foreach ($team_members as $member)
                <div class="flex flex-col justify-center items-center mx-auto w-full max-w-[290px] {{ $member['mt'] }}">
                    <div class="w-full aspect-[290/320] relative">
                        <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}"
                             class="object-cover w-full h-full border border-solid shadow-lg rounded-3xl shadow-cyan-500/50">
                    </div>
                    <h2 class="mt-4 text-base font-semibold text-center text-black sm:text-lg">
                        {{ $member['name'] }}
                    </h2>
                    <div class="w-full h-[44px] mt-4">
                        <!-- Add any additional content or buttons here if needed -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
