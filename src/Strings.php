<?php
namespace Utilities;

/**
 * Utilities to work with Strings
 */
class Strings 
{
    /**
     * Capitalize the String
     * @param String $value
     * @return String
     */
    public static function upper(String $value) : String
    {
        return strtr(strtoupper($value), "àáâãäåçèéêëìíîïñòóôõöøùüú", "ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÑÒÓÔÕÖØÙÜÚ");
    }
    
    
    /**
     * Remove accent
     * @param String $value
     * @return String
     */
    public static function removeAccent(String $value) : String
    {
        return strtr($value, "àáâãäåçèéêëìíîïñòóôõöøùüúÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÑÒÓÔÕÖØÙÜÚ", "aaaaaaceeeeiiiinooooo0uuuAAAAAACEEEEIIIINOOOOO0UUU");
    }


    /**
     * Clear the String of especial caracters
     * @param String $value
     * @return String
     */
    public static function clear(String $value) : String
    {        
        $remove = Array(".", "/", "-", "(", ")", "<", ">", "\/", "\\", "|", "=", "'", '"', "?", "%", "!", "@");
        return str_replace($remove, "", $value);
    }
}
