@extends('layouts.main')

@section('container')
	<br><br><br><br>
<div class="container">
	<div class="section-title text-left">
        <h2>Edukasi Tentang Corona</h2>
        <p> Hal - hal yang harus kita ketahui tentang Virus Corona </p>
    </div>


	<div class="accordion" id="accordionExample">

		<div class="row">
			<div class="col-lg">
				 <div class="card bg-dark">
				    <div class="card-header" id="headingOne">
				      <h1 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				          <h4>Gejala virus Corona</h4>
				        </button>
				      </h1>
				    </div>

				    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				      	<img src="https://static.republika.co.id/uploads/images/inpicture_slide/gejala-dan-cara-cegah-virus-corona_200404105111-718.png" class="img-fluid" alt="">
				      	<br>
				      	<br> <br>
				        <h4>	- Sakit kepala </h4>
						<h4>	- Batuk </h4>
						<h4>	- Sakit tenggorokan </h4>
						<h4>	- Demam </h4>
						<h4>	- Merasa tidak enak badan </h4>
						<h4>	- Sesak Nafas </h4>

				      </div>
				    </div>
				  </div>
			</div>
			<div class="col-lg">
			  <div class="card bg-dark">
			    <div class="card-header" id="headingTwo">
			      <h1 class="mb-0">
			        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          <h4>Diagnosis virus Corona</h4>
			        </button>
			      </h1>
			    </div>
			    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			      <div class="card-body">
			       <h4>Untuk mendiagnosis infeksi virus corona, dokter akan mengawali dengan anamnesis atau wawancara medis. Di sini dokter akan menanyakan seputar gejala atau keluhan yang dialami pasien. Selain itu, dokter juga akan melakukan pemeriksaan fisik, dan pemeriksaan darah untuk membantu menegakkan diagnosis. </h4>
						<h4> Dokter mungkin juga akan melakukan tes dahak, mengambil sampel dari tenggorokan, atau spesimen pernapasan lainnya. Untuk kasus yang diduga infeksi novel coronavirus, dokter akan melakukan swab tenggorokan, DPL, fungsi hepar, fungsi ginjal, dan PCT/CRP.</h4>
			      </div>
			    </div>
			  </div>
			</div>
		</div>   
		{{-- end-row --}}
	 
	
	  <div class="card bg-dark">
	    <div class="card-header text-center" id="headingThree">
	      <h1 class="mb-0">
	        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
	          <h4>Pencegahan Virus Corona</h4>
	        </button>
	      </h1>
	    </div>
	    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
	      <div class="card-body">
	      	<div class="row">
	      		<div class="col-lg-4">
	      			<img src="https://asset.kompas.com/data/photo/2020/02/11/5e4236bc39faf.jpg" class="img-fluid" alt="">
	      		</div>
	      		<div class="col-lg">
	      			<h4>	-Sering-seringlah mencuci tangan dengan sabun dan air selama 20 detik hingga bersih</h4>
					<h4> -Hindari menyentuh wajah, hidung, atau mulut saat tangan dalam keadaan kotor atau belum dicuci</h4>
					<h4> -Hindari kontak langsung atau berdekatan dengan orang yang sakit </h4>
					<h4> -Hindari menyentuh hewan atau unggas liar </h4>
					<h4> -Membersihkan dan mensterilkan permukaan benda yang sering digunakan </h4>
					<h4>	-Tutup hidung dan mulut ketika bersin atau batuk dengan tisu. Kemudian, buanglah tisu dan cuci tangan hingga bersih </h4>
					<h4> -Jangan keluar rumah dalam keadaan sakit </h4>
					<h4> -Kenakan masker dan segera berobat ke fasilitas kesehatan ketika mengalami gejala penyakit saluran napas </h4>
					<h4> Selain itu, kamu juga bisa perkuat sistem kekebalan tubuh dengan konsumsi vitamin dan suplemen sebagai bentuk pencegahan dari virus ini. </h4>
			    </div>
	      	</div>
	      	
	        
	      </div>
	    </div>
	  </div>
		{{-- end 3  --}}
			<div class="row">
			<div class="col-lg">
				 <div class="card bg-dark">
				    <div class="card-header" id="headingOne1">
				      <h1 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
				          <h4>Penyebab Infeksi Coronavirus  </h4>
				        </button>
				      </h1>
				    </div>

				    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordionExample">
				      <div class="card-body">
				        <h4>Infeksi coronavirus disebabkan oleh virus corona itu sendiri. Kebanyakan virus corona menyebar seperti virus lain pada umumnya, seperti: 

Percikan air liur pengidap (bantuk dan bersin).
Menyentuh tangan atau wajah orang yang terinfeksi.
Menyentuh mata, hidung, atau mulut setelah memegang barang yang terkena percikan air liur pengidap virus corona. 
Tinja atau feses (jarang terjadi)
Khusus untuk COVID-19, masa inkubasi belum diketahui secara pasti. Namun, rata-rata gejala yang timbul setelah 2-14 hari setelah virus pertama masuk ke dalam tubuh. Di samping itu, metode transmisi COVID-19 juga belum diketahui dengan pasti. Awalnya, virus corona jenis COVID-19 diduga bersumber dari hewan. Virus corona COVID-19 merupakan virus yang beredar pada beberapa hewan, termasuk unta, kucing, dan kelelawar. 

Sebenarnya virus ini jarang sekali berevolusi dan menginfeksi manusia dan menyebar ke individu lainnya. Namun, kasus di Tiongkok kini menjadi bukti nyata kalau virus ini bisa menyebar dari hewan ke manusia. Bahkan, kini penularannya bisa dari manusia ke manusia.</h4>
				      </div>
				    </div>
				  </div>
			</div>
			<div class="col-lg">
			  <div class="card bg-dark">
			    <div class="card-header" id="headingTwo2">
			      <h1 class="mb-0">
			        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
						<h4>Faktor Risiko Infeksi Coronavirus</h4>
			        </button>
			      </h1>
			    </div>
			    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample">
			      <div class="card-body">
			      	<img src="https://akcdn.detik.net.id/community/media/visual/2020/03/02/d0f53936-7e3d-4cf1-856b-edb2486560f3.jpeg?a=1" class="img-fluid" alt="">
			      	<br><br>
			        <h4>
Siapa pun dapat terinfeksi virus corona. Akan tetapi, bayi dan anak kecil, serta orang dengan kekebalan tubuh yang lemah lebih rentan terhadap serangan virus ini. Selain itu, kondisi musim juga mungkin berpengaruh. Contohnya, di Amerika Serikat, infeksi virus corona lebih umum terjadi pada musim gugur dan musim dingin. 

Di samping itu, seseorang yang tinggal atau berkunjung ke daerah atau negara yang rawan virus corona, juga berisiko terserang penyakit ini. Misalnya, berkunjung ke Tiongkok, khususnya kota Wuhan, yang pernah menjadi wabah COVID-19 yang bermulai pada Desember 2019.</h4>
			      </div>
			    </div>
			  </div>
			</div>
		</div>   
		{{-- end-row --}}

		<div class="row">
			<div class="col-lg">
				 <div class="card bg-dark">
				    <div class="card-header text-center" id="headingOne11">
				      <h1 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne11" aria-expanded="false" aria-controls="collapseOne11">
				          <h4>Pengobatan Infeksi Coronavirus  </h4>
				        </button>
				      </h1>
				    </div>

				    <div id="collapseOne11" class="collapse" aria-labelledby="headingOne11" data-parent="#accordionExample">
				      <div class="card-body">
				      	<div class="row">
				      		<div class="col-lg-4">
				      		<img src="https://foto.wartaekonomi.co.id/files/arsip_foto_2020_03_04/virus_korona_145524_big.webp" class="img-fluid" alt="">
					      	</div>
					      	<div class="col-lg">
					      		 <h4>Tak ada perawatan khusus untuk mengatasi infeksi virus corona. Umumnya pengidap akan pulih dengan sendirinya. Namun, ada beberapa upaya yang bisa dilakukan untuk meredakan gejala infeksi virus corona. Contohnya:

								Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun.
								Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk.
								Perbanyak istirahat.
								Perbanyak asupan cairan tubuh.
								Jika merasa khawatir dengan gejala yang dialami, segeralah hubungi penyedia layanan kesehatan terdekat.
								Khusus untuk virus corona yang menyebabkan penyakit serius, seperti SARS, MERS, atau infeksi COVID-19, penanganannya akan disesuaikan dengan penyakit yang diidap dan kondisi pasien. 

								Bila pasien mengidap infeksi novel coronavirus, dokter akan merujuk ke RS Rujukan yang telah ditunjuk oleh Dinkes (Dinas Kesehatan) setempat. Bila tidak bisa dirujuk karena beberapa alasan, dokter akan melakukan:

								Isolasi
								Serial foto toraks sesuai indikasi.
								Terapi simptomatik.
								Terapi cairan.
								Ventilator mekanik (bila gagal napas)
								Bila ada disertai infeksi bakteri, dapat diberikan antibiotik</h4>
							</div>
				      </div>
				      	
				       
				      </div>
				    </div>
				  </div>
			</div>
			
		</div>   
		{{-- end-row --}}
	 


	</div>
</div>

@endsection