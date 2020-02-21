<?php

class UserLang
{
    function __construct($userAcceptLang)
    {
        $acceptLangArray = explode(",", $userAcceptLang, 2);
        $this->defaultLang = $acceptLangArray[0];
        $acceptLangArray = explode(",", $acceptLangArray[1]);
        $this->supportedLangs = [];
        foreach ($acceptLangArray as $langPair) {
            $langPair = explode(";", $langPair);
            $this->supportedLangs[$langPair[0]] = floatval(substr($langPair[1], 2));
        }
        arsort($this->supportedLangs);
    }
}


?>