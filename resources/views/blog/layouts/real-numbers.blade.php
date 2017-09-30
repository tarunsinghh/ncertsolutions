@extends('blog.layouts.math')

@section('content')
<br/>
<br/>
<p  style= "color:red";><strong>If you are seeing MATH PROCESSING ERROR,try ctrl + F5(hard refresh),if that doesnt solve ,clear the cache of your browser</strong></p>
<p><strong><em>EXERCISE 1.1 </p>
<p>Question-1 </p>
<p>Use Euclid’s division algorithm to find the HCF of:</p>
<p>i)135 and 225</p>
<p>ii)196 and 38220</p>
<p>iii)867 and 225</p>
<p>Solution: </p>
<!--<p>If you dont know how Euclidean algorithm works to find the the H.C.F of two integers</p>
<p>we will talk only about positive integers,We recommend you highly read this tutorial on Euclid's algorithm to find H.C.F</p>-->
<p>i)</em></strong></p> 
<p>Using Euclid's algorithm :</p>
<p>225=135\(\times\)1+90</p>
<p>135=90\(\times\)1+45</p>
<p>90=45\(\times\)2+0</p>
<p>Now we can easily see that 45 divides 90,so H.C.F of (90,45) = 45</p>
<p>Going up ,135=1\(\times\)90+45 </p>
<p>Since 45 divides 90 and obviously 45 divides 45 ,therefore 45 also divides 135</p>
<p>Going up again 225=1\(\times\)135+90 ,since 135 is divisible by 45 and 90 also divisble by 45</p>
<p>Hence it follows that 45 also divides 225</p>
<p><strong><em>This is the most important step to understand.</em></strong></p>
<p>Please give some to it ,if you dont get it in the first time</p>
<p>so H.C.F of (135,225) is 45.</p>
<p>&nbsp;</p>
<p><strong><em>ii)</em></strong></p>
<p> We start with the larger number i.e 38220</p>
<p>By Euclid’s division algorithm,we have</p>
<p>38220=196\(\times\)195+0</p>
<p>196=196\(\times\)1+0</p>
<p>Hence , HCF(196,38220)=196</p>
<p>The reasoning is same as in previous part</p>
<p>Therefore,the HCF of 196 and 38220 is 196</p>
<p>&nbsp;</p>
<p><strong><em>iii)</em></strong></p>
<p> We start with the larger number i.e 867</p>
<p>By Euclid’s division algorithm,we have</p>
<p>867=225\(\times\)3+102</p>
<p>225=102\(\times\)2+51</p>
<p>102=51\(\times\)2+0</p>
<p>Hence, HCF(867,225)=HCF(225,102)=HCF(102,51)=51</p>
<p>Therefore,the HCF of   867 and 225 is 51</p>
<p>&nbsp;</p>


<p><strong><em>Question 2:Show that any positive odd integer is of the form 6q+1,6q+3 &amp; 6q+5</p>
<p>where q is some integer.</em></strong></p>
<p><strong><em>Solution :</em></strong></p>

<p>Using Euclid's algorithm,For any two positive integers a and b</p>
<p>x = bq + r (0<= r < b )</p>
<p>Using this any positive integer(odd or even)  with b = 6 x can be expressed as:</p>
<p>6q , 6q + 2, 6q + 3, 6q + 4,6q + 5</p>
<p>Now using basic divisibilty algorithm ,any integer of the form 6q is divisible by 2</p>
<p>Since all positive integers are either odd or even</p>
<p>Hence 6q,6q + 2,6q + 4  are even numbers ,rest remaining 6q + 1,6q + 3,6q + 5 are odd numbers</p>
<p>Hence any positive odd integer can be expressed as  6q + 1,6q + 3,6q + 5</p>
<p>For your own understanding take any number,for example 45</p>
<p>Now \(45 = 6\times 7 + 3 \),which is of the form 6q+ 3.</p>
<p>Now \(47 = 6\times 7 + 5 \),which is of the form 6q+ 5.</p>
<p>Now \(43 = 6\times 7 + 1 \),which is of the form 6q+ 1.</p>
<p>Now \(42 = 6\times 7 \),which is of the form 6q.</p>
<p>Now \(44 = 6\times 7 + 2 \),which is of the form 6q + 2.</p>
<p>Now \(46 = 6\times 7 + 4 \),which is of the form 6q + 4.</p>

 
<p><strong><em>Question 3: </p>
<p>An army contingent of 616 members is to march behind an army band of 32 members in a parade. The two groups are to march in the same number of columns. What is the maximum number of columns in which they can march?</em></strong></p>
<p>&nbsp;</p>
<p><strong><em>Solution :</em></strong></p>
<p>Now this is the type of Question some students just byheart that they have to find H.C.F in these type of Questions</p>
<p>Lets take a minute to understand why we need to find H.C.F</p>
<p>There are two groups one has 616 members and other has 32 members</p>
<p>Now we have to group these members into columns and we have to maximise the no of columns</p>
<p>lets say we make 2 columns ,so group pf 616 members will have 308 in each column</p>
<p>The group of 32 members will have 2 columns each will have 16 members</p>
<p>If we try to divide into 3 columns we see 616 members cant be divided<p>
<p>because its self explanatory that all the column will have equal members</p>
<p>Its a miltary parade afterall.</p>
<p>Now by this time you must have realised</p>
<p>We need to find a number which will divide both 616 and 32 and that number should be the maximum of all such numbers</p>
<p>which is called H.C.F</p>
<p>Now the rest is simple</p>
<p>Using Euclid's algorithm for division<p>
<p>616=32\(\times\)19+8</p>
<p><strong>Note: Dont write 616 =  19\(\times\)32+8
Its the same thing but in x = bq + r ,q is the quotient and x and b are two numbers(NCERT NOTATION)</strong>
</p>

<p>32=8\(\times\)4+0</p>
<p>So , HCF of 616 and 32 is 8</p>
<p>Hence ,the maximum number of columns in which they can march is 8.</p>
<p>Also note that the number of persons in a column for 32 and 616 will be different</p>
<p>For group of 32,each column will have 4 members and for 616 ,each column will have 616/8 = 77.</p>

<p><strong><em>Question 4:</p>
<p>Use Euclid’s Division lemma to show that the square of any positive integer is either of the form 3m, 3m+1 for some integer m.</em></strong></p>

<p><strong><em>Solution :</em></strong></p>
<p>According to Euclid Algorithm:</p>
<p> x=bq+r …..(1)</p>
<p>Substituting  b=3,what we are actually doing is any number is either divisible by 3 or it will leave a remainder of 1 or 2 on dividing by 3</p>
<p>We get,x=3q+r (where,\(0\leq r&lt; 3\)</p>
<p>i.e r=0,1,2 )</p>

<p>When r=0 ,x=3q…….(1)</p>
<p>r=1 ,x=3q+1.....(2)</p>
<p>r=2 ,x=3q+2.....(3)</p>

<p>Since the Question is about expressing square of any positive integer</p>
<p>So, Squaring \(eq^{n}\)(1),(2) and (3)</p>
<p>We get,</p>
<p>From \(eq^{n}\) (1),</p>
<p>\(x^{2}=9q^{2}\)
\(x^{2}=3\times 3q^{2}\)</p>
<p>\(x^{2}=3\times m\) (where,\(m=3q^{2}\))</p>

<p>From \(eq^{n}\) (2),</p>

<p>\(x^{2}=(3q+1)^{2}\)</p>

<p>\(=9q^{2}+1+6q\)</p>

<p>\(=9q^{2}+6q+1\)</p>

<p>\(=3(3q^{2}+2q)+1\)</p>

<p>\(=3m+1\) (where,m=\(3q^{2}+2q\))</p>

<p>From \(eq^{n}\) (3),</p>
<p>\(x^{2}=(3q+2)^{2}\)</p>

<p>\(=9q^{2}+4+12q\)</p>

<p>\(=9q^{2}+12q+3+1\)</p>

<p>\(=3(3q^{2}+4q+1)+1\)</p>

<p>\(=3m+1\) (where,m=\(3q^{2}+4q+1\))</p>

<p>Hence, any positive integer is either of the form 3m,3m+1 for some integer m.</p>
<p>For your own understanding:</p>
<p>The sqaure of any number is either of the form 3m or it will be of the form 3m+1,that m will be different for different numbers</p>
<p>Also a student still may have one doubt in his mind that how will I know I have to express the number</p>
<p>in the form 3q ,3q + 1,3q +2 and its a genuine doubt</p>
<p>The answer is you can take any number ,lets say we take 4,so the positive integer can be expressed as</p>
<p>x = 4q ,x = 4q + 1,x = 4q + 2, x = 4q +3.
Taking sqares on both sides for each</p>
<p>\(x^{2} = 16q^{2}\)</p>
<p>\(x^{2} = 16q^{2} + 1 + 8q\)</p>
<p>\(x^{2} = 16q^{2} + 4 + 16q\)</p>
<p>\(x^{2} = 16q^{2} + 9 + 24q\)</p>
<p>Lets try to rewrite them into the form \(3\times some integer\)  or \(3\times some integer + 1 \)</p>
<p>\(x^{2} = 3\times ( 16/3\times q^{2})\) </p> 
<p>if q is 3 or 6 or 9 then \(16/3\times q^{2}\) will be a integer</p>


<p>Take for example 8 = 4\(\times\)2</p>
<p>Squaring both sides,64 = 3\(\times\)21 + 1 which is of the form 3m + 1</p>

<p>Take for example 12 = 4\(\times\)3</p>
<p>Squaring both sides,144 = 3\(\times\)48 which is of the form 3m</p>


<p>Take for example 16 = 4\(\times\)4</p>
<p>Squaring both sides,256 = 3\(\times\)85 + 1 which is of the form 3m + 1</p>

<p>Take for example 20 = 4\(\times\)5</p>
<p>Squaring both sides,400 = 3\(\times\)133 + 1 which is of the form 3m + 1</p>

<p><strong><em>Note: Both 16 and 20 are of the form 4*q but 256 can be written in the form of 3m and 400 can be written in the form 3m + 1 which depends on what q is so  we have to consider sub cases based  on q when we write in the factor of 4,this thing is easier to show when we write in the form of 3q,3q + 1 ,3q + 2,since we can take out easily in the factor of 3 and we dont have to make sub cases based in the value of q</em></strong></p>

<p>when x is of the form 3q,\(x^{2}\) can be written in the form of 3m where m = \(3q^{2}\)  irrespective of what q is </p>

<p>when x is of the form  3q + 1 ,\(x^{2}\) can be written in the form of 3m + 1 where m = \(3q^{2} + 2q\)   irrespective of what q is</p>

<p>when x is of the form  3q + 2 ,\(x^{2}\) can be written in the form of 3m + 1 where \(m = 3q^{2} + 4q + 1\) irrespective of what q is</p>


<p><strong><em>Question 4:</p>
<p>Use Euclid’s Division lemma to show that the cube of any positive integer is either of the form 9m, 9m+1,9m + 8 for some integer m.</p>
<p>Solution 4:</em></strong></p>
<p>By Euclid division algorithm</p>
<p>For any positive integer x and b </p>
<p>x = bq + r (0 <=r < b)</p>
<p>Put b =3 or alternatively any number can be written as 3q ,3q,3q + 1 </p>
<p>as it is either divisible by 3 or leaves a remainder of 1 or 2 on dividing by 3</p>
<p>Possible values of x can be </p>
<p>x = 3q        ...... (1)</p>
<p>x = 3q + 1    ...... (2)</p>
<p>x = 3q + 2    ...... (3)</p>
<p>Taking cube on both sides of equation 1</p>
<p>\(x^{3} = 9q^{3} \)</p>
<p>\(x^{3} = 9 \times 3q^{3} \)</p>
<p>\(x^{3} = 9 \times m \),where m = \(9q^{3}\)</p>
<p>Taking cube on both sides of equation 2</p>
<p>\(x^{3} = 27q^{3} + 1 + 27q^{2} + 9q \)</p>
<p>\(x^{3} = 9 \times (3q^{3} + 3q^{2} + q) +  1 \)</p>
<p>\(x^{3} = 9 \times m + 1\) ,where m = \(3q^{3} + 3q^{2} + q \)</p>
<p>Taking cube on both sides of equation 3</p>
<p>\(x^{3} = 27q^{3} + 8 + 54q^{2} + 36q \)</p>
<p>\(x^{3} = 9 \times (9q^{3} + 6q^{2} + 4q) +  8 \)</p>
<p>\(x^{3} = 9 \times m + 1\) ,where m = \(9q^{3} + 6q^{2} + 4q \)</p>

<p>Hence prooved.</p>
<p><strong><em>Note:Like previous Question ,we can express the number into other form also we can express like
x = 5q,x = 5q + 1....so on <br/>,But the only challenge will remain is to show that when m is an integer,for some values of q
we can write it in the form of 9m,<br/>for other values of q we can write it in the form of 9m + 1,when we write the number in the form of 3q,3q + 1,3q + 2,its easier to show m is an integer irrespective of what q is</em></strong></p>

<p><strong><em>EXERCISE 1.2<br/></p>
<p>Question-1</p>
<p>Express each number as a product of its prime factors:</p>
<p>i)140</p>
<p>ii)156</p>
<p>iii)3825</p>
<p>iv)5005</p>
<p>v)7429</p>
<p>Solution :</em></strong></p>
<p>i) 140</p>
<p>LCM of 140 =  \(2\times 2\times 5\times 7\times 1\)</p>
<p>Hence,  \(140=2\times 2\times 5\times 7\times 1\)</p>
<p>ii) 156</p>
<p>LCM of 156 = \(2\times 2\times 3\times 13\times 1\)</p>
<p>Hence, \(156=2\times 2\times 3\times 13\times 1\)</p>
<p>iii)3825</p>
<p>LCM of 3825 = \(3\times 3\times 5\times 5\times 17\times 1\)</p>
<p>Hence, \(3825=3\times 3\times 5\times 5\times 17\times 1\)</p>
<p>iv)5005</p>
<p>LCM of 5005 = \(5\times 7\times 11\times 13\times 1\)</p>
<p>Hence, \(5005=5\times 7\times 11\times 13\times 1\)</p>


<p><strong><em>Question 2:</p>
<p>Find the LCM and HCF of the following pairs of integer and verify that LCM\(\times\)HCF=Product of the two numbers.</p>
<p>i) 26 and 91</p>
<p>ii) 510 and 92</p>
<p>iii) 336 and 54</p>
<p>Solution :</em></strong></p>
<p>i) 26 and 91</p>
<p>26=2\(\times\)13\(\times\)1(expressing as product of it’s prime factors)</p>
<p>91=7\(\times\)13\(\times\)1(expressing as product of it’s prime factors)</p>
<p>So, LCM(26,91)=2\(\times\)7\(\times\)13\(\times\)1=182</p>
<p>HCF(26,91)=13\(\times\)1=13</p>
<p><u>Verification:</u></p>
<p>LCM\(\times\)HCF=13\(\times\)182=2366</p>
<p>Product of 26 and 91 =2366</p>
<p>Therefore,LCM\(\times\)HCF=Product of the two numbers .</p>
<p>i) 510 and 92</p>
<p>\(510=2\times 3\times 17\times 5\times 1 \)(expressing as product of it’s prime factors)</p>
<p>92=2\(\times\)2\(\times\)23\(\times\)1(expressing as product of it’s prime factors)</p>
<p>So,(LCM(510,92)= \( 2\times 2\times 3\times 5\times 17\times 23=23,460 \) (Product of greatest power of each prime factor involved (both common and not common))</p>
<p>HCF(510,92)=2 (Product of smallest power of each common prime factor involved </p>
<p><u>Verification:</u></p>
<p>LCM\(\times\)HCF=23,460\(\times\)2=46,920</p>
<p>Product of 510 and 92 =46,920</p>
<p>Therefore,LCM\(\times\)HCF=Product of the two numbers .</p>
<p>iii) 336 and 54</p>
<p>\(336=2\times 2\times 2\times 2\times 7\times 3\times 1\)(expressing as product of it’s prime factors)</p>
<p>54=2\(\times\)3\(\times\)3\(\times\)3\(\times\)1(expressing as product of it’s prime factors)</p>
<p>So,</p>
<p>\(LCM(336,54)= 2^{4}\times 3^{3}\times 7\)=3024</p>
<p>HCF(336,54)=2\(\times\)3=6</p>
<p><span style="text-decoration: underline;">Verification:</span></p>
<p>LCM\(\times\)HCF=3024\(\times\)6=18,144</p>
<p>Product of 336 and 54=18,144</p>
<p>Therefore,LCM\(\times\)HCF=Product of the two numbers .</p>
<p><strong>Note:Although you may use Euclid Division algorithm to find  H.C.F of two numbers,its good to use normal approach of writing numbers as factors of prime and then finding H.C.F as smallest power of each common prime factor involved</strong>

<p><strong><em>Question 3:</p>
<p>Find the LCM and HCF of the following integers by applying the prime factorization method.</p>
<p>i) 12,15 and 21</p>
<p>ii) 17,23 and 29</p>
<p>iii) 8,9 and 25</p>
<p>Solution :</em></strong></p>
<p>i) 12,15 and 21</p>
<p>12=2\(\times\)2\(\times\)3</p>
<p>15=5\(\times\)3</p>
<p>21=7\(\times\)3</p>
<p>From the above ,HCF(12,15,21) = 3and LCM(12,15,21) = 420</p>
<p>ii)17,23,and 29</p>
<p>17=17\(\times\)1</p>
<p>23=23\(\times\)1</p>
<p>29=29\(\times\)1</p>
<p>From the above HCF(17,23,29) = 1 and LCM(17,23,29)=11339</p>
<p>iii)8,9 and 25</p>
<p>8=2\(\times\)2\(\times\)2</p>
<p>9=3\(\times\)3</p>
<p>25=5\(\times\)5</p>
<p>From the above HCF(8,9,25) = 1 and LCM(8,9,25)=1800</p>


<p><strong><em>Question 4:</p>
<p>Given that HCF(306,657)=9 .Find LCM(306,657)?</p>
<p>Solution :</em></strong></p>

<p><strong><em>Note:Now if this Question comes in exams and if a student directly answers it by finding L.C.M using prime factorization method<br/>
<p>The chances are that teacher might give him no marks</em></strong></p>
<p>Because the Questioner wants you to use the theorem \(H.C.F(a,b)\times L.C.M(a,b)\ = a\times b \)   </p>
<p>So using this</p>
<p>HCF\(\times\)LCM=Product of two numbers</p>
<p>i.e 9\(\times\)LCM=306\(\times\)657</p>
<p>LCM=\(\frac{306\times 657}{9}=22338\)</p>

 <p><strong><em>Question 5: </p>
<p>Check whether \(6^{n}\) can end with the digit 0 for any natural number n.</p>
<p>Solution : </em></strong></p>
<p>There is similar Question in ncert examples,this Question is almost same </p>

<p>If the number \(6^{n}\) ends with the digit zero,then it is divisible by 5.(By divisibility rule of 5,a number whose unit digit is 0 or 5).Although the first thing you observe when a number ends with 0 is that it is divisible by 10,now 10 has factor 2 and 5 ,so if a number is divisible by 10,it is divisible by both 2 and 5.</p>
<p>Now lets find out the prime factorization of 6.</p>
<p> 6 = \(2\times 3\)</p>
<p>Now to end with zero,the number should be divisble by 2 and 5 both</p>
<p>Putting in formal words </p>
<P>The prime factorization of \(6^{n}\) should contain  the primes 2 and 5.</p>
<p>This is not possible because the only prime in the factorization of 6  are 2 and 3</p>
<p><strong>The following statement is important,if you will not write it,you may loose marks </em></strong></p>
<p>so the  uniqueness of the fundamental theorem of arithmetic guarantees that there are no other prime in the factorization of 6</p>
<p>because it follows from the application of fundamental theorem of arithematic that if a prime q divides  \(p^{n}\),then it also divides p,the number should be prime</p>
<p><strong>You can see the proof of if a divides \(p^{2}\) then a divides p which is not from examination point of view,but we highly recommend you see that proof in ncert examples,so simialr arguement holds for \(p^{n}\) </em></strong></p>
<p>So if \(6^{n}\) has zero in the end then it should have 5 as one of the prime factors which leads to that 6 should have 5 as one of the prime factors which is not the case,so by contradiction</p>
<p>It is very clear that there is no value of n in natural number for which \(6^{n}\) ends with the digit zero.</p>


 <p><strong><em>Question 6: </p>
<p>Explain why 7\(\times\)11\(\times\)13+13 and 7\(\times\)6\(\times\)5\(\times\)4\(\times\)3\(\times\)2\(\times\)1+5 are composite number.</p>
<p>Solution : </em></strong></p>
<p>We have,</p>
<p>7\(\times\)11\(\times\)13+13</p>
<p>=13(7\(\times\)11\(\times\)1+1)</p>
<p>=13\(\times\)78</p>
<p>=13\(\times\)3\(\times\)2\(\times\)13</p>
<p>Clearly it has divisor other than 1 and itself hence 7\(\times\)11\(\times\)13+13 is a composite number .</p>
<p>We have,               7\(\times\)6\(\times\)5\(\times\)4\(\times\)3\(\times\)2\(\times\)1+5</p>
<p>=5(7\(\times\)6\(\times\)4\(\times\)3\(\times\)2\(\times\)1+1)</p>
<p>=5(1008+1)</p>
<p>=5\(\times\)1009</p>
<p>Clearly it has  divisor other than 1 and itself, 7\(\times\)6\(\times\)5\(\times\)4\(\times\)3\(\times\)2\(\times\)1+5 is a composite number .</p>

 <p><strong><em>Question 7: </p>
<p>There is a circular path around a sports field.Sonia takes 18 minutes to drive one round of the field, while Ravi takes 12 minutes for the same. Suppose they both start at the same point and at the same time and go in the same direction, after how many minutes will they meet again at the starting point?</p>
<p>Solution : </em></strong></p>

<p>This is again a type of Question where student byheart that we have to find L.C.M in these type of Questions</p>
<p>Now since we at this time know we are in chapter 1,there are Questions of L.C.M and H.C.F and Euclid algorithm,we know either we have to find H.C.F or L.C.M but when this Question comes in exam we dont know which chapter it belongs to </p>

<p>Coming to Question Sonia takes 18 minutes to come back at the starting point and Ravi takes 12 minutes to come back at the starting point again</p>

<p>So after 12 minutes Ravi will be at starting point and Sonia will not be at the starting point.</p>
<p>Where Sonia is at the moment</p>
<p>We can easily caiculate it ,she has covered 240 degrees of the circle</p>
<p>Now after 24 minutes,Ravi will be at starting point again,but Sonia is not there</p>
<p>Where is she?We can calculate but its not required and we dont care</p>
<p>By this time,we think you must have got the answer that they will meet at some common multiple</p>
<p>And which multiple we have to find out,we have to find out the lowest common multiple</p>
<p>Using prime factorization method</p>
<p>12 = 2\(\times\) 2\(\times\) 3</p>
<p>18 = \(2\times 3\times 3\)</p>
<p>so L.C.M is \(2^{2} \times 3^{2} \) = 36</p>
<p>Hence they will meet after 36 minutes.</p>



<p><strong><em>EXERCISE 1.3 </p>
 <p>Question 1: </p>
<p>Prove that \(\sqrt{3}\) is irrational .</p>
<p>Solution : </em></strong></p>
<p>Let us assume ,that \(\sqrt{3}\) is rational</p>
<p>i.e \(\sqrt{3}=\frac{x}{y}\) (where,x and y are co-primes)</p>
<p>Remember  integers a and b are said to be relatively prime, mutually prime, or coprime (also spelled co-prime) if the only positive integer that divides both of them is 1. That is, the only common positive factor of the two numbers is 1.</p>
<p>\(y\sqrt{3}=x\) ......  (1)</p>

<p>Squaring equation 1</p>
<p>We get,\((y\sqrt{3})^{2}=x^{2}\)</p>
<p>\(3y^{2}=x^{2}\)&#8230;&#8230;..(1)</p>
<p>\(x^{2}\) is divisible by 3</p>
<p>So, x is also divisible by 3</p>
<p>\(\ therefore\) we can write x=3k (for some values of k)</p>
<p>Substituting ,x=3k in \(eq^{n}\) 1</p>
<p>\(3y^{2}=(3k)^{2}\)</p>
<p>\(y^{2}=3k^{2}\)</p>
<p>\(y^{2}\) is divisible by 3 it means y is divisible by 3</p>
<p><strong><em>Note:This theorem is prooved in the ncert 
Although proofs are not for exam point of view at this moment.
But if you want to have career in engineering field,develop a habit to proove things
And also challenge things why it is true? I need proof and try to think why it is true? </em></strong></p>

<p>\(\ therefore\) x and y have atleast a common factor 3</p>
<p>But this contradicts the fact x and y have no common factor other than 1</p>
<p>This contradiction has arisen due to our incorrect assumption about \(\sqrt{3}\) is rational</p>
<p>Since ,our assumption about \(\sqrt{3}\) is rational is incorrect .</p>
<p>so we conclude that  \(\sqrt{3}\) is irrational number.</p>

 <p><strong><em>Question 14: </p>
<p>Prove that  \(3+2\sqrt{3}\) is irrational .</p>
<p>Solution : </em></strong></p>
<p>Let us assume that  \(3+2\sqrt{3}\) is rational .</p>
<p>So, x= \(3+2\sqrt{3}\)</p>
<p>\(x^{2}=(3+2\sqrt{3})^{2}\)</p>
<p>\(x^{2}=21+12\sqrt{3}\)</p>
<p>\(\sqrt{3}=\frac{x^{2}-21}{12}\)…….(1)</p>
<p>\(\ because\) x is a  rational number</p>
<p>So, the expression  \(\frac{x^{2}-21}{12}\)is also a rational number.This is a contradiction .Hence, \(3+2\sqrt{3}\) is irrational .</p>


 <p><strong><em>Question 15: </p>
<p>Prove that the following are irrational numbers.</p>
<p>i)\(\frac{1}{\sqrt{3}}\)</p>
<p>ii)\(7\sqrt{3}\)</p>
<p>iii)\(6+\sqrt{5}\)</p>
<p>Solution : </em></strong></p>
<p>i)\(\frac{1}{\sqrt{3}}\)</p>
<p>\(\frac{1}{\sqrt{3}}=\frac{\sqrt{3}}{\sqrt{3}\sqrt{3}}\)
<p>\(\Rightarrow\) \(\frac{1}{\sqrt{3}}=\frac{\sqrt{3}}{3}\)</p>
<p>\(\Rightarrow\) \(\frac{1}{\sqrt{3}}=\frac{1}{3}\times \sqrt{3}\)</p>
<p>Let, a=\(\frac{1}{\sqrt{3}}=\frac{1}{3}\times \sqrt{3}\) be a rational number .</p>
<p>\(\Rightarrow\) \(3a=\sqrt{3}\)</p>
<p>3a is a rational number .Since product of any two rational numbers is a rational number which will imply that \({\sqrt{3}}\) is a rational number .But,it contradicts since \({\sqrt{3}}\) is a irrational number .</p>
<p>\(\ therefore\) 3a is a irrational or a is irrational.</p>
<p>Hence, \(\frac{1}{\sqrt{3}}\) is irrational .</p>

<p>ii)\(7\sqrt{3}\)</p>
<p>Let, a=\(7\sqrt{3}\) be a rational number .</p>
<p>\(\Rightarrow \frac{a}{7}=\sqrt{3}\)</p>
<p>\(\frac{a}{7}\) is a rational number .Since product of two rational number is a rational number which implies that \({\sqrt{7}}\) is a rational number .But,it contradicts since \({\sqrt{7}}\) is a irrational number .</p>
<p>Hence \({\sqrt{7}}\) is a irrational which leads to a is irrational.</p>
<p>Hence,\(7\sqrt{3}\) is irrational .</p>

<p>iii)\(6+\sqrt{5}\)</p>
<p>Let a=\(6+\sqrt{5}\) be a rational number .</p>
<p>Squaring , \(a^{2}=\)\((6+\sqrt{3})^{2}\)</p>
<p>\(a^{2}=\)\(36+2\sqrt{3}+3\)</p>
<p>\(a^{2}=\)\(39+2\sqrt{3}\)</p>
<p>\(\sqrt{3}=\frac{a^{2}-39}{12}\) .........(1)</p>
<p>Since, ais a rational number</p>
<p>So, the expression  \(\frac{a^{2}-39}{12}\) is also rational number.</p>
<p>\(\Rightarrow\)\(\sqrt{3}\) is a rational number .</p>
<p>This is a contradiction.</p>
<p>Hence, \(6+\sqrt{5}\) is irrational.</p>

<p><strong><em>EXERCISE 1.4 </p>
 <p>Question 16: </p>
<p>Without actually performing the long division, state whether the following rational numbers have a terminating decimal expansion or a non-terminating repeating decimal expansion.</p>
<p>i)\(\frac{23}{3125}\)</p>
<p>ii)\(\frac{27}{32}\)</p>
<p>iii)\(\frac{32}{35}\)</p>
<p>iv)\(\frac{5}{1600}\)</p>
<p>v)\(\frac{29}{49}\)</p>
<p>vi)\(\frac{27}{2^{4}\times 5^{3}}\)</p>
<p>vii)\(\frac{29}{2^{2}\times 5^{6}\times 7^{3}}\)</p>
<p>viii)\(\frac{3}{15}\)</p>
<p>ix)\(\frac{35}{50}\)</p>
<p>x)\(\frac{77}{210}\)</p>
<p><strong>Solution : </em></strong></p>
<p>Note; If the denominator has only factors of 2 and 5 then it has terminating decimal expansion.</p>
<p>If the denominator has factors other than 2 and 5 then it has a non-terminating decimal expansion.</p>
<p>i)\(\frac{23}{3125}\)\(=\frac{23}{5^{2}}\)</p>
<p>Since, the denominator has only 5 as its factor, it has a terminating decimal expansion.</p>
<p>ii)\(\frac{27}{32}\)\(=\frac{27}{2^{5}}\)</p>
<p>Since, the denominator has only 2 as its factor, it has a terminating decimal expansion.</p>
<p>iii)\(\frac{32}{35}\)\(=\frac{32}{3\times 7}\)</p>
<p>Since, the denominator has factors other than 2 and 5, it has a non-terminating decimal expansion.</p>
<p>iv)\(\frac{5}{1600}\)\(=\frac{5}{2^{6}\times 5^{2}}\)</p>
<p>\(=\frac{1}{2^{6}\times 5^{1}}\)</p>
<p>Since the denominator has only  2 and 5 as its factors, it has a terminating decimal expansion.</p>
<p>v)\(\frac{29}{49}\)\(=\frac{29}{7^{2}}\)</p>
<p>Since, the denominator has factors other than 2 and 5, it has a non-terminating decimal expansion.</p>
<p>vi)\(\frac{27}{2^{4}\times 5^{3}}\)</p>
<p>Since the denominator has only  2 and 5 as its factors, it has a terminating decimal expansion.</p>
<p>vii)\(\frac{29}{2^{2}\times 5^{6}\times 7^{3}}\)</p>
<p>Since, the denominator has factors other than 2 and 5, it has a non-terminating decimal expansion.</p>
<p>viii)\(\frac{3}{15}\)\(=\frac{1}{5}\)</p>
<p>Since, the denominator has  only 5 as its factor, it has a terminating decimal expansion.</p>
<p>ix)\(\frac{35}{50}\)\(=\frac{7\times 5}{2^{1}\times 5^{2}}\)</p>
<p>\(=\frac{7}{2^{1}\times 5^{1}}\)</p>
<p>Since the denominator has only  2 and 5 as its factors, it has a terminating decimal expansion.</p>
<p>x)\(\frac{77}{210}\)\(=\frac{7\times 11}{2^{1}\times 5^{1}\times 3\times 7}\)</p>
<p>\(=\frac{11}{2^{1}\times 5^{1}\times 3}\)</p>
<p>Since, the denominator has factors other than 2 and 5, it has a non-terminating decimal expansion.</p>


 <p><strong><em>Question 2: </p>
<p>Write down the decimal expansion of those rational numbers in Question 1 which have terminating decimal expansion.</p>
<p>i)\(\frac{23}{3125}\)</p>
<p>ii)\(\frac{27}{32}\)</p>
<p>iii)\(\frac{5}{1600}\)</p>
<p>iv)\(\frac{27}{2^{4}\times 5^{3}}\)</p>
<p>v)\(\frac{29}{2^{2}\times 5^{6}\times 7^{3}}\)</p>
<p>vi)\(\frac{35}{50}\)</p>


<p>Solution: </em></strong></p>

<p>i)\(\frac{23}{3125}\) \(=\frac{23}{5^{5}}\)  \(=\frac{23\times 2^{5}}{5^{5}\times 2^{5}}\)  \(=\frac{736}{10^{5}}\)= 0 .00736</p>
<p>
ii)

\(\frac{27}{32}\) 
 \(=\frac{27}{2^{5}} \) 
 
 \(=\frac{27\times 5^{5}}{2^{5}\times  5^{5}}\) 
 
 \(=\frac{27\times 3125}{2^{5}\times  5^{5} }\) 

\(=\frac{84375}{10^{5} }\) 
 = .84375

 </p>



<p>iii)\(\frac{5}{1600}\)

\(=\frac{5}{2^{6}\times 5^{2}}\)



\(=\frac{5\times 5^{4}}{2^{6}\times 5^{6}}\)


\(=\frac{5\times 625}{10^{6}}\)

 = 0.003125

</p>


<p>iv) \(\frac{27}{2^{4}\times 5^{3}}\)

\(\frac{27\times 5}{2^{4}\times 5^{4}}\)

\(\frac{135}{10^{4}}\)  = 0.0135 </p>


<p>v)\(\frac{3}{15}\)=.2</p>



<p>vi)\(\frac{35}{50}\)=.7</p>


<p><strong><em>Question 3: </p>
<p>Decide whether the real numbers are rational or not. If they are rational ,then write its \( \frac{p}{q} \) form.What can you say about the prime factors of q?</em></strong></p>
<p>i)43.123456789</p>
<p>ii)0.120120012000120000</p>
<p>iii)\(41.\bar{123456789}\)</p>
<p><strong><em>Solution:</em></strong></p>

<p>i)43.123456789</p>
<p>Since it has a terminating decimal expansion, it is a rational number and q has factors of \(2^{m}\) and \({5^{n}}\)
where m and n both are non negative integers</p>
<p>ii)0.120120012000120000</p>
<p>Since, it has non-terminating and non- repeating decimal expansion, it is an irrational number.</p>
<p>iii)\(41.\bar{123456789}\)</p>
<p>Since, it has non-terminating but repeating decimal expansion, it is a rational number and q has factors other than 2 and 5 .</p>






























@stop
































