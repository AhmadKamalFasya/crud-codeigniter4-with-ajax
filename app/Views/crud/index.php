<script type="text/javascript">
	function reload_table(){
		$.ajax({
			url: "<?= site_url('crudajax/table_mahasiswa'); ?>", 
			beforeSend: function(f){
				$('#table_mahasiswa').html('Load Table ....');
			},
			success: function(data){
				$('#table_mahasiswa').html(data);
			}
		});
	}
</script>

<h3 class="my-4">Table Mahasiswa</h3>
<button class="btn btn-flat bg-info" onclick="reload_table()" type="button">Reload Table</button>
<button class="btn btn-flat bg-primary" onclick="tambah()" type="button">Tambah Mahasiswa</button>

<div id="table_mahasiswa">
	
</div>