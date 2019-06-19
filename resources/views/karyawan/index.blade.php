@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Data Karyawan</h3>
							<div class="right">
								<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
							</div>
							</div>
							<div class="panel-body">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>NAMA DEPAN</th>
											<th>NAMA BELAKANG</th>
											<th>JENIS KELAMIN</th>
											<th>AGAMA</th>
											<th>ALAMAT</th>
											<th>AKSI</th>
										</tr>
									</thead>
									<tbody>
									@foreach($data_karyawan as $karyawan)
										<tr>
											<td>{{$karyawan->nama_depan}}</td>
											<td>{{$karyawan->nama_belakang}}</td>
											<td>{{$karyawan->jenis_kelamin}}</td>
											<td>{{$karyawan->agama}}</td>
											<td>{{$karyawan->alamat}}</td>
											<td><a href="/karyawan/{{$karyawan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
												<a href="/karyawan/{{$karyawan->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus ?')">Delete</a>
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
		</div>
	</div>	
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <form action="/karyawan/create" method="POST">
			        	{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Depan</label>
						    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputPassword1">Nama Belakang</label>
						    <input name="nama_belakang" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang">
						  </div>

						  <div class="form-group">
						   <label for="exampleFormControlSelect2">Pilih Jenis Kelamin</label>
						    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
						      <option value="L">Laki-Laki</option>
						      <option value="P">Perempuan</option>
						    </select>
						  </div>

						  <div class="form-group">
						    <label for="exampleInputPassword1">Agama</label>
						    <input name="agama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Agama">
						  </div>

						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Alamat</label>
    							<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>
					
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>
@stop