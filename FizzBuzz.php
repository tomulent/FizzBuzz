<?php
function single_line_test(){
	for($i = 1; $i <=100; $i++){
		if($i % 15 == 0){
			echo "FizzBuzz ";
		}
		elseif($i % 3 == 0){
			echo "Fizz! ";
		}
		elseif($i % 5 == 0){
			echo "Buzz! ";
		}
		else{
			echo $i. " ";
		}
	}
}



function multi_line_test(){
	for($i = 1; $i <=100; $i++){
		if($i % 15 == 0){
			echo "FizzBuzz!<br>";
		}
		elseif($i % 3 == 0){
			echo "Fizz!<br>";
		}
		elseif($i % 5 == 0){
			echo "Buzz!<br>";
		}
		else{
			echo $i. "<br>";
		}
	}
}

function fancy_multi_line_test(){
	echo '<div class="short-box">';
	for($i = 1; $i <=100; $i++){
		if($i % 15 == 0){
			echo '<marquee direction="left" scrollamount="3"><span class="fancy-text">FizzBuzz!</span></marquee><br>';
		}
		elseif($i % 3 == 0){
			echo '<marquee direction="down" scrollamount="3"><span class="fancy-text">Fizz!</span></marquee><br>';
		}
		elseif($i % 5 == 0){
			echo '<marquee direction="up" scrollamount="3"><span class="fancy-text">Buzz!</span></marquee><br>';
		}
		else{
			echo $i . '<br>';
		}
	}
	echo '</div>';
}


 ?>
 
 <head>
	<style type="text/css">
		.fancy-text {
			color: purple;
			font-family: fantasy;
		}
		.short-box {
			width: 40px;
		}
	</style>
</head>
<body>
	<?php fancy_multi_line_test(); ?>
</body>
