<?php include('header.php')?>
<div class="innerbanner">
	<img src="img/portfolio_banner1.jpg">
</div>
<style type="text/css">
	.portfolio_one { margin:100px 0; }
	.prot_box { position: relative; overflow:hidden; box-shadow: 0px 0px 20px 0px #999; margin-top:30px;}
	.prot_box:hover .port_hover { transform: scale(1); }
	.prot_box:hover h3 { border-bottom:2px solid red; }
	.prot_box img { width:100%; }
	.prot_box h3 { font-size:20px; color:#000; background:#fff; padding:8px; display: block; margin: 0; position:relative; border-bottom:2px solid #fff; z-index:99; font-weight:600; text-align: center; transition: all 0.3s ease;}
	.port_hover { position: absolute; top:0; left:0; width:100%; bottom: 0; background:#00000091; text-align: center; transition: all 0.5s ease; transform: scale(0); }
	.port_hover .fa {color: #d65050;
    background: #eaeaea;
    margin-top: 30%;
    padding: 8px;
    font-size: 18px;
    border-radius: 50%;
    text-align: center;
    width: 40px;
    height: 40px;
    line-height: 26px;}
    .portfolio_one h4 { font-size:36px; margin-bottom:20px; }
</style>

<style>
/*.gallery{ margin:60px 0; }*/	
.gallery .row {margin: 0;}
ul.tab_nav.main_nav_gallery {width: 800px !important; font-size: 0 !important;}
.gallery_filter .main_nav_gallery {width:900px !important; font-size: 0 !important; padding:0;}
.gallery_filter .main_nav_gallery li {display:inline;text-align: center;}
.gallery_filter .main_nav_gallery li button {display:inline-block;width:12%;padding: .75rem 0;margin: 0;text-decoration: none;color: #333;font-size: 13px; cursor:pointer; text-transform: uppercase; font-weight:600;}
.project_main_page { margin-top: 90px;}
.gallery_main { margin-bottom:40px;}
.g_box { position: relative; overflow: hidden;}
.g_box:hover .black_shade { top:0;}
.white_box_hover {background: #fff; position: absolute; bottom:-31%; width: 100%; padding:3%; transition:all 0.8s ease; z-index: 2;}
.white_box_hover h3 { font-size: 16px; color: #000;}
.white_box_hover p { font-size:13px; color: #555;}
.black_shade { width: 100%; height: 100%; position: absolute; top:100%; left: 0; background: #000; opacity: 0.5; transition: all 0.5s ease; z-index: 1;}
.aaa {background: none; border:0; outline:0;}

.aaa:focus {outline:0;}
.g_box:hover .white_box_hover { bottom: 0;}
.g_box:hover .fa {left: 6%; z-index:99999999999999999999;}
.g_box:hover img {transform: scale(1.1);}
.g_box:hover .iconms {left:8%; display: none;}
.iconms {position: absolute; top:5%; left:-7%; z-index: 5;  width: 32px !important; height: 32px; !important; transition: all 0.8s ease !important;}
.g_box img { width: 100%; transition:all 0.5s ease;}
ul.tab_nav.main_nav_gallery { width: 800px !important;  font-size: 0 !important;}
.gallery_filter .main_nav_gallery {width:900px !important; font-size: 0 !important; padding:0;}
.gallery_filter .main_nav_gallery li {display:inline;text-align: center;}
.gallery_filter .main_nav_gallery li button {display:inline-block;width:33%;padding: .75rem 0;margin: 0;text-decoration: none;color: #333;font-size: 13px; cursor:pointer; text-transform: uppercase; font-weight:600;}
.tab_gallery_nav_line {height:2px;width: 33%;  margin: 0;background: #d65050 ;border: none;transition: .8s ease-in-out;}
        
@media only screen and ( max-width: 414px ) {
.gallery_filter .main_nav_gallery li button { width: auto; font-size: 11px; text-transform: lowercase; margin-left:10px;}
.tab_gallery_nav_line { display: none;}
ul.tab_nav.main_nav_gallery { width:100% !Important; }
}
    </style>


<div class="portfolio_main_page">

 <div class="gallery gallery_main">
       <div class="container">
            <div class="gallery_filter ma">
             
              <script>
        $(document).ready(function(){
            
    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
           $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {    
        $(this).removeClass("active");
    }    
    
    $(this).addClass("active");

});
    </script>
            
             
             <style>
                   .harsh { color: #d65050 !important;} 
               </style>
             
              <script>
                  
                  
                  
                  function stopp(val,id){
                      var raj= $('#hidden').val();
                     
                    switch(val){
                            
                    case 1:
                        $('.tab_gallery_nav_line').css({'margin-left':'0%'});
                        $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                            
                    break
                    case 2:
                        $('.tab_gallery_nav_line').css({'margin-left':'33%'});
                            $(id).addClass('harsh');
                            $("#aa1").removeClass('harsh');
                        $(raj).removeClass('harsh');
                    break   
                    case 3:
                        $('.tab_gallery_nav_line').css({'margin-left':'66%'});
                            $("#aa1").removeClass('harsh');
                            
                            $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                    break   
                    case 4:
                        $('.tab_gallery_nav_line').css({'margin-left':'45%'});
                            $("#aa1").removeClass('harsh');
                            $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                    break   
                    case 5:
                        $('.tab_gallery_nav_line').css({'margin-left':'60%'});  
                            $("#aa1").removeClass('harsh');
                            $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                    break
                    case 6:
                        $('.tab_gallery_nav_line').css({'margin-left':'75%'}); 
                            $("#aa1").removeClass('harsh');
                            $(id).addClass('harsh');
                        $(raj).removeClass('harsh'); 
                    break
                    }
                    $('#hidden').val(id);
                  }
                </script>
                  
                  <input type="hidden" id="hidden">
<div class="portfolio_one">
    <h4>Our Portfolio
    	<span class="line"></span>
    </h4>           
<ul class="tab_nav main_nav_gallery">
    <li class="one"><button id="aa1" onclick="stopp(1,'#aa1')" class="filter-button aaa harsh" data-filter="digital_marketing">Digital Marketing</button></li>
    <li class="two"><button  id="aa2" onclick="stopp(2,'#aa2')" class="filter-button aaa" data-filter="website_design">Website Design &amp; Development</button></li>
    <li class="three"><button id="aa3" onclick="stopp(3,'#aa3')" class="filter-button aaa" data-filter="graphic_design">Graphic Design</button></li>
    <hr class="tab_gallery_nav_line">
</ul>
      <div class="container-fluent">
            <div class="row">
            <!-- digital_marketing start -->
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter digital_marketing">
	            <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter digital_marketing">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter digital_marketing">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter digital_marketing">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter digital_marketing">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter digital_marketing">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <!-- digital_marketing end -->
            <!-- website_design start -->
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter website_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter website_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
			</div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter website_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter website_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter website_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter website_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <!-- website_design end -->
            <!-- graphic_design start -->
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter graphic_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter graphic_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter graphic_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter graphic_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter graphic_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <div class="col-md-3 col-xs-12 banner_bottom_margin filter graphic_design" style="display: none;">
                <div class="prot_box">
					<img src="img/port1.jpeg">
					<h3>CyBrowse</h3>
					<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
						<i class="fa fa-link" aria-hidden="true"></i>
					</a>
				</div>
            </div>
            <!-- graphic_design end -->



            </div>
            </div>  
    </div> 
</div>

<!-- 

	<div class="portfolio_one">
		<div class="container">
			
			<div class="row">
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="prot_box">
						<img src="img/port1.jpeg">
						<h3>CyBrowse</h3>
						<a href="https://www.cybrowse.com" target="_blank" class="port_hover">
							<i class="fa fa-link" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>	
		</div>
	</div> -->
</div>
<?php include('footer.php')?>