<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\Booking;

class verifemail extends Mailable
{
    use Queueable, SerializesModels;
    public $Booking;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $Booking)
    {
        $this->Booking = $Booking;
        $this->subject('Email Confirmation');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail')->with([
            'name' => 'Lebak Futsal'
        ]);
    }
}
