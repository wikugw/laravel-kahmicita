@extends('backend.base.index')

@section('title')
<title>Form Kegiatan - KahmiCita Dashboard</title>
@endsection

@section('content')
<form action="{{ $url }}" method="POST" enctype="multipart/form-data">
  @if ($page === 'edit')
    @method('PUT')
  @endif
  @csrf
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">
            {{ $page === 'edit' ? 'Edit Kegiatan' : 'Tambah Kegiatan' }}
          </h6>
      </div>

      <div class="card-body">
          <div class="row">
              <div class="col-12">
                {{-- judul --}}
                <div class="form-group">
                  <label for="judul">Judul <span style="color: red">*</span></label>
                  <input type="text" class="form-control @error('judul') is-invalid @enderror"
                      value="{{ old('judul') ? old('judul') : $item->judul }}" id="judul" name="judul">
                  @error('judul')
                  <div class="text-muted">{{ $message }}</div>
                  @enderror
                </div>

              </div>
              <div class="col-12">
                  {{-- deskripsi --}}
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi <span style="color: red">*</span></label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
                        rows="5">{{ old('deskripsi') ? old('deskripsi') : $item->deskripsi }}</textarea>
                    @error('deskripsi')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="col-12">
                {{-- foto --}}
                <div class="form-group">
                    <label for="foto">
                      Foto
                      @if ( $page === 'create' )
                      <span style="color: red">*</span>
                      @endif
                    </label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="foto">
                    @error('foto')
                    <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-footer float-right pr-3">
                    <small style="color: red">*) wajib diisi</small>
                </div>
              </div>
          </div>

      </div>
  </div>

  <div class="form-footer pb-3">
    <button type="submit" class="btn btn-block btn-primary btn-default shadow-lg">Simpan</button>
  </div>

  
</form>
@endsection

@section('js')
    <script>
      $("#nav-item-kegiatan").addClass(" active");
      $("#sidebar-kegiatan").removeClass("collapsed");
      $("#sidebar-kegiatan-collapse").addClass(" show");
      $("#collapse-item-activity-create").addClass(" active");

    </script>
@endsection