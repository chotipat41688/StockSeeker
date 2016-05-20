<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Ensure that only admin cans add news');
  $I->amOnPage('/insertNews.php');
function TestTD_4($I)
{
     $I->amOnPage('/insertNews.php');
     $I->see('Please Login first.');
}
TestTD_4($I);


