<div class="panel">
	<div class="panel-heading">
		<div class="col-md-12">
				<h3>Add Posts or Add Drafts</h3>
					<a href="#modalPosts" data-toggle="modal" class="btn btn-success">Publish</a>
					<a href="#modalDrafts" data-toggle="modal" class="btn btn-warning">Drafts</a>
		</div>
	</div>
	<div class="panel-body">
		
		<div class="modal fade" id="modalPosts">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Add to Publish</h4>

			</div>
			<div class="modal-body">
				<form action="<?=base_url('index.php/addpost/tambah_post')?>" method="POST">
					<table class="table">
						<tr>
							<td>Title</td>
							<td><input type="text" name="title" class="form-control" required minlength="20"><br>
							</td>
						</tr>
						<tr>
							<td>Content</td>
							<td>
								<textarea name="content" class="form-control" required minlength="200"></textarea>
								<!-- <input type="text" name="content" class="form-control" required><br> -->
							</td>
						</tr>
						<tr>
							<td>Category</td>
							<td><input type="text" name="category" class="form-control" minlength="3" required><br>
							<input type="submit" name="publish" value="publish" class="btn btn-success">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>	
		</div>	
		</div>		
	<div class="panel-body">
		<?php if ($this->session->flashdata('pesan')!=null): ?>
			<div class="alert alert-info alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-times-circle"></i>
				<?=$this->session->flashdata('pesan')?>
			</div>
		<?php endif ?>
		<div class="modal fade" id="modalDrafts">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Add to Draft</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('index.php/addpost/tambah_post_draft')?>" method="POST">
					<table class="table">
						<tr>
							<td>Title</td>
							<td><input type="text" name="title" class="form-control" required minlength="20"><br>
							</td>
						</tr>
						<tr>
							<td>Content</td>
							<td>
								<textarea name="content" class="form-control" required minlength="200"></textarea>
								<!-- <input type="text" name="content" class="form-control" required><br> -->
							</td>
						</tr>
						<tr>
							<td>Category</td>
							<td><input type="text" name="category" class="form-control" minlength="3" required><br>
							<input type="submit" name="draft" value="draft" class="btn btn-warning">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>	
		</div>	
		</div>
		
</div>