<?php 

class aboutCest
{
    public function _before(AcceptanceTester $I)
    {
    }
	
    // tests
    public function logo(AcceptanceTester $I)
    {
		//logo
		$I->amOnPage('/header.php');
		$I->see('ATHLETISIZE');
		
	}
	public function about(AcceptanceTester $I)
	{
		//about page
		$I->amOnPage('/About.php');
		$I->see('Emily');
		//$I->seeElement('//img[@src="../images/Emily.JPG"]');
		$I->see('Jonathan');
		//$I->seeElement('//img[@src="../images/Jonathan.jpg"]');
		$I->see('Ali');
		//$I->seeElement('//img[@src="../images/ghaleb.JPG"]');
		$I->see('Rahmah');
		//$I->seeElement('//img[@src="../images/Rahmah.JPG"]');
		$I->see('Dylan');
		//$I->seeElement('//img[@src="../images/Dylan.JPG"]');
		$I->see('Yaoze');
		//$I->seeElement('//img[@src="../images/Yaoze.JPG"]');
		$I->see('Michael');
		//$I->seeElement('//img[@src="../images/Michael.PNG"]');
		$I->see('Josh');
		//$I->seeElement('//img[@src="../images/Josh.jpg"]');
		
	}
	public function navBar(AcceptanceTester $I)
	{
		//home
		$I->amOnPage('/header.php');
		$I->click('HOME');
		$I->see('beginner');
		//about
		$I->amOnPage('/header.php');
		$I->click('ABOUT');
		$I->see('back-end');
		//contact us
		$I->amOnPage('/header.php');
		$I->click('CONTACT');
		$I->see('Athletisize@gmail.com');
		//sports
		$I->amOnPage('/header.php');
		$I->click('SPORTS');
		$I->see('Lacrosse');
		//log in
		$I->amOnPage('/header.php');
		$I->click('LOGIN');
		$I->see('Login');
		//sign up
		$I->amOnPage('/header.php');
		$I->click('SIGN UP');
		$I->see('Sign Up');
		
	}
    }

