<?php

if( ! function_exists('timeAgo'))
{
    function timeAgo($date)
    {

        $timestamp = strtotime($date);

        $strTime = array("saniye", "dakika", "saat", "gün", "ay", "yıl");
        $length = array("60", "60", "24", "30", "12", "10");

        $currentTime = time();


        if ($currentTime >= $timestamp)
        {
            $diff = time() - $timestamp;
            for ($i = 0; $diff >= $length[$i] && $i < count($length) - 1; $i++) {
                $diff = $diff / $length[$i];
            }

            $diff = round($diff);
            return $diff . " " . $strTime[$i] . " önce";
        }

    }
}

if (!function_exists('shortTitle'))
{
    function short_title($title, $length = 30)
    {
        if ( $length < strlen($title) ) {
            $title = substr( $title, 0, $length ) . '...';
        }

        return $title;
    }
}

if ( !function_exists('prettyDate'))
{
    function prettyDate($date, $pattern = '%m %B %y')
    {
        setlocale(LC_TIME, 'tr_TR.UTF-8');
        return strftime($pattern, strtotime($date));
    }
}

if (!function_exists('firstChar'))
{
    function firstChar($text = null)
    {
        if(is_null($text))
            return null;

        return iconv_substr($text, 0,1);
    }
}