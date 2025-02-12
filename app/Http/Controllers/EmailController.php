<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


    class EmailController extends Controller
    {
    // Your controller method where you handle the form submission
    public function sendEmail(Request $request){
        // Validate your request data here


        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        $email = env('MAIL_TO_ADDRESS');


        // Send email
        if (empty($request->botsi)) {
            Mail::send('email_template', $data, function ($message) use ($email) {
                $message->to($email)->subject('Nov ticket');
            });
        }
        

        // Check for failures
    

        // Email sent successfully
        return redirect()->back()->with('success', 'Hvala za vaše sporočilo. Odgovorili vam bomo v najkrajšem možnem času.');
    }

    

    public function index()
    {
        return view('contact.index');

    }
}


