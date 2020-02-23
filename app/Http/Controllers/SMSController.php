<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use AWS;

class SMSController extends Controller
{

    public function text($number)
    {
        return view('ats.text', compact('number'));
    }

    public function sendSMS(Request $request){
        $this->validate($request,[
            'mobile_number' => 'required',
            'text' => 'required|max:140',
        ]);
        $sms = AWS::createClient('sns');
    
        $sms->publish([
                'Message' => $request->text,
                'PhoneNumber' => $request->mobile_number,	
                // 'PhoneNumber' => '+8801855316883',	
                'MessageAttributes' => [
                    'AWS.SNS.SMS.SMSType'  => [
                        'DataType'    => 'String',
                        'StringValue' => 'Transactional',
                        ]
                        ,'AWS.SNS.SMS.SenderID'  => [
                            'StringValue' => 'KL-YES',
                            'DataType'    => 'String',
                        ]
                    ],
                ]);

                
        return redirect()->back();
    }
}