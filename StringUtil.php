<?php
/**
 * Utilities to work with Strings
 */
class StringUtil{
    /**
     * Capitalize the String
     * @param String $low
     * @return String
     */
    public static function upper(String $value) : String
    {
        return strtr(strtoupper($value),"àáâãäåçèéêëìíîïñòóôõöøùüú","ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÑÒÓÔÕÖØÙÜÚ");
    }


    /**
     * Clear the String of especial caracters
     * @param String $value
     * @return String
     */
    public static function clear(String $value) : String
    {        
        $charsToRemove = array(".","/","-","(",")","<",">","\/","|","=","'","?","%","!","@");
        return str_replace($charsToRemove,"",$value);
    }
}