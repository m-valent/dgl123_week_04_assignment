<!DOCTYPE html>
<html lang="en">

<!--
Title:      Week 04 Assignment

Student:    Misko Valent
Due Date:   Sept 29, 2021
Filename:   calculator.php

Class:      DGL 123 - Introduction to PHP
Semester:   2021 Fall North Island College
Instructor: Brad Best

NOTE:  I know I do not require the extra HTML code, but for now am including it
unless you wish to just focus on the PHP and ignore the added HTML?
-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGL 123 - Week 04 - Calculator</title>
</head>

<body>

    <h1>Addition ONLY Calculator</h1>

    <!-- action post will return to same page with variable user inputs -->

    <form method="post">
        <label for="first">First Number:</label>
        <input type="number" name="first" id="first" value="" required>
        <br>
        <label for="second">Second Number:</label>
        <input type="number" name="second" id="second" value="" required>
        <br>
        <button type="submit" name="submit" value="submit">Calculate SUM</button>

        <!-- I changed from a input to button so that I could post the sumbit value
        after button was pressed, this allowed $_POST['sumbit'] to set a value
        other than NULL, allowed the IF statement to proceed -->

    </form>

    <?php

    /* I needed something to block the undefined variables below in the IF statement,
    they are unknown until the user submits the numbers. I had to find something that
    would show as undefined to stop the IF statement from action, I found in my search
    ISSET — Determine if a variable is declared and is different than null. Tried it
    out and it worked. Since $_POST['sumbit'] has not been set the IF statement as NULL,
    I was asking if not null, proceed.
    */

    /* found info about ISSET at https://www.php.net/manual/en/function.isset.php */

    if (isset($_POST['submit'])) {

        $number_one = $_POST['first']; /* took first value into php variable $number_one */
        $number_two = $_POST['second'];  /* took second value into php variable $number_two */
        $sum_numbers = $number_one + $number_two;
        /* added variable $number_one to variable $number_two and put into variable $sum_numbers */

        echo '<p><h3>Result:</h3></p>';

        echo $number_one . " + " . $number_two . " = " . $sum_numbers;
    }

    ?>

</body>

</html>