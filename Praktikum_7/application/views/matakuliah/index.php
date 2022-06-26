<div class="container mt-3 text-center mb">
	<h1>Daftar Matakuliah</h1>
	<table class="table table-hover text-center mt-5">
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>Mata Kuliah</th>
						<th>SKS</th>
						<th>Kode</th>
					</tr>
				</thead>
				<tbody>
					<?php $n=1; ?>
					<?php foreach($mata_kuliah as $matkuliah) : ?>
					<tr>
						<td><?=  $n  ?></td>
						<td><?=  $matkuliah->nama  ?></td>
						<td><?=  $matkuliah->sks  ?></td>
						<td><?=  $matkuliah->kode ?></td>
					</tr>
					<?php $n++ ?>
					<?php endforeach; ?>
				</tbody>
			</table>
</div>