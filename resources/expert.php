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



new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
/*for ($letter = 'a'; $letter != 'aa'; $letter++) {
    
    array_push($arr, $letter);
}*/
forEach(range('a','z') as $letter){
    array_push($arr, $letter);
}
print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

/**
 * Corrections : Change the condition in first for loop as letter!= 'aa' as we only want to display a to z
 * in forEach loop we just assign range of alphbets.
 */
new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode( " - ",$params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];   
    $len = count($heroes)-1; 
    $randname = $heroes[rand(0,$len)][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames();

/*
*   corrections : add semicolon at end of line, add return statement at the end of function. correct the syntax of implode function.
*   reduce heroes array length in random function.
*/


new_exercise(7);
function copyright(int $year) {
    return "&copy; $year BeCode";
}
//print the copyright
// $year = (int) date("Y");
// echo copyright($year);
echo copyright((int)date('Y'));

/*
* correction :  to display year convert string parameter to int and add echo
*/


new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return  'Welcome John Smith';
    } else{
        return 'No access';
    }
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!
   

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) == true) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');

?>