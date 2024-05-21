<?php

namespace App\Http\Controllers;

use App\Helpers\CyberSourceHelper;
use App\Models\donors;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use pest\Laravel\json;

use Illuminate\Http\Request;

class donorController extends Controller
{
    public function index()
    {
        $donors = donors::all();

        if ($donors->isEmpty()) {
            return response()->json([
                'message' => 'No donors found',
            ], 404);
        } else {
            return view('frontend.list1', compact('donors'));
        }
    }

    public function store(Request $request)
    {
        $donor = donors::create($request->all());

        $title = "Welcome to Funny Coder";
        $body = $donor;

        Mail::to('vithursan1003@gmail.com')->send(new sendEmail($title, json_encode($request->all())));

        return "Email sent successfully";

    }

    public function store2(Request $request)
    {
        return redirect()->route('page2', ['data' => $request->all()]);
    }

    public function store3(Request $request)
    {
        $data = $request->all();
        $signature = CyberSourceHelper::sign($data);
        return view('page2', compact('data', 'signature'));
        // if (!empty($data)) {
        //     // $key = '_token';
        //     // $value = $data[$key];
        //     // dd($data['locale']);
        //     // dd($data['data.locale']);
        //     $key = $data['data'];
        //     dd($key['locale']);
        // }
        // return view('page2', compact('data'));

    }

    public function display(Request $request)
    {
        $title = "Welcome to Funny Coder";

        Mail::to('vithursan1003@gmail.com')->send(new sendEmail($title, json_encode($request->all())));
    }
}
