@extends('blog.layouts.math')





@section('content')

<br/>
<br/>
<div class="alert alert-danger" role="alert"> If you are seeing MATH PROCESSING ERROR,try ctrl + F5(hard refresh),if that doesnt solve ,clear the cache of your browser</div>
<p><strong>EXERCISE – 12.1</strong></p>

<p><strong><em>Question 1:2 cubes each of volume 64 cm 3 are joined end to end. Find the surface area of the
resulting cuboid.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Volume of cube = \(   a^{3}  \)</p>
<p> 64 = \(   a^{3}  \)</p>
<p> a  = 4  </p>
<p>When we will join 2  cubes end to end,it will become a cuboid with length = 8 cm,the breadth and height will remain same</p>
<p>The length = 8 cm,breadth = 4cm,height = 4cm </p>
<p>A cuboid has 6 rectangles,so total surface area = \( 2(lb + bh + hl) = 2(8\times 4 + 4\times 4 + 4\times 8) = 2(32 + 16 + 32) = 160 cm^{2}    \)
  
<p><strong><em>Question 2:A vessel is in the form of a hollow hemisphere mounted by a hollow cylinder. The
diameter of the hemisphere is 14 cm and the total height of the vessel is 13 cm. Find the
inner surface area of the vessel.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>The only caution you have to take is total height is given </p>
<p>Now total height  = height of  cyclinder + radius of hemisphere</p>
<p>13 = height of cylinder +   7cm              </p>
<p>height of cylinder = 13 - 7 = 6             </p>
<p>Inner surface area = area of cylinder + area of hemisphere</p>
<p> = \( 2\times \frac{22}{7}\times 7\times 6 + 2\times \frac{22}{7}\times 7^{2}   \)</p>
<p> = \( 44\times 6 + 44\times 7  =  572 cm^{2}  \)</p>


<p><strong><em>Question 3:A toy is in the form of a cone of radius 3.5 cm mounted on a hemisphere of same radius.
The total height of the toy is 15.5 cm. Find the total surface area of the toy.</em></strong></p>
<p>Solution:</p>
<p>This is like previous question just the difference is we have cone instead of cylinder in previous question</p>        
<p>Height of cone = 15.5 - 3.5 = 12cm         </p>
<p>Total  surface  area = area of cone + area of hemisphere</p>
<p>But we need to find slant height</p>
<p>using pythagoras theorem</p>
<p>\( l = \sqrt{12^{2} + 3.5^{2}} = \frac{25}{2}  \)</p>
<p>\( l = \sqrt{12^{2} + 3.5^{2}} = \frac{25}{2}  \)</p>
<p>Total  surface  area \(=  \frac{22}{7}\times 3.5\times \frac{25}{2} + 2\times \frac{22}{7}\times 3.5^{2} =  214.5 cm^{2}\)</p>





<p><strong><em>Question 4: . A cubical block of side 7 cm is surmounted by a hemisphere. What is the greatest
diameter the hemisphere can have? Find the surface area of the solid.</em></strong></p>

<p><strong>Solution:</strong></p>
<p><strong><em>This is a good question and a little tricky too and I think 90% of the students will get it wrong in the fist try,if you got it in first try without any help,congretulations you are definitely going to score above 90</em></strong></p>
<p>The greatest diamtere sphere can have  = equal to side of cube = 7 cm </p>
<p><strong><em>Now if we just add surface area of cube and hemisphere i.e \(  6 a^{2} + 2\pi\times r^{2}  \),since the \( 6a^{2} \) is basically the sum of area of six faces of cube but we dont have to include full area of top surface of cube in which hemisphere is surmounted,we have to only include \( a^{2} - \pi\times r^{2} \) of that upper square if cube,hemisphere CSA \(2\pi\times r^{2} \) doesnt include the area of circle ,its just the area of curved part of hemisphere</em></strong></p>

<p>Surface area of solid = surface area of cube + surface area of hemisphere - \( \pi\times r^{2} \)</p>
<p>\( = 6a^{2} + 2\pi\times r^{2} - \pi\times r^{2} \)</p>
<p>\( = 6a^{2} + \pi\times r^{2}  \)</p>
<p>\( = 6 a^{2} +  \frac{22}{7}\times (\frac{7}{2})^{2}   \)</p>
<p>\( = 294 + 38.5 = 332.5 cm^{2}  \)</p>



<p><strong><em>Question 5:A hemispherical depression is cut out from one face of a cubical wooden block such
that the diameter l of the hemisphere is equal to the edge of the cube. Determine the
surface area of the remaining solid..</em></strong></p>
<p><strong>Solution:</strong></p>

<p><strong><em>This needs some time to understand but this is just opposite of previous question with just a little twist</p>
<p>So 5 faces of cube are intact,so \( 5a^{2} \) is fixed,since the hemisphere is carved out,we will have to add CSA area of hemisphere part of cube so total area becomes \( 5a^{2} + 2\pi\times r^{2} \),now only thing remaining is sixth square from which hemiphere is carved out ,we will have to add \( a^{2} - \pi\times r^{2} \) to the total upto now.So final area will become \(  5a^{2} +  2\pi\times r^{2}  + a^{2} - \pi\times r^{2}           \).</em></strong></p>

<p>So Surface area of solid = surface area of cube + surface area of hemisphere - surface area of circular part</p>

<p>\( = 6 l^{2} +  2\times \frac{22}{7}\times (\frac{l}{2})^{2}  - \frac{22}{7}\times (\frac{l}{2})^{2}  \)</p>

<p>\( = 6 l^{2} +   \frac{22}{7}\times (\frac{l^{2}}{4}) = 6l^{2} + \pi\times \frac{l^{2}}{4}  \)</p>




<p><strong><em>Question 6:A medicine capsule is in the shape of a cylinder with two hemispheres stuck to each
of its ends. The length of the entire capsule is 14 mm and the diameter
of the capsule is 5 mm. Find its surface area.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-0-13-1-6.png" alt="8" width="400" height="300" /></p>

<p>We are given total height,at the twow ends of cylinder the hemisphere increase height each by r</p>
<p>Total height of capsule = height of cylinder + 2(radius of hemisphere)</p>
<p>14 = height of cylinder + \(2\times \frac{5}{2} \)</p>
<p>14 = height of cylinder + \(2\times \frac{5}{2} \)</p>
<p>14 = height of cylinder + 5 </p>
<p>height of cylinder = 9mm  </p>

<p>Surface area of capsule=  area of c yliner + area of hemisphere</p>
<p>= \(2\times \frac{22}{7}\times \frac{5}{2}\times 9 + 2(2\times \frac{22}{7}\times (\frac{5}{2})^{2}) \)</p>
<p>= \( \frac{44}{7}\times \frac{5}{2}\times 9 + \frac{88}{7}\times \frac{25}{4} \)</p>
<p>= \( \frac{44}{7}\times \frac{5}{2}\times 9 + \frac{88}{7}\times \frac{25}{4} \)</p>
<p>\( = 45\times \pi + 25\times \pi = 70\pi = 220 mm^{2}         \)</p>



<p><strong><em>Question 7:A tent is in the shape of a cylinder surmounted by a conical top. If the height and
diameter of the cylindrical part are 2.1 m and 4 m respectively, and the slant height of the
top is 2.8 m, find the area of the canvas used for making the tent. Also, find the cost of
the canvas of the tent at the rate of Rs 500 per m 2 . (Note that the base of the tent will not
be covered with canvas.).</em></strong></p>
<p><strong>Solution:</strong></p>
<p><strong>>em>There is one fine point you need to undertand is lateral surface area or curved surface area  and total surface area</br>
\( 2\pi\times r\times h \) is curved surface area of cylinder ,\( \pi\times r\times l \) is curved surface of cone ,\(2\pi\times r^{2} \) is curved surface area of hemisphere ,so it doesnt include the area of two circles in cyliner and it doesnt include area of circle in cone and it doesnt include area of circle in hemisphere.</em></strong></p>
<p>Now in this question we have a tent,and in the question it has been made clear that base of the tent will not
be covered with canvas ,we only have to find curved surface area ,notice the word curved,the area of only curved part </p>

<p>Area of canvas used = \( 2\pi\times \frac{2.1}{2}\times 4 + \pi\times \frac{2.1}{2}\times  2.8 \)</p>
<p>Area of canvas used = \( 2\pi\times 2.1\times 2 + \pi\times 2.1  1.4 \)</p>
<p>\( = 44 m^{2}  \)</p>

<p>Cost of the canvas of the tent = \( 44\times 500 = 22000 Rs \)</p>



<p><strong><em>Question 8:From a solid cylinder whose height is 2.4 cm and diameter 1.4 cm, a conical cavity of the
same height and same diameter is hollowed out. Find the total surface area of the
remaining solid to the nearest cm 2.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><strong><em>This is a very good question.In these type of questions,its very much required that you give attention to each word in the question,the cylinder is solid,from which a conical cavity is hollowed out.<br/>
If that would have  been a volume question,after hollowing out the volume would have decreased and the new volume would have been volume of cylinder - volume of cone<br/>
But since its a area question ,the surface area has increased since now along with curved surface area of cylinder we also have surface area of cone.This is the only thing you need to understand to solve this question</em></strong></p>

<p>Total surface area  of reamining solid = curved surface a rea of cylinder + area of circular part at bottom(since cylinder is solid,dont have to consider the circular part at top beacuse it has been hollowed out) +  curved surface area of cone</p>


<p>l(slant height of cone) \(= \sqrt{.7^{2} + 2.4^{2}} =  2.5\)</p>

<p>\(= (2\pi\times rh + \pi\times r^{2} + \pi\times rl \)</p>
<p>\(= (2\pi\times rh + \pi\times r^{2} + \pi\times rl \)</p>
<p>\(= (4.4\times 2.4 + 2.2\times 0.7 + 5.50 = 17.60 cm^{2}  = 18 cm^{2} (nearest cm^{2} )\)</p>



<p><strong><em>Question 9:A wooden article was made by scooping out a hemisphere from each end of a solid
cylinder, as shown in Fig. 13.11. If the height of the cylinder is 10 cm, and its  base is of radius 3.5 cm, find the total
surface area of the article.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-0-13-1-9.png" alt="8" width="400" height="300" /></p>

<p>So try to solve this question without looking at the solution ,this is similar to quesstion:7 </p>
<p>The cylinder was solid and then from both of its end two hemispheres are scooped out like when we eat icecream :) </p>
<p>Total surface area of the article =  curve surface area of the article + curved surface area of two  hemispheres</p>
<p> = \( 2\pi\times rh + 4\pi\times r^{2} \)</p>
<p> = \( 2\pi\times r ( h +  2r) \)</p>
<p> = \( 22 ( 10 +  7)  = 374 cm^{2} \)</p>


<p><strong>Exercise 13.2</strong></p>

<p><strong><em>Question 1:A solid is in the shape of a cone standing on a hemisphere with both their radii being
equal to 1 cm and the height of the cone is equal to its radius. Find the volume of the solid
in terms of π.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Here we have to find volume</p>
<p>Volume of solid = Volume of cone + Volume of hemisphere </p>
<p>= \(  \frac{1}{3}\times \pi\times 1^{2}\times 1 + \frac{2}{3}\times \pi\times 1^{3}  \)</p>
<p>= \(  \frac{\pi}{3} + \frac{2\pi}{3} = \pi cm^{3}  \)</p>



<p><strong><em>Question 2:Rachel, an engineering student, was asked to make a model shaped like a cylinder with
two cones attached at its two ends by using a thin aluminium sheet. The diameter of the
model is 3 cm and its length is 12 cm. If each cone has a height of 2 cm, find the volume
of air contained in the model that Rachel made. (Assume the outer and inner dimensions
of the model to be nearly the same.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Total height of model = height of cylider + 2(height of cone)</p>
<p>12 = height of cylider + 4 </p>
<p>height of cylider  = 8 </p>
<p>Volume of model = volume of cyliner + volume of two cones </p>
<p>=\( \pi\times (\frac{3}{2})^{2}\times 8 + 2(\frac{1}{3}\times \pi\times (\frac{3}{2})^{2}\times 2      )                          \)
<p>=\( \pi\times 9\times 2 +  \pi\times 3      = 21\pi = 66 cm^{3}                          \)




<p><strong><em>Question 3:A gulab jamun, contains sugar syrup up to about 30% of its volume. Find approximately how much
syrup would be found in 45 gulab jamuns, each shaped like a cylinder with two hemispherical ends
with length 5 cm and diameter 2.8 cm.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>                                   </p>
<p>The length of cylinder is 5 cm and radius of hemisphere at both ends is  1.4 cm       </p>
<p>Volume of gulab jamun =  volume of cylinder + 2(volume of hemispheres) </p>
<p> = \(  2\pi\times 1.4\times 5 + 2(\frac{2}{3}\times \pi\times 1.4^{3} )  \)</p>
<p> = \(  14\pi  + \frac{4}{3}\times \pi\times 1.4^{3}   \)</p>
<p> = \(  25.05 cm^{2}   \)</p>

<p>Volume of 45 gulab jamuns \( = 45\times 25.02 = 1127.25 cm^{2} \)</p>
<p>So amount of syrup in 45 gulab jamuns \( = 45\times 1127.25 = 338 cm^{2} \)</p>



<p><strong><em>Question 4:A pen stand made of wood is in the shape of a cuboid with four conical depressions to hold pens.
The dimensions of the cuboid are 15 cm by 10 cm by 3.5 cm. The radius of each of the depressions is 0.5
cm and the depth is 1.4 cm. Find the volume of wood in the entire stand (see Fig. 13.16).</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-0-13-2-4.png" alt="8" width="400" height="300" /></p>

<p>Volume of wood in the entire stand = Volume of cuboid -4(volume of each conical depression) </p>
<p>\( = 15\times 10\times 3.5  -4(\frac{1}{3}( \pi\times 3.5^{2}\times 1.4  )) \)</p>
<p>\( = 525  -4(\frac{1}{3}( \pi\times 3.5^{2}\times 1.4  )) =  525 - 1.47 = 523.53 cm^{2} \)</p>



<p><strong><em>Question 5:A vessel is in the form of an inverted cone. Its height is 8 cm and the radius of its top, which is
open, is 5 cm. It is filled with water up to the brim.When lead shots, each of which is a sphere of radius
0.5 cm are dropped into the vessel, one-fourth of the water flows out.Find the number of lead shots
dropped in the vessel.</em></strong></p>
<p><strong>Solution:</strong></p>
<p><strong><em>This is a question which tests your common sense and understanding of what volume actually is,<br/>
Inititally the vessel was totally filled ,when lead shots were dropped into vessel ,the water will flow out equal to the volume of lead shot</em></strong></p>

<p>Volume of vessel = \(  \frac{1}{3}\pi\times 5^{2}\times 8  = \frac{1}{3}\pi\times 200 \)</p>
<p>Volume of one lead shot = \( \frac{4}{3}\times \pi\times .5^{3}  \) </p>
<p>According to question</p>
<p>\( .4\times \frac{200\pi}{3}  = n\times \frac{4}{3}\times \pi\times .5^{3} \)</p>
<p>\(.4\times .75  \frac{200\pi}{3}  = n\times  \pi\times .125 \)</p>
<p>n = 100 </p>


<p><strong><em>Question 6:A solid iron pole consists of a cylinder of height 220 cm and base diameter 24 cm, which
is surmounted by another cylinder of height 60 cm and radius 8 cm. Find the mass of the pole, given that 1 cm 3 of iron has approximately 8g mass. (Use π = 3.14).</em></strong></p>
<p><strong>Solution:</strong></p>
<p>This is simple</p>
<p>Total Volume =  \(  \pi\times 12^{2}\times 220 + \pi\times 8^{2}\times 60   \)</p>
<p>=  \(  \pi\times 144\times 220 + \pi\times 64\times 60   \)</p>
<p>=  \(  \pi\times 144\times 220 + \pi\times 64\times 60   \)</p>
<p>\( = 111532 cm^{3} \)</p>
<p>Mass of iron pole = \( .008\times 111532 = 892.262 kg \)</p>


<p><strong><em>Question 7:A solid consisting of a right circular cone of height 120 cm and radius 60 cm standing on
a hemisphere of radius 60 cm is placed upright in a right circular cylinder full of water such that it touches the bottom. Find the volume of water left in the cylinder, if the radius of the cylinder is 60 cm and its height is 180 cm.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Volume of solid = volume of cone + volume of hemisphere  </p>
<p>\( = \frac{1}{3}\times \pi\times r^{2}\times h + \frac{2}{3}\times \frac{22}{7}\times r^{3}  \)</p>

<p>Volume of water left in the tank = volume of cylinder - volume of solid</p>
<p>=\(   \pi\times r^{2}\times h - (\frac{1}{3}\times \pi\times r^{2}\times h + \frac{2}{3}\times \frac{22}{7}\times r^{3})                       \)</p>

<p>=\(   \pi\times 60^{2}\times 180 - (  \frac{1}{3}\times \pi\times 60^{2}\times 120 + \frac{2}{3}\times \pi\times 60^{3}                              ) \)</p> 
<p>\( \pi\times 60^{2} (180 - (40 + 40)) \)</p>
<p>\(  360000\times \pi = 1.31 m^{3}                         \)</p>


<p><strong><em>Question 8:A spherical glass vessel has a cylindrical neck 8 cm long, 2 cm in diameter; the diameter
of the spherical part is 8.5 cm. By measuring the amount of water it holds, a child finds its volume to be 345 cm 3 . Check whether she is correct, taking the above as the inside measurements, and π = 3.14.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Volume of vessel = Volume of cylindrical part + Volume of sphere </p>
<p>= \( \pi\times 1^2\times 8 + \frac{4}{3}\times \pi\times (\frac{8.5}{2})^{3} \)</p>
<p>= \( 25.12 + 321.392 \)</p>
<p>= \( 346.51 cm^{2} \),hence she was wrongly acclaiming ,she was lying.</p>



<p><strong>Exercise 13.3</strong></p>

<p><strong><em>Question 1:A metallic sphere of radius 4.2 cm is melted and recast into the shape of a cylinder of
radius 6 cm. Find the height of the cylinder.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Volume before casting and after casting will remain same</p>
<p>Volume of sphere = Volume of cylinder</p>
<p>\( \frac{4}{3}\times \pi\times 4.2^{3}    = \pi\times 6^{2}\times h                         \)</p>
<p>\( \frac{1}{27}\times  4.2^{3}    =  h                         \)</p>
<p>\(  h =      2.74cm                    \)</p>


<p><strong><em>Question 2:Metallic spheres of radii 6 cm, 8 cm and 10 cm, respectively, are melted to form a single
solid sphere. Find the radius of the resulting sphere.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Volume before casting and after casting will remain same</p>
<p>Volume of spheres combined = Volume of single solid sphere</p>
<p>\( \frac{4}{3}\times \pi\times 6^{3} + \frac{4}{3}\times \pi\times 8^{3} + \frac{4}{3}\times \pi\times 10^{3}    = \frac{4}{3}\times \pi\times r^{3} \) </p>                    

<p>\( 216 + 512 + 1000    =  r^{3}                         \)</p>
<p>\(  r = 12 cm          \)</p>



<p><strong><em>Question 3:A 20 m deep well with diameter 7 m is dug and the earth from digging is evenly spread out
to form a platform 22 m by 14 m. Find the height of the platform.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Volume of well = Volume of platform </p>
<p>\(  \pi\times r^{2}\times h = lbh                                                 \)</p>
<p>\(  \pi\times 3.5^{2}\times 20 = 22\times 14\times h                                                 \)</p>
<p>\(  \pi\times 3.5^{2}\times 20 = 22\times 14\times h                                                 \)</p>
<p>\(  h = 2.5 \)</p>


<p><strong><em>Question 4:A well of diameter 3 m is dug 14 m deep. The earth taken out of it has been spread evenly
all around it in the shape of a circular ring of width 4 m to form an embankment. Find the height of the embankment.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Volume of well = Volume of platform </p>
<p>\(  \pi\times r^{2}\times 14 = \pi\times h ( 5^{2} - 1.5^{2})                                                 \)</p>
<p>\(  1.5^{2}\times 14 =  h ( 22.75)                                                 \)</p>
<p>\(  h = 1.125m                                                 \)</p>

<p><strong><em>Question 5:A container shaped like a right circular cylinder having diameter 12 cm and height 15 cm
is full of ice cream. The ice cream is to be filled into cones of height 12 cm and diameter 6 cm, having a hemispherical shape on the top. Find the number of such cones which can be filled with ice cream.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>\(  \pi\times 6^{2}\times 15 = n\times (\frac{1}{3}\times \pi\times 3^{2}\times 12 + \frac{2}{3}\times \pi\times 3^{3})                             \)</p>
<p>\(  540 = n\times (36 + 18)                             \)</p>
<p>\(  540 = n\times (54),n = 10                             \)</p>



<p><strong><em>Question 6:How many silver coins, 1.75 cm in diameter and of thickness 2 mm, must be melted to form
a cuboid of dimensions 5.5 cm × 10 cm × 3.5 cm?.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>According to question                      </p>
<p>\(  n\times \pi\times (\frac{1.75}{2})^{2}\times .2 = 5.5\times 10\times 3.5 \) (read the question well,thickness is given in mm and other lengths are given in cm)                </p>
<p>\(  n= 400                \)</p>



<p><strong><em>Question 7:A cylindrical bucket, 32 cm high and with radius of base 18 cm, is filled with sand. This
bucket is emptied on the ground and a conical heap of sand is formed. If the height of the
conical heap is 24 cm, find the radius and slant height of the heap?</em></strong></p>
<p><strong>Solution:</strong></p>
<p>We are given height,equating volumes we can find radius and then using pythagoras we can find slant height</p>
<p>\(  \pi\times 18^{2}\times 32 = \frac{1}{3}\times \pi\times r^{2}\times 24 \)</p>
<p>\(   18^{2}\times 4 =   r^{2} \)</p>
<p>\(   r = 36 cm \)</p>
<p>using pythagoras theorem</p>
<p>\(   l = \sqrt{36^{2} + 24^{2} } = 12\sqrt{13} cm     \)</p>



<p><strong><em>Question 8:Water in a canal, 6 m wide and 1.5 m deep, is flowing with a speed of 10 km/h. How much
area will it irrigate in 30 minutes, if 8 cm of standing water is needed?</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Little out of the box,but give it some time to understand</p>
<p>We all have seen canal there is some width of it and depth and then the water flows in the canal</p>
<p>It is given that water is flowing at a speed of 10 km per hour that is 5 km in 30 minutes</p>
<p>So in 30 minutes,the water will travel 5 km</p>
<p>Now next thing we need to understand it what is standing water here</p>
<p>Lets first calculate the volume which water in canal will cover by flowing at rate of 10 km per hour</p>
<p>\(V = lbh = 5000\times 6\times 1.5 = 30000\times 1.5 = 45000 m^{3}  \)</p>
<p>So 45000 \( m^{3} \) of volume will flow in 30 minutes </p>
<p>Now we dont need 1.5m deep for irrigation we need only 8 cm standing water that is height of water in canal</p>
<p>Equating volumes</p>
<p>\( 45000  =    A\times .08,A = 562500 cm^{2} \)</p>



<p><strong><em>Question 9:A farmer connects a pipe of internal diameter 20 cm from a canal into a cylindrical tank in
her field, which is 10 m in diameter and 2 m deep. If water flows through the pipe at the rate of 3 km/h, in how much time will the tank be filled??</em></strong></p>
<p><strong>Solution:</strong></p>
<p><strong><em>Do the easy things first in question even if you dont understand you will get marks due to step marking</em></strong></p>
<p>Volume of cylindrical tank = \(  \pi\times 5^{2}\times 2 = 50\pi m^{3}                \)</p<
<p>Area of cross section of pipe \( = \pi\times .2^{2} = .04\pi m^{2}                 \)</p>
<p>Volume of water coming out of water in 1 hour \( = 3000\times .04\pi m^{3} \)</p>
<p>Time taken to fill \( 50\pi m^{3} =  \frac{5\times 60}{3} = 100 minutes \)</p>
<p><strong><em>Dont get panic by these sort of questions,they are just an alternative way to calculate volume,in all these kind of questions instead of giving directly volume they give you cross section and speed of water,think of this as you have a big tank and you connect pipe to it .<br/>
Now the water will flow in pipe ,what flow actually mean is water will cover that much distance that is because we dont have a still source of water,water is coming continuosly from some source,so suppose in the starting water was at some point in pipe and after 3 seconds water comes out of pipe ,and pipe is 1 m long,that means that full area is now fill with water.
<br/>
Previosuly there was air in pipe but now in all that 1 m there is water so you have 1 multiplied by cross section volume of water</em> </strong></p>


<p><strong>Exercise 12.4</strong></p>
<p><strong><em>Question 1:A drinking glass is in the shape of a frustum of a cone of height 14 cm. The diameters of its two
circular ends are 4 cm and 2 cm. Find the capacity of the glass?</em></strong></p>
<p><strong>Solution:</strong></p>
<p>According to question:</p>
<p>\(  r_{1} = 2            \)</p>
<p>\(  r_{2} = 1           \)</p>
<p>  Volume of frustum of cone = \( \frac{1}{3}\times \pi\times h ( r_{1}^{2} + r_{2}^{2} + r1\times r2    )                 \)</p>
<p> = \( \frac{1}{3}\times \pi\times 14 ( 2^{2} +  1^{2} + 2\times 1 )                 \)</p>
<p> = \( \frac{1}{3}\times 22\times 14                \)</p>
<p> = \( 102\frac{2}{3} cm^{3}                \)</p>


<p><strong><em>Question 2:The slant height of a frustum of a cone is 4 cm and the perimeters (circumference) of its circular ends are 18 cm and 6 cm. Find the curved surface area of
the frustum.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>According to question:</p>
<p>\(  2\pi\times r_{1} = 18, r_{1} = \frac{9}{\pi}            \)</p>
<p>\(  2\pi\times r_{2} = 6, r_{2} = \frac{3}{\pi}            \)</p>
<p>Curved surface area of frustum = \( \pi ( r_{1} + r_{2} )l                     \)</p>
<p> = \( \pi ( \frac{9}{\pi} + \frac{3}{\pi} ) 4                     \)</p>
<p> = \( \pi ( \frac{12}{\pi} ) 4    = 48 cm^{2}  \)</p>



<p><strong><em>Question 3:A fez, the cap used by the Turks, is shaped like the frustum of a cone (see Fig. 13.24). If its radius on the open side is 10 cm, radius at the upper base is 4 cm and its slant height is 15 cm, find the area of material
used for making it.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>The only attention we have to take care in this question is that the side with larger radius is open so we dont have to include area  of that part</p>
<p>Area of material used for making it = \(  curved s urface area of frustum + area of upper circlular end                          \)</p>
<p>= \(  \pi\times 15(10 + 4 ) + \pi\times 4^{2}   \)</p>
<p>= \(  \pi\times 210 + \pi\times 16 =  226\pi = 710\frac{2}{7} cm^{2}   \)</p>


<p><strong><em>Question 4:A metallic right circular cone 20 cm high and whose vertical angle is 60° is cut into two parts at the middle of its height by a plane parallel to its base. If the frustum so obtained \( \frac{1}{6}   \) be drawn into a wire of diameter cm, find the length of the wire.</em></strong></p>
<p><strong>Solution:</strong></p>
<p>We are given the diametre of the wire and we have to find the lrgnth of the wire,a wire has circular cross sectional area so its a cylinder,we will have to equate volumes </p>
<p>Height  of frustum is \( \frac{20}{2} = 10  \),we are not given radius of two ends of frustum of cone,but we are given angle of cone and height so we can use that to calualte the two radius at both ends</p> 

<p>Total vertical angle is 60


<p>\( tan 30 = \frac{r_{1}}{10},r_{1} = \frac{10}{\sqrt{3}}  \)</p>
<p>\( tan 30 = \frac{r_{2}}{20},r_{2} = \frac{20}{\sqrt{3} } \)</p>
<p>Equating volume of frustum and wire,we get</p>

<p>\( \frac{1}{3}\times \pi\times 10 ( \frac{(10\sqrt{3})^{2}}{3^{2}} + \frac{(20\sqrt{3})^{2}}{3^{2}} + \frac{10\sqrt{3}} {3}\times \frac{20\sqrt{3}}{3} ) = \pi\times (\frac{1}{32})^{2}\times l  \)</p>



<p>\( \frac{1}{9}\times  10 ( (100 + 400 + 200 ) =  (\frac{1}{32})^{2}\times l     \)</p> 
<p>\(   \frac{1}{9}\times 7000\times 1024  =  l     \)</p> 
<p>\(   l = 796444.44 cm = 7964.444 m    \)</p> 






<p><strong>Exercise 13.5</strong></p>

<p><strong><em>Question 1:A copper wire, 3 mm in diameter, is wound about a cylinder whose length is 12 cm, and
diameter 10 cm, so as to cover the curved surface of the cylinder. Find the length and
mass of the wire, assuming the density of copper to be 8.88 g per cm 3 .</em></strong></p>
<p><strong>Solution:</strong></p>
<p>This is akind of question where you dont know where to start,so its advised not to panic if you see a new question in e xam,because in the end either  it will be calcualting area or volume then applyinng some logic over it</p>

<p>We are only given diametre of copper wire which is going to be wounded around the cylinder</p>
<p>When we wind copper wire around cylinder,what happens,how much length of wire we will need on one round</p>
<p>This is easy as the length of wire in one round needed = \(  2\pi\times 5   = 10\pi \)</p>
<p>How much height of the cylinder will it cover in 1 round?</p>
<p>Since the diamtere of the wire is 3mm,in one round it covers 3mm height of cyliner,now we can calcualte the volume of wire used in one round since we know length of wire needed in one round and diamtere of wire and since we also know the total height of cylinder and the height wire is able to cover in 1 round,we can calcualte the number of rounds of wire needed to wind up the cylinder</p>

<p>No of rounds of wire needed to completely cover the cylinder = \( \frac{12}{.3} = 40 rounds            \)</p>
<p>Volume of wire in one round = \( \pi\times r^{2}\times h = \pi\times (.15)^{2}\times 10\pi             \)</p>
<p>Mass of the wire needed = \( Total volume\times mass of 1 cm^{3} volume of wire = 10\times (\pi)^{2}\times (.15)^{2}\times   8.88      = 789.41 cm^{3} \)</p>



<p><strong><em>Question 2:A right triangle, whose sides are 3 cm and 4 cm (other than hypotenuse) is made to
revolve about its hypotenuse. Find the volume and surface area of the double cone so
formed. (Choose value of π as found appropriate.)</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-0-13-5-2.png" alt="8" width="400" height="300" /></p>



<p>Once again a difficult question ,if the question would have been revolving around the perpendicular side it was easy,but here the triangle is rotated around hypotenuse which will form two cones and we need to find the volume and surface area of double cone genrated</p>

<p>The radius of both the cones is same,and do we need to find the individual heights of cone</p>
<p>The answer is no,since while adding up radius will come common and heights h1 and h2 will add up,so only total height is added</p>


<p>So we need to find OB</p>
<p>Since we know its right angle triangle</p>
<p>Area of traingle ABC = \( \frac{1}{2} ( 3\times 4        )              \)</p>
<p> = \( \frac{1}{2}\times AC\times OB  =  \frac{1}{2} ( 3\times 4        )              \)</p>
<p> = \(  5\times OB  =   3\times 4   \)</p>
<p> = \(   OB  =   2.4   \)</p>


<p>Volume of cone = \(  \frac{1}{3}\times \pi r^{2} ( h1 + h2) \)</p>
<p>= \(  \frac{1}{3}\times \pi 2.4^{2}\times 5 \)</p>
<p>= \(  30.14 cm^{3} \)</p>


<p>Surface area of cone =\(  \pi\times r_{1}l + \pi\times r_{2}l      \)</p>
<p> = \(  \pi\times l (r_{1} + r_{2} )   =  52.75 cm^{2}    \)</p>


<p><strong><em>Question 3:A cistern, internally measuring 150 cm × 120 cm × 110 cm, has 129600 cm 3 of water in it.
Porous bricks are placed in the water until the cistern is full to the brim. Each brick absorbs one-seventeenth of its own volume of water. How many bricks can be put in without overflowing the water, each brick being 22.5 cm × 7.5 cm × 6.5 cm?</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Unlike previous two questions this is simple question,no extra brain needed,just a concept of percentage over normal question</p>

<p>Volume of cistern =  150  × 120  × 110 = 1980000 \( cm^{3} \)</p>
<p>Volume of water   =  129600 \( cm^{3} \)  </p>
<p>Space of extra volume in cistern =  1980000 -  129600 =  1850400 \( cm^{3} \)</p>
<p>Space of extra volume in cistern =  1980000 -  129600 =  1850400 \( cm^{3} \)</p>
<p>Volume of one brick \( = 22.5\times 7.5\times 6.5 = 1096.875 cm^{3} \)</p>
<p>Each brick absorbs \( \frac{1}{17}th \) of its volume that there will be increase  in \(  \frac{16}{17} \)  volume of one brick in putting one brick in water                 </p>

<p>So now according to the question </p>
<p>\(  N\times .3\times 1096.875 =     1850400    \)</p>
<p>\(          N\times  \frac{16}{17} =     1850400    \)</p>
<p>\(          N =     \frac{1850400\times 17}{16} = 1792.41     \)</p>

<p><strong>Now a question to you will the answer be 1792 or 1793 ??</strong></p>



<p><strong><em>Question 4:In one fortnight of a given month, there was a rainfall of 10 cm in a river valley. If the area
of the valley is 7280 km 2 , show that the total rainfall was approximately equivalent to the addition to the normal water of three rivers each 1072 km long, 75 m wide and 3 m deep?</em></strong></p>
<p><strong>Solution:</strong></p>
<p> This is simple enough we have to just show volumes are equal,just that we have to take precaution of units.</p>

<p>Volume of rainfall = \(  7280000000\times .1 m^{3}   =  728000000  = .7 km^{3} \)</p>
<p>Volume of three rivers combined = \( 3\times ( 1072000\times 75\times 3 ) = 3\times 241200000 = 723600000 m^{3} = .7 km^{3} \)</p>




<p><strong><em>Question 5:An oil funnel made of tin sheet consists of a 10 cm long cylindrical portion attached to a
frustum of a cone. If the total height is 22 cm,diameter of the cylindrical portion is 8 cm and the diameter of the top of the funnel is 18 cm,find the area of the tin sheet required to make
the funnel (see Fig. 13.25)?</em></strong></p>
<p><strong>Solution:</strong></p>
<p>Radius of upper circular end of frustum part = 9                   </p>
<p>Radius of lower circular end of frustum part = 4                   </p>
<p>Height of frustum part = 22 - 10 = 12                   </p>
<p>Height of cylindrical part  = 10                   </p>
<p>Slant height of frustum part = \( \sqrt{(9-4)^{2} + 12^{2}} = 13                     \)</p>


<p>Area of tin sheet required = curved surface area  of frustum part + curved surface area of cylindrical part</p>
<p> = \(  \pi(r_{1} + r_{2})l +  2\pi\times r_{2}\times h_{2}  \)</p>
<p> = \(  \pi(9 + 4)13 +  2\pi\times 4\times 10  \)</p>
<p> = \(  782\frac{4}{7} cm^{3}  \)</p>



<p><strong><em>Question 6:Derive the formula for the curved surface area and total surface area of the frustum of a
cone, given to you in Section 13.5,using the symbols as explained?</em></strong></p>
<p><strong>Solution:</strong></p>
<p><img class="alignnone wp-image-2112" src="/10-0-13-5-6.png" alt="8" width="400" height="300" /></p>

<p>The basic logic is we have to find the difference between curved surface area of bigger cone and smaller cone</p>
<p>We are given \( r_{1} and r_{2} \) and l the slant height of the frustum  </p>
<p>Let the slant height of bigger cone is \( l_{1} \) and of that smaller cone is \(  l_{2} \) </p>

<p>CSA of bigger cone  = \(  \pi\times r_{1}\times l_{1}               \)</p>
<p>CSA of smaller cone = \(  \pi\times r_{2}\times l_{2}               \)</p>

<p>Curved surface area of frustum =   CSA of bigger cone -   CSA of smaller cone   </p>
<p>=\(  \pi\times r_{1}\times l_{1}   -  \pi\times r_{2}\times l_{2}                   \)</p>
<p>=\(  \pi\times r_{1}\times (l + l_{2})   -  \pi\times r_{2}\times l_{2}   ...(1)                 \)</p>

<p>All things are in place just we need to find value of \( l_{2}  \) in terms of things known which are \( r_{1},r_{2},l   \) 

<p>Since DE || BG</p>
<p>\( \frac{DF}{BG} = \frac{AD}{AB}           \)</p>
<p>\( \frac{r_{2}}{r_{1}} = \frac{l_{2}}{l + l_{2}}    \)</p>
<p>\(     r_{2} (l + l_{2})  = r_{1}l_{2}                    \)</p>
<p>\(     r_{2}l + r_{2}l_{2})  = r_{1}l_{2}    \)</p>
<p>\(     r_{2}l    = r_{1}l_{2} - r_{2}l_{2}   \)</p>
<p>\(     r_{2}l    = l_{2} (r_{1} - r_{2} )   \)</p>
<p>\(     l_{2}     =   \frac {r_{2}l} {r_{1} - r_{2}}                     \)</p>


<p>putting in equation 1</p>
<p>=\(  \pi\times r_{1}\times (l + l_{2})   -  \pi\times r_{2}\times l_{2}   ...(1)                 \)</p>
<p>=\(  \pi\times r_{1}\times (l + \frac {r_{2}l} {r_{1} - r_{2}} )   -  \pi\times r_{2}\times \frac {r_{2}l} {r_{1} - r_{2}}   ...(1)                 \)</p>

<p>=\(  \pi\times r_{1}l + \frac {\pi\times r_{1}\times r_{2}l} {r_{1} - r_{2}} )   -  \frac {\pi\times r_{2}^{2}l} {r_{1} - r_{2}}   ...(1)                 \)</p>

<p>=\(  \pi\times r_{1}l + \pi\times r_{2}l = \pi\times l(r_{1} + r_{2}                \)</p>


<p>So total surface area \( = \pi\times l(r_{1} + r_{2})  + \pi\times r_{1}^{2} +  \pi\times r_{2}^{2} \)</p>





<p><strong><em>Question 7:Derive the formula for the volume of the frustum of a cone, given to you in Section 13.5,
using the symbols as explained?</em></strong></p>
<p><strong>Solution:</strong></p>

<p>This is like previous question,refer to the same diagram, this time you need to find relation for \( h_{2}\) in terms of h,\(r_{1}\) and \(r_{2} \)</p>
<p>Using same logic as in previous question</p>

<p>Since DE || BG</p>
<p>\( \frac{DF}{BG} = \frac{AF}{AG}           \)</p>
<p>\( \frac{r_{2}}{r_{1}} = \frac{h_{2}}{h + h_{2}}    \)</p>
<p>\(     h_{2}     =   \frac {r_{2}h} {r_{1} - r_{2}}                     \)</p>


<p>Volume of cone = \(  \frac{1}{3}\times \pi\times r_{1}^{2}\times h_{1} -   \frac{1}{3}\times \pi\times r_{2}^{2}\times h_{2}                            \)</p>


<p>Volume of cone = \( \frac{1}{3}\times \pi\times r_{1}^{2}\times ( h + \frac {r_{2}h} {r_{1} - r_{2}}) -   \frac{1}{3}\times \pi\times r_{2}^{2}\times h_{2}  \)</p>


<p>Volume of cone = \( \frac{1}{3}\times \pi\times r_{1}^{2}\times (h + \frac {r_{2}h} {r_{1} - r_{2}}) -   \frac{1}{3}\times \pi\times r_{2}^{2}\times   \) </p>

<p>Volume of cone = \( \frac{1}{3}\times \pi\times h (r_{1}^{2}  + \frac {r_{2}} {r_{1} - r_{2}}) -    r_{2}^{2}\times \frac{r_{2}h}{r_{1} - r_{2}}   \) </p>


<p>Volume of cone = \( \frac{1}{3}\times \pi\times h (r_{1}^{2}  + \frac {r_{2}r_{1}^{2}} {r_{1} - r_{2}} -   \frac {r_{2}^{3}} {r_{1} - r_{2}}) \)</p>

<p>Volume of cone = \( \frac{1}{3}\times \pi\times h \frac{r_{1}^{3} - r_{1}^{2}r_{2} + r_{1}^{2}r_{2} - r_{2}^{3}   }      {r_{1} - r_{2}}  \)</p>

<p>Volume of cone = \( \frac{1}{3}\times \pi\times h(r_{1}^{2} + r_{2}^{2} + r_{1}r_{2} ) \) </p>


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