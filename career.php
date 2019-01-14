<?php include('header.php')?>
<style type="text/css">
	.career_one { margin:60px 0; }
.career_one form { width:80%; margin:auto; }
.career_one input { width:100%; padding:8px; border:0; border:1px solid #666; margin-bottom:15px; color:#555; }
.career_one select { width:100%; padding:8px; border:0; border:1px solid #666; margin-bottom:15px; color:#555;}
.career_one textarea { width:100%; padding:8px; border:0; border:1px solid #666; margin-bottom:15px; min-height:110px; color:#555;}
.career_submit { background: #d65050; color: #fff !important; border: 0 !important; text-transform: uppercase; padding:9px !important; }
.career_innerbanner { background: #eaeaea; }
.career_one h4 {font-size: 36px;  color: #000; margin: 0; margin-bottom: 15px; text-align: center; margin-bottom:40px;}
</style>
<div class="innerbanner career_innerbanner">
	<img src="img/career_banner.png">
</div>
<div class="career_one">
		<div class="container">
			<h4>Career With Us
                <span class="line_center"></span>
            </h4>
			<form method="post">
				<div class="row">
					<div class="col-md-6"><input type="text" placeholder="Name"></div>
					<div class="col-md-6"><input type="text" placeholder="Email"></div>
				</div>
				<div class="row">
					<div class="col-md-6"><input type="text" placeholder="Phone"></div>
					<div class="col-md-6"><select>
					    <option>Job Type</option>
					    <option>Graphic Designer</option>
					    <option>Digital Marketing Manager</option>
					    <option>Web Developer</option>
					    <option>Php Trainer</option>
					    <option>others</option>
					</select></div>
				</div>
				<div class="row">
					<div class="col-md-12"><textarea placeholder="Message"></textarea></div>
				</div>
				<div class="row">
				    <div class="col-md-6"><input type="file" name="file"></div>
				    <div class="col-md-6"><input type="Submit" value="Submit" class="career_submit"></div>
				</div>
				</form></div>
			
		</div>

<?php include('footer.php')?>