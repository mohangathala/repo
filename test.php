<?php
  include './Tournament.php';
  $testPlayers = array(
    "Adam" => "P",
    "Andrew" => "S",
    "Chris" => "R",
    "Casey" => "P",
    "Cadman" => "R"
  );
  echo play($testPlayers) . "\n";

  $testPlayers = array(
    "Cadman" => "R"
  );
  echo play($testPlayers) . "\n";


  $testPlayers = array(
    "Rudman" => "R",
    "Badman" => "R",
    "Padman" => "R",
    "Radman" => "R"
  );
  echo play($testPlayers) . "\n";


  $testPlayers = array(
    "Cadman" => "R",
    "Badman" => "R",
    "Padman" => "Re",
    "Radman" => "R"
  );
  echo play($testPlayers) . "\n";
?>