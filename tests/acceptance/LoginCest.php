<?php 

class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
		//Nav Bar testing
		$I->amOnPage('/header.php');
		$I->click('HOME');
		$I->seeInCurrentUrl('index');
		
		$I->amOnPage('/header.php');
		$I->click('SPORTS');
		$I->seeInCurrentUrl('sports');
		
		$I->amOnPage('/header.php');
		$I->click('LOG IN');
		$I->seeInCurrentUrl('login');
		
		$I->amOnPage('/header.php');
		$I->click('SIGN UP');
		$I->seeInCurrentUrl('signup');
		
		$I->amOnPage('/header.php');
		$I->click('ABOUT');
		$I->seeInCurrentUrl('about');
		
		$I->amOnPage('/header.php');
		$I->click('CONTACT US');
		$I->seeInCurrentUrl('contact');
		
		//TOP LEFT LOGO 
		$I->amOnPage('/header.php');
		$I->see('ATHLETISIZE');
		$I->seeElement('//img[@src="../images/logo.JPG"]'); //Fails bc the logo is not in the php version yet

		//Forgot password
		$I->amOnPage('/login.php');
		$I->see('forgot password'); //Fails bc this doesn't exist in the php version yet
		
		//Already have an account
		$I->amOnPage('/login.php');
		$I->see('already have an account'); //Fails bc this doesn't exist in the php version yet
    }
}
