<?php

namespace App\Http\Controllers;

use App\Mail\AHPMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        return view('indexes.index');
    }

    public function aboutUs()
    {
        return view('indexes.about_us');
    }

    public function visionMission()
    {
        return view('indexes.vision_mission');
    }

    public function management()
    {
        return view('indexes.management');
    }

    public function ourPartner()
    {
        return view('indexes.our_partner');
    }

    public function ourClient()
    {
        return view('indexes.our_client');
    }

    public function contactUs()
    {
        return view('indexes.contact_us');
    }

    public function productServices()
    {
        return view('indexes.product_services');
    }

    public function sendMail(Request $request)
    {
        $validate = $request->validate([
            'email' => 'email|required',
            'name' => 'required',
            'company' => 'required',
            'phone' => 'regex:/^(\+\d{1,3})?[-.\s]?\d{1,4}[-.\s]?\d{1,4}[-.\s]?\d{1,4}$/|required',
            'body' => 'required'
        ]);

        $mailData = [
            'name' => $validate['name'],
            'company' => $validate['company'],
            'email' => $validate['email'],
            'phone' => $validate['phone'],
            'body' => $validate['body']
        ];

        Mail::to($validate['email'])->send(new AHPMail($mailData));

        return redirect()->back();

    }
}
