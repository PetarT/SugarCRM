<?php

    array_push($job_strings, 'logger_job');

    function logger_job()
    {
        $GLOBALS['log']->info('I\'m a ScheduledTask');

        return true;
    }
