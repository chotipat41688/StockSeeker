<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Ensure that admin can add news');
  $I->amOnPage('/');


  function test_login($I)
{
    $I->click('login');
    $I->wait(3);
    $I->seeCurrentUrlEquals('/Login.php');
    $I->fillField('username', 'stock');
    $I->fillField('password', 'seeker');
    $I->click('input[type=submit]');
    $I->wait(3);


}

	function test_addnews($I)
{
	$I->fillField('title','หัวข้อข่าว001');
	$I->fillField('subTitle','รายละเอียดย่อ001');
	$I->fillField('detail','รายละเอียดเต็ม');
	$I->selectOption('#topic','ข่าวการลงทุน');
 	$I->click('input[type=submit]');
 	$I->wait(3);
 	$I->seeCurrentUrlEquals('/index.php');
 	$I->see('หัวข้อข่าว001');
 	$I->see('รายละเอียดย่อ001');
  $I->wait(3);

}

test_login($I);
test_addnews($I);