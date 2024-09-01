<!-- resources/views/components/toxicologist.blade.php -->

<div class="flex flex-col px-4 sm:px-6 md:px-8 lg:px-16">
    <h1 class="text-black text-[32px] md:text-[42px] font-semibold mb-6 sm:mb-8 text-center md:text-left sm:text-left">
        Meet your Toxicologists @ WVSU
    </h1>
    <div class="flex justify-center">
        <div class="grid w-full max-w-6xl grid-cols-1 gap-8 md:grid-cols-2">
            @foreach (['Doctor1', 'Doctor2'] as $index => $doctor)
                <div class="flex flex-col items-center justify-center w-full max-w-sm mx-auto">
                    <div class="w-full aspect-[306/320] relative">
                        <img src="{{ asset('images/toxicologists/' . $doctor . '.svg') }}" alt="doctor" class="object-cover w-full h-full rounded-sm">
                    </div>
                    <h2 class="mt-4 text-lg font-semibold text-center text-black sm:text-xl">
                        {{ $index === 0 ? 'Dr. Gerard Lorenz M. Penecilla' : 'Dr. Elizabeth Bretaña' }}
                    </h2>
                    <div class="w-full mt-4">
                        <p class="px-4 text-sm text-center text-black sm:text-base line-clamp-6">
                            {{ $index === 0 ?
                                "Dr. Gerard Lorenz M. Penecilla is a product of the West Visayas State University. He finished residency training in Internal Medicine at the university's teaching and training hospital, the West Visayas State University Medical Center and served as the Chief Resident of the Department of Internal Medicine for two years. He finished fellowship training in Clinical Toxicology at the University of the Philippines – Philippine General Hospital National Poison Management and Control Center, the first poison center in the Philippines which for more than three decades has served more than a hundred thousand poisoned patients throughout the country." :
                                "Dr. Elizabeth Bretaña is a pediatrician and toxicologist. She was one of the first to be trained in Toxicology in the Philippines and the first in the Visayas. She has practiced toxicology for several decades and is affiliated with most tertiary hospitals in Iloilo, including the West Visayas State University Medical Center, Iloilo Doctors' Hospital, St. Paul's Hospital Iloilo and Iloilo Mission Hospital. She was also the fomer Chairman of the Department of Pharmacology at the Iloilo Doctors' College of Medicine and a Professorial lecturer at West Visayas State University College of Medicine."
                            }}
                        </p>
                        <div class="flex justify-center mt-6 sm:mt-8">
                            <a href="{{ $index === 0 ? '/toxicologist' : '/toxicologist2' }}"
                               class="drop-shadow-md text-black hover:text-white font-semibold bg-[#FDD247] min-w-[80px] px-4 sm:px-8 py-2 hover:bg-[#0067A2] active:bg-[#0067A2] rounded transition duration-300">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
