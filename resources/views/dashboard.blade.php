@extends('layout.master')

@section('title', 'Dashboard')

@section('content')
    <div class="main-content">
        <div class="container-fluid">
          {{-- @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif --}}
            <div class="row">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading">
                      <h3 class="panel-title">Data User</h3>
                      <div class="right">
                      </div>
                    </div>
                    <div class="panel-body no-padding">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($user as $u)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $u->name }}</a></td>
                                  <td>{{ $u->email }}</td>
                                  {{-- <td>{{ $sw->jenis_kelamin }}</td>
                                  <td>{{ $sw->agama }}</td>
                                  <td>{{ $sw->alamat }}</td>
                                  <td><a href="/siswa/{{ $sw->id }}/edit" class="btn btn-sm btn-success" style="float: left">Edit</a>
                                    <form action="/siswa/{{ $sw->id }}" method="post" class="d-inline">
                                      @method('delete')
                                      @csrf
                                      <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</button>
                                    </form>
                                  </td> --}}
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