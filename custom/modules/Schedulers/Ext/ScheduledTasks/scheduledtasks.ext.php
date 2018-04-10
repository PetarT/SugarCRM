<?php 
 //WARNING: The contents of this file are auto-generated



    array_push($job_strings, 'logger_job');

    function logger_job()
    {
        $GLOBALS['log']->info('I\'m a ScheduledTask');

        return true;
    }

?>