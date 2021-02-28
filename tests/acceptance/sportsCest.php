<?php 

class sportsCest
{
	public function _before(AcceptanceTester $I)
	{
	}

	//dont currently have an image on the sports page but we will 
	//so I tested for it on the home apge
	public function testImage(AcceptanceTester $I){
		$I->amOnPage('/index.php');
		$I->seeElement('//img[@src="../images/b.jpg"]');
	}

	public function testNavBar(AcceptanceTester $I){
		$I->amOnPage('/header.php');
		$I->click('HOME');
		$I->amOnPage('/index.php');
		$I->see('Figure');
		$I->amOnPage('/header.php');
		$I->click('SPORTS');
		$I->amOnPage('/sports.php');
		$I->see('Please choose a sport');
		$I->amOnPage('/header.php');
		$I->click('ABOUT');
		$I->amOnPage('/about.php');
		$I->see('Emily Tracht');
		$I->amOnPage('/header.php');
		$I->click('LOG IN');
		$I->amOnPage('/login.php');
		$I->see('Log in');
		$I->amOnPage('/header.php');
		$I->click('SIGN UP');
		$I->amOnPage('/signup.php');
		$I->see('sign up');
		$I->amOnPage('/header.php');
		$I->click('CONTACT');
		$I->amOnPage('/contact.php');
		$I->see('contact');
	}
	public function testHockeyLink(AcceptanceTester $I){
		$I->amOnPage('/sports.php');
		$I->click('Hockey');
		$I->amOnPage('/hockey.php');
		$I->see('stick');
		$I->dontSee('bat');
	}
	public function testSoccerLink(AcceptanceTester $I){
		$I->amOnPage('/sports.php');
		$I->click('Soccer');
		$I->amOnPage('/soccer.php');
		$I->see('cleats');
		$I->dontSee('stick');
	}
	public function testBaseballSoftballLink(AcceptanceTester $I){
		$I->amOnPage('/sports.php');
		$I->click('Baseball/Softball');
		$I->amOnPage('/baseball_softball.php');
		$I->see('glove');
		$I->dontSee('shinguards');
	}
	public function testSkiLink(AcceptanceTester $I){
		$I->amOnPage('/sports.php');
		$I->click('Ski');
		$I->amOnPage('/ski.php');
		$I->see('poles');
		$I->dontSee('cleats');
	}
	public function testSnowboardLink(AcceptanceTester $I){
		$I->amOnPage('/sports.php');
		$I->click('Snowboard');
		$I->amOnPage('/snowboard.php');
		$I->see('boots');
		$I->dontSee('poles');
	}
	public function testLacrosseLink(AcceptanceTester $I){
		$I->amOnPage('/sports.php');
		$I->click('Lacrosse');
		$I->amOnPage('/lacrosse.php');
		$I->see('Mouth Guard');
		$I->dontSee('snowboard');
	}
	// public function seeImageWithSource($image_url)
	// {
	// 	$phpBrowser = $this->getModule('PhpBrowser');
	// 	$phpBrowser->seeElement('//img[@src="'.$image_url.'"]');
	// }
}
