<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Ensure that can logout at Homepage');
  $I->amOnPage('/');
function TestTD_6($I)
{
     $I->amOnPage('/');
     $I->click('login');
     $I->fillField('username', 'stock');
     $I->fillField('password', 'seeker');
     $I->click('Login');
     $I->see('Logged in Please wait for redirect!');  
     $I->wait(3);
     $I->click('Home');
     $I->see('Add News(Logged in as Admin)');
     $I->click('Logout');
     $I->see('login');  
}
TestTD_6($I);


