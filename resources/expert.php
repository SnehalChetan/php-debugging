<?php
declare(strict_types=1);



// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}
new_exercise(1);


/**
 * Corrections : add function call with value
 *               to display $x value need to add variable in function definition as parameter
 */


 
new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

/**
 * Corrections :  to display monday need to make the array index zero as $week[0]
 */

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str ="“Debugged ! Also very fun”";
echo substr($str, 0, 14)."”";

/**
 * Corrections : add double quotes to the value of variable str
 */


 
new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

forEach($week as &$day) {
   $day = substr($day, 0, strlen($day)-3);
}

print_r($week);
/**
 * Corrections : correct forEach loop syntax and add & symbol in forEach, as it helps to update the array
 */



?>