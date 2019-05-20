<div class="jumbotron jumbotron-fluid">
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-md-8 content text-left">
				<div class="table-responsive">
					<table class="table" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Waralaba</th>
                                <th>Hasil WP</th>
                                <th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1 ;
                            foreach ($sorted as $data) :
                            ?>
							<tr>
								<td><?=$i?></td>
								<td><?=$data['nama']?></td>
								<td><?=$data['nilai']?></td>
								<td>
									<a href="<?=base_url();?>detail-waralaba/<?=$data['id']?>"
										class="btn btn-sm btn-success mb-2">Detail</a>
								</td>

							</tr>
							<?php $i++ ;
                             endforeach
                             ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>