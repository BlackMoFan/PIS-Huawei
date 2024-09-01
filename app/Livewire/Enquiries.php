<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ReportedCase;

class Enquiries extends Component
{
    public $enquiries = [];
    public $numPending = 0;
    public $numActive = 0;
    public $openModal = false;

    public $pendingEnquiries = [];
    public $selectedPendingEnquiry;

    public $activeEnquiries = [];
    public $selectedActiveEnquiry;

    public function mount()
    {
        $this->loadEnquiries();
    }

    public function loadEnquiries()
    {
        $this->enquiries = ReportedCase::all();
        $this->numPending = $this->enquiries->where('pending', true)->count();
        $this->pendingEnquiries = $this->enquiries->where('pending', true);
        $this->numActive = $this->enquiries->where('pending', false)->count();
        $this->activeEnquiries = $this->enquiries->where('pending', false);
    }

    public function showModal($enquiryId)
    {
        $this->selectedPendingEnquiry = ReportedCase::find($enquiryId);
        $this->openModal = true;
    }

    public function closeModal()
    {
        $this->openModal = false;
        $this->selectedPendingEnquiry = null;
    }

    public function changeStatus($enquiryId)
    {
        $enquiry = ReportedCase::find($enquiryId);
        $enquiry->pending = false;
        $enquiry->save();

        $this->loadEnquiries(); // Reload enquiries after changing status
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.sections.admin.enquiries', [
            'enquiries' => $this->enquiries,
            'numPending' => $this->numPending,
            'numActive' => $this->numActive,
        ])->layout('layouts.app');
    }
}
