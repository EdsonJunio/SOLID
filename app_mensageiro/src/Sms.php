<?php

namespace src;

class Sms implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'SMS: Seu token e 777-888';
    }
}