<script type="text/javascript">
	function veri_renstra(id){
		window.location = '<?php echo site_url("kendali_perubahan/veri")?>/' + id;
	}
</script>
<article class="module width_full">
	<header>
	  <h3>Verifikasi Kegiatan Belanja Langsung Perubahan</h3>
	</header>
	<div class="module_content"; style="overflow:auto">
		<table id="renstra" class="table-common" style="width:99%">
			<thead>
				<tr>
					<th width="10px">No</th>
					<th>SKPD</th>
					<th>Jumlah Data</th>					
					<th>Action</th>
				</tr>				
			</thead>
			<tbody>
		<?php
		if (!empty($kendali)) {
			$i=0;
			foreach ($kendali as $row) {		
				$i++;
		?>
				<tr>
					<td align="center"><?php echo $i; ?></td>
					<td><?php echo $row->nama_skpd; ?></td>
					<td align="center"><?php echo $row->jum_semua; ?></td>					
					<td align="center"><a href="javascript:void(0)" onclick="veri_renstra(<?php echo $row->id_skpd; ?>)" class="icon-edit" title="Verifikasi"/></td>
				</tr>
		<?php
			}
		}else{
		?>
				<tr>
					<td align="center" colspan="4">Tidak ada data. . .</td>
				</tr>
		<?php
		}
		?>
			</tbody>
		</table>
	</div>
</article>