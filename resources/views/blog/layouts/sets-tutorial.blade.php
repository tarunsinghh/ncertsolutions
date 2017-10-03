@extends('blog.layouts.math')

@section('content')
<br/>
<br/>

<p>Consider this question,even if you are class 9 students or class 10 students please try to attemp it</p>

<p><strong><em>In a college, where every student follows at least one of the three activities- drama, sports, or arts- 65% follow drama, 86% follow sports, and 57% follow arts. What can be the maximum and minimum percentage of students who follow
a·          all three activities
b·          exactly two activities
</em></strong></p>


<p>Now consider a student who dont know any formula,and he  approach this question,who completely dont know about sets,union,intersection</p>


<p>So he reads the question:</p>
<p>He knows the meaning of percentage,percentage means out of 100,so we are given all percentage</p>
<p>So out of 100 students,student follows at least one of the three activities</p>
<p>WHAT DOES THAT MEAN?</p>
<p>That means that you pick any student out of 100 students,he will follow atleast one sport,he/she may follow 2 sports,he/she may follow 3 sports</p>
<p>How many students follow 1,2,3 sports we are not given</p>
<p>What we are given is 65% follow drama,86% sports,57% follow arts</p>
<p>Now if you will add the numbers 65 + 86 + 57 =  208</p>
<p>But we had only 100 students,how the no of students going above 100</p>
<p>The student gets panicked,he dont know how to go from here,then he tries to make a simple example</p>
<p>He assumes lets forget there are 3 sports,there are only 2 things say drama and sports ,and we have total 5 people ,I know there are only 5 people,say A,B,C,D,E.</p>
<p>Now 3 follows drama say A,B,C</p>
<p>And we are left with 2 people</p>
<p>If only two people will follow sports,then how many follows both drama and sports</p>
<p>The answer is none,but if there are 3 people who follow sports,how many follow both sports and drama</p>
<p>Now you know there were only 5 people ,3 follows drama,and 3 follows sports,dat means there is one person who follows both sports and drama</p>
<p><strong><em>Now this is the main point:Now see how the question has become ,out of 5 students,there are 3 who follows drama and 3  who follows sports,how many follow both sports and drama?</em></strong></p>
<p><strong><em>Now the guy who folllows both cricket and sport will come in counting of when we will count how many follows drama and we will count him again when we will be counting who follows sports,but the person is same,we are counting him twice ,dats the core element you need to understand</em></strong></p>


<p>So for findind  who follows both drama and sports=you add up people who follows each sports = 3 + 3</p>
<p>You know the actual no of people = 5,so we are counting one extra,because 1 follows both drama and sports = 6 - 5</p>

<p>Now when the three groups are involved the situation becomes little tricky</p>
<p>There can be some people who like 2 out of three ,there can be people who follow exactly one group,there can be people who follow all three groups</p>

<p>So lets say we have 3 groups ,how we can find who follows exactly one,2 and similar kind of questions</p>

<p>Now what we can do is we first add the no of people who likes each group,now this sum will be greater than actual number of people</p>
<p>Say three groups are drama,sports and arts</p>
<p>We already know 208 is the sum of people liking each group</p>
<p>We will have to subtract some numbers from it,there will be some people who may follow exactly two out of them</p>
<p>We will have to subtract those numbers from 208 as we will counting them two times ,one in each group ,but we need to count them only once</p>
<p>But there will be some people who may follow all 3</p>
<p>And those people we have already subtracted three times as they will also be counted in persons who follows exactly 2 groups</p>
<p>Lets take an example 10 persons are there,4 follows drama,5 sports,5 arts,2 follows drama and sports,2 sports and arts and 2 arts and drama ,we have to find how many follow all 3</p>
<p>so total = 4 + 5 + 5 = 14</p>
<p>2 follows drama and sports so 14 - 2 = 12</p>
<p>2 follows sports and arts so 12 - 2 = 10</p>
<p>2 follows arts and drama so 10 - 2 = 8</p>
<p>But total people are 10,how come 8 is coming</p>
<p>because we have done a mistake there will be some people who  follows all three ,we have subtracted them 3 times,since he was coming in 3 groups we have counted him 3 times ,like if there is one person who was in all three groups then he will also come in exactly two groups so we have subtrctaed him 3 times,but we still need to count him,so thats 8 + 2  = 10 ,there are 2 people who follows all three groups</p>
<p>Lets do the proof</p>
<p>so how many likes only drama  = 4 - 2 - 2 + 2  = 2.(same logic as above) 
<p>so how many likes only sports = 5 - 2 - 2 + 2  = 3.(same logic as above) 
<p>so how many likes only arts   = 5 - 2 - 2 + 2  = 3.(same logic as above) 
<p>How many likes all three            = 2</p>
<p>How many likes drama and sports but not arts ??




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
































