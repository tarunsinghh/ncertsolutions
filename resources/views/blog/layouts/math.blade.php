
<!DOCTYPE html>
<html lang="en">s
  <head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108004650-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108004650-1');
</script>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_description }}">
    <meta name="author" content="{{ config('blog.author') }}">
    <title>{{ $title or config('blog.title') }}</title>
    <link rel="alternate" type="application/rss+xml" href="{{ url('rss') }}" title="RSS Feed {{ config('blog.title') }}">

    {{-- Styles --}}
    <link href="/assets/css/style1.1.css" rel="stylesheet">




    <script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    extensions: ["tex2jax.js"],
    jax: ["input/TeX","output/HTML-CSS"],
    tex2jax: {inlineMath: [["$","$"],["\\(","\\)"]]}
  });</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script>
jQuery(document).ready(function() {

  console.log("kk");
    jQuery(".azc_tsh_toggle_container").hide();
    jQuery(".azc_tsh_toggle").click(function() {
        jQuery(this).toggleClass("azc_tsh_toggle_active").next().slideToggle('fast');
        return false;
    });
});
jQuery(document).ready(function() {
    jQuery(".azc_tsh_toggle_container_open").show();
    jQuery(".azc_tsh_toggle_open_active").click(function() {
        jQuery(this).toggleClass("azc_tsh_toggle_open").next().slideToggle('fast');
        return false;
    });
});

</script>

        <script type="text/javascript" src="../../../MathJax/MathJax.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    @yield('styles')

    @yield('scripts')


    {{-- HTML5 Shim and Respond.js for IE8 support --}}
    <!--[if lt IE 9]> 
      <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> 
      <script type="text/javascript" src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script> 
      <script type="text/javascript" src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script> 
      <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script> 
    <![endif]--> 
    <!--[if gte IE 9]>
      <style type="text/css">.gradient {filter: none;}</style>
    <![endif]-->

  </head>
  <body>
    @include('blog.partials.page-nav')

    @yield('page-header')
    @yield('content')

    @include('blog.partials.page-footer')

    {{-- Scripts --}}
    <script type="text/javascript" src="/assets/js/blog.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
</script>



   
    @yield('scripts')
  </body>
</html>
