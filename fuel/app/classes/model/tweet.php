<?php

class Model_Tweet extends \Orm\Model
{
    protected static $_properties = array(
        "id" => array(
            "label" => "Id",
            "data_type" => "int",
        ),
        "text" => array(
            "label" => "Text",
            "data_type" => "text",
        ),
        "user_name" => array(
            "label" => "User name",
            "data_type" => "text",
        ),
        "screen_name" => array(
            "label" => "Screen name",
            "data_type" => "text",
        ),
        "icon" => array(
            "label" => "Icon",
            "data_type" => "text",
        ),
        "time" => array(
            "label" => "Time",
            "data_type" => "int",
        ),
        "created_at" => array(
            "label" => "Created at",
            "data_type" => "int",
        ),
        "updated_at" => array(
            "label" => "Updated at",
            "data_type" => "int",
        ),
    );

    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'property' => 'created_at',
            'mysql_timestamp' => false,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_update'),
            'property' => 'updated_at',
            'mysql_timestamp' => false,
        ),
    );

    protected static $_table_name = 'tweets';

    protected static $_primary_key = array('id');

    protected static $_has_many = array(
    );

    protected static $_many_many = array(
    );

    protected static $_has_one = array(
    );

    protected static $_belongs_to = array(
    );

    /**
     * @return array ツイートの配列を返す
     */
    public function fetch_tweet() {
        // ライブラリの読み込み
        require_once (APPPATH.'vendor/twistOAuth.phar');

        $consumer_key        = $_SERVER['consumer_key'];
        $consumer_secret     = $_SERVER['consumer_secret'];
        $access_token        = $_SERVER['access_token'];
        $access_token_secret = $_SERVER['access_token_secret'];

        $connection = new TwistOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

        // キーワードによるツイート検索
        $tweets_params = ['q' => 'スプラトゥーン -@ exclude:retweets' ,'count' => '100'];
        $tweets = $connection->get('search/tweets', $tweets_params)->statuses;

        return $tweets;
    }

    /**
     * @param $text String
     * @param $user_name String
     * @param $screen_name String
     * @param $icon String
     * @param $time Integer
     */
    public function save_tweet($text, $user_name, $screen_name, $icon, $time) {
        $this->text        = $text;
        $this->user_name   = $user_name;
        $this->screen_name = $screen_name;
        $this->icon        = $icon;
        $this->time        = $time;

        try {
            $this->save();
            echo "safe\n";
        } catch (Fuel\Core\Database_Exception $e) {
            echo "out\n";
        }
    }

}
