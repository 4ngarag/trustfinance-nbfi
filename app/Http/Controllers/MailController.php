<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\LoanRequestMail;
use App\Mail\InvestRequestMail;

class MailController extends Controller
{
    public function loan_request()
    {
        return view('home.loan-request');
    }

    public function loan_request_sendEmail(Request $request)
    {
        $request->validate([
          'lastname' => 'required',
          'firstname' => 'required',
          'registration_number' => 'required',
          'mobile' => 'required',
          'loan_product' => 'required',
          'loan_amount' => 'required',
          'loan_purpose' => 'required'
        ]);

        $mailData = [
          'lastname' => $request->lastname,
          'firstname' => $request->firstname,
          'registration_number' => $request->registration_number,
          'mobile' => $request->mobile,
          'loan_product' => $request->loan_product,
          'loan_amount' => $request->loan_amount,
          'loan_purpose' => $request->loan_purpose
        ];

        Mail::to('angaraggantumur@gmail.com')->send(new LoanRequestMail($mailData));

        return back()->with('success', 'Таны хүсэлтийг хүлээн авлаа. Бид тантай удахгүй холбогдох болно.');
    }

    public function invest_request_sendEmail(Request $request)
    {
        $request->validate([
          'lastname' => 'required',
          'firstname' => 'required',
          'registration_number' => 'required',
          'mobile' => 'required',
          'invest_amount' => 'required'
        ]);

        $mailData = [
          'lastname' => $request->lastname,
          'firstname' => $request->firstname,
          'registration_number' => $request->registration_number,
          'mobile' => $request->mobile,
          'invest_amount' => $request->invest_amount
        ];

        Mail::to('angaraggantumur@gmail.com')->send(new InvestRequestMail($mailData));

        return back()->with('success', 'Таны хүсэлтийг хүлээн авлаа. Бид тантай удахгүй холбогдох болно.');
    }
}
