<?php namespace App\Services;

use Illuminate\Contracts\Mail\Mailer;

class ContactManager{

    public function __construct( Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail($view,$data, $callback = null)
    {
        if($callback == null){
            $callback =  function ($message) use ($data)  {
                $message->subject('Contact form');
                $message->from($data['data'][1]);
                $message->to('sonika.baniya.sb@gmail.com');
            };
        }
        $this->mailer->send($view, $data, $callback);
    }

}