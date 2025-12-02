<?php

namespace App\Controllers;

class ContactController
{
    public function index()
    {
        return 'Contact form page from controller';
    }

    public function send()
    {
        return 'Contact form POST page';
    }
}