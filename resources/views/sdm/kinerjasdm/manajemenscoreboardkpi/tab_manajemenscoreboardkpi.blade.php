<div class="tab-pane fade in" id="list_manajemenscoreboardkpi">
	<div class="card">
		<div class="card-header bordered p-2">
			<div class="header-block">
				<h3>Data Rekruitmen</h3>
			</div>
			<div class=""></div>
		</div>
		<div class="card-block">
			<section>
			<div class="row">
				<div class="col-md-2 col-sm-6 col-xs-12">
					<label>Periode</label>
				</div> 

				<div class="col-md-2 col-sm-6 col-xs-12">
					<div class="form-group">
					<input type="text" class="form-control form-control-sm datepicker" name="">
					</div>
				</div>

				<div class="col-md-1 col-sm-6 col-xs-12">
					<span>S/D</span>
				</div> 

				<div class="col-md-2 col-sm-6 col-xs-12">
					<div class="form-group">
					<input type="text" class="form-control form-control-sm datepicker" name="">
					</div>
				</div>

				<div class="col-md-3">
					<button type="button" class="btn btn-primary">Cari</button>
				</div>
			</div>
				<hr>
				<div class="table-responsive">
					<table class="table table-hover table-striped" cellspacing="0" id="table_rekruitmen">
						<thead class="bg-primary">
							<tr>
								<th width="1%">No</th>
								<th>Tanggal Apply</th>
								<th>Nama Pelamar</th>
								<th>No. HP</th>
								<th>Email</th>
								<th>Pendidikan</th>
								<th>Status</th>
								<th>Approval</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>07 Sep 2019</td>
								<td>Brad</td>
								<td>01238312321376</td>
								<td>Brad@Pit.com</td>
								<td>S1</td>
								<td>Approve 1</td>
								<td>Test Interview</td>
								<td>
									<div class="btn-group btn-group-sm">
										<button class="btn btn-primary btn-preview-rekruitmen" type="button" title="Preview"><i class="fa fa-info"></i></button>
										<button class="btn btn-warning btn-proses-rekruitmen" type="button" title="Process"><i class="fa fa-file-powerpoint-o"></i></button>
										<button class="btn btn-danger btn-disable-rekruitmen" type="button" title="Disable"><i class="fa fa-times-circle"></i></button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

			</section>

		</div>
	</div>
</div>