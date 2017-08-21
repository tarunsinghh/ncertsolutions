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


@section('content')
<p><strong>   EXERCISE 2.1</strong></p>
<p><strong>Question 1:</strong></p>
<p>The graph y = p(x) are given in fig 2.10 for some polynomials p(x).</p>
<p>Find the number of zeros of p(x) in each case </p>
<p><strong>(i):-</strong></p>
<p><img class="alignnone size-full wp-image-350" src="http://s3-ap-southeast-1.amazonaws.com/subscriber.images/ncert-solutions/wp-content/uploads/2017/02/23122341/EX-2.1-EP1.png" alt="EX 2.1 EP1" width="280" height="276" srcset="http://s3-ap-southeast-1.amazonaws.com/subscriber.images/ncert-solutions/wp-content/uploads/2017/02/23122341/EX-2.1-EP1.png 280w, http://s3-ap-southeast-1.amazonaws.com/subscriber.images/ncert-solutions/wp-content/uploads/2017/02/23122341/EX-2.1-EP1-50x50.png 50w" sizes="(max-width: 280px) 100vw, 280px" /></p>
<p>In the above graph, the curve intersects x axis at <strong>A</strong> and <strong>B</strong>.</p>
<p>Therefore, the equation of the curve will have maximum of <strong>2</strong> <strong>zeroes</strong>.</p>
<p>&nbsp;</p>
<p><strong>ii):-</strong></p>
<p><img class="alignnone size-full wp-image-356" src="http://s3-ap-southeast-1.amazonaws.com/subscriber.images/ncert-solutions/wp-content/uploads/2017/02/23122656/2.png" alt="2" width="295" height="282" /></p>
<p>From the above graph, the curve cuts the x-axis at point <strong>A</strong></p>
<p>Therefore, number of <strong>zeroes</strong> of <strong>p(x) = 1</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>iii):-</strong></p>
<p>From the above graph, the curve p(x) intersects x-axis at points <strong>A</strong>, <strong>B</strong> and <strong>C</strong>.</p>
<p>Therefore, the number of zeroes of polynomial equation is <strong>3</strong>.</p>
<p><img class="alignnone size-full wp-image-357" src="http://s3-ap-southeast-1.amazonaws.com/subscriber.images/ncert-solutions/wp-content/uploads/2017/02/23122757/3.png" alt="3" width="299" height="271" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<p><strong>EXERCISE 2.2</strong></p>
<p><strong>Note:Before we go on solvin questions based on polynomial equations,We highly recommend you to read this tutorial
which gives proofs of things we will be using in very simplistic way</strong></p>

<p><strong>Quwation 1:</strong>
<p>Find the zeroes of the following quadratic polynomials and verify the relationship between the zeroes and the coefficients.</p>
<p>(i) 6x² + 11x + 5 = 0</p>

<p><strong>Solution:</strong></p>

<p>6x<sup>2</sup></sup>+ 11x + 5 
<p>= 6x<sup>2 </sup>+ 6x + 5x + 5</p>
<p>= 6x(x +1) + 5(x +1)</p>
<p>= (x +1) (6x +5)</p>
<p>∴ zeroes of polynomial equation  6x<sup>2</sup> +11x +5  are  { −1, \(\frac{-5}{6}\) }</p>
<p>Now,Sum of zeroes  of this given polynomial equation = −1+( \(\frac{-5}{6}\) ) = \(\frac{-11}{6}\)</p>
<p>But, the Sum of zeroes of any quadratic polynomial equation is given by = \(\frac{-coeff.\;\;of\;\; x}{coeff.\;\;of\;\;x^{2}}\) =  \(\frac{-11}{6}\)</p>
<p>And Product of these zeroes will be = \(-1\times\frac{-5}{6}\) = \(\frac{5}{6}\) </p>
<p>But, the Product of zeroes of any quadratic polynomial equation is given by = \(\frac{constant\;\; term}{coeff.\;\;of\;\;x^{2}}\) = \(\frac{5}{6}\) </p>

<p><strong>Hence the relationship for sum of zeros and product of zeros are verified</strong>.</p>

<p>ii)4s<sup>2</sup> – 4s + 1</p>
<p><strong>Solution:</strong></p>
<p>4s<sup>2</sup> – 4s + 1 
<p>= 4s<sup>2</sup> – 2s  – 2s + 1</p>
<p>= 2s (2s – 1) –1(2s – 1)</p>
<p>= (2s – 1) (2s – 1)</p>
<p>∴ zeroes of the given polynomial are: <strong>{\(\frac{1}{2},\frac{1}{2}\)}</strong></p>
<p>∴ Sum of these zeroes will be =  = <strong>1.</strong></p>
<p>But, The Sum of zeroes of any quadratic polynomial equation is given by = \(\frac{-coeff.\;\;of\;\; s}{coeff.\;\;of\;\;s^{2}}\) = \(\frac{-4}{4}\) = 1 </p>
<p>And the Product of these zeroes will be = \(\frac{1}{2}\times \frac{1}{2}\) =\(\frac{1}{4}\)</p>
<p>But, Product of zeroes in any quadratic polynomial equation is given by = \(\frac{constant\;\; term}{coeff.\;\;of\;\;s^{2}}\)</p>
<p>= \(\frac{1}{4}\).</p>
<p><strong>Hence the relationship for sum of zeros and product of zeros are verified</strong>.</p>

<p>iii) 6x<sup>2</sup> – 3 – 7x</p>
<p><strong>Solution:</strong></p>
<p>6x<sup>2</sup> – 7x – 3 </p>
<p>= 6x<sup>2</sup> – 9x + 2x 3</p>
<p>= 3x (2x – 3) +1(2x – 3)</p>
<p>= (3x + 1) (2x – 3)</p>
<p>∴ zeroes of the given polynomial are: (\(\frac{-1}{3},\frac{3}{2}\)) </p>


<p>∴ sum of these zeroes will be =  \(\frac{-1}{3}+\frac{3}{2}\)  =\(\frac{7}{6}\)</p>

<p>But, The Sum of zeroes in any quadratic polynomial equation is given by = \(\frac{-coeff.\;\;of\;\; x}{coeff.\;\;of\;\;x^{2}}\) = \(\frac{7}{6}\)</p>

<p>And Product of these zeroes will be = \(\frac{-1}{3}\times \frac{3}{2}=\frac{-1}{2}\) <br/>
Also, the Product of zeroes in any quadratic polynomial equation is given by = \(\frac{constant\;\; term}{coeff.\;\;of\;\;x^{2}}\)</p>

<p>=\(\frac{-3}{6}\) = \(\frac{-1}{2}\)</p>

<p><strong>Hence the relationship for sum of zeros and product of zeros are verified</strong>.</p>


<p>iv)4u<sup>2</sup> + 8u</p>
<p><strong>Solution:</strong></p>
<p>4u<sup>2</sup> + 8u = 4u (u+2)</p>
<p>4u=0  or u+2=0 </p>

<p>Hence, the zeroes of the above polynomial equation will be (0, −2)</p>

<p>∴ Sum of these zeroes will be = −2</p>
<p>But, the Sum of the zeroes in any quadratic polynomial equation is given by = \(\frac{-coeff.\;\;of\;\; u}{coeff.\;\;of\;\;u^{2}}\)</p>
<p> = \(\frac{−8}{4}\) = −2</p>
<p>And product of these zeroes will be = 0 × −2 = 0</p>
<p>But, the product of zeroes in any quadratic polynomial equation is given by = \(\frac{constant\;\; term}{coeff.\;\;of\;\;u^{2}}\) = \(\frac{-0}{4}\) = 0</p>

<p><strong>Hence the relationship for sum of zeros and product of zeros are verified</strong>.</p>



<p>v) t<sup>2</sup> – 15</p>
<p><strong>Solution:</strong></p>
<p>t<sup>2</sup> – 15 = (t+ \(\sqrt{15}\)) (t − \(\sqrt{15}\))</p>
<p>Therefore, zeroes of the given polynomial are:{\(\sqrt{15}\), −\(\sqrt{15}\)} </p>
<p>∴ sum of these zeroes will be = \(\sqrt{15}\) −  \(\sqrt{15}\) = 0</p>
<p>But, the Sum of zeroes in any quadratic polynomial equation is given by = \(\frac{-coeff.\;\;of\;\; x}{coeff.\;\;of\;\;x^{2}}\) = \(\frac{−0}{1}\) = 0   </p>
<p>And the product of these zeroes will be = (\(\sqrt{15}\)) × (−\(\sqrt{15})\)  = −15</p>
<p>But, the product of zeroes in any quadratic polynomial equation is given by
= \(\frac{constant\;\; term}{coeff.\;\;of\;\;t^{2}}\)                                                                    = \(\frac{−15}{1}\)  = −15</p>
<p><strong>Hence the relationship for sum of zeros and product of zeros are verified</strong></p>

<p><strong>vi) 3x<sup>2</sup> – x – 4</strong></p>
<p><strong>Solution:</strong></p>
<p>3x<sup>2</sup> − x − 4   = 3x<sup>2</sup> – 4x + 3x − 4</p>
<p>= x (3x – 4) +1(3x – 4)</p>
<p>= ( x + 1) (3x – 4)</p>
<p>∴ zeroes of the given polynomial are:{−1, \(\frac{4}{3}\) }</p>
<p>∴ sum of these zeroes will be = −1 +\(\frac{4}{3}\) = \(\frac{1}{3}\)</p>
<p>But, the Sum of zeroes in any quadratic polynomial equation is given by = \(\frac{-coeff.\;\;of\;\; x}{coeff.\;\;of\;\;x^{2}}\)</p>
<p>= \(\frac{−(−1)}{3}\) = \(\frac{1}{3}\)</p>
<p>And the Product of these zeroes will be = {−1 × \(\frac{4}{3}\) }= \(\frac{-4}{3}\)</p>
<p>But, the Product of zeroes in any quadratic polynomial equation is given by = \(\frac{constant\;\; term}{coeff.\;\;of\;\;x^{2}}\)= \(\frac{-4}{3}\)</p>
<p><strong>Hence the relationship for sum of zeros and product of zeros are verified</strong>.</p>


<p><strong>Q2. Form a quadratic polynomial each with the given numbers as the sum and product of its zeroes respectively.</strong></p>
<p><strong>(i). \(\frac{1}{4}\) , −1</strong></p>
<p><strong>Sol. </strong></p>
<p>Given</p>
<p>α + β = \(\frac{-3}{4}\)</p>
<p>αβ = \(\frac{-1}{4}\)</p>
<p>∴ If α and β are zeroes of any quadratic polynomial, then the quadratic polynomial equation can be written directly as:-</p>
<p>x<sup>2</sup> – (α+β)x +αβ = 0</p>
<p>Thus, the required quadratic equation will be:</p>
<p>x<sup>2</sup> – (\(\frac{3}{4}\))x − \(\frac{1}{4}\)= 0</p>
<p>4x<sup>2 </sup>− 3x – 1 = 0.</p>



<p>(ii). \(\sqrt{2}\) , \(\frac{1}{3}\)</p>
<p><strong>Sol. </strong></p>
<p>Given</p>


<p>α + β = \(\sqrt{2} + \frac{1}{3} = \frac{3\sqrt{2} + 1}{3}\)</p>
<p>αβ = \(\frac{\sqrt{2}}{3}\)</p>



<p>∴ If α and β are zeroes of any quadratic polynomial, then the quadratic polynomial equation can be written directly as: &#8211;</p>
<p><strong>x<sup>2</sup> – (α+β)x +αβ=0</strong></p>
<p>Thus, the required quadratic equation will be: &#8211;</p>
<p>x<sup>2</sup> – (\(\frac{3\sqrt{2} + 1}{3}\))x + (\(\frac{\sqrt{2}}{3}\)) =0</p>
<p><strong>3x<sup>2 </sup>− \((3\sqrt{2} + 1 \)x + \(\sqrt{2}\) = 0.</strong></p>


<p>iii) 0, \(\sqrt{7}\)</p>
<p>Solution:</p>
<p>Given,</p>
<p>α + β = \(\sqrt{7}\)</p>
<p>αβ = 0</p>

<p>∴ If α and β are zeroes of any quadratic polynomial, then the quadratic polynomial equation can be written directly as:-</p>
<p>x<sup>2</sup> – (α+β)x +αβ=0</p>
<p>Thus, the required quadratic equation will be: &#8211;</p>
<p>x<sup>2</sup> –  \((\sqrt{7}\))x + 0 = 0</p>
<p>x<sup>2</sup> –  \(\sqrt{7}\)x = 0 </p>


<p>iv)1,1</p>
<p><strong>Solution:</strong></p>
<p>Given:</p>
<p>α + β = 2</p>
<p>αβ = 2</p>
<p>∴ If α and β are zeroes of any quadratic polynomial, then the quadratic polynomial equation can be written directly as:</p>
<p><strong>x<sup>2</sup> – (α+β)x +αβ=0</strong></p>
<p>∴ The required quadratic polynomial will be:</p>
<p>x<sup>2</sup> – (2)x + 1 = 0</p>
<p>x<sup>2 </sup>- 2x + 1 = 0</p>

<p>v)\(\frac{-1}{4}\), \(\frac{-1}{4}\)</p>
<p><strong>Solution:</strong></p>
<p>Given,</p>
<p>α + β = \(\frac{−1}{4} + \frac{−1}{4} \) = \(\frac{−1}{2} \)  </p>
<p>αβ = \(\frac{−1}{4} \times \frac{−1}{4} \)  =   \(\frac{1}{16} \)          </p>
<p>∴ If α and β are zeroes of any quadratic polynomial, then the quadratic polynomial equation can be written directly as:</p>
<p>x<sup>2</sup> – (α+β)x +αβ = 0</p>
<p>∴ The required quadratic polynomial will be:</p>
<p>x<sup>2</sup> – (\(\frac{1}{2}\))x + \(\frac{1}{16}\) = 0</p>
<p>16x<sup>2 </sup>- 8x + 1 = 0.</p>


<p>vi)4, 1</p>
<p><strong>Solution:</p></strong></p>
<p>Given,</p>
<p>α + β = 4 + 1 = 5 </p>
<p>αβ = 4</p>
<p>∴ If α and β are zeroes of any quadratic polynomial, then the quadratic polynomial equation can be written directly as:-</p>
<p>x<sup>2</sup> – (α+β)x +αβ = 0</p>
<p>∴ The required quadratic polynomial will be:-</p>
<p>x<sup>2</sup> – 5x + 4 = 0</p>


<p><strong>Exercise 2.3</strong></p>
<p><strong>Question 1:</strong>
<p>Divide the polynomial p(x) by the polynomial g(x) and find the quotient and remainder in each of the following</p>
<p>i)p(x) = x<sup>3</sup> –3x<sup>2</sup> + 5x – 3</p>
<p>g(x) =  x<sup>2</sup>  – 2 </p>

<p><img class="alignnone size-full " src="/polynomial1.gif" alt="2"  /></p>


<p>As we can clearly see we cant divide more as the degree of remainder is less than degree of divisor</p>
<p>Hence quotient = x - 3 </p>
<p>Remainder = 7x - 9</p>



<p>ii)p(x) = x<sup>4</sup> –3x<sup>2</sup> + 4x + 5</p>
<p>g(x) =  x<sup>2</sup>  + 1 – x </p>

<p><img class="alignnone size-full " src="/polynomial2.gif" alt="2"  /></p>


<p>As we can clearly see we cant divide more as the degree of remainder which is zero is less than degree of divisor which is 2</p>
<p>Hence quotient = x<sup>2</sup> +x<sup>2</sup> - 3</p>
<p>Remainder = 8</p>


<p>iii)p(x) = x<sup>4</sup> –5x<sup>2</sup> + 6</p>
<p>g(x) =  2 – x<sup>2</sup></p>


<p><strong>Note:Now this is one of the question where students do mistakes and its very innocent kind</strong>br>
Do you know any reason why g(x) is written that particular way,why they have not wriiten g(x) =  – x<sup>2 + 2</sup></br>
That is because the questioner wants you to start dividing by i.e you write 3 in the quotient and subtract 3 - 3x from p(x).</br>
But this is wrong and to know why ,we highly recommend you to read this tutorial</strong></p>

<p><img class="alignnone size-full " src="/polynomial3.gif" alt="2"  /></p>


<p>As we can clearly see we cant divide more as the degree of remainder which is zero is less than degree of divisor which is 2</p>
<p>Hence quotient = -x<sup>2</sup>  - 2</p>
<p>Remainder = - 5x + 10</p>



<p><strong>Question 2:</strong>
<p>Check whether the first polynomial is a factor of second polynomial by dividing the second polynomial with the first polynomial</p>
<p>i)t<sup>2</sup> -3,2t<sup>4</sup> + 3t<sup>3</sup> -2t<sup>2</sup> - 9t -12.</p>
<p><strong>Solution:</strong>
<p><img class="alignnone size-full " src="/polynomial4.gif" alt="2"  /></p>
<p>Since the remainder is 0,t<sup>2</sup> -3 is a factor of 2t<sup>4</sup> + 3t<sup>3</sup> -2t<sup>2</sup> - 9t -12</p>




<p>ii)x<sup>2</sup> + 3x + 1,3x<sup>4</sup> + 5x<sup>3</sup> -7x<sup>2</sup> - 2x + 2</p>

<p><strong>Solution:</strong>
<p><img class="alignnone size-full " src="/polynomial5.gif" alt="2"  /></p>

<p>Since the remainder is 0,x<sup>2</sup> + 3x + 1 is a factor of 3x<sup>4</sup> + 5x<sup>3</sup> -7x<sup>2</sup> - 2x + 2</p>


<p>iii)x<sup>3</sup> -3x + 1,x<sup>5</sup> - 4x<sup>3</sup> + x<sup>2</sup> + 3x + 1</p>
<p><strong>Solution:</strong>
<p><img class="alignnone size-full " src="/polynomial6.gif" alt="2"  /></p>

<p>Since the remainder is 29x -9,x<sup>3</sup> -3x + 1 is not a factor of x<sup>5</sup> - 4x<sup>3</sup> + x<sup>2</sup> + 3x + 1</p>



<p><strong>Question 3:</strong>
<p>Obtain all the zeros  of 3x<sup>4</sup> + 6x<sup>3</sup>  -2x<sup>2</sup>  -10x -5 if two of its zeros are \(\frac{\sqrt{5}}{3}\)  \(\frac{-\sqrt{5}}{3}\)</p>

<p><strong>Solution:</strong>
<p>Two of its zeros are \(\frac{\sqrt{5}}{3}\)  \(\frac{-\sqrt{5}}{3}\) ,that means (x - \(\frac{\sqrt{5}}{3}\) )
and (x + \(\frac{\sqrt{5}}{3}\)) are its factors.So product of both will also be a factor ,i.e (x<sup>2</sup> - \(\frac{{5}}{3}\))  is a factor .Simplifying it,we get /(/frac{3x<sup>2</sup> - 5}{3}/) is a factor of 3x<sup>4</sup> + 6x<sup>3</sup>  -2x<sup>2</sup>,that means /(/frac{3x<sup>2</sup> - 5}{3}/) = 0,so /(/frac{3x<sup>2</sup> - 5}{3}/) is a factor.
</p>
<p>For getting other zeros we will have to divide and for self verify that you performed the division correctly the remainder should come zero,since its a factor:
<p><img class="alignnone size-full " src="/polynomial7.gif" alt="2"  /></p>
<p>Now using Dividend = \(quotient\times divisor + remainder \) </p>
<p>The other zeros are x<sup>2</sup> + 2x + 1 which is (x +1)<sup>2</sup></p>
<p>Hence other zero of the given polynomial is -1,you can verify by putting -1 in place of x and solve it</p>
<p>it should give zero,and it indeed adds to zero</p>


<p><strong>Question 4:</strong></p>
<p>On dividing x<sup>3</sup> -3x<sup>2</sup> + x + 2 by a polynomial g(x),the quotient and rremainder were x - 2 and -2x + 4
respectively,find g(x)</p>


<p>Using Divident = \(quotient\times Divisor\) + Remainder.</p>
<p>x<sup>3</sup> -3x<sup>2</sup> + x + 2 = \(x -2\times Divisor\) -2x + 4</p>
<p>x<sup>3</sup> -3x<sup>2</sup> + 3x  - 2 = \(x -2\times Divisor\) </p>
<p>so for finding g(x) we need to divide  x<sup>3</sup> -3x<sup>2</sup> + 3x  - 2  by x - 2 </p>

<p><img class="alignnone size-full " src="/polynomial8.gif" alt="2"  /></p>

<p>so g(x) = x<sup>2</sup> -x<sup>2</sup> + 1</p>

<p><strong>Question 5:</strong></p>
<p>Give examples of p(x),g(x),q(x) and r(x) which satisfies the division algorithm</p>
<p>i) deg p(x) = deg q(x) </p>
<p><strong>Solution:</strong>
<p>Using p(x) = \(g(x)\times q(x)\) + r(x) </p>
<p>



















@stop
































