{{-- Navigation --}}
  <div class="container">
    {{-- Brand and toggle get grouped for better mobile display --}}
   <nav class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" aria-expanded="true">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Ncert Solved</a>
      </div>
      <!-- Collection of nav links, forms, and other content for toggling -->
      <div id="navbarCollapse" class="navbar-collapse collapse in" aria-expanded="true" style="">
          <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">Tutorials<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="http://www.tpsncert.com/tutorials/sets-tutorial">Sets</a></li>
                      <li><a href="#">Permutations and Combinations(Coming soon !!)</a></li>
                   </ul>
              </li>
                
              <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">Class 10<b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><a href="/maths/10">Maths</a></li>
              </ul>



                   
              </li>

          </ul>
    
      </div>
  </nav>
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


