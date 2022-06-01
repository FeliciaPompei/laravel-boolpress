<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $sender;
    protected $senderMail;
    protected $senderMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender, $senderMail, $senderMessage)
    {
        $this->sender = $sender;
        $this->senderMail = $senderMail;
        $this->senderMessage = $senderMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->senderMail)
        ->view('email.body', [ "sender" => $this->sender,
        "senderEmail" => $this->senderMail,
        "senderMessage" => $this->senderMessage]);
    }
}
