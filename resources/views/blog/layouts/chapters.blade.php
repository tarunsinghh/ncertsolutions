@extends('blog.layouts.master')

@section('page-header')
  <header class="intro-header parallax-window" data-parallax="scroll"  >
    <div class="container">
      <div class="row">
        </div>
      </div>
    </div>
  </header>
@stop




@section('content')

<br/><br/><br/>
  <div class="container">
    <div class="rowchapter">
      <div class="col-lg-2 col-lg-offset-2 col-md-2 col-md-offset-1">

            
         
              <h3 class="post-title">Class{{ $class }} Maths Solutions </h3>
        
          



          @for  ($i=0;$i<= 10 ;++ $i)
          
          
          <a href= {{ '/solutions/'.$chapters[$i][1] }} >
              <h4 class="post-title">{{ $chapters[$i][0] }}</h4>
          </a>

           

              
               
          
          @endfor

      </div>
      </div></div>

          
       @stop
































