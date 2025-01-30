<section>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                       {{--<h5 class="card-title mb-0">{{$hotelName ? 'Edit Hotal Details' : 'Add Hotal Details'}}</h5>--}} 
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form class="row g-3 needs-validation" wire:submit.prevent="saveLaundryDetails" >
                            <!-- Laundry Type -->
                            <div class="col-md-6 mb-3">
                                <label for="laundryType" class="form-label">Laundry Type</label>
                                <select class="form-control" wire:model="laundry_type">
                                    <option value="">Select Laundry Type</option>

                                    @foreach ($laundryTypes as $type)
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                @error('laundry_type') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        
                            <!-- Price -->
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" wire:model="price" class="form-control" placeholder="Enter Price">
                                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        
                            <!-- Days -->
                            <div class="col-md-6 mb-3">
                                <label for="day" class="form-label">Days</label>
                                <select class="form-control" wire:model="day">
                                    <option value="">Select Duration</option>
                                    @foreach ($days as $d)
                                        <option value="{{ $d }}">{{ $d }}</option>
                                    @endforeach
                                </select>
                                @error('day') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        
                            <!-- Cloth Count -->
                            <div class="col-md-6 mb-3">
                                <label for="cloth_count" class="form-label">How many Clothes</label>
                                <select class="form-control" wire:model="cloth_count">
                                    <option value="">Select Cloth Count</option>
                                    @foreach ($cloths as $count)
                                        <option value="{{ $count }}">{{ $count }}</option>
                                    @endforeach
                                </select>
                                @error('cloth_count') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        
                            <!-- Note -->
                            <div class="col-md-6 mb-3" wire:ignore>
                                <label for="note" class="form-label">Note</label>
                                <textarea class="summernote" id="note" wire:model.deffer="defaultNotes"></textarea>
                                @error('defaultNotes') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        
                            <!-- Description -->
                            <div class="col-md-6 mb-3" wire:ignore>
                                <label for="description" class="form-label">Description</label>
                                <textarea class="summernote" id="description" wire:model="defaultDescription"></textarea>
                                @error('defaultDescription') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        
                            <!-- Laundry Image -->
                            <div class="col-md-12 mb-3">
                                <label for="image" class="form-label">Laundry Image</label>
                                <input type="file" class="form-control" wire:model="image" accept="image/*">
                                @if ($image)
                                    <div class="mt-3">
                                        <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" style="max-width: 200px;">
                                    </div>
                                @endif
                                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        
                            <!-- Submit Button -->
                            <div class="col-md-4 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary w-100">Submit Laundry Details</button>
                            </div>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', function () {
            // Initialize Summernote with the default content from Livewire
            $('#note').summernote({
                height: 200, // Set the height of the editor
                callbacks: {
                    onChange: function(contents, $editable) {
                        // Sync changes back to Livewire's defaultNotes property
                        @this.set('defaultNotes', contents);
                    }
                }
            });
    
            // Sync Livewire's initial content with Summernote when the page loads
            @this.on('setSummernoteContent', content => {
                $('#note').summernote('code', content);
            });
        });
    </script>



    </section>