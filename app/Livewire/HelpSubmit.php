<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\ReportedCase;
use Illuminate\Support\Facades\Http;

class HelpSubmit extends Component
{
    public string $first_name = '';
    public string $last_name = '';
    public string $email = '';
    public string $current_location = '';
    public string $birthday = '';
    public string $phone_number = '';
    public string $nearest_center = '';
    public bool $immediate_help = false;
    public string $additional_info = '';
    public array $hospitals = [];

    public function updatedCurrentLocation()
    {
        $this->fetchHospitals();
    }

    public function fetchHospitals()
    {
        $apiKey = config('services.google_maps.api_key');

        if (empty($this->current_location)) {
            $this->hospitals = [];
            return;
        }

        $response = Http::get("https://maps.googleapis.com/maps/api/place/textsearch/json", [
            'query' => 'hospitals near ' . $this->current_location,
            'key' => $apiKey,
        ]);

        $data = $response->json();
        $this->hospitals = collect($data['results'] ?? [])->map(function ($hospital) {
            return [
                'name' => $hospital['name'],
                'id' => $hospital['place_id'],
            ];
        })->toArray();
    }



    /**
     * Handles the help form submission.
     */
    public function submitHelpRequest(): void
    {
        $validated = $this->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'current_location' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date_format:Y-m-d'],
            'phone_number' => ['required', 'string', 'max:15'],
            'nearest_center' => ['required', 'string', 'max:255'],
            'immediate_help' => ['boolean'], // Added validation rule
            'additional_info' => ['required', 'string'],
        ]);

        if (!$validated['email']) {
            $validated['email'] = "No email";
        }

        // Stores the validated data in the reportedCases table
        ReportedCase::create([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'current_location' => $validated['current_location'],
            'birth_date' => $validated['birthday'],
            'phone_number' => $validated['phone_number'],
            'nearest_center' => $validated['nearest_center'],
            'immediate_help' => $validated['immediate_help'],
            'pending' => true,
            'additional_info' => $validated['additional_info'],
        ]);

        // Redirect or provide feedback to the user
        $this->redirect(route('thank-you'), navigate: true);
    }

    public function render()
    {
        return view('livewire.sections.public.help-submit')
            ->layout('layouts.guest');
    }
}
