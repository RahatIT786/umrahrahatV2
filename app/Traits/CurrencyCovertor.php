<?php

namespace App\Traits;

use App\Models\sightController;
use App\Models\VisaDetail;
use Illuminate\Support\Facades\Http;

trait CurrencyCovertor
{
  





    public function visaPriceCovertor($currencyType,$visaTypeId,$visacount){


      $visaDetails=  VisaDetail::where('delete_status',1)
                                ->where('id',$visaTypeId)
                                ->value('price');

       $currentPrice= $this->fetchExchangeRates($currencyType);

       $visaGrandTotal=round(
        (float)($currentPrice) * ( (float)($visaDetails) * (float) ($visacount) )
       );
      return $visaGrandTotal;
    }


    public function makkaSightSeeingPriceCovertor($currencyType,$sightType){

        $makkasightPrice=sightController::where('delete_status',1)
                                        ->where('sightCity','makkah')
                                        ->where('sightName',$sightType)
                                        ->value('sightPrice');
        
        $currentPrice=$this->fetchExchangeRates($currencyType);
        $totalPrice=round(
            (float) ($currentPrice) * (float) ( $makkasightPrice)
        );
        return $totalPrice;
    }




    public function fetchExchangeRates($currencyType)
    {
      
        try {
            $apiKey = '593b72f2821a6b3e2d6a037b'; // Replace with your API key
            $baseCurrency = 'SAR'; // Change if needed
            $response = Http::withOptions([
                'verify'=>false,
            ])->get("https://v6.exchangerate-api.com/v6/{$apiKey}/latest/{$baseCurrency}");
            // dd( $response);

            if ($response->successful()) {
                // $this->exchangeRates = $response->json();
                $data = $response->json();
               // Get base currency
                $baseCurrency = $data['base_code'] ?? $data['base'] ?? 'Unknown';

                // Get exchange rates
                $exchangeRates = $data['conversion_rates'] ?? [];
                $currencyPrice = $data['conversion_rates'][$currencyType]; //

                return $currencyPrice;


//     dd($usdPrice); // Output: 1

// // Debugging output
// dd([
//     'base_currency' => $baseCurrency,
//     'exchange_rates' => $exchangeRates,
// ]);
            }
        } catch (\Exception $e) {
            
            $this->exchangeRates = []; // Handle API failure
            dd($e);
        }
    }


















}
