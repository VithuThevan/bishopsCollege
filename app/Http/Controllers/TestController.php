<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function processPayment(Request $request)
    {
        // Send the data to the external API
        $response = Http::post('https://testsecureacceptance.cybersource.com/pay', $request->all());

        // Handle the response
        if ($response->successful()) {
            // Process the successful response
            return redirect()->back()->with('status', 'Payment processed successfully.');
        } else {
            // Handle the error response
            return redirect()->back()->with('status', 'Payment processing failed.');
        }
    }
}
