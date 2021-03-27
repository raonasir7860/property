<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>World Map with Country names and tooltips</title>
<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
<script>
$(document).ready(function(){

    // set the map-wrapper width and height to match the img size
    $('#map-wrapper').css({'width':$('#map-wrapper img').width(),
                      'height':$('#map-wrapper img').height()
    })
                 
    for (i=0; i<$(".pin").length; i++)
    {
        // store initial tooltips contents within an array
        var tooltipContent = new Array();
        tooltipContent[i] = $(".pin").eq(i).html();
        
        // set tooltip direction type - up or down
        var tooltipDirection = 'tooltip-down';             
        if ($(".pin").eq(i).hasClass('pin-down'))
        {
            tooltipDirection = 'tooltip-down'; 
        }
    
        // append the tooltip
        $("#map-wrapper").append("<div style='left:"+$(".pin").eq(i).data('xpos')+"px;top:"+$(".pin").eq(i).data('ypos')+"px' class='" + tooltipDirection +"'>\
                                            <div class='tooltip'>" + tooltipContent[i] + "</div>\
                                             "+$(".pin").eq(i).children('h2').html()+"\
                                    </div>");
    }    
    
    // show/hide the tooltip
    $('.tooltip-down').mouseenter(function(){
                $(this).children('.tooltip').fadeIn(100);
            }).mouseleave(function(){
                $(this).children('.tooltip').fadeOut(100);
            })
});
</script>
<style>
body {
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;        
}

/* Relative positioning*/
#map-wrapper {
    position: relative;
    margin: 50px auto 20px auto;
    border: 1px solid #fafafa;
    -moz-box-shadow: 0 3px 3px rgba(0,0,0,.5);
    -webkit-box-shadow: 0 3px 3px rgba(0,0,0,.5);
    box-shadow: 0 3px 3px rgba(0,0,0,.5);
}

/* Hide the original tooltips contents */
.pin {
    display: none;
}

/* Begin styling the tooltips and pins */
.tooltip-down {
    position: absolute;
    background: url(arrow-up-down.png) no-repeat center 0;
    width: 20px;
    height: 80px;
    line-height: 40px;
    margin-top: 7px;
}

/*.tooltip-down {
    background-position: center -50px;
    line-height: 40px;
}*/

.tooltip {
    line-height: 1;
    display: none;
    width: 120px;
    cursor: default;
    text-shadow: 0 1px 0 #fff;
    position: absolute;
    top: 10px;
    left: 50px;
    z-index: 999;
    margin-left: -115px;
    padding:15px;
    color: #222;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 3px 0 rgba(0,0,0,1);
    -webkit-box-shadow: 0 3px 0 rgba(0,0,0,1);
    box-shadow: 0 3px 0 rgba(0,0,0,.7);
    background: #fff1d3;
    background: -webkit-gradient(linear, left top, left bottom, from(#fff1d3), to(#ffdb90));
    background: -webkit-linear-gradient(top, #fff1d3, #ffdb90);
    background: -moz-linear-gradient(top, #fff1d3, #ffdb90);
    background: -ms-linear-gradient(top, #fff1d3, #ffdb90);
    background: -o-linear-gradient(top, #fff1d3, #ffdb90);
    background: linear-gradient(top, #fff1d3, #ffdb90);            
}

.tooltip::after {
    content: '';
    position: absolute;
    top: -10px;
    left: 50%;
    margin-left: -10px;
    border-bottom: 10px solid #fff1d3;
    border-left: 10px solid transparent;
    border-right :10px solid transparent;
}

.tooltip-down .tooltip {
    bottom: 20px;
    top: auto;
}

.tooltip-down .tooltip::after {
    bottom: -10px;
    top: auto;
    border-bottom: 0;
    border-top: 10px solid #000000;
    /*ffdb90*/
}

.tooltip h2 {
    font: Arial, Helvetica, sans-serif bold 1.3em;
    margin: 0 0 10px;
}

.tooltip ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.tooltip ul li {
   line-height: 125%;
}    
a:link {
	color: #00F;
}
a:visited {
	color: #306;
}
a:hover {
	color: #F00;
}

</style>
</head>

<body>
  <a href="/admin/dashboard" >Go To Dashboard</a>

<div id="map-wrapper">
   <img width="2500px" height="2200px" src="{{{ asset('/images/project-1.jpg') }}}" alt="Project Map">
      <div class="pin" data-xpos="544" data-ypos="538">      
      <h2>1</h2>      
       <p>Plot No: {{@$plots[0]->p_number}}</p>
      <p>Area/Square: {{@$plots[0]->p_area}}</p>
      <p>Area/Rate: {{@$plots[0]->p_rate}}</p>
      <p>Total Amount: {{@$plots[0]->total_amont}}</p>
      <a href="map-details/{{@$plots[0]->p_number}}">Read More</a>
   </div>
      <div class="pin pin-down" data-xpos="568" data-ypos="535">      
      <h2>2</h2>      
       <p>Plot No: {{@$plots[1]->p_number}}</p>
      <p>Area/Square: {{@$plots[1]->p_area}}</p>
      <p>Area/Rate: {{@$plots[1]->p_rate}}</p>
      <p>Total Amount: {{@$plots[1]->total_amont}}</p>
      <a href="map-details/{{@$plots[1]->p_number}}">Read More</a>
   </div>
    <div class="pin" data-xpos="591" data-ypos="535">      
      <h2>3</h2>      
       <p>Plot No: {{@$plots[2]->p_number}}</p>
      <p>Area/Square: {{@$plots[2]->p_area}}</p>
      <p>Area/Rate: {{@$plots[2]->p_rate}}</p>
      <p>Total Amount: {{@$plots[2]->total_amont}}</p>
      <a href="map-details/{{@$plots[2]->p_number}}">Read More</a>
   </div>
       <div class="pin pin-down" data-xpos="613" data-ypos="535">      
      <h2>4</h2>      
       <p>Plot No: {{@$plots[3]->p_number}}</p>
      <p>Area/Square: {{@$plots[3]->p_area}}</p>
      <p>Area/Rate: {{@$plots[3]->p_rate}}</p>
      <p>Total Amount: {{@$plots[3]->total_amont}}</p>
      <a href="map-details/{{@$plots[3]->p_number}}">Read More</a>
   </div>
    <div class="pin" data-xpos="636" data-ypos="540">      
      <h2>5</h2>      
       <p>Plot No: {{@$plots[4]->p_number}}</p>
      <p>Area/Square: {{@$plots[4]->p_area}}</p>
      <p>Area/Rate: {{@$plots[4]->p_rate}}</p>
      <p>Total Amount: {{@$plots[4]->total_amont}}</p>
      <a href="map-details/{{@$plots[4]->p_number}}">Read More</a>
   </div>

       <div class="pin" data-xpos="668" data-ypos="540">      
      <h2>6</h2>      
      <p>Plot No: 6</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="730" data-ypos="540">      
      <h2>7</h2>      
      <p>Plot No: 7</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="760" data-ypos="540">      
      <h2>8</h2>      
      <p>Plot No: 8</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="780" data-ypos="540">      
      <h2>9</h2>      
      <p>Plot No: 9</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="800" data-ypos="550">      
      <h2>10</h2>      
      <p>Plot No: 10</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="825" data-ypos="550">      
      <h2>11</h2>      
      <p>Plot No: 11</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="850" data-ypos="550">      
      <h2>12</h2>      
      <p>Plot No: 12</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="870" data-ypos="550">      
      <h2>13</h2>      
      <p>Plot No: 13</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="890" data-ypos="550">      
      <h2>14</h2>      
      <p>Plot No: 14</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="915" data-ypos="550">      
      <h2>15</h2>      
      <p>Plot No: 15</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="940" data-ypos="550">      
      <h2>16</h2>      
      <p>Plot No: 16</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="960" data-ypos="550">      
      <h2>17</h2>      
      <p>Plot No: 17</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="985" data-ypos="550">      
      <h2>18</h2>      
      <p>Plot No: 18</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1010" data-ypos="550">      
      <h2>19</h2>      
      <p>Plot No: 19</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1030" data-ypos="550">      
      <h2>20</h2>      
      <p>Plot No: 20</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1055" data-ypos="550">      
      <h2>21</h2>      
      <p>Plot No: 21</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1080" data-ypos="550">      
      <h2>22</h2>      
      <p>Plot No: 22</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1100" data-ypos="550">      
      <h2>23</h2>      
      <p>Plot No: 23</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1125" data-ypos="550">      
      <h2>24</h2>      
      <p>Plot No: 24</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1145" data-ypos="550">      
      <h2>25</h2>      
      <p>Plot No: 25</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1170" data-ypos="550">      
      <h2>26</h2>      
      <p>Plot No: 26</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1190" data-ypos="550">      
      <h2>27</h2>      
      <p>Plot No: 27</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1220" data-ypos="555">      
      <h2>28</h2>      
      <p>Plot No: 28</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1275" data-ypos="555">      
      <h2>29</h2>      
      <p>Plot No: 29</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1300" data-ypos="555">      
      <h2>30</h2>      
      <p>Plot No: 30</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1325" data-ypos="555">      
      <h2>31</h2>      
      <p>Plot No: 31</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1345" data-ypos="555">      
      <h2>32</h2>      
      <p>Plot No: 32</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1370" data-ypos="555">      
      <h2>33</h2>      
      <p>Plot No: 33</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1395" data-ypos="555">      
      <h2>34</h2>      
      <p>Plot No: 34</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1415" data-ypos="560">      
      <h2>35</h2>      
      <p>Plot No: 35</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1440" data-ypos="560">      
      <h2>36</h2>      
      <p>Plot No: 36</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1460" data-ypos="560">      
      <h2>37</h2>      
      <p>Plot No: 37</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1485" data-ypos="560">      
      <h2>38</h2>      
      <p>Plot No: 38</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1510" data-ypos="560">      
      <h2>39</h2>      
      <p>Plot No: 39</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1530" data-ypos="565">      
      <h2>40</h2>      
      <p>Plot No: 40</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1555" data-ypos="565">      
      <h2>41</h2>      
      <p>Plot No: 41</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1575" data-ypos="565">      
      <h2>42</h2>      
      <p>Plot No: 42</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1600" data-ypos="565">      
      <h2>43</h2>      
      <p>Plot No: 43</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1620" data-ypos="565">      
      <h2>44</h2>      
      <p>Plot No: 44</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1645" data-ypos="570">      
      <h2>45</h2>      
      <p>Plot No: 45</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="545" data-ypos="700">      
      <h2>46</h2>      
      <p>Plot No: 46</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="545" data-ypos="775">      
      <h2>47</h2>      
      <p>Plot No: 47</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="545" data-ypos="835">      
      <h2>48</h2>      
      <p>Plot No: 48</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="545" data-ypos="895">      
      <h2>49</h2>      
      <p>Plot No: 49</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="545" data-ypos="955">      
      <h2>50</h2>      
      <p>Plot No: 50</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="545" data-ypos="1020">      
      <h2>51</h2>      
      <p>Plot No: 51</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="545" data-ypos="1080">      
      <h2>52</h2>      
      <p>Plot No: 52</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="575" data-ypos="1080">      
      <h2>53</h2>      
      <p>Plot No: 53</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="575" data-ypos="1020">      
      <h2>54</h2>      
      <p>Plot No: 54</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="575" data-ypos="960">      
      <h2>55</h2>      
      <p>Plot No: 55</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="575" data-ypos="900">      
      <h2>56</h2>      
      <p>Plot No: 56</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="575" data-ypos="835">      
      <h2>57</h2>      
      <p>Plot No: 57</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="575" data-ypos="775">      
      <h2>58</h2>      
      <p>Plot No: 58</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="575" data-ypos="700">      
      <h2>59</h2>      
      <p>Plot No: 59</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="630" data-ypos="700">      
      <h2>60</h2>      
      <p>Plot No: 60</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="775">      
      <h2>61</h2>      
      <p>Plot No: 61</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="835">      
      <h2>62</h2>      
      <p>Plot No: 62</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="895">      
      <h2>63</h2>      
      <p>Plot No: 63</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="960">      
      <h2>64</h2>      
      <p>Plot No: 64</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="1020">      
      <h2>65</h2>      
      <p>Plot No: 65</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="1080">      
      <h2>66</h2>      
      <p>Plot No: 66</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="1140">      
      <h2>67</h2>      
      <p>Plot No: 67</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="1200">      
      <h2>68</h2>      
      <p>Plot No: 68</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="1260">      
      <h2>69</h2>      
      <p>Plot No: 69</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="630" data-ypos="1320">      
      <h2>70</h2>      
      <p>Plot No: 70</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="1320">      
      <h2>71</h2>      
      <p>Plot No: 71</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="1260">      
      <h2>72</h2>      
      <p>Plot No: 72</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="1200">      
      <h2>73</h2>      
      <p>Plot No: 73</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="1140">      
      <h2>74</h2>      
      <p>Plot No: 74</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="1080">      
      <h2>75</h2>      
      <p>Plot No: 75</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="1020">      
      <h2>76</h2>      
      <p>Plot No: 76</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="960">      
      <h2>77</h2>      
      <p>Plot No: 77</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="900">      
      <h2>78</h2>      
      <p>Plot No: 78</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="840">      
      <h2>79</h2>      
      <p>Plot No: 79</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="775">      
      <h2>80</h2>      
      <p>Plot No: 80</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="670" data-ypos="700">      
      <h2>81</h2>      
      <p>Plot No: 81</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="735" data-ypos="700">      
      <h2>82</h2>      
      <p>Plot No: 82</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="735" data-ypos="775">      
      <h2>83</h2>      
      <p>Plot No: 83</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="735" data-ypos="835">      
      <h2>84</h2>      
      <p>Plot No: 84</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="735" data-ypos="895">      
      <h2>85</h2>      
      <p>Plot No: 85</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="735" data-ypos="960">      
      <h2>86</h2>      
      <p>Plot No: 86</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="735" data-ypos="1020">      
      <h2>87</h2>      
      <p>Plot No: 87</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="735" data-ypos="1080">      
      <h2>88</h2>      
      <p>Plot No: 88</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="735" data-ypos="1140">      
      <h2>89</h2>      
      <p>Plot No: 89</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="735" data-ypos="1200">      
      <h2>90</h2>      
      <p>Plot No: 90</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="735" data-ypos="1260">      
      <h2>91</h2>      
      <p>Plot No: 91</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="735" data-ypos="1320">      
      <h2>92</h2>      
      <p>Plot No: 92</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="1320">      
      <h2>93</h2>      
      <p>Plot No: 93</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="1260">      
      <h2>94</h2>      
      <p>Plot No: 94</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="1200">      
      <h2>95</h2>      
      <p>Plot No: 95</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="1140">      
      <h2>96</h2>      
      <p>Plot No: 96</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="1080">      
      <h2>97</h2>      
      <p>Plot No: 97</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="1020">      
      <h2>98</h2>      
      <p>Plot No: 98</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="960">      
      <h2>99</h2>      
      <p>Plot No: 99</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="895">      
      <h2>100</h2>      
      <p>Plot No: 100</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="835">      
      <h2>101</h2>      
      <p>Plot No: 101</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="775">      
      <h2>102</h2>      
      <p>Plot No: 102</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="770" data-ypos="705">      
      <h2>103</h2>      
      <p>Plot No: 103</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="820" data-ypos="705">      
      <h2>104</h2>      
      <p>Plot No: 104</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="820" data-ypos="775">      
      <h2>105</h2>      
      <p>Plot No: 105</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="820" data-ypos="835">      
      <h2>106</h2>      
      <p>Plot No: 106</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="820" data-ypos="895">      
      <h2>107</h2>      
      <p>Plot No: 107</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="820" data-ypos="955">      
      <h2>108</h2>      
      <p>Plot No: 108</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="820" data-ypos="1015">      
      <h2>109</h2>      
      <p>Plot No: 109</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="820" data-ypos="1080">      
      <h2>110</h2>      
      <p>Plot No: 110</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="820" data-ypos="1140">      
      <h2>111</h2>      
      <p>Plot No: 111</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="820" data-ypos="1200">      
      <h2>112</h2>      
      <p>Plot No: 112</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="820" data-ypos="1260">      
      <h2>113</h2>      
      <p>Plot No: 113</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="820" data-ypos="1320">      
      <h2>114</h2>      
      <p>Plot No: 114</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="855" data-ypos="1320">      
      <h2>115</h2>      
      <p>Plot No: 115</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="855" data-ypos="1260">      
      <h2>116</h2>      
      <p>Plot No: 116</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="855" data-ypos="1200">      
      <h2>117</h2>      
      <p>Plot No: 117</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="855" data-ypos="1135">      
      <h2>118</h2>      
      <p>Plot No: 118</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="855" data-ypos="1080">      
      <h2>119</h2>      
      <p>Plot No: 119</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="855" data-ypos="1020">      
      <h2>120</h2>      
      <p>Plot No: 120</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="855" data-ypos="960">      
      <h2>121</h2>      
      <p>Plot No: 121</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="855" data-ypos="895">      
      <h2>122</h2>      
      <p>Plot No: 122</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="855" data-ypos="835">      
      <h2>123</h2>      
      <p>Plot No: 123</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="855" data-ypos="775">      
      <h2>124</h2>      
      <p>Plot No: 124</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="855" data-ypos="710">      
      <h2>125</h2>      
      <p>Plot No: 125</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="915" data-ypos="710">      
      <h2>126</h2>      
      <p>Plot No: 126</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="915" data-ypos="775">      
      <h2>127</h2>      
      <p>Plot No: 127</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="915" data-ypos="835">      
      <h2>128</h2>      
      <p>Plot No: 128</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="915" data-ypos="895">      
      <h2>129</h2>      
      <p>Plot No: 129</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="915" data-ypos="955">      
      <h2>130</h2>      
      <p>Plot No: 130</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="915" data-ypos="1015">      
      <h2>131</h2>      
      <p>Plot No: 131</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="915" data-ypos="1080">      
      <h2>132</h2>      
      <p>Plot No: 132</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="915" data-ypos="1135">      
      <h2>133</h2>      
      <p>Plot No: 133</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="915" data-ypos="1200">      
      <h2>134</h2>      
      <p>Plot No: 134</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="915" data-ypos="1260">      
      <h2>135</h2>      
      <p>Plot No: 135</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="915" data-ypos="1320">      
      <h2>136</h2>      
      <p>Plot No: 136</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="945" data-ypos="1320">      
      <h2>137</h2>      
      <p>Plot No: 137</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="945" data-ypos="1260">      
      <h2>138</h2>      
      <p>Plot No: 138</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="945" data-ypos="1200">      
      <h2>139</h2>      
      <p>Plot No: 139</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="945" data-ypos="1140">      
      <h2>140</h2>      
      <p>Plot No: 140</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="945" data-ypos="1080">      
      <h2>141</h2>      
      <p>Plot No: 141</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="945" data-ypos="1020">      
      <h2>142</h2>      
      <p>Plot No: 142</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="945" data-ypos="960">      
      <h2>143</h2>      
      <p>Plot No: 143</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="945" data-ypos="895">      
      <h2>144</h2>      
      <p>Plot No: 144</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="945" data-ypos="835">      
      <h2>145</h2>      
      <p>Plot No: 145</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="945" data-ypos="775">      
      <h2>146</h2>      
      <p>Plot No: 146</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="945" data-ypos="710">      
      <h2>147</h2>      
      <p>Plot No: 147</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="710">      
      <h2>148</h2>      
      <p>Plot No: 148</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="775">      
      <h2>149</h2>      
      <p>Plot No: 149</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="835">      
      <h2>150</h2>      
      <p>Plot No: 150</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="895">      
      <h2>151</h2>      
      <p>Plot No: 151</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="960">      
      <h2>152</h2>      
      <p>Plot No: 152</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="1020">      
      <h2>153</h2>      
      <p>Plot No: 153</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="1080">      
      <h2>154</h2>      
      <p>Plot No: 154</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="1140">      
      <h2>155</h2>      
      <p>Plot No: 155</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="1195">      
      <h2>156</h2>      
      <p>Plot No: 156</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="1260">      
      <h2>157</h2>      
      <p>Plot No: 157</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1000" data-ypos="1320">      
      <h2>158</h2>      
      <p>Plot No: 158</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="1320">      
      <h2>159</h2>      
      <p>Plot No: 159</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="1260">      
      <h2>160</h2>      
      <p>Plot No: 160</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="1200">      
      <h2>161</h2>      
      <p>Plot No: 161</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="1140">      
      <h2>162</h2>      
      <p>Plot No: 162</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="1080">      
      <h2>163</h2>      
      <p>Plot No: 163</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="1020">      
      <h2>164</h2>      
      <p>Plot No: 164</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="960">      
      <h2>165</h2>      
      <p>Plot No: 165</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="895">      
      <h2>166</h2>      
      <p>Plot No: 166</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="835">      
      <h2>167</h2>      
      <p>Plot No: 167</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1030" data-ypos="775">      
      <h2>168</h2>      
      <p>Plot No: 168</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1030" data-ypos="710">      
      <h2>169</h2>      
      <p>Plot No: 169</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="710">      
      <h2>170</h2>      
      <p>Plot No: 170</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="775">      
      <h2>171</h2>      
      <p>Plot No: 171</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="835">      
      <h2>172</h2>      
      <p>Plot No: 172</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="900">      
      <h2>173</h2>      
      <p>Plot No: 173</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="960">      
      <h2>174</h2>      
      <p>Plot No: 174</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="1020">      
      <h2>175</h2>      
      <p>Plot No: 175</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="1080">      
      <h2>176</h2>      
      <p>Plot No: 176</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="1140">      
      <h2>177</h2>      
      <p>Plot No: 177</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1090" data-ypos="1200">      
      <h2>178</h2>      
      <p>Plot No: 178</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1090" data-ypos="1260">      
      <h2>179</h2>      
      <p>Plot No: 179</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1090" data-ypos="1320">      
      <h2>180</h2>      
      <p>Plot No: 180</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1130" data-ypos="1320">      
      <h2>181</h2>      
      <p>Plot No: 181</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="1260">      
      <h2>182</h2>      
      <p>Plot No: 182</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="1200">      
      <h2>183</h2>      
      <p>Plot No: 183</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="1135">      
      <h2>184</h2>      
      <p>Plot No: 184</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="1080">      
      <h2>185</h2>      
      <p>Plot No: 185</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="1020">      
      <h2>186</h2>      
      <p>Plot No: 186</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="960">      
      <h2>187</h2>      
      <p>Plot No: 187</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="900">      
      <h2>188</h2>      
      <p>Plot No: 188</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="840">      
      <h2>189</h2>      
      <p>Plot No: 189</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="780">      
      <h2>190</h2>      
      <p>Plot No: 190</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1130" data-ypos="710">      
      <h2>191</h2>      
      <p>Plot No: 191</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1180" data-ypos="715">      
      <h2>192</h2>      
      <p>Plot No: 192</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="780">      
      <h2>193</h2>      
      <p>Plot No: 193</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="835">      
      <h2>194</h2>      
      <p>Plot No: 194</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="895">      
      <h2>195</h2>      
      <p>Plot No: 195</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="955">      
      <h2>196</h2>      
      <p>Plot No: 196</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="1020">      
      <h2>197</h2>      
      <p>Plot No: 197</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="1080">      
      <h2>198</h2>      
      <p>Plot No: 198</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="1140">      
      <h2>199</h2>      
      <p>Plot No: 199</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="1200">      
      <h2>200</h2>      
      <p>Plot No: 200</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="1260">      
      <h2>201</h2>      
      <p>Plot No: 201</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1180" data-ypos="1320">      
      <h2>202</h2>      
      <p>Plot No: 202</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1220" data-ypos="1320">      
      <h2>203</h2>      
      <p>Plot No: 203</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1220" data-ypos="1260">      
      <h2>204</h2>      
      <p>Plot No: 204</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1220" data-ypos="1200">      
      <h2>205</h2>      
      <p>Plot No: 205</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1220" data-ypos="1140">      
      <h2>206</h2>      
      <p>Plot No: 206</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1220" data-ypos="1080">      
      <h2>207</h2>      
      <p>Plot No: 207</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1220" data-ypos="1020">      
      <h2>208</h2>      
      <p>Plot No: 208</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1220" data-ypos="960">      
      <h2>209</h2>      
      <p>Plot No: 209</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1220" data-ypos="900">      
      <h2>210</h2>      
      <p>Plot No: 210</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1220" data-ypos="835">      
      <h2>211</h2>      
      <p>Plot No: 211</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1220" data-ypos="775">      
      <h2>212</h2>      
      <p>Plot No: 212</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1220" data-ypos="715">      
      <h2>213</h2>      
      <p>Plot No: 213</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1285" data-ypos="715">      
      <h2>214</h2>      
      <p>Plot No: 214</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1285" data-ypos="775">      
      <h2>215</h2>      
      <p>Plot No: 215</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1285" data-ypos="835">      
      <h2>216</h2>      
      <p>Plot No: 216</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1285" data-ypos="895">      
      <h2>217</h2>      
      <p>Plot No: 217</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1285" data-ypos="955">      
      <h2>218</h2>      
      <p>Plot No: 218</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1285" data-ypos="1015">      
      <h2>219</h2>      
      <p>Plot No: 219</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1285" data-ypos="1080">      
      <h2>220</h2>      
      <p>Plot No: 220</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1285" data-ypos="1140">      
      <h2>221</h2>      
      <p>Plot No: 221</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1285" data-ypos="1200">      
      <h2>222</h2>      
      <p>Plot No: 222</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1285" data-ypos="1260">      
      <h2>223</h2>      
      <p>Plot No: 223</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1285" data-ypos="1320">      
      <h2>224</h2>      
      <p>Plot No: 224</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="1325">      
      <h2>225</h2>      
      <p>Plot No: 225</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="1260">      
      <h2>226</h2>      
      <p>Plot No: 226</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="1200">      
      <h2>227</h2>      
      <p>Plot No: 227</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="1140">      
      <h2>228</h2>      
      <p>Plot No: 228</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="1080">      
      <h2>229</h2>      
      <p>Plot No: 229</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="1020">      
      <h2>230</h2>      
      <p>Plot No: 230</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="960">      
      <h2>231</h2>      
      <p>Plot No: 231</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="895">      
      <h2>232</h2>      
      <p>Plot No: 232</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="835">      
      <h2>233</h2>      
      <p>Plot No: 233</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="775">      
      <h2>234</h2>      
      <p>Plot No: 234</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="715">      
      <h2>235</h2>      
      <p>Plot No: 235</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1375" data-ypos="715">      
      <h2>236</h2>      
      <p>Plot No: 236</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="775">      
      <h2>237</h2>      
      <p>Plot No: 237</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="835">      
      <h2>238</h2>      
      <p>Plot No: 238</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="895">      
      <h2>239</h2>      
      <p>Plot No: 239</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="955">      
      <h2>240</h2>      
      <p>Plot No: 240</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="1015">      
      <h2>241</h2>      
      <p>Plot No: 241</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="1080">      
      <h2>242</h2>      
      <p>Plot No: 242</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="1140">      
      <h2>243</h2>      
      <p>Plot No: 243</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="1200">      
      <h2>244</h2>      
      <p>Plot No: 244</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1375" data-ypos="1260">      
      <h2>245</h2>      
      <p>Plot No: 245</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
       <div class="pin" data-xpos="1375" data-ypos="1320">      
      <h2>246</h2>      
      <p>Plot No: 246</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
       <div class="pin" data-xpos="1405" data-ypos="1325">      
      <h2>247</h2>      
      <p>Plot No: 247</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1405" data-ypos="1260">      
      <h2>248</h2>      
      <p>Plot No: 248</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1405" data-ypos="1200">      
      <h2>249</h2>      
      <p>Plot No: 249</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1405" data-ypos="1140">      
      <h2>250</h2>      
      <p>Plot No: 250</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1405" data-ypos="1080">      
      <h2>251</h2>      
      <p>Plot No: 251</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1405" data-ypos="1020">      
      <h2>252</h2>      
      <p>Plot No: 252</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1405" data-ypos="960">      
      <h2>253</h2>      
      <p>Plot No: 253</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1405" data-ypos="895">      
      <h2>254</h2>      
      <p>Plot No: 254</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1405" data-ypos="835">      
      <h2>255</h2>      
      <p>Plot No: 255</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1405" data-ypos="775">      
      <h2>256</h2>      
      <p>Plot No: 256</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1405" data-ypos="715">      
      <h2>257</h2>      
      <p>Plot No: 257</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1465" data-ypos="715">      
      <h2>258</h2>      
      <p>Plot No: 258</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1465" data-ypos="775">      
      <h2>259</h2>      
      <p>Plot No: 259</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1465" data-ypos="835">      
      <h2>260</h2>      
      <p>Plot No: 260</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1465" data-ypos="895">      
      <h2>261</h2>      
      <p>Plot No: 261</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1465" data-ypos="955">      
      <h2>262</h2>      
      <p>Plot No: 262</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1465" data-ypos="1015">      
      <h2>263</h2>      
      <p>Plot No: 263</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1465" data-ypos="1080">      
      <h2>264</h2>      
      <p>Plot No: 264</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1465" data-ypos="1140">      
      <h2>265</h2>      
      <p>Plot No: 265</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1465" data-ypos="1200">      
      <h2>266</h2>      
      <p>Plot No: 266</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1465" data-ypos="1260">      
      <h2>267</h2>      
      <p>Plot No: 267</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1465" data-ypos="1320">      
      <h2>268</h2>      
      <p>Plot No: 268</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1495" data-ypos="1320">      
      <h2>269</h2>      
      <p>Plot No: 269</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1495" data-ypos="1260">      
      <h2>270</h2>      
      <p>Plot No: 270</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1495" data-ypos="1200">      
      <h2>271</h2>      
      <p>Plot No: 271</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1495" data-ypos="1140">      
      <h2>272</h2>      
      <p>Plot No: 272</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1495" data-ypos="1080">      
      <h2>273</h2>      
      <p>Plot No: 273</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1495" data-ypos="1015">      
      <h2>274</h2>      
      <p>Plot No: 274</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1495" data-ypos="955">      
      <h2>275</h2>      
      <p>Plot No: 275</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1495" data-ypos="895">      
      <h2>276</h2>      
      <p>Plot No: 276</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1495" data-ypos="835">      
      <h2>277</h2>      
      <p>Plot No: 277</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1495" data-ypos="775">      
      <h2>278</h2>      
      <p>Plot No: 278</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1495" data-ypos="720">      
      <h2>279</h2>      
      <p>Plot No: 279</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1735" data-ypos="1210">      
      <h2>280</h2>      
      <p>Plot No: 280</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1795" data-ypos="1210">      
      <h2>281</h2>      
      <p>Plot No: 281</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1725" data-ypos="1280">      
      <h2>282</h2>      
      <p>Plot No: 282</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1750" data-ypos="1280">      
      <h2>283</h2>      
      <p>Plot No: 283</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1775" data-ypos="1280">      
      <h2>284</h2>      
      <p>Plot No: 284</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1800" data-ypos="1280">      
      <h2>285</h2>      
      <p>Plot No: 285</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1820" data-ypos="1280">      
      <h2>286</h2>      
      <p>Plot No: 286</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1875" data-ypos="1300">      
      <h2>287</h2>      
      <p>Plot No: 287</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1875" data-ypos="1240">      
      <h2>288</h2>      
      <p>Plot No: 288</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1875" data-ypos="1175">      
      <h2>289</h2>      
      <p>Plot No: 289</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1915" data-ypos="1175">      
      <h2>290</h2>      
      <p>Plot No: 290</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1915" data-ypos="1240">      
      <h2>291</h2>      
      <p>Plot No: 291</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1915" data-ypos="1300">      
      <h2>292</h2>      
      <p>Plot No: 292</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1965" data-ypos="1310">      
      <h2>293</h2>      
      <p>Plot No: 293</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1965" data-ypos="1240">      
      <h2>294</h2>      
      <p>Plot No: 294</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1965" data-ypos="1160">      
      <h2>295</h2>      
      <p>Plot No: 295</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="2005" data-ypos="1150">      
      <h2>296</h2>      
      <p>Plot No: 296</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
  <div class="pin" data-xpos="2005" data-ypos="1220">      
      <h2>297</h2>      
      <p>Plot No: 297</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="2005" data-ypos="1310">      
      <h2>298</h2>      
      <p>Plot No: 298</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1925" data-ypos="1465">      
      <h2>299</h2>      
      <p>Plot No: 299</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1900" data-ypos="1465">      
      <h2>300</h2>      
      <p>Plot No: 300</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1875" data-ypos="1465">      
      <h2>301</h2>      
      <p>Plot No: 301</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1850" data-ypos="1465">      
      <h2>302</h2>      
      <p>Plot No: 302</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1830" data-ypos="1465">      
      <h2>303</h2>      
      <p>Plot No: 303</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1805" data-ypos="1465">      
      <h2>304</h2>      
      <p>Plot No: 304</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1780" data-ypos="1465">      
      <h2>305</h2>      
      <p>Plot No: 305</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1760" data-ypos="1465">      
      <h2>306</h2>      
      <p>Plot No: 306</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1735" data-ypos="1465">      
      <h2>307</h2>      
      <p>Plot No: 307</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1710" data-ypos="1465">      
      <h2>308</h2>      
      <p>Plot No: 308</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1690" data-ypos="1465">      
      <h2>309</h2>      
      <p>Plot No: 309</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1665" data-ypos="1465">      
      <h2>310</h2>      
      <p>Plot No: 310</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1645" data-ypos="1465">      
      <h2>311</h2>      
      <p>Plot No: 311</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1620" data-ypos="1465">      
      <h2>312</h2>      
      <p>Plot No: 312</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1595" data-ypos="1465">      
      <h2>313</h2>      
      <p>Plot No: 313</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1575" data-ypos="1465">      
      <h2>314</h2>      
      <p>Plot No: 314</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1555" data-ypos="1465">      
      <h2>315</h2>      
      <p>Plot No: 315</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1530" data-ypos="1465">      
      <h2>316</h2>      
      <p>Plot No: 316</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1505" data-ypos="1465">      
      <h2>317</h2>      
      <p>Plot No: 317</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1485" data-ypos="1465">      
      <h2>318</h2>      
      <p>Plot No: 318</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1460" data-ypos="1465">      
      <h2>319</h2>      
      <p>Plot No: 319</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1435" data-ypos="1465">      
      <h2>320</h2>      
      <p>Plot No: 320</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1415" data-ypos="1465">      
      <h2>321</h2>      
      <p>Plot No: 321</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1395" data-ypos="1465">      
      <h2>322</h2>      
      <p>Plot No: 322</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1365" data-ypos="1465">      
      <h2>323</h2>      
      <p>Plot No: 323</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1345" data-ypos="1465">      
      <h2>324</h2>      
      <p>Plot No: 324</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="1320" data-ypos="1465">      
      <h2>325</h2>      
      <p>Plot No: 325</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="1290" data-ypos="1465">      
      <h2>326</h2>      
      <p>Plot No: 326</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1225" data-ypos="1470">      
      <h2>327</h2>      
      <p>Plot No: 327</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1200" data-ypos="1470">      
      <h2>328</h2>      
      <p>Plot No: 328</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1180" data-ypos="1470">      
      <h2>329</h2>      
      <p>Plot No: 329</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1155" data-ypos="1470">      
      <h2>330</h2>      
      <p>Plot No: 330</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1130" data-ypos="1470">      
      <h2>331</h2>      
      <p>Plot No: 331</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1110" data-ypos="1470">      
      <h2>332</h2>      
      <p>Plot No: 332</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="1085" data-ypos="1470">      
      <h2>333</h2>      
      <p>Plot No: 333</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1065" data-ypos="1470">      
      <h2>334</h2>      
      <p>Plot No: 334</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1045" data-ypos="1470">      
      <h2>335</h2>      
      <p>Plot No: 335</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="1020" data-ypos="1470">      
      <h2>336</h2>      
      <p>Plot No: 336</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="995" data-ypos="1470">      
      <h2>337</h2>      
      <p>Plot No: 337</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="970" data-ypos="1470">      
      <h2>338</h2>      
      <p>Plot No: 338</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="950" data-ypos="1470">      
      <h2>339</h2>      
      <p>Plot No: 339</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="925" data-ypos="1470">      
      <h2>340</h2>      
      <p>Plot No: 340</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="905" data-ypos="1470">      
      <h2>341</h2>      
      <p>Plot No: 341</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="880" data-ypos="1470">      
      <h2>342</h2>      
      <p>Plot No: 342</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="860" data-ypos="1470">      
      <h2>343</h2>      
      <p>Plot No: 343</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="835" data-ypos="1470">      
      <h2>344</h2>      
      <p>Plot No: 344</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="815" data-ypos="1470">      
      <h2>345</h2>      
      <p>Plot No: 345</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
       <div class="pin" data-xpos="790" data-ypos="1470">      
      <h2>346</h2>      
      <p>Plot No: 346</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
       <div class="pin" data-xpos="765" data-ypos="1470">      
      <h2>347</h2>      
      <p>Plot No: 347</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
       <div class="pin" data-xpos="735" data-ypos="1470">      
      <h2>348</h2>      
      <p>Plot No: 348</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
       <div class="pin" data-xpos="675" data-ypos="1470">      
      <h2>349</h2>      
      <p>Plot No: 349</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="655" data-ypos="1470">      
      <h2>350</h2>      
      <p>Plot No: 350</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="630" data-ypos="1470">      
      <h2>351</h2>      
      <p>Plot No: 351</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="605" data-ypos="1470">      
      <h2>352</h2>      
      <p>Plot No: 352</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="580" data-ypos="1470">      
      <h2>353</h2>      
      <p>Plot No: 353</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="560" data-ypos="1470">      
      <h2>354</h2>      
      <p>Plot No: 354</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="535" data-ypos="1470">      
      <h2>355</h2>      
      <p>Plot No: 355</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="515" data-ypos="1470">      
      <h2>356</h2>      
      <p>Plot No: 356</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="490" data-ypos="1470">      
      <h2>357</h2>      
      <p>Plot No: 357</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="465" data-ypos="1470">      
      <h2>358</h2>      
      <p>Plot No: 358</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="445" data-ypos="1470">      
      <h2>359</h2>      
      <p>Plot No: 359</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="425" data-ypos="1470">      
      <h2>360</h2>      
      <p>Plot No: 360</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="400" data-ypos="1470">      
      <h2>361</h2>      
      <p>Plot No: 361</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="375" data-ypos="1470">      
      <h2>362</h2>      
      <p>Plot No: 362</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="350" data-ypos="1470">      
      <h2>363</h2>      
      <p>Plot No: 363</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="350" data-ypos="1290">      
      <h2>364</h2>      
      <p>Plot No: 364</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="350" data-ypos="1210">      
      <h2>365</h2>      
      <p>Plot No: 365</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="380" data-ypos="1210">      
      <h2>366</h2>      
      <p>Plot No: 366</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="380" data-ypos="1290">      
      <h2>367</h2>      
      <p>Plot No: 367</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="405" data-ypos="1290">      
      <h2>368</h2>      
      <p>Plot No: 368</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="405" data-ypos="1210">      
      <h2>369</h2>      
      <p>Plot No: 369</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="430" data-ypos="1210">      
      <h2>370</h2>      
      <p>Plot No: 370</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
     <div class="pin" data-xpos="430" data-ypos="1290">      
      <h2>371</h2>      
      <p>Plot No: 371</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="450" data-ypos="1290">      
      <h2>372</h2>      
      <p>Plot No: 372</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
   <div class="pin" data-xpos="455" data-ypos="1210">      
      <h2>373</h2>      
      <p>Plot No: 373</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="475" data-ypos="1210">      
      <h2>374</h2>      
      <p>Plot No: 374</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="475" data-ypos="1290">      
      <h2>375</h2>      
      <p>Plot No: 375</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="500" data-ypos="1290">      
      <h2>376</h2>      
      <p>Plot No: 376</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="500" data-ypos="1210">      
      <h2>377</h2>      
      <p>Plot No: 377</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
         <div class="pin" data-xpos="520" data-ypos="1210">      
      <h2>378</h2>      
      <p>Plot No: 378</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
         <div class="pin" data-xpos="520" data-ypos="1290">      
      <h2>379</h2>      
      <p>Plot No: 379</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
      <div class="pin" data-xpos="545" data-ypos="1290">      
      <h2>380</h2>      
      <p>Plot No: 380</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
       <div class="pin" data-xpos="545" data-ypos="1210">      
      <h2>381</h2>      
      <p>Plot No: 381</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="575" data-ypos="1200">      
      <h2>382</h2>      
      <p>Plot No: 382</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="575" data-ypos="1260">      
      <h2>383</h2>      
      <p>Plot No: 383</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <div class="pin" data-xpos="575" data-ypos="1320">      
      <h2>384</h2>      
      <p>Plot No: 384</p>
      <p>Area/Square: 220</p>
      <p>Area/Rate: 50</p>
      <p>Total Amount: 5250</p>
      <a href="#">Read More</a>
   </div>
    <!--   <div class="pin" data-xpos="490" data-ypos="1100">      
      <h2>3</h2>      
      <ul>
        <li><a href="#">Chicago</a></li>
        <li><a href="#">Dallas</a></li>
        <li><a href="#">New York</a></li>
        <li><a href="#">San Francisco</a></li>
        <li><a href="#">Washington DC</a></li>

      </ul>
   </div>
      <div class="pin" data-xpos="490" data-ypos="460">      
      <h2>4</h2>      
      <ul>
        <li><a href="#">Chicago</a></li>
        <li><a href="#">Dallas</a></li>
        <li><a href="#">New York</a></li>
        <li><a href="#">San Francisco</a></li>
        <li><a href="#">Washington DC</a></li>

      </ul>
   </div>
      <div class="pin" data-xpos="490" data-ypos="460">      
      <h2>5</h2>      
      <ul>
        <li><a href="#">Chicago</a></li>
        <li><a href="#">Dallas</a></li>
        <li><a href="#">New York</a></li>
        <li><a href="#">San Francisco</a></li>
        <li><a href="#">Washington DC</a></li>

      </ul>
   </div>
      <div class="pin" data-xpos="490" data-ypos="460">      
      <h2>6</h2>      
      <ul>
        <li><a href="#">Chicago</a></li>
        <li><a href="#">Dallas</a></li>
        <li><a href="#">New York</a></li>
        <li><a href="#">San Francisco</a></li>
        <li><a href="#">Washington DC</a></li>

      </ul>
   </div> -->
 <!--   <div class="pin" data-xpos="980" data-ypos="490">      
      <h2>23</h2>      
      <ul>
        <li><a href="#">Chicago</a></li>
        <li><a href="#">Dallas</a></li>
        <li><a href="#">New York</a></li>
        <li><a href="#">San Francisco</a></li>
        <li><a href="#">Washington DC</a></li>

      </ul>
   </div> -->
   
  <!--  <div class="pin" data-xpos="225" data-ypos="390">      
      <h2>South America</h2>      
      <ul>
        <li><a href="#">Rio de Janeiro</a></li>
      </ul> 
   </div> -->
   
 <!--   <div class="pin" data-xpos="405" data-ypos="186">      
      <h2>Europe</h2>      
      <ul>
        <li><a href="#">Amsterdam</a></li>
        <li><a href="#">Bury St Edmunds</a></li>
        <li><a href="#">Dublin</a></li>
        <li><a href="#">Frankfurt</a></li>
        <li><a href="#">Glasgow</a></li>
        <li><a href="#">London</a></li>
        <li><a href="#">Manchester</a></li>
        <li><a href="#">Moscow</a></li>
        <li><a href="#">Paris</a></li>
        <li><a href="#">Stockholm</a></li>
        <li><a href="#">Udine</a></li>
        <li><a href="#">Zurich</a></li>
      </ul>
   </div> -->
   
   <!-- <div class="pin" data-xpos="420" data-ypos="290">      
      <h2>Africa</h2>      
      <ul>
        <li><a href="#">Cape Town</a></li>
        <li><a href="#">Johannesburg</a></li>
      </ul> 
   </div> -->
   
  <!--  <div class="pin pin-down" data-xpos="625" data-ypos="194">      
      <h2>Asia Pacific</h2>      
      <ul>
        <li><a href="#">Auckland</a></li>
        <li><a href="#">Brisbane</a></li>
        <li><a href="#">Canberra</a></li>
        <li><a href="#">Hong Kong</a></li>
        <li><a href="#">Melbourne</a></li>
        <li><a href="#">Perth</a></li>
        <li><a href="#">Singapore</a></li>
        <li><a href="#">Sydney</a></li>
      </ul>
   </div> -->
   
   <!-- <div class="pin" data-xpos="500" data-ypos="237">      
      <h2>Middle East</h2>      
      <ul>
        <li><a href="#">Abu Dhabi</a></li>
        <li><a href="#">Bahrain</a></li>
        <li><a href="#">Dubai</a></li>
        <li><a href="#">Egypt</a></li>
        <li><a href="#">Kuwait</a></li>
        <li><a href="#">Oman</a></li>
        <li><a href="#">Qatar</a></li>
        <li><a href="#">Saudi Arabia</a></li>
      </ul> 
   </div> -->
   
  <!-- <div class="pin pin-down" data-xpos="100" data-ypos="150">      
      <h2>Canada</h2>      
      <ul>
        <li><a href="#">Toronto</a></li>
      </ul> 
   </div> -->
</div>
</body>
</html>
