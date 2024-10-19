<?php

namespace App\Http\Controllers;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Service;

class FrontentController extends Controller
{
   public function index(){
    $services = Service::orderBy('id', 'desc')->take(3)->get();
    return view('frontend.index',compact('services'));
    }
    public function about(){
        return view('frontend.about');
        }
    public function contact_us(){
        return view('frontend.contact_us');
    }
    public function services(){
        return view('frontend.services');
    }
    public function service(){
        return view('frontend.service');
    }
    public function sendWelcomeEmail()
{
    $user = auth()->user(); // Or fetch user data from wherever you want
    // $email = $user->email;
    $email = 'adarshpalcsjm1@gmail.com';

    Mail::to($email)->send(new WelcomeMail($user));

    return "Welcome email sent successfully!";
}
}
