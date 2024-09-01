<div class="lg:ml-64">
    <div class="ml-7">
        <div class="flex items-center justify-between gap-6 my-2 lg:my-7">
            <h1 class="text-2xl font-bold">Enquiries</h1>
        </div>

        <div class="flex items-center gap-6 my-2 lg:my-7">
            <h2 class="text-lg font-semibold">Pending Cases</h2>
        </div>

        @if($numPending > 0)
            <div class="p-6 my-12 bg-white rounded-lg shadow-md">
                <table class="min-w-full bg-white divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-left">Case ID</th>
                            <th class="px-4 py-3 text-left">Last Name</th>
                            <th class="px-4 py-3 text-left">First Name</th>
                            <th class="px-4 py-3 text-left">Address</th>
                            <th class="px-4 py-3 text-left">Immediate Help</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enquiries->where('pending', true) as $enquiry)
                            <tr>
                                <td class="px-4 py-3">{{ $enquiry->id }}</td>
                                <td class="px-4 py-3">{{ $enquiry->last_name }}</td>
                                <td class="px-4 py-3">{{ $enquiry->first_name }}</td>
                                <td class="px-4 py-3">{{ $enquiry->current_location }}</td>
                                <td class="px-4 py-3">{{ $enquiry->immediate_help ? 'Yes' : 'No' }}</td>
                                <td x-data="{ open: @entangle('openModal') }">
                                    <!-- Button to open modal -->
                                    <button @click="open = true" wire:click="showModal({{ $enquiry->id }})">View Details</button>

                                    <!-- Modal -->
                                    <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
                                        <div class="w-full max-w-lg p-6 bg-white rounded shadow-lg">
                                            <h3 class="text-xl font-bold">Enquiry Details</h3>
                                            <!-- Display enquiry details -->
                                            @if($selectedPendingEnquiry)
                                                <p><strong>Case ID:</strong> {{ $selectedPendingEnquiry->id }}</p>
                                                <p><strong>Last Name:</strong> {{ $selectedPendingEnquiry->last_name }}</p>
                                                <p><strong>First Name:</strong> {{ $selectedPendingEnquiry->first_name }}</p>
                                                <p><strong>Address:</strong> {{ $selectedPendingEnquiry->address }}</p>
                                                <p><strong>Phone Number:</strong> {{ $selectedPendingEnquiry->phone_number }}</p>
                                                <p><strong>Email:</strong> {{ $selectedPendingEnquiry->email }}</p>
                                                <p><strong>Additional Info:</strong> {{ $selectedPendingEnquiry->additional_info }}</p>
                                                <button wire:click="changeStatus({{ $selectedPendingEnquiry->id }})" class="px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-600">
                                                    Add to Active Cases
                                                </button>
                                            @endif
                                            <button @click="open = false" class="px-4 py-2 mt-4 text-white bg-gray-600 rounded hover:bg-gray-700">Close</button>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h4 class="p-4 text-center">No Pending Cases</h4>
        @endif

        <hr class="border-b-[2px] border-solid border-[#0067A2] my-8 w-full" />

        <div class="flex items-center gap-6 my-2 lg:my-7">
            <h2 class="text-lg font-semibold">Active Cases</h2>
        </div>

        @if($numActive > 0)
            <div class="p-6 my-12 bg-white rounded-lg shadow-md">
                <table class="min-w-full bg-white divide-y divide-gray-200 table-auto">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-3 text-left">Last Name</th>
                            <th class="px-4 py-3 text-left">First Name</th>
                            <th class="px-4 py-3 text-left">Phone Number</th>
                            <th class="px-4 py-3 text-left">Poison Case</th>
                            <th class="px-4 py-3 text-left">Severity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enquiries->where('pending', false) as $enquiry)
                            <tr>
                                <td class="px-4 py-3">{{ $enquiry->last_name }}</td>
                                <td class="px-4 py-3">{{ $enquiry->first_name }}</td>
                                <td class="px-4 py-3">{{ $enquiry->phone_number }}</td>
                                <td class="px-4 py-3">{{ $enquiry->poison_case }}</td>
                                <td class="px-4 py-3">{{ $enquiry->severity }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <h4 class="p-4 text-center">No Active Cases</h4>
        @endif
    </div>
</div>
