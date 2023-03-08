<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
    
        $request->validate([
            'subscriber_email'=>'required|email'
        ]);
        

        try {
            if(Newsletter::isSubscribed( $request->subscriber_email))
            {
                return redirect()->back()->with(['errors'=>'Email is already subscribed']);
                // return view('subscribe');

                
            }
            elseif
            
               ( Newsletter::subscribe($request->subscriber_email))
               {
                return redirect()->back()->with(['errors'=>'Welcome you are subscribed now!!']);
            }
            
        } catch (\exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
            
        
    }
}
