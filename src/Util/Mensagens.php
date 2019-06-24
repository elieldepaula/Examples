<?php
namespace elieldepaula\Examples\Util;

/**
 * Description of Mensagens
 *
 * @author elieldepaula
 */
class Mensagens
{
    public static function showMessage($name = null) : String
    {
        if ($name === null) {
            return "Olá sem nome";
        } else {
            return "Olá " . $name;
        }
    }
}
