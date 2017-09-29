{{-- Navigation --}}
<nav class="navbar navbar-default navbar-custom navbar-fixed-top is-fixed is-visible">
  <div class="container-fluid">
    {{-- Brand and toggle get grouped for better mobile display --}}
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target="#navbar-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">{{ config('blog.name') }}</a>
    </div>









    {{-- Collect the nav links, forms, and other content for toggling --}}
    <div class="collapse navbar-collapse " id="navbar-main">
     
      <ul class="nav navbar-nav navbar-right">
       


       <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Tutorials<span class="fa fa-angle-down"></span></a>
                  <div class="dropdown-menu animated fadeInDown">
                    <div class="dropdown-inner">
                      <ul class="list-unstyled">
                       <li>
                          <a href="#">Sets</a>
                        </li>
                        <li>
                          Permutation and combinations( Coming soon !!)
                         <!-- <a href="#">Permutation and combinations</a>-->
                        </li>
                        <li>
                        
                          Probability( Coming soon !!)

                        <!--  <a href="#">Probability</a> -->
                        </li>
                         <li>
                        <!--  <a href="#">Trigonometry</a> -->
                        </li>
                   <!--     
                         <li>
                          <a href="#">Coordinate Geometry</a>
                        </li>
                         <li>
                          <a href="#">Miscelleneous</a>
                        </li>
                          -->                  
                      </ul>
                    </div>
                  </div>
                </li>


<!--

<li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Class 9<span class="fa fa-angle-down"></span></a>
                  <div class="dropdown-menu animated fadeInDown">
                    <div class="dropdown-inner">
                      <ul class="list-unstyled">
                        <li>
                          <a href="/maths/9">Maths</a>
                        </li>
                        <li>
                          <a href="#">Physics</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>

-->


<li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="">Class 10<span class="fa fa-angle-down"></span></a>
                  <div class="dropdown-menu animated fadeInDown">
                    <div class="dropdown-inner">
                      <ul class="list-unstyled">
                        <li>
                          <a href="/maths/10">Maths</a>
                        </li>
                 <!--       <li>
                          <a href="#">Physics</a>
                        </li>-->
                      </ul>
                    </div>
                  </div>
                </li>










<!--




         <li>
          <a href="/">Solutions</a>
        </li>
-->
        <li>
          <a href="/contact">Contact</a>
        </li>
          @if (Auth::guest())
          @else
            <li class="dropdown ">
              <a href="/admin/post" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Hi {{ Auth::user()->name }}!
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li @if (Request::is('admin/post*')) class="active" @endif>
                  <a href="/admin/post">Posts</a>
                </li>
                <li role="separator" class="divider"></li>
                <li @if (Request::is('admin/tag*')) class="active" @endif>
                  <a href="/admin/tag">Tags</a>
                </li>
                <li role="separator" class="divider"></li>
                <li @if (Request::is('admin/upload*')) class="active" @endif>
                  <a href="/admin/upload">Uploads</a>
                </li>
                <li role="separator" class="divider"></li>
                <li><a href="/auth/logout">Logout</a></li>
              </ul>
            </li>
          @endif
      </ul>
    </div>
  </div>

<script type ="text/javascript">


console.log(document.querySelector('.navbar-toggle'));



$(document).on('click','.navbar-toggle',function(e) {

  if($("#navbar-main").hasClass("in") ) {

      console.log("ddd");
        
        $("#navbar-main").removeClass("in");
    }

  else{
            console.log("ddd1");

        $("#navbar-main").addClass("in")
    }




});
console.log( "ready!" );
//console.log(document.querySelector('.navbar-toggle'));

/*
$(".navbar-toggle").onclick(function() {
alert('Item selected');
});





document.querySelector('.navbar-toggle').click( function ()
  {
    console.log("tps")
  });
*/
</script>
</nav>


