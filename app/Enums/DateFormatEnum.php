<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;

enum DateFormatEnum : string implements HasLabel {
    case MMYYYY = 'Month / Year';
    case MMMYYYY = 'Month Name / Year';
    case DDMMYYYY = 'Date / Month / Year';
    case DD_MM_YYYY = 'Date-Month-Year';
    

    public function getLabel(): ?string
    {
        //return $this->name;
    
        return match ($this) {
            self::MMYYYY => 'Month / Year',
            self::MMMYYYY => 'Month Name / Year',
            self::DDMMYYYY => 'Date / Month / Year',
            self::DD_MM_YYYY => 'Date-Month-Year',
        };
    }
}