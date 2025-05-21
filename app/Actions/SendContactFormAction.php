<?php

namespace App\Actions;

use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class SendContactFormAction
{

    public function execute(array $data): void
    {
        Mail::to('melinda@theloyalagency.com')->send(new ContactFormSubmitted($data));
    }

}
