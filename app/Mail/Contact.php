<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
   */
   protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $address = 'noreply@futurite.com';
        return $this->view('mail')
          ->from($address, $address)
          ->replyTo($this->message->email, $this->message->nombre)
          ->subject('(Nuevo Lead- TV Futurite)')
          ->with( ['info' => $this->message] );
    }
}
