@extends('frontend.base.index')

@section('title')
<title>{{ $item->judul }} | Yayasan KAHMI Cita</title>
@endsection

@section('content')
     <!-- Start Work Sigle -->
     <section class="container py-5">

        <div class="row pt-5">
            <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
                <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line">{{ $item->judul }}</h2>
                <p class="worksingle-footer py-3 text-muted light-300">
                    Ditulis oleh {{ $item->penulis }} | Pada {{ $item->date_format->created_at }}
                </p>
            </div>
        </div><!-- End Blog Cover -->

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div id="templatemo-slide-link-target" class="card mb-3">
                    <img class="img-fluid border rounded" src="{{ $item->url->image }}" alt="Card image cap">
                </div>
                
            </div>
        </div><!-- End Slider -->

        <div class="row">
            <div class="col-md-8 m-auto text-left justify-content-center">
                <p class="pt-3 text-muted light-300">
                    {!! $item->artikel !!}
                </p>
            </div>
        </div><!-- End Paragrph -->

    </section>
    <!-- End Work Sigle -->

    <!-- Start Related Post -->
<article class="container-fluid bg-light">
    <div class="container">
        <div class="worksingle-related-header row">
            <h1 class="h2 py-5">Artikel lainnya</h1>
            <div class="col-md-12 text-left justify-content-center">
                <div class="row gx-5">

                    @forelse ($others as $item)
                    <div class="col-sm-6 col-lg-4 mb-5">
                        <a href="{{ $item->url->show }}" class="related-content card text-decoration-none overflow-hidden h-100">
                            <img class="related-img card-img-top" src="{{ $item->url->image }}" style="height: 300px; object-fit: cover;" alt="Card image cap">
                            <div class="related-body card-body p-4">
                                <h5 class="card-title h6 m-0 semi-bold-600 text-dark">{{ $item->judul }}</h5>
                                <p class="card-text pt-2 mb-1 light-300 text-dark" style="font-size: 14px">
                                    Ditulis oleh {{ $item->penulis }} pada {{ $item->date_format->created_at }}
                                </p>
                                <div class="d-flex justify-content-between">
                                    <span class="text-primary light-300">Read more</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    @empty
                        <div class="col-12 text-center pb-5">
                            <h3>Belum ada Artikel Lain</h3>
                        </div>
                    @endforelse
                    
                </div>
            </div>
        </div>

</article>
<!-- End Related Post -->
@endsection