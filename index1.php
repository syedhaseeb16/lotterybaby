<?php

if(isset($_POST['clicks']))
{
	$box=$_POST['firstbox'];

foreach($box as $value) {
  print $value;
}
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  span {
    border: 1px solid;
    border-color: blue;`
 border-radius: 50%;
}
  </style>
</head>
<body>

<div class="container">
<p id="a" onclick="autoSelect(this.id)">on click</p>
<form action="index1.php" method="post">
<div class="row">      
 <div class="col-sm-4" >

  <div class="row">
    <div class="col-sm-2" ><span id="1" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="1a"  hidden type="checkbox" value="1"> 1   </span></div>
       <div class="col-sm-2" ><span id="2" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="2a"  hidden type="checkbox" value="2"> 2   </span></div>
        <div class="col-sm-2" ><span id="3" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="3a"  hidden type="checkbox" value="3"> 3   </span></div>
        
       <div class="col-sm-2" > <span id="4" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="4a"  hidden type="checkbox" value="4"> 4 </span></div>
      <div class="col-sm-2" >  <span id="5" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="5a"  hidden type="checkbox" value="5"> 5 </span></div>
       <div class="col-sm-2" > <span id="6" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="6a"  hidden type="checkbox" value="6"> 6 </span></div>
        
 
    </div>
    
     <div class="row">
    
       
        <div class="col-sm-2" > <span id="7" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="7a"  hidden type="checkbox" value="7"> 7 </span></div>
        <div class="col-sm-2" > <span id="8" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="8a"  hidden type="checkbox" value="8"> 8 </span></div>
         <div class="col-sm-2" ><span id="9" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="9a"  hidden type="checkbox" value="9"> 9 </span></div>
        
         <div class="col-sm-2" ><span id="10" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="10a"  hidden type="checkbox" value="10">10</span></div>
         <div class="col-sm-2" ><span id="11" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="11a"  hidden type="checkbox" value="11">11</span></div>
        <div class="col-sm-2" > <span id="12" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="12a"  hidden type="checkbox" value="12">12</span></div>
  
    </div>
    
      <div class="row">
       
        <div class="col-sm-2" > <span id="13" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="13a"  hidden type="checkbox" value="13"> 13 </span></div>
        <div class="col-sm-2" > <span id="14" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="14a"  hidden type="checkbox" value="14"> 14 </span></div>
        <div class="col-sm-2" > <span id="15" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="15a"  hidden type="checkbox" value="15"> 15 </span></div>
        
        <div class="col-sm-2" > <span id="16" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="16a"  hidden type="checkbox" value="16">16</span></div>
        <div class="col-sm-2" > <span id="17" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="17a"  hidden type="checkbox" value="17">17</span></div>
         <div class="col-sm-2" ><span id="18" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="18a"  hidden type="checkbox" value="18">18</span></div>
        

    </div>
    
      <div class="row">
    
       
       <div class="col-sm-2" > <span id="19" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="19a"  hidden type="checkbox" value="19"> 19 </span></div>
         <div class="col-sm-2" ><span id="20" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="20a"  hidden type="checkbox" value="20"> 20 </span></div>
         <div class="col-sm-2" > <span id="21" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="21a"  hidden type="checkbox" value="21"> 21 </span></div>
        
         <div class="col-sm-2" > <span id="22" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="22a"  hidden type="checkbox" value="22">22</span></div>
        <div class="col-sm-2" >  <span id="23" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="23a"  hidden type="checkbox" value="23">23</span></div>
         <div class="col-sm-2" > <span id="24" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="24a"  hidden type="checkbox" value="24">24</span></div>
        
    
    </div>
    
      <div class="row">
   
       
        <div class="col-sm-2" ><span id="25" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="25a"  hidden type="checkbox" value="25"> 25 </span></div>
       <div class="col-sm-2" > <span id="26" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="26a"  hidden type="checkbox" value="26"> 26 </span></div>
        <div class="col-sm-2" ><span id="27" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="27a"  hidden type="checkbox" value="27"> 27 </span></div>
        
        <div class="col-sm-2" ><span id="28" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="28a"  hidden type="checkbox" value="28">28</span></div>
        <div class="col-sm-2" ><span id="29" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="29a"  hidden type="checkbox" value="29">29</span></div>
        <div class="col-sm-2" ><span id="30" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="30a"  hidden type="checkbox" value="30">30</span></div>
        
   
    </div>
    
      <div class="row">
   
       
        <div class="col-sm-2" ><span id="31" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="31a"  hidden type="checkbox" value="31"> 31 </span></div>
       <div class="col-sm-2" > <span id="32" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="32a"  hidden type="checkbox" value="32"> 32 </span></div>
        <div class="col-sm-2" ><span id="33" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="33a"  hidden type="checkbox" value="33"> 33 </span></div>
        
        <div class="col-sm-2" ><span id="34" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="34a"  hidden type="checkbox" value="34">34</span></div>
       <div class="col-sm-2" > <span id="35" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="35a"  hidden type="checkbox" value="35">35</span></div>
        <div class="col-sm-2" ><span id="36" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="36a"  hidden type="checkbox" value="36">36</span></div>
        
   
    </div>
    
      <div class="row">
   
       
       <div class="col-sm-2" > <span id="37" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="37a"  hidden type="checkbox" value="37"> 37 </span></div>
       <div class="col-sm-2" > <span id="38" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="38a"  hidden type="checkbox" value="38"> 38 </span></div>
        <div class="col-sm-2" ><span id="39" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="39a"  hidden type="checkbox" value="39"> 39 </span></div>
        
        <div class="col-sm-2" ><span id="40" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="40a"  hidden type="checkbox" value="40">40</span></div>
        <div class="col-sm-2" ><span id="41" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="41a"  hidden type="checkbox" value="41">41</span></div>
       <div class="col-sm-2" > <span id="42" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="42a"  hidden type="checkbox" value="42">42</span></div>
        
  
    </div>
    
      <div class="row">

       
         <div class="col-sm-2" > <span id="43" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="43a"  hidden type="checkbox" value="43"> 43 </span></div>
        
        <div class="col-sm-2" >  <span id="44" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="44a"  hidden type="checkbox" value="44"> 44 </span></div>
        
         <div class="col-sm-2" > <span id="45" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="45a"  hidden type="checkbox" value="45"> 45 </span></div>
        
        
         <div class="col-sm-2" > <span id="46" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="46a"  hidden type="checkbox" value="46">46</span></div>
        
         <div class="col-sm-2" > <span id="47" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="47a"  hidden type="checkbox" value="47">47</span></div>
        
         <div class="col-sm-2" > <span id="48" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="48a"  hidden type="checkbox" value="48">48</span></div>
        
        
   
    </div>
    
      <div class="row">
    
       
        <div class="col-sm-2" ><span id="49" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="49a"  hidden type="checkbox" value="49"> 49 </span></div>
        <div class="col-sm-2" ><span id="50" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="50a"  hidden type="checkbox" value="50"> 50 </span></div>
       <div class="col-sm-2" > <span id="51" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="51a"  hidden type="checkbox" value="51"> 51 </span></div>
        
       <div class="col-sm-2" > <span id="52" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="52a"  hidden type="checkbox" value="52">52</span></div>
       <div class="col-sm-2" > <span id="53" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="53a"  hidden type="checkbox" value="53">53</span></div>
       <div class="col-sm-2" > <span id="54" style="background-color:white;" onclick="myFunction(this.id)"><input name="firstbox[]" id="54a"  hidden type="checkbox" value="54">54</span></div>
         
    </div>
</div>
<Button value="click" name="clicks">clicks </Button>
</form>
</div>
    <script>
function myFunction(id) {
str=document.getElementById(id).style.backgroundColor;

if(str.match("white")){
var str1 = id.toString();
var str2 = "a";
var res = str1.concat(str2);

    document.getElementById(res).checked = true;
  	document.getElementById(id).style.backgroundColor = "red";
  	document.getElementById(id).style.color = "white";

}else if((str.match("red"))){
	document.getElementById(id).style.backgroundColor = "white";
    document.getElementById(id).style.color = "black"
    document.getElementById(id.concat('a')).checked = false;
}
   
}

function autoSelect(id){


    min = Math.ceil(1);
    max = Math.floor(54);
    var ran=(Math.floor(Math.random() * (max - min + 1)) + min);
    var i;
    var total=8;
    let filledArray = new Array(total);
    

    for(i=1;i<total;i++){
      ran=(Math.floor(Math.random() * (max - min + 1)) + min);
      filledArray[i]=ran;
    }

    for(i=1; i<total;i++){
    document.getElementById(filledArray[i]).style.backgroundColor = "red";
    }

  for(i=1; i<total;i++){
    
    document.getElementById(filledArray[i]).style.color = "white";
    }
   for(i=1; i<total;i++){
    var str1 = filledArray[i].toString();
var str2 = "a";
var res = str1.concat(str2);
  document.getElementById(res).checked = true; 
 
    }


}

</script>

  </div>
</div>


    
</body>
</html>
