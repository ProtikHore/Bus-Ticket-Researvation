<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Input :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{ asset('admin/css/style.css') }}" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="{{ asset('admin/css/morris.css') }}" type="text/css"/>
<!-- Graph CSS -->
<link href="{{ asset('admin/css/font-awesome.css') }}" rel="stylesheet">
<!-- jQuery -->
<script src="{{ asset('admin/js/jquery-2.1.4.min.js') }}"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="{{ asset('admin/css/icon-font.min.css') }}" type='text/css' />
<!-- //lined-icons -->
</head>
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->

<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Forms <i class="fa fa-angle-right"></i> Input</li>
  </ol>
		<!--grid-->
 	<div class="grid-form">
<!----->

<!---->

<!---->



<!---->
        <div class="grid-form1">
          <h3 id="forms-horizontal">Horizontal form</h3>
          <form method = "POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
							<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
  						<div class="col-sm-10">
                <select id="bus_type" class="form-control1" name = "bus_type">
    							<option value = "{{$uid->bus_type}}">{{$uid->bus_type}}</option>
    							<option value = "Ac">Ac</option>
                  <option value = "Non Ac">Non Ac</option>
    							<option value = "Hyundai">Hyundai</option>
    							<option value = "Scanias">Scania</option>
  						   </select>
              </div>
					</div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label hor-form">Deprature Time</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="deprature_time" placeholder="" name = "deprature_time" value = "{{$uid->deprature_time}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label hor-form">Available Seat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="available_seat" placeholder="" name = "available_seat" value = "{{$uid->available_seat}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label hor-form">Price</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="price" placeholder="" name = "price" value = "{{$uid->price}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label hor-form">Selected Seat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="selected_seat" placeholder="" name = "selected_seat" value = "{{$uid->selected_seat}}">
            </div>
          </div>
          <div class="form-group">
            <!-- <label for="inputPassword3" class="col-sm-2 control-label hor-form">Price</label> -->
            <div class="col-sm-10">
              <input type="submit"  value = "Update">
            </div>
          </div>
          </form>
        </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<!-- footer************* -->
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				@include('admin.navbar');
							  <div class="clearfix"></div>
							</div>
							<script>
							var toggle = true;

							$(".sidebar-icon").click(function() {
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }

											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="{{ asset('admin/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
   <!-- /Bootstrap Core JavaScript -->

</body>
</html>
