<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('auth');

        return view("Home/index");
    }

    public function testEmail()
    {
        $email = service('email');
        $email->setTo('chichihuang93076@gmail.com');
        $email->setSubject('A test email');
        $email->setMessage('Hello');

        if ($email->send()) {
            echo 'Message sent';
        } else {
            echo $email->printDebugger();
        }
    }
}
