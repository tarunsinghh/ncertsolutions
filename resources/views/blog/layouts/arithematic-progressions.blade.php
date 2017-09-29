@extends('blog.layouts.math')





@section('content')

<br/>
<br/>
<p><strong>EXERCISE – 5.1</strong></p>
<p><strong><em>Question 1:In which of the following situations, does the list of numbers involved make an arithmetic progression and why ?</em></strong></p>


<p><strong><em>i)The taxi fare after each km when the fare is Rs 15 for the first km and rs 8 for each additional km</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Lets write down the fare for the first 5 km</p>
<p>1 km = 15</p>
<p>2 km = 15 + 8</p>
<p>3 km = 15 + 8 + 8</p>
<p>4 km = 15 + 8 + 8 + 8</p>
<p>5 km = 15 + 8 + 8 + 8 + 8</p>

<p>Since for any extra km the fare is calculated by adding 8Rs of the fare upto now,the given problem forms an A.P,</p>



<p><strong><em>(ii) The amount of air present in a cylinder when a vaccum pump removes \(\frac{1}{4}\) of air remaining in the cylinder at a time.</em></strong></p>

<p><strong>Ans.-</strong> Let us assume, \(x_{1}\)= p units</p>
<p>\(∴ x_{2}= p-\frac{1}{4}p=\:\frac{3}{4}p\:units\)</p>
<p>\(∴ x_{3}= \frac{3}{4}p-\frac{1}{4}\times \frac{3}{4}p=\:\frac{3}{4}p-\frac{3}{16}p=\frac{9}{16}p\:units\)</p>
<p>Similarly, \(∴ x_{4}= \frac{9}{16}p-\frac{1}{4}\times \frac{9}{16}p=\:\frac{9}{16}p-\frac{9}{64}p=\frac{25}{64}p\:units\)</p>
<p>So, the list of numbers is p, \(\frac{3}{4}p, \frac{9}{16}p, \frac{25}{64}p, …\)</p>
<p>Now here, \(x_{2}-x_{1}\neq \:x_{3}-x_{2}\)</p>
<p>So the given problem doesnt form an A.P</p>


<p><strong><em>(iii) The cost of digging a well after every metre of digging, when it costs Rs.150 for the first metre and rises by Rs. 50 for each subsequent metre.</em></strong></p>
<p>This is similar to question 1,lets write down first few terms</p>
<p>Lets write down the cost for every metre of digging</p>
<p>1 m = 150</p>
<p>2 m = 150 + 50</p>
<p>3 m = 150 + 50 + 50</p>
<p>4 m = 150 + 50 + 50 + 50</p>
<p>5 m = 150 + 50 + 50 + 50 + 50</p>
<p>Since for any extra m the cost is calculated by adding 50Rs of the cost of digging  upto now,the given problem forms an A.P.</p>


<p><strong><em>(iv)The amount of money in the account every year when 10000 is deposited at 8%per annum</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Lets write down the amount for first few years</p>
<p>\(1 year = 10000 + (0.08)\times 10000 = 10000 + 800 = 10800\)</p>
<p>\(2 year = 10800 + (0.08)\times 10800 = 10800 + 864 = 11664\)</p>
<p>\(3 year = 11664 + (0.08)\times 11664 = 11664 + 933.12\)</p>
<p>Clearly its not an A.P</p>


<p><strong><em>Write first four terms of the A.P. when the first term a and common difference d as follows</em></strong></p>
<p><strong>i)a = 10,d = 10</strong></p>
<p><strong>Ans.-</strong> In this case we have, a= 10, d= 10</p>
<p>\(∴ First\: term (a_{1})=a=10\)</p>
<p>&nbsp;</p>
<p>\(Second \:term (a_{2})=a_{1}+d=10+10=20\)</p>
<p>&nbsp;</p>
<p>\(Similarly, \:Third \:term (a_{3})=a_{2}+d=20+10=30\)</p>
<p>&nbsp;</p>
<p>\(Now, \:Fourth \:term (a_{4})=a_{3}+d=30+10=40\)</p>
<p>Hence, the required four terms are 10, 20, 30, 40.</p>
<p>&nbsp;</p>



<p><strong>ii)a = -2,d = 0</strong></p>
<p><strong>Ans.-</strong> In this case we have, a= 10, d= 10</p>
<p>\(∴ First\: term (a_{1})=a= - 2\)</p>
<p>&nbsp;</p>
<p>\(Second \:term (a_{2})=a_{1}+d= - 2 + 0= -2\)</p>
<p>&nbsp;</p>
<p>\(Similarly, \:Third \:term (a_{3})=a_{2}+d=  -2+0= -2\)</p>
<p>&nbsp;</p>
<p>\(Now, \:Fourth \:term (a_{4})=a_{3}+d= -2 + 0= -2\)</p>
<p>Hence, the required four terms are -2, -2, -2, -2.</p>
<p>&nbsp;</p>



<p><strong>iii)a = 4,d = -3</strong></p>
<p><strong>Ans.-</strong> In this case we have, a= 4, d= -3</p>
<p>\(∴ First\: term (a_{1})=a= 4\)</p>
<p>&nbsp;</p>
<p>\(Second \:term (a_{2})=a_{1}+d= 4 + (-3) = 1\)</p>
<p>&nbsp;</p>
<p>\(Similarly, \:Third \:term (a_{3})=a_{2}+d=1+(-3)= - 2\)</p>
<p>&nbsp;</p>
<p>\(Now, \:Fourth \:term (a_{4})=a_{3}+d= -2 + (-3)= -5\)</p>
<p>Hence, the required four terms are 4, 1, -2, -5</p>
<p>&nbsp;</p>


<p><strong>iv)\(a = -1,d = \frac{1}{2}\)</strong></p>
<p><strong>Ans.-</strong> In this case we have, a= -1,\( d = \frac{1}{2}\)</p>
<p>\(∴ First\: term (a_{1})= a = -1\)</p>
<p>&nbsp;</p>
<p>\(Second \:term (a_{2})=a_{1}+d=-1 + \frac{1}{2}= \frac{-1}{2}\)</p>
<p>&nbsp;</p>
<p>\(Similarly, \:Third \:term (a_{3})=a_{2}+d= \frac{-1}{2} + \frac{1}{2}=0\)</p>
<p>&nbsp;</p>
<p>\(Now, \:Fourth \:term (a_{4})=a_{3}+d= 0 + \frac{1}{2} = \frac{1}{2}\)</p>
<p>Hence, the required four terms are \(-1, \frac{-1}{2}, 0, \frac{1}{2}\)</p>
<p>&nbsp;</p>


<p><strong>v)a = 1.25,d = -.25</strong></p>
<p><strong>Ans.-</strong> In this case we have, a= 1.25, d= -.25</p>
<p>\(∴ First\: term (a_{1})=a=1.25\)</p>
<p>&nbsp;</p>
<p>\(Second \:term (a_{2})=a_{1}+d=1.25+ (-.25)=1\)</p>
<p>&nbsp;</p>
<p>\(Similarly, \:Third \:term (a_{3})=a_{2}+d=1+(-.25)=.75\)</p>
<p>&nbsp;</p>
<p>\(Now, \:Fourth \:term (a_{4})=a_{3}+d=.75+(-.25)=.50\)</p>
<p>Hence, the required four terms are 1.25, 1, .75, .50</p>
<p>&nbsp;</p>

<p><strong><em>For the following A.P., write the first term and the common difference of the following 3, 1, -1, -3, …</em></strong></p>
<p><strong>i)3,1,-1,-3</strong></p>
<p><strong>Solution:</strong></p>
<p>a = 3,Since the sequence is an A.P it is given in the question we can take difference between any two consecutive terms</p>
<p>d = 1 - 3 = -2</p>

<p><strong><em></em>ii)-5,-1,3,7</strong></p>
<p><strong>Solution:</strong></p>
<p><strong>a = -5</strong></p>
<p>d = -1 - (-5) = -1 + 5 = 4 </p>


<p><strong><em></em>iii)\( \frac{1}{3},\frac{5}{3},\frac{9}{3},\frac{13}{3} \)</strong></p>
<p><strong>Solution:</strong></p>
<p><strong>\(a = \frac{1}{3}\)</strong></p>
<p>\(d = \frac{5}{3} - \frac{1}{3} = \frac{4}{3}\) </p>

<p><strong><em></em>iv).6,1.7,2.8,3.9</strong></p>
<p><strong>Solution:</strong></p>
<p><strong>a = 0.6</strong></p>
<p>d = 1.7 - 0.6 = 1.1 </p>


<p><strong>Question 5:Which of the following are APs?If they form an A.P find the common difference and write three more terms</strong></p>

<p><strong>i)2,4,8,16</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\(a_{2} - a_{1} = d1 = 4 -2 = 2\)</p>
<p>\(a_{3} - a_{2} = d2 = 8 -4 = 4\)</p>
<p>\(a_{4} - a_{3} = d3 = 16 -8 = 8\)</p>
<p>Since \(d1 \ne d2 \ne  d3\)</p>
<p>The given terms doesnt form an A.P</p>





<p><strong>ii)\(2,\frac{5}{2},3,\frac{7}{2} \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference between consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 = \frac{5}{2} -2  = \frac{1}{2} \)</p>
<p>\( a_{3} - a_{2} = d2 = 3 - \frac{5}{2} = \frac{1}{2} \)</p>
<p>\( a_{4} - a_{3} = d3 = \frac{7}{2} -3  = \frac{1}{2} \)</p>
<p>Since \(d1 = d2 = d3\)</p>
<p>The given terms form an A.P</p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d =  \frac{7}{2} + \frac{1}{2} = 4 \)</p>
<p>\(a_{6} = a_{5} + d =  4 + \frac{1}{2} = \frac{9}{2}\)</p>
<p>\(a_{7} = a_{6} + d =  \frac{9}{2} + \frac{1}{2} = 5\)</p>



<p><strong>iii)\(-1.2,-3.2,-5.2,-7.2 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =  -3.2 -(-1.2)  = -2\)</p>
<p>\( a_{3} - a_{2} = d2 =   -5.2 -(-3.2) = -2\)</p>
<p>\( a_{4} - a_{3} = d3 =   -7.2 -(-5.2) = -2\)</p>
<p>Since \(d1 = d2 = d3\)</p>
<p>The given terms form an A.P</p>
<p>The given terms form an A.P</p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d  = -7.2 - 2 = -9.2 \)</p>
<p>\(a_{6} = a_{5} + d  = -9.2 - 2 = -11.2 \)</p>
<p>\(a_{7} = a_{6} + d  = -11.2 -2 = -13.2\)</p>





<p><strong>iv)\(-10,-6,-2,2 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   -6 -(-10)  = 4\)</p>
<p>\( a_{3} - a_{2} = d2 =   -2 -(-6)   = 4\)</p>
<p>\( a_{4} - a_{3} = d3 =    2 -(-2)   = 4\)</p>
<p>Since \(d1 = d2 = d3\)</p>
<p>The given terms form an A.P</p>
<p>The given terms form an A.P</p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d =  2 + 4 = 6 \)</p>
<p>\(a_{6} = a_{5} + d =  6 + 4 = 10 \)</p>
<p>\(a_{7} = a_{6} + d =  10 + 4 = 14 \)</p>





<p><strong>v)\(3,3 + \sqrt{2},3 + 2\sqrt{2},3 + 3\sqrt{2} \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference between consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   3 + \sqrt{2} -(3)  =  \sqrt{2}    \)</p>
<p>\( a_{3} - a_{2} = d2 = 3 + 2\sqrt{2} -(3 + \sqrt{2})  =  \sqrt{2} \)</p>
<p>\( a_{4} - a_{3} = d3 =   3 + 3\sqrt{2} -(3 +  2\sqrt{2})  =  \sqrt{2}\)</p>
<p>Since \(d1 = d2 = d3\)</p>
<p>The given terms form an A.P</p>
<p>The given terms form an A.P</p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d =  3 + 3\sqrt{2} + \sqrt{2} = 3 + 3\sqrt{2} \)</p>
<p>\(a_{6} = a_{5} + d =  3 + 3\sqrt{2} + \sqrt{2} = 3 + 4\sqrt{2} \)</p>
<p>\(a_{7} = a_{6} + d =  3 + 4\sqrt{2} + \sqrt{2} = 3 + 5\sqrt{2} \)</p>





<p><strong>vi)\( .2,.22,.222,.2222 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   .22 -(.2)  = 0.02\)</p>
<p>\( a_{3} - a_{2} = d2 =   .222 -(.22) = 0.002\)</p>
<p>The given terms doesnt form an A.P</p>




<p><strong>vii)\(0,-4,-8,-12 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   -4 -(0)  = -4\)</p>
<p>\( a_{3} - a_{2} = d2 =   -8 -(-4)   = -4\)</p>
<p>\( a_{4} - a_{3} = d3 =    -12 -(-8)   = -4\)</p>
<p>Since \(d1 = d2 = d3\)</p>
<p>The given terms form an A.P</p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d =  -12 - 4 =  -16 \)</p>
<p>\(a_{6} = a_{5} + d =  -16 - 4 =  -20 \)</p>
<p>\(a_{7} = a_{6} + d =  -20 - 4 =  -24 \)</p>




<p><strong>viii)\(\frac{-1}{2},frac{-1}{2},frac{-1}{2},frac{-1}{2} \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 = \frac{-1}{2}  - 0  = \frac{-1}{2}  \)</p>
<p>\( a_{3} - a_{2} = d2 =  \frac{-1}{2} - 0 = \frac{-1}{2}   \)</p>
<p>\( a_{4} - a_{3} = d3 = \frac{-1}{2}  - 0  = \frac{-1}{2}  \)</p>
<p>Since \(d1 = d2 = d3\)</p>
<p>The given terms form an A.P</p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d =  \frac{-1}{2} + 0 = \frac{-1}{2} \)</p>
<p>\(a_{6} = a_{5} + d =  \frac{-1}{2} + 0 = \frac{-1}{2} \)</p>
<p>\(a_{7} = a_{6} + d =  \frac{-1}{2} + 0 = \frac{-1}{2} \)</p>



<p><strong>ix)\(1,3,9,27 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   3 -(1)  = 2\)</p>
<p>\( a_{3} - a_{2} = d2 =   9 -(3)   = 6\)</p>
<p>\( a_{4} - a_{3} = d3 =   27-(9)   = 18\)</p>
<p>Since \(d1 \ne d2 \ne d3\)</p>
<p>The given terms dont form an A.P</p>




<p><strong>x)\(a,2a,3a,4a \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   2a - a    = a \)</p>
<p>\( a_{3} - a_{2} = d2 =   3a - 2a   = a\)</p>
<p>\( a_{4} - a_{3} = d3 =   4a - 3a   = a\)</p>
<p>Since \(d1 = d2 = d3\)</p>
<p>The given terms form an A.P</p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d =  4a + a = 5a \)</p>
<p>\(a_{6} = a_{5} + d =  5a + a = 6a \)</p>
<p>\(a_{7} = a_{6} + d =  6a + a = 7a \)</p>


<p><strong>xi)\(a,a^{2},a^{3},a^{4} \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   a^{2} -(a)       = a(a - 1) \)</p>
<p>\( a_{3} - a_{2} = d2 =   a^{3} -(a^{2})   = a^{2}(a - 1)        \)</p>
<p>\( a_{4} - a_{3} = d3 =   a^{4} -(a^{3})   = a^{3}(a - 1)           \)</p>
<p>Since \(d1 \ne d2 \ne d3\)</p>
<p>The given terms dont  form an A.P</p>






<p><strong>xii)\( \sqrt{2}, \sqrt{8}, \sqrt{18}, \sqrt{32} \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference between consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =    \sqrt{8} -  \sqrt{2}       = \sqrt{2} \)</p>
<p>\( a_{3} - a_{2} = d2 =     \sqrt{18} -  \sqrt{8}     = \sqrt{2}        \)</p>
<p>\( a_{4} - a_{3} = d3 =    \sqrt{32} -  \sqrt{18}     = \sqrt{2}             \)</p>
<p>Since \(d1  =  d2  = d3\) </p>
<p>The given terms form an A.P </p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d =  \sqrt{32} + \sqrt{2} = 5\sqrt{2} \)</p>
<p>\(a_{6} = a_{5} + d =  5\sqrt{2} + \sqrt{2} = 6\sqrt{2} \)</p>
<p>\(a_{7} = a_{6} + d =  6\sqrt{2} + \sqrt{2} = 7\sqrt{2} \)</p>








<p><strong>xiii)\( \sqrt{3}, \sqrt{6}, \sqrt{9}, \sqrt{12} \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference between consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =    \sqrt{6} -  \sqrt{3}       = \sqrt{2} \)</p>
<p>\( a_{3} - a_{2} = d2 =     \sqrt{9} -  \sqrt{6}     = 3 - \sqrt{6}        \)</p>
<p>Since \(d1  \ne d2 \) </p>
<p>The given terms dont form an A.P </p>



<p><strong>xiv)\(1,3^{2},5^{2},7^{2} \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   3{2} -(1)       = 8 \)</p>
<p>\( a_{3} - a_{2} = d2 =   5^{2} -(3^{2})   = 16       \)</p>
<p>\( a_{4} - a_{3} = d3 =   7^{2} -(5^{2})   = 24           \)</p>
<p>Since \(d1 \ne d2 \ne d3\)</p>
<p>The given terms dont  form an A.P</p>

<p><strong>xiv)\(1,5^{2},7^{2},73 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>If the given terms form an A.P then the difference bwtween consective terms should remain same</p>
<p>\( a_{2} - a_{1} = d1 =   5{2} -(1)       = 24 \)</p>
<p>\( a_{3} - a_{2} = d2 =   7^{2} -(5^{2})   = 24       \)</p>
<p>\( a_{4} - a_{3} = d3 =   73 -(49)   = 24           \)</p>
<p>Since \(d1 = d2 = d3\)</p>
<p>The given terms  form an A.P</p>
<p>Three more terms will be </p>
<p>\(a_{5} = a_{4} + d =  73 + 24 = 97 \)</p>
<p>\(a_{6} = a_{5} + d =  97 + 24 = 121 \)</p>
<p>\(a_{7} = a_{6} + d =  121 + 24 = 145 \)</p>


<p><strong>Exercise 5.2:Fill in the blanks in the following table given that a is the first term,d is the common difference and \(a_{n}\) the nth term of the A.P</strong></p>
<p><strong>Solution:</strong></p>
<p><strong>i)a = 7,d = 3 ,n = 8 ,\(a_{n} = ?\)</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a_{n} = a + (n - 1)d = 7 + 7\times 3 = 7 + 21 = 28\)</p> 


<p><strong>ii)a = -18,d = ? ,n = 10 ,\(a_{n} =  0 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a_{n} = a + (n - 1)d \)</p> 
<p>\(0= -18 + 9d = 0,d = 2 \)</p>



<p><strong>iii)a = ?,d = -3 ,n = 18 ,\(a_{n} =  -5 ?\)</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a_{n} = a + (n - 1)d \)</p>
<p>\(-5 = a + (18 - 1)-3 \)</p>
<p>\(-5 = a - 51 \)</p>
<p>\(a = 46 \)</p>


<p><strong>iv)a = -18.9,d = 2.5 ,n = ? ,\(a_{n} =  3.6 ?\)</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a_{n} = a + (n - 1)d \)</p>
<p>\(3.6 = -18.9 + (n - 1)2.5 \)</p>
<p>\(22.5 + 2.5 = 2.5n  \)</p>
<p>\(n = 10 \)</p>




<p><strong>v)a = 3.5,d = 0 ,n = 105 ,\(a_{n} = ?\)</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a_{n} = a + (n - 1)d = 3.5 + 104\times 0 = 3.5 \)</p>














<p><strong>v)a = 3.5,d = 0 ,n = 105 ,\(a_{n} = ?\)</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a_{n} = a + (n - 1)d = 3.5 + 104\times 0 = 3.5 \)</p>




<p><strong><em>Question 2:Choose the correct choice in the following and justify</em></strong></p>
<p><strong>i)30th term of the A.P: 10,7,4 is </strong></p>
<p><strong>Solution:</strong></p>
<p>For the given A.P,a = 10,d = -3</p>
<p>So the 30th term of the A.P = \( a + (30 -1)d =  10 + 29\times -3 = 10 - 87 = -77 \)</p> 

 

<p><strong>ii)11th term of the A.P: \(-3,\frac{-1}{2},2\) is </strong></p>
<p><strong>Solution:</strong></p>
<p>For the given A.P,a = -3,d =\( \frac{5}{2}\) </p>
<p>So the 11th term of the A.P = \( a + (11 -1)d =  -3 + 10\times \frac{5}{2} = 22 \)</p> 



<p><strong><em>Question 2:In the following A.Ps,find the missing term in the boxes</em></strong></p>
<p><strong>i)2,?,26</strong></p>
<p><strong>Solution:</strong></p>
<p>Let the unknown term be x,then since its an A.P</p>
<p>x - 2 = 26 - x</p>
<p>x = 12 </p>


<p><strong>ii)?,13,?,3</strong></p>
<p>We are given the second and fourth term of A.Pd,let the first term be a and common difference be d</p>
<p>a + d = 13</p>
<p>a + 3d = 3</p>
<p>2d = -10</p>
<p>d = -5</p>
<p>a = 18</p>
<p>Third term = a +2d = 18 -10 = 8 </p>


<p><strong>iii)\( 5,?,?,\frac{19}{2} \)</strong></p>
<p><strong>Solution:</strong></p>
<p>Fourth term is given:</p>
<p>\( a + 3d  = \frac{19}{2} \)</p>
<p>\( 5 + 3d  = \frac{19}{2} \)</p>
<p>\(  3d  = \frac{19}{2} - 5 \)</p>
<p>\(  3d  = \frac{9}{2} \)</p>
<p>\(  d  = \frac{3}{2} \)</p>
<p>Missing term are 2 and 3 term </p>
<p>\(Second term = a + d = 5 + \frac{3}{2} = \frac{13}{2} \) </p>
<p>\(Third term = second term + d = \frac{13}{2} + \frac{3}{2} = 8\) </p>



<p><strong>iv)\( -4,?,?,?,?,6 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>First term is given and 6th term is given:</p>
<p>\( a   =  -4 \)</p>
<p>\( -4 + 5d  = 6 \)</p>
<p>\( d  = 2 \)</p>
<p>Missing terms are -4+2,-4+2+2,-4+2+2+2,-4+2+2+2+2 </p>
<p>Missing terms are -2,0,2,4</p>


<p><strong>v)\( ?,38,?,?,?,-22 \)</strong></p>
<p><strong>Solution:</strong></p>
<p>Second  term is given and 6th term is given:</p>
<p>a + d = 38</p>
<p>a + 5d = -22</p>
<p>4d = - 60</p>
<p>d = -15</p>
<p>Missing terms are </p>
<p>First term = a = 53</p>
<p>third term = a +  2d </p>
<p>a +  2d = 33 </p>
<p>Fourth term = a +  3d </p>
<p>a +  3d = 53 - 45 = 8 </p>
<p>Fifth term = a +  4d </p>
<p>a +  4d = 53 - 60 =  -7 </p>


<p><strong><em>Question 4:Which term of the AP is 3,8,13,18 is 78</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Fir the given A.P is a = 3,d = 5</p>
<p>Using the formula for nth term of the A.P</p>
<p>\( a_{n} =  a + (n -1)d \)</p>
<p>\( 78    =  3 + (n -1)5 \)</p>
<p>\( 3 + (n -1)5 = 78  \)</p>
<p>\( 3 + 5n - 5  = 78  \)</p>
<p>\(  5n - 2  = 78  \)</p>
<p>\(  5n   = 80 \)</p>
<p>\(  n   = 16 \)</p>




<p><strong><em>Question 4:Find the number of terms in each of the following A.Ps</em></strong></p>
<p><strong>i)7,13,19 ..... 205</strong></p>
<p><strong>Solution:</strong></p>
<p>\( a = 7 , d = 6 ,a_{n} =  205 \)</p>
<p>\( a_{n} = a + nd -d \)</p>
<p>\(  7 + 6n - 6 = 205 \)</p>
<p>\(  6n  = 204 \)</p>
<p>\(  n  = 34 \)</p>




<p><strong>ii)\( 18,15, \frac{1}{2},13 ..... -47\)</strong></p>
<p><strong>Solution:</strong></p>
<p>\( a = 18 , d = \frac{31}{2} - 18 = \frac{-5}{2},a_{n} =  -47 \)</p>
<p>\( a_{n} = a + nd -d \)</p>
<p>\(  18 + \frac{-5}{2}n - (\frac{-5}{2}) = -47 \)</p>
S<p>\(   \frac{5}{2}n - (\frac{5}{2}) = 47 + 18 \)</p>
<p>\(   \frac{5}{2}n = (\frac{5}{2}) + 65 \)</p>
<p>\(   \frac{5}{2}n = (\frac{135}{2})  \)</p>
<p>\(   n = 27  \)</p>


<p><strong>Question-6 Check whether -150 is the term in the following A.P: 11, 8, 5, 2 ………</strong></p>
<p><strong>Sol.</strong></p>
<p>From the given A.P:</p>
<p>\(a = 11\)</p>
<p>\(d = 8 – 11 = -3\)</p>
<p>\(a_{n} = -150\)</p>
<p>Since,                                      \( a_{n}= a + (n – 1)d\)</p>
<p>Therefore                          \(  -150 = 11 + (n – 1)×-3\)</p>
<p>(or)                                      \( 3n = 150 + 11 + 3\)</p>
<p>(or)                                      \(     n = \frac{164}{3}\)</p>
<p>Since n is not a +ve integer</p>
<p><strong>Therefore </strong><strong>-150 is not a  term of this given A.P</strong></p>
<p><strong> </strong></p>




<p><strong>Question 7:Find the 31st term of an A.P whose 11th term is 38 and 16th term is 73</strong></p>
<p><strong>Solution:</strong></p>
<p>According to the question:</p>
<p>\(a + 10d = 38\)</p>
<p>\(a + 15d = 73\)</p>
<p>\(5d = 35\)</p>
<p>\(d = 7\)</p>
<p>\(a + 70 = 38\)</p>
<p>\(a = -32\)</p>
<p>31st term = a + 30d = -32 + 30×7 = -32 + 210 = -178</p>

<p><strong>Question 8:An A.P consists of 50 terms of which 3rd term is 12 and last term is 106.Find the 29th term.</strong></p>
<p><strong>Solution:</strong></p>
<p>According to the question:</p>
<p>\(a + 2d  = 12\)</p>
<p>\(a + 49d = 106\)</p>
<p>\(47d = 94\)</p>
<p>\(d = 2\)</p>
<p>\(a + 4 = 12\)</p>
<p>\(a     =  8\)</p>
<p>so 30th term will be a + 29d = 8 + 29×2 = 66</p>


<p><strong>Question 9:If the 3rd and the 9th term of an A.P are 4 and -8,which term of this A.P  is zero?</strong></p>
<p><strong>Solution:</strong></p>
<p>According to the question:</p>
<p>\(a + 2d =  4\)</p>
<p>\(a + 8d = -8\)</p>
<p>\(6d =  -12\)</p>
<p>\(d = -2\)</p>
<p>\(a = 8\)</p>
<p>Let nth term  of this A.P is zero</p>
<p>\(a +nd -d = 0\)</p>
<p>\(8 -2n +2 = 0\)</p>
<p>\(n = 5\)</p>
<p>so 5th term of the A.P is zero</p>


<p><strong>Question 10:The 17th term of an A.P exceeds its 10th term by 7,find the common difference?</strong></p>
<p><strong>Solution:</strong></p>
<p>According to the question:</p>
<p>\(a +  16d - a - 9d = 7\)</p>
<p>\(7d = 7\)</p>
<p>\(d = 1\)</p>

<p><strong>Question 11:Which term of the A.P 3,15,27,39 will be 132 more than its 54th term?</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a = 3,d = 15 -3 = 12\)</p>
<p>According to the question</p>
<p>\(a + nd -d = a + 53d + 132\)</p>
<p>\(12n  = 132 + 636  + 12\)</p>
<p>\(12n = 780\)</p>
<p>\(n = 65\)</p>


<p><strong>Question 12:Two A.Ps have the same common difference.The difference between their 100th terms is 100,what is the difference between their 1000 term?</strong></p>
<p><strong>Solution:</strong></p>
<p>According to the question:</p>
<p>\(a_{1} + 99d - a_{2}  - 99d = 100\) </p>
<p>\(a_{1}  - a_{2}   = 100 \)</p>

<p>\(a_{1} + 999d - a_{2}  - 999d\) </p>
<p>\(a_{1} - a_{2} = 100\)</p>
<p>so the difference between their 1000 term is also same i.e 100</p>


<p><strong>Question 13:How many three digit numbers are divisible by 7?</strong></p>
<p><strong>Solution:</strong></p> 
<p><strong>This is a good question and variation of it might come in exams</strong></p>
<p>The first 3 digit number divisible  by 7 is 105</p>
<p>The last 3 digit number divisible  by 7 is  994</p>
<p>Now if we write the sequence of 3 digit numbers divisible by 7,it will form an A.P with d = 7</p>
<p>\(994 = 105 + 7n -7\)</p>
<p>\(7n = 994 - 98\)</p>
<p>\(7n = 896\)</p>
<p>\(n = 128\)</p>
<p>so there are 128 3 digit numbers divisible by 7</p>



<p><strong>Question 14:How many mutiples of 4 lie between 10 and 250?</strong></p>
<p><strong>Solution:</strong></p> 
<p>This is similar to previous question</p>
<p>\(12 + 4n - 4 = 248\)</p>
<p>\(4n  = 240\)</p>
<p>\(n  =  60\)</p>

<p><strong>Question 15:For what value of n,are the nth terms of two A.Ps 63,65,67 and 3,10,17 equal?</strong></p>
<p><strong>Solution:</strong></p> 
<p>\( a_{1} =  63,a_{2} = 3,d_{1} = 65 -63 = 2,d_{2} = 10 - 3 = 7 \)</p>
<p>\( 63 + 2n - 2 = 3 + 7n - 7\)</p>
<p>\(63  - 2 - 3 + 7 =  5n\)</p>
<p>\(5n =  65\)</p>
<p>\(n = 13\)</p> 


<p><strong>Question 16:Determine the A.P whose 3rd term is 16 and 7th term exceeds the 5th term by 12?</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a + 2d = 16\)</p>
<p>\(a + 6d - (a + 4d) = 12\)</p>
<p>\(d = 6\)</p>
<p>\(a = 4\)</p>




<p><strong>Exercise 5.3</strong></p>
<p><strong>Q1. Find the sum of the following given AP’s:</strong></p>
<p><strong>(i) 2, 7, 12,  . . . . . . .  up to 10 terms</strong>.</p>
<p><strong>Sol. </strong></p>
<p>Here a = 2, d = (7 &#8211; 2) = 5 and n = 10</p>
<p>Since, the sum of first 12 terms is given by:  <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,                                            S<sub>n</sub> = \(\frac{10}{2}\) [2×2+(10-1)×5]</p>
<p>= 4×(4 + 45) = 98</p>
<p><strong>Therefore, the sum of first 10 terms is 98. </strong></p>
<p><strong>(ii) –37, –33, –29. . . . . . . . up to 12 terms.</strong></p>
<p><strong>Sol.</strong></p>
<p>Here a = -37, d = [-33 – (-37)] = 4 and n = 12</p>
<p>Since, the sum of first n terms is given by:  <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,                                                          S<sub>n</sub> = \(\frac{12}{2}\) [2×(-37) + (12-1)× 4]</p>
<p>= 6×(-74 + 44) = -180</p>
<p><strong>Therefore, the sum of first 12 terms is -180</strong></p>
<p><strong>(iii) 0.6, 1.7, 2.8. . . . . . . up to 100 terms.</strong></p>
<p><strong>Sol.</strong></p>
<p>Here a = 0.6, d = (1.7 – 0.6) = 1.1 and n = 100</p>
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,        S<sub>n</sub> = \(\frac{100}{2}\) [2×0.6+(100 – 1)×1.1]</p>
<p>= 100×(1.2 + 108.9) = 11010</p>
<p><strong>Therefore, the sum of first 100 terms is 11010</strong></p>
<p><strong> </strong></p>


<p><strong>Q.2 Find the sums given below: </strong></p>
<p><strong>i)\( 7+10\frac{1}{2}+14.........84                    \)</strong></p>
<p><strong>Solution:</strong></p>

<p>Given, a = 7, l = 84 (last term) ,d = \(\frac{21}{2} - 7 = \frac{7}{2}\)</p>
<p>l = a + nd - d</p>
<p>\(7 + \frac{7}{2}n  - \frac{7}{2} = 84\)</p>
<p>\(\frac{7}{2}n = 84 +  \frac{7}{2} - 7 \)</p>
<p>\(\frac{7}{2}n = 84 -  \frac{7}{2}  \)</p>
<p>\(\frac{7}{2}n = \frac{161}{2}  \)</p>
<p>\(n = 23\)</p>
<p>Since, the sum of first n terms is given by: <strong>S_{n} = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,        S_{n} = \(\frac{23}{2}\) [2×7+(23 – 1)×\frac{7}{2}]</p>
<p>\( \frac{23}{2}×(14 + 77) = 1046\frac{1}{2} \)</p>
<p><strong>Therefore, the sum of given series is 1046\frac{1}{2}</strong></p>


<p><strong>ii)\( 34+32+30.........10                    \)</strong></p>
<p><strong>Solution:</strong></p>

<p>Given, a = 34, l = 10 (last term) ,d = 32 - 34 = -2</p>
<p>l = a + nd - d</p>
<p>34 -2n  - (-2) = 10</p>
<p>2n = 26 </p>
<p>n = 13  </p>
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,        S<sub>n</sub> = \(\frac{13}{2}\) [2×34+(13 – 1)×-2]</p>
<p>\( \frac{13}{2}×(68 - 24) = 286 \)</p>
<p><strong>Therefore, the sum of given series is 286</strong></p>




<p><strong>iii)\( (-5)+(-8)+(-11)+ ....(-230) \)</strong></p>
<p><strong>Solution:</strong></p>

<p>Given, a = -5, l = -230 (last term) ,d = -8 - (-5) = -3</p>
<p>l = a + nd - d</p>
<p>-5 -3n  - (-3) = -230</p>
<p>3n = 228 </p>
<p>n = 76  </p>
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,        S<sub>n</sub> = \(\frac{76}{2}\) [2×-5+(76 – 1)×-3]</p>
<p>\( \frac{76}{2}×(-10 - 225) = -8930 \)</p>
<p><strong>Therefore, the sum of given series is -8930</strong></p>


<p><strong>Qustion 3:In an A.P</strong></p>
<p><strong>i)\( Given a = 5,d = 3,a_{n} = 50,find n and S_{n} \)</strong>
<p><strong>Solution:</strong></p>
<p>a_{n} = a + nd - d</p>
<p>50 = 5 + 3n - 3</p>
<p>50 = 2 + 3n </p>
<p>3n = 48 </p>
<p>n = 16 </p>
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,        S<sub>n</sub> = \(\frac{16}{2}\) [2×5+(16 – 1)×3]</p>
<p>\( \frac{16}{2}×(10 + 45) = 440 \)</p>




<p><strong>ii) Given a = 7,\(a_{13} = 35\),find d and \(S_{13} \)</strong>
<p><strong>Solution:</strong></p>
<p>\(a_{13} = a + 12d\)</p>
<p>35 = 7 + 12d </p>
<p>12d = 28 </p>
<p>\(n = \frac{28}{12} = \frac{7}{3}\) </p>
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,        S<sub>13</sub> = \(\frac{13}{2} [2×7+(13 – 1)× \frac{7}{3}] \)</p>
<p>\( \frac{13}{2}×(14 + \frac{84}{3}) = 273 \)</p>


<p><strong>iii)Given \(a_{12} = 37\),d = 3,find a and \(S_{12} \)</strong>
<p><strong>Solution:</strong></p>
<p>\(  a_{12}  = a + 11d                   \)
<p>\(  a + 11d = 37                  \)
<p>\(  a + 33  = 37                  \)
<p>\(  a       = 4                  \)
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,        S<sub>12</sub> = \(\frac{12}{2}\) [2×4+(12 – 1)×3]</p>
<p>\( 6×(8 + 33) = 246 \)</p>


<p><strong>iv) Given \( a_{3} = 15,S_{10} = 125\),d = 3,find d and \(a_{10} \)</strong>
<p><strong>Solution:</strong></p>
<p>\( a + 2d = 15               \)
<p>\( a     = 9               \)
<p>\( a_{10}     = a + 9d = 9 + 27 = 36               \)


<p><strong>v) Given d = 5,\( S_{9} = 75 \),find a and \(a_{9} \)</strong>
<p><strong>Solution:</strong></p>
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>Therefore,        S<sub>9</sub> = \(\frac{9}{2}\) [2×a+(9 – 1)×5]</p>
<p>\( 9(2a + 40) = 150               \)
<p>\( 18a + 360 = 150               \)
<p>\( 18a   = -210               \)
<p>\( a   = -\frac{35}{3}              \)
<p>\( a_{9} =  a + 8d = -\frac{35}{3} + 40 = -\frac{85}{3}\)</p>

<p><strong>vi) Given a = 2,d = 8,\( S_{n} = 90 \),find n and \( a_{n} \)</strong>
<p><strong>Solution:</strong></p>
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [4+(n-1)8]</strong></p>
<p>Therefore,        90 = \(\frac{n}{2}\) [4 + 8n - 8]</p>
<p>\( 180 = n (8n - 4)           \)</p>
<p>\( 180 = 8n_{2} - 4n            \)</p>
<p>\( 2n_{2} - n - 45 = 0            \)</p>
<p>\( 2n_{2} - 10n + 9n - 45 = 0            \)</p>
<p>\(n = 5 \)</p>
<p>\( a_{n} = a + 4d = 2  + 32 = 34              \)


<p><strong>vii) Given a = 8,\( a_{n} = 62,S_{n} = 210\),find n and d .</strong>
<p><strong>Solution:</strong></p>
<p>\(8 + nd - d  = 62...(1)\)</p>
<p>Since, the sum of first n terms is given by: <strong>\(S_{n} = \frac{n}{2} [16+(n-1)d] \)</strong></p>
<p>Therefore,        420 = n [16 + nd - d ]</p>
<p>Substituting value of nd from eq (1)</p>
<p>\( n = \frac{420}{70} = 6     \)</p>
<p>\(8 + 5d  = 62 ...(1)\)</p>
<p>\(d  = \frac{54}{5} ...(1)\)</p>


<p><strong>viii)Given \(a_{n} = 4\),d = 2,\(S_{n} = -14\),find n and a </strong>
<p><strong>Solution:</strong></p>
<p>\(  a + 3d = 4 \)</p>
<p>\(  a      = -2 \)</p>
<p>\(  S_{n}      = \frac{n}{2} [-4+(n-1)2] \)</p>
<p>\(  -14      = \frac{n}{2} [-6+2n] \)</p>
<p>\(  -28   = n [-6+2n] \)</p>
<p>\(  -28   = 2n_{2} -6n \)</p>
<p>\(   n_{2} -3n +  14 = 0 \)</p>


<p><strong>ix)\( Given a = 3,n = 8,S = 192,find d \)</strong>
<p><strong>Solution:</strong></p>
<p>Since, the sum of first n terms is given by: <strong>\( S_{n} = \frac{n}{2} \) [6+(n-1)d]</strong></p>
<p>Therefore,       \( 384 = n [6 + 8d - d ]\)</p>
<p>  \(      384 = 8 [6 + 7d  ]\)</p>
<p>  \(    48 =  [6 + 7d  ]\)</p>
<p>  \(  42 =  7d\)</p>
<p>  \( d  =  6\)</p>

<p><strong>x)Given l = 28,S = 144,and there are total 9 terms,find a.</strong>
<p><strong>Solution:</strong></p>
<p>\(28  = a + 8d \)            ..(1)</p>
<p>Since, the sum of first n terms is given by: <strong>S<sub>n</sub> = \(\frac{n}{2}\) [6+(n-1)d]</strong></p>
<p>Therefore,    \(    288 = 9 [2a + 8d  ]\)</p>
<p>\(288  = 18a + 72 d        ..(2)\)</p>
<p>\(504     = 18a + 144d\)
<p>\(72d = 216\)</p>
<p>\(d = 3\)</p>
<p>\(28 = a + 24\)</p>
<p>\(a = 4\)</p>




<p><strong>Question 4:How many terms of the A.P 9,17,25 must be taken to give a sum of 636</strong></p>
<p><strong>Solution:</strong></p>
<p>\(a = 9,d = 17 - 9 = 8,a_{n} = 25\)</p>
<p>\(25 = 9 + 8n - 8\)</p>
<p>\(24 =  8n \)</p>
<p>\(n = 3 \)</p>
<p>  Since, the sum of first n terms is given by: <strong>S_{n} = \(\frac{n}{2}\) [6+(n-1)d]</strong></p>
<p>\(Therefore,        1272 = n [18 + 8n - 8  ]\)</p>
<p>\(1272 = n(10 + 8n) \)</p>
<p>\( 8n^{2} + 10n - 1272 = 0   \)
<p>\( 4n^{2} + 5n - 636 = 0   \)
<p>\(n = 12 \)</p>



<p><strong>Q.5 The first term of an A.P is 5 and last term of an A.P is 45 and  sum of this A.P is 400, find the  number of terms  and common difference. </strong></p>
<p><strong>Sol. </strong></p>

<p>Given, a = 5, l = 45 (last term) and S<sub>n</sub> = 400</p>
<p>Since,              <strong>S<sub>n</sub> = \(\frac{n}{2}\) [2a+(n-1)d]</strong></p>
<p>\( S_{n} = \frac{n}{2} [a+a+(n-1)d] \)</p>
<p>\(S_{n} = \frac{n}{2} [a + l]       (since a_{n}= a +(n – 1)d = l) \)</p>
<p>Therefore,\(  400 = \frac{n}{2} [5+45] \)</p>
<p>\(400×2 = 50n \)</p>
<p>Therefore,    <strong>\(n = 16\)</strong></p>
<p>Since             \(l = a + (16 – 1)d \)       (since there are total 17 terms)</p>
<p>Therefore, \(45 = 5 + 15d \)</p>
<p><strong>                   \(   d = 3 \)</strong></p>
<p><strong>Therefore, total numbers of terms are 16 and common difference is 3</strong></p>
<p><strong>Though we used the result that sum of n terms is no of terms multiplied by sum of first and last term divided by 2,if you dont remember it you can use the same general formaula,that will form 2 equations in n and d,so after solving them you can get n and d,but this is the one of the most basic result,you must have heard about a teacher asked his students to find the sum from 1 to 100 just to keep them busy,but one student got this done in few minutes,how he did it?Actually he didnt actually perform the sum,he wrote</br>
\( S = 1 + 2 + 3 .... + 100\)</br>
 \(S = 100 + 99        + 1\)</br>
Adding them we get</br>
\(2S = 100×101\),now 101 is actually the sum of first and last term </br>
 \(S = 5050\)</br>
 </strong></p>






<p><strong>Q.6: First term of an A.P is 17 and last term of an A.P is 407. How many terms are there in an A.P also find its sum if common difference is 13.</strong></p>
<p><strong>Sol.</strong></p>
<p> Given, a = 17, d = 13, l = 407 (last term) = \( a_{n} \)</p>
<p>Since,            <strong>\(a_{n} = a + (n – 1)d \)</strong></p>
<p>Therefore,\(407 = 17 + (n – 1)×13 \)</p>
<p>\(13n = 407 + 13 – 17\)</p>
<p>Therefore, <strong>\(n = 31\)</strong></p>
<p>Since               <strong>\(S_{n} = \frac{n}{2} [2a + (n – 1)d]\)</strong></p>
<p>               \(S_{n} = \frac{31}{2} [a+a+(n – 1)d] \)</p>
<p>                 \(S_{n} = \frac{31}{2} [a + l]       (since a_{n}= a +(n – 1)d = l) \)</p>
<p>Therefore,   \(  S_{n} = \frac{31}{2} [17+407] \)</p>
<p>\(S_{n} = 6572\)</p>


<p><strong>Q.7:Find the sum of first 22 terms of an A.P in which d = 7 and 22nd term is 149</strong></p>
<p><strong>Solution:</strong></p>
<p>According to the question:</p>
<p>\( a + 21d = 149             \)</p>
<p>\( a + 147 = 149             \)</p>
<p>\( a       = 2             \)</p>
<p>  Since, the sum of first n terms is given by: <strong>S_{22} = \( \frac{22}{2}\) [4+(22-1)7]</strong></p>
<p>\(S_{22}   = 11\times 151 = 1661 \)</p>




<p><strong>Q.8:Find the sum of first 51 terms of an A.P whose second and third terms are 14 and 18 respectively</strong></p>
<p><strong>Solution:</strong></p>
<p>According to the question:</p>
<p>\( a + d = 14              \)</p>
<p>\( a + 2d = 18              \)</p>
<p>\( d = 4              \)</p>
<p>\( a = 10              \)</p>
<p>Since, the sum of first 51 terms is given by: <strong>S_{51} = \( \frac{51}{2} \)[20+(51-1)4] </strong></p>
<p>\(S_{51}   = \frac{51}{2} [220] = 5610 \)</p>


<p><strong>Q.9:If the sum of first 7 terms of an A.P is 49 and that of 17 terms is 289,find the sum of first n terms</strong></p>
<p><strong>Solution:</strong></p>
<p>According to the question:</p>
<p>\( S_{7} = \frac{7}{2} [2a+(7-1)d] = 49 \)
<p>\( 7 [2a+(7-1)d] = 98 \)
<p>\(  [2a+6d] = 14     ...(1)\)

<p>\( S_{17} = \frac{17}{2} [2a+(17-1)d] = 289 \)
<p>\(  [2a+16d] = 34 ...(2)\)
<p>\(  d = 2 ...(2)\)
<p>\(  a   = 1 ...(2)\)
<p>\(  Since, the sum of first n terms is given by: <strong>S_{n} = \frac{n}{2} [2+(n-1)2] \ )</strong></p>
<p>\(S_{n} = n^{2} \)</p>


<p><strong>Q.10:Show that \(a_{n}\) forms an A.P if \( a_{n} \)is defined as follows</strong></p>
<p><strong>i)\(a_{n} = 3 + 4n \)</strong></p>
<p><strong>Solution:</strong></p>
<p>To form an A.P the difference between consecutive terms should remain same</p>
<p>\(  d = a_{n + 1} - a_{n}  ..(i)                           \)
<p>\(  d = 3 + 4(n + 1)  - 3 - 4n                             \)
<p>\(  d = 3 + 4n + 4  - 3 - 4n                             \)
<p>\(  d = 4                                \)
<p>Since d is constant and it does not depend on n and it doesn not depend on n,that means \( a_{3} - a{2}\) will be equal to \( a_{4} - a{3} = a_{1000} - a_{999} \),it will form an A.P</p>


<p><strong>ii)\(a_{n} = 9 - 5n \)</strong></p>
<p><strong>Solution:</strong></p>
<p>To form an A.P the difference between consecutive terms should remain same</p>
<p>\(  d = a_{n + 1} - a_{n}  ..(i)                           \)
<p>\(  d = 9 - 5(n + 1)  - 9 + 5n                             \)
<p>\(  d = 9 -5n - 5  - 9 + 5n                             \)
<p>\(  d = -5                                \)
<p>Since d is constant and it does not depend on n and it doesn not depend on n,that means \(a_{3} - a{2}\) will be equal to \(a_{4} - a{3} = a_{1000} - a{999}\),it will form an A.P</p>



<p><strong>Q.11:If the sum of first n terms  of an A.P is 4n - n^{2},what is the first term,what is the sum of first two terms,what is the second term?Similarly find the 3rd,10th and nth terms</strong></p>
<p><strong>Solution:</strong></p>
<p><strong>This is a good question and requires a little common sense before actually startsolving the question.Now how you will find 2 term if the only think you know is sum of first n terms,n can be anything,to find 2 term first you find the sum of first two terms and then subtract the sum of first term from it,thats the only logic you need to solve this question:</strong></p>

<p>first term = \(S_{1} = 4×1 - 1_{2} = 3 \)</p>
<p>\(S_{2} = 4×2 - 2_{2} = 4              \)</p>
<p>so second term = \( S_{2} - S_{1} = 4 - 3 = 1 \)</p>
<p>\(S_{3} = 4×3 - 3_{2} = 3              \)</p>
<p>so second term = S_{3} - S_{2} = 3 - 4 = -1</p>
<p>\(S_{10} = 4×10 - 10_{2} = -60              \)</p>
<p>\(S_{9} = 4×9 - 9_{2} = -45              \)</p>
<p>so tenth term = \(S_{10} - S_{9} = -60 + 45 = -15\)</p>
<p>\(S_{n} = 4n - n_{2} =        \)</p>
<p>\(S_{n-1} = 4n - 4  - n_{2} -1 + 2n = 6n -5 -n_{2}               \)</p>
<p>nth term = \( S_{n} - S_{n-1} = 4n -n_{2} + n_{2} + 5 - 6n = -2n + 5 \)</p>

<p><strong>Q.12:Find the sum of first 40 positive integers divisible by 6</strong></p>
<p><strong>Solution:</strong></p>
<p><strong>This is a type of question and you will see a lot of variations of it ,what we have to do in this question is to view this problem as an A.P,the problem is A.P since all consecutive numbers divisble by 6 will have difference of 6,yaa thats common sense,lets try to formaulate the question in the form of A.P</strong></p>
<p>a = 6(first positive number divisible by 6 )</p>
<p>To find the 40th positive integer divisible by 6</p>
<p>\(a_{40} = a + 39d = 6 + 39×6 = 240 \)</p>
<p>  Since, the sum of first n terms is given by:\(S_{n} = \frac{40}{2} [12+(40-1)6]\)</p>
<p>\(S_{n} = 20 [12+39×6] = 20(12 + 234) = 4920 \)</p>




<p><strong>Q.13:Find the sum of first 15 multiples of 8</strong></p>
<p><strong>Solution:</strong></p>
<p>a = 8(first multiple of 8 )</p>
<p>\(  Since, the sum of first n terms is given by: <strong>\(S_{n} = \frac{15}{2}\) [16+(15-1)8]\)</strong></p>
<p>\(S_{n} = \frac{15}{2}\) [16+112] = 15(64) = 960 \)</p>



<p><strong>Q.14:Find the sum of odd numbers between 0 and 50</strong></p>
<p><strong>Solution:</strong></p>
<p><strong>\( a = 1,d = 2   \)</strong></p>
<p>\(  a_{n} =  a + (n - 1)d   \)</p>
<p>\(  49 =  1 + (n - 1)2   \)</p>
<p>\(  49 =  1 + 2n - 2   \)</p>
<p>\(  n = 25        \)</p>
<p>  Since, the sum of first 25 terms is given by: <strong>\(S_{25} = \frac{25}{2}\) [2+(25-1)2]</strong></p>
<p>\(S_{n} = \frac{25}{2}\) [2+48] = 625 </p>


<p><strong><em>Q.15: A contract on construction job there specifies a  penalty for delay of completion  beyond a certain date as follows  Rs 200 for the first day,rs 250 for the second day,300 for the 3rd day etc,the penalty for each succeeding day is increased by Rs 50 . how much money the contractor has to pay as penalty if the work was delayed by 30 days?</em></strong></p>
<p><strong> </strong></p>
<p><strong>Sol.</strong></p>
<p>Given, a = 200 (since, penalty on 1<sup>st</sup> day is 200 Rs)</p>
<p>d = 50 (since, penalty increases by Rs 50 for each succeeding day.)</p>
<p>And     n = 30</p>
<p>Since, the sum of first n terms is given by:  <strong>\(S_{n} = \frac{n}{2} [2a+(n-1)d] \)</strong></p>
<p>Therefore,    for n = 30</p>
<p>\(S_{n} = \frac{30}{2}[2×200 + (30 – 1)×50]\)</p>
<p>= 15(400+1450)</p>
<p>= 15(1850) = 27750 Rs</p>
<p><strong>Therefore, the contractor paid Rs 27750 as penalty.</strong></p>


<p><strong><em>Q 16:A sum of Rs. 560 is to be used to give seven cash prizes to students of a school for their overall academic performance. If each prize is Rs. 20 less than its preceding prize, find out the value of each of the prizes.</em></strong></p>

<p><strong>Ans.-</strong> Total amount of seven prizes = Rs.700</p>

<p>Let us assume the value of first prize be Rs.p</p>
<p>By the given condition, we have</p>
<p>p, p-20, p-40,…</p>
<p>Now, \(m_{2}-m_{1}=p-20-p=-20\)</p>
<p>\(Similarly,\:m_{3}-m_{2}=p-40-p+20=-20\)</p>
<p>\(Since\:m_{2}-m_{1}=m_{3}-m_{2}=-20,\:which\:is\:constant.\)</p>
<p>Therefore, it is an A.P. with common difference (q) = -20</p>
<p>Let K = p + (p-20) + (p-40) + … upto 7 terms</p>
<p>Here, m = p, q =-20 and n = 7</p>
<p>Now,  \(K_{n}=\frac{n}{2}\left [ 2m+\left ( n-1 \right )q \right ]\)</p>
<p>\(∴ K_{7}=\frac{7}{2}\left [ 2p+\left ( 7-1 \right )\left ( -20 \right ) \right ]\)</p>
<p>&nbsp;</p>
<p>\(\Rightarrow K_{7}=\frac{7}{2}\left [ 2p+\left ( 6 \right )\left ( -20 \right ) \right ]\)</p>
<p>&nbsp;</p>
<p>\(\Rightarrow 560=\frac{7}{2}\left [ 2p-120 \right ]\)</p>
<p>&nbsp;</p>
<p>\(\left [ ∴ Total\: amount\: of\: 7\: prizes=Rs.700=K_{7} \right ]\)</p>
<p>&nbsp;</p>
<p>\(\Rightarrow 2p-120=700\times \frac{2}{7}\)</p>
<p>&nbsp;</p>
<p>\(\Rightarrow 2\left ( p-60 \right )=200\)</p>
<p>&nbsp;</p>
<p>\(\Rightarrow p-60 =\frac{200}{2}=100\)</p>
<p>&nbsp;</p>
<p>\(\Rightarrow p=100+60=160\)</p>
<p>Hence, the amount of each prize (in rs.) respectively is-:</p>
<p>160, 160-20, 160-40, 160-60, 160-80, 160-100, 160-120</p>
<p>i.e, Rs.160, Rs.140, Rs.120, Rs.100, Rs.80, Rs.60, Rs.40 respectively.</p>
<p>&nbsp;</p>


<p><strong><em>Q 17:In a school students thought of planting trees in and around the school to reduce air pollution. it was decided the no of trees that each section of each class will plant will be the same as the class in which they r studying .eg a section of class 1 will plant 1 tree,a section of class 2 will plant 2 trees and so on till class 12.there r 3 sections of each class.how many trees will be planted by the students?</em></strong></p>


<p><strong>Solution:</strong></p>
<p>First class has 3 sections so they will plant 3 trees</p>
<p>Second class has 3 sections so they will plant 6 trees</p>
<p>Third class has 3 sections so they will plant 9 trees</p>
<p>Fourth class has 3 sections so they will plant 12 trees</p>
<p>This is an A.P with a = 3,d = 3,n =12</p>
<p>\( S_{12} =     \frac{12}{2}[2×3 + (12 – 1)×3]       \)</p>
<p>\( S_{12} =     6[6 + 33] = 234       \)</p>


<p><strong><em>Q 18:A spiral is made-up of successive semicircles, with centres alternately at P and Q, starting with centre at P, of radii 0.5 cm, 0.1 cm, 1.5 cm, 2.0 cm, …. What is the total length of such a spiral made-up of 13 consecutive semicircles ? \(\left ( Take\:\pi =\frac{22}{7} \right )\)</em></strong></p>

<p><strong>Ans.-</strong> Since radii of semicircles are 0.5 cm, 1.0 cm, 1.5 cm, 2.0 cm …</p>
<p>Now, the length of semicircle \(\left ( l_{1} \right )\) = Perimeter  of first semicircle = \(\pi r=\frac{22}{7}\times 0.5cm\)</p>
<p>\(=\frac{22}{7}\times \frac{5}{10}=\frac{11}{7}cm\)</p>
<p>So now, the length of the second \(semicircle\left ( l_{2} \right )\) = Perimeter of second semicircle</p>
<p>= \(\pi r=\frac{22}{7}\times 1.0cm=\frac{22}{7}cm\)</p>
<p>Similarly, we can get the length of other semicircle as,</p>
<p>\(l_{3}=\frac{33}{7}cm\:and\:l_{4}=\frac{44}{7}cm\) and so on upto 13 semicircles.</p>
<p>Let us assume ‘A’ be the total length of all semicircles.</p>
<p>i.e., p= \(l_{3}=\frac{33}{7}cm\:and\:l_{4}=\frac{44}{7}cm\) … upto 13 terms</p>
<p>Here, \(p=\frac{11}{7},q=\frac{22}{7}-\frac{11}{7}=\frac{11}{7}\:and\:n=13\)</p>
<p>Since, \(A_{n}=\frac{n}{2}\left [ 2p+\left ( n-1 \right )q \right ]\)</p>
<p>\(∴ A_{13}=\frac{13}{2}\left [ 2\times \frac{11}{7}+\left ( 13-1 \right )\times \frac{11}{7}\right ]\)</p>
<p>\(= \frac{13}{2}\left [ \frac{22}{7} +\frac{132}{7}\right ]\)</p>
<p>\(= \frac{13}{2}\times \frac{154}{7}=143cm\)</em></strong></p>




<p><strong><em>200 logs are stacked in the following manner : 20 logs in the bottom row, 19 in the next row, 18 in the row next to it and so on. Find out in how many rows are 200 logs placed and how many logs are in the top row ?</em></strong></p>
</ol>
<p><strong>Solution:</strong></p>
<p> Suppose 200 logs are stacked in ‘s’ rows.</p>
<p>There are 20 logs in the first row and the number of logs in a row is one less than the number of logs in the preceding row. So, number of logs in various rows form an A.P. with first term p (=20) and the common difference q (= -1). As there are 200 logs in all rows.</p>
<p>\(∴\) Sum of ‘s’ terms of an A.P. with p = 20 and q = -1 is 200</p>
<p>\(\Rightarrow \frac{s}{2}\left \{ 2p+\left ( s-1 \right )q \right \}=200\)</p>
<p>\(\Rightarrow \frac{s}{2}\left \{ 2\times 20+\left ( s-1 \right )\times -1 \right \}=200\)</p>
<p>\(\Rightarrow \frac{s}{2}\left ( 40-s+1 \right )=200\)</p>
<p>\(\Rightarrow n\left ( 41-s \right )=400\)</p>
<p>\(\Rightarrow s^{2}-41s+400=0\:\:\Rightarrow \left ( s-25 \right )\left ( s-16 \right )=0\)</p>
<p>\(\Rightarrow s=16\:or\:s=25\)</p>
<p>Now, If s =25, then number of logs in 25<sup>th</sup> row is equal to 25<sup>th</sup> terms of an A.P. with first term 20 and the common difference (-1).</p>
<p>\(∴\) number of logs in 25<sup>th</sup> row = p + 24q = 20 – 24 = -4</p>
<p>Clearly, this is not meaningful.</p>
<p>\(∴\) s = 16</p>
<p>Thus, logs are placed in 16 rows.</p>
<p>Number of logs in top row = Number of logs in 16<sup>th</sup> row</p>
<p>= 16<sup>th</sup> term of an A.P. with p = 20 and q = -1</p>
<p>Hence, there are 5 logs in the top row.</p>


<p><strong><em>Q 20:In a potato race, a bucket is placed at the starting point, which is 5 m from the first
potato and other potatoes are placed 3 m apart in a straight line.There are ten potatoes in the line.A competitor starts from the bucket, picks up the nearest potato, runs back with it, drops it in the bucket, runs back to pick up the next
potato, runs to the bucket to drop it in, and she continues in the same way until all the potatoes are in the bucket. What is the total distance the competitor has to run?</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Lets try to solve it:</p>
<p>In picking first potato he will have to cover 5*2 = 10 m</p>
<p>In picking second potato he will have to cover (5+3)*2 = 10 m</p>
<p>In picking third potato he will have to cover (5+3+3)*2 = 10 m</p>
<p>In picking fourth potato he will have to cover (5+3+3+3)*2 = 10 m</p>
<p>Subsequently,he will have to cover 6m more every time</p>
<p>so S = 10 + 16 + 22 ......upto 10 terms</p>
<p>Now if we left first term it is A.P with n = 9,a = 16,d = 6 </p>
<p>\( S_{9} =     \frac{9}{2}[2×16 + (9 – 1)×6]       \)</p>
<p>\( S_{9} =     \frac{9}{2}[32 + 48]       \)</p>
<p>\( S_{9} =     360       \)</p>
<p>so total distance he will cover picking all potatoes and drop them in bucket is 360 + 10 = 370</p>



<p><strong>Exercise 3.4:</strong></p>
<p><strong>Question 1:Which term of the A.P 121,117,113 is first negative term?</strong></p>
<p><strong>Solution:</strong></p>
<p>a = 121,d = 117 - 121 = -4,we have to find n for which \(a_{n}<0 \)</p>
<p>\( a_{n} = 121 + (n -1)-4                  \)</p>
<p>\(  121  -4n + 4 < 0                  \)</p>
<p>\(  125  -4n  < 0                  \)</p>
<p>\(    -4n  < -125                  \)</p>
<p>\(    4n  > 125                  \)</p>
<p>\(    n  > \frac{125}{4} > 31.25 = 32                \)</p>
<p>so the first negative term is 32</p>



<p><strong>Question 2:The sum of the third and seventh terms of an A.P is 6 and their product is 8.Find the sum of first sixteen terms of an A.P</strong></p>
<p><strong>Solution:</strong></p>
<p>According to question:</p>
<p>\(a + 2d + a + 6d = 6\)</p>
<p>\(2a + 8d = 6\)</p>
<p>\(a  + 4d = 3\)</p>
<p>\(a       = 3 - 4d \)</p>
<p>\( (a + 2d)(a + 6d) = 8   \)</p>
<p>\( a^{2} +  8da + 12d^{2} = 8  \)</p>
<p>\((3 - 4d)^{2} +  8d(3 -4d) + 12d^{2} = 8  \)</p>
<p>\( 9 + 16d^{2} -24d  +  24d -32d^{2} + 12d_{2} = 8  \)</p>
<p>\(  16d^{2}-32d^{2} + 12d_{2}  -24d  +  24d + 9  = 8  \)</p>
<p>\(  -4d^{2}   = -1  \)</p>
<p>\(   4d^{2}   =  1  = \frac{1}{2} or -\frac{1}{2}  \)</p>
<p>\( when   d = \frac{1}{2} ,a = 1            \)
<p>\( S_{16} =     \frac{16}{2}[2×1 + (16 – 1)× \frac{1}{2}]       \)</p>
<p>\( S_{16} =     8[2×1 + (16 – 1)× \frac{1}{2}]   = 76    \)</p>
<p>when   \(d = -\frac{1}{2} ,a = 5            \)
<p>\( S_{16} =     \frac{16}{2}[2×5 + (16 – 1)× -\frac{1}{2}]       \)</p>
<p>\( S_{16} =     8[10 + 15× -\frac{1}{2}]   = 20    \)</p>



 <p><strong>Question 3:A ladder has rungs 25 cm apart.The rungs decrease uniformly in length from 45 cm at the bottom to 25 cm at the top.If the top and the botom rungs are two nd a half metre apart, what is the length of the wood required for the rungs?</strong></p>
<p><strong>Solution:</strong></p>
<p>According to question:</p>
<p>bottom and top rungs are 250 cm apart and there is rung at 25cm so no of rungs = \frac{250}{25} + 1 = 11</p>
<p>Why we are doing +1 is suppose the bottom rungs are 50 cm apart and there is rung after 25 cm ,so in that case we have 3 rungs,since there are rungs at both ends</p>
<p>The next thing is to find how the length of rung decreases at each step</p>
<p>20 cm decreases in 10 steps so \(\frac{20}{2}\) in one step that is d of our A.P</p>
<p>so a = 25,d =45,d = \(\frac{25}{2}\),n = 11</p>
<p>\( S_{11} =     \frac{11}{2}[2×25 + (11 – 1)× 2]       \)</p>
<p>\( S_{11} =     \frac{11}{2}[50 + 20]       \) = 385 cm</p>



 <p><strong>Question 4:<p>The houses of a row are numbered consecutively from 1 to 49. There is a value of x such that the sum of numbers of houses preceding the house numbered x is equal to the sum of the numbers of the houses following it. Find this value of x?</p> </h1></strong></p>
<p><strong>Solution:</strong></p>
<p>According to question:</p>
<p>Preceding means after so we have to find house number x such that sum of numbers of house before it = sum of number of houses after it,let the number of house which satisifie this be x</p>
<p>\( S_{x+1} = S_{x-1} \)</p>
<p>now to find \(S_{x+1}\) we observe that its an A.P with a = x + 1,d = 1,no of terms 49 - x</p>
<p>now to find \(S_{x-1} \) we observe that its an A.P with a = 1,d = 1,no of terms  x - 1</p>
<p>\( \frac{49 - x}{2}[2x + 2 + (49 – x - 1)] = \frac{x - 1}{2}[2 +  x - 1 -1] \)</p> 
<p>\( \frac{49 - x}{2}[x + 50 ] = \frac{x - 1}{2}x  \)</p>
<p>\( (49 - x)(x + 50  ) = (x - 1)(x) ]   \)</p>
<p>\( 49x + 2450 -x^{2} - 50x   = x^{2} - x   \)</p>
<p>\( 2450    = 2x^{2}    \)</p>
<p>\(    x    = 35        \)</p>


<p><strong>Question 5:A small terrace at a football ground comprises of 15 steps each of which is 50 m long and built of solid concrete. Each step has a rise of 1/4 m and a tread of 1/2 m (See figure) calculate the total volume of concrete required to build the terrace.</strong></p>
<p><strong>Solution:</strong></p>
<p>As you must have seen in the ncert book a hint is given,in which it calculates the whole volume by calculating the volume of each steps</p>
<p>Now lets see each step</p>
<p>The length 50 cm is same for every stair ,the tread (width) is also same for each step,what will change is its height from the ground</p>
<p>So if the first step has height \( \frac{1}{4} \),the secind step will have height of  \( \frac{1}{4}  + \frac{1}{4} \)height of \( \frac{1}{4} + \frac{1}{4} + \frac{1}{4} \) and so on</p>
<p>so coming back to the volume ,the total volume will be the sum of volumes of each step</p>
<p>\( V = (50×\frac{1}{2}×\frac{1}{4}) + (50×\frac{1}{2}×\frac{1}{4}) + (50×\frac{1}{2}×\frac{1}{4}) .....upto 15 t erms          \)</p>
<p>\( V = 50×\frac{1}{2} (\frac{1}{4} + \frac{2}{4} + \frac{3}{4} .....upto 15 terms )         \)</p>
<p>This is an A.P with \(a = \frac{1}{4},d = \frac{1}{4},n = 15\)</p>
<p>\(V = 50×\frac{1}{2} (\frac{15}{2}[2×\frac{1}{4} + (15 – 1)× \frac{1}{4}])   \)</p>
<p>\( V = 750m^{3}          \)</p>









































































































@stop
































