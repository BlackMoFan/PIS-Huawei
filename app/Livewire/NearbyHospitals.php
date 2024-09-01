<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class NearbyHospitals extends Component
{
    public $location = '';
    public $hospitals = [];
    public $apiKey = 'AIzaSyD5-6BO3UGKj2JvT8g6vumHNBsQZFk7NMo';
    public $nearest_center = '';

    public function searchHospitals()
    {
        if (empty($this->location)) {
            $this->hospitals = [];
            return;
        }

        // Make the API request
        $response = Http::get("https://maps.googleapis.com/maps/api/place/textsearch/json", [
            'query' => 'hospitals near ' . $this->location,
            'key' => $this->apiKey,
        ]);

        $data = $response->json();

        // Update hospitals property with the response data
        $this->hospitals = $data['results'] ?? [];
    }

    public function render()
    {
        return view('livewire.nearby-hospitals');
    }
}
