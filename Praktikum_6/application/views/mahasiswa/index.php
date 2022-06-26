<div class="container mt-3 text-center">
    <h1>Daftar Mahasiswa</h1>
	<table class="table table-hover text-center mt-5">
				<thead class="thead-dark">
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Gender</th>
						<th>IPK</th>
						<th>Predikat</th>
					</tr>
				</thead>
				<tbody>
					<?php $n=1; ?>
					<?php foreach($mahasiswa as $mhs) : ?>
					<tr>
						<td><?=  $n ?></td>
						<td><?=  $mhs->nim ?></td>
						<td><?=  $mhs->nama ?></td>
						<td><?=  $mhs->gender ?></td>
						<td><?=  $mhs->ipk ?></td?>
						<td><?=  $mhs->predikat() ?></td>
					</tr>
					<?php $n++ ?>
					<?php endforeach; ?>
				</tbody>
			</table>	
</div>