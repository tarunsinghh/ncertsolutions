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



<p style="text-align: center;"><strong>EXERCISE- 7.2</strong></p>
<p><strong> </strong></p>
<p><strong>Q-1: Evaluate:</strong></p>
<p><strong>(i). 8!                                                                    (ii). 4! – 3!</strong></p>
<p><strong> </strong></p>
<p><strong>Solution:</strong></p>
<p><strong>(i). 8! =</strong> 1 × 2 × 3 × 4 × 5 × 6 × 7 × 8 <strong>= 40320</strong></p>
<p><strong>(ii). 4! =</strong> 1 × 2 × 3 × 4 <strong>= 24</strong></p>
<p><strong>And, 3!</strong> = 1 × 2 × 3 <strong>= 6</strong></p>
<p><strong>Therefore, 4! – 3! = 24 – 6 = 18</strong></p>
<p><strong>Q-2: Is 3! + 4! = 7! ?</strong></p>
<p><strong> </strong></p>
<p><strong>Solution:</strong></p>
<p><strong>Now, 3! =</strong> 1 × 2 × 3 <strong>= 6</strong></p>
<p><strong>4! =</strong> 1 × 2 × 3 × 4 <strong>= 24</strong></p>
<p><strong>And, 7! =</strong> 1 × 2 × 3 × 4 × 5 × 6 × 7 <strong>= 5040</strong></p>
<p><strong>Therefore, 4! – 3! ≠ 7!</strong></p>
<p><strong>Q-3: Compute:</strong></p>
<p><strong>\(\frac{ 9! }{ 5!\; \times \;3! }\)</strong></p>
<p><strong>Solution:</strong></p>
<p>\(\frac{ 9! }{ 5!\; \times \;3! }\) = \(\frac{ 1 \;\times \;2 \;\times \;3 \;\times \;4\; \times \;5\; \times \;6\; \times \;7\; \times \;8\; \times \;9 }{ 1\; \times \;2\; \times \;3\; \times \;4\; \times \;5\; \times \;1\; \times \;2\; \times \;3 }\\\)</p>
<p><strong>Therefore,</strong> \(\frac{ 9! }{ 5! \;\times \;3! }\) <strong>= 392</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Q-4. If \(\frac{ 1 }{ 5! } + \frac{ 1 }{ 6! } = \frac{ n }{ 7! }\), find the value of a.</strong></p>
<p><strong> </strong></p>
<p><strong>Solution:</strong></p>
\(\;\frac{ 1 }{ 5! } + \frac{ 1 }{ 6! } = \frac{ n }{ 7! }\\\)
<p>\(\\\Rightarrow\)   \(\frac{ 1 }{ 5! } + \frac{ 1 }{ 6 \;\times \;5! } = \frac{ n }{ 7 \;\times \;6 \times \;5! }\\\)</p>
<p>\(\\\Rightarrow\)   \(\frac{ 1 }{ 5! } + \left [ 1 + \frac{ 1 }{ 6 } \right ] = \frac{ n }{ 7 \;\times \;6 \times \;5! }\\\)</p>
\(\\\Rightarrow 1 + \frac{ 1 }{ 6 } = \frac{ a}{ 7 \;\times \;6 }\\\)
<p>\(\\\Rightarrow \)   \(\frac{ 7 }{ 6 } = \frac{ n }{ 7 \times 6 }\\\)</p>
\(\Rightarrow n = \frac{ 7 \;\times 7 \;\times 6 }{ 6 }\\\)
<p><strong>Therefore, n = 49</strong></p>
<p><strong>Q-5: Evaluate: \(\frac{ n! }{ \left ( n &#8211; r \right )! }\), when</strong></p>
<p><strong>(i). n = 5, r = 1                                                       (ii). n = 8, r = 4</strong></p>
<p><strong> </strong></p>
<p><strong>Solution:</strong></p>
<p><strong>(i)  n = 5, r = 1:</strong>         <strong>[ Given ]</strong></p>
<p>\(\\\frac{ n! }{ \left ( n\; &#8211; \;r \right )! }\) = \(\frac{ 5! }{ \left ( 5 \;-\; 1 \right )! }\)= \(\frac{ 5! }{ 4! }\)= \(\frac{ 5\; \times \;4! }{ 4! }\\\)</p>
<p><strong>Therefore, \(\frac{ n! }{ \left ( n \;-\; r \right )! }\;\) = 5</strong></p>
<p><strong>(ii)</strong> \(\;\frac{ n! }{ \left ( n \;-\; r \right )! }\) = \(\frac{ 8! }{ \left ( 8 \;-\; 4 \right )! }\)= \(\frac{ 8! }{ 4! }\\\)</p>
<p>= \(\\\frac{ 8\; \times \;7 \times 6 \;\times \;5 \times \;4! }{ 4! }\\\)= 8 × 7 × 6 × 5 = 15120</p>
<p><strong>Therefore, \(\\\frac{ n! }{ \left ( n \;-\; r \right )! }\) = 15120</strong></p>



<p style="text-align: center;"><strong>EXERCISE- 7.3</strong></p>



<p><strong><em>1. How many 3-digit numbers can be formed by using the digits 1 to 9 if no digit is
repeated?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>This question is simple,the question would have been a little complicated if 0 would have been one of the digit</p>
<p>Digits are 1 to 9 ,9 digits,so one place can be filled in 9 ways other in 8 and then last one on 7</p>
<p>So total no of ways = \( 9\times 8\times 7 = 72\times 7 = 504 \)</p>


<p><strong><em>2. How many 4-digit numbers are there with no digit repeated?</em></strong></p>
<p><strong>Solution:</strong></p>
<p>This is a little tricky,now we have 0 to 9 ten digits and there are for places  _ _ _ _,the leftmost one is thousands place </p>
<p>Now since the no is 4 digit we cant have 0 as choice for thousands place</p>
<p>We can have only 1 to 9 ,9 choices for thousands place,and after that we are left 9 choices not 8 as we can have 0 as one of the choices<br/>
<p>after that we are left with 8 choices and then 7 choices</p>
<p>So 4 digit number with no digit repeated = \( 9\times 9\times 8\times 7 =             \)</p>


<p><strong><em>3. How many 3-digit even numbers can be made using the digits
1, 2, 3, 4, 6, 7, if no digit is repeated?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>For even numbers the units place have only 3 choices 2,4,6 after that tens place can be filled in 6 and hundreds place can be filled in 5 ways</p>
<p>So 3 digit even numbers if no digit repeated = \( 3\times 6\times 5 = 90             \)</p>


<p><strong><em>4. Find the number of 4-digit numbers that can be formed using the digits 1, 2, 3, 4,
5 if no digit is repeated. How many of these will be even?
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Number of 4 digit numbers if no digit repeated = \( 5\times 4\times 3\times 2 = 120        \)</p>
<p>Now there are two ways to find even numbers one is like question 3 or we can use the fact that every number is either odd or even<br/>
Alternatively,out of 120 half will be even,half will be odd ,so no of even numbers  = 60 </p>


<p><strong><em>5. From a committee of 8 persons, in how many ways can we choose a chairman
and a vice chairman assuming one person can not hold more than one position?
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>So lets try to do this with basic common sense and thinking</p>
<p>We have 8 choices for chairman and then 7 choices for vice chairman,or you can say we have 8 choices for vice chairman qnd 7 choices for chairman</p>
<p>So total no of ways = \( 8\times 7 = 56        \)</p>
<p>Some people have a genuine doubt that since for vice chairman we are considering  only 7 choices,then there is one person who will be left</p>
<p>But its not like that ,let p is the person you think will be left out or you think we are not considering</p>
<p>Now we have 8 ways to select chairman,so there will be way in which p will not be chairman as we have 8 choices</p>
<p>So some other candiate is chairman ,now we are left with 7 choices of which one is  p is guaranteed because the person we have chosen as chairman is already been left out</p>
<p>So no matter which person we choose as chairman,there will be 7 choices always since we will not chose chaorman as vice chairman again</p>
<p>Remember we are counting no of ways,it not 8 and 7 persons,its 8 and 7 choices</p>
<p>Lets person are P1,P2,P3,P4,P5,P6,P7,P8</p>
<p>So in the first choices and then we have 7,so enumeration will be like</p>
<p>P1(Chairman) --- (P2,P3,P4,P5,P6,P7,P8) can be vice chiarman = 7 ways</p>
<p>P2(Chairman) --- (P1,P3,P4,P5,P6,P7,P8) can be vice chiarman = 7 ways</p>
<p>P3(Chairman) --- (P1,P2,P4,P5,P6,P7,P8) can be vice chiarman = 7 ways</p>
<p>P4(Chairman) --- (P1,P2,P3,P5,P6,P7,P8) can be vice chiarman = 7 ways</p>
<p>P5(Chairman) --- (P1,P2,P3,P4,P6,P7,P8) can be vice chiarman = 7 ways</p>
<p>P6(Chairman) --- (P1,P2,P3,P4,P5,P7,P8) can be vice chiarman = 7 ways</p>
<p>P7(Chairman) --- (P1,P2,P3,P4,P5,P6,P8) can be vice chiarman = 7 ways</p>
<p>P8(Chairman) --- (P1,P2,P3,P4,P5,P6,P7) can be vice chiarman = 7 ways</p>
<p>So total ways = 7 + 7 + 7 + 7 + 7 + 7 + 7 + 7 = 7*8 = 56</p>
<p>The goal of learning permutations and combinations is we want to find no of ways without actually listing them</p>
<p>Here there were only 56 ways so we have lsited,sometimes answer can be in millions so you will not write those much combinations</p>
<p>But still you should have the picture in your mind that you have counted everything,the list should be there in your  mind</p>
<p>That way you can be clear that it may happen you counting same thing twice or may be some cases are left</p>



<p><strong>Q-6: Find n, if </strong><strong>\(^{ n \;-\; 1 }P_{ 3 } : \;^{ n }P_{ 4 }\) = 1 : 9.</strong></p>
<p><strong> </strong></p>
<p><strong>Solution:</strong></p>
\(^{ n \;-\; 1 }P_{ 3 } : ^{ n }P_{ 4 } = 1 : 9\\\)
<p>\(\\\Rightarrow\)   \(\frac{^{ n \;- \;1 }P_{ 3 }}{^{ n }P_{ 4 }} = \frac{ 1 }{ 9 }\\\)</p>
<p>\(\\\Rightarrow\)   \(\frac{\left [ \frac{\left ( n\; -\; 1 \right )!}{\left ( n\; &#8211; \;1\; &#8211; \;3 \right )!} \right ]}{\left [ \frac{ n! }{ \left ( n \;-\; 4 \right )!} \right ]} = \frac{ 1 }{ 9 }\)</p>
<p>\(\\\Rightarrow\)   \(\frac{\left ( n\; &#8211; \;1 \right )!}{\left ( n\; -\; 4 \right )!} \times \frac{\left ( n \;-\; 4 \right )!}{ n! } = \frac{ 1 }{ 9 }\\\)</p>
<p>\(\\\Rightarrow\)   \(\frac{\left ( n \;-\; 1 \right )!}{ n \times \left ( n \;- \;1 \right )!} = \frac{ 1 }{ 9 }\\\)</p>
\(\\\Rightarrow \frac{ 1 }{ n } = \frac{ 1 }{ 9 }\\\)
<p><strong>Therefore, n = 9</strong></p>
<p><strong>Q-7: Find the vrlue of r, if:</strong></p>
<p><strong>(i). \(^{ 5 }P_{ r } = 2 \;[^{ 6 }P_{ r &#8211; 1 }]\)             (ii). \( ^{ 5 }P_{ r } = ^{ 6 }P_{ r &#8211; 1 }\)</strong></p>
<p><strong> </strong></p>
<p><strong>Solution:</strong></p>
<p><strong>(i).</strong> \( ^{ 5 }P_{ r } = 2 \;[^{ 6 }P_{ r &#8211; 1 }]\\\)</p>
<p>\(\\\Rightarrow\)   \(\frac{ 5! }{ \left ( 5 \;-\; r \right )! } = 2 \times \frac{ 6! }{ \left ( 6\; &#8211; \;r \;+\; 1 \right )! }\\\)</p>
<p>\(\\\Rightarrow\)   \(\frac{ 5! }{ \left ( 5 &#8211; r \right )! } = \frac{ 2 \times 6! }{ \left ( 7 &#8211; r  \right )! }\\\)</p>
<p>\(\\\Rightarrow\)   \(\frac{ 5! }{ \left ( 5 &#8211; r \right )! } = \frac{ 2\; \times \;6\; \times \;5! }{ \left ( 7\; &#8211; \;r \right )\;\left ( 6\; -\;r \right )\;\left ( 5\; &#8211; \;r \right )! }\\\)</p>
<p>\(\\\Rightarrow\)   \(1 = \frac{ 2\; \times \;6 }{\left ( 7\; &#8211; \;r \right )\left ( 6\; &#8211; \;r \right )}\)</p>
<p><strong>So, ( 7 – r )  ( 6 – r ) = 12                    </strong></p>
<p>\(\Rightarrow\)   \(42 &#8211; 6r &#8211; 7r + r^{ 2 } = 12\)</p>
<p>\(\\\Rightarrow\)   \(r^{ 2 }  – 13r + 42 = 12\)</p>
<p>\(\\\Rightarrow\)   \(r^{ 2 }  – 13r + 30 = 0\)</p>
<p>\(\\\Rightarrow\)   \(r^{ 2 }  –3r – 10r + 30 = 0\)</p>
<p>\(\\\Rightarrow\)   \(r\left ( r &#8211; 3 \right ) &#8211; 10\left ( r &#8211; 3 \right ) = 0\)</p>
<p>\(\\\Rightarrow\)   \(\left ( r &#8211; 3 \right ) \left ( r &#8211; 10 \right ) = 0\\\)</p>
<p><strong>So, r = 3 or r = 10</strong></p>
<p><strong>It is known thrt,</strong> \(^{ n }P_{ r } = \frac{ n! }{ \left (n\; -\; r \right )! },\; where \; 0 \leq r \leq n\)</p>
\(\Rightarrow 0 \leq r \leq 5\;\\\)
<p><strong>Therefore, r ≠ 10</strong></p>
<p><strong>Hence, r = 3</strong></p>
<p><strong>(ii).</strong> \(^{ 5 }P_{ r } = \;^{ 6 }P_{ r\; -\; 1 }\)</p>
\(\\\Rightarrow \frac{ 5! }{ \left ( 5\; -\; r \right )! } = \frac{ 6! }{ \left ( 6\; -\; r \;+\; 1 \right )! }\\\)
<p>\(\\\Rightarrow\)   \(\frac{ 5! }{ \left ( 5 \;-\; r \right )! } = \frac{ 6! }{ \left ( 7 \;-\; r  \right )! }\\\)</p>
<p>\(\\\Rightarrow\)   \(\frac{ 5! }{ \left ( 5\; -\; r \right )! } = \frac{ 6\; \times \;5! }{ \left ( 7 \;- \;r \right )\;\left ( 6 \;-\; r \right )\;\left ( 5\; -\; r \right )! }\\\)</p>
<p>\(\\\Rightarrow\)   \(1 = \frac{ 6 }{\left ( 7 \;- \;r \right )\;\left ( 6\; -\; r \right )}\)</p>
<p><strong>So, ( 7 – r ) ( 6 – r ) = 6</strong></p>
<p>\(\\\Rightarrow\)   \(42 &#8211; 6r &#8211; 7r + r^{ 2 } = 6\)</p>
<p>\(\\\Rightarrow\)   \(r^{ 2 }  – 13r + 42 = 6\)</p>
<p>\(\\\Rightarrow\)   \(r^{ 2 }  – 13r + 36 = 0\)</p>
<p>\(\\\Rightarrow\)   \(r^{ 2 }  –4r – 9r + 36 = 0\)</p>
<p>\(\\\Rightarrow\)   \(r\left ( r\; -\; 4 \right ) &#8211; 9\left ( r\; -\; 4 \right ) = 0\)</p>
<p>\(\\\Rightarrow\)   \(\left ( r\; -\; 4 \right ) \left ( r\; –\; 9  \right ) = 0\)</p>
<p><strong>So, r = 4 or r = 9</strong></p>
<p><strong>It is known thrt,</strong> \(^{ n }P_{ r } = \frac{ n! }{ \left (n\; &#8211; \;r \right )! },\; where \; 0 \leq r \leq n\)</p>
\(\Rightarrow 0 \leq r \leq 5\\\)
<p><strong>Therefore, r ≠ 9</strong></p>
<p><strong>Hence, r = 4</strong></p>
<p>&nbsp;</p>
<p>&nbsp;</p>





<p><strong><em>8. How many words, with or without meaning, can be formed using all the letters of
the word EQUATION, using each letter exactly once?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>


<p>Since we have to use each letter exactly once,it means we have to use all letters,so we have to make words of length 8</p>
<p>Now we have 8 choices for 1 position,then,7 for 2,3 for 3,and so on ,so the naswer is \( 8\times 7\times 6\times 5\times 4\times 3\times 2\times 1 = 8! \)</p>





<p><strong><em>9. How many words, with or without meaning can be made from the letters of the
word MONDAY, assuming that no letter is repeated, if.
(i) 4 letters are used at a time,
(ii) all letters are used at a time,
(iii) all letters are used but first letter is a vowel?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>i)if 4 letters are used at a time means we have to form a word having length 4,word of 4 letters</p>
<p>This is simple MONDAY has 6 words so we have 6 choices for first location ,5 choices for second and so on</p>
<p>So no of ways if 4 letters are used = \(   6\times 5\times 4\times 3 = 360     \)
<p>ii)if all letters are used then its like previous part,no of ways = \(6 \times 5\times 4\times 3\times 2\times 1 = 6! \)</p>
<p>iii)all letters are used but first letter is a vowel - this is little tricky,so for first letter is vowel</p>
<p>We have O and A as choice so 2 ways,then 5 ways,then 4 and so on so no of ways = \( 2\times 5\times 4\times 3\times 2\times 1 = 240 \)</p>



<p><strong><em>10.In how many of the distinct permutations of the letters in MISSISSIPPI do the
four I’s not come together?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Consider a word ABC ,how many different 3 letter words you can form if you use all letters of ABC</p>
<p>Its simple you will say \(3\times 2 = 6 \)</p>
<p>But let say the word is AAC,what we have done is replace B by another A</p>

<p>now how many different 3 letter words you can form if you use all three letters</p>
<p>You will be in some discomfort and may will try to actually emlist them all</p>
<p>Lets enlist them</p>
<p>AAC,ACA,CAA thats all you find out there are only 3 possible unlike 6 in the previous case of ABC</p>
<p>How you generalise it,how can you find a formula for it</p>
<p>Consider this word AAC,now if B would have been in place of one more A,we would have got </p>
<p>Two words -ABC,BAC instead of AAC,because if we exchange the position of AA still the word remains AA</p>
<p>When p things are of one king out of n than all p! permutation of n if all p things would have been different
corresponds to 1 combination</p>
<p>So we have 1 permutation which could have been p! permutation if those things would have been different</p>

<p>You can read the proof from ncert of number of permutation of n things of which p are of some kind,q are of some kind</p>
<p>There are two ways to solve it,first finding all permutation and then subtracting those from that in which
I come together</p>
<p>Or we can directly find too all permutation in which Is not come together</p>
<p>All permutations of word MISSISSIPPI (I 4 times S 4 times P 2 times)</p>
<p>so no of ways = \(  \frac{11!}{4! 4! 2!}  \)       </p>
<p>So we have to find ways now in which Is come together</p>
<p>Lets play all Is together</p>
<p>Lets leave Is ,we are left with MSSSSPP ,total no of permutations of MSSSSPP  = \( \frac{7!}{4! 2!}      \)</p>
<p>Now consider any permutation of this </p>
<p>Lets say we take MSSSSPP,there are _ M _ S _ S _ S _ S _ P _ P _,the _ denotes where we can fit all 4Is</p>
<p>There are 8 places in which 4I can be put together,so one permuatation of MSSSSPP will lead to 8 permutations of in which 4Is are together</p>
<p>So total no of ways in which 4 Is are together is \( 8\times \frac{7!}{4! 2!} = \frac{8!}{4! 2!}      \)</p>
<p>There is one more way you can think of solving this question which you will find at so many places online is</p>
<p>Lets say 4Is is just one letter say X,so we have to now find permutation of letters in MSSSSPPX</p>
<p>This is equal to = \( \frac{8!}{4! 2!}     \)</p>
<p>Now reason why it gives correct answer is consider any permutation say:                                 </p>
<p>MSSSPPX,this permutation is equivalent to MSSSPPXIIII</p>
<p>Consider MXSSSSPP,this permutation is equivalent to MIIIISSSSPP</p>
<p>so one permutation of letters in MSSSPPX is equal to one permuation of in which 4Is are together</p>
<p>And no cases are left ,so total no of ways = same as no of wys of permutation of letters of MSSSSSPPX
which is \(    \frac{8!}{4! 2!}        \)</p>

<p>so permutation in which Is dont come together = \(  \frac{11!}{4! 4! 2!}   -     \frac{8!}{4! 2!}  \)</p>


<p>How we can directly find it,we can but it will consist of so many cases,that we will show later,
until then you try it!!,It will strong your understanding a lot</p>

















<p><strong><em>11. In how many ways can the letters of the word PERMUTATIONS be arranged if the
(i) words start with P and end with S,
(ii) vowels are all together,
(iii) there are always 4 letters between P and S?</p></strong></em>
<p><strong><em>Solution:</em></strong></p>
<p>i) Its simple two positions are fixed starts with P and ends with S</p>
<p>So remianing we have ERMUTATION ,which are 10 letters  of which there are two T</p>
<p>So no of ways = \(  \frac{ 10! }{2!}                \)</p>


<p>ii)Vowels are all together - now this is similar to all Is are together just one extra thing is there</p>
<p>Vowels are E,U,A,I,O 4 vowels are there,so we can treat them as one letter as explained in previous question</p>
<p>So all vowels are one letter and there are remaining P,R,M,T,T,N,S ,7 letters and one equivalent for vowel</p>
<p>So no of ways = \(  \frac{8!}{2!}         \)</p> 
<p>Now this is still not the correct answer,unlike previous question in which there were 4 Is</p>
<p>Here we have AEIOU which can rearrange themselves in 5! ways</p>
<p>so ways in which vowels are together = \( \frac{8!}{2!}\times 5!         \)</p>

<p>iii)
Forget P and S ,lets try to find permuation of other letters remaining ,other left are 10 of which T comes twice.
So \(   \frac{10!}{2!} \)</p>
<p>Now take any permuatation of this say we take
</p>
<p>E R M U T A T I O N,</p>
<p>now I have to place P and S such way that there are 4 letters between them.</p>

<p>so I can place P and S as</p>
<p>P ( E R M U) S T A T I O N</p>
<p>or</p>
<p>E P ( R M U T) S A T I ON</p>

<p>Similarly i can place P and S between</p>
<p>1 and 6</p>
<p>2 and 7</p>
<p>3 and 8</p>
<p>4 and 9</p>
<p>5 and 10</p>
<p>6 and 11</p>

<p>so 7 places ,also P and S can change its position to so 7* 2 = 14.</p>
<p>so every permutation of without P and S leads to 14 different permutation of there are 4 letters between P and S,</p>

<p>so answer is \( 14\times \frac{10!}{2!} \)</p>

 


  EXERCISE – 7.4</strong></p>
<p><strong> </strong></p>
<p><strong>Q-1: If \(^{ n }C_{ 8 } = ^{ n }C_{ 2 }\), find the value of \(^{ n }C_{ 2 }\)</strong></p>
<p><strong> </strong></p>
<p><strong>Solution:</strong></p>
<p>We know that, if \(^{ n }C_{ x } = \;^{ n }C_{ y }\)</p>
<p>So, x = y or n = x + y</p>
<p>Hence, \(^{ n }C_{ 8 } = \;^{ n }C_{ 2 }\)</p>
<p><strong>n = 8 + 2 = 10</strong></p>
<p>Therefore, \(^{ n }C_{ 2 } = \;^{ 11 }C_{ 2 } \)=\( \frac{ 10! }{ 2!\left ( 10 \;-\; 2 \right )!} \) = \( \frac{ 10\; \times \;9\; \times \;8! }{ 2\; \times \;1 \;\times \;8! } \) = 45 \)</p>




<p><strong>Q-2: Find the value of ‘n’ if:</strong></p>
<p><strong>(i) \(^{ 2n }C_{ 3 } : \;^{ n }C_{ 3 }\) = 12 : 1             </strong></p>
<p><strong>(ii) \(^{ 2n }C_{ 3 } : \;^{ n }C_{ 3 }\) = 11 : 1</strong></p>
<p><strong>Solution:</strong></p>
<p> \( \frac{ ^{2n }C_{ 3 } }{ ^{ n }C_{ 3 } } = \frac{ 12 }{ 1 }  \)</p>
<p> \( \frac{ 2n\times (2n -1)\times (2n -2)\times 3\times 2\times 1 } { 3\times 2\times 1\times n\times (n -1)\times (n -2) } = \frac{ 12 }{ 1 }  \)</p>

<p> \( (2n -1)  = 3n - 6  \)</p>
<p> \( n  = 5  \)</p>


<p><strong>(i) \(^{ 2n }C_{ 3 } : \;^{ n }C_{ 3 }\) = 11 : 1             </strong></p>
<p><strong>Solution:</strong></p>
<p>This is exactly similar to previous question</p>
<p>so we can dircetly write \( 4(2n -1)  = 11(n - 2)  \)</p>
<p>n = 6 </p>

<p><strong>Q-3: Find total number of chords which can be drawn through 21 points on the circle.</strong></p>

<p><strong>Solution:</strong></p>
<p><strong>2 points</strong> are required to draw one chord on a circle.</p>
<p>Now, in order to obtain the number of chords which can be drawn through the given <strong>21 points</strong> on the circle, we need to count <strong>total number of the combinations</strong>.</p>
<p>Hence, there can be several numbers of chords as there are combinations of <strong>21 points</strong> which can be taken <strong>2 at a time.</strong></p>
<p><strong>Therefore, number of chords required = \(^{ 21 }C_{ 2 } = \frac{ 21! }{ 2!\left ( 21\; -\; 2 \right )! } = \frac{ 21! }{ 2! \;19! } = \frac{ 21 \;\times \;20 }{ 2 }\) = 210</strong></p>


<p><strong><em>Question 4:In how many ways can a team of 3 boys and 3 girls be selected from 5 boys and
4 girls?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>So we have to select 3 boys from 5 boys and 3 girls from 4 girls</p>
<p>Total no of ways = \(  ^{ 5 }C_{ 3 }\times  ^{ 4 }C_{ 3 } = 40  \)</p>


<p><strong><em>Question 5:Find the number of ways of selecting 9 balls from 6 red balls, 5 white balls and 5
blue balls if each selection consists of 3 balls of each colour.</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Since we have to select 3 balls of each colour so total no of ways = \( ^{ 6 }C_{ 3 }\times ^{ 5 }C_{ 3 }\times ^{ 5 }C_{ 3 }  \)</p>
<p> = \(  (\frac{6\times 5\times 4}{3\times 2\times 1})\times  (\frac{5\times 4}{2\times 1})\times (\frac{5\times 4}{2\times 1})               \)</p>
<p> = \(  20\times  10\times 10 = 2000               \)</p>

<p><strong><em>Question 6:Determine the number of 5 card combinations out of a deck of 52 cards if there
is exactly one ace in each combination.</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>So the only restriction is out of 5 cards 1  should be ace ,other 4 can be any cards</p>
<p>There are 4 aces so we can select one ace out of them in \( ^{ 4 }C_{ 1 }        \)</p>
<p>Now there is a small attention you need to pay,you cant select from 51 cards now because it will contain aces too</p>
<p>So you can only noe select from 48 cards that will guarantee that you will not select one more ace</p>
<p>So total no of ways = \(  ^{ 4 }C_{ 1 }\times ^{ 48 }C_{ 4 }  =  778320 \)</p>



<p><strong><em>Question 7:In how many ways can one select a cricket team of eleven from 17 players in
which only 5 players can bowl if each cricket team of 11 must include exactly 4 bowlers?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>So out of 17 ,5 can bowl so we have to select 4 out of 5 and then we have to select from remaining 12,not 13 because doing so we might select one more bowler which is needed </p>
<p>so total no of ways = \(  ^{ 5 }C_{ 4 }\times ^{ 12 }C_{ 7 }  =   3960             \)          </p>
<p>           </p>


<p><strong><em>Question 8:A bag contains 5 black and 6 red balls. Determine the number of ways in which
2 black and 3 red balls can be selected?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>so we have to  select 2 out of 5 and 3 out of 6               </p>                 
<p>Total no of ways = \(  ^{ 5 }C_{ 2 }\times ^{ 6 }C_{ 3 }  = 200 \)</p>




<p><strong><em>Question 9:In how many ways can a student choose a programme of 5 courses if 9 courses
are available and 2 specific courses are compulsory for every student?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>So 2 choices are compulsory,we are left with 7 courses and we have to choose 5-2 = 3</p>
<p>Total number of ways = \( ^{ 7 }C_{ 3 } =   35                \)</p>





@stop