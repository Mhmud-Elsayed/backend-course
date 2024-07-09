<?php
/*         problem 1        */


$name="mahmoud";
echo "hello , $name.<br>";


/*         problem 2        */
function calc ($num1,$num2)
{

    if($num1>=1&&$num2<=1000000)
        {


            echo $num1." + ".$num2." = ".$num1+$num2."<br>";
            echo $num1." * ".$num2." = ".$num1*$num2."<br>";
            echo $num1." - ".$num2." = ".$num1-$num2."<br>";



        }


}
calc(10,5);
/*         problem 3        */
function difference ($num1,$num2,$num3,$num4)

{
    if(($num1&&$num2&&$num3&&$num4)>=-1000000&&($num1&&$num2&&$num3&&$num4)<=1000000)
    {
        
        
        echo "Difference = ".($num1*$num2)-($num3*$num4)."<br>";
        
        
        
        
    }
    
    
    
    
    
    
}
difference(1,2,3,4);

/*         problem 4        */


function sum_last_digits ($num1,$num2)
{
    if ($num1>=0&&$num2<=1000000000000000000)
    {
        
        $last_digit_num1=$num1%10;
        $last_digit_num2=$num2%10;
        
        echo "the summition of the last digits is : ".$last_digit_num1+ $last_digit_num2."<br>";
        
        
        
    }
    
    
    
    
}
sum_last_digits(12,13);


/*         problem 1 in 2nd file       */




function calc_odd_numbers ($num1)
{

    if($num1>=999&&$num1<=9999)
        {
           $num2=$num1%1000;
           $firist_digit=($num1-$num2)/1000;
           if($firist_digit%2==0)
             {

                echo $num1 ." is even.<br>";

        
             }
             else {
                echo $num1 ." is odd.<br>";
             }


            
        }


}
calc_odd_numbers (4569);
calc_odd_numbers (3569);


/*         problem 2 in 2nd file       */

function winner ($num1,$num2,$num3)
{
    
    if (($num1&&$num2)>=1&&($num1&&$num2)<=10000000000000)
    {
        if($num1%$num3==0&&$num2%$num3==0)
        {
            echo "both.<br>";
            
        }
        elseif ($num1%$num3==0) 
        {
            echo "memo.<br>";
        }
        elseif ($num2%$num3==0) 
        {
            echo "momo.<br>";
        }
        else {
            echo "no one.<br>";
        }
    }
    else {
        echo "invalid number.<br>";
    }
    
}

winner(15,7,3);
winner(22,10,2);

/*         problem 3 in 2nd file       */

function calc_even_odd_numbers ($num1,$num2)
{

    if(($num1&&$num2)>=0&&($num1&&$num2)<=100){

        if($num1%2==00&& $num2%2==1){

            echo "yes.<br>";


        }
        else {
            echo "no.<br>";
        }




    }




}
calc_even_odd_numbers(2,3);
calc_even_odd_numbers(3,1





















);















