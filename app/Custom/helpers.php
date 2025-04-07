<?php

function getGreeting()
{
    $hour = now()->hour;

    if ($hour < 12) {
        return 'Good morning, Chandan!';
    } elseif ($hour < 18) {
        return 'Good afternoon, Chandan!';
    } else {
        return 'Good evening, Chandan!';
    }
}

function dateFormatter($date)
{
    return \Carbon\Carbon::parse($date)->format('d M, Y');
}
