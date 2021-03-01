<?php 

class LoginCest
{
    // tests
    public function TestTextBox(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->fillField('//input[@type="text"]',"YaozeZ");
        $I->fillField('//input[@type="password"]',"yzy123456");
        $I->submitForm('#login_form', array('//input' => array(
            'uid' => 'Miles',
            'pwd' => '123456789'
        )), 'Login');

        $I->submitForm('#login_form', array('//input' => array(
            'uid' => 'Yaoze',
            'pwd' => '987654321'
        )), 'submit');
    }

    public function TestLoginButton(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->click('Login');
    }

    public function TestForgotPassword(AcceptanceTester $I)
    {
        $I->amOnPage('/login.php');
        $I->click('Forget password?');

    }
}
