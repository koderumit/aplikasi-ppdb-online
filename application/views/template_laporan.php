<!DOCTYPE html>
<html>
<head>
	<title>Laporan <?php echo $title; ?></title>
	<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ; ?>" rel="stylesheet">
</head>
<body onload="print">
	<div class="container">
		<?php $this->load->view($laporan);  ?>
	</div>
</body>
</html>
<script type="text/javascript">
	window.print();
</script>