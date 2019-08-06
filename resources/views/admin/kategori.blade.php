@extends('admin.app')


@section('content')
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
          <!-- page start-->
          <div class="row">
            <div class="col-sm-8">
	          <section class="card">

		          <header class="card-header">
		              Data Kategori
			         
		          </header>
		          <div class="card-body">
		          	  @if(session('success'))
			          	  <div class="alert alert-success" role="alert">
		                      {{ session('success')}}
		                  </div>
	                  @endif
			          <div class="adv-table">
				          <table  class="display table table-bordered table-striped" id="dynamic-table">
					          <thead>
						          <tr>
						              <th>No</th>
						              <th>Kategori</th>
						              <th>Status</th>
						              <th>Opsi</th>
						          </tr>
					          </thead>
					          <tbody>
					          	@php $no = 1; @endphp
					          	@foreach($kategori as $row)
						          <tr>
						              <td>{{$no++}}</td>
						              <td>{{$row->nm_kategori}}</td>
						              <td>
						              	@if($row->stt==1)
						              		<span class="badge badge-success">Active</span>
						              	@else
						              		<span class="badge badge-danger">Draf</span>
						              	@endif
						              </td>
						              <td>
						              	<a href="/Kategori/{{$row->id_kategori}}/edit"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></button></a>
						              	<a href="/Kategori/{{$row->id_kategori}}/delete"><button  type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></button></a>
						              </td>
						          </tr>
						        @endforeach	
					          </tbody>
				          
				          </table>
			          </div>
		          </div>
	          </section>
          	</div>
          	@if(request()->segment(3)=="edit")
          	<div class="col-sm-4">
      		 	<section class="card">
                  <header class="card-header">
                      Form Kategori
                  </header>
                  <div class="card-body">
                      <form method="POST" action="/Kategori/{{$data->id_kategori}}/update">
                      		{{csrf_field()}}
                          <div class="form-group">
                              <label for="exampleInputEmail1">Kategori</label>
                              <input type="text" class="form-control input-sm" name="nm_kategori" placeholder="Kategori" value="{{$data->nm_kategori}}">
                          </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Status</label>
                              <select class="form-control input-sm" name="stt">
                              	<option {{$data->stt==1?'selected':NULL}} value="1">Active</option>
                              	<option {{$data->stt==0?'selected':NULL}} value="0">Draft</option>
                              </select>
                          </div>
                          <button type="submit" class="btn btn-sm btn-primary">Update</button>
                      </form>

                  </div>
              	</section>
          	</div>
          	@else
          	<div class="col-sm-4">
      		 	<section class="card">
                  <header class="card-header">
                      Form Kategori
                  </header>
                  <div class="card-body">
                      <form method="POST" action="/Kategori/create">
                      		{{csrf_field()}}
                          <div class="form-group">
                              <label for="exampleInputEmail1">Kategori</label>
                              <input type="text" class="form-control input-sm" name="nm_kategori" placeholder="Kategori" >
                          </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Status</label>
                              <select class="form-control input-sm" name="stt">
                              	<option value="1" selected>Active</option>
                              	<option value="0">Draft</option>
                              </select>
                          </div>
                          <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                      </form>

                  </div>
              	</section>
          	</div>
          	@endif
          	
          </div>
      </section>
  </section>
  <!--main content end-->
@endsection