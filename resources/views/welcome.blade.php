@extends('layouts.main')

@section('container')
<div class="content">
    <div class="container-fluid">

    <section class="banner_part">
        <div class="container">
            <img src="./assets/img/sisehat.png" class="img-fluid img-thumbnail" alt="eyu">           


            <br><br>
            <h3 class="text-center">SISEHAT adalah sebuah portal website yang memberikan informasi seputar kesehatan dalam masa karantina mandiri, PSBB, dll</h3> <br>

            <h3 class="text-center">
                SISEHAT juga memberikan layanan berupa kotak surat sebagai bentuk media penyampaian keluh kesah selama terjadinya pandemi COVID-19

            </h3>

            <br> <br>
           <!--  <h3 class="text-center text-success"><b>KOTAK SURAT FORM</b></h3>
            
            <div class="container">
                <div class="card">
                  <div class="card-header">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Selamat</strong> {{$message}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    @endif
                  </div>
                  <div class="card-body">
                        <form method="POST" action="{{ route('Welcome.store') }}" >
                            @csrf
                          <div class="form-group">
                            <label class="text-center" for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                          </div>
                          <div class="form-group">
                            <label class="text-center" for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                          </div>
                          <div class="form-group">
                            <label class="text-center" for="text">Isi Pesan</label>
                            <input type="text" name="pesan" class="form-control" id="text">
                          </div>
                          
                          <button type="submit" class="btn btn-info pull-right">Kirim</button>
                        </form>
                  </div>
                </div>
                
                
            </div> -->




        </div>
    </section>

    </div>
</div>


@endsection