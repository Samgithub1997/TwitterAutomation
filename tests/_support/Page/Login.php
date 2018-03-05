<?php
namespace Page;

class Login
{
    // include url of current page
    public static $url = '/login';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */
    public static $username = ['class' => 'js-username-field'];

    public static $password = '.t1-form input[type=password]';

    public static $loginButton = ['xpath'=>'//button[contains(text(),\'Log in\')]'];
    
    public static $newPost = ['xpath' => '//*[@id="tweet-box-home-timeline"]'];

    public static $clickTweet = ['xpath' => '/html/body/div[2]/div[2]/div/div[2]/div[2]/div/form/div[3]/div[2]/button'];

    
}
