@extends('frontend.base.index')

@section('title')
<title>List Kegiatan | Yayasan KAHMI Cita</title>
@endsection

@section('css')
    <style>
        .page-item.active .page-link{
            background-color: #184d47 !important;
            color: #fff !important;
        }

        .page-item .page-link{
            color: #184d47 !important;
        }
    </style>
@endsection

@section('content')
    <!-- Start Recent Work -->
<section class="py-3" id="infoKegiatan" style="background-color: #C64756;">
    <div class="container">
        <div class="recent-work-header row pb-3 text-center">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5 typo-space-line-center" style="color: #fff;">Info Kegiatan</h2>
        </div>
        <div class="row gy-5 g-lg-5 mb-4 justify-content-center">

            @forelse ($items as $item)
            <div class="col-md-4 mb-3">
                <a href="{{ $item->url->show }}" class="recent-work card border-0 shadow-lg overflow-hidden">
                    <img class="recent-work-img card-img" src="{{ $item->url->image }}" height="300" width="200" style="object-fit: cover" alt="Card image">
                    <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                            <h3 class="card-title light-300">{{ $item->judul }}</h3>
                            <p class="card-text">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </a>
            </div>    
            @empty
            <div class="col-md-4 mb-3 text-center">
                Belum ada kegiatan ditambahkan
            </div>
            @endforelse

        </div>

        <div class="row mb-4 justify-content-center text-center">
            <div class="col-12">
                {{ $items->links("pagination::bootstrap-4") }}
            </div>
        </div>
        
    </div>
</section>
<!-- End Recent Work -->
@endsection

@section('js')
    <script>
        $( "ul.pagination" ).addClass(' justify-content-center');
    </script>
@endsection