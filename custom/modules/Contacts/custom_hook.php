<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class CustomHook
    {
        function appendString($bean, $event, $arguments)
        {
            if (strpos($bean->first_name, '(this is appended)') === false)
            {
                $bean->first_name .= '(this is appended)';
            }
        }
    }

?>
