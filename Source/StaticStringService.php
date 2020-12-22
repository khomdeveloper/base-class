<?php


namespace BaseClass;


class StaticStringService
{

    public static function addFirstSlash(string $string):string
    {
        if (empty($string)) {
            return '/';
        } elseif (str_split($string)[0] != '/'){
            return '/' . $string;
        } else {
            return $string;
        }
    }

    public static function camelCaseToUnderScore(string $string, string $delimeter = '_')
    {
        $array = str_split(lcfirst($string),1);

        $result = [];
        for ($i = 0; $i < count($array); $i++){
            $letter = $array[$i];
            if (self::isCapital($letter)){
                $result[] = $delimeter . strtolower($letter);
            } else {
                $result[] = $letter;
            }
        }

        return join('', $result);
    }

    public static function isCapital($letter)
    {
        return strtoupper($letter) == $letter;
    }

    public static function shortClassName($className)
    {
        if (strpos($className,"\\") == false){
            return $className;
        }

        $a = explode("\\", $className);

        return $a[count($a)-1];
    }

    public static function underScoreToCamelCase($string)
    {
        $a = explode('_', $string);

        $b = [];

        foreach ($a as $val) {
            $b[] = ucfirst($val);
        }

        return lcfirst(join('', $b));

    }

    public static function isRegex($pattern)
    {
        if (@preg_match($pattern, null) === false) {
            return false;
        } else {
            return true;
        }
    }

}