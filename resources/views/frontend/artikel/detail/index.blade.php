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
@endsection