<?php

namespace src;

class Email implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'E-mail: Seu token e 333-333';
    }



}