<?php

    $ans1 = $_POST["q1"];
    $ans2 = $_POST["q2"];
    $ans3 = $_POST["q3"];
    $ans4 = $_POST["q4"];
    $ans5 = $_POST["q5"];

    $count = 0;
    if($ans1 == 'white') $count++;
    if($ans2 == 'sweet') $count++;
    if($ans3 == '8') $count++;
    if($ans4 == 'america') $count++;
    if($ans5 == 'london') $count++;

    echo '
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: 0;
        }
    </style>
    
    <p>Question 1: What is the color of the sun?</p>
    <p>You answered: ' .$ans1. '</p><p>Correct answer: white</p><br>
    <p>Question 2: What is the taste of sugar?</p>
    <p>You answered: ' .$ans2. '</p><p>Correct answer: sweet</p><br>
    <p>Question 3: How many bits is in 1 byte?</p>
    <p>You answered: ' .$ans3. '</p><p>Correct answer: 8</p><br>
    <p>Question 1: What is the color of the sun?</p>
    <p>You answered: ' .$ans4. '</p><p>Correct answer: america</p><br>
    <p>Question 1: What is the color of the sun?</p>
    <p>You answered: ' .$ans5. '</p><p>Correct answer: london</p><br>
    <p>Total Correct Answer: ' .$count. '</p><p>Score: ' .(($count/5)*100). '%</p>';



?>