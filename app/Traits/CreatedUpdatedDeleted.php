<?php

namespace App\Traits;
use Sentinel;

trait CreatedUpdatedDeleted
{
    public static function bootCreatedUpdatedDeleted()
    {
// create a event to happen on updating
        static::updating(function ($table) {
            $table->updated_by = Sentinel::getUser()->id;
        });

// create a event to happen on saving
        static::creating(function ($table) {
//            $table->created_by = Sentinel::getUser()->id;
        });

        static::deleting(function ($table) {
            $table->deleted_by = Sentinel::getUser()->id;
            $table->save();
        });
    }
}
