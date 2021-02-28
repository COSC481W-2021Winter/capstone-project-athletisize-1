<?php 

class IndexCest
{
    //Test if page loads up.
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
    }

    //Test if nav is present.
    public function nav(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->see('Home');
        $I->see('Sports');
        $I->see('About');
        $I->see('Log in');
        $I->see('Sign up');
        $I->see('Contact us');
    }

    //Test if Welcome to Athletisize! header appears.
    public function welcomeheader(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->see('Welcome to Athletisize!');
    }

    //Test if the Get Started button takes you to the sports page.
    public function getstarted(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->see('Get Started!');
        $I->click('#hb');
        $I->amOnpage('/sports.php');
    }
    
    //Test if paragraph under image shows up.
    public function paragraph(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->see('For beginner, intermediate and advanced athletes who want to skip the hassle of in-store purchases.
        Figure out what you need for your sport with a few clicks');
    }
    
    //Test the navigation bar.
    public function navbarlinks(AcceptanceTester $I)
    {
        //Test from home page and every other page on the nav
        //from home and back.
        $I->amOnpage('/index.php');
        $I->click('SPORTS');
        $I->amOnpage('/sports.php');
        $I->click('HOME');
        $I->amOnpage('/index.php');
        $I->click('ABOUT');
        $I->amOnpage('/about.php');
        $I->click('HOME');
        $I->amOnpage('/index.php');
        $I->click('LOG IN');
        $I->amOnpage('/login.php');
        $I->click('HOME');
        $I->amOnpage('/index.php');
        $I->click('SIGN UP');
        $I->amOnpage('/signup.php');
        $I->click('HOME');
        $I->amOnpage('/index.php');
        $I->click('CONTACT US');
        $I->amOnpage('/contact.php');
        $I->click('HOME');
        $I->amOnpage('/index.php');
    }  */

    //image test
    /*
    public function bodyimage(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->seeElement('//img[@src="b.jpg"]');
        $I->seeImage('/b.jpg');
    }
    */
}
