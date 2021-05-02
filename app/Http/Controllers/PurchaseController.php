<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     */
    public function store( Request $request )
    {

        $purchase = [
            'status' => 1
        ];
        $user     = User::find( 1 );

        $purchase = $user->purchases()->create( $purchase );

        $details = [
            'item_id'  => [ 1, 3 ],
            'quantity' => [ 2, 3 ]
        ];

        $purchaseDetails = Purchase::prepareDetailsData( $details );


        return $purchase->purchaseDetails()->createMany( $purchaseDetails );
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show( $id )
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit( $id )
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update( Request $request, $id )
    {
        $details = [
            'id'       => [ 1, 3 ],
            'item_id'  => [ 1, 3 ],
            'quantity' => [ 2, 3 ],
        ];

        $purchaseDetails = Purchase::prepareDetailsData( $details );

        foreach ( $purchaseDetails as $purchaseDetail ) {
            PurchaseDetail::find( $purchaseDetail->id )->update( $purchaseDetail );
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy( $id )
    {
        //
    }
}
