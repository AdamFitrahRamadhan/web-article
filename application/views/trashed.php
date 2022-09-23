<div class="panel">
	<div class="panel-heading">
		<div class="col-md-12">
			<div class="col-md-6">
				<h3>Trashed</h3>
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
				<?php $no = 0; foreach ($tampil_trashed as $tra): $no++ ?>
					<tr>
						<td><?=$no?> </td>
						<td><?=$tra->title?> </td>
						<td><?=mb_strimwidth("$tra->content", 0, 15, "...")?></td>
						<!-- <td><?=$tra->content?> </td> -->
						<td><?=$tra->category?> </td>
						<td>
							<a href="#edit" onclick="edit(<?=$tra->id?>)" class="btn btn-info" data-toggle="modal">Detail</a>
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
					<h4 class="modal-title">Detail</h4>
			</div>
			<div class="modal-body">
				<form action="" method="">
					<table class="table">
						<tr>
							<td>Title</td>
							<input type="hidden" name="id" id="id">
							<td><input type="text" name="title" id="title" class="form-control" readonly><br>
							</td>
						</tr>
						<tr>
							<td>content</td>
							<td><input type="text" name="content" id="content" class="form-control" readonly><br>
							</td>
						</tr>
						<tr>
							<td>category</td>
							<td><input type="text" name="category" id="category" class="form-control" readonly><br>
							</td>
						</tr>
						<tr>
							<td>created_date</td>
							<td><input type="date" name="created_date" id="created_date" class="form-control" readonly><br>
							</td>
						</tr>
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
</script>