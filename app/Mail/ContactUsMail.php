<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class ContactUsMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.contact')
            ->subject('Contact Us Form Submission')
            ->with([
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'message' => $this->data['message'],
            ]);
    }
}
