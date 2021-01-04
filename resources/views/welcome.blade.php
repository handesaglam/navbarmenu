<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HadiGezdir.com</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
         body {
              margin:0;
              padding:0;
              color:#f2f2f2;
              box-sizing:border-box;
              font-family:'Montserrat', sans-serif;

            }
nav{background:#e9e9e9; 

border:1px solid #e9e9e9;
border-left:none;
border-right:none;

}
nav ul{
display:flex;
list-style:none;
flex-wrap:wrap;
justify-content:center;


}

nav ul li.logo{
flex:1;
font-size:15px;
font-weight:700;
color:#f2af38;


}
nav ul div.items{
 padding:0 25px;
display:inline-flex;

}
nav ul div.items a{
    text-decoration:none;
    font-size:14px;
    padding:0 12px;
    color:#000000;


}


section{
//width: 100%;
//height:100vh;
backgroun:#ccc;
margin:10px;

}
.search{
position:absolute;

left:10%;
padding:20px 0 20px  60px;
min-height:60px;
width:80%;
box-sizing:border-box;
background:#fff;
box-shadow:0 5px 15px rgba(0,0,0,.5);


}

.search .icon{

position: absolute;
top:25px;
left:25px;
font-size:30px;
color: #f2af38


}

.search .row{
display:flex;

}
.search .row .option{
flex:1;
position:relative;
padding:0;
border-right:1px solid #ccc;

}
.search .row .option select{

position: relative;
border:none;
outline:none;
font-size:24px;
color:#848484;
padding:10px;
-webkit-appearance:none;
width:100%;
border-right:1px solid #ccc;
background:transparent;


}
.search .row .option:before{
content:'\f107';
font-family:fontAwesome;
position:absolute;
color:#848484;
right:10px;
top:15px;
font-size:20px;

}
.search .row .option:last-child:before{

display:none;

}
.search .row .option:last-child{

padding:0 20px;
border-right:none;
box-sizing:border-box;
}
.search .row .option input[type="submit"]{

border:none;
background:#f2af38;
color:#fff;
height:100%;
width:100%;
text-transform:uppercase;

}
.container{

display:grid;
grid-template-rows: 80vh min-content 40vw repeat(3,min-content);

grid-template-columns:8rem minmax(6rem,1fr)
[center-start] repeat(8,minmax(min-content,14rem))
[center-end] minmax(6rem,1fr);


}







        </style>
    </head>
    <body>
<nav>
<ul>
<li class="logo">HadiGezdir.com</li>
<div class="items">
<a href="#"><i class="fa fa-fw fa-user"></i>Üye Girişi</a>
<a href="#"><i class="fa fa-fw fa-user-plus"></i>Üye ol</a>
</div>
</ul>
</nav>

<section>
<div class="search">



<div class="icon">
<i class="fa fa-search" aria-hidden="true"></i>

</div>
<form>
<div class="row">
<div class="option">
<select>
<option>Tarih seç</option>
<option>option 1</option>
<option>option 1</option>

</select>
</div>
<div class="option">
<select>
<option>Şehir seç</option>
<option>Elazığ</option>
<option>Malatya</option>
</select>
</div>
<div class="option">
<select>
<option>Kategori Seçiniz</option>
<option>Köpek</option>
<option>Papağan</option>
</select>
</div>
<div class="option">
<input type="submit" name="" value="Ara">

</div>
</div>
</form>
</section>

</div>


<div class="container">
<section class="foods">
<div class="food">
<img src="https://image.shutterstock.com/image-photo/portrait-funny-dog-jack-russell-600w-1674146386.jpg" alt="Food 1" class="food_img"/>
<h5 class="food_name">Italian pizza</h5>
<div class="ingredient_1">
<p>pizza dough</p>
</div>

<div class="ingredient_2">
<p>Cheese</p>
</div>

<div class="ingredient_3">
<p>Tomato sauce</p>
</div>
<div class="ingredient_1">
<p>Floor</p>
</div>
<button class="btn">Order now</button>

</div>
<div class="food">
<img src="https://image.shutterstock.com/image-photo/portrait-funny-dog-jack-russell-600w-1674146386.jpg" alt="Food 1" class="food_img"/>
<h5 class="food_name">Italian pizza</h5>
<div class="ingredient_1">
<p>pizza dough</p>
</div>

<div class="ingredient_2">
<p>Cheese</p>
</div>

<div class="ingredient_3">
<p>Tomato sauce</p>
</div>
<div class="ingredient_1">
<p>Floor</p>
</div>
<button class="btn">Order now</button>

</div>

<div class="food">
<img src="https://image.shutterstock.com/image-photo/portrait-funny-dog-jack-russell-600w-1674146386.jpg" alt="Food 1" class="food_img"/>
<h5 class="food_name">Italian pizza</h5>
<div class="ingredient_1">
<p>pizza dough</p>
</div>

<div class="ingredient_2">
<p>Cheese</p>
</div>

<div class="ingredient_3">
<p>Tomato sauce</p>
</div>
<div class="ingredient_1">
<p>Floor</p>
</div>
<button class="btn">Order now</button>

</div>








</section>




</div>











      
    </body>
</html>
