<section>
    <div class="row">
        <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Addpacages</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div>
                @if (session()->has('message'))
                    <div id="successMessage" class="alert alert-success text-center">{{session('message')}}</div>
                @endif
            </div>
            <div class="p-4 border rounded" >
                <form class="row g-3" wire:submit.prevent="packageSubmit" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Package Master Name</label>
                        <input type="text" class="form-control" id="validationDefault01" wire:model.change="package_name" >
                        @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Service Type</label>
                        
                        <select class="form-select" id="validationDefault04"  wire:model="updateSeletedOption"  required>
                            <option selected disabled value="">Choose Service Type</option>
                            <option value="hajj">Hajj</option>
                            <option value="ramzan">Ramzaan</option>
                            <option value="rup">Regular Umrah Package</option>
                            <option value="sup">Short Umrah Package</option>
                            <option value="lup">Long Umrah Package</option>

                           
                        </select>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6" wire:poll>
                        <div>
                            <label for="package_type">Choose Package Types</label><br>
                           <div class="form-control">
                            @foreach ($packageTypeOptions as $key => $option)
                            <div>
                                <input type="checkbox"  value="{{$option}}" wire:model="package_types">
                                <label for="package_{{$key}}">{{ ucfirst($option) }}</label>
                            </div>
                        @endforeach
                           </div>
                        </div>
                        
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <span wire:click="createPackageprice">click</span>



                    <script>
                    //     document.addEventListener('livewire:load', function () {
                    //       $('#kfsdkfdsd').select2({
                    //           placeholder: "Choose Package Type",
                    //           allowClear: true
                    //       });
                  
                    //       $('#kfsdkfdsd').on('change', function (e) {
                    //           var data = $(this).val();
                    //           console.log(data); 
                    //           @this.set('package_type_ids', data);
                    //       });
                    //   });
                 

                    </script>
                    @if ($createPackage)
                    
                    <div>
                        @foreach ($package_types as $type )
                            <div  class="col-md-12" wire:poll>
                               <h4>{{$type}}</h4>
                              @foreach ($sharings as $sharing )
                              <div class="col-md-3">
                                <label for="">{{$sharing}}</label>
                                <input min="1" type="number" wire:model="updatedSharings">
                                 </div>
                              @endforeach

                             

                            </div>
                    
                        
                    @endforeach
                    </div>
                        
                    @endif













                    {{--  --}}
                    <div  class="col-md-6"></div>
                   @if (array_intersect(['supersaver','royal','classic','bronze','silver'],$package_types) && $updateSeletedOption === 'rup' )
                       
                  
                   <div class="col-md-4">
                    <label for="validationDefaultUsername" class="form-label">Sharing</label>
                    <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="sharing">
                    @error('sharing') <span class="text-danger">{{ $message }}</span> @enderror
                    
                </div>
                       
                   @endif
                    <div class="col-md-4">
                        <label for="validationDefaultUsername" class="form-label">Quint</label>
                        <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="quint" >
                        @error('quint') <span class="text-danger">{{ $message }}</span> @enderror
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefaultUsername" class="form-label">Quad</label>
                        <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="quad" >
                        @error('quad') <span class="text-danger">{{ $message }}</span> @enderror
                        
                    </div>
                    {{--  --}}
 {{--  --}}
 <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Triple</label>
    <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="triple">
    @error('triple') <span class="text-danger">{{ $message }}</span> @enderror
    
</div>
<div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Triple</label>
    <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="double">
    @error('double') <span class="text-danger">{{ $message }}</span> @enderror
    
</div>
<div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Single</label>
    <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="single">
    @error('single') <span class="text-danger">{{ $message }}</span> @enderror
    
</div>
{{--  --}}
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">Enter Start Month</label>
                        <input type="month" class="form-control" id="validationDefault03" wire:model="startMonth" >
                        @error('startMonth') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">Enter End Month</label>
                        <input type="month" class="form-control" id="validationDefault03" wire:model="endMonth" >
                        @error('endMonth') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Note</label>
                        
                        <textarea class="form-control" id="example-textarea" rows="5" wire:model="note"></textarea>
                        @error('note') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Includes</label>
                       
                        <textarea class="form-control" id="example-textarea" rows="5" wire:model="includes"></textarea>
                        @error('includes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Package Banner Image</label>
                        <input type="file" class="form-control" id="validationDefault05" wire:model="photo" value="" accept="image/*">
                      
                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
{{--                         
                        @if ($photo)
                                <div class="mt-2">
                                    <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($package_name && $photo_path && $package_name)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $photo_path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif --}}
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Package Flyer Image</label>
                        <input type="file" class="form-control" id="validationDefault05" wire:model="flyer" value="" accept="image/*">
                      
                        @error('flyer') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                       
                        {{-- @if ($flyer)
                                <div class="mt-2">
                                    <img src="{{ $flyer->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($package_name && $flyer_path && $package_name)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/'.$flyer_path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif --}}
                    </div>



                   
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">add pack</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        <div>
</section><div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
</div>
