<?php

namespace App\Http\Controllers;

use App\Jobs\BlogIndexData;
use App\Http\Requests;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use App\Services\RssFeed;
use App\Services\SiteMap;

class BlogController extends Controller
{
  public function index(Request $request)
  {
//echo "ggggg";
//var_dump($request);

   // echo "htrtrssss";

    $tag = $request->get('tag');


  //  var_dump($tag);

    

    $data = $this->dispatch(new BlogIndexData($tag));

//echo "<pre>";
//print_r($data);





    $layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';

    return view($layout, $data);
  }
  public function showPost($slug, Request $request)
  {
    $post = Post::with('tags')->whereSlug($slug)->firstOrFail();
    $tag = $request->get('tag');
    if ($tag) {
        $tag = Tag::whereTag($tag)->firstOrFail();
    }

    return view($post->layout, compact('post', 'tag', 'slug'));
  }
  public function rss(RssFeed $feed)
  {
    $rss = $feed->getRSS();

    return response($rss)
      ->header('Content-type', 'application/rss+xml');
  }
  public function siteMap(SiteMap $siteMap)
  {
    $map = $siteMap->getSiteMap();

    return response($map)
      ->header('Content-type', 'text/xml');
  }



 public function maths($param)
  {


    //echo $param;


    //echo "inside maths tps controller";





    $tag = NULL;
    $data = $this->dispatch(new BlogIndexData($tag));

   // echo "<pre>";
    //print_r($data);


    $chapters = array('9'=>7,'10'=>10);    



    $data = Array
(
    'title' => 'dev (b) log',
    'subtitle' => 'Confessions of a Programmer',
    

    'page_image' => 'home-bg.jpg',
    'meta_description' => 'Confessions of a Programmer',
    'tag' =>'',
    'class' => $param,
    'chapters'=> $chapters[$param]
     
);


  //  echo "<pre>";
   // print_r($data);exit;



    $layout =  'blog.layouts.chapters';



    //$layout = 'blog.layouts.index';

    return view($layout, $data);

    /*$map = $siteMap->getSiteMap();

    return response($map)
      ->header('Content-type', 'text/xml');*/
  }


public function solutions($param1,$param2,$param3)
{

  //var_dump($param1);var_dump($param2);
 // var_dump($param3);

 // exit;

    //echo $param;


    //echo "inside maths tps controller";



/*

    $tag = NULL;
    $data = $this->dispatch(new BlogIndexData($tag));

   // echo "<pre>";
    //print_r($data);


    $chapters = array('9'=>7,'10'=>10);    
*/


    $data = Array
(
    'title' => 'dev (b) log',
    'subtitle' => 'Confessions of a Programmer',
    

    'page_image' => 'home-bg.jpg',
    'meta_description' => 'Confessions of a Programmer',
    'tag' =>'',
    'class' => $param2,
    'chapters'=> $param3
     
);


  //  echo "<pre>";
   // print_r($data);exit;



    $layout =  'blog.layouts.maths'.$data['class'].'-'.$data['chapters'];




    //$layout = 'blog.layouts.index';

    return view($layout, $data);

    /*$map = $siteMap->getSiteMap();

    return response($map)
      ->header('Content-type', 'text/xml');*/
  }




}
