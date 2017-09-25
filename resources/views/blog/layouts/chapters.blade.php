@extends('blog.layouts.master')

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




@section('content')
  <div class="container">
    <div class="rowchapter">
      <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-1">

            
         <a href="/blog">
              <h3 class="post-title">Class{{ $class }} Maths Solutions </h3>
        </a>
          



          @for  ($i=1;$i<= $chapters ;++ $i)
          
          <a href="/solutions/0/10/15" >
              <h4 class="post-title">Chapter{{ $i }}</h4>
          </a>

           
              
               
          
          @endfor

      </div>
      </div></div>

          
       @stop
































