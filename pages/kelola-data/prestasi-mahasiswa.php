<?php include '../static/top.php'; ?>
  <section class="content">
  	<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Gagal! Menambahkan Data
    </div>
    <!--<div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Gagal! Menghapus Data
    </div>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Sukses! Menambahkan Data
    </div>
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Gagal! Mengubah Data 
    </div>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Sukses! Menghapus Data
    </div>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Sukses! Mengedit Data
    </div>-->
    <div class="box">
        <div class="box-header">
            <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>


        </div><!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Prestasi</th>
                        <th>Tingkat</th>
                        <th>Tahun</th>
                        <th>Keterangan</th>
                        <th>File</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                        <td>1</td>
                        <td class="text-left">ESQ Berbagi</td>
                        <td>ACT</td>
                        <td>Wilayah Jakarta Selatan</td>
                        <td>2019</td>
                        <td>jumat, 1 Januari 2019</td>
                        <td>
                        	<button class="btn btn-block btn-primary btn-xs"><i class="fa fa-info-circle"></i></button>
                        </td>
                        <td width="1%">
                        	<button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>
                        </td>
                        <td width="1%">
                        	<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o"></i></button>
                        </td>
                        <td width="1%">
                        	<button class="btn btn-info btn-xs"><i class="fa fa-print"></i></button>
                        </td>
                  </tr>  
                </tbody>
                <tfoot>
                  <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Prestasi</th>
                        <th>Tingkat</th>
                        <th>Tahun</th>
                        <th>Keterangan</th>
                        <th>File</th>
                        <th colspan="3">Action</th>
                  </tr>
                </tfoot>
            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    <div div class="modal fade" id="save">
    	<div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header bg-green">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Modal Tambah</h4>
	            </div>
                <div class="modal-body">
                   	<form action="GET">
                        <div class="col-xs-6" >
                            <label>Nama Kegiatan</label></br>
                            <input type="text" placeholder="Nama Kegiatan" name="namakegiatan" class="form-control">
                            <br>
                        </div>
                        <div class="col-xs-6">
                            <label>Prestasi</label></br>
                            <input type="text" placeholder="Prestasi" name="prestasi" class="form-control">
                            <br>
                        </div>
                        <div class="col-xs-6">
                            <label>Tingkat</label></br>
                            <select name="tingkat" class="form-control">
                                <option value="1">Tingkat</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-6">
                            <label>Tahun</label></br>
                            <select name="tahun" class="form-control">
                                <option value="1">Tahun</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-12">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" rows="5" placeholder=""></textarea>
                            <br>
                        </div>         
                        <div class="col-xs-12">
                            <label for="File">File</label>
                            <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Choose File">
                                <span class="input-group-btn">
                                <button class="btn btn-flat btn-default" type="file">Browse</button>
                                </span>
                            </div>
                            <br>
                        </div>    
                    </form>
               	</div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-success">Save</button>
	            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.example-modal -->
     <div div class="modal fade" id="edit">
    	<div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header bg-yellow">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Modal Edit</h4>
	            </div>
                <div class="modal-body">
                   	<form action="GET">
                        <div class="col-xs-6" >
                            <label>Nama Kegiatan</label></br>
                            <input type="text" placeholder="Nama Kegiatan" name="namakegiatan" class="form-control">
                            <br>
                        </div>
                        <div class="col-xs-6">
                            <label>Prestasi</label></br>
                            <input type="text" placeholder="Prestasi" name="prestasi" class="form-control">
                            <br>
                        </div>
                        <div class="col-xs-6">
                            <label>Tingkat</label></br>
                            <select name="tingkat" class="form-control">
                                <option value="1">Tingkat</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-6">
                            <label>Tahun</label></br>
                            <select name="tahun" class="form-control">
                                <option value="1">Tahun</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-12">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" rows="5" placeholder=""></textarea>
                            <br>
                        </div>         
                        <div class="col-xs-12">
                            <label for="File">File</label>
                            <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Choose File">
                                <span class="input-group-btn">
                                <button class="btn btn-flat btn-default" type="file">Browse</button>
                                </span>
                            </div>
                            <br>
                        </div>    
                    </form>
               	</div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-warning">Save changes</button>
	            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.example-modal -->
     <div div class="modal fade" id="delete">
    	<div class="modal-dialog">
            <div class="modal-content">
	            <div class="modal-header bg-red">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title">Modal Delete</h4>
	            </div>
                <div class="modal-body">
                   	<p>Apakah anda yakin menghapus data ini?</p>
               	</div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="button" class="btn btn-danger">Delete</button>
	            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.example-modal -->
</section>
<?php include '../static/bot.php'; ?>
