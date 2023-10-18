<?php

namespace src;

class Whatsapp implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'Whatsapp: Seu token e 555-1010';
    }
}