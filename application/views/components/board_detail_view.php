<h2 class="section-title">{{ boardName }}</h2>
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
				<div class="collapse show"></div>
			</div>
			</div>
			<div class="collapse show" id="card-undone">
				<div class="card-body">
					<draggable :list="boardPlanListUndone" group="task" @change="dragLog" draggable=".undone" class="card-task">
						<div v-for="(undoneItem, undoneIndex) in boardPlanListUndone" :key="undoneIndex" class="card card-warning undone" style="background: #f4f6f9">
							<div class="card-body">
								<h6>{{ undoneItem.task }}</h6>
								<p><i class="fa fa-map-marker"></i>&nbsp; {{ undoneItem.location }}</p>
							</div>
						</div>
					</draggable>
					<p v-if="boardPlanListUndone.length === 0" class="text-center">Daftar rencana yang belum selesai akan muncul disini</p>
					<button data-toggle="modal" data-target="#newPlanModal" class="btn btn-block btn-outline-primary">
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
					<draggable :list="boardPlanListDone" group="task" @change="dragLog" draggable=".done" class="card-task">
						<div v-for="(doneItem, doneIndex) in boardPlanListDone" :key="doneIndex" class="card card-success done" style="background: #f4f6f9">
							<div class="card-body">
								<h6>{{ doneItem.task }}</h6>
								<p><i class="fa fa-map-marker"></i>&nbsp; {{ doneItem.location }}</p>
							</div>
						</div>
					</draggable>
					<p v-if="boardPlanListDone.length === 0" class="text-center">Daftar rencana yang telah selesai akan muncul disini</p>
				</div>
			</div>
		</div>
	</div>
</div>
