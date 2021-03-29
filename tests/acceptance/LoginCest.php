<?php 

class LoginCest
{
    // tests
	public function _before(AcceptanceTester $I)
    {
    }
	
    public function TestTextBox(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
		$I->see('Username');
		$I->see('Password');
		$I->click('LOGIN');
		$I->see('Please fill');
	}
	public function navBar(AcceptanceTester $I)
    {
		//Nav Bar testing
		$I->amOnPage('/header.php');
		$I->click('HOME');
		$I->see('beginner');
		
		$I->amOnPage('/header.php');
		$I->click('SPORTS');
		$I->see('Hockey');
		
		$I->amOnPage('/header.php');
		$I->click('LOGIN');
		$I->see('Login');
		
		$I->amOnPage('/header.php');
		$I->click('SIGN UP');
		$I->see('Sign Up');
		
		$I->amOnPage('/header.php');
		$I->click('ABOUT');
		$I->see('new talent');
		
		$I->amOnPage('/header.php');
		$I->click('CONTACT');
		$I->see('Contact us');
		
		//TOP LEFT LOGO 
		$I->amOnPage('/header.php');
		$I->seeElement('//img[@src="../images/as_logo_white.png"]');
    }
}
