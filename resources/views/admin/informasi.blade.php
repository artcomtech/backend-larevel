@extends('admin.app')


@section('content')
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
          <!-- page start-->
          <div class="row">
            <div class="col-sm-12">
	          <section class="card">
		          <header class="card-header">
		              Data Informasi
			         <span class="tools pull-right">
			            <a href="Informasi/create"><button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</button></a>
			         </span>
		          </header>
		          <div class="card-body">
			          <div class="adv-table">
				          <table  class="display table table-bordered table-striped" id="dynamic-table">
					          <thead>
						          <tr>
						              <th>No</th>
						              <th>Title</th>
						              <th>Desc</th>
						              <th>Stt</th>
						              <th>Opsi</th>
						          </tr>
					          </thead>
					          <tbody>
					          	@php $no =1 @endphp
					          	@foreach($informasi as $row)
						          <tr>
						              <td>{{$no++}}</td>
						              <td>{{$row->title}}</td>
						              <td>{{$row->desc}}</td>
						              <td>
						              	@if($row->stt==1)
						              		<span class="badge badge-success">Active</span>
						              	@else
						              		<span class="badge badge-danger">Draf</span>
						              	@endif
						              </td>
						              <td>
						              	<a href="/Informasi/{{$row->id_informasi}}/edit"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></button></a>
						              	<a href="/Informasi/{{$row->id_informasi}}/delete"><button  type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button></a>
						              </td>
						          </tr>
						        @endforeach;
					          </tbody>
				          
				          </table>
			          </div>
		          </div>
	          </section>
          	</div>
          </div>
      </section>
  </section>
  <!--main content end-->
@endsection