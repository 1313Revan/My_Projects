<?php

function magic8Ball()
{
  echo "\nAsk of me, the Magic 8 Ball!\n";
  $question = readline(">> ");

  $rand_num = rand(0,19);
  $response = "";
  //echo $rand_num;

  switch ($rand_num) {
    case $rand_num === 0:
      $response = "It is certain.";
      break;
    case $rand_num === 1:
      $response = "It is decidedly so.";
      break;
    case $rand_num === 2:
      $response = "Without a doubt.";
      break;
    case $rand_num === 3:
      $response = "Yes - definitely.";
      break;
    case $rand_num === 4:
      $response = "You may rely on it.";
      break;
    case $rand_num === 5:
      $response = "As I see it, yes.";
      break;
    case $rand_num === 6:
      $response = "Most likely.";
      break;
    case $rand_num === 7:
      $response = "Outlook good.";
      break;
    case $rand_num === 8:
      $response = "Yes.";
      break;
    case $rand_num === 9:
      $response = "Signs point to yes.";
      break;
    case $rand_num === 10:
      $response = "Reply hazy, try again.";
      break;
    case $rand_num === 11:
      $response = "Ask again later.";
      break;
    case $rand_num === 12:
      $response = "Better not tell you now.";
      break;
    case $rand_num === 13:
      $response = "Cannot predict now.";
      break;
    case $rand_num === 14:
      $response = "Concentrate and ask again.";
      break;
    case $rand_num === 15:
      $response = "Don't count on it.";
      break;
    case $rand_num === 16:
      $response = "My reply is no.";
      break;
    case $rand_num === 17:
      $response = "My sources say no.";
      break;
    case $rand_num === 18:
      $response = "Outlook not so good.";
      break;
    case $rand_num === 19:
      $response = "Very doubtful.";
      break;
    default:
      echo "Please try again.";
  }

  echo "\nYour inquiry:\n\"$question\"\n\nThe knowledge you seek:\n$response\n\n";
}

magic8Ball();
