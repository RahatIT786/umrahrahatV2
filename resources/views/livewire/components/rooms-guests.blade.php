<div>
    {{-- room guest adding start --}}
                                <div class="relative" x-data="{ isOpen: false }" id="room-guest-popup">
                                    <!-- Button to Open Popup -->
                                   <div>
                                    <button @click="isOpen = !isOpen" class="px-4 py-2 orange-color-btn text-white rounded">
                                        Rooms & Guests
                                    </button>
                                    <span>Total Guest: {{$this->totalGuests}}</span>
                                    <span>Total Rooms: {{$this->totalRooms }} </span>
                                   </div>
                                
                                    <!-- Popup -->
                                    <div x-show="isOpen" @click.away="isOpen = false"
                                        class="absolute left-0 mt-2 w-80 bg-white shadow-lg p-4 border rounded">
                                        
                                        @foreach ($rooms as $index => $room)
                                            <div class="border-b pb-3 mb-3">
                                                <h3 class="font-bold">Room {{ $index + 1 }}</h3>
                                
                                                <!-- Adults Counter -->
                                                <div class="d-flex justify-content-between  mt-2">
                                                    <span>Adults</span>
                                                    <div class="flex items-center">
                                                        <button  wire:click="updateCount({{ $index }}, 'adults', -1)" class="px-2 py-1 bg-gray-200 minus-btn">-</button>
                                                        <span class="mx-2">{{ $room['adults'] }}</span>
                                                        <button wire:click="updateCount({{ $index }}, 'adults', 1)" class="px-2 py-1 bg-gray-200 plus-btn">+</button>
                                                    </div>
                                                </div>
                                
                                                <!-- Children Counter -->
                                                <div class="d-flex justify-content-between mt-2">
                                                    <span>Children</span>
                                                    <div class="flex items-center">
                                                        <button wire:click="updateCount({{ $index }}, 'children', -1)" class="px-2 py-1 bg-gray-200 minus-btn">-</button>
                                                        <span class="mx-2">{{ $room['children'] }}</span>
                                                        <button wire:click="updateCount({{ $index }}, 'children', 1)" class="px-2 py-1 bg-gray-200 plus-btn">+</button>
                                                    </div>
                                                </div>
                                
                                                <!-- Child Age Inputs -->
                                                @foreach ($room['childrenAges'] as $childIndex => $age)
                                                    <div class="mt-2">
                                                        <label>Child {{ $childIndex + 1 }} Age:</label>
                                                        <select wire:model="rooms.{{ $index }}.childrenAges.{{ $childIndex }}" class="border rounded px-2 py-1 w-full">
                                                            <option value="">Select Age</option>
                                                            @for ($i = 1; $i <= 13; $i++)
                                                                <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                @endforeach
                                
                                                <!-- Remove Room Button -->
                                                @if ($index > 0)
                                                    <button wire:click="removeRoom({{ $index }})" class="w-full orange-color-btn text-white py-2 mt-2">Remove Room</button>
                                                @endif
                                            </div>
                                        @endforeach
                                
                                        <!-- Add Another Room -->
                                        <button wire:click="addRoom" class="w-full  py-2 mt-2 orange-color-btn">+ Add Another Room</button>
                                
                                        <!-- Done Button -->
                                        <button @click="isOpen = false" class="w-full  text-white py-2 mt-2 orange-color-btn">
                                            Done (Total Guests: {{ $this->totalGuests }})
                                        </button>
                                    </div>
                                </div>
                                



                                {{-- room guest adding end--}}
<style>
   #room-guest-popup {
    width: 25vw;
   }

   #room-guest-popup {
    width: 25vw;
    max-width: 300px; /* Prevents it from getting too large */
    min-width: 150px; /* Ensures usability on small screens */
}

/* For smaller screens (tablets and below) */
@media (max-width: 1024px) {
    #room-guest-popup {
        width: 35vw; /* Slightly larger for better visibility */
    }
}

@media (max-width: 768px) {
    #room-guest-popup {
        width: 50vw; /* Takes up more space on small screens */
    }
}

@media (max-width: 480px) {
    #room-guest-popup {
        width: 80vw; /* Almost full width for mobile screens */
    }
}
</style>
    
</div>
