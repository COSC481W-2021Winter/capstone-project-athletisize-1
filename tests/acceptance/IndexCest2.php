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
        $I->see('HOME');
        $I->see('SPORTS');
        $I->see('ABOUT');
        $I->see('LOGIN');
        $I->see('SIGN UP');
        $I->see('CONTACT');
    }

    //Test if Welcome to Athletisize! header appears.
    public function welcomeheader(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->see('ATHLETISIZE');
    }
    
    //Test if the Get Started button takes you to the sports page.
    public function getstarted(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->see('GET STARTED');
        //$I->click('#button-4');
        //$I->amOnpage('/sports.php');
    }
    
    //Test if paragraph under image shows up.
    public function paragraph(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->see('Lorem ipsum dolor sit amet, consectetur adipiscing elit.
         Vivamus vestibulum sit amet nulla ac tristique. Pellentesque gravida 
         nisl nec ullamcorper hendrerit. Etiam id quam aliquet, accumsan dui in, 
         maximus mauris. Pellentesque placerat ut felis nec commodo. In neque massa, 
         consectetur ac odio non, dictum commodo lorem. Praesent luctus ipsum a libero 
         maximus, sed hendrerit turpis pulvinar. Nam mattis laoreet nibh vel sollicitudin. 
         Ut feugiat auctor neque, ut laoreet dui porta lacinia. Phasellus tempus odio nulla, 
         sed condimentum purus lobortis non. Duis nec augue non sem euismod ultricies.');
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
        $I->click('LOGIN');
        $I->amOnpage('/login.php');
        $I->click('HOME');
        $I->amOnpage('/index.php');
        $I->click('SIGN UP');
        $I->amOnpage('/signup.php');
        $I->click('HOME');
        $I->amOnpage('/index.php');
        $I->click('CONTACT');
        $I->amOnpage('/contact.php');
        $I->click('HOME');
        $I->amOnpage('/index.php');
    } 
    
    //logo
    public function logoimage(AcceptanceTester $I)
    {
        $I->amOnpage('/index.php');
        $I->seeElement('//img[@src="src/images/as_logo_white.png"]');
    }
}
