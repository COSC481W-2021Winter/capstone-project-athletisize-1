<?php 

class LoginCest
{
    // tests
    public function TestTextBox(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField('//input[@type="text"]',"dylan");
        $I->fillField('//input[@type="password"]',"asdasd");
		
		//Check for the incorrect password
        $I->submitForm('#login_form', array('//input' => array(
            'uid' => 'dylan',
            'pwd' => '123456789'
        )), 'Login');
		$I->see('The password you entered was not valid');
		
		//Check for incorrect username
        $I->submitForm('#login_form', array('//input' => array(
            'uid' => 'dylanasd',
            'pwd' => 'asdasd'
        )), 'submit');
		$I->see('No account found with that username');
		
		//Check for correct login
        $I->submitForm('#login_form', array('//input' => array(
            'uid' => 'dylan',
            'pwd' => 'asdasd'
        )), 'submit');
		$I->seeInCurrentUrl('Welcome');
    }

    public function TestForgotPassword(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->click('Forget password?');
		$I->seeInCurrentUrl('signup');

    }
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
