<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceAvailability extends Model
{
    use HasFactory;

    public static function calculatePercentageBooked()
    {
        $totalSlots = self::count();
        $bookedSlots = self::where('is_booked', true)->count();

        if ($totalSlots > 0) {
            return ($bookedSlots / $totalSlots) * 100;
        }

        return 0;
    }
}
