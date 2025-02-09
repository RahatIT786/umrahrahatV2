<section>
     <!-- Page Header Start -->
     <div class="container-fluid page-header mb-5 p-0" style="background-image: url({{asset('asserts/user/img/haj/mecca3.jpg')}});">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">CutomPackage</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    
                </div>
                <div class="row g-4 align-items-center">
{{--                   
                    <div>
                        <!-- Stepper Progress Bar -->
                        <div class="stepper">
                            @for ($i = 1; $i <= $totalSteps; $i++)
                                <div class="step {{ $i <= $currentStep ? 'active' : '' }}"></div>
                            @endfor
                        </div>
                    
                        <!-- Step Content -->
                        <div class="step-content">
                            @if ($currentStep == 1)
                                <div>
                                    <label for="field1">Field 1</label>
                                    <input type="text" wire:model="formData.field1" id="field1">
                                    @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            @elseif ($currentStep == 2)
                                <div>
                                    <label for="field2">Field 2</label>
                                    <input type="text" wire:model="formData.field2" id="field2">
                                    @error('formData.field2') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            @elseif ($currentStep == 3)
                                <div>
                                    <label for="field3">Field 3</label>
                                    <input type="text" wire:model="formData.field3" id="field3">
                                    @error('formData.field3') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            @elseif ($currentStep == 4)
                                <div>
                                    <label for="field4">Field 4</label>
                                    <input type="text" wire:model="formData.field4" id="field4">
                                    @error('formData.field4') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            @elseif ($currentStep == 5)
                                <div>
                                    <label for="field5">Field 5</label>
                                    <input type="text" wire:model="formData.field5" id="field5">
                                    @error('formData.field5') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            @endif
                        </div>
                    
                        <!-- Navigation Buttons -->
                        <div class="step-navigation">
                            @if ($currentStep > 1)
                                <button wire:click="previousStep" type="button">Back</button>
                            @endif
                    
                            @if ($currentStep < $totalSteps)
                                <button wire:click="nextStep" type="button">Continue</button>
                                <button wire:click="skipStep" type="button">Skip</button>
                            @else
                                <button wire:click="submitForm" type="button">Submit</button>
                            @endif
                        </div>
                    </div> --}}


                    <div>
                        <!-- Stepper Progress Bar with Circle Icons -->
                        <div class="stepper">
                            @for ($i = 1; $i <= $totalSteps; $i++)
                                <div class="step {{ $i <= $currentStep ? 'active' : '' }}">
                                    <div class="step-circle">{{ $i }}</div>
                                    <div class="step-label">Step {{ $i }}</div>
                                </div>
                            @endfor
                        </div>
                    
                        <!-- Step Content -->
                        {{-- style="height:25vw; overflow-y: scroll; --}}
                        <div class="step-content"  >
                            @if ($currentStep >= 1)
                            <div class="d-flex justify-content-evenly align-items-center flex-column custom-field-bars py-4" style="">
                                <h5 class="mt-2 mb-2 text-primary" style="">Personal Details</h5>
                                <hr>
                               <div class="row col-lg-12">
                                <div class="col-lg-4">
                                    <label for="field1">Name</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Name">
                                   </div>

                                   <div class="col-lg-4">
                                    <label for="field1">Mobile</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Mobile">
                                   </div>

                                   <div class="col-lg-4">
                                    <label for="field1">Email</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Email">
                                   </div>

                               </div>
                               <div class="row col-lg-12 mt-4">
                                <div class="col-lg-4">
                                    <label for="field1">Adult</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="No.of Adults">
                                   </div>

                                   <div class="col-lg-4">
                                    <label for="field1">Child</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="No.of Childs">
                                   </div>

                                   <div class="col-lg-4">
                                    <label for="field1">Infant</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Infant">
                                   </div>

                               </div>



                                @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            @endif

                            @if ($currentStep >= 2)
                            <div class="d-flex justify-content-evenly align-items-center flex-column custom-field-bars py-4 px-4" >
                                <h5 class="mt-2 mb-2 text-primary" style="">Hotel Details</h5>
                              
                               <hr>
                               <div class="row mt-4">
                                <h4>Makkah Hotel</h4>
                                <div class="col-lg-6">
                                    <label for="field1">Makkah Hotel</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">Select Hotel</option>
                                        @foreach ($makkaHotels as $hotel)
                                          <option value="">{{$hotel}}</option>  
                                        @endforeach
                                      
                                    </select>
                                   </div>

                                  <div class="d-flex align-items-center col-lg-6">
                                        <div class="">
                                        <label for="field1">Check In</label>
                                        <input class="form-control " type="date" wire:model.live='makkaCheckIn' id="adult" placeholder="Mobile">
                                       </div>
                                       <div id="d-count" class="mt-3 ">{{$makkaHotelDaysCount ?? 0}}</div>
                                       <div class="">
                                        <label for="field1">Check Out</label>
                                        <input class="form-control " type="date"  wire:model.live='makkaCheckOut' id="child" placeholder="Email">
                                       </div>
                                  </div>
                                  <div>
                                    <button class="btn btn-primary"  wire:click="addMakkaRoom">Add Room</button>
                                  </div>
                                 <div class="d-flex flex-wrap">
                                   <!-- Rooms List -->
   
        @foreach($makkaRooms as $index => $room)
            <div class="col-lg-4 p-3" style="">
                <h6 style="color: rgba(0, 0, 0, 0.5);">Room {{ $index + 1 }}</h6>

                <div class="mt-2">
                    <label>Adult</label>
                    <input class="form-control" type="number" max="4" min="1" wire:model="makkarooms.{{ $index }}.adults">
                </div> 

                <div class="mt-2">
                    <label>Child (Note* Child below age 6 no bed)</label>
                    <input class="form-control" type="number" max="2" min="0" wire:model="makkarooms.{{ $index }}.children">
                </div> 

                <button class="btn btn-danger mt-2" wire:click="removeMakkaRoom({{ $index }})">Remove</button>
            </div>
        @endforeach
  

                                   {{-- <div class="col-lg-4 p-3" style="border: 1px solid #666;">
                                    <h3>Room 1</h3>
                                    <div class=" mt-2">
                                        <label for="field1">Adult</label>
                                        <input class="form-control" type="number" max="4" min="1"  id="field1" placeholder="No.of Adults">
                                       </div> 
    
                                       <div class=" mt-2">
                                        <label for="field1">Child (Note* Child below age 6 no bed)</label>
                                        <input class="form-control" type="number" max="2" min="1"  id="field1" placeholder="No.of Childs">
                                        
                                       </div> 
                                   </div>

                                   <div class="col-lg-4 p-3" style="border: 1px solid #666;">
                                    <h3>Room 1</h3>
                                    <div class=" mt-2">
                                        <label for="field1">Adult</label>
                                        <input class="form-control" type="number" max="4" min="1"  id="field1" placeholder="No.of Adults">
                                       </div> 
    
                                       <div class=" mt-2">
                                        <label for="field1">Child (Note* Child below age 6 no bed)</label>
                                        <input class="form-control" type="number" max="2" min="1"  id="field1" placeholder="No.of Childs">
                                        
                                       </div> 
                                   </div>

                                   <div class="col-lg-4 p-3" style="border: 1px solid #666;">
                                    <h3>Room 1</h3>
                                    <div class=" mt-2">
                                        <label for="field1">Adult</label>
                                        <input class="form-control" type="number" max="4" min="1"  id="field1" placeholder="No.of Adults">
                                       </div> 
    
                                       <div class=" mt-2">
                                        <label for="field1">Child (Note* Child below age 6 no bed)</label>
                                        <input class="form-control" type="number" max="2" min="1"  id="field1" placeholder="No.of Childs">
                                        
                                       </div> 
                                   </div> --}}
                                 </div>

                                   {{-- <div class="col-lg-4 mt-2">
                                    <label for="field1">Room Type</label>
                                    <input class="form-control" type="text"  id="field1" placeholder="Email">
                                   </div> --}}

                                   {{-- <div class="col-lg-4 mt-2">
                                    <label for="field1">Room Count</label>
                                    <input class="form-control" type="text"  id="field1" placeholder="Email">
                                   </div> --}}

                               </div>

                               <hr>
                               <div class="row mt-4">
                                <h4>Madina Hotel</h4>
                                <div class="col-lg-6">
                                    <label for="field1">Madina Hotel</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">Select Hotel</option>
                                        @foreach ($madinaHotels as  $hotel)
                                        <option value="">{{$hotel}}</option>
                                            
                                        @endforeach
                                       
                                    </select>
                                   </div>

                                  <div class="d-flex align-items-center col-lg-6">
                                        <div class="">
                                        <label for="field1">Check In</label>
                                        <input class="form-control " type="date"  id="adult" wire:model.live='madinaCheckIn' placeholder="Mobile">
                                       </div>
                                       <div id="d-count" class="mt-3 ">{{$madinaHotelDaysCount ?? 0}}</div>
                                       <div class="">
                                        <label for="field1">Check Out</label>
                                        <input class="form-control " type="date"  id="child" wire:model.live='madinaCheckOut' placeholder="Email">
                                       </div>
                                  </div>
                                  <div>
                                    <button class="btn btn-primary"  wire:click="addRoom">Add Room</button>
                                  </div>
                                 <div class="d-flex flex-wrap">
                                   <!-- Rooms List -->
   
        @foreach($rooms as $index => $room)
            <div class="col-lg-4 p-3" style="">
                <h6 style="color: rgba(0, 0, 0, 0.5);">Room {{ $index + 1 }}</h6>

                <div class="mt-2">
                    <label>Adult</label>
                    <input class="form-control" type="number" max="4" min="1" wire:model="rooms.{{ $index }}.adults">
                </div> 

                <div class="mt-2">
                    <label>Child (Note* Child below age 6 no bed)</label>
                    <input class="form-control" type="number" max="2" min="0" wire:model="rooms.{{ $index }}.children">
                </div> 

                <button class="btn btn-danger mt-2" wire:click="removeRoom({{ $index }})">Remove</button>
            </div>
        @endforeach
  

                                  
                                 </div>

                                 

                               </div>


                               
                              



                                @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            @endif

                            @if ($currentStep >= 3)
                            <div class="d-flex justify-content-evenly align-items-center flex-column custom-field-bars py-4" style="padding: 5px;">
                                <h5 class="mt-2 mb-2 text-primary" style="">Visa Details</h5>
                                <hr>
                                    <div class="col-lg-6 mb-3">
                                
                                    <label for="field1">Visa Type</label>
                                    <select name="" class="form-control" id="" wire:model="visatype">
                                        <option value="">Select Visa Type</option>
                                        @foreach ($visaType as  $type)
                                        <option value="{{$type->id}}">{{$type->visa_type}}</option>
                                            
                                        @endforeach
                                       
                                    </select>
                                   </div>

                                  


                                   <div class="col-lg-6 mb-3 d-flex justify-content-between">
                                      <div class="col-lg-4">
                                        <label for="field1">Visa Count</label>
                                        <input class="form-control" type="number" wire:model.live="visacount" min="0" id="field1" placeholder="Count">
                                      </div>
                                      <div class="price">
                                        <span> price:</span><br>
                                        <span>{{$visaTotalPrice}}</span>
                                    </div>
                                   </div>

                                @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            @endif

                            @if ($currentStep >= 4)
                            <div class="d-flex justify-content-evenly align-items-center flex-column custom-field-bars py-4" style="padding: 5px;">
                                <h5 class="mt-2 mb-2 text-primary" style="">Trasport Details</h5>
                                <hr>
                              
                                    <div class="col-lg-6 mb-3">
                                    <label for="field1">Select Sector</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">Select Sector</option>
                                        @foreach ($carSector as  $type)
                                        <option value="{{$type->id}}">{{$type->car_sector}}</option>
                                            
                                        @endforeach
                                       
                                    </select>
                                   </div>

                                   <div class="col-lg-6 mb-3">
                                    <label for="field1">Select Car Type</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">Select Car Type</option>
                                        @foreach ($carType as  $type)
                                        <option value="">{{$type}}</option>
                                            
                                        @endforeach
                                       
                                    </select>
                                   </div>

                                  

                              
                              



                                @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            @endif

                            @if ($currentStep >= 5)
                            <div class="d-flex justify-content-evenly align-items-center flex-column custom-field-bars py-4" style="padding: 5px;">
                                <h5 class="mt-2 mb-2 text-primary" style="">SightSeeing Details</h5>
                                <hr>
                              
                                   
                                   <div class="col-lg-6 d-flex justify-content-between">
                                    <div class="col-lg-4 mb-3">
                                        <label for="field1">Makkah SightSeeing </label>
                                        <select name="" class="form-control" id="" wire:model.live="SelectedMakkaSight">
                                            <option value="">Select Sight</option>
                                            @foreach ($makkaSightSeeing as  $type)
                                            <option value="{{$type}}">{{$type}}</option>
                                                
                                            @endforeach
                                           
                                        </select>
                                       </div>
                                    <div class="price">
                                        <span> price:</span><br>
                                        <span>{{$makkaSightPrice}}</span>
                                    </div>
                                   </div>

                                   <div class="col-lg-6 d-flex justify-content-between">
                                    <div class="col-lg-4 mb-3">
                                        <label for="field1">Madina SightSeeing</label>
                                        <select name="" class="form-control" id="" wire:model.live="SelectedMadinaSight">
                                            <option value="">Select Sight</option>
                                            @foreach ($madinaSightSeeing as  $type)
                                            <option value="{{$type}}">{{$type}}</option>
                                                
                                            @endforeach
                                           
                                        </select>
                                       </div>
                                    <div class="price">
                                        <span> price:</span><br>
                                        <span>{{$madinaSightPrice}}</span>
                                    </div>
                                   </div>

                                  
                            </div> 
                            @endif

                            @if ($currentStep >= 6)
                            <div class="d-flex justify-content-evenly align-items-center flex-column custom-field-bars py-4" style="padding: 5px;">
                                <h5 class="mt-2 mb-2 text-primary" style="">Inclusion Details</h5>
                                <hr>
                              
                                   <div class="col-lg-6 d-flex justify-content-between">
                                    <div class="col-lg-4 mb-3">
                                        <label for="field1">Ticket</label>
                                        <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Enter price">
                                       </div>
                                    {{-- <div class="price">
                                        <span>Ticket price:</span><br>
                                        <span>7584</span>
                                    </div> --}}
                                   </div>

                                   <div class="col-lg-6 d-flex justify-content-between">
                                    <div class="col-lg-4 mb-3">
                                        <label for="field1">Meal</label>
                                        <select name="" class="form-control" id="" wire:model.live="SelectedMeal">
                                            <option value="">Select Meal Type</option>
                                            @foreach ($mealType as  $type)
                                            <option value="{{$type}}">{{$type}}</option>
                                                
                                            @endforeach
                                           
                                        </select>
                                       </div>
                                    <div class="price">
                                        <span>Meal price:</span><br>
                                        <span>{{$mealPrice}}</span>
                                    </div>
                                   </div>

                                   <div class="col-lg-6 d-flex justify-content-between">
                                    <div class="col-lg-4 mb-3">
                                        <label for="field1">Laundry</label>
                                        <select name="" class="form-control" id="" wire:model.live="SelectedLaundry">
                                            <option value="" >Select Laundry Type</option>
                                            @foreach ($laundryType as  $type)
                                            <option value="{{$type}}">{{$type}}</option>
                                                
                                            @endforeach
                                           
                                        </select>
                                       </div>
                                    <div class="price">
                                        <span>Laundry price:</span><br>
                                        <span>{{$laundryPrice}}</span>
                                    </div>
                                   </div>

                                   <div class="col-lg-6 d-flex justify-content-between">
                                    <div class="col-lg-4 mb-3">
                                        <label for="field1">Umrah Kit Gents</label>
                                        <input class="form-control" type="number" min="0"  wire:model.live="umrahGenKitCount" id="field1" placeholder="Enter Count">
                                       </div>
                                    <div class="price">
                                        <span>Umrah Kit Gent price:</span><br>
                                        <span>{{$genKitPrice}}</span>
                                    </div>
                                   </div>
                                   <div class="col-lg-6 d-flex justify-content-between">
                                    <div class="col-lg-4 mb-3">
                                        <label for="field1">Umrah Kit Ladies</label>
                                        <input class="form-control" type="number" min="0" wire:model.live="umrahLadiKitCount" id="field1" placeholder="Enter Count">
                                       </div>
                                    <div class="price">
                                        <span>Umrah Kit Ladies price:</span><br>
                                        <span>{{$ladiKitPrice}}</span>
                                    </div>
                                   </div>

                                   <div>
                                   
                                    <p>Per Person: 537489</p>
                                   
                                    <strong>Grand Total: 480854</strong>
                                   </div>
                                   <div>
                                    <button class="btn btn-success"><i class="fa-solid fa-download"></i>  Download</button>
                                   </div>
                            </div>
                                
                            @endif

                            @if ($currentStep == 8)
                           
                                    {{-- @if ($currentStep >= 1)
                                    <div class="d-flex justify-content-evenly align-items-center flex-column custom-field-bars py-4" style="">
                                        <h5 class="mt-2 mb-2 text-primary" style="">Personal Details</h5>
                                        <hr>
                                       <div class="row col-lg-12">
                                        <div class="col-lg-4">
                                            <label for="field1">Name</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Name">
                                           </div>
        
                                           <div class="col-lg-4">
                                            <label for="field1">Mobile</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Mobile">
                                           </div>
        
                                           <div class="col-lg-4">
                                            <label for="field1">Email</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Email">
                                           </div>
        
                                       </div>
                                       <div class="row col-lg-12 mt-4">
                                        <div class="col-lg-4">
                                            <label for="field1">Adult</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="No.of Adults">
                                           </div>
        
                                           <div class="col-lg-4">
                                            <label for="field1">Child</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="No.of Childs">
                                           </div>
        
                                           <div class="col-lg-4">
                                            <label for="field1">Infant</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Infant">
                                           </div>
        
                                       </div>
    
    
    
                                        @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    @elseif ($currentStep === 2 || $currentStep>1)
                                    <div class="d-flex justify-content-evenly align-items-center flex-column" style="padding: 5px;">
                                        <h5 class="mt-2 mb-2 text-primary" style="">Hotel Details</h5>
                                        <hr>
                                       <div class="row">
                                        <h4>Makkah Hotel</h4>
                                        <div class="col-lg-4">
                                            <label for="field1">Makkah Hotel</label>
                                            <select name="" class="form-control" id="">
                                                <option value="">ljal</option>
                                                <option value="">ljal</option>
                                                <option value="">ljal</option>
                                            </select>
                                           </div>
        
                                           <div class="col-lg-4">
                                            <label for="field1">Check In</label>
                                            <input class="form-control" type="date"  id="field1" placeholder="Mobile">
                                           </div>
        
                                           <div class="col-lg-4">
                                            <label for="field1">Check Out</label>
                                            <input class="form-control" type="date"  id="field1" placeholder="Email">
                                           </div>
        
                                           <div class="col-lg-4 mt-2">
                                            <label for="field1">Room Type</label>
                                            <input class="form-control" type="text"  id="field1" placeholder="Email">
                                           </div>
        
                                           <div class="col-lg-4 mt-2">
                                            <label for="field1">Room Count</label>
                                            <input class="form-control" type="text"  id="field1" placeholder="Email">
                                           </div>
        
                                       </div>
                                       <hr>
                                       <div class="row mt-4">
                                        <h4>Madina Hotel</h4>
                                        <div class="col-lg-4">
                                            <label for="field1">Makkah Hotel</label>
                                            <select name="" class="form-control" id="">
                                                <option value="">ljal</option>
                                                <option value="">ljal</option>
                                                <option value="">ljal</option>
                                            </select>
                                           </div>
        
                                           <div class="col-lg-4">
                                            <label for="field1">Check In</label>
                                            <input class="form-control " type="date"  id="field1" placeholder="Mobile">
                                           </div>
        
                                           <div class="col-lg-4">
                                            <label for="field1">Check Out</label>
                                            <input class="form-control " type="date"  id="field1" placeholder="Email">
                                           </div>
        
                                           <div class="col-lg-4 mt-2">
                                            <label for="field1">Room Type</label>
                                            <input class="form-control" type="text"  id="field1" placeholder="Email">
                                           </div>
        
                                           <div class="col-lg-4 mt-2">
                                            <label for="field1">Room Count</label>
                                            <input class="form-control" type="text"  id="field1" placeholder="Email">
                                           </div>
        
                                       </div>
        
        
        
                                        @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                        
                                    @endif --}}




                            
                            {{-- @elseif ($currentStep == 2)
                            <div class="d-flex justify-content-evenly align-items-center flex-column" style="padding: 5px;">
                                <h5 class="mt-2 mb-2 text-primary" style="">Hotel Details</h5>
                                <hr>
                               <div class="row">
                                <h4>Makkah Hotel</h4>
                                <div class="col-lg-4">
                                    <label for="field1">Makkah Hotel</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">ljal</option>
                                        <option value="">ljal</option>
                                        <option value="">ljal</option>
                                    </select>
                                   </div>

                                   <div class="col-lg-4">
                                    <label for="field1">Check In</label>
                                    <input class="form-control" type="date"  id="field1" placeholder="Mobile">
                                   </div>

                                   <div class="col-lg-4">
                                    <label for="field1">Check Out</label>
                                    <input class="form-control" type="date"  id="field1" placeholder="Email">
                                   </div>

                                   <div class="col-lg-4 mt-2">
                                    <label for="field1">Room Type</label>
                                    <input class="form-control" type="text"  id="field1" placeholder="Email">
                                   </div>

                                   <div class="col-lg-4 mt-2">
                                    <label for="field1">Room Count</label>
                                    <input class="form-control" type="text"  id="field1" placeholder="Email">
                                   </div>

                               </div>
                               <hr>
                               <div class="row mt-4">
                                <h4>Madina Hotel</h4>
                                <div class="col-lg-4">
                                    <label for="field1">Makkah Hotel</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">ljal</option>
                                        <option value="">ljal</option>
                                        <option value="">ljal</option>
                                    </select>
                                   </div>

                                   <div class="col-lg-4">
                                    <label for="field1">Check In</label>
                                    <input class="form-control " type="date"  id="field1" placeholder="Mobile">
                                   </div>

                                   <div class="col-lg-4">
                                    <label for="field1">Check Out</label>
                                    <input class="form-control " type="date"  id="field1" placeholder="Email">
                                   </div>

                                   <div class="col-lg-4 mt-2">
                                    <label for="field1">Room Type</label>
                                    <input class="form-control" type="text"  id="field1" placeholder="Email">
                                   </div>

                                   <div class="col-lg-4 mt-2">
                                    <label for="field1">Room Count</label>
                                    <input class="form-control" type="text"  id="field1" placeholder="Email">
                                   </div>

                               </div>



                                @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                            </div> --}}
                            {{-- @elseif ($currentStep == 3)
                            <div class="d-flex justify-content-evenly align-items-center flex-column" style="padding: 5px;">
                                <h5 class="mt-2 mb-2 text-primary" style="">Visa Details</h5>
                                <hr>
                                    <div class="col-lg-6 mb-3">
                                
                                    <label for="field1">Visa Type</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Visa Type">
                                   </div>

                                   <div class="col-lg-6 mb-3">
                                    <label for="field1">Visa Count</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Count">
                                   </div>

                                

                              
                              



                                @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                            </div> --}}
                            {{-- @elseif ($currentStep == 4)
                            <div class="d-flex justify-content-evenly align-items-center flex-column" style="padding: 5px;">
                                <h5 class="mt-2 mb-2 text-primary" style="">Trasport Details</h5>
                                <hr>
                              
                                    <div class="col-lg-6 mb-3">
                                    <label for="field1">Select Sector</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Visa Type">
                                   </div>

                                   <div class="col-lg-6 mb-3">
                                    <label for="field1">Select Car Type</label>
                                    <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Count">
                                   </div>

                                  

                              
                              



                                @error('formData.field1') <span class="error">{{ $message }}</span> @enderror
                            </div> --}}
                            {{-- @elseif ($currentStep == 5)
                                <div class="d-flex justify-content-evenly align-items-center flex-column" style="padding: 5px;">
                                    <h5 class="mt-2 mb-2 text-primary" style="">SightSeeing Details</h5>
                                    <hr>
                                  
                                       
                                       <div class="col-lg-6 d-flex justify-content-between">
                                        <div class="col-lg-4 mb-3">
                                            <label for="field1">Makkah SightSeeing </label>
                                        <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Visa Type">
                                           </div>
                                        <div class="price">
                                            <span> price:</span><br>
                                            <span>7584</span>
                                        </div>
                                       </div>

                                       <div class="col-lg-6 d-flex justify-content-between">
                                        <div class="col-lg-4 mb-3">
                                            <label for="field1">Madina SightSeeing</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Count">
                                           </div>
                                        <div class="price">
                                            <span> price:</span><br>
                                            <span>7584</span>
                                        </div>
                                       </div>
    
                                      
                                </div> --}}
                            {{-- @elseif ($currentStep == 6)
                                <div class="d-flex justify-content-evenly align-items-center flex-column" style="padding: 5px;">
                                    <h5 class="mt-2 mb-2 text-primary" style="">Inclusion Details</h5>
                                    <hr>
                                  
                                       <div class="col-lg-6 d-flex justify-content-between">
                                        <div class="col-lg-4 mb-3">
                                            <label for="field1">Ticket</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Enter price">
                                           </div>
                                        <div class="price">
                                            <span>Ticket price:</span><br>
                                            <span>7584</span>
                                        </div>
                                       </div>

                                       <div class="col-lg-6 d-flex justify-content-between">
                                        <div class="col-lg-4 mb-3">
                                            <label for="field1">Ticket</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Enter price">
                                           </div>
                                        <div class="price">
                                            <span>Ticket price:</span><br>
                                            <span>7584</span>
                                        </div>
                                       </div>
    
                                       <div class="col-lg-6 d-flex justify-content-between">
                                        <div class="col-lg-4 mb-3">
                                            <label for="field1">Ticket</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Enter price">
                                           </div>
                                        <div class="price">
                                            <span>Ticket price:</span><br>
                                            <span>7584</span>
                                        </div>
                                       </div>

                                       <div class="col-lg-6 d-flex justify-content-between">
                                        <div class="col-lg-4 mb-3">
                                            <label for="field1">Ticket</label>
                                            <input class="form-control" type="text" wire:model="formData.field1" id="field1" placeholder="Enter price">
                                           </div>
                                        <div class="price">
                                            <span>Ticket price:</span><br>
                                            <span>7584</span>
                                        </div>
                                       </div>

                                       <div>
                                       
                                        <p>Per Person: 537489</p>
                                       
                                        <strong>Grand Total: 480854</strong>
                                       </div>
                                       <div>
                                        <button class="btn btn-success"><i class="fa-solid fa-download"></i>  Download</button>
                                       </div>
                                </div> --}}
                        
                            @endif
                        </div>
                    
                       
                       
                    </div>
 
                    
                </div>



            </div>

           
        </div>
        <!-- Room End -->

         <!-- Navigation Buttons -->
         <div class="step-navigation d-flex justify-content-evenly ">
            @if ($currentStep > 1)
                {{-- <button class="btn btn-primary" wire:click="previousStep" type="button">Back</button> --}}
            @endif
    
            @if ($currentStep < $totalSteps)
                <button class="btn btn-success" wire:click="nextStep" type="button">Continue</button>
                @if ($currentStep >1)
                <button class="btn btn-danger" wire:click="skipStep" type="button">Skip</button>
                @endif
            @else
                <button class="btn btn-success" wire:click="submitForm" type="button">Submit</button>
            @endif
        </div>

{{-- <section>
    <div class="d-flex justify-content-center align-items-center gap-4">
        <!-- Check-in Date -->
        <div class="text-center">
            <label for="checkin">Check-In</label>
            <input type="date" wire:model="checkInDate" id="checkin" class="form-control">
        </div>
    
        <!-- Days Difference -->
        <div class="days-circle d-flex justify-content-center align-items-center">
            {{ $daysBetween }} Nights
        </div>
    
        <!-- Check-out Date -->
        <div class="text-center">
            <label for="checkout">Check-Out</label>
            <input type="date" wire:model="checkOutDate" id="checkout" class="form-control">
        </div>
    </div>
    
    <style>
        .days-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #007bff;
            color: white;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    
</section> --}}



        <!-- Testimonial Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"The Umrah package from Rahat Group was truly exceptional. Everything was perfectly organized, from the flights to the accommodation. I felt completely at ease throughout the journey. Highly recommend!"</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person2.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Shaikh</h6>
                                <small>Akola(Maharashtra)</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"I had an unforgettable experience with Rahat Group's Umrah package. I will definitely choose them again for future trips. The guides were knowledgeable, the accommodations were comfortable."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person1.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Ansari Hammad</h6>
                                <small>Hailakandi(Assam)</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>"Rahat Group provided an outstanding Umrah service. Their attention to detail, friendly staff, and seamless arrangements allowed me to focus entirely on my worship. I will definitely choose them again for future trips."</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="{{asset('asserts/user/img/haj/person3.jpg')}}" style="width: 45px; height: 45px; object-fit: contain;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Mohammed Milkan</h6>
                                <small>Baraily(Uttar Pradhesh)</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>






        <style>
            .stepper {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }
            .step {
                display: flex;
                flex-direction: column;
                align-items: center;
                flex: 1;
                position: relative;

                
            }
            .step:not(:last-child)::after {
                content: '';
                position: absolute;
                top: 20px;
                left: 50%;
                width: 100%;
                height: 2px;
                background: #ccc;
                z-index: -1;
            }
            .step.active::after {
                background: rgb(0, 197, 0);
                /* background: #007bff; */
            }
            .step-circle {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                background: #ccc;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #fff;
                font-weight: bold;
                margin-bottom: 10px;
            }
            .step.active .step-circle {
                background:#fea116;
                /* background: #007bff; */
            }
            .step-label {
                font-size: 14px;
                color: #666;
            }
            .step.active .step-label {
                 
                color: #0f172b; 
                /* color: #007bff;  */
            }
            .step-content {
                margin-bottom: 20px;
            }
            .step-navigation {
                display: flex;
                gap: 10px;
                margin-top: 3rem;
            }
            .error {
                color: red;
                font-size: 0.875em;
            }




            /* below the style for field bars  */
            .custom-field-bars{
                margin-top: 1rem;
                margin-bottom: 2rem;
                border-radius: 5px;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
                padding:60px auto;

                input{
                    box-shadow: inset 3px 3px 3px rgba(0, 0, 0, 0.2), inset -4px -4px 4px white;
                    /* box-shadow: inset 3px 3px 5px white, inset -4px -4px 4px rgba(0, 0, 0, 0.2); */
                    border-radius:10px ;
                }
            }


            /* for scrollbar style*/
            /* Scrollbar for Chrome, Edge, and Safari */
.step-content::-webkit-scrollbar {
  width: 8px; /* Width of the scrollbar */
}

.step-content::-webkit-scrollbar-track {
  background: #f1f1f1; /* Light background for contrast */
  border-radius: 4px;
}

.step-content::-webkit-scrollbar-thumb {
  background: #fea116; /* Your custom scrollbar color */
  border-radius: 4px;
}

/* Scrollbar for Firefox */
.step-content {
  scrollbar-color: #fea116 #f1f1f1; /* thumb color and track color */
  scrollbar-width: thin; /* "auto", "thin", or "none" */
}

/**/
#adult,#child{
    height: 3rem;
    width: 8rem;
    

}
#adult{
    border-radius: 10px 0px 0px 10px;
}
#child{
    border-radius: 00px 10px 10px 0px;
}
#d-count{
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 9px;
    padding: 10px;
    height: 2rem;
   display: flex;
   justify-content: center;
   align-items: center; 
   margin-top: 19px
}
        </style>




</section>