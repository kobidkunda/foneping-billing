<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
   public  function Dashboard()
   {
       return view('dash.pages.dashboard');
   }
}
