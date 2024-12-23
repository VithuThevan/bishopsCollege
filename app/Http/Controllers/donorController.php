<?php

namespace App\Http\Controllers;

use App\Helpers\CyberSourceHelper;
use App\Models\donors;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;
use Redirect;

class donorController extends Controller
{
    public $donor = [];
    public function index(Request $request)
    {
        $itemsPerPage = $request->query('itemsPerPage', 10);

        $donors = donors::paginate($itemsPerPage);

        if ($donors->isEmpty()) {
            return response()->json([
                'message' => 'No donors found',
            ], 404);
        } else {
            return view('frontend.list1', compact('donors'));
        }
    }

    public function store2(Request $request)
    {

        $donorData = $request->validate([
            'donorName' => 'required|string|max:255',
            'donorEmail' => 'required|email',
            'donorPhone' => 'required|string|max:15', // Validate the phone field
            'donorAddress' => 'required|string|max:255',
            'donorType' => 'required|string|max:255',
            'donationType' => 'required|string|max:255',
            'donationPurpose' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);

        // $donors = donors::create(attributes: $donorData);

        return redirect()->route('page2', ['data' => $request->all()]);
    }

    public function handlePayment(Request $request)
    {
        
        if ($request->input('decision') != 'ACCEPT') {
            Redirect::to('https://www.bishopscollege.lk/transaction-unsuccessful/')->send();
        } else {
            Redirect::to('https://www.bishopscollege.lk/thank-you/')->send();
        }


    }


    public function store3(Request $request)
    {
        $data = $request->all();
        $dataFields = $data['data'];
        $signature = CyberSourceHelper::sign($data);
        return view('page2', compact('data', 'signature'));
    }

    public function display(Request $request)
    {
        $title = "Welcome to Funny Coder";
        Mail::to('vithursan1003@gmail.com')->send(new sendEmail($title, json_encode($request->all())));
    }
}
