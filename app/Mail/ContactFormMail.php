<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.contact')
                    ->with([
                        'name' => $this->data['name'],
                        'email' => $this->data['email'],
                        'ci' => $this->data['ci'],
                        'telephone' => $this->data['telephone'],
                        'valor_casa' => $this->data['valor_casa'],
                        'plazo_compra' => $this->data['plazo_compra'],
                        'contacto' => $this->data['contacto'],
                    ]);
    }
}
