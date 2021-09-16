@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if (session('delete'))
                        <div class="alert alert-danger" role="alert">
                            {{ __('Data Berhasil Dihapus') }}
                        </div>
        @elseif (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Data Berhasil Diubah') }}
                        </div>
        @endif        
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ordo</th>
      <th scope="col">Famili</th>
      <th scope="col">Genus</th>
      <th scope="col">Species</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 0;?>
    @foreach($pohon as $data)
  <?php $no++ ;?>
    <tr>
      <td>{{ $no }}</td>
      <td>{{ $data->ordo }}</td>
      <td>{{ $data->famili }}</td>
      <td>{{ $data->genus }}</td>
      <td>{{ $data->species }}</td>
      <td>{{ $data->jumlah }}</td>
      <td> 
          <form action="{{ route('pohon.destroy', $data->id) }}" method="POST">
            @csrf
                <input type="hidden" name="_method" value="DELETE">
                                  <a href="{{ route('pohon.edit', $data->id) }}" 
                                      class="btn btn-warning btn-sm">
                                      Edit
                                  </a>
                <button class="btn btn-danger btn-sm">
                  Delete
                </button>
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
        
    </div>
</div>
@endsection
