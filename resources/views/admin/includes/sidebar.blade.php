<aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            {{-- <div>
              <img src="{{asset('images/umrah_dark.png')}}" class="logo-icon" alt="logo icon">
            </div> --}}
            <div>

              <img src="{{asset('asserts/user/img/haj/rahat_logo.png')}}" class="logo-icon" alt="logo icon" style="height: 4rem; width:auto;">

            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="{{route('admin.dashboard')}}" wire:navigate>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
           
           
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Package Controller</div>
              </a>
              <ul>
                <!-- <li>
                    <a href="{{route('admin.package-manager')}}" wire:navigate>
                        <i class="bi bi-circle"></i>List All Package
                    </a>
                </li> -->
                <li>
                    <a href="{{route('admin.umrahPackage')}}" wire:navigate>
                        <i class="bi bi-circle"></i>List All Package
                    </a>
                </li>
                
            {{-- <li>


                  <a href="{{route('package.ramzan')}}" >
                      <i class="bi bi-circle"></i>Ramzaan Package Manager
                  </a>
              </li> --}}
                   <!--
                <li> <a href="{{route('admin.package-request')}}" wire:navigate><i class="bi bi-circle"></i>Package Requests</a>
                    <a href="{{route('admin.umrah-land-packages')}}" wire:navigate>
                        <i class="bi bi-circle"></i>Umrah Land Packages
                    </a>
                </li> -->
                {{-- <li> 
                  <a href="{{route('admin.package-request')}}" wire:navigate><i class="bi bi-circle"></i>Package Requests</a>

                </li> --}}
              </ul>
            </li>

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Ziyarat Controller</div>
              </a>
              <ul>
                <li> 
                  <a href="{{ route('admin.ziyarat') }}" wire:navigate><i class="bi bi-circle"></i>List All Ziyarat</a>
                </li>
                <li> 
                  <a href="{{ route('admin.ziyarat-cities') }}" wire:navigate><i class="bi bi-circle"></i>Ziyarat Cities</a>
                </li>
              </ul>
            </li>

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Saudi Visa Controller</div>
              </a>
              <ul>
                <l`i> <a href="{{ route('admin.saudi-visa') }}" wire:navigate><i class="bi bi-circle"></i>List All Visa</a>
                </l>
                <li> <a href="{{ route('admin.visa-request') }}" wire:navigate><i class="bi bi-circle"></i>Visa Requests</a>
                </li>
              </ul>
            </li>
            {{-- <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Request</div>
              </a>
              <ul>
                <li> 
                  <a href="{{ route('admin.package-request-history') }}" wire:navigate><i class="bi bi-circle"></i>Package Request History</a>
                </li>
                <li> 
                  <a href="{{ route('admin.visa-request-history') }}" wire:navigate><i class="bi bi-circle"></i>Visa Request History</a>
                </li>
              </ul>
            </li> --}}
           
            <!-- <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Newsletter Emails</div>
              </a>
              <ul>
                <li> 
                  <a href="{{ route('admin.newsletters') }}" wire:navigate><i class="bi bi-circle"></i>All Newsletter Emails</a>
                </li>
              </ul>
            </li> -->
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Hotel Controller</div>
              </a>
              <ul>
                <li> 
                  <a href="{{ route('admin.listHotelDetails') }}" wire:navigate><i class="bi bi-circle"></i>List Hotel Details</a>
                </li>
                <!-- <li> 
                  <a href="{{ route('admin.visa-request-history') }}" wire:navigate><i class="bi bi-circle"></i></a>
                </li> -->
              </ul>
            </li>

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Catring Controller</div>
              </a>
              <ul>
                <li> 
                  
                  <a href="{{ route('admin.catring-list') }}" wire:navigate><i class="bi bi-circle"></i>Catring Food list</a>
                </li>
          
              </ul>
            </li>

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Sight Seeing Controller</div>
              </a>
              <ul>
                <li> 
                  <a href="{{ route('admin.sight-seeing-list') }}" wire:navigate><i class="bi bi-circle"></i>Sight Seeing list</a>
                </li>
          
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Laundry Controller</div>
              </a>
              <ul>
                <li> 

                  <a href="{{ route('admin.list-laundry') }}" wire:navigate><i class="bi bi-circle"></i>List All Laundry</a>
                  {{-- <a href="{{ route('admin.laundry') }}" wire:navigate><i class="bi bi-circle"></i>List All Laundry</a> --}}

                </li>
          
              </ul>
            </li>
            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Transport Controller</div>
              </a>
              <ul>
                <li> 
                  <a href="{{ route('admin.carType') }}" wire:navigate><i class="bi bi-circle"></i>List Car Type</a>
                </li>
                <li> 
                  <a href="{{ route('admin.carSector') }}" wire:navigate><i class="bi bi-circle"></i>List Car Sector</a>
                </li>
                <li> 
                  <a href="{{ route('admin.listTransport') }}" wire:navigate><i class="bi bi-circle"></i>List Car Rentel</a>
                </li>
              </ul>
            </li>

            <li>
              <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bi bi-award-fill"></i>
                </div>
                <div class="menu-title">Settings</div>
              </a>
              <ul>
                <li> 
                  <a href="{{ route('admin.flight-managent') }}" wire:navigate><i class="bi bi-circle"></i>Manage Flights </a>
                </li>
                <li> 
                  <a href="{{ route('admin.departure-city') }}" wire:navigate><i class="bi bi-circle"></i>Manage Departure city</a>
                </li>
                <li> 
                  <a href="{{ route('admin.hotel-cities') }}" wire:navigate><i class="bi bi-circle"></i>Manage Hotel city</a>
                </li>
                <li> 
                  <a href="{{ route('admin.inclusion') }}" wire:navigate><i class="bi bi-circle"></i>Inclusions</a>
                </li>
                  <!----------->
                  <li>
                    <a class="has-arrow" href="javascript:;">
                      <div class="parent-icon"><i class="bi bi-award-fill"></i>
                      </div>
                      <div class="menu-title">Package Setting</div>
                    </a>
                    <ul>
                      <li> 
                        <a href="{{ route('admin.package-types') }}" wire:navigate><i class="bi bi-circle"></i>Package Types</a>
                      </li>
                      {{-- <li> 
                        <a href="{{ route('admin.package.transport.type') }}" wire:navigate><i class="bi bi-circle"></i>Package Departure Type</a>
                      </li> --}}
                       {{-- <li> 
                        <a href="{{ route('admin.service-type') }}" wire:navigate><i class="bi bi-circle"></i>Service Types</a>
                      </li> --}}
                     {{-- <li> 
                        <a href="{{ route('admin.inclusion') }}" wire:navigate><i class="bi bi-circle"></i>Inclusions</a>
                      </li> --}}
                    </ul>
                  </li>
                  <!----------->

              </ul>
            </li>

            <li class="menu-label">Enquires</li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                </div>
                <div class="menu-title">Quick Enquires</div>
              </a>
              <ul>
                <!-- <li>
                    <a href="{{route('admin.package-manager')}}" wire:navigate>
                        <i class="bi bi-circle"></i>List All Package
                    </a>
                </li> -->
                <li>
                    <a href="{{route('quick.enquiries')}}" wire:navigate>
                        <i class="bi bi-circle"></i>Enquires From User
                    </a>
                </li>
                
              <li>
                  <a href="{{route('agentsignup')}}" >
                      <i class="bi bi-circle"></i>Enquires From Agent
                  </a>
              </li>
              <li>
                  <a href="{{route('package-enquire-from-user')}}" >
                      <i class="bi bi-circle"></i>Package Enquires From user
                  </a>
              </li>
              {{-- <li>
                  <a href="{{route('hotel-enquire-from-user')}}" >
                      <i class="bi bi-circle"></i>Hotel Enquires From user
                  </a>
              </li> --}}
                   <!--
                <li> <a href="{{route('admin.package-request')}}" wire:navigate><i class="bi bi-circle"></i>Package Requests</a>
                    <a href="{{route('admin.umrah-land-packages')}}" wire:navigate>
                        <i class="bi bi-circle"></i>Umrah Land Packages
                    </a>
                </li> -->
                
              </ul>
            </li>
          </ul>
          <!--end navigation-->
       </aside>
