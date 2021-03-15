<?php 

class registerCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function signup(AcceptanceTester $I)
    {
        $I->amOnPage('/signup');
        $I->fillField('username', 'joshtest3');
        $I->fillField('password', 'joshtest3');
        $I->fillField('confirm_password', 'joshtest3');
        $I->click('Submit');
        $I->see('Log In');
    }

    public function passmatch(AcceptanceTester $I) {
        $I->amOnPage('signup');
        $I->fillField('username', 'passtest');
        $I->fillField('password', 'passtest');
        $I->fillField('confirm_password', 'notpass');
        $I->click('Submit');
        $I->see('Password did not match');
    }

    public function loginlink(AcceptanceTester $I) {
        $I->amOnPage('signup');
        $I->click('Login here');
        $I->see('Please fill in your credentials to login.');
    }

    public function headerlinks(AcceptanceTester $I) {
        $I->amOnPage('header');
        $I->click('HOME');
        $I->see('For beginner');
        $I->amOnPage('header');
        $I->click('SPORTS');
        $I->see('Please choose a sport');
        $I->amOnPage('header');
        $I->click('ABOUT');
        $I->see('Josh Roznowski');
        $I->amOnPage('header');
        $I->click('LOG IN');
        $I->see('Please fill in your credentials to login.');
        $I->amOnPage('header');
        $I->click('SIGN UP');
        $I->see('Please fill this form to create an account.');
        $I->amOnPage('header');
        $I->click('CONTACT US');
        $I->see('Best time to contact');
    }

    public function usernametaken(AcceptanceTester $I) {
        $I->amOnPage('signup');
        $I->fillField('username', 'joshtest');
        $I->fillField('password', 'testpass');
        $I->fillfield('confirm_password', 'testpass');
        $I->click('Submit');
        $I->see('This username is already taken.');
    }

    public function logotest(AcceptanceTester $I) {
        $I->amOnPage('/header.php');
		$I->see('ATHLETISIZE');
		$I->seeElement('//img[@src="../images/as_logo_white.png"]');
    }
}
