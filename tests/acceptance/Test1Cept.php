<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Login with correct username and password');
  $I->amOnPage('/');
function TestTD_1($I)
{
     $I->amOnPage('/');
     $I->click('login');
     $I->fillField('username', 'stock');
     $I->fillField('password', 'seeker');
     $I->click('Login');
     $I->see('Logged in Please wait for redirect!');
     $I->amOnPage('/insertNews.php');
}
TestTD_1($I);

