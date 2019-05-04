<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

class CheckAdmin extends Middleware
{
   public function handle(){
       if (Auth::check()->User()->role == "admin"){

       }
   }
}
