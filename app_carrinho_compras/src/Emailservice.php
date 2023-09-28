<?php

namespace src;

class Emailservice
{
    private $de;
    private $for;
    private $subject;
    private $content;


    public function __contruct(
        string $de = 'contato@site.com.br',
        string $for = '',
        string $subject = '',
        string $content = '',

    ): void
    {

        $this->de = $de;
        $this->for = $for;
        $this->subject = $subject;
        $this->content = $content;
    }

    public static function triggerEmail()
    {
        return "___ enviar e-mail ___";
    }


















}