<section wire:id="package-select">
    <div class="row">
        <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">Ramzaan Package</h6>
    <hr/>

   <div class="card">
    <div class="card-body row">
        <div class="col-md-6">
            <label for="validationDefault01" class="form-label fw-bold" >Package Name</label>
            <input type="text" class="form-control" id="validationDefault01" wire:model="package_name" >
            @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-6 ">
            <label for="validationDefault01" class="form-label fw-bold">Enter Days</label>
            <input class="form-control" type="number" min="1" placeholder="Enter days" wire:model="days">
            @error('days') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

    </div>
   </div>

   <div class="card">
    <div class="card-body row">
      <label for="" class="form-label fw-bold">Select Departure City</label>
     <div class="d-flex justify-content-evenly p-4">
        @foreach ($departureCity as $ct)
      
        <span>
         <input type="checkbox" wire:model="departure_city">
         <label for="">{{ucfirst($ct['CityName'])}}</label>
      
        </span>
      
    
       @endforeach
     
     </div>
    </div>
   </div>




   <div class="card">
    <div class="card-body row">
      <label for="" class="form-label fw-bold">Select Departure City</label>
     <div class="d-flex justify-content-evenly p-4">
        @foreach ($departureCity as $ct)
      
        <span>
         <input type="checkbox" wire:model="departure_city">
         <label for="">{{ucfirst($ct['CityName'])}}</label>
      
        </span>
      
    
       @endforeach
     
     </div>
    </div>
   </div>


   <div class="card">
    <div class="card-body row">
      <label for="" class="form-label fw-bold">Package Includes</label>
     <div class="d-flex justify-content-evenly p-4">
        @foreach ($includes as $include)
      
        <span>
         <input type="checkbox" wire:model="departure_city">
         <label for="">{{ucfirst($include['InclusionName'])}}</label>
      
        </span>
      
    
       @endforeach
     
     </div>
    </div>
   </div>



   <div class="card">
    <div class="card-body row" wire:ignore>
      <label for="" class="form-label fw-bold">Policies</label>
     <div class="d-flex gap-3 justify-content-evenly p-4">
        <div>
            <label for="" class="form-label">Privacy Policy</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="" class="form-label">Cancellation  Policy</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="" class="form-label">Important Notes</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
     </div>
    </div>
   </div>


   
   <div class="card">
    <div class="card-body row" wire:ignore>
      <label for="" class="form-label fw-bold">Package OverView</label>
     <div class="d-flex gap-3 justify-content-evenly p-4">
        <div>
            <label for="" class="form-label">Flight & Transport</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="" class="form-label">Meal</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="" class="form-label">Visa & Taxes</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
     </div>
    </div>
   </div>



   <div class="card">
    <div class="card-body row" wire:ignore>
      <label for="" class="form-label fw-bold">Details</label>
     <div class="d-flex gap-3 justify-content-evenly p-4">
        <div>
            <label for="" class="form-label">Inclusion</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="" class="form-label">Exclusion</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="" class="form-label">Itinerary</label>
            <textarea class="form-control summernote" id="example-textarea" rows="5" wire:model="policies"></textarea>
            @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
     </div>
    </div>
   </div>


   <div class="card">
    <div class="card-body row">
        <label for="" class="form-label fw-bold">Description</label>
        <textarea class="form-control " id="example-textarea" rows="5" wire:model="policies"></textarea>
        @error('policies') <span class="text-danger">{{ $message }}</span> @enderror
     </div>
    </div>


    <div class="card">
        <div class="card-body">

            <div>
        
                <label for="validationDefault05" class="form-label fw-bold">Package Banner Image</label>
                <input type="file" class="form-control" id="validationDefault05" wire:model="photo" value="" accept="image/*">
              
                @error('flyer') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6">
               
                @if ($photo)
                                    <div class="mt-2">
                                        <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                    </div>
                                {{-- @elseif ($package_name && $photo_path && $package_name)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $photo_path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                    </div> --}}
                                @endif
            </div> 
        </div>
    </div>

    
   <div class="card">
    <div class="card-body row">
        <label for="" class="form-label fw-bold">Add Child Package Price</label>
        <div class="row mb-3 mt-3">
          
         
            <div class="col-md-6">
                <label for="" class="form-label">Infant</label>
                <input type="number" class="form-control" wire:model="{{$infant}}" min="1">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Child</label>
                <input type="number" class="form-control" wire:model="{{$child}}" min="1">
            </div>
    
           </div>
           <div class="row mb-3 mt-3">
          
         
            <div class="col-md-6">
                <label for="" class="form-label">child_with_bed</label>
                <input type="number" class="form-control" wire:model="{{$child_with_bed}}" min="1">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">child_without_bed</label>
                <input type="number" class="form-control" wire:model="{{$child_without_bed}}" min="1">
            </div>
    
           </div>
     </div>
    </div>

    <div class="card">
        <div class="card-body">

           <label for="" class="form-label fw-bold">Package Type Details</label>
           <div class="mt-3 mb-3" >
            
            @foreach ($packageTypes as $key => $type)
                <span>
                    <input type="checkbox" wire:model.live="selectedOptions" value="{{$type['name']}}">
                    <label for="">{{ucfirst($type['name'])}}</label>
                </span>
                
            @endforeach
           </div>
           <hr>
           <div >
            @foreach ($selectedOptions as $option)
                <div class=" mt-3 mb-3">
                    <h6>{{ucfirst($option)}}</h6>
                    <div class="row mb-4 mt-4">
                       <div class="col-md-6">
                        <label for="">Makka Hotel Rating</label>
                        <select name="" class="form-control" id="" wire:model.live='makkaRatingHotel.{{$option}}'>
                          @foreach ($makkaHotelRating[$option] as $hotel)
                              <option value="{{$hotel}}">{{$hotel}}</option>
                          @endforeach
                        </select>
                       </div>

                     <div class="col-md-6">
                        <label for="">Makka Hotel Name</label>
                        <select name="" id="" class="form-control">
                            @foreach ($makkaRatingHotels[$option] as $ratingHotel)
                                <option value="">{{ucfirst($ratingHotel['hotelName'])}}</option>
                            @endforeach
                            
                          </select>
                     </div>

                    </div>

                    <div class="row mb-4 mt-4">
                        <div class="col-md-6">
                         <label for="">Madina Hotel Rating</label>
                         <select name="" class="form-control" id="" wire:model.live='madinaRatingHotel'>
                           @foreach ($madinaHotelRating as $hotel)
                               <option value="{{$hotel}}">{{$hotel}}</option>
                           @endforeach
                         </select>
                        </div>
 
                      <div class="col-md-6">
                         <label for="">Madina Hotel Name</label>
                         <select name="" id="" class="form-control">
                             @foreach ($madinaRatingHotels as $ratingHotel)
                                 <option value="">{{ucfirst($ratingHotel['hotelName'])}}</option>
                             @endforeach
                             
                           </select>
                      </div>
 
                     </div>







                   <div class="row">
                    @foreach ($sharings as $share)
                 
                    <div class="col-md-6">
                        <label for="" class="form-label">{{$share['name']}}</label>
                        <input type="number" class="form-control" wire:model="{{$option}}.{{$share['price']}}" min="1">
                    </div>
                  
                  
                        
                    @endforeach
                   </div>
                   
                </div>
                <hr>
                
            @endforeach

       

           </div>






        </div>
    </div>








   </div>

 

   


  
   













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
                    <div class="col-md-6 ">
                        <label for="validationDefault01" class="form-label">Enter Days</label>
                        <input class="form-control" type="number" min="1" placeholder="Enter days" wire:model="days">
                        @error('days') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    {{-- <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Package Type</label>
                      
                       <select name="" id="" class="form-control" wire:model.live="packageCategory">
                        <option value="0" selected disabled>choose package type</option>
                        @foreach ($packageTypes as $key=> $packageType )
                        
                            <option value="{{$key+1}}">{{ucfirst($packageType)}}</option>
                            
                                
                           
                            
                        @endforeach
                       </select>
                       @error('packageCategory') <span class="text-danger">{{ $message }}</span> @enderror
                      
                    </div> --}}

                   {{-- <div class="border rounded  p-3">
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
                   </div> --}}


                 
</div>
{{--  --}}
                

                   <div class="d-flex justify-content-evenly">
                    <div class="col-md-6 border rounded p-4 mt-3 mb-3 ">
                        <label for="validationDefault02" class="form-label">Select Departure City</label>
                        {{-- <input type="text" class="form-control" id="validationDefault02" value="Otto" wire:model="description"> --}}
                       {{-- @foreach ($departure_city_list as  $city)
                       <div>
                        
                        <input type="checkbox"  value="{{$city}}" wire:model="departure_city">
                        <label for="">{{ucfirst($city)}}</label>
                       </div>
                           
                       @endforeach --}}
                        @error('departure_city') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-6 border rounded p-4 mt-3 mb-3">
                        <label for="validationDefault02" class="form-label">Select Flight </label>
                        {{-- <input type="text" class="form-control" id="validationDefault02" value="Otto" wire:model="description"> --}}
                       {{-- @foreach ($flight_name_list as $key=> $flight)
                       <div>
                        
                        <input type="checkbox" name="{{$key}}" value="{{$flight}}" wire:model="flight_name">
                        <label for="">{{ucfirst($flight)}}</label>
                       </div>
                           
                       @endforeach --}}
                        @error('flight_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                   </div>

                   
                       <div class="row">
                        {{-- @foreach ($infant_price as  $inft => $key)
                        <div class="col-md-6 mb-3 ">
                           <label for="" >{{ucfirst($inft)}}</label>
                           <input class="form-control" type="number" min="1" placeholder="enter {{$inft}} price" wire:model="infant_price.{{$inft}}">
                           @error('infant_price.{{$inft}}') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                           
                       @endforeach --}}
                     
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