<table class="table table-success table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    <?php foreach ($mahasiswa as $key) { ?>
    <tr>
      <th><?= $no++; ?></th>
      <th scope="row"><?= $key['nim'] ?></th>
      <td><?= $key['nama'] ?></td>
      <td><?= $key['jenis_kelamin'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>