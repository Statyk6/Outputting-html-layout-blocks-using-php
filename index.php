<?php 
/*
* Project HomeWork *
* Alexandr Kravets *
* Date 14.04.2021 *
*/

include("views/head.php"); 

switch ($user_input = htmlspecialchars($_POST["user"])) {
    case 0:
        echo "<div class='row-1-3 clearfix'>
		  <div class='col-1-1'><p>1</p></div>
		</div>
		<div class='row-1-3 clearfix'>
		  <div class='col-1-2'><p>2</p></div>
		  <div class='col-1-3'><p>3</p></div>
		</div>
		<div class='row-4-6 clearfix'>
		  <div class='col-2-4'><p>4</p></div>
		  <div class='col-2-5'><p>5</p></div>
		</div>
		<div class='row-4-6 clearfix'>
		<div class='col-2-6'><p>6</p></div>
		</div>";
        break;
    case 1:
        echo "<div class='row-1-3 clearfix'>
		  <div class='col-1-1'><p>1</p></div>
		</div>";
        break;
    case 2:
        echo "<div class='row-1-3 clearfix'>
		  <div class='col-1-1'><p>1</p></div>
		</div>
		<div class='row-1-3 clearfix'>
		  <div class='col-1-2'><p>2</p></div>
		</div>";
        break;
    case 3:
        echo "<div class='row-1-3 clearfix'>
		  <div class='col-1-1'><p>1</p></div>
		</div>
		<div class='row-1-3 clearfix'>
		  <div class='col-1-2'><p>2</p></div>
		  <div class='col-1-3'><p>3</p></div>
		</div>";
        break;
	case 4:
        echo "<div class='row-1-3 clearfix'>
		  <div class='col-1-1'><p>1</p></div>
		</div>
		<div class='row-1-3 clearfix'>
		  <div class='col-1-2'><p>2</p></div>
		  <div class='col-1-3'><p>3</p></div>
		</div>
		<div class='row-4-6 clearfix'>
		  <div class='col-2-4'><p>4</p></div>
		</div>";
        break;
	case 5:
        echo "<div class='row-1-3 clearfix'>
		  <div class='col-1-1'><p>1</p></div>
		</div>
		<div class='row-1-3 clearfix'>
		  <div class='col-1-2'><p>2</p></div>
		  <div class='col-1-3'><p>3</p></div>
		</div>
		<div class='row-4-6 clearfix'>
		  <div class='col-2-4'><p>4</p></div>
		  <div class='col-2-5'><p>5</p></div>
		</div>";
        break;
	case 6:
        echo "<div class='row-1-3 clearfix'>
		  <div class='col-1-1'><p>1</p></div>
		</div>
		<div class='row-1-3 clearfix'>
		  <div class='col-1-2'><p>2</p></div>
		  <div class='col-1-3'><p>3</p></div>
		</div>
		<div class='row-4-6 clearfix'>
		  <div class='col-2-4'><p>4</p></div>
		  <div class='col-2-5'><p>5</p></div>
		</div>
		<div class='row-4-6 clearfix'>
		<div class='col-2-6'><p>6</p></div>
		</div>";
        break;
}

include("views/form.php"); 
include("views/bottom.php"); 
?>