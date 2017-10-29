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

   // $tag = $request->get('tag');


  //  var_dump($tag);

    

   // $data = $this->dispatch(new BlogIndexData($tag));

//echo "<pre>";
//print_r($data);



    $data = Array
(
    'title' => 'Ncert Solutions',
    'subtitle' => 'Ncert Maths Solutions of all classes',
    

    'page_image' => 'home-bg.jpg',
    'meta_description' => 'Ncert Maths Solutions of all classes',
    'tag' =>'',
    
     
);

    //$layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';

    $layout = 'blog.layouts.index';



    return view($layout, $data);
  }


public function tutorials($param)
  {
//var_dump($param);exit;



    $data = Array
(
    'title' => 'Ncert Solutions',
    'subtitle' => 'Ncert Maths Solutions of all classes',
    

    'page_image' => 'home-bg.jpg',
    'meta_description' => 'Ncert Maths Solutions of all classes',
    'tag' =>'',
    
     
);

    //$layout = $tag ? Tag::layout($tag) : 'blog.layouts.index';

    $layout = 'blog.layouts.'.$param;



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
//echo "here";die();
return;
   $content = View::make('sitemap', ['doctors' => $doctors, 'patients' => $patients]);
    return Response::make($content)->header('Content-Type', 'text/xml;charset=utf-8');
  }



 public function maths($param)
  {


   // echo $param;


  //  echo "inside maths tps controller";

    $tag = NULL;
    //$data = $this->dispatch(new BlogIndexData($tag));

   // echo "<pre>";
    //print_r($data);


     


    $chapterName = array
    (

      '10' =>array (

       array('Real Numbers','real-numbers'),
       array('Polynomials','polynomials'),
       array('Pair of Linear Equations in two variables','pair-of-linear-equations-in-two-variables'),
       array('Quadratic Equations','quadratic-equations'),
       array('Arithematic Progressions','arithematic-progressions'),
       array('Triangles','triangles-10'),
       array('Coordinate Geomtery','coordinate-geometry'),
       array('Some Applications of Triginometry','some-applications-of-triginometry'),
       array('Circles','circles'),
       array('Areas related to Circles','areas-related-to-circles'),
       array('Surface Areas and Volumes','surface-areas-and-volumes'),
       array('Probability','probability')
       ),
      '9'=>array (

        array('Triangles','triangles'),
        array('Surface Areas and Volumes','surface-areas-and-volumes-9')

      ),
      '11'=>array (

        array('Permutations and Combinations','permutations-and-combinations'),
        array('Probability','probability-11')
      )

    );
      
   $data = Array
(
    'title' => 'Ncert Solutions',
    'subtitle' => 'Ncert Maths Solutions of all classes',
    'page_image' => 'home-bg.jpg',
    'meta_description' => 'Ncert Maths Solutions of all classes',
    'tag' =>'',
    'class' => $param,
    'chapters'=> $chapterName[$param]
     
);
   $layout =  'blog.layouts.chapters';

    //$layout = 'blog.layouts.index';

    return view($layout, $data);

    /*$map = $siteMap->getSiteMap();

    return response($map)
      ->header('Content-type', 'text/xml');*/
  }


public function solutions($param1/*,$param2,$param3*/)
{

  //var_dump($param1);exit;var_dump($param2);
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
    'title' => 'Ncert Solutions',
    'subtitle' => 'Ncert Maths Solutions of all classes',
    

    'page_image' => 'home-bg.jpg',
    'meta_description' => 'Ncert Maths Solutions of all classes',
    'tag' =>'',
   // 'class' => $param2,
    'chapterName'=> $param1
     
);


  //  echo "<pre>";
  // print_r($data);
   



  //  $layout =  'blog.layouts.maths'.$data['class'].'-'.$data['chapters'];
  // $layout =  $data['chapterName'];
  //  $layout =  'blog.layouts.maths'.$data['class'].'-'.$data['chapters'];




    $layout = 'blog.layouts.'.$data['chapterName'];
   // var_dump($layout);

    return view($layout, $data);

    /*$map = $siteMap->getSiteMap();

    return response($map)
      ->header('Content-type', 'text/xml');*/
  }

public function privacyPolicy(/*,$param2,$param3*/)
{
    $data = Array
(
    'title' => 'Ncert Solutions',
    'subtitle' => 'Ncert Maths Solutions of all classes',
    

    'page_image' => 'home-bg.jpg',
    'meta_description' => 'Ncert Maths Solutions of all classes',
    'tag' =>''
   // 'class' => $param2,
    
     
);
    $layout = 'blog.layouts.privacy';

    return view($layout,$data);






}


}
