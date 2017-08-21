@extends('blog.layouts.math')

@section('page-header')
  <header class="intro-header parallax-window" data-parallax="scroll"  >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="site-heading">
            <h1>{{ $title }}</h1>
            <hr class="small">
            <h2 class="subheading">{{ $subtitle }}</h2>
            {{--<h2 class="subheading">{{ Inspiring::quote() }}</h2>--}}
          </div>
        </div>
      </div>
    </div>
  </header>
@stop




<p>

When $a \ne 0$, there are two solutions to \(ax^2 + bx + c = 0\) and they are
$$x = {-b \pm \sqrt{b^2-4ac} \over 2a}.$$

</p>






          
       @stop
































