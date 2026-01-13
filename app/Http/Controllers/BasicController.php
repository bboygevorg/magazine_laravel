<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
   public function index() 
   {
     return view("static.home");
   }

   public function about() 
   {
     return view("static.about");
   }

   public function contact() 
   {
     return view("static.contact");
   }

   public function submit(Request $request)
   {
    $request->validate([
        "name" => "required|min:2|max:50",
        "email" => ["required", "min:5", "max:100"],
        "subject" => "required",
        "message" => "required"
    ]);
   }
}