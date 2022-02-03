<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->contact = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Email | Catatcuan')
            ->from($this->contact->email, $this->contact->name)
            ->to('info@catatcuan.com')
            ->view('email.contact', [
                'name' => $this->contact->name,
                'email' => $this->contact->email,
                'content' => $this->contact->message,
            ]);
    }
}
