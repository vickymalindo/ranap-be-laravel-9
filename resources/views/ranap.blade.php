@extends('layout.ranap')

@section('main')
<section class="container table-responsive">
  <table id="myTable" class="table table-striped">
    <thead>
        <tr>
            <th>no</th>
            <th>indate</th>
            <th>status</th>
            <th>host branch</th>
            <th>member branch</th>
            <th>claim no</th>
            <th>provider</th>
            <th>no kartu</th>
            <th>nama karyawan</th>
            <th>member name</th>
            <th>unit kerja perusahaan</th>
            <th>DX masuk</th>
            <th>status claim</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($data as $key=>$value)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$value->Tgl_Rawat}}</td>
            <td>{{$value->ipstatus}}</td>
            <td>{{$value->Host_Branch_BO_NAYAKA}}</td>
            <td>{{$value->Member_Branch_BO_NAYAKA}}</td>
            <td>{{$value->claim_no}}</td>
            <td>{{$value->provider_name}}</td>
            <td>{{$value->no_kartu}}</td>
            <td>{{$value->Employee_Name}}</td>
            <td>{{$value->Patient_Name}}</td>
            <td>{{$value->Unit_Kerja_Perusahaan}}</td>
            <td>{{$value->DX_Masuk}}</td>
            <td>{{$value->st_claim}}</td>
      @endforeach
        
    </tbody>
  </table>
</section>
@endsection('main')