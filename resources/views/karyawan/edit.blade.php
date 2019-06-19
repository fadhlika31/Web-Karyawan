@extends('layouts.master')
@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<form action="/karyawan/{{$karyawan->id}}/update" method="POST">
				        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Depan</label>
							    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$karyawan->nama_depan}}">
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">Nama Belakang</label>
							    <input name="nama_belakang" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang" value="{{$karyawan->nama_belakang}}">
							  </div>

							  <div class="form-group">
							   <label for="exampleFormControlSelect2">Pilih Jenis Kelamin</label>
							    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
							      <option value="L" @if($karyawan->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
							      <option value="P" @if($karyawan->jenis_kelamin == 'P') selected @endif>Perempuan</option>
							    </select>
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">Agama</label>
							    <input name="agama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Agama" value="{{$karyawan->agama}}">
							  </div>

							  <div class="form-group">
							    <label for="exampleFormControlTextarea1">Alamat</label>
	    							<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$karyawan->alamat}}</textarea>
							  </div>
						
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-warning">Update</button>
				        </form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('content1')

		<h1>Edit Data Karyawan</h1>
			@if(session('sukses'))
				<div class="alert alert-success" role="alert">
				  {{session('sukses')}}
				</div>
			@endif
			<div class="row">
				<div class="col-lg-12">
				 <form action="/karyawan/{{$karyawan->id}}/update" method="POST">
				        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Depan</label>
							    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$karyawan->nama_depan}}">
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">Nama Belakang</label>
							    <input name="nama_belakang" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang" value="{{$karyawan->nama_belakang}}">
							  </div>

							  <div class="form-group">
							   <label for="exampleFormControlSelect2">Pilih Jenis Kelamin</label>
							    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
							      <option value="L" @if($karyawan->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
							      <option value="P" @if($karyawan->jenis_kelamin == 'P') selected @endif>Perempuan</option>
							    </select>
							  </div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">Agama</label>
							    <input name="agama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Agama" value="{{$karyawan->agama}}">
							  </div>

							  <div class="form-group">
							    <label for="exampleFormControlTextarea1">Alamat</label>
	    							<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$karyawan->alamat}}</textarea>
							  </div>
						
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn btn-warning">Update</button>
				        </form>
			</div>
			</div>
@endsection