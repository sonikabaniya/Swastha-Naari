<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactManager;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ContactManager $contactManager)
    {
        $this->contactManager = $contactManager;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        $fname = $request->name;
        $email = $request ->email;
        $subject = $request ->subject;
        $message = $request ->message;
        $data = [];
        array_push($data,$fname,$email,$subject, $message);
        $this->contactManager->sendMail("emails.contact",["data" => $data]);
        $response = ['type' => 'success', 'messages' => 'Thank you for your interest. You will hear from us shortly.'];

        return redirect('/')->withResponse($response);

    }
}
