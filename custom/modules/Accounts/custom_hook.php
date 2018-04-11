<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class customHook
    {
        function related($bean, $event, $arguments)
        {
            $contacts = $bean->get_contacts();

            foreach ($contacts as $contact)
            {
                if (strpos($contact->first_name, '(this is related)') === false)
                {
                    $contact->first_name .= '(this is related)';
                    $contact->save();
                }
            }
        }
    }

?>
