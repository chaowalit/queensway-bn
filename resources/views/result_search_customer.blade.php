<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ระบบค้นหาลูกค้า | แต่ละสาขา</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md" style="background: #fff;">
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="col-md-12">
          <div class="col-middle" style="margin-top: 0%;">
			  <div class="text-center text-center">
				  <h1 class="">Result Search</h1>
				  <h2>ระบบค้นหาลูกค้า</h2>
	              <p><a href="{{ url('search_customer') }}"><b>ย้อนกลับไปค้นหาใหม่</b></a> <b><-- --></b> <a href="{{ url('login') }}"><b>หรือกลับหน้า login</b></a>
	              </p>
			  </div>
		  </div>
			  <div class="x_content">
				  <div class="col-md-2 col-sm-2 col-xs-2">

				  </div>
				  <div class="col-md-8 col-sm-8 col-xs-8">
				  <!-- start accordion -->
				  <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
					<div class="panel">
					  <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
						<h4 class="panel-title">สาขาที่ #1 สาขาพระรามเก้า</h4>
					  </a>
					  <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h5 class="panel-title text-center"><u>รายละเอียดข้อมูลสาขา</u></h5>
									<table class="table table-striped">
		  							<thead>
		  							  <tr>
		  								<th>#</th>
		  								<th>First Name</th>
		  								<th>Last Name</th>
		  								<th>Username</th>
		  							  </tr>
		  							</thead>
		  							<tbody>
		  							  <tr>
		  								<th scope="row">1</th>
		  								<td>Mark</td>
		  								<td>Otto</td>
		  								<td>@mdo</td>
		  							  </tr>
		  							  <tr>
		  								<th scope="row">2</th>
		  								<td>Jacob</td>
		  								<td>Thornton</td>
		  								<td>@fat</td>
		  							  </tr>
		  							  <tr>
		  								<th scope="row">3</th>
		  								<td>Larry</td>
		  								<td>the Bird</td>
		  								<td>@twitter</td>
		  							  </tr>
		  							</tbody>
		  						  </table>
			  				  	</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h5 class="panel-title text-center"><u>รายละเอียดข้อมูลลูกค้า</u></h5>
									<table class="table table-striped">
		  							<thead>
		  							  <tr>
		  								<th>#</th>
		  								<th>First Name</th>
		  								<th>Last Name</th>
		  								<th>Username</th>
		  							  </tr>
		  							</thead>
		  							<tbody>
		  							  <tr>
		  								<th scope="row">1</th>
		  								<td>Mark</td>
		  								<td>Otto</td>
		  								<td>@mdo</td>
		  							  </tr>
		  							  <tr>
		  								<th scope="row">2</th>
		  								<td>Jacob</td>
		  								<td>Thornton</td>
		  								<td>@fat</td>
		  							  </tr>
		  							  <tr>
		  								<th scope="row">3</th>
		  								<td>Larry</td>
		  								<td>the Bird</td>
		  								<td>@twitter</td>
		  							  </tr>
		  							</tbody>
		  						  </table>
			  				  	</div>
							</div>
							<div class="row">
								<h5 class="panel-title text-center"><u>รายละเอียดคอร์ส</u></h5>
								<table class="table table-striped">
								<thead>
								  <tr>
									<th>#</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Username</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<th scope="row">1</th>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								  </tr>
								  <tr>
									<th scope="row">2</th>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								  </tr>
								  <tr>
									<th scope="row">3</th>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								  </tr>
								</tbody>
							  </table>
							</div>

						</div>
					  </div>
					</div>
					<div class="panel">
					  <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
						<h4 class="panel-title">สาขาที่ #2 สาขาพระรามเก้า</h4>
					  </a>
					  <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false">
						<div class="panel-body">
						  <p><strong>Collapsible Item 2 data</strong>
						  </p>
						  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
						</div>
					  </div>
					</div>
					<div class="panel">
					  <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
						<h4 class="panel-title">สาขาที่ #3 สาขาพระรามเก้า</h4>
					  </a>
					  <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false">
						<div class="panel-body">
						  <p><strong>Collapsible Item 3 data</strong>
						  </p>
						  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
						</div>
					  </div>
					</div>
				  </div>
				  <!-- end of accordion -->
			  </div>

			  <div class="col-md-2 col-sm-2 col-xs-2">

			  </div>
			</div>


        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

	<style>
		.accordion .panel-heading {
			background: #ccc;

		}
	</style>
  </body>
</html>
