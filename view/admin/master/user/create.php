<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengguna
        <small>/ Tambah Pengguna</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Pengguna</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <form method="post" action="<?php echo app_base.'save_user' ?>">
        <div class="box-body">
	        	<div class="row">
	        		<div class="col-md-6">
	        			<div class="form-group">
			        		<div class="row">
			        			<label class="col-md-4 control-label">Username</label>
				        		<div class="col-md-8">
				        			<input type="text" name="username" class="form-control" placeholder="Username" required>
				        		</div>
			        		</div>
			        	</div>
			        	<div class="form-group">
			        		<div class="row">
			        			<label class="col-md-4 control-label">Nama Lengkap</label>
				        		<div class="col-md-8">
				        			<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
				        		</div>
			        		</div>
			        	</div>
			        	<div class="form-group">
			        		<div class="row">
			        			<label class="col-md-4 control-label">Password</label>
				        		<div class="col-md-8">
				        			<input type="password" name="password" class="form-control" placeholder="Password" required>
				        		</div>
			        		</div>
			        	</div>
			        	<div class="form-group">
			        		<div class="row">
			        			<label class="col-md-4 control-label">Status</label>
				        		<div class="col-md-2">
				        			<label>
				        				<input checked type="radio" name="status" required value="1"> Aktif
				        			</label>
				        		</div>
				        		<div class="col-md-3">
				        			<label>
				        				<input type="radio" name="status" required value="0"> Tidak Aktif
				        			</label>
				        		</div>
			        		</div>
			        	</div>
	        		</div>
	        	</div>
	       
        </div>
         <!-- /.box-body -->
         <div class="box-footer">
         	<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
         	<a href="<?php echo app_base.'index_user' ?>">
         		<button type="button" class="btn btn-danger"><i class="fa fa-arrow-left"></i>  Kembali</button>
         	</a>
         </div>
         </form>	
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->