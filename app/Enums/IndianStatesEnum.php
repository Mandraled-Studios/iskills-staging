<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;

enum IndianStatesEnum : string implements HasLabel {
    case andaman_and_nicobar_islands = 'Andaman and Nicobar Islands';
    case arunachal_pradesh = 'Arunachal Pradesh';
    case assam = 'Assam';
    case bihar = 'Bihar';
    case chandigarh = 'Chandigrah';
    case chhattisgarh = 'Chhattisgarh';
    case dadra_and_nagar_haveli_and_daman_and_diu = 'Dadra and Nagar Haveli and Daman and Diu';
    case goa = 'Goa';
    case gujarat = 'Gujarat';
    case haryana = 'Haryana';
    case himachal_pradesh = 'Himachal Pradesh';
    case jharkand = 'Jharkand';
    case jammu_and_kashmir = 'Jammu and Kashmir';
    case karnataka = 'Karnataka';
    case kerala = 'Kerala';
    case ladakh = 'Ladakh';
    case lakshadweep = 'Lakshadweep';
    case madhya_pradesh = 'Madhya Pradesh';
    case maharastra = 'Maharastra';
    case manipur = 'Manipur';
    case meghalaya = 'Meghalaya';
    case mizoram = 'Mizoram';
    case nagaland = 'Nagaland';
    case nct_of_delhi = 'The NCT of Delhi';
    case odisha = 'Odisha';
    case puducherry = 'Puducherry';
    case punjab = 'Punjab';
    case rajasthan = 'Rajasthan';
    case sikkim = 'Sikkim';
    case tamil_nadu = 'Tamil Nadu';
    case telangana = 'Telangana';
    case tripura = 'Tripura';
    case uttarakhand = 'Uttarakhand';
    case uttar_pradesh = 'Uttar Pradesh';
    case west_bengal = 'West Bengal';

    public function getLabel(): ?string
    {
        //return $this->name;
    
        return match ($this) {
            self::andaman_and_nicobar_islands => 'Andaman and Nicobar Islands',
            self::arunachal_pradesh => 'Arunachal Pradesh',
            self::assam => 'Assam',
            self::bihar => 'Bihar',
            self::chandigarh => 'Chandigrah',
            self::chhattisgarh => 'Chhattisgarh',
            self::dadra_and_nagar_haveli_and_daman_and_diu => 'Dadra and Nagar Haveli and Daman and Diu',
            self::goa => 'Goa',
            self::gujarat => 'Gujarat',
            self::haryana => 'Haryana',
            self::himachal_pradesh => 'Himachal Pradesh',
            self::jharkand => 'Jharkand',
            self::jammu_and_kashmir => 'Jammu and Kashmir',
            self::karnataka => 'Karnataka',
            self::kerala => 'Kerala',
            self::ladakh => 'Ladakh',
            self::lakshadweep => 'Lakshadweep',
            self::madhya_pradesh => 'Madhya Pradesh',
            self::maharastra => 'Maharastra',
            self::manipur => 'Manipur',
            self::meghalaya => 'Meghalaya',
            self::mizoram => 'Mizoram',
            self::nagaland => 'Nagaland',
            self::nct_of_delhi => 'The NCT of Delhi',
            self::odisha => 'Odisha',
            self::puducherry => 'Puducherry',
            self::punjab => 'Punjab',
            self::rajasthan => 'Rajasthan',
            self::sikkim => 'Sikkim',
            self::tamil_nadu => 'Tamil Nadu',
            self::telangana => 'Telangana',
            self::tripura => 'Tripura',
            self::uttarakhand => 'Uttarakhand',
            self::uttar_pradesh => 'Uttar Pradesh',
            self::west_bengal => 'West Bengal',
        };
    }
}