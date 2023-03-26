<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(
        array $data,
    )
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->markdown('emails.resetpassword')
            ->with([
                'data' => $this->data,
            ])->subject('Password Reset Mail');
        // return $this->view('emails.resetpassword')
        //     ->with([
        //         'data' => $this->data,
        //     ])->subject('Password Reset Mail');
    }
}
