<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Contact;

class NewContact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * NewContact constructor.
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@send-shiatsu.com', 'Send Shiatsu')
            ->view('mail.new_contact');
    }
}
