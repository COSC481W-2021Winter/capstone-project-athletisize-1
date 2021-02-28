<?php
class ContactCest
{
    //1. CONTACT US page loading
    public function loadingCU(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT US');
        $I->amOnpage('/contact.php');
    }
    
    //2.Test if navigation bar appears on page
    public function navAppears(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT US');
        $I->amOnpage('/contact.php');
        $I->see('Home');
        $I->see('Sports');
        $I->see('About');
        $I->see('Log in');
        $I->see('Sign up');
        $I->see('Contact us');
    }

    //3.Test if the Contact Us header appears
    public function contactHeader(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT US');
        $I->amOnpage('/contact.php');
        $I->see('Contact us');
    }

    //4.Email
    public function email(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT US');
        $I->amOnpage('/contact.php');
        $I->see('Email: aghaleb1@emich.edu.');
    }

    //5.Phone Number
    public function phoneNumber(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT US');
        $I->amOnpage('/contact.php');
        $I->see('Phone Number: 917-633-9974.');
    }

    //6.Best Time
    public function bestTime(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->click('CONTACT US');
        $I->amOnpage('/contact.php');
        $I->see('Best time to contact: 8am-5pm.');
    }
}
