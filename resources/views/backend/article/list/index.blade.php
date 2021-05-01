@extends('backend.base.index')

@section('title')
<title>List Artikel - KahmiCita Dashboard</title>
@endsection

@section('content')

    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session()->get('message') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Artikel</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Gambar</th>
                <th>Dibuat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->penulis }}</td>
                <td>
                  <img src="{{ $item->url->image }}" class="img-thumbnail" width="200" height="200">
                </td>
                <td>{{ $item->date_format->updated_at }}</td>
                <td style="width: 110px">
                  <a target="_blank" href="{{ route('artikel.show', $item->id) }}" class="btn btn-info btn-sm">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{ route('article.edit', $item->id) }}" class="btn btn-success btn-sm">
                      <i class="fas fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('article.destroy', $item->id) }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin menghapus data?')">
                          <i class="fa fa-trash"></i>
                      </button>
                  </form>
                </td>
              </tr>
              @empty
              
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection

@section('js')
    <script>
      $("#nav-item-artikel").addClass(" active");
      $("#sidebar-artikel").removeClass("collapsed");
      $("#sidebar-artikel-collapse").addClass(" show");
      $("#collapse-item-article-list").addClass(" active");
    </script>
@endsection