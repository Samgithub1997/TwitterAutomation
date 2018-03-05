<?php
namespace Page;

class searchLike
{
    //url just after loging in "https://www.twitter.com/"
    public static $url = '/';

    //after searching for chris martin the url changes
    public static $url1 = '/search?q=chris%20martin&src=typd';
    
    //textbox to search for
    public static $searchTweet = ['xpath' => '//*[@id="search-query"]'];
    
    //search button
    public static $searchButton = ['xpath' => '//*[@id="global-nav-search"]/span/button'];


    //comment on the first post 
    public static $comment = ['xpath' => '//*[@id="stream-item-tweet-969437304900251648"]/div/div[2]/div[4]/div[2]/div[1]/button/div/span[1]'];

    //textarea for writing comment
    public static $textarea = ['xpath' => '//*[@id=\'tweet-box-global\']'];


    public static $hitReply = ['xpath' => '//*[@id="global-tweet-dialog-dialog"]/div[2]/div[4]/form/div[3]/div[2]/button'];
   // public static $closeCommentSection = ['xpath' => '/html/body/div[23]/div/button'];
    

    //likes
    public static $like1 = ['xpath' => '/html/body/div[2]/div[2]/div/div[2]/div/div/div[2]/div/div/div/div/div[2]/ol[1]/li[2]/div/div[2]/div[3]/div[2]/div[3]/button[1]'];
}