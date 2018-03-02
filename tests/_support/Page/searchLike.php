<?php
namespace Page;

class searchLike
{
    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static $url = '/';
    public static $url1 = '/search?q=chris%20martin&src=typd';
    public static $searchTweet = ['name' => 'q'];
    
    public static $searchButton = ['xpath' => '/html/body/div[2]/div[1]/div[2]/div/div/div[3]/div/form/span/button'];
/*    public static function route($param)
    {
        return static::$URL.$param;
    }
*/
    //comment on the first post 
    public static $comment = ['xpath' => '/html/body/div[2]/div[2]/div/div[2]/div/div/div[2]/div/div/div/div/div[2]/ol[1]/li[3]/div/div[2]/div[4]/div[2]/div[1]/button'];
    public static $textarea = ['id' => 'tweet-box-global'];
    public static $hitReply = ['xpath' => '/html/body/div[23]/div/div[2]/div[4]/form/div[3]/div[2]/button'];
   // public static $closeCommentSection = ['xpath' => '/html/body/div[23]/div/button'];
    

    //likes
    public static $like1 = ['xpath' => '/html/body/div[2]/div[2]/div/div[2]/div/div/div[2]/div/div/div/div/div[2]/ol[1]/li[2]/div/div[2]/div[3]/div[2]/div[3]/button[1]'];
}