@extends('backend.base.index')

@section('title')
<title>Form Artikel - KahmiCita Dashboard</title>
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
            {{ $page === 'edit' ? 'Edit Artikel' : 'Tambah Artikel' }}
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
                {{-- penulis --}}
                <div class="form-group">
                  <label for="penulis">Penulis <span style="color: red">*</span></label>
                  <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                      @if (old('penulis'))
                        value="{{old('penulis')}}"
                      @elseif ($item->penulis)
                        value="{{ $item->penulis }}"
                      @else
                        value="{{ Auth::user()->name }}"
                      @endif    
                      id="penulis" 
                      name="penulis"
                    >
                  @error('penulis')
                  <div class="text-muted">{{ $message }}</div>
                  @enderror
                </div>

              </div>
              <div class="col-12">
                  {{-- artikel --}}
                  <div class="form-group">
                    <label for="artikel">Artikel <span style="color: red">*</span></label>
                    <textarea class="ckeditor form-control @error('artikel') is-invalid @enderror" id="artikel" name="artikel"
                        rows="7">{{ old('artikel') ? old('artikel') : $item->artikel }}</textarea>
                    @error('artikel')
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
      $("#nav-item-artikel").addClass(" active");
      $("#sidebar-artikel").removeClass("collapsed");
      $("#sidebar-artikel-collapse").addClass(" show");
      $("#collapse-item-article-create").addClass(" active");

    </script>
@endsection