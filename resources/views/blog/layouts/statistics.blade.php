@extends('blog.layouts.math')

@section('content')

<br/>
<br/>
<div class="alert alert-danger" role="alert"> If you are seeing MATH PROCESSING ERROR,try ctrl + F5(hard refresh),if that doesnt solve ,clear the cache of your browser</div>


<p><strong><em>Exercise 14.1</em></strong></p>

<p><strong>Question 1:<br/>
A survey was conducted by a group of students as a part of their environment awareness
programme, in which they collected the following data regarding the number of plants in
20 houses in a locality. Find the mean number of plants per house.</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="80"><strong>No. of Plants</strong></p>
<p><strong>Taken from 20 houses</strong></td>
<td width="80">&nbsp;</p>
<p>0-2</td>
<td width="80">&nbsp;</p>
<p>2-4</td>
<td width="80">&nbsp;</p>
<p>4-6</p>
<p>&nbsp;</td>
<td width="80">&nbsp;</p>
<p>6-8</td>
<td width="80">&nbsp;</p>
<p>8-10</td>
<td width="80">&nbsp;</p>
<p>10-12</td>
<td width="80">&nbsp;</p>
<p>12-14</td>
</tr>
<tr>
<td width="80"><strong>Given number of houses</strong></td>
<td width="80">&nbsp;</p>
<p>1</td>
<td width="80">&nbsp;</p>
<p>2</td>
<td width="80">&nbsp;</p>
<p>1</td>
<td width="80">&nbsp;</p>
<p>5</td>
<td width="80">&nbsp;</p>
<p>6</td>
<td width="80">&nbsp;</p>
<p>2</td>
<td width="80">&nbsp;</p>
<p>3</td>
</tr>
</tbody>
</table>
<p>Name the method you use for finding the mean and why?</p>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<p><strong>Solution:</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="188"><strong>Class Interval</strong></td>
<td width="160"><strong>f<sub>i</sub></strong></td>
<td width="160"><strong>x<sub>i</sub></strong></td>
<td width="160"><strong>f<sub>i</sub> x<sub>i</sub></strong></td>
</tr>
<tr>
<td width="188">0-2</td>
<td width="160">1</td>
<td width="160">1</td>
<td width="160">1</td>
</tr>
<tr>
<td width="188">2-4</td>
<td width="160">2</td>
<td width="160">3</td>
<td width="160">6</td>
</tr>
<tr>
<td width="188">4-6</td>
<td width="160">1</td>
<td width="160">5</td>
<td width="160">5</td>
</tr>
<tr>
<td width="188">6-8</td>
<td width="160">5</td>
<td width="160">7</td>
<td width="160">35</td>
</tr>
<tr>
<td width="188">8-10</td>
<td width="160">6</td>
<td width="160">9</td>
<td width="160">54</td>
</tr>
<tr>
<td width="188">10-12</td>
<td width="160">2</td>
<td width="160">11</td>
<td width="160">22</td>
</tr>
<tr>
<td width="188">12-14</td>
<td width="160">3</td>
<td width="160">13</td>
<td width="160">39</td>
</tr>
<tr>
<td width="188"></td>
<td width="160">Sum <strong>f<sub>i</sub></strong>=20</td>
<td width="160"></td>
<td width="160">Sum <strong>f<sub>i</sub>x<sub>i</sub></strong>=162</td>
</tr>
</tbody>
</table>
<p>Mean can be calculated as follows:</p>
\(\bar{x}= \frac{\Sigma f_{i}x_{i}}{\Sigma f_{i}}=\frac{162}{20}=8.1 \)
<p>In this issues the \( f_{i} and x_{i}\) are small so the direct method is given to solve the problem.</p>
<p>&nbsp;</p>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>


<p><strong>Question 2:<br/>
Consider the following distribution of daily wages of 50 workers of a factory.</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="135"><strong>Daily wages given to workers (in Rs)</strong></td>
<td width="82">100-120</td>
<td width="89">120-140</td>
<td width="82">140-160</td>
<td width="93">160-180</td>
<td width="119">180-200</td>
</tr>
<tr>
<td width="135"><strong>Number of wage workers in factory</strong></td>
<td width="82">12</td>
<td width="89">14</td>
<td width="82">8</td>
<td width="93">6</td>
<td width="119">10</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p><strong>Find the mean of workers of daily wages given by the workers.</strong></p>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<p>In this case, value of xi is quite large and hence we should select the assumed mean method.</p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="157"><strong>Class given Interval</strong></td>
<td width="96"><strong>f<sub>i</sub></strong></td>
<td width="66"><strong>x<sub>i</sub></strong></td>
<td width="78"><strong>d<sub>i</sub> = x<sub>i</sub> &#8211; a</strong></td>
<td width="114"><strong>f<sub>i</sub> d<sub>i</sub></strong></td>
</tr>
<tr>
<td width="157">100-120</td>
<td width="96">12</td>
<td width="66">110</td>
<td width="78">-40</td>
<td width="114">-480</td>
</tr>
<tr>
<td width="157">120-140</td>
<td width="96">14</td>
<td width="66">130</td>
<td width="78">-20</td>
<td width="114">-280</td>
</tr>
<tr>
<td width="157">140-160</td>
<td width="96">8</td>
<td width="66">150</td>
<td width="78">0</td>
<td width="114">0</td>
</tr>
<tr>
<td width="157">160-180</td>
<td width="96">6</td>
<td width="66">170</td>
<td width="78">20</td>
<td width="114">120</td>
</tr>
<tr>
<td width="157">180-200</td>
<td width="96">10</p>
<p>&nbsp;</td>
<td width="66">190</td>
<td width="78">40</td>
<td width="114">400</p>
<p>&nbsp;</td>
</tr>
<tr>
<td width="157"></td>
<td width="96">Sum <strong>f<sub>i</sub></strong>=50</td>
<td width="66"></td>
<td width="78"></td>
<td width="114">Sum <strong>f<sub>i</sub> d<sub>i</sub></strong> = -240</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>Now, mean of deviations of daily wagesis calculated as follows:</p>
\(\bar{d}=\frac{\sum f_{i}d_{i}}{\sum f_{i}}=\frac{-240}{50}\)
<p>x = d + a = 150+(-4.8)= 145.20</p>
</div>
<p>&nbsp;</p>



<p><strong>Question 3:</strong></p>
<p><strong>This distribution shows that the money daily pocket given to students in the given area. The mean pocket money is Rs. 18. Find the f which is the missing frequency.</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="80"><strong>Daily money allowance (in Rs)</strong></td>
<td width="80">&nbsp;</p>
<p>11-13</td>
<td width="80">&nbsp;</p>
<p>13-15</td>
<td width="80">&nbsp;</p>
<p>15-17</td>
<td width="80">&nbsp;</p>
<p>17-19</td>
<td width="80">&nbsp;</p>
<p>19-21</td>
<td width="80">&nbsp;</p>
<p>21-23</td>
<td width="80">&nbsp;</p>
<p>23-25</td>
</tr>
<tr>
<td width="80"><strong>Number of children</strong></td>
<td width="80">&nbsp;</p>
<p>7</td>
<td width="80">&nbsp;</p>
<p>6</td>
<td width="80">&nbsp;</p>
<p>9</td>
<td width="80">&nbsp;</p>
<p>13</td>
<td width="80">&nbsp;</p>
<p>f</td>
<td width="80">&nbsp;</p>
<p>5</td>
<td width="80">&nbsp;</p>
<p>4</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="180"><strong>Class interval</strong></td>
<td width="154"><strong>f<sub>i</sub></strong></td>
<td width="151"><strong>x<sub>i</sub></strong></td>
<td width="155"><strong>f<sub>i</sub>x<sub>i</sub></strong></td>
</tr>
<tr>
<td width="180">11-13</td>
<td width="154">7</td>
<td width="151">12</td>
<td width="155">84</td>
</tr>
<tr>
<td width="180">13-15</td>
<td width="154">6</td>
<td width="151">14</td>
<td width="155">84</td>
</tr>
<tr>
<td width="180">15-17</td>
<td width="154">13</td>
<td width="151">16</td>
<td width="155">144</td>
</tr>
<tr>
<td width="180">17-19</td>
<td width="154">9</td>
<td width="151">18</td>
<td width="155">234</td>
</tr>
<tr>
<td width="180">19-21</td>
<td width="154">f</td>
<td width="151">20</td>
<td width="155">20f</td>
</tr>
<tr>
<td width="180">21-23</td>
<td width="154">4</td>
<td width="151">22</td>
<td width="155">110</td>
</tr>
<tr>
<td width="180">23-25</td>
<td width="154">5</td>
<td width="151">24</td>
<td width="155">96</td>
</tr>
<tr>
<td width="180"></td>
<td width="154">Sum <strong>f<sub>i</sub></strong>=44+f</td>
<td width="151"></td>
<td width="155">Sum <strong>f<sub>i</sub>x<sub>i</sub></strong>= 752+20f</td>
</tr>
</tbody>
</table>
<p>We have;</p>
\(\bar{x}= \frac{\Sigma f_{i}x_{i}}{\Sigma f_{i}}\)
\(18= \frac{752+20f}{44+ f_{i}}\)
<p>18(44+18f) = 752+20f</p>
<p>792+18f = 752+20f</p>
<p>2f = 40</p>
<p>Missing frequency f= 20</p>
</div>
<p>&nbsp;</p>


<p><strong>Question4:</strong></p>
<p><strong>The number of 30 women were checked by one doctor and the distributed the heartbeat of them in following distribution table. Find the mean of heart beats of the given per minute for these thirty women, by choosing a suitable following method</strong>.</p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td><strong>Heartbeat per minute in given number</strong></td>
<td>65-68</td>
<td>68-71</td>
<td>71-74</td>
<td>74-77</td>
<td>77-80</td>
<td>80-83</td>
<td>83-86</td>
</tr>
<tr>
<td><strong>Number of 30 women</strong></td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>7</td>
<td>8</td>
<td>2</td>
<td>4</td>
</tr>
</tbody>
</table>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td><strong>Class Interval</strong></td>
<td><strong>f<sub>i</sub></strong></td>
<td><strong>xi</strong></td>
<td><strong>d<sub>i</sub> = xi &#8211; a</strong></td>
<td><strong>f<sub>i</sub> d<sub>i</sub></strong></td>
</tr>
<tr>
<td>65-68</td>
<td>2</td>
<td>66.5</td>
<td>-9</td>
<td>-18</td>
</tr>
<tr>
<td>68-71</td>
<td>3</td>
<td>69.5</td>
<td>-6</td>
<td>-24</td>
</tr>
<tr>
<td>71-74</td>
<td>4</td>
<td>72.5</td>
<td>-3</td>
<td>-9</td>
</tr>
<tr>
<td>74-77</td>
<td>7</td>
<td>75.5</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>77-80</td>
<td>8</td>
<td>78.5</td>
<td>3</td>
<td>21</td>
</tr>
<tr>
<td>80-83</td>
<td>2</td>
<td>81.5</td>
<td>6</td>
<td>24</td>
</tr>
<tr>
<td>83-86</td>
<td>4</td>
<td>84.5</td>
<td>9</td>
<td>18</td>
</tr>
<tr>
<td></td>
<td>Sum <strong>f<sub>i</sub></strong>= 30</td>
<td></td>
<td></td>
<td>Sum <strong>f<sub>i</sub> d<sub>i</sub></strong> = 12</td>
</tr>
</tbody>
</table>
<p>Now, mean can be calculated as follows:</p>
\(\bar{d}=\frac{\sum f_{i}d_{i}}{\sum f_{i}}=\frac{12}{30}=0.4\)
\(\bar{x}=\bar{d}+a=0.4+75.5=75.9\)
</div>
<p>&nbsp;</p>



<p><strong>Question 5:</strong></p>
<p><strong>In a retail market, fruit vendors were selling mangoes kept in packing boxes. These
boxes contained varying number of mangoes. The following was the distribution of
mangoes according to the number of boxes..</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="105">No.of oranges</td>
<td width="106">50-52</td>
<td width="106">53-55</td>
<td width="106">56-58</td>
<td width="106">89-61</td>
<td width="106">62-64</td>
</tr>
<tr>
<td width="105">No. of boxes</td>
<td width="106">15</td>
<td width="106">110</td>
<td width="106">135</td>
<td width="106">115</td>
<td width="106">25</td>
</tr>
</tbody>
</table>
<p><strong>In the distributed pattern the number of oranges. Find the mean. Choose the method to find the mean:</strong></p>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="128"><strong>Class interval</strong></td>
<td width="128"><strong>f<sub>i</sub></strong></td>
<td width="128"><strong>x<sub>i</sub></strong></td>
<td width="128"><strong>d<sub>i</sub>=x-a</strong></td>
<td width="128"><strong>f<sub>i</sub> d<sub>i</sub></strong></td>
</tr>
<tr>
<td width="128">50-52</td>
<td width="128">110</td>
<td width="128">54</td>
<td width="128">-6</td>
<td width="128">90</td>
</tr>
<tr>
<td width="128">53-55</td>
<td width="128">15</td>
<td width="128">51</td>
<td width="128">-3</td>
<td width="128">-330</td>
</tr>
<tr>
<td width="128">56-58</td>
<td width="128">135</td>
<td width="128">60</td>
<td width="128">0</td>
<td width="128">0</td>
</tr>
<tr>
<td width="128">59-61</td>
<td width="128">25</td>
<td width="128">57</td>
<td width="128">3</td>
<td width="128">345</td>
</tr>
<tr>
<td width="128">62-64</td>
<td width="128">115</td>
<td width="128">63</td>
<td width="128">6</td>
<td width="128">150</td>
</tr>
<tr>
<td width="128"><strong> </strong></td>
<td width="128">Sum <strong>f<sub>i</sub></strong>= 400</td>
<td width="128"></td>
<td width="128"></td>
<td width="128">Sum <strong>f<sub>i</sub> d<sub>i</sub></strong>=75</td>
</tr>
</tbody>
</table>
<p>Mean can be calculated as follows:</p>
\(\bar{d}=\frac{\Sigma f_{i}d_{i}}{\Sigma f_{i}}=\frac{75}{400}=0.1875\)
\(\bar{x}=\bar{d}+a=0.1875+57=57.1875\)
<p>In this case, there are wide variations in \(f_{i}\) and hence assumed mean method is used.</p>
</div>
<p>&nbsp;</p>



<p><strong>Question 6:</strong></p>
<p><strong>The table below shows the daily expenditure on food of 25 households in a locality.</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td><strong>Daily food expenditure (in Rs)</strong></td>
<td>50-100</td>
<td>100-150</td>
<td>150-200</td>
<td>200-250</td>
<td>250-300</td>
</tr>
<tr>
<td><strong>Number of given households</strong></td>
<td>4</td>
<td>5</td>
<td>12</td>
<td>2</td>
<td>2</td>
</tr>
</tbody>
</table>
<p>Find the mean daily expenditure on food by a suitable method.</p>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td>Class Interval</td>
<td><strong>f<sub>i</sub></strong></td>
<td><strong>x<sub>i</sub></strong></td>
<td><strong>d<sub>i</sub></strong>= xi &#8211; a</td>
<td><strong>u<sub>i</sub></strong> = di/h</td>
<td><strong>f<sub>i</sub>u<sub>i</sub></strong></td>
</tr>
<tr>
<td>50-100</td>
<td>4</td>
<td>125</td>
<td>-100</td>
<td>-2</td>
<td>-8</td>
</tr>
<tr>
<td>100-150</td>
<td>5</td>
<td>175</td>
<td>-50</td>
<td>-1</td>
<td>-5</td>
</tr>
<tr>
<td>150-200</td>
<td>12</td>
<td>225</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>200-250</td>
<td>2</td>
<td>275</td>
<td>50</td>
<td>1</td>
<td>2</td>
</tr>
<tr>
<td>250-300</td>
<td>2</td>
<td>325</td>
<td>100</td>
<td>2</td>
<td>4</td>
</tr>
<tr>
<td></td>
<td>Sum <strong>f<sub>i</sub></strong> = 25</td>
<td></td>
<td></td>
<td></td>
<td>Sum <strong>f<sub>i</sub>u<sub>i</sub></strong> = -7</td>
</tr>
</tbody>
</table>
<p>Mean can be calculated as follows:</p>
\(\bar{x}=a+\frac{\sum f_{i}u_{i}}{\sum f_{i}}\times h\)
\(=225+\frac{-7}{25}\times 50 =225\)
</div>
<p>&nbsp;</p>


<p><strong>Question 7:</strong></p>
<p><strong>To find out the concentration of SO 2 in the air (in parts per million, i.e., ppm), the data
was collected for 30 localities in a certain city and is presented below:</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="319"><strong>Concentration in SO<sub>2</sub> (in ppm)</strong></td>
<td width="319"><strong>Frequency of F</strong></td>
</tr>
<tr>
<td width="319">0.00-0.04</td>
<td width="319">4</td>
</tr>
<tr>
<td width="319">0.04-0.08</td>
<td width="319">9</td>
</tr>
<tr>
<td width="319">0.08-0.12</td>
<td width="319">9</td>
</tr>
<tr>
<td width="319">0.12-0.16</td>
<td width="319">2</td>
</tr>
<tr>
<td width="319">0.16-0.20</td>
<td width="319">4</td>
</tr>
<tr>
<td width="319">0.20-0.24</td>
<td width="319">2</td>
</tr>
</tbody>
</table>
<p><strong>Give the mean of the sulphur dioxide collected from the given cities.</strong></p>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="160"><strong>Class Interval</strong></td>
<td width="160"><strong>f<sub>i</sub></strong></td>
<td width="160"><strong>x<sub>i</sub></strong></td>
<td width="160"><strong>f<sub>i</sub>x<sub>i</sub></strong></td>
</tr>
<tr>
<td width="160">0.00-0.04</td>
<td width="160">9</td>
<td width="160">0.02</td>
<td width="160">0.08</td>
</tr>
<tr>
<td width="160">0.04-0.08</td>
<td width="160">4</td>
<td width="160">0.06</td>
<td width="160">0.54</td>
</tr>
<tr>
<td width="160">0.08-0.12</td>
<td width="160">9</td>
<td width="160">0.10</td>
<td width="160">0.90</td>
</tr>
<tr>
<td width="160">0.12-0.16</td>
<td width="160">2</td>
<td width="160">0.14</td>
<td width="160">0.28</td>
</tr>
<tr>
<td width="160">0.16-0.20</td>
<td width="160">2</td>
<td width="160">0.18</td>
<td width="160">0.72</td>
</tr>
<tr>
<td width="160">0.20-0.24</td>
<td width="160">4</td>
<td width="160">0.22</td>
<td width="160">0.44</td>
</tr>
<tr>
<td width="160"></td>
<td width="160">Sum <strong>f<sub>i</sub></strong>=30</td>
<td width="160"></td>
<td width="160">Sum <strong>f<sub>i</sub>x<sub>i</sub></strong>=2.96</td>
</tr>
</tbody>
</table>
<p>Mean can be calculated as follows:</p>
\(\bar{x}=\frac{\Sigma f_{i}x_{i}}{\Sigma f_{i}}=\frac{2.96}{30}=0.099 ppm\)
</div>
<p>&nbsp;</p>



<p><strong>Question 8</strong>:</p>
<p><strong>A class teacher has the following absentee record of 40 students of a class for the whole
term. Find the mean number of days a student was absent.:</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td><strong>Number of following days</strong></td>
<td>0-6</td>
<td>6-10</td>
<td>10-14</td>
<td>14-20</td>
<td>20-28</td>
<td>28-38</td>
<td>38-40</td>
</tr>
<tr>
<td><strong>Number of following students</strong></td>
<td>10</td>
<td>11</td>
<td>4</td>
<td>7</td>
<td>3</td>
<td>4</td>
<td>1</td>
</tr>
</tbody>
</table>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td><strong>Class Interval</strong></td>
<td><strong>f<sub>i</sub></strong></td>
<td><strong>x<sub>i</sub></strong></td>
<td><strong>f<sub>i</sub>x<sub>i</sub></strong></td>
</tr>
<tr>
<td>0-6</td>
<td>11</td>
<td>3</td>
<td>33</td>
</tr>
<tr>
<td>6-10</td>
<td>10</td>
<td>8</td>
<td>80</td>
</tr>
<tr>
<td>10-14</td>
<td>4</td>
<td>12</td>
<td>84</td>
</tr>
<tr>
<td>14-20</td>
<td>7</td>
<td>17</td>
<td>68</td>
</tr>
<tr>
<td>20-28</td>
<td>3</td>
<td>24</td>
<td>96</td>
</tr>
<tr>
<td>28-38</td>
<td>4</td>
<td>33</td>
<td>99</td>
</tr>
<tr>
<td>38-40</td>
<td>1</td>
<td>39</td>
<td>39</td>
</tr>
<tr>
<td></td>
<td>Sum <strong>f<sub>i</sub></strong> = 40</td>
<td></td>
<td>Sum <strong>f<sub>i</sub>x<sub>i</sub></strong>= 499</td>
</tr>
</tbody>
</table>
<p>Mean can be calculated as follows:</p>
<p>\(\bar{x}=\frac{\sum f_{i}x_{i}}{\sum f_{i}}\)= \(\frac{499}{40}\)=12.4</p>
</div>
<p>&nbsp;</p>



<p><strong>Question 9:</strong></p>
<p><strong>The following table gives the literacy rate (in percentage) of 35 cities. Find the mean
literacy rate..</strong></p>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="106"><strong>Literacy rate from 35cities (in %)</strong></td>
<td width="106">&nbsp;</p>
<p>40-45</td>
<td width="106">&nbsp;</p>
<p>50-55</td>
<td width="106">&nbsp;</p>
<p>60-65</td>
<td width="106">&nbsp;</p>
<p>70-75</td>
<td width="106">&nbsp;</p>
<p>80-85</td>
</tr>
<tr>
<td width="106"><strong>Cities in values</strong></td>
<td width="106">10</td>
<td width="106">3</td>
<td width="106">8</td>
<td width="106">11</td>
<td width="106">3</td>
</tr>
</tbody>
</table>
<h3 class="azc_tsh_toggle" style="border: 1px solid #cccccc; background-color: #f2f2f2; background-image: none !important; padding-left: 10px; "><a href="#" style="font-size: 14px; 14px">Show Answer</a></h3>
<div class="azc_tsh_toggle_container" style="border: 1px solid rgb(204, 204, 204); font-size: 14px;margin-left:14px"><br>
<table class="table table-bordered" width="639">
<tbody>
<tr>
<td width="106"><strong>Class Interval</strong></td>
<td width="106"><strong>f<sub>i</sub></strong></td>
<td width="106"><strong>x<sub>i</sub></strong></td>
<td width="106"><strong>d<sub>i</sub>=xi-a</strong></td>
<td width="106"><strong>u<sub>i</sub>=di/h</strong></td>
<td width="106"><strong>f<sub>i</sub>u<sub>i</sub></strong></td>
</tr>
<tr>
<td width="106">40-45</td>
<td width="106">10</td>
<td width="106">50</td>
<td width="106">-20</td>
<td width="106">-2</td>
<td width="106">-6</td>
</tr>
<tr>
<td width="106">50-55</td>
<td width="106">3</td>
<td width="106">60</td>
<td width="106">-10</td>
<td width="106">-1</td>
<td width="106">-10</td>
</tr>
<tr>
<td width="106">60-65</td>
<td width="106">8</td>
<td width="106">70</td>
<td width="106">0</td>
<td width="106">0</td>
<td width="106">0</td>
</tr>
<tr>
<td width="106">70-75</td>
<td width="106">11</td>
<td width="106">80</td>
<td width="106">10</td>
<td width="106">1</td>
<td width="106">8</td>
</tr>
<tr>
<td width="106">80-85</td>
<td width="106">3</td>
<td width="106">90</td>
<td width="106">20</td>
<td width="106">2</td>
<td width="106">6</td>
</tr>
<tr>
<td width="106"></td>
<td width="106">Sum <strong>f<sub>i</sub></strong>=35</td>
<td width="106"></td>
<td width="106"></td>
<td width="106"></td>
<td width="106">Sum <strong>f<sub>i</sub>u<sub>i</sub></strong>= -2</td>
</tr>
</tbody>
</table>
<p><strong>Mean can be calculated as follows:</strong></p>
\(\bar{x}=a+\frac{\Sigma f_{i}u_{i}}{\Sigma f_{i}}\times h\)
\(= 70+\frac{-2}{35}\times 10=69.42\)

</div>
<p>&nbsp;</p>




@stop

