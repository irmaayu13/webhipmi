<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card card-mini">
		
    	<div class="card-body no-padding table-responsive">
    		<?php
    			if ($this->session->has_userdata('status')) {
    		?>
    				<div class="card-header">
						<p class="text-success"><?php echo $this->session->flashdata('status'); ?></p>
					</div>
    		<?php
    			}
    		?>
	        <form action="<?php echo base_url('admin/prosesgaleri'); ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
	        	<table class="table card-table">
		        	<tbody>
		        		<tr>	
						<td>Keterangan</td>
						<td colspan="3">
		        				<textarea class="form-control" name="keterangan_galeri" placeholder="Keterangan Galeri" requierd></textarea>
		        			</td>
		        			
		        		</tr>
		        		
		        		<tr>
		        			<td class="text-right">
		        				Foto :
		        			</td>
		        			<td>
		        				<input type="file" name="foto" value="" placeholder="">
		        			</td>
		        		</tr>
		        		<tr>
		        			<td>
		        				<button type="submit" class="btn btn-default">Simpan</button>
		        			</td>
		        		</tr>
		        	</tbody>
		        </table>
	        </form>
		</div>
	</div>
</div>