<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class SendNewMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $author;
    protected $authorMail;
    protected $guestMessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($author, $authorMail, $guestMessage)
    {
        $this->author = $author;
        $this->authorMail = $authorMail;
        $this->guestMessage = $guestMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->authorMail)
        ->view('email.body', [ "author" => $this->author ,
        "authorEmail" => $this->authorMail,
        "guestMessage" => $this->guestMessage]);
    }
}
