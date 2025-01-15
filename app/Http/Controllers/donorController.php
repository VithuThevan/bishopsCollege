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
        return redirect()->route('page2', ['data' => $request->all()]);
    }

    public function handlePayment(Request $request)
    {
        $donor = donors::where('signature', $request->input('signature'))->first();

        // Define email subject and message based on the decision
        $emailData = [];
        if ($request->input('decision') != 'ACCEPT') {
            // For unsuccessful payment
            $emailData['subject'] = 'Payment Unsuccessful';
            $emailData['message'] = 'Unfortunately, your payment was unsuccessful. Please try again.';

            // Delete donor entry
            donors::where('signature', $request->input('signature'))->delete();

            // Redirect to failure page
            Redirect::to('https://www.bishopscollege.lk/transaction-unsuccessful/')->send();
        } else {
            // For successful payment
            $emailData['subject'] = 'Payment Successful';
            $emailData['message'] = 'Thank you for your donation! Your payment was successful.';

            // Redirect to thank you page
            Redirect::to('https://www.bishopscollege.lk/thank-you/')->send();
        }

        // Send email to the donor
        if ($donor) {
            Mail::to($request['donorEmail'])->send(mailable: new sendEmail( $emailData['subject'], $emailData['message']));
        }
    }



    public function store3(Request $request)
    {
        $data = $request->all();
        $dataFields = $data['data'];
        $signature = CyberSourceHelper::sign($data);

        $donorData = donors::create([
            'firstname' => $dataFields['donorName'],
            'lastname' => $dataFields['donorName1'],
            'donorEmail' => $dataFields['donorEmail'],
            'donorPhone' => $dataFields['donorPhone'],
            'donorAddress' => $dataFields['donorAddress'],
            'donorType' => $dataFields['donorType'],
            'donationType' => $dataFields['donationType'],
            'donationPurpose' => $dataFields['donationPurpose'],
            'donationAmount' => $dataFields['amount'],
            'studentName' => $dataFields['studentname'],
            'studentGrade' => $dataFields['studentGrade'],
            'admissionno' => $dataFields['admissionno'],
            'signature' => $signature,
        ]);

        return view('page2', compact('data', 'signature'));
    }

    public function display(Request $request)
    {
        $title = "Welcome to Funny Coder";
    }
}
