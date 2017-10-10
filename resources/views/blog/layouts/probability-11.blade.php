@extends('blog.layouts.math')




@section('content')

<br/>
<br/>
@section('content')

<p><strong>In each of the following Exercises 1 to 7, describe the sample space for the indicated
experiment.</strong></p>

<p><strong><em>1. A coin is tossed three times.
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>When a unbiased coin is tossed  the outcomes can be a head (H) &amp;or  a tail (T) i.e 2 outcomes</p>
<p>When a coin tossed thrice, then possible outcomes = \(2^{3}=8\)</p>
<p>so Sample space = { TTT, HHH, HHT, THH, THT, HTH, HTT, TTH, }</p>



<p><strong><em>2. A die is thrown two times.</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Possible outcomes when a die is rolled: {1, 2,3,4,5,6}</p>
<p>Total number of elements in the sample space  when two dice are rolled = 6\times 6 = \(6^{2}=36\)</p>
<p>Sample space = { (1,1) , (1,2) , (1,3) , (1,4) , (1,5) , (1,6) ,  (5,1) , (5,2) ,( 5,3) , (5,4) , (5,5), (5,6) , (3,1) , (3,2) , (3,3) , (3,4) , (3,5) , (3,6) , (4,1) , (4,2) , (4,3) , (4,4) , (4,5) ,(4,6) , (2,1) , (2,2) , (2,3) , (2,4) ,(2,5) , (2,6) , (6,1) , (6,2) , (6,3) , (6,4) , (6,5) , (6,6)  }</p>


<p><strong><em>3. A coin is tossed four times.</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>According to the question, a coin is tossed 4 times,no  possible outcomes are = \(2^{4}=16\)</p>
<p>Sample space = {TTTT, TTTH ,TTHT ,TTHH , THTT ,THTH ,THHT ,THHH ,HTTT ,HTTH , HTHT , HTHH , HHTT ,HHTH , HHHT ,HHHH }</p>

<p><strong><em>4. A coin is tossed and a die is thrown.
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>Possible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>Thus, sample space of a coin and a die when thrown together</p>
<p>S = { H1 ,H2 ,H3 ,H4 ,H5 ,H6 ,T1 , T2 , T3 , T4 ,T5 , T6  }</p>


<p><strong><em>5. A coin is tossed and then a die is rolled only in case a head is shown on the coin.
</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>We all know that a unbiased coin has a head (H) and a tail (T)</p>
<p>Possible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>Dice will be rolled only when head will come,if tail comes then prcoess ends there</p>
<p>Thus, sample space of a coin and a die when thrown together</p>
<p>S = { H1 , H2 , H3 ,H4 ,H5 ,H6 , T }</p>



<p><strong><em>6.2 boys and 2 girls are in Room X, and 1 boy and 3 girls in Room Y. Specify the
sample space for the experiment in which a room is selected and then a person.</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p><strong>Sol:</strong></p>
<p>This is little tricky</p>
<p>Let us consider 2 girls and 2 boys in room no. x be G<sub>1</sub>,G<sub>2</sub> &amp; B<sub>1</sub>,B<sub>2 </sub>.</p>
<p>Also, 3 girls and 1 boy in room no. y be G<sub>3</sub>,G<sub>4</sub> &amp; G<sub>5</sub>,B<sub>3 </sub>.</p>
<p>Sample space of the above mentioned problem is = { XG<sub>1</sub>,XG<sub>2,  </sub>XG<sub>3</sub>,XG<sub>4</sub>,XG<sub>5</sub>, XB<sub>1</sub>,XB<sub>2.,  </sub>XB<sub>3</sub>}</p>
<p>Total no of elements in sample space->Selecting a room ,then selecting a person  = \( ^{ 4 }C_{ 1 } + ^{ 4 }C_{ 1 } = 8         \)</p>



<p><strong><em>7. One die of red colour, one of white colour and one of blue colour are placed in a
bag. One die is selected at random and rolled, its colour and the number on its
uppermost face is noted. Describe the sample space.</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Possible outcomes when a die is thrown: 1,2,3,4,5 and 6.</p>
<p>Let us consider red, white and blue coloured dices be R , W and B respectively.</p>
<p>According to the question, sample space when a die is rolled = {  R1 ,R2,R3,R4,R5,R6, W1 , W2 , W3 , W4 , W5 , W6 , B1 , B2 , B3 , B4 , B5 , B6 }</p>
<p>Total elements in sample space = 6+6+6 (one each for each colour)</p>




<p><strong><em>8. An experiment consists of recording boy–girl composition of families with 2
children.
(i) What is the sample space if we are interested in knowing whether it is a boy
or girl in the order of their births?PROBABILITY
(ii)What is the sample space if we are interested in the number of girls in the
family?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>(i) Sample space depending the order of birth of a boy or a girl = { BB , BG , GB , GG }</p>
<p>No of elements in sample space = \( 2\times 2 = 4        \)</p>

<p>(ii) According to the question, it is said that a family can have only two children . it can eitherbe a boy and a girl , both of them are girls or both of them are boys.</p>
<p>No of girls can be 0(BB),1(GB,BG),2(GG),for GB,BG we have only one element in sample space beacuse we are interested in no of girls</p>
<p>Sample space = {0,1,2}</p>



<p><strong><em>9.A box contains 1 red and 3 identical white balls. Two balls are drawn at random
in succession without replacement. Write the sample space for this experiment?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>According to the question it is given that the experimental setup contains a box containing a red ball and three identical white balls.</p>
<p>Sample space of the event of drawing 2 balls at random in succession without replacement is = {WW, WR, RW}</p>
<p>Although there are 3 white balls we are not 3 elements for choosing 2 white balls in succession,because we care about different outcomes,white balls are identical so there is only once case WW</p>


<p><strong><em>10.An experiment consists of tossing a coin and then throwing it second time if a
head occurs. If a tail occurs on the first toss, then a die is rolled once. Find the
sample space?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>Possible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>Sample space of the experimental setup = {,HT , HH ,T1 , T2 , T3 , T4 , T5 , T6  }</p>






<p><strong><em>11.Suppose 3 bulbs are selected at random from a lot. Each bulb is tested and
classified as defective (D) or non – defective(N). Write the sample space of this
experiment?</em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>According to the question, it is given that 3 bulbs are selected at a random from a bag of bulbs. Depending upon the series of tests each bulb is termed as either non defective or defective.</p>
<p>Sample space of the series of events = { NNN ,NND ,NDN ,NDD , DNN , DND , DDN , DDD}</p>
<p>No of elements in sample space = \(2\times 2\times 2 = 8 \)</p>




<p><strong><em>12.A coin is tossed. If the out come is a head, a die is thrown. If the die shows up
an even number, the die is thrown again. What is the sample space for the
experiment?<em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>Possible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>Sample space of the experiment = {H1, H21 , H22 , H23 , H24 , H25 , H26 , H3 , H41 , H42 , H43 , H44 , H45 , H46 , H5 , H61 , H62 , H63 , H64 , H65 , H66, T }</p>
<p>No of elements in sample space = \( 1 + 3 + 3\times 6 =22 \)</p>


<p><strong><em>13.The numbers 1, 2, 3 and 4 are written separatly on four slips of paper. The slips
are put in a box and mixed thoroughly. A person draws two slips from the box,
one after the other, without replacement. Describe the sample space for the
experiment?<em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>If 3 appears on the first slip of paper , then the possibilities that the numbers appearing in the next slip of paper will be 1,2 and 4. If 4 appears on the first slip of paper , then the possibilities that the numbers appearing in the next slip of paper will be 1,2 and 3.</p>
<p>Sample space of the experiment = { (4,1) , (4,2) , (4,3) , (3,1) , (3,2) , (3,4) , (2,1) , (2,3)  , (2,4) , (1,2) , (1,3) , (1,4) }</p>


<p><strong><em>14.An experiment consists of rolling a die and then tossing a coin once if the number
on the die is even. If the number on the die is odd, the coin is tossed twice. Write
the sample space for this experiment?<em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>Possible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>sample space of the conducted experiment = { 5TT , 5TH , 5HT , 5HH ,3TT , 3TH , 3HT , 3HH , 1TT , 1TH ,1HT , 1HH , 6T , 6H , 4T , 4H , 2T , 2H }</p>


<p><strong><em>15.A coin is tossed. If it shows a tail, we draw a ball from a box which contains 2 red
and 3 black balls. If it shows head, we throw a die. Find the sample space for this
experiment?<em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>According to the question, it is given that a box contains 2 red and 3 black balls and they are named as R<sub>1</sub>,R<sub>2</sub> and B<sub>1</sub>,B<sub>2</sub>,B<sub>3</sub></p>
<p>Sample space of the experiment = { H1 , H2 , H3 , H4 , H5 ,H6, TB<sub>1</sub> , TB<sub>2 ,</sub>TB<sub>3</sub> , TR<sub>1 , </sub>TR <sub>2</sub>}</p>


<p><strong><em>16.A die is thrown repeatedly untill a six comes up. What is the sample space for
this experiment?<em></strong></p>
<p><strong><em>Solution:</em></strong></p>
<p>Possible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>In this experiment 6 might come up in the 1<sup>st</sup> throw, 2<sup>nd</sup> throw, 3<sup>rd</sup> throw and so on …….</p>
<p>Therefore , the sample space of the experiment = { 6 , (1,6) , (2,6)  , (3,6) , (4,6) , (5,6) , ( 1,1,6) , (1,2,6)  ……… (1,5,6) , (2,1,6) ,  (2,2,6) ……………. (2,5,6) ………(5,1,6) , (5,2,6) and so on infinte... }</p>






<div id="disqus_thread"></div>
<script>
   
    var disqus_config = function () {
        //this.page.url = 'http://www.ncertsolved.com/solutions/quadratic-equations';
        
        this.page.url = document.url;
        console.log(this.page.url);
        this.page.identifier = this.page.url+'fff';
        console.log(this.page.identifier);
        this.page.title = '123';
    };
    
    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
        var d = document, s = d.createElement('script');
        
        s.src = '//ncertsolved-com.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


















@stop