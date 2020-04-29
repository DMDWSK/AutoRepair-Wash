<?php


namespace App\Http\Controllers;


use App\Appointment;
use App\User;
use App\Washing_price;


class BasketController extends  Controller
{
    public function show()
    {
         $appointments = Appointment::with('vehicle_company','vehicle_modal','washing_plan','team')
                                    ->where('user_id',1)
                                    ->get();


        return view('shopping_basket', compact('appointments'));
    }
}