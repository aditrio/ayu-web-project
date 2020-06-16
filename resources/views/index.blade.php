@extends('layouts.main')

@section('container')

<div class="content">
        <div class="container-fluid">
          <h2> DATA CORONA DUNIA </h2>
          <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Positif</p>
                  <h3 class="card-title">{{ $posi ['value'] }}
                    <small>Jiwa</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Sembuh</p>
                  <h3 class="card-title">{{ $semb ['value'] }}
                    <small>Jiwa</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Meninggal</p>
                  <h3 class="card-title">{{ $meni ['value'] }}
                  <small>Jiwa</small>
                </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-9 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Data Corona Indonesia</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Provinsi</th>
                      <th>Kasus Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </thead>
                    <tbody>
                    @foreach($prov as $p)
                      <tr>
                        <td> {{ $p ['attributes']['Provinsi'] }} </td>
                        <td> {{ $p ['attributes']['Kasus_Posi'] }} </td>
                        <td> {{ $p ['attributes']['Kasus_Semb'] }} </td>
                        <td> {{ $p ['attributes']['Kasus_Meni'] }} </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection