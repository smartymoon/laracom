<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageRecieved extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var
     */
    /**
     * @var
     */
    public $mes;

    /**
     * Create a new message instance.
     *
     */
    public function __construct($message)
    {

        $this->mes = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("smartyMoon")->view('email.messageRecieved');
    }
}
