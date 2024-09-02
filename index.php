<?php

// Set the default timezone
date_default_timezone_set('Europe/London');

// Get the current time as a Unix timestamp (number of seconds since January 1, 1970)
$currentTime = time();

echo '<br />';

// Display the current Unix timestamp
echo $currentTime . '<br />';

// Calculate and display the Unix timestamp for 5 days from now
echo $currentTime + 5 * 24 * 60 * 60 . '<br />'; 

// Timestamp for yesterday
echo $currentTime - 60 * 60 * 24 . '<br />';  

// Display the current date and time in 'dd/mm/yyyy h:miam/pm' format
echo date('d/m/Y g:ia') . '<br />';

// Display the date and time for 5 days from now in the same format
echo date('d/m/Y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />'; // 5 days from now date format

// Display the date and time for yesterday in the same format
echo date('d/m/Y g:ia', $currentTime - 60 * 60 * 24) . '<br />'; // yesterday date format

// Convert a human-readable date string ("second Friday of January") to a Unix timestamp
// Then format and display the date in 'dd/mm/yyyy h:miam/pm' format
$date = date('d/m/Y g:ia', strtotime('second friday of January')) . '<br />'; // string description into date

// Print the parsed details of the $date string as an array
echo '<pre>';
print_r(date_parse($date));
echo '</pre>';
