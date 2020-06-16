@extends('layouts.main')

@section('container')

<style>
  ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}


</style>

<div class="content">
        <div class="container mt-5 mb-5">
          <h3>KOTAK SURAT</h3>
          <div class="row">
            <div class="col-md-8 offset-md-2">
              <h4>Surat Terbaru</h4>
              <ul class="timeline">
                @foreach($data as $da)
                <li>
                  <a href="#">{{$da->nama}}</a> <small>@ {{$da->email}}</small>
                  <a href="#" class="float-right">{{date_format($da->created_at,"Y/m/d H:i")}}</a>
                  <p>{{$da->pesan}}</p>
                </li>
                @endforeach
                
              </ul>
            </div>
          </div>
        </div>

        


@endsection