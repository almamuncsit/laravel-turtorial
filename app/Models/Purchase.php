<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Purchase extends Model
{
    use HasFactory;


    protected $guarded = ['id'];


    public function purchaseDetails()
    {
        return $this->hasMany( PurchaseDetail::class );
    }


    /**
     * @param $details
     *
     * @return array
     */
    public static function prepareDetailsData( $details ): array
    {
        $purchaseDetails = [];
        for ( $i = 0; $i < count( $details['item_id'] ); $i++ ) {
            $purchaseDetails[] = [
                'id'  => $details['item_id'][ $i ],
                'item_id'  => $details['item_id'][ $i ],
                'quantity' => $details['quantity'][ $i ],
            ];
        }

        return $purchaseDetails;
    }

}
