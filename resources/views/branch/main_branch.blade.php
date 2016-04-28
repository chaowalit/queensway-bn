@extends('layouts.app')

@section('content')

<div class="">
    <div class="page-title">
      <div class="title_left">
	  	<i class="fa fa-sitemap" style="font-size: 22px;"></i> <b>สาขา >> จัดการสาขา</b>

      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">

          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel" style="height:600px;">
          <div class="x_title">
            <h2>จัดการสาขา</h2>
            <ul class="nav navbar-right panel_toolbox">

            </ul>
            <div class="clearfix"></div>
          </div>

		  <div class="x_content">
			  <?php //dump($branch); ?>
			  <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">ชื่อบริษัท</th>
                          <th>รหัสสาขา</th>
                          <th>ชื่อสาขา</th>
                          <th>สถานะ</th>
                          <th style="width: 12%"></th>
                        </tr>
                      </thead>
                      <tbody>
						  @foreach($branch as $key => $val)
                        <tr>
                          <td>{{ ($key+1) }}</td>
                          <td>
                            <a>{{ $val['company_name'] }}</a>
                            <br>
                            <small>สร้างเมื่อ {{ date("d-m-Y H:i:s", strtotime($val['created_at'])) }}</small>
                          </td>
                          <td>
                            {{ $val['branch_no'] }}
                          </td>
                          <td class="project_progress">
                            {{ $val['branch_name'] }}
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">เชื่อมต่อแล้ว</button>
                          </td>
                          <td>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> จัดการข้อมูล </button>
                          </td>
                        </tr>
						@endforeach
                      </tbody>
                    </table>
		  </div>

        </div>
      </div>
    </div>
  </div>

@endsection
