<script type="text/javascript">
	$(document).ready(function(){
			$('#nominal_th1').autoNumeric(numOptions);
			$('#nominal_th2').autoNumeric(numOptions);
			$('#nominal_th3').autoNumeric(numOptions);
			$('#nominal_th4').autoNumeric(numOptions);
			$('#nominal_th5').autoNumeric(numOptions);

			$("#simpan").click(function(){
			    var valid = $("form#belanja_tl").valid();
			    if (valid) {
	                $("#nominal_th1").val($("#nominal_th1").autoNumeric('get'));
									$("#nominal_th2").val($("#nominal_th2").autoNumeric('get'));
									$("#nominal_th3").val($("#nominal_th3").autoNumeric('get'));
									$("#nominal_th4").val($("#nominal_th4").autoNumeric('get'));
									$("#nominal_th5").val($("#nominal_th5").autoNumeric('get'));

			    	$("form#belanja_tl").submit();
			    };
			});
	});

</script>
<article class="module width_full">
	<header>
 		<h3>
		<?php
			if (isset($isEdit) && $isEdit){
			    echo "Edit Data ";
			} else{
			    echo "Input Data ";
			}
		?>
		</h3>
 	</header>
 	<div class="module-content">
		<form method="post" name='belanja_tl' id='belanja_tl' action="<?php echo site_url('belanja_tak_langsung/save_data')?>" enctype="multipart/form-data" >
		<input name='call_from' type='hidden' id="call_from" value='<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '' ?>'/>
		<input type="hidden" name="id_belanja_tl" value="<?php if(!empty($id_belanja_tl)){echo $id_belanja_tl;} ?>" />
	   	  	<table id="belanja_tl_input" class="fcari" width="100%">
            <tr>
              <td class="col-sm-3">Jenis Belanja Tidak Langsung</td>
              <td>
                <input type="text" name="jenis_belanja_tl" id="jenis_belanja_tl" placeholder="Jenis Belanja Tidak Langsung"
                value="<?php echo isset($jenis_belanja_tl) ? $jenis_belanja_tl : ''; ?>" />
              </td>
            </tr>
        <tr>
          <td colspan="2">
            <?php
              $ta=$this->session->userdata('t_anggaran_aktif');
              $tahun_n1=$ta;
              $tahun_n2= $ta+1;
              $tahun_n3= $ta+2;
              $tahun_n4= $ta+3;
              $tahun_n5= $ta+4;
            ?>
              <div>
                <table class="table-common" width="100%">
                  <th colspan="2">realisasi</th>
                  <th colspan="3">proyeksi</th>
                  <tr>
                    <th align="center" width="20%">Tahun <?php echo $tahun_n1;?></th>
                    <th align="center" width="20%">Tahun <?php echo $tahun_n2;?></th>
                    <th align="center" width="20%">Tahun <?php echo $tahun_n3;?></th>
                    <th align="center" width="20%">Tahun <?php echo $tahun_n4;?></th>
                    <th align="center" width="20%">Tahun <?php echo $tahun_n5;?></th>
                  </tr>
                  <td>
										<input name='nominal_th1' type="text" id="nominal_th1" class='currency' value="<?php echo isset($nominal_th1) ? $nominal_th1 : '0'?>" style="width:100%">
									</td>
                  <td>
										<input name='nominal_th2' type="text" id="nominal_th2" class='currency' value="<?php echo isset($nominal_th2) ? $nominal_th2 : '0'?>" style="width:100%">
									</td>
                  <td>
										<input name='nominal_th3' type="text" id="nominal_th3" class='currency' value="<?php echo isset($nominal_th3) ? $nominal_th3 : '0'?>" style="width:100%">
									</td>
                  <td>
										<input name='nominal_th4' type="text" id="nominal_th4" class='currency' value="<?php echo isset($nominal_th4) ? $nominal_th4 : '0'?>" style="width:100%">
									</td>
                  <td>
										<input name='nominal_th5' type="text" id="nominal_th5" class='currency' value="<?php echo isset($nominal_th5) ? $nominal_th5 : '0'?>" style="width:100%">
									</td>
                </table>
              </div>
          </td>
        </tr>
	   	  	</table>
   		</form>
    </div>
   	<footer>
			<div class="submit_link">
				<input type="submit" name="simpan"  id="simpan" value='Simpan'/>
				<input type="button" value="Keluar" onclick="window.location.href='<?php echo site_url('keg_belanja/belanja_tak_langsung/belanja_tak_langsung'); ?>'" />							
				</div>
  	</footer>
</article>
