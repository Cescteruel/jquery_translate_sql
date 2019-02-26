<script>
  localStorage.setItem('translate', JSON.stringify({
		<?php
			$apptranslate = mysqli_query( $link, "select * from est_apptranslate" );
			while ( $apptranslate_row = mysqli_fetch_array( $apptranslate )){
					echo '"'.$apptranslate_row["tagkey"].'" : "'.$apptranslate_row["lang_".$idiomamail.""].'",';
			}
		?>
	}));
</script>
