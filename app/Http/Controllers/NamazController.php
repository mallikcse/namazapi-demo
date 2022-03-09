<?php

namespace App\Http\Controllers;
use App\Models\Namaz;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class NamazController extends Controller
{
    //

    public function index($date){
      $namaz = Namaz::where('date',$date)->get();
      return response()->json(['message'=>'Everyday Prayer Times','Access Token' => Hash::make(random_int(100000, 999999)),'namazTime' => $namaz], 200);
    }
}
