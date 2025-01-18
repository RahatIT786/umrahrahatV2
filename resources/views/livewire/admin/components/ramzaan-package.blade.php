<section>
    <div class="row">
        <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Ramzaan Package</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            {{-- <div>
                @if (session()->has('message'))
                    <div id="successMessage" class="alert alert-success text-center">{{session('message')}}</div>
                @endif
            </div> --}}
            <div class="p-4 border rounded">
                <form class="row g-3" wire:submit.prevent="packageSubmit" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Package Name</label>
                        <input type="text" class="form-control" id="validationDefault01" wire:model="package_name" >
                        @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Package Type</label>
                        {{-- <input type="text" class="form-control" id="validationDefault01"  wire:model="package_name" > --}}
                       <select name="" id="" class="form-control" wire:model.live="packageCategory">
                        <option value="0" selected disabled>choose package type</option>
                        @foreach ($packageTypes as $key=> $packageType )
                        
                            <option value="{{$key+1}}">{{ucfirst($packageType)}}</option>
                            
                                
                           
                            
                        @endforeach
                       </select>
                       @error('packageCategory') <span class="text-danger">{{ $message }}</span> @enderror
                       {{-- <select name="packageCategory" id="packageCategory" class="form-control" wire:model="packageCategory">
                            <option value="0" selected disabled>choose package type</option>
                      
                        
                            <option value="1"></option>
                            <option value="2">2</option>
                            
                        
                       </select> --}}
                        
                        {{-- @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror --}}
                    </div>

                   <div class="border rounded  p-3">
                    @foreach ($packageFlavours  as $flavour => $pricing)
                    <div class="m-2" >
                         <h5>{{ucfirst($flavour)}}</h5>
                         <div class="d-flex justify-content-evenly">
                            @foreach ($pricing as $type => $price)
                         <div class="">
                             <label for="">{{ucfirst($type)}}</label>
                             <input  id="{{ $flavour }}_{{ $type }}"  class="form-control" type="number"  min="1" placeholder="enter {{$type}} price" wire:model="packageFlavours.{{$flavour}}.{{$type}}">
                          
                             @error('packageFlavours.{{$flavour}}.{{$type}}') <span class="text-danger">{{ $message }}</span> @enderror
                          
                         </div>
                             
                         @endforeach
                         </div>
                    </div>
                        
                    @endforeach
                   </div>


                 
</div>
{{--  --}}
                

                   <div class="d-flex justify-content-evenly">
                    <div class="col-md-6 border rounded p-4 mt-3 mb-3 ">
                        <label for="validationDefault02" class="form-label">Select Departure City</label>
                        {{-- <input type="text" class="form-control" id="validationDefault02" value="Otto" wire:model="description"> --}}
                       @foreach ($departure_city_list as  $city)
                       <div>
                        
                        <input type="checkbox"  value="{{$city}}" wire:model="departure_city">
                        <label for="">{{ucfirst($city)}}</label>
                       </div>
                           
                       @endforeach
                        @error('departure_city') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6 border rounded p-4 mt-3 mb-3">
                        <label for="validationDefault02" class="form-label">Select Flight </label>
                        {{-- <input type="text" class="form-control" id="validationDefault02" value="Otto" wire:model="description"> --}}
                       @foreach ($flight_name_list as $key=> $flight)
                       <div>
                        
                        <input type="checkbox" name="{{$key}}" value="{{$flight}}" wire:model="flight_name">
                        <label for="">{{ucfirst($flight)}}</label>
                       </div>
                           
                       @endforeach
                        @error('flight_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>

                   
                       <div class="row">
                        @foreach ($infant_price as  $inft => $key)
                        <div class="col-md-6 mb-3 ">
                           <label for="" >{{ucfirst($inft)}}</label>
                           <input class="form-control" type="number" min="1" placeholder="enter {{$inft}} price" wire:model="infant_price.{{$inft}}">
                           @error('infant_price.{{$inft}}') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                           
                       @endforeach
                     
                       </div>
                    



                   <div class="row">


                    <div class="col-md-6" wire:ignore>
                        <label for="validationDefault02" class="form-label">Package Description</label>
                        {{-- <input type="text" class="form-control" id="validationDefault02" value="Otto" wire:model="description"> --}}
                        <textarea class="form-control summernot" name="" id="summernote" cols="30" rows="5" wire:model="description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6" wire:ignore>
                        <label for="validationDefault05" class="form-label ">Itinerary</label>
                        {{-- <input type="text" class="form-control" id="validationDefault05" required> --}}
                        <textarea class="form-control summernot" id="example-textarea" rows="5" wire:model="itinerary"></textarea>
                        @error('note') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>
                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Includes</label>
                        {{-- <input type="text" class="form-control" id="validationDefault05" required> --}}
                        <textarea class="form-control" id="example-textarea" rows="5" wire:model="includes"></textarea>
                        @error('includes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <label for="validationDefault05" class="form-label">Package Banner Image</label>
                            <input type="file" class="form-control" id="validationDefault05" wire:model="photo" value="" accept="image/*">
                          
                            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
    
                        <div class="col-md-6 mt-3">
                            <label for="">Enter Days</label>
                            <input class="form-control" type="number" min="1" placeholder="Enter days" wire:model="days">
                            @error('days') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                   
                    <div>
                       
                        {{-- @if ($photo)
                                <div class="mt-2">
                                    <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($package_name && $photo_path && $package_name)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $photo_path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Package Flyer Image</label>
                        <input type="file" class="form-control" id="validationDefault05" wire:model="flyer" value="" accept="image/*">
                      
                        @error('flyer') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                       
                        @if ($flyer)
                                <div class="mt-2">
                                    <img src="{{ $flyer->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($package_name && $flyer_path && $package_name)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/'.$flyer_path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                    </div> --}}



                   
                    <div class="col-12 mt-4 mb-4">
                        <button class="btn btn-primary" type="submit">submit</button>
                    </div>
                </form>
            </div>

            @if (session()->has('message'))
            <div id="successMessage" class="alert alert-success text-center">{{session('message')}}</div>
        @endif

        </div>
    </div>

    <div>
        <div>
</section>