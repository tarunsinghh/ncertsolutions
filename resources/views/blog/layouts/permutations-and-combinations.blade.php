@extends('blog.layouts.math')





@section('content')

<br/>
<br/>


<p><strong><em>1.How many 3-digit numbers can be formed from the digits 1, 2, 3, 4 and 5
assuming that
(i)repetition of the digits is allowed?
(ii)repetition of the digits is not allowed?
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Let the 3 digit number be  _ _  _</p>
<p>i)repetition of digit is allowed so every place can be filled in 5 ways = \( 5\times 5\times 5  = 125 \)</p>
<p>ii)repetition of digit is not allowed so one place can be filled in 5 ways,other in 4 and 3rd one in 3<br/>
so total no of ways = \( 5\times 4\times 3 = 60 \)</p>



<p><strong><em>2.How many 3-digit even numbers can be formed from the digits 1, 2, 3, 4, 5, 6 if the digits can be repeated?
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>For even number the units place can be filled in 3 ways,tens and hundreds place each can be filled in 6 ways<br/>
So total no of ways = \( 6\times 6\times 3 = 36\times 3 = 108 \)</p>


<p><strong><em>3.How many 4-letter code can be formed using the first 10 letters of the English
alphabet, if no letter can be repeated?
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Since the letter cannot be repeated,total number of ways = \( 10\times 9\times 8\times 7 = 10\times 504 = 5040          \)
<br>
</p>



<p><strong><em>4.How many 5-digit telephone numbers can be constructed using the digits 0 to 9 if
each number starts with 67 and no digit appears more than once?
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Each number starts with 67,so we have only 3 places to consider,0 to 9 are 10 digits and 2 digits already<br/>
have been used,so total number of ways = \(  8\times 7\times 6 = 336 \)
</p>


<p><strong><em>5.A coin is tossed 3 times and the outcomes are recorded. How many possible
outcomes are there?
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>A coin has 2 outcomes HT,so when 3 coins are tossed,total number of ways = \( 2\times 2\times 2 = 8 \)
</p>

<p><strong><em>6.Given 5 flags of different colours, how many different signals can be generated if
each signal requires the use of 2 flags, one below the other?
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Let F1 AND F2 be two parts of flag ,then for F1 we have 5 choices and then since every signal use two flags for F2 we will have 4 choices</p>
<p>Total no of ways = \(   5\times 4 = 20   \)</p>



















@stop