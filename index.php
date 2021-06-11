<!DOCTYPE html>
<html lang-"en">
<head>
	<meta charset="UTF-8>
	<meta http-equiv-"X-UA-Compatible" content-"IE-edge">
	<meta name-"viewport" content-"width-device-width, initial-scale-1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Panorama Lab</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#location">Location</a>
          <a class="dropdown-item" href="#">Experience</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Curriculum Vitae</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">My Portfolio</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="carousel (1).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="carousel (2).jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="carousel (3).jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
<div class="card-deck mt-5 mb-5">
  <div class="card">
    <img src="carousel (1).jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="carousel (1).jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="carousel (1).jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
	
	<div class="container">
	<table class="table table-striped table-dark">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>NIM</th>
				<th>KOM</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Amin</td>
				<td>201401025</td>
				<td>B</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Beni</td>
				<td>201401034</td>
				<td>A</td>
			</tr>
		</tbody>
	</table>
<div>

<div>
<title>JavaScriptKit.com Multiple Choice Quiz Script</title>

<style>
.qheader{
font:bold 14px Arial;
}

.qselections{
font:normal 13px Arial;
}
</style>

<script src="quizconfig.js">
</script>

<script>

var actualchoices=new Array()
document.cookie="ready=yes"
</script>

</div>

<div bgcolor="#FFFFFF">

<!--Comments on configuring quiz script-->
<!--Change the questions below any way you want, but make note of the following:-->
<!--1) Perserve the <FORM> tags -->
<!--2a) Inside each radio button, use the VALUE attribute to denote each question's choices: "a", "b", "c" etc.-->
<!--2b) Inside each radio button, use the NAME attribute to denote which question the button belongs to ("question1", "question2" etc-->
<!--3) Script supports unlmited # of questions. Be sure to edit .js file to enter corresponding solutions-->

<p align="center">

<form method="POST" name="myquiz">

<font face="Arial"><big><big>General Knowledge Quiz</big></big></font></p>

<div class="qheader">
1) What is the difference between a jungle and a rain forest?</div>
<div class="qselections">
<input type="radio" value="a" name="question1">a) No difference. Simply two different ways in referring to the same thing.<br>
<input type="radio" value="b" name="question1">b) A jungle in general receives less rain than a rain forest.<br>
<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>
</div>

<br>

<div class="qheader">
2) What is the world's most common religion?</div>
<div class="qselections">
<input type="radio" value="a" name="question2">a) Christianity<br>
<input type="radio" value="b" name="question2">b) Buddhism<br>
<input type="radio" value="c" name="question2">c) Hinduism<br>
<input type="radio" value="d" name="question2">d) Muslim<br>
</div>

<br>

<div class="qheader">
3) Which city ranks as the world's most populous city (2002)?</div>
<div class="qselections">
<input type="radio" value="a" name="question3">a) New York (US)<br>
<input type="radio" value="b" name="question3">b) Mexico City (Mexico)<br>
<input type="radio" value="c" name="question3">c) Tokyo (Japan)<br>
<input type="radio" value="d" name="question3">d) Shanghai (China)<br>
</div>

<br>

<div class="qheader">
4) What is the second largest country (in size) in the world?</div>
<div class="qselections">
<input type="radio" value="a" name="question4">a) USA<br>
<input type="radio" value="b" name="question4">b) China<br>
<input type="radio" value="c" name="question4">c) Canada<br>
<input type="radio" value="d" name="question4">d) Russia<br>
</div>

<br>

<div class="qheader">
5) As of January 2003, how much is Microsoft Chairman Bill Gates's net worth?</div>
<div class="qselections">
<input type="radio" value="a" name="question5">a) 10 million US<br>
<input type="radio" value="b" name="question5">b) 10 billion US<br>
<input type="radio" value="c" name="question5">c) 35 billion US<br>
<input type="radio" value="d" name="question5">d) 50 billion US<br>
</div>

<br>

<div class="qheader">
6) Which country below is not one of the members of the UN security council (Jan 2003)?</div>
<div class="qselections">
<input type="radio" value="a" name="question6">a) USA<br>
<input type="radio" value="b" name="question6">b) China<br>
<input type="radio" value="c" name="question6">c) Germany<br>
<input type="radio" value="d" name="question6">d) France<br>
</div>

<br>

<div class="qheader">
7) The longest river in the world is:</div>
<div class="qselections">
<input type="radio" value="a" name="question7">a) Amazon (Brazil)<br>
<input type="radio" value="b" name="question7">b) Nile (Egypt)<br>
<input type="radio" value="c" name="question7">c) Yangtze (China)<br>
<input type="radio" value="d" name="question7">d) Congo (Zaire)<br>
</div>

<br>

<div class="qheader">
8) Which software firm is the second largest in the world, after Microsoft?</div>
<div class="qselections">
<input type="radio" value="a" name="question8">a) Netscape<br>

<input type="radio" value="b" name="question8">b) Oracle<br>
<input type="radio" value="c" name="question8">c) Lotus<br>
<input type="radio" value="d" name="question8">d) Norton<br>
</div>

<br>

<div class="qheader">
9) What's the world's most widely spoken language?</div>
<div class="qselections">
<input type="radio" value="a" name="question9">a) English<br>
<input type="radio" value="b" name="question9">b) Spanish<br>
<input type="radio" value="c" name="question9">c) Mandarin<br>
<input type="radio" value="d" name="question9">d) French<br>
</div>

<br>

<div class="qheader">
10) Which continent is host to the most countries in the world?</div>
<div class="qselections">
<input type="radio" value="a" name="question10">a) Asia<br>
<input type="radio" value="b" name="question10">b) Africa<br>
<input type="radio" value="c" name="question10">c) Europe<br>
</div>

</form>

<form>
<div align="center">
<a href="results.html">Grade Me!</a> </input> <input type="button" value="Reset" name="B2" onClick="document.myquiz.reset()"></div>

</form>

</div>

<br>

	<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7963.707800012572!2d98.49847174396142!3d3.6208491123194966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312a1e1f3a01a9%3A0x3c3c82a7f786b936!2sRumah%20Sop!5e0!3m2!1sid!2sid!4v1619933814451!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	
<footer Id="location" class="text-center mt-3 mb-3">
	<img src="logo1.png" alt-"logo">
	<p>My Portfolio</p>
</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
	