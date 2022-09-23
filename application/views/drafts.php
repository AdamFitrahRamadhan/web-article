<div class="panel">
	<div class="panel-heading">
		<div class="col-md-12">
			<div class="col-md-6">
				<h3>Drafts</h3>
			</div>
			<div class="col-md-6" >
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
		
		<table class="table">
			<thead>
				<th>No</th>
				<th>Title</th>
				<th>Content</th>
				<th>Category</th>
				<th>Aksi</th>
			</thead>
			<tbody>
				<?php $no = 0; foreach ($tampil_drafted as $dra): $no++ ?>
					<tr>
						<td><?=$no?> </td>
						<td><?=$dra->title?> </td>
						<td><?=mb_strimwidth("$dra->content", 0, 15, "...")?></td>
						<!-- <td><?=$dra->content?> </td> -->
						<td><?=$dra->category?> </td>
						<td>
							<a href="#edit" onclick="edit(<?=$dra->id?>)" class="btn btn-info" data-toggle="modal"><i class="fa fa-pencil"></i></a>
							<!-- <a href="#hapus" onclick="hapus(<?=$dra->id?>)" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash"></i></a> -->
							<a href="<?=base_url('index.php/allpost/hapuss/'.$dra->id)?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		<div class="modal fade" id="edit">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
					<h4 class="modal-title">Edit</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('index.php/allpost/ubah')?>" method="POST">
					<table class="table">
						<tr>
							<td>Title</td>
							<input type="hidden" name="id" id="id">
							<td><input type="text" name="title" id="title" class="form-control"><br>

							</td>
						</tr>
						<tr>
							<td>content</td>
							<td><input type="text" name="content" id="content" class="form-control"><br>
							</td>
						</tr>
						<tr>
							<td>Category</td>
							<td>
							<select name="category" class="form-control" id="category">
								  <option value=""></option>
								  <option value="ARTIKEL-MAKANAN">ARTIKEL-MAKANAN</option>
								  <option value="ARTIKEL-MINUMAN">ARTIKEL-MINUMAN</option>
							</select><br>
							 <input type="submit" name="edit" value="edit" class="btn btn-info">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>	
		</div>	
		</div>
		<div class="modal fade" id="hapus">
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
					<h4 class="modal-title">Apakah anda yakin mengapus?</h4>
			</div>
			<div class="modal-body">
				<form action="<?=base_url('index.php/allpost/hapus')?>" method="POST">
					<table class="table">
						<tr>
							<!-- <td>Title</td> -->
							<input type="hidden" name="id" id="id">
							<!-- <td><input type="text" name="title" id="title" class="form-control"><br> -->
						 <input type="submit" name="hapus" value="hapus" class="btn btn-danger">
								
							</td>
						</tr>
						<!-- <tr>
							<td>content</td>
							<td><input type="text" name="content" id="content" class="form-control"><br>
							</td>
						</tr>
						<tr>
							<td>Category</td>
							<td>
							<select name="category" class="form-control" id="category">
								  <option value=""></option>
								  <option value="ARTIKEL-MAKANAN">ARTIKEL-MAKANAN</option>
								  <option value="ARTIKEL-MINUMAN">ARTIKEL-MINUMAN</option>
							</select><br>
						 -->	
							<!-- </td> -->
						<!-- </tr> -->
					</table>
				</form>
			</div>
		</div>	
		</div>	
		</div>
	</div>
</div>
<script type="text/javascript">
	function edit(a) {
		$.ajax({
			type:"post",
			url:"<?=base_url()?>index.php/allpost/detail/"+a,
			dataType:"json",
			success:function(data){
				$("#id").val(data.id);
				$("#title").val(data.title);
				$("#content").val(data.content);
				$("#category").val(data.category);
				$("#created_date").val(data.created_date);
			}
		});
	}
	function hapus(a) {
		$.ajax({
			type:"post",
			url:"<?=base_url()?>index.php/allpost/detail/"+a,
			dataType:"json",
			success:function(data){
				$("#id").val(data.id);
				$("#title").val(data.title);
				$("#content").val(data.content);
				$("#category").val(data.category);
				$("#created_date").val(data.created_date);
			}
		});
	}
</script>