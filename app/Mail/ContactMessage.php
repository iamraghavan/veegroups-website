<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMessage extends Mailable
{
    public array $data;

    public function __construct(array $data)
    {
        // keep only the required fields
        $this->data = $data;
    }

    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject('New Contact Message from ' . ($this->data['name'] ?? 'Website'))
            // You can re-enable replyTo after deliverability is confirmed:
            // ->replyTo($this->data['email'] ?? null, $this->data['name'] ?? null)
            ->view('emails.contact-message');
    }
}
