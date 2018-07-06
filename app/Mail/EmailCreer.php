<?php

namespace App\Mail;


use App\Models\MessageSave;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailCreer extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(MessageSave $msg)
    {
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');
    }
}
