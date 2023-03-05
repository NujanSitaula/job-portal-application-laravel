<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WebsiteMailController extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $body;
    public $template;

    public function __construct($subject, $body, $template = 'admin.email.emailTemplate')
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->template = $template;
    }

    public function build()
    {
        return $this->view($this->template)->with([
            'subject' => $this->subject,
            'body' => $this->body,
        ]);
    }
}