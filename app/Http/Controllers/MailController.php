<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\CopyMail;

use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function sendMail()
    {
        $comment = 'Это тестовое сообщение';
        $toEmail = "andyandex@mail.ru";
        $copy = 'testing_mail_01@mail.ru';
        Mail::to($toEmail)
            ->bcc($copy)
            ->send(new CopyMail($comment));

        return 'Сообщение отправлено на адрес ' . $toEmail;
    }
}
