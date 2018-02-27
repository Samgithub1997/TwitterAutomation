<?php
namespace Page;

class searchLike
{
    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static $search = ['id' => 'search-query'];
    
    public static $searchButton = ['xpath' => '/html/body/div[2]/div[1]/div[2]/div/div/div[3]/div/form/span/button'];
/*    public static function route($param)
    {
        return static::$URL.$param;
    }
*/

}
