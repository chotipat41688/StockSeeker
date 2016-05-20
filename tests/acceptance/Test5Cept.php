<?php 
  $I = new AcceptanceTester($scenario);
  $I->wantTo('Ensure that news that admin add will update in Homepage and news is correctly');
  $I->amOnPage('/');


  function test_login_update($I)
{
    $I->click('login');
    $I->wait(3);
    $I->seeCurrentUrlEquals('/Login.php');
    $I->fillField('username', 'stock');
    $I->fillField('password', 'seeker');
    $I->click('input[type=submit]');
    $I->wait(3);


}

	function test_addnews_update($I)
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

test_login_update($I);
test_addnews_update($I);