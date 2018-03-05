<?php
namespace Page;

class Login
{
    // include url of current page
    public static $url = '/login';
    
    //username for logging in
    public static $username = ['class' => 'js-username-field'];

    //password field
    public static $password = '.t1-form input[type=password]';

    //login button
    public static $loginButton = ['xpath'=>'//button[contains(text(),\'Log in\')]'];
    
    //write  a tweet
    public static $newPost = ['xpath' => '//*[@id="tweet-box-home-timeline"]'];

    //post tweet 
    public static $clickTweet = ['xpath' => '/html/body/div[2]/div[2]/div/div[2]/div[2]/div/form/div[3]/div[2]/button'];

    
}
