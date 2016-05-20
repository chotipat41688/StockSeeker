<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Login with wrong username and password');
  $I->amOnPage('/');
function TestTD_2($I)
{
     $I->amOnPage('/');
     $I->click('login');
     $I->fillField('username', 'stocks');
     $I->fillField('password', 'seekers');
     $I->click('Login');
     $I->see('Wrong User!');
	 $I->seeCurrentUrlEquals('/checklogin.php');
}
TestTD_2($I);


