<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendcontacto extends Mailable
{
    use Queueable, SerializesModels;

    public $info;

    public function __construct(Info $info)
    {
        $this->info = $info;
    }

    public function build()
    {
        return $this->view('view.name');
    }
}
