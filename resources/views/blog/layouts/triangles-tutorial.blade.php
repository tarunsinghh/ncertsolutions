@extends('blog.layouts.math')


@section('content')

<br/>
<br/>
<p  style= "color:red";><strong>If you are seeing MATH PROCESSING ERROR,try ctrl + F5(hard refresh),if that doesnt solve ,clear the cache of your browser</strong></strong></em>


<p><strong><em>We are talking about a very common mistake students used to do which is misunderstanding SAS congruence condition</em></strong></p>

<p>What students used to think is two sides of a triangle and one angle is equal to other two sides and angle of other triangle,then triangles are congruent,which is not true,it can be true but its not always</p>


<p><strong><em>In the SAS congruence rule, the pair of equal angles has to be the included angle between the pairs of corresponding pair of equal sides and
if this is not so, the two triangles may not be congruent.</em></strong></p>

<p><strong>The angle needs  to be the angle between the two sides which are equal not just any angle</p>

<p>Now we will talk about the RHS congruence rule which is:</p>

<p><strong><em>If in two right triangles the hypotenuse and one side of one triangle are equal to the hypotenuse and one side of the
other triangle, then the two triangles are congruent.</em></strong></p>


<p>The hypotenuse need to be equal and we need one side more,it can be base or altitude,any one of the remianing sides </p>

<p>Now we will solve a beautiful question on this:</p>

<p><strong><em>AB is a line-segment. P and Q are points on opposite sides of AB such that each of them
is equidistant from the points A and B (see Fig. 7.37). Show that the line PQ is the perpendicular bisector
of AB.</em></strong></p>

<p>Solution :</p>
<p> You are given that PA = PB and
QA = QB and you are to show that PQ ⊥ AB and
PQ bisects AB. Let PQ intersect AB at C.</p>
<p>Can you think of two congruent triangles in this figure?</p>
<p>Let us take ∆ PAQ and ∆ PBQ.</p>

<p>AP = BP (Given)</p>
<p>AQ = BQ (Given)</p>
<p>PQ = PQ (Common)</p>
<p>So, ∆ PAQ ≅ ∆ PBQ (SSS rule)</p>
<p>Therefore, ∠ APQ = ∠ BPQ (CPCT).</p>
<p>Now let us consider ∆ PAC and ∆ PBC.</p>
<p>You have :</p>
<p>AP = BP Given)</p>
<p>∠ APC = ∠ BPC (∠ APQ = ∠ BPQ proved above)</p>
<p>So,</p>
<p>PC = PC (Common)</p>
<p>∆ PAC ≅ ∆ PBC (SAS rule)</p>
<p>AC = BC (CPCT) (1)</p>
<p>Therefore,</p>
<p>and</p>
<p>Also,</p>
<p>∠ ACP = ∠ BCP (CPCT)</p>
<p>∠ ACP + ∠ BCP = 180°</p>
<p>So, 2∠ ACP = 180°</p>
<p>or, ∠ ACP = 90°</p>
<p>From (1) and (2), you can easily conclude that PQ is the perpendicular bisector of AB.</p>

<p><strong><em>
[Note that, without showing the congruence of ∆ PAQ and ∆ PBQ, you cannot show
that ∆ PAC ≅ ∆ PBC even though AP = BP
(Given)
PC = PC
and
(Common)
∠ PAC = ∠ PBC (Angles opposite to equal sides in
∆APB)
It is because these results give us SSA rule which is not always valid or true for
congruence of triangles. The angle is not included between the equal pairs of
sides hence not necessary congruent.]
</em></strong></p>


@stop























