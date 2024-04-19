@extends('layout.ranap')

@section('main')
<section class="container table-responsive">
  <table id="myTable" class="table table-striped">
    <thead>
        <tr>
            <th>no</th>
            <th>indate</th>
            <th>claim no</th>
            <th>member no</th>
            <th>member name</th>
            <th>corporate</th>
            <th>provider</th>
            <th>vip member</th>
            <th>gl no</th>
            <th>member branch</th>
            <th>host branch</th>
            <th>ICD10</th>
            <th>customer group</th>
            <th>covarage</th>
            <th>status</th>
            <th>no kartu</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($data as $key=>$value)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$value->indate}}</td>
            <td>{{$value->claim_no}}</td>
            <td>{{$value->member_no}}</td>
            <td>{{$value->member_name}}</td>
            <td>{{$value->corporate}}</td>
            <td>{{$value->provider_name}}</td>
            <td>{{$value->vip_member}}</td>
            <td>{{$value->gl_no}}</td>
            <td>{{$value->member_branch}}</td>
            <td>{{$value->host_branch}}</td>
            <td>{{$value->icd10}}</td>
            <td>{{$value->customer_group}}</td>
            <td>{{$value->covarage}}</td>
            <td>{{$value->ipstatus}}</td>
            <td>{{$value->no_kartu}}</td>
        </tr>
      @endforeach
        
    </tbody>
  </table>
</section>
@endsection('main')