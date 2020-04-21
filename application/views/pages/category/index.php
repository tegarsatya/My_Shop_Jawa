<main role="main" class="container">
	<?php $this->load->view('layouts/_alert');?>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card mb-3">
				<div class="card-header">
					<span>Kategori</span>
					<a href="<?= base_url('tambah_category')?>" class="btn btn-sm btn-secondary">Tambah </a>
					<div class="float-right">
						<form action="#">
							<DIV class="input-group">
								<input type="text" class="form-control form-control-sm text-center" placeholder="Cari">
								<div class="input-group-append">
									<button class="btn btn-secondary btn-sm" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<a href="#" class="btn btn-secondary btn-sm">
										<i class="fas fa-eraser"></i>
									</a>
								</div>
							</DIV>
						</form>
					</div>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">title</th>
								<th scope="col">Slug</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($content as $row):?>
							<tr>
								<td>1</td>
								<td><?= $row->title ?></td>
								<td><?= $row->slug  ?></td>
								<td>
									<form action="">
										<a href="<?= base_url('edit_category')?>">
											<button class="btn btn-sm">
												<i class="fas fa-edit text-info"></i>
											</button>
										</a>
										<button class="btn btn-sm" type="submit" onclick="return confirm('are you sure?')">
											<i class="fas fa-trash text-danger"></i>
										</button>
									</form>
								</td>
							</tr>
				        <?php endforeach?>
						</tbody>
					</table>
					<nav aria-label="page navigation example">
						<ul class="pagination">
							<li class="page-item"><a href="" class="page-link">Previous</a></li>
							<li class="page-item"><a href="" class="page-link">1</a></li>
							<li class="page-item"><a href="" class="page-link">2</a></li>
							<li class="page-item"><a href="" class="page-link">3</a></li>
							<li class="page-item"><a href="" class="page-link">4</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</main>
