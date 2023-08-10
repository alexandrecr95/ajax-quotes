<?php
// Array of quotes
$quotes = [
    "Your time is limited, don't waste it living someone else's life. - Steve Jobs",
    "The way to get started is to quit talking and begin doing. - Walt Disney",
    "A journey of a thousand miles begins with a single step. - Lao Tzu",
    "You only live once, but if you do it right, once is enough. - Mae West",
    "I have not failed. I've just found 10,000 ways that won't work. - Thomas A. Edison",
];

// Get a random index
$randomIndex = array_rand($quotes);

// Return the random quote
echo $quotes[$randomIndex];
?>
