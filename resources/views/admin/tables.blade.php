@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Hasil Pengukuran Sensor</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Suhu</th>
            <th>Kadar Oksigen</th>
            <th>Kadar Ph</th>
            <th>Residu Terlarut</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Suhu</th>
            <th>Kadar Oksigen</th>
            <th>Kadar Ph</th>
            <th>Residu Terlarut</th>
          </tr>
        </tfoot>
        <tbody>
            @foreach ($irridentify as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->tanggal->format('d F Y h:i:s')}}</td>
                    <td>{{$item->suhu}}</td>
                    <td>{{$item->kadar_oksigen}}</td>
                    <td>{{$item->kadar_ph}}</td>
                    <td>{{$item->residu_terlarut}}</td>
                </tr>
                
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection