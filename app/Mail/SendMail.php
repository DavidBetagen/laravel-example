<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $TITLE;
    private $CONTENT;

    public function __construct($title, $content)
    {
        $this->TITLE = $title;
        $this->CONTENT = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->TITLE)
                    ->view('mail.content')
                    ->with(['content' => $this->CONTENT]);           
    }
}
