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
                      Form Informasi
                  </header>
                  <div class="card-body">
                      <form method="POST" action="/Informasi/store">
                      		{{csrf_field()}}
                          <div class="form-group">
                              <label for="exampleInputEmail1">Kategori</label>
                              <select class="form-control input-sm" name="stt">
                                <option value="">--Pilihan--</option>
                                @foreach($kategori as $row)
                                  <option value="{{$row->id_kategori}}">{{$row->nm_kategori}}</option>
                                @endforeach
                              </select>
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
          </div>
      </section>
  </section>
  <!--main content end-->
@endsection