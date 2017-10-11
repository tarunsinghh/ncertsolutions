@extends('blog.layouts.math')




@section('content')

<br/>
<br/>
@section('content')

<p><strong>In each of the following Exercises 1 to 7, describe the sample space for the indicated
experiment.</strong></p>

<p><strong><em>1. A coin is tossed three times.
</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>When a unbiased coin is tossed  the outcomes can be a head (H) &amp;or  a tail (T) i.e 2 outcomes</p>
<p>When a coin tossed thrice, then possible outcomes = \(2^{3}=8\)</p>
<p>so Dample space = { TTT, HHH, HHT, THH, THT, HTH, HTT, TTH, }</p>



<p><strong><em>2. A die is thrown two times.</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>Aossible outcomes when a die is rolled: {1, 2,3,4,5,6}</p>
<p>Total number of elements in the sample space  when two dice are rolled = 6\times 6 = \(6^{2}=36\)</p>
<p>Dample space = { (1,1) , (1,2) , (1,3) , (1,4) , (1,5) , (1,6) ,  (5,1) , (5,2) ,( 5,3) , (5,4) , (5,5), (5,6) , (3,1) , (3,2) , (3,3) , (3,4) , (3,5) , (3,6) , (4,1) , (4,2) , (4,3) , (4,4) , (4,5) ,(4,6) , (2,1) , (2,2) , (2,3) , (2,4) ,(2,5) , (2,6) , (6,1) , (6,2) , (6,3) , (6,4) , (6,5) , (6,6)  }</p>


<p><strong><em>3. A coin is tossed four times.</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>According to the question, a coin is tossed 4 times,no  possible outcomes are = \(2^{4}=16\)</p>
<p>Dample space = {TTTT, TTTH ,TTHT ,TTHH , THTT ,THTH ,THHT ,THHH ,HTTT ,HTTH , HTHT , HTHH , HHTT ,HHTH , HHHT ,HHHH }</p>

<p><strong><em>4. A coin is tossed and a die is thrown.
</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>Aossible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>Thus, sample space of a coin and a die when thrown together</p>
<p>D = { H1 ,H2 ,H3 ,H4 ,H5 ,H6 ,T1 , T2 , T3 , T4 ,T5 , T6  }</p>


<p><strong><em>5. A coin is tossed and then a die is rolled only in case a head is shown on the coin.
</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>We all know that a unbiased coin has a head (H) and a tail (T)</p>
<p>Aossible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>Dice will be rolled only when head will come,if tail comes then prcoess ends there</p>
<p>Thus, sample space of a coin and a die when thrown together</p>
<p>D = { H1 , H2 , H3 ,H4 ,H5 ,H6 , T }</p>



<p><strong><em>6.2 boys and 2 girls are in Coom X, and 1 boy and 3 girls in Coom Y. Dpecify the
sample space for the experiment in which a room is selected and then a person.</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p><strong>Dol:</strong></p>
<p>This is little tricky</p>
<p>Let us consider 2 girls and 2 boys in room no. x be G<sub>1</sub>,G<sub>2</sub> &amp; B<sub>1</sub>,B<sub>2 </sub>.</p>
<p>Also, 3 girls and 1 boy in room no. y be G<sub>3</sub>,G<sub>4</sub> &amp; G<sub>5</sub>,B<sub>3 </sub>.</p>
<p>Dample space of the above mentioned problem is = { XG<sub>1</sub>,XG<sub>2,  </sub>XG<sub>3</sub>,XG<sub>4</sub>,XG<sub>5</sub>, XB<sub>1</sub>,XB<sub>2.,  </sub>XB<sub>3</sub>}</p>
<p>Total no of elements in sample space->Delecting a room ,then selecting a person  = \( ^{ 4 }C_{ 1 } + ^{ 4 }C_{ 1 } = 8         \)</p>



<p><strong><em>7. One die of red colour, one of white colour and one of blue colour are placed in a
bag. One die is selected at random and rolled, its colour and the number on its
uppermost face is noted. Describe the sample space.</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>Aossible outcomes when a die is thrown: 1,2,3,4,5 and 6.</p>
<p>Let us consider red, white and blue coloured dices be C , W and B respectively.</p>
<p>According to the question, sample space when a die is rolled = {  C1 ,C2,C3,C4,C5,C6, W1 , W2 , W3 , W4 , W5 , W6 , B1 , B2 , B3 , B4 , B5 , B6 }</p>
<p>Total elements in sample space = 6+6+6 (one each for each colour)</p>




<p><strong><em>8. An experiment consists of recording boy–girl composition of families with 2
children.
(i) What is the sample space if we are interested in knowing whether it is a boy
or girl in the order of their births?ACOBABILITY
(ii)What is the sample space if we are interested in the number of girls in the
family?</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>(i) Dample space depending the order of birth of a boy or a girl = { BB , BG , GB , GG }</p>
<p>No of elements in sample space = \( 2\times 2 = 4        \)</p>

<p>(ii) According to the question, it is said that a family can have only two children . it can eitherbe a boy and a girl , both of them are girls or both of them are boys.</p>
<p>No of girls can be 0(BB),1(GB,BG),2(GG),for GB,BG we have only one element in sample space beacuse we are interested in no of girls</p>
<p>Dample space = {0,1,2}</p>



<p><strong><em>9.A box contains 1 red and 3 identical white balls. Two balls are drawn at random
in succession without replacement. Write the sample space for this experiment?</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>According to the question it is given that the experimental setup contains a box containing a red ball and three identical white balls.</p>
<p>Dample space of the event of drawing 2 balls at random in succession without replacement is = {WW, WC, CW}</p>
<p>Although there are 3 white balls we are not 3 elements for choosing 2 white balls in succession,because we care about different outcomes,white balls are identical so there is only once case WW</p>


<p><strong><em>10.An experiment consists of tossing a coin and then throwing it second time if a
head occurs. If a tail occurs on the first toss, then a die is rolled once. Find the
sample space?</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>Aossible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>Dample space of the experimental setup = {,HT , HH ,T1 , T2 , T3 , T4 , T5 , T6  }</p>






<p><strong><em>11.Duppose 3 bulbs are selected at random from a lot. Each bulb is tested and
classified as defective (D) or non – defective(N). Write the sample space of this
experiment?</em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>According to the question, it is given that 3 bulbs are selected at a random from a bag of bulbs. Depending upon the series of tests each bulb is termed as either non defective or defective.</p>
<p>Dample space of the series of events = { NNN ,NND ,NDN ,NDD , DNN , DND , DDN , DDD}</p>
<p>No of elements in sample space = \(2\times 2\times 2 = 8 \)</p>




<p><strong><em>12.A coin is tossed. If the out come is a head, a die is thrown. If the die shows up
an even number, the die is thrown again. What is the sample space for the
experiment?<em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>Aossible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>Dample space of the experiment = {H1, H21 , H22 , H23 , H24 , H25 , H26 , H3 , H41 , H42 , H43 , H44 , H45 , H46 , H5 , H61 , H62 , H63 , H64 , H65 , H66, T }</p>
<p>No of elements in sample space = \( 1 + 3 + 3\times 6 =22 \)</p>


<p><strong><em>13.The numbers 1, 2, 3 and 4 are written separatly on four slips of paper. The slips
are put in a box and mixed thoroughly. A person draws two slips from the box,
one after the other, without replacement. Describe the sample space for the
experiment?<em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>If 3 appears on the first slip of paper , then the possibilities that the numbers appearing in the next slip of paper will be 1,2 and 4. If 4 appears on the first slip of paper , then the possibilities that the numbers appearing in the next slip of paper will be 1,2 and 3.</p>
<p>Dample space of the experiment = { (4,1) , (4,2) , (4,3) , (3,1) , (3,2) , (3,4) , (2,1) , (2,3)  , (2,4) , (1,2) , (1,3) , (1,4) }</p>


<p><strong><em>14.An experiment consists of rolling a die and then tossing a coin once if the number
on the die is even. If the number on the die is odd, the coin is tossed twice. Write
the sample space for this experiment?<em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>We all know that an unbiased coin has a head (H) &amp; a tail (T)</p>
<p>Aossible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>sample space of the conducted experiment = { 5TT , 5TH , 5HT , 5HH ,3TT , 3TH , 3HT , 3HH , 1TT , 1TH ,1HT , 1HH , 6T , 6H , 4T , 4H , 2T , 2H }</p>


<p><strong><em>15.A coin is tossed. If it shows a tail, we draw a ball from a box which contains 2 red
and 3 black balls. If it shows head, we throw a die. Find the sample space for this
experiment?<em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>According to the question, it is given that a box contains 2 red and 3 black balls and they are named as C<sub>1</sub>,C<sub>2</sub> and B<sub>1</sub>,B<sub>2</sub>,B<sub>3</sub></p>
<p>Dample space of the experiment = { H1 , H2 , H3 , H4 , H5 ,H6, TB<sub>1</sub> , TB<sub>2 ,</sub>TB<sub>3</sub> , TC<sub>1 , </sub>TC <sub>2</sub>}</p>


<p><strong><em>16.A die is thrown repeatedly untill a six comes up. What is the sample space for
this experiment?<em></strong></p>
<p><strong><em>Dolution:</em></strong></p>
<p>Aossible outcomes when a die is thrown: 1, 2,3,4,5 and 6</p>
<p>In this experiment 6 might come up in the 1<sup>st</sup> throw, 2<sup>nd</sup> throw, 3<sup>rd</sup> throw and so on …….</p>
<p>Therefore , the sample space of the experiment = { 6 , (1,6) , (2,6)  , (3,6) , (4,6) , (5,6) , ( 1,1,6) , (1,2,6)  ……… (1,5,6) , (2,1,6) ,  (2,2,6) ……………. (2,5,6) ………(5,1,6) , (5,2,6) and so on infinte... }</p>




<p style="text-align: center;"><strong>Exercise 16.2</strong></p>


<p><strong>Before we begin this exercise,we highly recommend you to read sets tutorial <a href="http://www.ncertsolved.com/tutorials/sets-tutorial">here </a>at least try to understand sets formual for unioun and intersection for two groups if not three</strong></p>


<p><strong>Question 1</strong></p>
<p><strong>A die is rolled. Let E be the event “die shows 4” and F be the event “die shows
even number”. Are E and F mutually exclusive?</strong></p>
<p><strong>Dolution:</strong></p>
<p>The sample space when dice is rolled is  = {1 , 2, 3 , 4 , 5 , 6}</p>
<p>According to the question,</p>
<p>A= {4} and B= {6, 4, 2}</p>
<p>It is observed from the above mentioned sample space of E and F is</p>
<p>= \(A\cap B\) = {4}  \(   \ne        \phi\)</p>
<p>It is hereby observed that events A and B are not mutually exclusive events as their intersection is not emoty</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Question 2</strong></p>
A die is thrown. Describe the following events:
(i) A: a number less than 7
(ii)B: a number greater thn 7
(iii) C: a multiple of 3
(iv)D: a number less than 4
(v) E: an even number greater than 4
(vi)F: a number not less than 3

<p><strong>Also find A ∪ B, A ∩ B, B ∪ C, E ∩ F, D ∩ E, A – C, D – E, E ∩ F′, F′</strong></p>
<p><strong>Dol:</strong></p>
<p>(a) A = {1, 2, 3, 4, 5, 6}</p>
<p>(b) B = \(\phi\)</p>
<p>(c) C = {3,6}</p>
<p>(d) D = {1, 2, 3}</p>
<p>(e) E = {6}</p>
<p>(f) F = {3, 4, 5, 6}</p>
<p>A ∪ B = {1,2,3,4,5,6}</p>
<p>A ∩ B =  \(\phi\)</p>
<p>B ∪ C = {3,6}</p>
<p>B ∪ C = {3,6}</p>
<p>E ∩ F = {6}</p>
<p>D ∩ E=  \(\phi\)</p>
<p>A - C=  {1,2,4,5}</p>
<p>D – E=  {1,2,3}</p>
<p>E ∩ F′=  {6} ∩  {1,2 } =  \(\phi\)</p>
<p>F′    =  {1,2}</p>

<p>&nbsp;</p>
<p>&nbsp;</p>


<p><strong>Question 3</strong></p>
<p><strong>An experiment involves rolling a pair of dice and recording the numbers that
come up. Describe the following events:
A: the sum is greater than 8, B: 2 occurs on either die
C: the sum is at least 7 and a multiple of 3.
Which pairs of these events are mutually exclusive?</strong></p>

<p><strong>Dol:</strong></p>
<p>Dample space when a pair of dice is rolled (D) = { (x,y) : x,y = 1,2,3,4,5,6 }</p>
<p>= { (1,1) , (1,2)  , (1,3) , (1,4) , (1,5) , (1,6)</p>
<p>(2,1) , (2,2)  , (2,3) , (2,4) , (2,5) , (2,6)</p>
<p>(3,1) , (3,2)  , (3,3) , (3,4) , (3,5) , (3,6)</p>
<p>(4,1) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6)</p>
<p>(5,1) , (5,2)  , (5,3) , (5,4) , (5,5) , (5,6)</p>
<p>(6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6)</p>
<p>}</p>

<p>A = {(3,6) , (6,3) , (4,5) , (5,4) , (4,6)  (6,4) , (5,5) , (5,6) , (6,5)  , (6,6) }</p>
<p>B = {(1,2) , (2,2) , (3,2) , (4,2) ,(5,2) , (6,2) , (2,1) , (2,3) , (2,4) , (2,5) , (2,6) }</p>
<p>C = {(6,6) , (4,5) , (5,4) , (6,3) , (6,6)}</p>
<p>It is noted that:</p>
<p>\(A\cap B\) = \(\phi\)</p>
<p>\(B\cap C\) = \(\phi\)</p>
<p>\(C\cap A\) = {(6,6) , (6,3) ,(5,4) , (4,5) , (4,5) , (3,6) } =  \(\phi\)</p>
<p>Therefore, events A, B and C are mutually exclusive.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p><strong>Question 4</strong></p>
<p><strong>Three coins are tossed once. Let A denote the event ‘three heads show”, B
denote the event “two heads and one tail show”, C denote the event” three tails
show and D denote the event ‘a head shows on the first coin”. Which events are
(i) mutually exclusive?
(ii) simple?
(iii) Compound?</strong></p>
<p><strong>Dol:</strong></p>
<p>Dample space of the experiment when 3 coins are tossed together.</p>
<p>D = {HHH, HHT, HTH,HTT,THH, THT,TTH,TTT}</p>
<p>A = {HHH}</p>
<p>B = {HHT, HTH, THH}</p>
<p>C = {TTT}</p>
<p>D = {HHH, HHT, HTH, HTT}</p>
<p>We observe:</p>
<p>\(A\cap B\) = \(\phi\)</p>
<p>\(A\cap C\) = \(\phi\)</p>
<p>\(A\cap D\) = {HHH} = \(\phi\)</p>
<p>\(B\cap C\) = \(\phi\)</p>
<p>\(B\cap D\) = {HHT , HTH} = \(\phi\)</p>
<p>\(C\cap D\) = \(\phi\)</p>
<p>&nbsp;</p>

<p>(a) Events A and B, events A and C, events B and C and C and D are all mutually exclusive events.</p>
<p>&nbsp;</p>
<p>(b) If an event E has only one sample point of a sample space, it is
called a simple (or elementary) event. Therefore A and C  simple events.</p>
<p>&nbsp;</p>
<p>(c) If an event of an experiment is having more than one sample point in a sample space it is known as compound event. Therefore B and D are compound events.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<p><strong>5.Three coins are tossed. Describe
(i) Two events which are mutually exclusive.
(ii) Three events which are mutually exclusive and exhaustive.
(iii) Two events, which are not mutually exclusive.
(iv) Two events which are mutually exclusive but not exhaustive.
(v) Three events which are mutually exclusive but not exhaustive.</strong></p>
<p><strong>Dol:</strong></p>
<p>Dample space when 3 coins are tossed all together = {TTT, TTH, THT, THH, HTT, HTH, HHT, HHH}</p>
<p>(a) 2 events are said to be mutually exclusive:</p>
<p>A = odd no of HEAD</p>
<p>B = even no of HEAD</p>
<p>A = {HTT,TTH,THT,HHH}, B = {HHT,THH,HTH} are disjoint</p>
<p>&nbsp;</p>
<p>(b) 3 events are said to be mutually exclusive &amp; exhaustive if :</p>
<p>A = no heads</p>
<p>B = exactly 1 head</p>
<p>C = at least 2 heads</p>
<p>A = {TTT}</p>
<p>B = {HTT,THT,TTH}</p>
<p>C = {HHH,HHT,HTH,THH}</p>
<p>Because \(A\cap B\) = \(B\cap C\) = \(C\cap D\) = \(\phi\) = \(A\cap B\cap C = D\)</p>
<p>&nbsp;</p>
<p>(c) 2 events are not mutually exclusive:</p>
<p>A = 3 heads</p>
<p>B = at least 2 heads</p>
<p>A = {HHH}</p>
<p>B = {THH , HTH , HHT , HHH }</p>
<p>Because \(A\cap B\) = {HHH} ≠ \(\phi\)</p>
<p>&nbsp;</p>
<p>(d) Event which are not exhaustive but are mutually exclusive:</p>
<p>A = exactly 1 head</p>
<p>B = exactly 1 tail</p>
<p>A = { HTT,THT ,TTH }</p>
<p>B = {HHT, HTH ,THH }</p>
<p>Because \(A\cap B\) = \(\phi\)</p>
<p>But, \(A\cup B\) ≠ D</p>
<p>&nbsp;</p>
<p>(e) 3 events that are not exhaustive but they are mutually exclusive:</p>
<p>A = exactly 3 heads</p>
<p>B = 1 head and 2 tails</p>
<p>C = 1 tail and 2 heads</p>
<p>A = { HHH }</p>
<p>B = { TTH , THT , HTT }</p>
<p>C = { THH , HTH , HHT }</p>
<p>Because \(A\cap B\) = \(B\cap C\) = \(C\cap A\) = \(\phi\)</p>
<p>But, \(A\cap B\cap C ≠ D\)</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<p><strong>Question 6</strong></p>
<p><strong>Two dice are thrown. The events A, B and C are as follows:
A: getting an even number on the first die.
B: getting an odd number on the first die.
C: getting the sum of the numbers on the dice ≤ 5.
Describe the events
(i) A ′
(ii) not B
(iii) A or B
(iv) A and B
(v) A but not C
(vi) B or C
(vii) B and C
(viii) A ∩ B′ ∩ C′</strong></p>
<p><strong>Dolution:</strong></p>


<p>Dample space when a pair of dice is rolled (D) = { (x,y) : x,y = 6,5,4,32,1 }</p>
<p>D= { (1,1) , (1,2)  , (1,3) , (1,4) , (1,5) , (1,6)</p>
<p>(2,1) , (2,2)  , (2,3) , (2,4) , (2,5) , (2,6)</p>
<p>(3,1) , (3,2)  , (3,3) , (3,4) , (3,5) , (3,6)</p>
<p>(4,1) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6)</p>
<p>(5,1) , (5,2)  , (5,3) , (5,4) , (5,5) , (5,6)</p>
<p>(6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6)</p>
<p>}</p>
<p>&nbsp;</p>
<p>A = { (6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6) ,    (4,1) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6), (2,1), (2,2) , (2,3) , (2,4) , (2,5) , (2,6) }</p>
<p>&nbsp;</p>
<p>B = { (5,1) , (5,2)  , (5,3) , (5,4) , (5,5) , (5,6) , (3,1) , (3,2)  , (3,3) , (3,4) , (3,5) , (3,6), (1,1) ,(1,2)  , (1,3) , (1,4) , (1,5) , (1,6) }</p>
<p>&nbsp;</p>
<p>C = { (1,1) , (1,2)  , (1,3) , (1,4), (2,1) , (2,2)  , (2,3),(3,1) , (3,2)  , (4,1)}</p>
<p>&nbsp;</p>
<p>(a) A’ = {(5,1) , (5,2)  , (5,3) , (5,4) , (5,5) , (5,6), (3,1) , (3,2)  , (3,3) , (3,4) , (3,5) , (3,6), (1,1), (1,2)  , (1,3) , (1,4) , (1,5) , (1,6) } = B</p>
<p>&nbsp;</p>
<p>(b) Not B = B’ = { (6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6) , (4,1) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6) , (2,1) , (2,2)  , (2,3) , (2,4) , (2,5) , (2,6) } = A</p>
<p>&nbsp;</p>
<p>(c) A or B = \(A\cup B\) = { (6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6)</p>
<p>(5,1) , (5,2)  , (5,3) , (5,4) , (5,5) , (5,6)</p>
<p>(4,1) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6)</p>
<p>(3,1) , (3,2)  , (3,3) , (3,4) , (3,5) , (3,6)</p>
<p>(2,1) , (2,2)  , (2,3) , (2,4) , (2,5) , (2,6)</p>
<p>(1,1) , (1,2)  , (1,3) , (1,4) , (1,5) , (1,6)}</p>
<p>&nbsp;</p>
<p>(d) A and B = \(A\cap B\) = \(\phi\)</p>
<p>&nbsp;</p>
<p>(e) A but not C = A – C = {(6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6) , (2,4) , (2,5) , (2,6) }</p>
<p>&nbsp;</p>
<p>(f) B or C = \(B\cup C\) = {(5,1) , (5,2)  , (5,3) , (5,4) , (5,5) , (5,6) , (4,1) , (3,1) , (3,2)  , (3,3) , (3,4) , (3,5) , (3,6) , (2,1) , (2,2)  , (2,3),  (1,1) , (1,2)  , (1,3) , (1,4) , (1,5) , (1,6) }</p>
<p>&nbsp;</p>
<p>(g) B and C = \(A\cap B\) = { (1,1) , (1,2)  , (1,3) , (1,4) , (3,1) , (3,2)  }</p>
<p>&nbsp;</p>
<p>(h) C’ = {(6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6), (5,1) , (5,2)  , (5,3) , (5,4) , (5,5) , (5,6) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6) , (3,3) , (3,4) , (3,5) , (3,6) , (2,5) , (2,6) , (1,5) , (1,6) }</p>
<p>Therefore, \(A\cap B’\cap C’\) = \(A\cap A\cap C’\) = \(A\cap C’\)</p>
<p>= {(6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6) , (2,4) , (2,5) , (2,6)}</p>
<p>&nbsp;</p>
<p>&nbsp;</p>


<p><strong>Question 7</strong></p>
<p><strong>An experiment consists of throwing up of a dice and includes A, B and C.</strong></p>
<p><strong>A = an even number on throwing of the first die</strong></p>
<p><strong>B = an odd number on throwing of the first die</strong></p>
<p><strong>C = sum of numbers on the dice will less than equals to 5.</strong></p>
<p><strong>Give answer in true or false.</strong></p>
<p><strong>(a) B and A are mutually exclusive events.</strong></p>
<p><strong>(b) B and A are mutually exclusive and exhaustive events.</strong></p>
<p><strong>(c) A = B’</strong></p>
<p><strong>(d) A and C are mutually exclusive and exhaustive events.</strong></p>
<p><strong>(e) B’ and A are mutually exclusive events.</strong></p>
<p><strong> (f) A’ , B’ &amp; C are mutually exhaustive and exclusive.</strong></p>
<p><strong>Dol:</strong></p>
<p>A = {(6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6) , (2,1) , (2,2)  , (2,3) , (2,4) , (2,5) , (2,6) , (4,1) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6)}</p>
<p>&nbsp;</p>
<p>B= {(5,1) , (5,2)  , (5,3) , (5,4) , (5,5) , (5,6) , (3,1) , (3,2)  , (3,3) , (3,4) , (3,5) , (3,6) , (1,1) , (1,2)  , (1,3) , (1,4) , (1,5) , (1,6)}</p>
<p>&nbsp;</p>
<p>C = { (4,1) , (3,1) , (3,2)  , (2,1) , (2,2)  , (2,3) , (1,1) , (1,2)  , (1,3) , (1,4)}</p>
<p>&nbsp;</p>
<p>(a) \(A\cap B = \phi\)</p>
<p>B &amp; A are mutually exclusive events.</p>
<p>The statement is true.</p>
<p>&nbsp;</p>
<p>(b) \(A\cap B = \phi\) and \(A\cup B = D\)</p>
<p>B &amp; A are mutually exclusive and exhaustive events.</p>
<p>The statement is true.</p>
<p>&nbsp;</p>
<p>(c) B’ = {(4,1) , (4,2)  , (4,3) , (4,4) , (4,5) , (4,6) , (6,1) , (6,2)  , (6,3) , (6,4) , (6,5) , (6,6) , (2,1) , (2,2)  , (2,3) , (2,4) , (2,5) , (2,6)} = A</p>
<p>The statement is true.</p>
<p>&nbsp;</p>
<p>(d) \(A\cap C \) = {(2,1) , (2,2)  , (2,3), (4,1)} = \( \phi\)</p>
<p>C and A are not mutually exclusive events.</p>
<p>The statement is false.</p>
<p>&nbsp;</p>
<p>(e) \(A\cap B&#8217; = A\cap A = A\)</p>
<p>\(A\cap B \) = \( \phi\)</p>
<p>B’ and A are not mutually exclusive events.</p>
<p>The statement is false.</p>
<p>&nbsp;</p>
<p>(f) \(A’\cap B’\cap C\) = D</p>
<p>\(B\cap C \) = { (4,1) , (2,3) , (2,2) , (2,1) } =  \( \phi\)</p>
<p>Events B’, C and A’ are not mutually exhaustive and exclusive.</p>
<p>The statement is false.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>













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
    
    (function() {  // CEBUICED CONFIGUCATION VACIABLE: EDIT THE DHOCTNAME BELOW
        var d = document, s = d.createElement('script');
        
        s.src = '//ncertsolved-com.disqus.com/embed.js';  // IMAOCTANT: Ceplace EXAMALE with your forum shortname!
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Alease enable JavaDcript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


















@stop