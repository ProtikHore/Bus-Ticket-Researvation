<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Tabels :: w3layouts</title>
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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/table-style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/basictable.css') }}" />
<script type="text/javascript" src="{{ asset('admin/js/jquery.basictable.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Tabels</li>
            </ol>
<div class="agile-grids">
				<!-- tables -->

				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Basic Implementation</h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>Seat Number</th>
							<th>Total Price</th>
							<!-- <th>Gender</th>
							<th>Height</th>
							<th>Province</th>
							<th>Sport</th> -->
						  </tr>
						</thead>
            @foreach ($ticket as $tickets)
						<tbody>
						  <tr>
							<td>{{$tickets->seat_number}}</td>
							<td>{{$tickets->total_price}}</td>
							<!-- <td>Female</td>
							<td>5'4</td>
							<td>British Columbia</td>
							<td>Volleyball</td> -->
						  </tr>
              @endforeach
						</tbody>
					  </table>
					</div>

				</div>
				<!-- //tables -->
			</div>
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
<!-- footer********* -->
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
