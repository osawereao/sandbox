<?php
require 'voteapp.inc';

//DATABASE CONFIGURATION
$config['DB'] = ['user' => "root", 'password' => "nYxsL18#", 'database' => "wow_vote"];

$app = new VoteApp;
$app->DBInit($config['DB']['user'], $config['DB']['password'], $config['DB']['database']);


$DEMO = $app->FinalistRanking();
$app->DBUG($DEMO);
echo '<hr>';
// $DEMO = $app->TotalVoteByID('CAT04');
$DEMO = $app->FinalistByIDRanking('CAT01');

$app->DBUG($DEMO);

