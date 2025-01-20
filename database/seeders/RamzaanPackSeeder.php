<?php

namespace Database\Seeders;

use App\Models\RamzaanPack;
use App\Models\RamzaanPackSharing;
use App\Models\RamzaanPackType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RamzaanPackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $packageType= RamzaanPackType::create([
        //     'type_name'=>'classic',
            
        // ]);
        // $sharings=[
        //     'sharing',
        //     'quad',
        //     'triple',
        //     'double',
        //     'single',
        // ];

        // foreach($sharings as $sharing){
        //     RamzaanPackSharing::create([

        //         'sharing_type'=>$sharing,
        //         'ramzaan_pack_type_id'=>$packageType->id,
        //     ]);
        // }



        $ramzaaPacktypes=RamzaanPackType::all();

        foreach($ramzaaPacktypes as $type){
            RamzaanPack::create([
                'master_name'=>'fdljlsd ramzaan packages',
                'ramzaan_pack_type_id'=>$type->id,
                'days'=>rand(10,30),
            ]);
        }
    }
}
