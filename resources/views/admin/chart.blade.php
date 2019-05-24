@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Chart</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Hasil Pengukuran Sensor</h6>
  </div>
  <div class="card-body">

  <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/542333/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
    {!! $chart->render() !!}
  </div>
</div>
@endsection

@push('script')
{!! $chart->script() !!}    
@endpush
