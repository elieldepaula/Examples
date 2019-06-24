<?php
namespace elieldepaula\Examples\Util;

use elieldepaula\Examples\Util\Mensagens;

class FormataData
{
    public function mostraData() : String
    {
        return date('d-m-Y');
    }
    
    public function mostraDataMsg($name = null) : String
    {
        return Mensagens::showMessage($name) . ", a data de hoje é " . $this->mostraData() . ".";
    }
}
