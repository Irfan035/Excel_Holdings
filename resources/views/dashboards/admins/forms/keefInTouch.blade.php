@extends('dashboards.admins.layouts.appAdmin')

@section('content')
  <!--begin::Post-->
  <div class="post d-flex flex-column-fluid " id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container shadow-sm p-3">
      <div class="row pb-3 pt-2">
        <div class="col-md-6">
          <h1>keep In Touch</h1>
        </div>

      </div>


      @if(Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
        Session::forget('success');
        @endphp
      </div>
      @endif

      <div class="table-responsive">
        <table class="table table-light table-striped table-borderless">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>City</th>
              <th>Action</th>
            </tr>
            <thead>
              @foreach ($data as $key => $kepIn)
            <tbody>
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $kepIn->name }}</td>
                <td>{{ $kepIn->email }}</td>
                <td>{{ $kepIn->phone }}</td>
                <td>{{ $kepIn->city }}</td>
                <td><a class="btn btn-danger" href="{{ route('admin.destroy',$kepIn->id) }}"><i class="fas fa-trash"></i></a></td>
              </tr>
          <tbody>
            @endforeach
        </table>
      </div>

      {!! $data->render() !!}
    </div>
  </div>
  @endsection