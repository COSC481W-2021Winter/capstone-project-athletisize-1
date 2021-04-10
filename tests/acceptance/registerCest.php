<?php 

class registerCest
{

    // tests
    public function signup(AcceptanceTester $I)
    {
        $I->amOnPage('/login_signup.php');
        $I->fillField('username', 'joshtest22');
    }

    public function passmatch(AcceptanceTester $I) {
        $I->amOnPage('/login_signup.php');
        $I->fillField(['name' => 'username'], 'passtest');
        $I->fillField(['name' => 'password'], 'passtest');
        $I->fillField(['name' => 'confirm_password'], 'notpass');
        $I->click('Submit');
        $I->see('Password did not match');
    }

    public function loginlink(AcceptanceTester $I) {
        $I->amOnPage('/login_signup.php');
        $I->click('Login here');
        $I->see('Please fill in your credentials to login.');
    }

    public function headerlinks(AcceptanceTester $I) {
        $I->amOnPage('login_signup.php');
        $I->click('HOME');
        $I->see('Get started');
        $I->amOnPage('/header.php');
        $I->click('SPORTS');
        $I->see('What equipment is required for each sport?');
        $I->amOnPage('/header.php');
        $I->click('ABOUT');
        $I->see('MEET THE TEAM');
        $I->amOnPage('/header.php');
        $I->click('LOGIN');
        $I->see('Please fill in your credentials to login.');
        $I->amOnPage('/header.php');
        $I->click('SIGN UP');
        $I->see('Please fill this form to create an account.');
        $I->amOnPage('/header.php');
        $I->click('CONTACT');
        $I->see('Best time to contact');
    }

    public function usernametaken(AcceptanceTester $I) {
        $I->amOnPage('login_signup.php');
        $I->fillField(['name' => 'username'], 'joshtest');
        $I->fillField(['name' =>'password'], 'testpass');
        $I->fillfield(['name' => 'confirm_password'], 'testpass');
        $I->click('Submit');
        $I->see('This username is already taken.');
    }

    public function logotest(AcceptanceTester $I) {
        $I->amOnPage('login_signup.php');
		$I->see('ATHLETISIZE');
		$I->seeElement('//img[@src="../images/as_logo_white.png"]');
    }
}
