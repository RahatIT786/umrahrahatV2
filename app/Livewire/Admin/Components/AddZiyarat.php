<?php

namespace App\Livewire\Admin\Components;

use App\Models\ZiyaratCity;
use Livewire\Component;
use App\Models\HotelDetail;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use App\Models\MainZiyarat;
use App\Models\PackageDetail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Str;
use App\Models\PackageType;
use App\Models\inclusion;
use App\Models\FlightManagement;
use App\Models\DepartureCity;
use App\Models\CateringController;
use App\Models\Laundry;
use App\Models\HotelCities;

class AddZiyarat extends Component
{
    use LivewireAlert, WithFileUploads;

    public $package_name , $packageImage, $packageDescription;
    public $package_type_ids = [];
    public $makka_rating = [];
    public $makkaHotel = [], $makka_hotel = [];
    public $madina_rating = [];
    public $madinaHotel = [], $madina_hotel = [];
    public $packageType = [];
    Public $packageIncludes = [];
    public $flights = [];
    public $departureCities = [];
    public $DepartureCity = [];
    public $food_type = [];
    public $laundray_type = [];
    public $includes = [];
    public $flightList = [];
    public $package_days;
    public $service_type;
    public $foodController;
    public $laundrayController;
    public $ziyaratCity;

    public $g_share_price = [], $qt_share_price = [], $qd_share_price = [], $t_share_price = [], $d_share_price = [], $single_price = [], $child_w_b = [], $child_wo_b = [], $infants = [];

    public $paymentPolicy = 'A minimum of Rs. 40,000 per person must be paid to secure a booking if the departure date is after 21 days.
50% of the total amount is due 21 to 30 days before departure.
Full payment is required 21 days before departure, or the booking will be canceled without prior notice.
The tour cost remains the same for bookings through Agents, but Rahat Travels Of India Pvt. Ltd. is not responsible for any cash transactions with Agents.
For bookings within 21 days of departure,
100% payment is required.
For advance bookings, 100% payment must be cleared at least 21 days before departure.
No tickets will be issued if the payment for tickets is not completed 21 days before departure, in accordance with airline regulations.
Indian passport valid for at least 6 months having minimum 2 blank pages.
Pan card copy (Linked with Aadhar Number)' ;

    public $importantNotes = 'All Prices quoted are per person and in Indian Rupees.
In case of package booked without umrah visa through us, than transportation will be subject to availability.
Peak season groups will have an additional surcharge of Rs. 4000/ per person.
Flight Tickets can be availed at an approximate additional cost of INR 36,500. The final price, however, is subject to the fare at the time of ticket issuance.
Extra luggage other than mentioned on ticket would be paid by the pilgrim.
Unutilized services are Non-refundable.
Hotel Distance may vary. Distances given are from the outer border of Haram Shareef &
Masjid-E- Nabvi.
Rooms Allotment as per hotel management, no room choice will be entertained.
Rooms Check-In time at 04 PM and Check-Out time at 12 PM (Saudi Local time)
The tour dates, Flight schedule and Tour Itinerary programs are provisional and subject to change as per Flight availability etc.
In case of Fare difference arises, then the customer shall bear it
Tour Operator reserves the right to provide similar Hotels / Flights. No refund shall be given in such cases. In case of Fare difference arises, then the customer shall bear it.
The tour costs are based on Saudi Riyal @ Rs.22.50/. Any increase in the given rates at the time of delivery of passport before departures of the tour shall be collected from the passengers.
If you travel individually other than group dates & flights, you will bear the additional transportation charges as per your itinerary.
Passengers have to arrange wheelchair on own.
All services are pre-booked and are based on strict timings. Any delay resulting in the pax missing the benefit of the services, then we are not responsible.
We are not responsible for any loss/damage/ color loss or discoloration of clothes due to Laundry.
Local Ziyarat are subject to local regulations.
Late comers will be left behind. No Alternate ziyarat or refund shall be given.
We are not responsible for any luggage losses, Injuries, damages, Accidents and additional expenses due to any reason, not limited to, delay of flight, act of God, deportation, umrah visa expiry, theft, personal injuries, damages related to laundry.
Services, Itinerary, and prices are subject to Saudi and Indian Government regulations.
Complimentary ZAM ZAM will be given only if accepted by the Airlines at the airport.
Arabic dates may be changed subject to sighting of moon.
Subject to Mumbai Jurisdiction only.',

 $cancellationPolicy = 'Rs. 40,000 per person is non-refundable.
50% of the package amount is non-refundable if canceled 21 to 30 days before departure.
100% of the package amount is non-refundable if canceled within 21 days of departure.
Date change charges: Rs. 10,000 per person, plus any applicable additional charges, for changes made 21 to 30 days before departure. Otherwise, the cancellation policies apply.
No date changes are allowed within 20 days of departure; cancellations apply.',
$FlightTransport = '
Economy Class Return Ticket
Round Trip Transfers on SIC Basis',
$packageMeals = 'Breakfast, Lunch & Dinner
Prepared by Indian Chefs in Hygienic & Licensed Kitchens.
Served in Buffet Style in Our Allotment Hotels & Food Parcels in 4 & 5 Star Hotels.',
$packageVisaTaxes = 'Single Entry Umrah Visa with Insurance is included.',
$packageInclusion = 'Return Flights in Economy Class. (VIA Flight on FIT Basis)
Visa & Insurance.
Hotels Stay. (Bus Service)
Breakfast, Lunch & Dinner.
Airport Pickup Drop.
Round Trip Transfsers.
Taif Visit on SIC Basis.
Badar Visit on SIC Basis.
Laundry Services.
Local Ziyarats in Makka on SIC Basis.
Local Ziyarats in Madina on SIC Basis.
Rowda Permit.
Saudi Sim, (Talk Time Haji will Pay)
Local staff at your service
24/7 customer support
Complimentary 5 ltrs ZAM-ZAM
Welcome Kit.',
 $packageExclusion = 'Private Transfers.
GST 5% & TCS 5%
Additional charges apply on excess luggage
Tour operator or Guide will not be held accountable for any kind of loss luggage on Airports
No room service will be provided
Facilities, services and amenities which are not indicated in this package
No refund is applicable on unutilized or unused services
Refund cannot be claimed if the stay is curtailed.',
$packageItinerary = '1 Arrival in Makkah Perform Umrah upon arrival
Rest and acclimatize to the surroundings

2-6 Perform daily prayers and tawaf around the Kaaba
Visit historical and religious sites in Makkah such as the Jabal al-Nour, Jabal Thawr, and Mina. Optional Tour of City of Taif will be conducted.

7 Departure to Madinah Travel to Madinah by road or air
Arrive and check-in to hotel

8-13 Perform daily prayers and visit the Prophets Mosque (Al-Masjid an-Nabawi) Optional Tour to City of Badar will be Conducted

Visit other historical and religious sites in Madinah such as Mount Uhud, Masjid Quba, and Masjid al-Qiblatayn

14 Bid farewell to Madinah and depart to your home country or next destination.';

public $hotelCount = 1;
public $HotelCategory = [];
public $HotelCity = [];
public $hotel_name = [];
public $HotelCities;
public $hotels = [
    ['city' => '', 'category' => '', 'names' => [], 'selected_name' => '']
];
public $hotelIdsString;

    public function mount(){
        $this->packageType = PackageType::where('delete_status',1)->get();
        $this->packageIncludes = inclusion::where('delete_status',1)->get();
        $this->flightList = FlightManagement::where('delete_status',1)->get();
        $this->DepartureCity = DepartureCity::where('delete_status',1)->get();
        $this->foodController = CateringController::where('delete_status',1)->get();
        $this->laundrayController = Laundry::where('delete_status',1)->get();
        $this->ziyaratCity = ZiyaratCity::where('delete_status',1)->get();
        $this->HotelCities = HotelCities::where('delete_status',1)->get();
        $this->hotelCount = 1;
        $this->HotelCity = [1 => ''];
        $this->HotelCategory = [1 => ''];
        $this->hotel_name = [1 => []];
    }

    public function increaseHotelFields()
    {
        $this->hotels[] = ['city' => '', 'category' => '', 'names' => [], 'selected_name' => ''];
    }

    public function decreaseHotelFields()
    {
        if (count($this->hotels) > 1) {
            array_pop($this->hotels);  // Removes the last hotel object
        }
    }

    public function getHotelCategory($index)
    {
        $selectedCategory = $this->hotels[$index]['category'];
        $selectedCity = $this->hotels[$index]['city'];

        $hotels = HotelDetail::where('hotelStarRating', $selectedCategory)
            ->where('deleteStatus', 1)
            ->where('hotelCity', $selectedCity)
            ->pluck('hotelName', 'id')
            ->toArray();

        $this->hotels[$index]['names'] = $hotels;
    }



    public function getMadinaHotel($index)
    {

        // Fetch hotels based on the selected rating
        $hotels = HotelDetail::where('hotelStarRating', $this->madina_rating[$index])
            ->where('deleteStatus',1)
            ->where('hotelCity', 'MADINAH')
            ->pluck('hotelName', 'id')->toArray();
        $this->madinaHotel[$index] = $hotels;
    }


    protected $rules = [
        'package_name' => 'required',
        'service_type' => 'required',
        'package_days' => 'required',
        'packageDescription' => 'required',
        'packageImage' => 'required',
        'paymentPolicy' => 'required',
        'importantNotes' => 'required',
        'cancellationPolicy' => 'required',
        'packageInclusion' => 'required',
        'packageExclusion' => 'required',
        'packageItinerary' => 'required',
        'FlightTransport' => 'required',
        'packageMeals' => 'required',
        'packageVisaTaxes' => 'required',
        'g_share_price'=> 'required',
        'qt_share_price' => 'required',
        'qd_share_price' => 'required',
        't_share_price' => 'required',
        'd_share_price' => 'required',
        'single_price' => 'required',
        'child_w_b' => 'required',
        'child_wo_b' => 'required',
        'infants' => 'required',
        'includes' => 'required',
    ];

    protected $messages = [
        'package_name.required' => 'package master name is required.',
        'service_type.required' => 'package name is required.',
        'package_days.required' => 'Package Day is required.',
        'packageDescription.required' => 'Package Description is required.',
        'paymentPolicy.required' => 'Payment Policy is required.',
        'importantNotes.required' => 'Important Notes is required.',
        'cancellationPolicy.required' => 'Cancellation Policy Notes is required.',
        'packageInclusion.required' => 'Package Inclusion is required.',
        'packageExclusion.required' => 'Package Exclusion  is required.',
        'packageItinerary.required' => 'Package Itinerary is required.',
        'FlightTransport.required' => 'Flight Transport is required.',
        'packageMeals.required' => 'Package Meals is required.',
        'packageVisaTaxes.required'=> 'Package Visa Taxes is required',
        'g_share_price.required' => 'g_share_price is required.',
        'qt_share_price.required' => 'qt_share_price is required.',
        'qd_share_price.required' => 'qd_share_price is required.',
        't_share_price.required' => 't_share_price is required.',
        'd_share_price.required' => 'd_share_price is required.',
        'single_price.required' => 'single_price is required.',
        'child_w_b.required' => 'child_w_b is required.',
        'child_wo_b.required' => 'child_wo_b is required.',
        'infants.required' => 'infants is required.',
        'includes.required' => 'includes is required.',
    ];


        public function save(){

            $this->validate();

            $hotelIds = [];
            foreach ($this->hotels as $hotel) {
                if (!empty($hotel['selected_name'])) {
                    $hotelIds[] = $hotel['selected_name'];
                }
            }
            // Convert array to a comma-separated string
            $this->hotelIdsString = implode(',', $hotelIds);

            $packageImagePath = $this->packageImage ? $this->packageImage->store('uploads', 'public') : null;
            $keys = array_values($this->includes);
            $package_includes = implode(',', $keys);

            // Use $this->flights instead of $this->keys
            $allFlights = implode(',', $this->flights);
            //dump($allFlights);

            // Using $this->departureCities
            $values = array_values($this->departureCities);
            $departCity = implode(',', $values);
            //dump($departCity);

                $pkg_data = [
                    'name' => $this->package_name,
                    'service_type' => $this->service_type,
                    'package_days' => $this->package_days,
                    'description' => $this->packageDescription,
                    'packageImage' => $packageImagePath,
                    'package_includes' =>  $package_includes,
                    'flights' => $allFlights ?? '',
                    'Depart_city' => $departCity ?? '',
                    'payment_policy' => $this->paymentPolicy,
                    'important_notes' => $this->importantNotes,
                    'cancellation_policy' => $this->cancellationPolicy,
                    'inclusion' => $this->packageInclusion,
                    'exclusion' => $this->packageExclusion,
                    'itinerary' => $this->packageItinerary,
                    'flight_transport' => $this->FlightTransport,
                    'packageMeals' => $this->packageMeals,
                    'visa_taxes' => $this->packageVisaTaxes,
                    'g_share_price' => $this->g_share_price,
                    'qt_share_price' => $this->qt_share_price,
                    'qd_share_price' => $this->qd_share_price,
                    't_share_price' => $this->t_share_price,
                    'd_share_price' => $this->d_share_price,
                    'single_price' => $this->single_price,
                    'child_w_b' => $this->child_w_b,
                    'child_wo_b' => $this->child_wo_b,
                    'infants' => $this->infants,
                    'hotelIds' => $this->hotelIdsString,
                    'delete_status' => 1,
                ];

                 $package = MainZiyarat::create($pkg_data);


                    session()->flash('message', 'Ziyarat details added successfully!');

                    $this->reset([
                        'package_name',
                        'service_type',
                        'package_days',
                        'packageImage',
                        'packageDescription',
                        'package_type_ids',
                        'makka_rating',
                        'makkaHotel',
                        'madina_rating',
                        'madinaHotel',
                        'food_type',
                        'laundray_type',
                        'includes',
                        'flights',
                        'departureCities',
                        'g_share_price',
                        'qt_share_price',
                        'qd_share_price',
                        't_share_price',
                        'd_share_price',
                        'single_price',
                        'child_w_b',
                        'child_wo_b',
                        'infants',
                        'paymentPolicy',
                        'importantNotes',
                        'cancellationPolicy',
                        'FlightTransport',
                        'packageMeals',
                        'packageVisaTaxes',
                        'packageInclusion',
                        'packageExclusion',
                        'packageItinerary',
                    ]);
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-ziyarat');
    }
}
