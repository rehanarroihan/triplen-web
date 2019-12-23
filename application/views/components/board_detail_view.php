<h2 class="section-title">{{ boardDetail.board }}</h2>
<p class="section-lead">
	Kamu bisa menambah daftar rencana kunjungan di board ini
</p>

<div class="row">
	<div class="col-12 col-md-6 col-lg-4">
		<div class="card">
			<div class="card-header">
			<h4>Belum Selesai</h4>
			<div class="card-header-action">
				<a data-collapse="#card-undone" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
			</div>
			</div>
			<div class="collapse show" id="card-undone">
			<div class="card-body">
				<p class="text-center">Daftar rencana yang belum selesai akan muncul disini</p>
			</div>
			<div class="card-footer">
				<button class="btn btn-block btn-outline-primary">
					Tambah Rencana
				</button>
			</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-lg-4">
		<div class="card">
			<div class="card-header">
			<h4>Telah Selesai</h4>
			<div class="card-header-action">
				<a data-collapse="#card-done" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
			</div>
			</div>
			<div class="collapse show" id="card-done">
			<div class="card-body">
				<p class="text-center">Daftar rencana yang telah selesai akan muncul disini</p>
			</div>
			<div class="card-footer">
			</div>
			</div>
		</div>
	</div>
</div>
