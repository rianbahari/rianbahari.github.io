<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Rumah Digital Keluarga Lina dan Rian">
		<meta name="author" content="Rian Bahari">
		<title>LinaRian &middot; Keluarga Lina &amp; Rian</title>
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo base_url();?>bs/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			html{min-height:100%;}::selection { background-color: #E13300; color: white; }::-moz-selection { background-color: #E13300; color: white; }body{background-image: url('<?php echo base_url();?>bs/LR.png');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-position: right top;-webkit-background-image: url('<?php echo base_url();?>bs/LR.png');-webkit-background-repeat: no-repeat;-webkit-background-attachment: fixed;-webkit-background-size: cover;-webkit-background-position: right top;-moz-background-image: url('<?php echo base_url();?>bs/LR.png');-moz-background-repeat: no-repeat;-moz-background-attachment: fixed;-moz-background-size: cover;-moz-background-position: right top;-o-background-image: url('<?php echo base_url();?>bs/LR.png');-o-background-repeat: no-repeat;-o-background-attachment: fixed;-o-background-size: cover;-o-background-position: right top;}#about{bottom:0%;}#about:hover{cursor:pointer;}#LinaRianContent{position:absolute;bottom: 5%;}.modal-dialog {width: 100%;height: 100%;margin: 0;padding: 0;}.modal-content {height: auto;min-height: 100%;border-radius: 0;}.fade-scale {transform: scale(0);opacity: 0;-webkit-transition: all .25s linear;-o-transition: all .25s linear;transition: all .25s linear;}.fade-scale.in {opacity: 1;transform: scale(1);}.fade-scale.out {opacity: 1;transform: scale(1);}

		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div id="LinaRianRow" class="row">
				<div id="LinaRianContent" class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
					<div class="btn-group btn-group-justified" role="group" aria-label="CV Lina & Rian">
						<div class="btn-group" role="group">
							<button class="btn btn-sm btn-default" id="cvLina" type="button" data-toggle="modal" data-target="#cvLinaModal"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> Lina</button>
						</div>
						<div class="btn-group" role="group">
							<button class="btn btn-sm btn-default" id="cvRian" type="button" data-toggle="modal" data-target="#cvRianModal"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> Rian</button>
						</div>
					</div>
				</div>
				<!-- Modal -->
				<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h2 class="modal-title text-center" id="myModalLabel">LinaRian.com</h2>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
										<h4 class="text-left"><strong>Siapa kami?</strong></h4>
										<div id="SiapaKami" class="">
										<p>Lina dan Rian adalah alumni salah satu institut teknik terbaik di Indonesia. Lina lulus dari Jurusan Teknik Sipil, Rian lulus dari Jurusan Teknik Elektro. Lina juga seorang master double degree untuk bidang Teknik Struktur.</p> 
										<p>Sejak kuliah sarjana, Lina aktif mengajar. Baik mengajar rekan sesama mahasiswa (menjadi asisten dosen) maupun mengajar kursus privat untuk murid sekolah. Selepas kuliah, Lina juga pernah menjadi guru di sebuah sekolah swasta. Setelah lulus program pasca sarjana, Lina sempat bekerja hampir 3 (tiga) tahun di perusahaan konsultan bangunan yang bermarkas di Taiwan. Di perusahaan tersebut Lina fokus menangani analisa desain struktur sekunder dari bangunan. Saat ini Lina fokus menjadi ibu bagi Tiffany dan istri bagi Rian, salah satu pekerjaan paling mulia bagi seorang perempuan.</p>
										<p>Rian yang hobi bermain game sempat bercita-cita untuk menjadi pengembang aplikasi permainan (game) elektronik yang bermuatan edukasi untuk masyarakat. Cita-cita yang tidak pernah diseriusi hanya berakhir menjadi angan-angan. Beberapa kali mengerjakan proyek skala kecil ke bawah berkaitan dengan pengembangan website. Pernah juga menjadi Asisten Tim Ahli untuk sebuah program kerja Kementerian. Asistensi yang diberikan terkait kehumasan, terutama manajemen website dan media sosial resmi dari program kerja tersebut. Saat ini Rian menjadi Aparatur Sipil Negara (ASN) atau yang dahulu lebih dikenal dengan Pegawai Negeri Sipil (PNS) di salah satu Kementerian paling kaya di Indonesia.</p>
										</div>																				
										<p class="text-right">Salam hormat kami,</p>
										<h4 class="pull-right text-right" style="margin-top:0"><strong>Lina &middot; Rian</strong></h4>

									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
										<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /modal -->
				<!-- Modal -->
				<div class="modal fade-scale" id="cvLinaModal" tabindex="-1" role="dialog" aria-labelledby="LinaModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title text-center" id="LinaModalLabel"><strong>Erlina Yanuarini</strong></h3>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
												<div class="thumbnail">
													<img src="<?php echo base_url();?>files/erlina-yanuarini_sm.png" alt="...">
												</div>
											</div>
											<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">
												<p>Seorang ibu rumah tangga, ibu dari Tiffany.</p>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<p> </p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
										<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /modal -->
				<!-- Modal -->
				<div class="modal fade-scale" id="cvRianModal" tabindex="-1" role="dialog" aria-labelledby="RianModalLabel">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h3 class="modal-title text-center" id="RianModalLabel"><strong>Febrian Bahari Adi</strong></h3>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
												<div class="thumbnail">
													<img src="<?php echo base_url();?>files/febrian-bahari-adi_sm.png" alt="...">
												</div>
											</div>
											<div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">
												<p>Seorang ASN (Aparatur Sipil Negara), atau yang dulu dikenal sebagai PNS (Pegawai Negeri Sipil), di Direktorat Jenderal Bea dan Cukai, Kementerian Keuangan Republik Indonesia</p>
												<p>Sehari-hari bekerja memberikan bimbingan kepatuhan kepada Perusahaan Importir maupun PPJK (Perusahaan Pengurusan Jasa Kepabeanan) terhadap aturan-aturan yang berlaku di bidang kepabeanan.</p>
												<p>Dalam mengerjakan tugas di kantor, beberapa kali <strong>mendesain</strong> dan <strong>membuat aplikasi-aplikasi sederhana berbasis web</strong> yang ditujukan untuk <u>mempermudah</u>, <u>merapikan</u> dan <u>mempercepat</u> penyelesaian pekerjaan.</p>
												<!--p>Government Officer at Directorate General of Customs and Excise, Ministry of Finance, Indonesia.</p>
												<p>Guiding Importer and Customs Brokers to comply with national regulation about Customs.</p>
												<p>Code some application to make daily task be done better, faster and tidier.</p-->
											</div>
											<!--div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">

											</div-->
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<p>Kemampuan <strong>mengolah data</strong> dan <strong>menyajikan informasi</strong> menjadi kebutuhan bagi petugas Bimbingan Kepatuhan yang hampir keseluruhan pekerjaannya berinteraksi dengan orang lain, berkomunikasi secara efektif.</p>
												<p>Kemampuan <strong>manajemen konflik</strong> dan <strong>manajemen stress</strong> adalah nilai lebih yang dapat memberikan kepuasan pada pengguna jasa dan kebahagiaan pada diri sendiri</p>
												<p>
											</div>
										</div>
										<p class="text-right">Salam hormat kami,</p>
										<h4 class="pull-right text-right" style="margin-top:0"><strong>Lina &middot; Rian</strong></h4>

									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="row">
									<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
										<button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /modal -->
			</div>

		</div><!-- /.container-fluid -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url();?>bs/js/bootstrap.min.js"></script>
		<script>
		$(document).ready(function () {
		}
		</script>
	</body>
</html>