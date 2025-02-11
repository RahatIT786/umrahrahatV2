<div>



    <div>
        <label>Select Sectors</label>
        
        <!-- Multi-Select Dropdown -->
        <select id="sectorSelect" class="form-control" multiple="multiple" wire:model="selectedSectors">
            @foreach($carSector as $sector)
                <option value="{{ $sector->id }}">{{ $sector->car_sector }}</option>
            @endforeach
        </select>
    
        <!-- Display Selected Options -->
        {{-- <h6 class="mt-3">Selected Sectors:</h6> --}}
        {{-- <ul>
            @foreach($selectedSectors as $selected)
                <li>{{ collect($carSector)->where('id', $selected)->first()['name'] ?? '' }}</li>
            @endforeach
        </ul> --}}
    </div>
    
    <!-- Initialize Select2 -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        $('#sectorSelect').select2();
    
        $('#sectorSelect').on('change', function () {
            let selectedValues = $(this).val();
            @this.set('selectedSectors', selectedValues);
        });
    
        Livewire.hook('message.processed', (message, component) => {
            $('#sectorSelect').select2();
        });
    });
    </script>
    
 

 @push('scripts')
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        $('#multi-sector').select2();

        $('#multi-sector').on('change', function () {
            Livewire.emit('updateSelectedSectors', $(this).val());
        });
    });
</script> --}}
@endpush






</div>
