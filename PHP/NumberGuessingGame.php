<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "\nIn this game you will be asked ten times to guess a number from one to ten. Based on\nyour answers in comparison to each number, you will be given information on your\nperformance after all ten rounds.\n";


function guessNumber() {
  global $play_count, $correct_guesses, $guess_high, $guess_low;
  $play_count++;

  $rand_num = rand(1,10);

  echo "\n\nRound $play_count:\n";
  echo "Enter your guess from 1 - 10...\n";
  $player_guess = intval(readline(">> "));
  //echo gettype($player_guess);  // debug
  if ($player_guess >= 1 && $player_guess <= 10) {
    if ($player_guess === $rand_num) {
      $correct_guesses++;
    }
    if ($player_guess > $rand_num) {
      $guess_high++;
    } elseif ($player_guess < $rand_num) {
      $guess_low++;
    } else {
      echo "\nGood job!";
    }
    //echo "\nCorrect: $correct_guesses\nHigh: $guess_high\nLow: $guess_low\n";  // debug

    echo "\nRound ${play_count}'s number was '$rand_num' and you guessed '$player_guess'.\n";
  } else {
    echo "\nInvalid guess.\n";
  }
}

while ($play_count < 10) {
  guessNumber();
}
if ($play_count === 10) {
  $percent_correct = ($correct_guesses / $play_count) * 100;
  $player_tendency = ($guess_high > $guess_low) ? "higher" : "lower";
  echo "\n\nYou got $percent_correct% of guesses correct.\nWhen you missed, you tended to guess $player_tendency.\n\n";
  //echo "WORKING";  // debug
}
