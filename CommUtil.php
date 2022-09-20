<?php
/**
 * Utilities to work with Strings
 */
class CommUtil
{
    /**
     * Execute a get to server and return the content String
     */
    public static function get(String $url, Array $params = []) : Object
    {
        $ret = new stdClass();

        if(count($params) > 0){
            $urlParams = "?";

            foreach ($params as $key => $value) {
                $urlParams .= urlencode($key)."=".urlencode($value)."&";
            }

            $urlParams = substr($urlParams, 0, -1);
        }

        $finalUrl = isset($urlParams)? $url.$urlParams : $url;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $finalUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $serverResponse = curl_exec($ch);
        
        if(!curl_errno($ch)){
            $ret->error = false;
            $ret->content = $serverResponse;
            
            curl_close($ch);
            return $ret;
        }
        else{
            $ret->error = true;
            $ret->message = "CURL Error number ".curl_errno($ch);
            
            curl_close($ch);
            return $ret;
        }
    }
}