<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Ensure that can logout at Add News page');
  $I->amOnPage('/');
function TestTD_7($I)
{
     $I->amOnPage('/');
     $I->click('login');
     $I->fillField('username', 'stock');
     $I->fillField('password', 'seeker');
     $I->click('Login');
     $I->see('Logged in Please wait for redirect!');  
     $I->wait(3);
     $I->see('เพิ่มข่าว'); 
     $I->click('Logout');
     $I->see('login'); 
      
}
TestTD_7($I);


