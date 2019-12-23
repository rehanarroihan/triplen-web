<h2 class="section-title">Daftar Rencana Perjalananmu</h2>
<p class="section-lead">
	Kamu bisa mengatur posisi rencana mu sesuai kebutuhan
</p>
<button data-toggle="modal" data-target="#newBoardModal" class="btn btn-task pull-right mb-4">
	<i class="fa fa-plus"></i> Tambah Board Baru
</button>

<div class="row">
	<div class="col-12 col-md-6 col-lg-4" v-for="(boardItem, boardIndex) in boardList" :key="boardIndex">
		<div class="card card-task">
			<div class="card-body d-flex flex-row">
				<div style="cursor: pointer" class="float-left d-flex flex-column mr-4" @click="goToBoardDetail(boardItem.id)">
					<h4 class="text-info">{{ textTruncate(boardItem.board, 18, '...') }}</h4>
					<p>{{ getGoodTime(boardItem.created) }}</p>
				</div>
				<div class="float-right d-flex text-right">
					<div class="flex-column pr-2">
						<a href="#" class="btn btn-task" :data-collapse="'#'+boardItem.id">
							<i class="fas fa-edit"></i>
						</a>
					</div>
					<div class="flex-column">
						<a href="#" @click="deleteBoard(boardItem.id)" class="btn btn-danger">
							<i class="fas fa-trash"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
