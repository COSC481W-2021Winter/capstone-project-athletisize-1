<?php 

class ContactCest
{
    

    // tests

    //page loading
    public function pageloads(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT');
        $I-amOnpage('/contact.php');
    }

    // nav loads
    public function nav(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->see('HOME');
        $I->see('SPORTS');
        $I->see('ABOUT');
        $I->see('LOGIN');
        $I->see('SIGN UP');
        $I->see('CONTACT');
    }

    // nav clicks
    public function navbarclick(AcceptanceTester $I)
    {
        //contact page
        $I->amOnpage('/index.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');

        //home page
        $I->click('HOME');
        $I->amOnpage('/index.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');

        //sports page
        $I->click('SPORTS');
        $I->amOnpage('/sports.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');

        //about page
        $I->click('ABOUT');
        $I->amOnpage('/about.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');
        /*
        //login
        $I->click('LOGIN');
        $I->amOnpage('/login.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');

        //sign up
        $I->click('SIGN UP');
        $I->amOnpage('/signup.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');
        */
    } 
    


    //logo
    public function logoimage(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->seeElement('//img[@src="as_logo_white.png"]');
    }

    //header loads
    public function headerloads(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');
        $I->see('Contact us');
    }

    //Email
    public function Email(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');
        $I->see('Email: aghaleb1@emich.edu.');
    }

    //Phone number
    public function phone(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');
        $I->see('Phone Number: 917-633-9974.');
    }

    //Best time
    public function time(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');
        $I->see('Best time to contact: 8am-5pm.');
    }

}
