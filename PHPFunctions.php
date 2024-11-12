<?php 
function Fibbonacci($limit){
    //these are the first numbers of the Fibonacci series
    $n1 = 0;
    $n2 = 1;

    $i=1; //the counter of the loop
    $sum = 0; //the last number of the series
    while ($i <= $limit){
        $sum = $n1 + $n2; //the sum of the two previous numbers
        echo  $sum . "<br>";

        //set new values for the next loop
        $n1 = $n2 ;
        $n2 = $sum ; 

        $i++;
    }
}

Fibbonacci(8);



function isPrime($n){
    $i = 1; //it's the divider
    $j = 0; //it's the counter

    //the loop divides the number "n" repeatedly
    while($i <= $n){
        //if the rest of a division is 0, the counter is increased
        if($n % $i == 0){
            $j++;
        }
        $i++;
    }

    //In each case, a different message is displayed.
    if($j ==2){
        echo "The number " . $n . " is prime."; 
    }
    else{
        echo "The number " . $n . " isn't prime."; 
    }
}
isPrime(47);



function isPalindrome($string){
    $showString = $string ; //The user will see showString on screen

    //the string is modified 
    $string = strtolower($string);
    $string = preg_replace('/\s+/', '', $string);

    //in case there's no text, it will be displayed this message
    if($string === null){
        echo "You didn't write any text";
        return false;
    }  

    //the first loop goes letter by letter
    for ($i = 0; $i < strlen($string); $i++){
        //the second loop compares the first letters and last letters of the text
        if($string[$i] !== $string[strlen($string) -1 -$i]){
            echo "The string " . $showString . " is not palindrome";
            return false;
        }
    }
    //in case the text is palindrome, it will be displayed this message
    echo "The string " . $showString . " is palindrome";
    return true;
}
isPalindrome("Hello");



function frecuency($string){
    //define the final array that returns the function
    $dictionary = array();

    //the loop verifies the frecuency of a letter in a text
    for ($i =0 ; $i < strlen($string); $i++){
        $letter = $string[$i];

        if (array_key_exists($letter,$dictionary)){
            $dictionary[$letter]++; //if a character repeats, it's added n times
        }
        else {
            $dictionary[$letter] = 1; //if a character doesn't repeat, it sets to one
        }
    }

    return $dictionary;
}

print_r(frecuency("HOLAAA"));
?>