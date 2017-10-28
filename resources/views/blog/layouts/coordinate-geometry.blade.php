@extends('blog.layouts.math')





@section('content')

<br/>
<br/>
<div class="alert alert-danger" role="alert"> If you are seeing MATH PROCESSING ERROR,try ctrl + F5(hard refresh),if that doesnt solve ,clear the cache of your browser</div>
<p><strong>EXERCISE – 7.1</strong></p>
<p><strong>Question 1:Find the distance between the following pairs of points :</strong></p>
<p><strong>Solution:</strong></p>
<p>(i) (2, 3), (4, 1)</p>
<p>d = \(\sqrt{(2 - 4)^{2}+(3 -1)^{2}} = \sqrt{(-2)^{2}+(2)^{2}}  = \sqrt{8}= 2\sqrt{2}  \)</p>

<p>(ii) (– 5, 7), (– 1, 3)</p>
<p>d = \(\sqrt{(-5 + 1 )^{2}+(7 -3)^{2}} = \sqrt{(-4)^{2}+(4)^{2}}  = \sqrt{32}= 4\sqrt{2}  \)</p>

<p>(iii) (a, b), (– a, – b)</p>
<p>d = \(\sqrt{(a + a)^{2}+(b + b )^{2}}=\sqrt{4a^{2} + 4b^{2 }}= 2\sqrt{a^{2} + b^{2} }  \)</p>



<p><strong>Question 2:Find the distance between the points (0, 0) and (36, 15). Can you now find the distance
between the two towns A and B discussed in Section 7.2</strong></p>
<p><strong>Solution:</strong></p>
<p>d = \(\sqrt{(0 - 36)^{2}+(0 -15)^{2}} = \sqrt{(-2)^{2}+(2)^{2}}  = \sqrt{1296 + 225}= \sqrt{1521}  = 39  \)</p>
<p>Yes we can find out,assuming the town A at (0,0) and town B at (36,15),the distance between them is 39</p>



<p><strong>Question 3:Determine if the points (1, 5), (2, 3) and (– 2, – 11) are collinear.</strong></p>
<p><strong>Solution:</strong></p>
<p>Let A = (1,5) ,B= (2,3),  C= (-2,-11)</p>
<p>AB = \(\sqrt{(1 - 2)^{2}+(5 -3)^{2}} = \sqrt{(-1)^{2}+(2)^{2}}  = \sqrt{1 + 4}= \sqrt{5}  \)</p>
<p>BC = \(\sqrt{(2 + 2)^{2}+(3 + 11)^{2}} = \sqrt{(4)^{2}+(14)^{2}}  = \sqrt{16 + 196}= \sqrt{212}  \)</p>
<p>AC = \(\sqrt{(1 + 2)^{2}+(5 + 11)^{2}} = \sqrt{(3)^{2}+(16)^{2}}  = \sqrt{9 + 256}= \sqrt{265}  \)</p>
<p>Since  AB + BC \(\ne\) AC,AC + BC \(\ne\) AB,AB + AC  \(\ne\) BC,points are not collinear</p>
<p><strong>Its necessary to show that both the three sums are not equal since we dont the exact location of pints,which point is in the middle and which points are on corner,merely showing AB + BC \(\ne\) AC will not proove that points are not collinear,as we dont the exact ordering of points </strong></p> 




<p><strong>Question 4:Check whether (5, – 2), (6, 4) and (7, – 2) are the vertices of an isosceles triangle.</strong></p>
<p><strong>Solution:</strong></p>
<p>Let A = (5,-2) ,B= (6,4),  C= (7,-2)</p>
<p>AB = \(\sqrt{(5 - 6)^{2}+(-2 -4)^{2}} = \sqrt{(-1)^{2}+(-6)^{2}}  = \sqrt{1 + 36}= \sqrt{37}  \)</p>
<p>BC = \(\sqrt{(6 - 7)^{2}+(4 + 2)^{2}} = \sqrt{(-1)^{2}+(6)^{2}}  = \sqrt{1 + 36}= \sqrt{37}  \)</p>
<p>AC = \(\sqrt{(5 - 7)^{2}+(-2 + 2)^{2}} = \sqrt{(-2)^{2}+(0)^{2}}  = \sqrt{4 + 0}= 2  \)</p>
<p>Since AB = BC ,its indeed an isosceles triangle with BA = BC </p>

<p><strong>Question 5:In a classroom, 4 friends are seated at the points A, B, C and D. Champa and Chameli walk into the class
and after observing for a few minutes Champa asks Chameli, “Don’t you think ABCD is a square?” Chameli disagrees.
Using distance formula, find which of them is correct.</strong></p>
<p><strong>Solution:</strong></p>
<p>Let A(3,4) ,B(6,7),C(9,4),D(6,1)</p>

<p>AB = \(\sqrt{(3 - 6)^{2}+(4 -7)^{2}} = \sqrt{(-3)^{2}+(-3)^{2}}  = \sqrt{9 + 9}= \sqrt{18} = 3\sqrt{2}  \)</p>

<p>BC = \(\sqrt{(6 - 9)^{2}+(7 -4)^{2}} = \sqrt{(-3)^{2}+(3)^{2}}  = \sqrt{9 + 9}= \sqrt{18}  = 3\sqrt{2}  \)</p>

<p>CD = \(\sqrt{(9 - 6)^{2}+(4 -1)^{2}} = \sqrt{(3)^{2}+(3)^{2}}  = \sqrt{9 + 9}= \sqrt{18}  = 3\sqrt{2} \)</p>

<p>AD = \(\sqrt{(3 - 6)^{2}+(4 -1)^{2}} = \sqrt{(-3)^{2}+(3)^{2}}  = \sqrt{9 + 9}= \sqrt{18}   = 3\sqrt{2} \)</p>

<p>AC = \(\sqrt{(9 - 3)^{2}+(4 -4)^{2}} = \sqrt{(6)^{2}+(0)^{2}}  = \sqrt{36 + 0}= \sqrt{36}   = 6 \)</p>

<p>BD = \(\sqrt{(6 - 6)^{2}+(1 -7)^{2}} = \sqrt{(0)^{2}+(-6)^{2}}  = \sqrt{0 + 36}= \sqrt{36}   = 6 \)</p>
<p>Since all the  side lengths are equal and diagonal lengths are also equal,it is indeed a sqaure,so Champa is correct</p>


<p><strong>Question 6:Name the type of quadrilateral formed, if any, by the following points, and give reasons for your answer.</strong></p>
<p><strong>Solution:</strong></p>
<p>i)(i) (– 1, – 2), (1, 0), (– 1, 2), (– 3, 0)</p>
<p>Let A(– 1, – 2) ,B(1, 0),C(– 1, 2),D(– 3, 0)</p>

<p>AB = \(\sqrt{(-1 - 1)^{2}+(-2 -0)^{2}} = \sqrt{(-2)^{2}+(-2)^{2}}  = \sqrt{4 + 4}= \sqrt{8} = 2\sqrt{2}  \)</p>
<p>BC = \(\sqrt{(1 + 1)^{2}+(0 - 2)^{2}} = \sqrt{(2)^{2}+(-2)^{2}}  = \sqrt{4 + 4}= \sqrt{8}  = 2\sqrt{2}  \)</p>
<p>CD = \(\sqrt{(-1 + 3)^{2}+(2 -0)^{2}} = \sqrt{(2)^{2}+(2)^{2}}  = \sqrt{4 + 4}= \sqrt{8}  = 2\sqrt{2} \)</p>
<p>AD = \(\sqrt{(-1 + 3)^{2}+(-2 -0)^{2}} = \sqrt{(2)^{2}+(-2)^{2}}  = \sqrt{4 + 4}= \sqrt{8}   = 2\sqrt{2} \)</p>

<p>AC = \(\sqrt{(-1 + 1)^{2}+(-2 -2)^{2}} = \sqrt{(0)^{2}+(-4)^{2}}  = \sqrt{0 + 16}= \sqrt{16}   = 4 \)</p>
<p>BD = \(\sqrt{(1 + 3)^{2}+(0 -0)^{2}} = \sqrt{(4)^{2}+(0)^{2}}  = \sqrt{16 + 0}= \sqrt{16}   = 4 \)</p>
<p>Since sides are equal and so are diagonals,it is an square</p>

<p>ii)(–3, 5), (3, 1), (0, 3), (–1, – 4)</p>
<p>Let A =(–3, 5), B = (3, 1), C = (0, 3),D = (–1, – 4)</p>
<p>AB = \(\sqrt{(-3 - 3)^{2}+(5 -1)^{2}} = \sqrt{(-6)^{2}+(4)^{2}}  = \sqrt{36 + 16}= \sqrt{52} = 2\sqrt{13}  \)</p>
<p>BC = \(\sqrt{(3 - 0)^{2}+(1 - 3)^{2}} = \sqrt{(3)^{2}+(-2)^{2}}  = \sqrt{9 + 4}= \sqrt{13}    \)</p>
<p>CD = \(\sqrt{(0 + 1)^{2}+(3 + 4)^{2}} = \sqrt{(1)^{2}+(7)^{2}}  = \sqrt{1 + 49}= \sqrt{50}  = 5\sqrt{2} \)</p>
<p>AD = \(\sqrt{(-3 + 1)^{2}+(5 + 4)^{2}} = \sqrt{(-2)^{2}+(9)^{2}}  = \sqrt{4 + 81}= \sqrt{85}    \)</p>
<p>Since all side lengths are different,its a general quadrilateral</p>


<p>iii)(4, 5), (7, 6), (4, 3), (1, 2)</p>

<p>Let A =(4, 5), B = (7, 6), C = (4, 3),D = (1, 2)</p>
<p>AB = \(\sqrt{(4 - 7)^{2}+(5 -6)^{2}} = \sqrt{(-3)^{2}+(-1)^{2}}  = \sqrt{9 + 1}= \sqrt{10}   \)</p>
<p>BC = \(\sqrt{(7 - 4)^{2}+(6 - 3)^{2}} = \sqrt{(3)^{2}+(3)^{2}}  = \sqrt{9 + 9}= 3\sqrt{2}    \)</p>
<p>CD = \(\sqrt{(4 - 1)^{2}+(3 - 2)^{2}} = \sqrt{(3)^{2}+(1)^{2}}  = \sqrt{9 + 1}= \sqrt{10}  \)</p>
<p>AD = \(\sqrt{(4 - 1)^{2}+(5 - 2)^{2}} = \sqrt{(3)^{2}+(3)^{2}}  = \sqrt{9 + 9}=  3\sqrt{2}    \)</p>
<p>AC = \(\sqrt{(4 - 4)^{2}+(5 - 3)^{2}} = \sqrt{(0)^{2}+(2)^{2}}  = \sqrt{0 + 4}=  2    \)</p>
<p>BD = \(\sqrt{(7 - 1)^{2}+(6 - 2)^{2}} = \sqrt{(6)^{2}+(4)^{2}}  = \sqrt{36 + 16}=  \sqrt{52}    \)</p>
<p>Since opposite sides are equal but diagonals are of different lengths its a parallelogram</p>



<p><strong>Question 7:Find the point on the x-axis which is equidistant from (2, –5) and (–2, 9)..</strong></p>
<p><strong>Solution:</strong></p>
<p>Lets the point be (x,0) ,y coordinate is 0 because its on the x axis</p>
<p>According to the question:</p>
<p>\(\sqrt{(x - 2)^{2}+(0 + 5)^{2}} = \sqrt{(x + 2)^{2}+(0 - 9)^{2}}  \)</p>
<p>\( (x - 2)^{2}+(0 + 5)^{2} =  (x + 2)^{2}+(0 - 9)^{2}  \)</p>
<p>\( x^{2} + 4 - 4x  + 25  =  x^{2} + 4 + 4x + 81  \)</p>
<p>\(  4 - 4x -4x + 25 -4 - 81 =   0  \)</p>
<p>\(   - 8x  - 56 =   0  \)</p>
<p>\(   x    =   -7  \)</p>
<p>so required point is (-7,0)</p>




<p><strong>Question 8:Find the values of y for which the distance between the points P(2, – 3) and Q(10, y) is
10 units.</strong></p>
<p><strong>Solution:</strong></p>
<p>\(\sqrt{(10 - 2)^{2}+(y + 3)^{2}} = \sqrt{(8)^{2}+ y^{2} + 9 + 6y  } = 73 + y^{2}  + 6y  = 100  \)</p>
<p>y = 3 or y = -9</p>



<p><strong>Question 9:If Q(0, 1) is equidistant from P(5, –3) and R(x, 6), find the values of x. Also find the
distances QR and PR..</strong></p>
<p><strong>Solution:</strong></p>
<p>\(\sqrt{(0 - 5)^{2}+(1 + 3)^{2}} = \sqrt{(0 - x)^{2}+(1 - 6)^{2}}  \)</p>
<p>\(  25 + 16  = x^{2} + 25  \)</p>
<p>\(x = /pm 4\)</p>



<p><strong>Question 10:Find a relation between x and y such that the point (x, y) is equidistant from the point
(3, 6) and (– 3, 4)..</strong></p>
<p><strong>Solution:</strong></p>
<p>\(\sqrt{(x - 3)^{2}+(y - 6)^{2}} = \sqrt{(x + 3)^{2}+ (y - 4)^{2}}  \)</p>
<p>\(  x^{2} + 9 - 6x + y^{2} + 36 - 12y = x^{2} + 9 + 6x + y^{2} + 16 - 8y  \)</p>
<p>\(     - 12x   - 4y =  -20   \)</p>
<p>\(     3x + y -5 = 0    \)</p>



<p><strong>Exercise 7.2</strong></p>
<p><strong>Question 1:Find the coordinates of the point which divides the join of (–1, 7) and (4, –3) in the
ratio 2 : 3.</strong></p>
<p><strong>Solution:</strong></p>
<p>Using section formula</p>
<p>\( \frac{2\times 4 + 3\times -1}{2 + 3}, \frac{2\times -3 + 3\times 7}{2 + 3}    \)</p>
<p>\( \frac{8 -3}{5}, \frac{-6+21}{3}    \)</p>
<p>\( \frac{5}{5}, \frac{15}{3}    \)</p>
<p>\(  1,5    \)</p>
<p>Therefore the point is (1,5)</p>


<p><strong>Question 2:Find the coordinates of the points of trisection of the line segment joining (4, –1)
and (–2, –3).</strong></p>
<p><strong>Solution:</strong></p>
<p><strong>Solution:</strong></p>
<p>Let the point of trisection be A and B</p>
<p>Using section formula</p>
<p>\( \frac{1\times -2 + 2\times 4}{1 + 2}, \frac{1\times -3 + 2\times -1}{1 + 2}    \)</p>
<p>\( \frac{-2 + 8}{3}, \frac{-3 -2 }{3}    \)</p>
<p>\( \frac{6}{3}, \frac{-5}{3}    \)</p>
<p>\(  2,\frac{-5}{3}    \)</p>

<p>The next point can be found by two ways,we can view it as a point which divides the line segment in the ratio 1:2 or we can see it as the mid point of first point of trisection and (-2,-3),since you can easily do the first one yourself ,lets do it the secind way</p>

<p>\( (\frac{2 -2}{1 + 1}, \frac{\frac{-5}{3}  - 3}{1 + 1} )   \)
<p>\( (\frac{0}{2}, \frac{-7}{3})    \)
<p>\( ( 0, \frac{-7}{3})    \)




<p><strong>Question 3:To conduct Sports Day activities, in your rectangular shaped school ground ABCD, lines have been drawn with chalk powder at a distance of 1m each. 100 flower pots have been placed at a distance of 1m from each other along AD, as shown Niharika runs  \( \frac{1}{4} \) distance AD on the 2nd line and Rashmi \( \frac{1}{5} \) of  the distance AD on the eighth line and posts a red flag. What is the distance between both the flags? If Rashmi has to post a blue flag exactly halfway between the line segment joining the two flags, where should she post her flag?.</strong></p>
<p><strong>Solution:</strong></p>
<p>We have to find distance between (2,20) and (8,25)</p>
<p>\(\sqrt{(8 - 2)^{2}+(20 - 25)^{2}} = \sqrt{36 + 25} = \sqrt{61}  \)</p>
<p>The mid point is given by </p>
<p>\( (\frac{2 + 8}{1 + 1}, \frac{20 + 25}{1 + 1} )   \)
<p>\( (5, \frac{45}{2} )   \)



<p><strong>Question 4:Find the ratio in which the line segment joining the points (– 3, 10) and (6, – 8) is divided
by (– 1, 6)?</strong></p>
<p><strong>Solution:</strong></p>
<p>/<strong>Now this question needs little attention,because when we learn the theory we use m1 and m2 and when this type of question comes you must have seen everyone using k:1,so students go into some confusion how two variables m1 and m2 have been replaced by only one variable k ,if you look closely the reasoning is simple,if a point divides a segment into the ratio of m1:m2 ,we can rewrite it as m1/m2 divided by 1 = k : 1 where k = m1/m2,why we do this is because we have to solve only one equation to solve</strong></p>

<p>so let assume (– 1, 6) divides in the ratio k:1</p>
<p> \( 6 =     \frac {-8k +10}{k + 1} \)    </p>
<p> \( 14k  =  4     \)</p>
<p> \( k  =    \frac{2}{7}     \)</p>





<p><strong>Question 5:Find the ratio in which the line segment joining A(1, – 5) and B(– 4, 5) is divided by the
x-axis. Also find the coordinates of the point of division?</strong></p>
<p><strong>Solution:</strong></p>
<p>Let the point on x axis be (x,0)</p>
<p>\(     0 =     \frac {5k - 5}{k + 1}  \)</p>
<p>\(     k = 1   \)</p>
<p>\(     x =  \frac {-4k + 1}{k + 1}   \)</p>
<p>\(     x =  \frac {-4 + 1}{1 + 1}   \)</p>
<p>\(  so it divides the line segment in the ratio 1:1 means it is the midpoint and the coordinates are ( \frac{-3}{2},0)                      \)</p>




<p><strong>Question 6:If (1, 2), (4, y), (x, 6) and (3, 5) are the vertices of a parallelogram taken in order, find
x and y.?</strong></p>
<p><strong>Solution:</strong></p>
<p>Diagonals of a parallelogram bisect each other,that means the intersection point is the mid point of both the digonals</p>
<p>let the intersection point be O(j,k)</p>
<p>\(     j =     \frac{4 + 3 }{1 + 1}  \)</p>
<p>\(     j =     \frac{7}{2}  \)</p>
<p>\( also   j =     \frac{1 + x}{2}  \)</p>
<p>\(  \frac{7}{2} =     \frac{1 + x}{2}  \)</p>
<p>\(  14 =     7 + 7x  \)</p>
<p>\(  x =     6  \)</p>
<p>\(     k =     \frac{2 + 6 }{1 + 1}  \)</p>
<p>\(     k =     4  \)</p>
<p>\( also   k =     \frac{y + 5}{2}  \)</p>
<p>\( 4 =     \frac{y + 5}{2}  \)</p>
<p>\( y = 3  \)</p>
<p>so x = 6,y = 3</p>

<p><strong>Question 7:Find the coordinates of a point A, where AB is the diameter of a circle whose centre is
(2, – 3) and B is (1, 4).?</strong></p>
<p><strong>Solution:</strong></p>
<p>Centre is the mid point of the diametre AB,let coordinates of A be (x,y)</p>
<p>\(     2 =     \frac {x + 1 }{1 + 1}  \)</p>
<p>\(     2 =     \frac {x + 1 }{2}  \)</p>
<p>\(     x = - 3  \)</p>
<p>\(     -3 =     \frac {y + 4 }{1 + 1}  \)</p>
<p>\(     -3 =     \frac {y + 4 }{2}  \)</p>
<p>\(     y = -10  \)</p>
<p>   so coordinates of A  is \((-3,-10)  \)</p>


<p><strong>Question 8:If A and B are (– 2, – 2) and (2, – 4), respectively, find the coordinates of P such that
\(AP =\frac{3}{7}AB \) and P lies on the line segment AB.?</strong></p>
<p><strong>Solution:</strong></p>
<p>The question is little tricky and its a good question</p>
<p>We have to find the ratio AP:PB ,let length of PB be x</p>
<p>\( AP + x = AB \)</p>
<p>\( \frac{3}{7}AB + x = AB \)</p>
<p>\(  x = AB - \frac{3}{7}AB \)</p>
<p>\(  x = \frac{4}{7}AB \)</p>
<p>\(  AP:PB =  3 : 4               \)</p>
<p>now we know m1:m2 = 3:7,now its the same old task<,let P is (x,y)/p>
<p>\(     x =     \frac {3\times 2 + 4\times -2 }{3 + 4}  \)</p>
<p>\(     x =     \frac {-2 }{7}  \)</p>
<p>\(     x =     \frac {4}{5}  \)</p>
<p>\(     y =     \frac {3\times -4 + 4\times -2 }{3 + 4}  \)</p>
<p>\(     y =     \frac {-20 }{7}  \)</p>



<p><strong>Question 9:Find the coordinates of the points which divide the line segment joining A(– 2, 2) and
B(2, 8) into four equal parts?</strong></p>
<p><strong>Solution:</strong></p>
<p>Let the points of division are P,Q,R,P will divide the line segment in the ratio of 1:3                      </p>
<p>\( x =     \frac {1\times 2 + 3\times -2 }{1 + 3}  \)</p>
<p>\( x =     \frac {2 -6 }{4}  \)</p>
<p>\( x =     -1  \)</p>
<p>\( y =     \frac {1\times 8 + 3\times 2 }{1 + 3}  \)</p>
<p>\( y =     \frac {7}{2}  \)</p>
<p>  so coordinates of P is  \(   (-1,\frac {7}{2})            \)</p>
<p>For finding next coordinates you either use P and B and m1:m2 = 1:2 or we can just simply use A  and B with m1:m2 = 2:2</p>
<p>\( x =     \frac {2\times 2 + 2\times -2 }{2 + 2}  \)</p>
<p>\( x =     0  \)</p>
<p>\( y =     \frac {2\times 8 + 2\times 2 }{2 + 2}  \)</p>
<p>\( y =     5  \)</p>
<p>  so coordinates of Q is   \(  (0,5)            \)</p>
<p>R will be:</p>
<p>\( x =     \frac {3\times 2 + 1\times -2 }{3 + 1}  \)</p>
<p>\( x =     \frac {6  -2 }{2 + 2}  \)</p>
<p>\( x =     1  \)</p>
<p>\( y =     \frac {3\times 8 + 1\times 2 }{3 + 1}  \)</p>
<p>\( y =     \frac {24  +2 }{3 + 1}  \)</p>
<p>\( y =      \frac {13}{2}  \)</p>
<p>  Hence \( P(-1,\frac{7}{2}) Q(0,5) R(1, \frac {13}{2}) \) divides AB into 4 equal parts </p>


<p><strong>Question 10:Find the area of a rhombus if its vertices are (3, 0), (4, 5), (– 1, 4) and (– 2, – 1) taken in
1 order?</strong></p>
<p><strong>Solution:</strong></p>
<p>As given in ncert hint: Area of a rhombus = \(\frac{1}{2}\)(product of its diagonals)</p>
<p>\( AC = \sqrt{(3 + 1)^{2}+(0 -4)^{2}} =    \sqrt{(4)^{2}+(-4)^{2}}  = \sqrt{16 + 16} =    \sqrt{32} = 4\sqrt{2}  \)</p>
<p>\( BD = \sqrt{(4 + 2)^{2}+(5 + 1)^{2}} =    \sqrt{(6)^{2}+(6)^{2}}  = \sqrt{36 + 36} =    6\sqrt{2}   \)</p>
<p>\(   Area = \frac{1}{2} (4\sqrt{2}\times 6\sqrt{2})  = 24     \)</p>
<p><strong>Note:By the way do you recollect why  Area of a rhombus = \(\frac{1}{2}\)(product of its diagonals)</strong></p>



<p><strong>Exercise 7.3</strong></p>
<p><strong>Question 1:Find the area of the triangle whose vertices are :</strong></p>
<p>i)(2, 3), (–1, 0), (2, – 4)</p>
<p><strong>Solution:</strong></p>
<p><strong>We will be using the formula to find area of triangle ,it is highly advised that you should do the whole process of deriving the formula of the area of triangle yourself because it may happen if you have slight doubt in exam you can derive the formula in 5 minutes and solve the question</strong></p>
<p>Area = \(  \frac{1}{2} (2(0 + 4) -1(-4 -3) + 2 (3 - 0) )                             \)</p>
<p>Area = \(  \frac{1}{2} (8  + 7 + 6 )                             \)</p>
<p>Area = \(  \frac{21}{2} )                             \)</p>


<p>i)(–5, –1), (3, –5), (5, 2)</p>
<p>Area = \(  \frac{1}{2} (-5(-5 - 2) +3(2 + 1) + 5 (-1 - 2) )                             \)</p>
<p>Area = \(  \frac{1}{2} (-5(-5 - 2) +3(2 + 1) + 5 (-1 + 5) )                             \)</p>
<p>Area = \(  \frac{1}{2} (35 + 9 + 20 )                             \)</p>
<p>Area = \(  32                            \)</p>


<p><strong>Question 2:In each of the following find the value of ‘k’, for which the points are collinear?</strong></p>
<p>(i) (7, –2), (5, 1), (3, k)</p>
<p>Area = \(  \frac{1}{2} (7(1 - k) + 5(k + 2) + 3 (-2 - 1) )                             \)</p>
<p>Area = \(  \frac{1}{2} (7 - 7k + 5k + 10  -6 + 3)                            \)</p>
<p>Area = \(  \frac{1}{2} (- 2k + 14)                            \)</p>
<p>Area = \(   (- k + 7)   =0,k = 7                          \)</p>


<p>ii) (8, 1), (k, – 4), (2, –5)</p>
<p>Area = \(  \frac{1}{2} (8(-4 + 5) + k(-5 - 1) + 2 (1 + 4) )                             \)</p>
<p>Area = \(  \frac{1}{2} (8 -6k + 10 )                             \)</p>
<p>Area = \(  \frac{1}{2} (18 -6k  )                             \)</p>
<p>Area = \(   9 -3k  = 0,k = 3                             \)</p>





<p><strong>Question 3:Find the area of the triangle formed by joining the mid-points of the sides of the triangle
whose vertices are (0, –1), (2, 1) and (0, 3). Find the ratio of this area to the area of the
given triangle.?</strong></p>
<p><strong>Solution:</strong></p>
<p>let A(0, –1), B(2, 1),C(0, 3)</p>
<p>let P is mid point of AB,Q is mid point of BC and R is mid point of AC</p>
<p>\( P = (\frac{0 + 2}{2} ,\frac{-1 + 1}{2}) = (1,0)      \)</p>
<p>\( Q = (\frac{2 + 0}{2} ,\frac{1 + 3}{2}) = (1,2)      \)</p>
<p>\( R = (\frac{0 + 0}{2} ,\frac{-1 + 3}{2}) = (0,1)      \)</p>
<p>Area of PQR  = \(  \frac{1}{2} (1(2 - 1) + 1(1 - 0) + 0 (0 -2) )                             \)</p>
<p>Area of PQR  = \(  \frac{1}{2} (1 + 1 + 0 (0 -2) ) = 1                             \)</p>
<p>Area of ABC  = \(  \frac{1}{2} (0(1 - 3) + 2(3 + 1) + 0 (-1 -1) )                             \)</p>
<p>Area of ABC  = \(  \frac{1}{2} (-2 + 8  ) = 3                             \)</p>




<p><strong>Question 4:Find the area of the quadrilateral whose vertices, taken in order, are (– 4, – 2), (– 3, – 5),
(3, – 2) and (2, 3).?</strong></p>
<p><strong>Solution:</strong></p>
<p> let A(– 4, – 2), B(– 3, – 5),C(3, – 2) ,D(2, 3) are the vertices of quadrialtral</p>
<p>Area of quadrialteral =  = Area of triangle ABC + Area of triangle ACD</p>
<p>\(Area of quadrialteral = \frac{1}{2} (-4(-5 + 2)  -3(-2 + 2) + 3 (-2 + 5) + \frac{1}{2} (-4(-2 - 3) + 3(3 + 2) + 2 (-2 +2) \)</p>
<p>\(Area of quadrialteral = \frac{1}{2} (12  + 9 ) + \frac{1}{2} ( 20 + 15 ) = 28 \)</p>






<p><strong>Question 5:You have studied in Class IX, (Chapter 9, Example 3), that a median of a triangle divides
it into two triangles of equal areas. Verify this result for Δ ABC whose vertices are
A(4, – 6), B(3, –2) and C(5, 2)?</strong></p>
<p><strong>Solution:</strong></p>
<p>Lets consider the median from A to BC and let AD is the median</p>
<p>\(   coordinates of D =  (\frac{3 + 5}{2},\frac{-2 + 2}{2}) = (4,0) \)</p>
<p>Area of ABD = \(  \frac{1}{2} (4(-2 - 0) + 3(0 + 6) + 4 (-6 + 2) )                             \)</p>
<p>Area of ABD = \(  \frac{1}{2} (-8 + 18 -16 )                             \)</p>
<p>Area of ABD = \(  \frac{1}{2} (-6 )                             \)</p>
<p>Area of ABD = \(  3                            \)</p>
<p>Area of ADC = \(  \frac{1}{2} (4(0 - 2) + 4(2 + 6) + 5 (-6 -0) )                             \)</p>
<p>Area of ADC = \(  \frac{1}{2} (-8 + 32 -30 )                             \)</p>
<p>Area of ADC = \(  3                             \)</p>
<p>so area of ABD = area of ADC</p>




<p><strong>Exercise 7.4</strong></p>
<p><strong>Question 1:Determine the ratio in which the line 2x + y – 4 = 0 divides the line segment joining the
points A(2, – 2) and B(3, 7)</strong></p>
<p>Let the line divides in the ratio k:1</p>
<p>let (h,k) is the point on the line</p>
<p>\(2h + k - 4 = 0              ...(1)     \)</p>
<p>\( h = \frac{3k + 2}{k + 1}               \)</p>
<p>\( k = \frac{7k  - 2}{k + 1}               \)</p>
<p>putting the value of h and k in eq(1)</p>
<p>\(    \frac{6k + 4}{k + 1}  +   \frac{7k  - 2}{k + 1} = 4           \)</p>
<p>\(    6k + 4  + 7k  - 2 = 4k + 4           \)</p>
<p>\(    9k  =   2           \)</p>
<p>\(    k  =   \frac{2}{9}           \)</p>
<p>so line divides in the ratio k:1 ,2:9:1 = 2:9</p>


<p><strong>Question 2:Find a relation between x and y if the points (x, y), (1, 2) and (7, 0) are collinear.
</strong></p>
<p><strong>Solution:</strong></p>
<p>Area of triangle formed by three points  = \(  \frac{1}{2} (x(2 - 0) + 1(0 - y) + 7 (y - 2) )  \)</p>
<p>Area of triangle formed by three points  = \(  \frac{1}{2} ( 2x  - y + 7y - 14) )  \)</p>
<p>Area of triangle formed by three points  = \(  \frac{1}{2} ( 2x    + 6y - 14) )  \)</p>
<p>Area of triangle formed by three points  = \(  ( x    + 3y - 7) )  \)</p>
<p>Since points are collinear Area should be zero</p>
<p>\(    x = 7 - 3y               \)</p>


<p><strong>Question 3:Find the centre of a circle passing through the points (6, – 6), (3, – 7) and (3, 3).
</strong></p>
<p>Let the centre be 0(x,y) and A(6,-6),B(3,-7),C(3,3) are points</p>
<p>In circle the distance between centre and all points on circumference is same which is called radius of the circle</p>
<p>\(   (x -  6)^2 + (y + 6)^2 = (x - 3)^2  + (y + 7)^2          \)</p>
<p>\(   x^{2} + 36 - 12x + y^{2} + 36 + 12y = x^{2} + 9 -6x  + y^{2} + 49 + 14y  \)</p>

<p>\(     - 3x   -y =   -7 \)              ...(1)</p>


<p>\( (x -  6)^2 + (y + 6)^2 = (x - 3)^2  + (y -3)^2          \)</p>
<p>\(    -6x  + 18y =   18 -72        \)</p>

<p>\(    -x  + 3y =   -9                   ....(2)\)</p>
<p>\(     10y = -20                     \)</p>
<p>\(     y = -2                     \)</p>
<p>\(     x = 3                     \)</p>






<p><strong>Question 4:The two opposite vertices of a square are (–1, 2) and (3, 2). Find the coordinates of the
other two vertices.</strong></p>
<p><strong>Solution:</strong></p>
<p>Let the vertices are A(-1,2) ,B(x,y),C(3,2),D(X,Y) </p>

<p>\(  (x + 1)^{2} + (y - 2)^{2}     =   (x -3)^{2} + (y -2)^{2}      \)</p>
<p>\(   x^{2} + 1 + 2x + y^{2} + 4 - 4y = x^{2} + 9 - 6x  + y^{2} + 4 - 4y   \)</p>
<p>\(    8x    = 8   \)</p>
<p>\(    x     = 1   \)</p>


<p>Also since its a square,angle ABC = 90</p>
<p>\(  (3 + 1)^{2} + (2 - 2)^{2}     =   (x -3)^{2} + (y -2)^{2} + (x + 1)^{2} + (y -2)^{2}      \)</p>
<p>\(  (4)^{2} + (0)^{2}             =   x^{2} + 9 - 6x  + y^{2} + 4 - 4y  +  x^{2} + 1 + 2x  + y^{2} + 4 - 4y     \)</p>
<p>\(  (4)^{2} + (0)^{2}             =   1^{2} + 9 - 6  + y^{2} + 4 - 4y  +  1^{2} + 1 + 2  + y^{2} + 4 - 4y     \)</p>
<p>\(  16             =   16  + 2y^{2}  - 8y      \)</p>
<p>\(               =     2y^{2}  - 8y      \)</p>
<p>\(   y =0,y = 4      \)</p>


<p>Now since we have already found 3 points we dont need to do this long process again and again,we can just use the fact that diagonals of a square bisect each other since its a parallelogram,let O be the point where diagonal bisect each other</p>



<p>\(O(x,y) = (\frac{-1 + 3}{1 + 1},\frac{2 + 2}{1 + 1} ) = (1,2)     \)</p>
<p>\( (1,2)  = (\frac{1 + x}{1 + 1},\frac{0 + y }{1 + 1} ) =      \)</p>
<p>\( (1,2)  = (\frac{1 + x}{2},\frac{y }{2} )      \)</p>
<p>\(  x = 1,y = 4      \)</p>



<p>\( (1,2)  = (\frac{1 + x}{1 + 1},\frac{4 + y }{1 + 1} )      \)</p>
<p>\( (1,2)  = (\frac{1 + x}{2},\frac{4 + y }{2} )      \)</p>
<p>\(  x = 1,y = 0      \)</p>


<p>So required other points aree (1,0) and (1,4)</p>



<p><strong>Question 5:The Class X students of a secondary school in Krishinagar have been allotted a rectangular
plot of land for their gardening activity. Sapling of Gulmohar are planted on the boundary at a distance of 1m from each
other. There is a triangular grassy lawn in the plot. The students are to sow seeds of
flowering plants on the remaining area of the plot.
(i) Taking A as origin, find the coordinates of the vertices of the triangle.
(ii) What will be the coordinates of the vertices of Δ PQR if C is the origin?
Also calculate the areas of the triangles in these cases. What do you observe?.</strong></p>
<p><strong>Solution:</strong></p>
<p>Taking A as origin,the coordinates are P(4,6),Q(3,2),R(6,5)</p>
<p> Area of traingle PQR =   \(  \frac{1}{2} (4(2 - 5) + 3(5 - 6) + 6 (6 - 2) )  \)                        </p>
<p> Area of traingle PQR =   \(  \frac{1}{2} (-12 -3 + 24  \)                        </p>
<p> Area of traingle PQR =   \(  \frac{1}{2} (9  \)                        </p>


<p>Taking C as origin,the coordinates are P(12,2),Q(13,6),R(10,3)</p> 
<p><strong>Some students might argue that the coordinates should be negative like P(-12,-2),Q(-13,-6),R(-10,-3),it will not make a difference as long as you are choosing the same point of reference which is origin for all the points</strong></p>
<p> Area of traingle PQR =   \(  \frac{1}{2} (12(6 - 3) + 13(3 - 2) + 10 (2 - 6) )  \)                        </p>
<p> Area of traingle PQR =   \(  \frac{1}{2} (36 + 13 -40 )  \)                        </p>
<p> Area of traingle PQR =   \(  \frac{1}{2} (49 -40 )  \)                        </p>
<p> Area of traingle PQR =   \(  \frac{1}{2} (9) \)                        </p>
<p>So what did we learn,we learned that choice of origin doest make difference because we are measuring the distance from the same point called origin for all the points P,Q,R so area will remain same,so are the lengths of triangle</p>


<p><strong>Question 6:The vertices of a Δ ABC are A(4, 6), B(1, 5) and C(7, 2). A line is drawn to intersect sides
AB and AC at D and E respectively such that \( \frac{AD}{AB} = \frac{AE}{AC} = \frac{1}{4}   \).Calculate the area of 
Δ ADE and compare it with the area of Δ ABC?.</strong></p>
<p><strong>Solution:</strong></p>
<p>\( \frac{AD}{AB}     =   \frac{AE}{AC}   = \frac{1}{4}   \)</p>
<p>\( \frac{AD}{AD + DB }     =   \frac{AE}{AE + EC}   = \frac{1}{4}   \)</p>
<p>\( \frac{AD}{ DB }     =   \frac{AE}{EC}   = \frac{1}{3}   \)</p>
<p>Coordinates of D = \( \frac{1\times 1 + 3\times 4}{1 + 3}, \frac{1\times 5 + 3\times 6}{1 + 3}       \)</p>
<p>Coordinates of D = \( \frac{13}{4}, \frac{23}{4}       \)</p>

<p>Coordinates of E = \( \frac{1\times 7 + 3\times 4}{1 + 3}, \frac{1\times 2 + 3\times 6}{1 + 3}       \)</p>
<p>Coordinates of E = \( \frac{7 + 12}{4}, \frac{2 + 18}{1 + 3}       \)</p>
<p>Coordinates of E = \( \frac{19}{4}, \frac{20}{4}       \)</p>

<p>Area of triangle ADE = \( \frac{1}{2} (4(\frac{23}{4}) - \frac{20}{4}) + \frac{13}{4}(\frac{20}{4} - 6) + \frac{19}{4} (6 - \frac{23}{4}) \)</p>
<p>Area of triangle ADE = \( \frac{15}{32}  \)</p>

<p>Area of triangle ABC = \( \frac{1}{2} (4(5 -2) + 1(2 - 6) + 7(6 -5)) \)</p>
<p>Area of triangle ABC = \( \frac{15}{2} \)</p>
<p>Clearly the ratio is 1:16</p>


<p><strong>Question 7:Let A (4, 2), B(6, 5) and C(1, 4) be the vertices of Δ ABC.</strong></p>
<p><strong>Solution:</strong></p>
<p>i)The median from A meets BC at D. Find the coordinates of the point D.</p>
<p>D is mid point of BC</p>
<p>\(  Coordinates of D = (\frac{6 + 1}{1 + 1},\frac{5 + 4}{1 + 1})               \)</p>
<p>\(  Coordinates of D = (\frac{7}{2},\frac{9}{2})               \)</p>


<p>Find the coordinates of the point P on AD such that AP : PD = 2 : 1</p>
<p>Coordinates of P = \( ( \frac{2\times \frac{7}{2} + 1\times 4}{2 + 1},\frac{2\times \frac{9}{2} + 1\times 2}{2 + 1})   \)</p>
<p>  Coordinates of P = \( (\frac{7 + 4}{3},\frac{9 + 2}{3})     \)</p>
<p>  Coordinates of P = \( (\frac{11}{3},\frac{11}{3})               \)</p>

<p>ii)Find the coordinates of points Q and R on medians BE and CF respectively such
that BQ : QE = 2 : 1 and CR : RF = 2 : 1</p>

<p>\(  Coordinates of E = (\frac{4 + 1}{1 + 1},\frac{2 + 4}{1 + 1})=(\frac{5}{2},3)               \)</p>
<p>\(  Coordinates of E = (3,3)               \)</p>
<p>\(  Coordinates of E = (\frac{2\times \frac{5}{2} + 1\times 6}{2 +1},\frac{2\times \frac{9}{2} + 1\times 2}{2 + 1})               \)</p>
<p>\(  Coordinates of E = (\frac{11}{3},\frac{11}{3})               \)</p>



<p>\(  Coordinates of F = (\frac{4 + 6}{1 + 1},\frac{2 + 5}{1 + 1})=(5,\frac{7}{2})               \)</p>
<p>\(  Coordinates of E = (\frac{2\times 5 + 1\times 1}{2 +1},\frac{2\times \frac{7}{2} + 1\times 4}{2 + 1})               \)</p>
<p>\(  Coordinates of E = (\frac{11}{3},\frac{11}{3})               \)</p>

<p>iv)What do you observe?</p>
<p><strong>We observed that its the same point \(\frac{11}{3},\frac{11}{3} \) dividing all medians in the ratio of 2:1,actually this is called centroid </strong></p>



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