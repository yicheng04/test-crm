<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Block;
use App\Banner;
use App\Article;

class HomeController extends BaseController {

	public function getIndex() {
		$data['tweets'] =  HomeController::twitterFeed();
        $data['banners'] = Banner::where('status_id', 1)->get();
        $data['main_blocks'] = Block::where('block_type_id', 1)->get();
        $data['sub_blocks'] = Block::where('block_type_id', 2)->get();
                $data['news'] =  Article::orderBy('created_at', 'desc')->take(3)->get();
		return \View::make( 'home.home', $data );
	}

	public static function twitterFeed($screen_name='elonmusk', $count='5', $include_retweets='true', $exclude_replies='true')
    {
        $twitterfeed = \Cache::remember('twitterfeed', 1, function() use ($screen_name, $count, $include_retweets, $exclude_replies) {
            return \Twitter::getUserTimeline(array('screen_name' => $screen_name, 'count' => $count, 'include_rts' => $include_retweets, 'exclude_replies' => $exclude_replies));
        });

        return !empty($twitterfeed) ? $twitterfeed : array();
    }
}
