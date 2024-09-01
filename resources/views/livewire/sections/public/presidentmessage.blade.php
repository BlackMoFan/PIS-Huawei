<!-- resources/views/components/message.blade.php -->

<div class="flex flex-col px-4 mt-20 md:px-8 lg:px-16">
    <h1 class="text-black text-[32px] md:text-[42px] font-semibold mb-6 md:mb-8 text-center md:text-left">Message from the WVSU President</h1>
    <div class="flex flex-col items-center lg:flex-row lg:items-start">
        <div class="flex flex-col w-full mb-8 lg:w-2/3 lg:mb-0">
            <h2 class="mb-4 text-xl font-normal text-black md:text-2xl md:mb-6">Dr. Joselito F. Villaruz</h2>
            <p class="text-sm font-normal text-black md:text-base">
                My warmest greetings to all taga-WEST and the Filipino people.
                <br><br>
                It is with great pride to introduce the website of the West Visayas State University Poison Information Service. The Poison Information Service represents an integration of the three-fold functions of the university of instruction, research, and extension. Its vision to be an internationally-recognized academic, community and especially research-oriented national poison center by 2030 reflects the commitment of the university to strive for excellence amidst the numerous challenges it faces. The Poison Information Service is indeed one of the home-grown innovations that the university is nurturing, a product of the concerted effort of both the hardworking university personnel and the collaboration with the community, especially our cooperating agencies.
                <br><br>
                It is hoped, that the launching of this website is only the beginning as the Poison Information Center moves towards the realization of its vision which shall help in the gradual transformation of WVSU into a Research University.
            </p>
        </div>
        <div class="relative w-full lg:w-1/3 h-[300px] md:h-[400px] lg:h-[420px]">
            <div class="absolute inset-0 z-0 rounded-full opacity-50 bg-gradient-to-r from-blue-400 to-yellow-300"></div>
            <img src="{{ asset('images/message/Villaruz.svg') }}" alt="wvsu president" class="absolute inset-0 z-10 w-full h-full rounded-md">
        </div>
    </div>
</div>
