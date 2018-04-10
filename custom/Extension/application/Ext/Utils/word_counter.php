<?php

function wordCounter($string)
{
    if (!is_string($string))
    {
        return 0;
    }

    $string        = trim($string);
    $counter       = 0;
    $isPrevAnAlpha = false;

    for ($i = 0; $i < strlen($string); $i++)
    {
        if (ctype_alpha($string[$i]))
        {
            $isPrevAnAlpha = true;
        }
        else
        {
            if ($isPrevAnAlpha)
            {
                $counter++;
            }

            $isPrevAnAlpha = false;
        }
    }

    // Last letter is an alpha
    if ($isPrevAnAlpha)
    {
        $counter++;
    }

    return $counter;
}
