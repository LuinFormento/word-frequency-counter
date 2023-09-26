<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_Set_01</title>
</head>
<body>

    <h1>Practice Set 1</h1>
    
    <?php
        // Poorly organized and hard-to-read code
        // Calculate the total price of items in a shopping cart
        $items = [
        ['name' => 'Widget A', 'price' => 10],
        ['name' => 'Widget B', 'price' => 15],
        ['name' => 'Widget C', 'price' => 20],
        ];


        // _____________Total Price of items in a shopping cart__________________

        /**
        * Calculates the total price of items in a shopping cart.
        *
        * @param array $items An array of items with 'name' and 'price' keys.
        * @return float The total price of the items..
        * @return float The total price of the items...
        */

        function calculatePriceSum(array $items): float {
            $total = 0;
            foreach ($items as $item) {
                $total += $item['price'];
            }
            return $total;
        }
        $PriceSum = calculatePriceSum($items);
        echo "Total price: $" . $PriceSum;
        echo "</br></br>";

        // __________________________String Modification_______________________________

        // Perform a series of string manipulations
        $string = "This is a poorly written program with little structure and readability.";

        //Remove spaces

        /**
         * Modify the string var to zero spaces.
         *
         * @param string $strInput The string holder.
         * @return string Result of the no space string.
        */
        function strRmSpaces (string $strInput): string{
            $string = $strInput;

            $string = str_replace(' ', '', $string);
            $string = strtolower($string);

            echo "\nNo space string: ". $string . "<br>";
            return $string;
        }

        strRmSpaces($string);
        echo "</br>";

        //Modify to lowercase
        /**
         * Modify the string var to lowercase.
         *
         * @param string $strInput The string holder.
         * @return string Result of the lowercase string.
        */
        function strLcase (string $strInput): string{
            $string = $strInput;

            $string = strtolower($string);

            echo "\nLowercase string: ". $string . "<br>";
            return $string;
        }

        strLcase($string);
        echo "</br>";

        //____________________________Odd or Even_________________________________
        
        // Given Number
        $number = 42;
        /**
        * Identify if the number is even or odd.
        *
        * @param int $num1 Parameter that takes the input number.
        * @return int Return the number and if it is odd or even.
        */
        function oddOrEven (int $num1): int{
            $number = $num1;
            
            if ($number % 2 == 0) {
                echo "\nThe number " . $number . " is even.";
            } else {
                echo "\nThe number " . $number . " is odd.";
            };

            return $number;
        }

        oddOrEven($number);


    ?>

</body>
</html>