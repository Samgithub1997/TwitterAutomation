<?php
namespace Page;

class searchLike
{
    //url just after loging in "https://www.twitter.com/"
    public static $url = '/';

    //after searching for chris martin the url changes
    public static $url1 = '/search?q=chris%20martin&src=typd';
    
    //textbox to search for
    public static $searchTweet = ['xpath' => '//input[@id=\'search-query\']'];
    
    //search button
    public static $searchButton = ['xpath' => '//button[@class=\'Icon Icon--medium Icon--search nav-search\']'];


    //comment on the first post 
    public static $comment = ['xpath' => '//button[@class=\'ProfileTweet-actionButton js-actionButton js-actionReply\']'];

    //textarea for writing comment
    public static $textarea = ['xpath' => '//div[@id=\'tweet-box-global\']'];


    public static $hitReply = ['xpath' => '//button[@class=\'tweet-action EdgeButton EdgeButton--primary js-tweet-btn\']'];
  
    
}
