<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{!! asset('images/logo.svg') !!}"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <tallstackui:script />
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Google API Key --}}
        {{-- <script async
            src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&libraries=places&callback=initMap">
        </script> --}}

    </head>
    <body class="font-sans antialiased text-gray-900">
        <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                </a>
            </div>

            <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

        @livewireScripts
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const locationButton = document.getElementById('location-button');
                const currentLocationInput = document.getElementById('current_location');

                if (navigator.geolocation) {
                    locationButton.addEventListener('click', () => {
                        navigator.geolocation.getCurrentPosition((position) => {
                            const latitude = position.coords.latitude;
                            const longitude = position.coords.longitude;
                            // Berlin, Germany
                            // const latitude = "52.5200";
                            // const longitude = "13.4050";

                            fetch(`https://maps.googleapis.com/maps/api/geocode/json?latlng=${latitude},${longitude}&key={{ config('services.google_maps.api_key') }}`)
                                .then(response => response.json())
                                .then(data => {
                                    if (data.results && data.results.length > 0) {
                                        // Get the full formatted address
                                        const formattedAddress = data.results[0].formatted_address;

                                        // Split the address by commas to remove the first part
                                        const addressParts = formattedAddress.split(', ');

                                        // Join the parts after the first comma to remove the code at the beginning
                                        const cleanedAddress = addressParts.slice(1).join(', ');

                                        // Set the cleaned address into the input field
                                        currentLocationInput.value = cleanedAddress;

                                        // Notify Livewire of the change
                                        // Livewire.emit('updateCurrentLocation', cleanedAddress);
                                    } else {
                                        alert('Unable to retrieve address for the current location.');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error retrieving location address:', error);
                                    alert('Error retrieving location address.');
                                });
                        }, (error) => {
                            console.error('Error retrieving location:', error);
                            alert('Please enable location services to use this feature.');
                        });
                    });
                } else {
                    alert('Geolocation is not supported by this browser.');
                }
            });
        </script>
    </body>
</html>
