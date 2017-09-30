@extends('blog.layouts.math')





@section('content')

<br/>
<br/>
<p  style= "color:red";><strong>If you are seeing MATH PROCESSING ERROR,try ctrl + F5(hard refresh),if that doesnt solve ,clear the cache of your browser</strong></p>

<p><strong>EXERCISE 10.1</strong></p>

<p><strong><em>1. How many tangents can a circle have?</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Infintely many</p>


<p><strong><em>2. Fill in the blanks:</em></strong></p>

<p><strong><em>(i) A tangent to a circle intersects it in _______  point (s).</em></strong></p>
<p>One</p>
<p><strong><em>(ii) A line intersecting a circle in two points is called a _________ </em></strong></p>
<p>Two</p>
<p><strong><em>(iii) A circle can have ____________  parallel tangents at the most.</em></strong></p>
<p>two</p>
<p><strong><em>(iv) The common point of a tangent to a circle and the circle is called _________ </em></strong></p>
<p>point of contact</p>

<p><strong><em>
3. A tangent PQ at a point P of a circle of radius 5 cm meets a line through the centre O at
a point Q so that OQ = 12 cm. Length PQ is :
(A) 12 cm
(B) 13 cm
(C) 8.5 cm
(D) 119 cm.
</em></strong></p>
<p>\( PQ = \sqrt{12^2 - 5^2} = \sqrt{119}     \)</p>


<p><strong><em>4. Draw a circle and two lines parallel to a given line such that one is a tangent and other a secant to the circle</em></strong></p>



<p><strong>EXERCISE 10.2</strong></p>
<p><strong><em>In Q.1 to 3, choose the correct option and give justification.<br/><br/>
1. From a point Q, the length of the tangent to a circle is 24 cm and the distance of Q from
the centre is 25 cm. The radius of the circle is
(A) 7 cm (B) 12 cm
(C) 15 cm (D) 24.5 cm</em></strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-1.png" alt="8" width="400" height="300" /></p>
<p  style= "color:red";><strong>If you are seeing MATH PROCESSING ERROR,try ctrl + F5(hard refresh),if that doesnt solve ,clear the cache of your browser</strong></p><p><strong>Solution:</strong></p>
<p>For solving this question we will make use of the theorem:Radius is perpendicular to the tangent at the point of contact to the circle</p>
<p>Now we can simply apply pythagoras theorem</p>
<p>\(  OQ^{2}   = OP^{2} + PQ^{2}           \)</p>
<p>\(  25^{2}   = OP^{2} + 24^{2}           \)</p>
<p>\(  OP^{2}   = 25^{2} -  24^{2}           \)</p>
<p>\(  OP^{2}   = (25 + 24) (25 - 24)          \)</p>
<p>\(  OP^{2}   = 49          \)</p>
<p>\(  OP       = 7          \)</p>
<p>so the radius of circle is 7cm,option (A) is correct</p>


<p><strong><em>2. In Fig. 10.11, if TP and TQ are the two tangents
to a circle with centre O so that ∠ POQ = 110°,
then ∠ PTQ is equal to
(A) 60° (B) 70°
(C) 80° (D) 90°
<p><img class="alignnone wp-image-2112" src="/10-1-2-2.png" alt="8" width="300" height="200" /></p>
</em></strong></p>
<p><strong>Solution:</strong></p>
<p>This is again very simple,we will use the same theorem as in question 1,Radius is perpendicular to the tangent at the point of contact</p>
<p>Now sum of angles of a quadrilateral = 360 (Do you know the proof?)         </p>
<p>\(  ∠ POQ + ∠ OPT +  ∠ OQT  +  ∠ PTQ  = 360                                 \)         </p>
<p>\(  110 + 90 +  90  +  ∠ PTQ  = 360                                  \)         </p>
<p>\(    ∠ PTQ  = 360 - 290 = 70 \),hence option B is correct              </p>



<p><strong><em>3. If tangents PA and PB from a point P to a circle with centre O are inclined to each other
at angle of 80°, then ∠ POA is equal to
(A) 50° (B) 60°
(C) 70° (D) 80°
<p><img class="alignnone wp-image-2112" src="/10-1-2-3.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p><strong>Solution:</strong></p>

<p>Now this is continuation to question 2,so we can easily find ∠ BOA,now we need to find a relation between ∠ BOP and ∠ POA</p>
<p><strong>Its higly advised that you brush up your concepts of geometry  from previous class as they can come handy in solving questions in this chapter and other chapters</strong></p>

<p>Now lets first find ∠ BOP</p>
<p>Consider quadrilateral OAPB</p>
<p>Now sum of angles of a quadrilateral = 360</p>
<p>\(  ∠ OAP + ∠ APB +  ∠ PBO  +  ∠ BOA  = 360                                 \)         </p>
<p>\(    ∠ BOA  = 360 - 90 - 90 - 80                                \)         </p>
<p>\(    ∠ BOA  = 100                                \)         </p>

<p>We are halfway through</p>
<p>Now consider triangle POB and POA</p>
<p>PA =  PB (Length of tangent from external point to a circle are equal) </p>
<p>OP =  OP (common side) </p>
<p>OB =  OA (radius of same circle) </p>
<p>By SSS congruence condition</p>
<p>triangle POB and POA are congruent to each other</p>
<p>so ∠ BOP = ∠ POA </p>
<p>so \( ∠ POA = \frac{100}{2} = 50    \)</p>





<p><strong><em>4. Prove that the tangents drawn at the ends of a diameter of a circle are parallel.
</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-4.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p>To proove two lines are parallel:The first is if the corresponding angles, the angles that are on the same corner at each intersection, are equal, then the lines are parallel. The second is if the alternate interior angles, the angles that are on opposite sides of the transversal and inside the parallel lines, are equal, then the lines are parallel.</p>

<p>We will use the second one,you can extend the diametre to show corresponding angles are equal ,both proofs are ok</p>
<p>Now using the theorem:Radius is perpendicular to the tangent at the point of contact</p>
<p>∠ OAR = 90,∠ OBP = 90</p>
<p>using this we find ∠ OAS = 90  and ∠ OBQ = 90</p>
<p>so ∠ OAR = ∠ OBQ</p>
<p> ∠ OAs = ∠ OBP</p>
<p>Since alternate interior angles are equal,it follows tangents drawn at the ends of a diameter of a circle are parallel</p>



<p><strong><em>5. Prove that the perpendicular at the point of contact to the tangent to a circle passes
through the centre.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-5.png" alt="8" width="400" height="400" /></p></em></strong></p>

<p>Once again a proof,and its a kind of proof students dont know how to begin with</p>
<p>We will proove this thing by contradiction which is basically imagining something not true and  then we deduce a result which is not true ,and why that result came to true which is indeed false because in the starting we assume a wrong thing</p>
<p>In real life its similar to a phrase we use ocassionally "Agar aisa hota na to aisa ho gay hota,par aisa to hua nahi iska matlab vaisa nahi hua tha"</p>

<p>Let the perpendicular doesnt pass through centre it passes through another point O'</p>
<p>Since its perpendicular  ∠ O'PQ = 90</p>
<p>But since we already know that radius makes right angle with centre at the point of contact</p>
<p>∠ OPQ = 90 </p>
<p>so ∠ O'PQ = ∠ OPQ</p>
<p>But from the figure  ∠ O'PQ < ∠ OPQ which is not possible </p>
<p>Similarly we can proove that ∠ O'PQ cant be greater than ∠ OPQ</p>
<p>So from both 2 statements above ∠ O'PQ = ∠ OPQ ,so O' should coincide with O,perpendicular at the point of contact to the tangent to a circle passes
through the centre </p>



<p><strong><em>6. The length of a tangent from a point A at distance 5 cm from the centre of the circle is 4
cm. Find the radius of the circle.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-6.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p>Similar to first question,we will make use of the theorem:Radius is perpendicular to the tangent at the point of contact to the circle</p>
<p>Now we can simply apply pythagoras theorem</p>
<p>\(  OA^{2}   = OB^{2} + BA^{2}           \)</p>
<p>\(  5^{2}    = OP^{2} + 4^{2}           \)</p>
<p>\(  OP^{2}   = 5^{2} -  4^{2}           \)</p>
<p>\(  OP^{2}   = (5 + 4) (5 - 4)          \)</p>
<p>\(  OP^{2}   = 9          \)</p>
<p>\(  OP       = 3          \)</p>
<p>so radius of circle is 3 </p>



<p><strong><em>7. Two concentric circles are of radii 5 cm and 3 cm. Find the length of the chord of the
larger circle which touches the smaller circle.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-7.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p>Applying pthagoras in OAQ</p>
<p>\(  OQ^{2}   = OA^{2} + AQ^{2}           \)</p>
<p>\(  5^{2}    = 3^{2} + AQ^{2}           \)</p>
<p>\(  AQ^{2}   = 5^{2} -  3^{2}           \)</p>
<p>\(  OP^{2}   = (5 + 3) (5 - 3)          \)</p>
<p>\(  OP^{2}   = 16          \)</p>
<p>\(  OP       = 4         \)</p>
<p>Now you must have remember the result perpendicular to a chord,bisects the chord</p>
<p>Or you can use congruence condition in the two triangles OPA ,OAQ using common side,angles are equal = 90, OP = OQ</p>
<p>so length of chord = \(2\times 4 = 8 \)</p>



<p><strong><em>8. A quadrilateral ABCD is drawn to circumscribe a circle.
Prove that AB + CD = AD + BC.</em></strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-8.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p>Do you know how this figure is made,its made by drawing tangents from external points</p>
<p>Since question involved lengths,we will use the theorem ,length of tangents from a external point to a circle are equal</p>
<p>DS = DR   ..(1)</p>
<p>AS = AP   ..(2) </p>
<p>CR = CQ   ..(3)</p>
<p>BQ = BP   ..(4)</p>


<p>AB + CD = AP + PB + CR + RD  ..(5)</p>
<p>AD + BC = AS + SD + BQ + QC   ...(6)</p>

<p>We can rewrite 5 as</p>
<p>AB + CD = AS + BQ + QC + SD </p> 
<p>From 5 AS + BQ + QC + SD = AD+ BC</p>

<p>so  AB + CD = AD + BC(Whats the significance of this result or was it just to keep students busy)  </p>


 
<p><strong><em>9. In Fig. 10.13, XY and X′Y′ are two parallel tangents to a circle with centre O and
another tangent AB with point of contact C intersecting XY at A and X′Y′ at B. Prove
that ∠ AOB = 90°.</em></strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-9.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p><strong>Solution:</strong></p>
<p>Now this question is somewhat like students will feel is out of reach</p>
<p><strong>If you see a question involving tangents and you have to proof something,dont panic.There are certain theorems that length of tangents drawn from a external point are same,also you may have to make use of making two angles congruent then may be using the fact that sides are equal or angles are equal,since we are talking about angles here ,it may happen ,we may use it</strong></p>


<p>Join OC and consider triangles OAP and OAC</p>
<p>OA = OA(common)</p>
<p>∠ OPY = ∠ OQB = 90</p>
<p>AP = AC(Length of tangents to a circle from external point are equal)             </p>
<p>so by SAS congruence condition</p>
<p>Triangles are congruent</p>
<p>Hence ∠ POA = ∠ AOC</p>
<p><strong>You can use OP = 0C  instead of ∠ OPY = ∠ OQB = 90,there can be more than one way to proove triangles are congruent</strong></p>
 

 <p>Similarly if you take triangles OBQ and OCB,you can use simialr logic to proove triangles are congruent</p>
 <p>so ∠ QOB = ∠ BOC</p>


<p>∠ POA  + ∠ AOC + ∠ COB  +  ∠ BOQ = 180</p>
<p>∠ AOC  + ∠ AOC + ∠ COB  +  ∠ COB = 180</p>
<p> 2(∠ AOC  + ∠ COB) = 180</p>
<p> (∠ AOC  + ∠ COB) =  90</p>
<p> ∠ AOB  =  90</p>

<p><strong>This is a beautiful question,please give some time to it and learn how you can solve similar question like this in exams</strong></p>





<p><strong><em>10. Prove that the angle between the two tangents drawn from an external point to a circle
is supplementary to the angle subtended by the line-segment joining the points of
contact at the centre.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-10.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p>Its a very easy question,we already know line joining tangent to circle forms a 90 angle with radius at the point of contact</p>
<p>Consider quadrilateral PAOB</p>
<p>∠ BPA  + ∠ PAO + ∠ AOB  +  ∠ OBP = 360</p>
<p>∠ BPA + 90 + 90 + ∠ AOB  = 360 </p>
<p>∠ BPA  + ∠ AOB  = 360 - 180 = 180(supplementary),hence prooved</p>




<p><strong><em>11. Prove that the parallelogram circumscribing a circle is a rhombus.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-11.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p>This is in continuation to question 8,for a quadrilateral circumscribing a circle we already know</p>
<p>AB + CD = AD + BC</p>
<p>Now since given its a parallelogram</p>
<p>AB = CD</p>
<p>AD = BC</p>
<p>AB + AB = BC + BC</p>
<p>AB = BC</p>
<p>so AB = BC = AD = CD</p>
<P>Now a quadrialteral with all 4 sides equal will be atleast a rhombus,it can be square too but we need to proove certain extra things too but we have prooved it that patrallelogram circumscribing a circle is a rhombus</p>
<p><strong>It is advised that you remember these results too,because it may happen that a variation of this question may come in exams where you have to do proove some more thing from here </strong></p>





<p><strong><em>12. A triangle ABC is drawn to circumscribe a circle of radius 4 cm such that the segments BD and
DC into which BC is divided by the point of contact D are of lengths 8 cm and 6 cm respectively (see Fig. 10.14). Find the sides AB and AC.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-12.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p>Since it involves tangents and lengths we may be using length of tangents from external point to a circle are same ormay be some other things</p>
<p>The only thing we need is x to solve the problem</p>
<p>Consider area of triangle ABC</p>
<P>area of triangle ABC = area of triangle OAB + area of triangle OCB + area of triangle OAC </p>
<p>now s(semipreimtere) of ABC = \(\frac {8 + 8 + 6 + 6 + x + x}{2}\)
<p>s = 14 + x \)
<p>Using heros formula</p>
<p>\( \sqrt{s(s-a) + s( s-b) + s(s -c)}            \)</p>
<p>\( \sqrt{(14 + x)(14 + x -  14) + 14+ x( 14 + x -8 -x) + 14 + x(14 + x - 6 - x)}            \)</p>
<p>\( \sqrt{(14 + x)(x) (48 )}            \)</p>
<p>\( 4\sqrt{3(14x + x^{2} )}            \)</p>

<p>area of triangle OAB + area of triangle OCB + area of triangle OAC = \( \frac{1}{2}(4\times (8 + x) + 4\times 14 + 4\times (6 + x) )  \)</p>
<p>equating L.H.S and R.H.S</p>
<p>\( 4\sqrt{3(14x + x^{2} )}  = 16 + 2x + 28 + 16 + 2x  \) </p>
<p>\( 4\sqrt{3(14x + x^{2} )}  = 56 + 4x  \) </p>
<p>\( \sqrt{3(14x + x^{2} )}  = 14 + x  \) </p>
<p>\( 3(14x + x^{2})  = (14 + x)^{2}  \) </p>
<p>\( 42x + 3x^{2}    = 196 + x^{2} + 28x \) </p>
<p>\( 2x^{2}  + 14x -196 = 0 \) </p>
<p>\( x^{2}  + 7x -98 = 0 \) </p>
<p>\( x(x + 14) -7(x + 14) = 0 \) </p>
<p>\( x = 7 \) </p>
<p>AB = X + 8 = 15,CA = x + 6 = 13</p>











<p><strong><em>13. Prove that opposite sides of a quadrilateral circumscribing a circle subtend supplementary
angles at the centre of the circle.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-1-2-13.png" alt="8" width="400" height="400" /></p></em></strong></p>
<p>Consider triangles OAP and OAS</p>
<p>OA = OA (common side)</p>
<p>AP = AS (common side)</p>
<p>OP = OS (common side)</p>
<p>so by SSS congruence condition triangles are congruent</p>
<p>so ∠ AOP  = ∠ AOS </p> 
<p>so ∠ 1  = ∠ 8 </p> 
<p>Simiarly ∠ 2  = ∠ 3,∠ 4  = ∠ 5,∠ 6  = ∠ 7 </p>
<p> ∠ 1 + ∠ 2 + ∠ 3 + ∠ 4 + ∠ 5 + ∠ 6 + ∠ 7 + ∠ 8  =  360 </p>
<p>Now do like in quesn 9 </p>

@stop