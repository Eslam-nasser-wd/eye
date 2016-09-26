<!-- Header -->
<?php $page_title = "الرئسية" ?>
<?php include './assets/header.php' ?>

	<section id="hero">
		<div class="container_____">
			<div class="text-reveal">
				<div class="top">
					<h1>دمنا</h1>
				</div><!--/top-->
				<span class="separator"></span>
				<div class="bottom">
					<h1>ينقذنا</h1>
				</div><!--/bottom-->
			</div><!--/text-reveal-->

			<div class="formSection">
				<form action="">
					<input type="text" placeholder="أسمك" autofocus required>
					<input type="text" placeholder="سنك" onkeyup="numbersonly(this)" required>
					<select name="" id="selectAge" required>
						<option selected disabled>أختر فصيلة دمك</option>
						<option value="">A</option>
						<option value="">A+</option>
						<option value="">A-</option>
						<option value="">B</option>
						<option value="">B+</option>
						<option value="">B-</option>
						<option value="">AB</option>
						<option value="">O</option>
						<option value="">O-</option>
					</select>
					<input type="submit" value="عايز أتبرع">
				</form>
				<script>
					// To validate the age input
					function numbersonly(input){
							var regex = /[^0-9]/gi,
									str 	= input.value;
							input.value = input.value.replace(regex, '');
							if ( regex.test(str) ) {
								input.classList.add('wrong-letter');
							}else{
								input.classList.remove('wrong-letter');
							}
						}
				</script>
			</div><!--/formSection-->
			<div class="start-scroll">
				<span class="text">ليه أتبرع؟</span>
				<span class="arrow"><i class="icon ion-arrow-down"></i></span>
			</div>
		</div><!--/container-->
	</section><!--#hero-->

<!-- Footer -->
<?php include './assets/footer.php' ?>
