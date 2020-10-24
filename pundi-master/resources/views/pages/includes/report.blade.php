<div class="weekly2-news-area m-b-30">
    <div class="container">
        <div class="weekly2-wrapper -mt-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-30">
                        <div class="-mb-13">
                            <i class="fas fa-angle-up fa-lg arrow"></i>
                        </div>
                        <span class="fs-18 m-l-15 title-card"> 
                            REPORT
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 -mt-15">
                    <div class="weekly2-news-active dot-style d-flex dot-style">
                        @foreach ($report as $i)
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img style="object-fit: cover; object-position: center" src="{{ config('app.path_url').'artikel/'.$i->gambar }}" height="200" alt="photo">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="bdr-5" style="background-color: #FEBD01; color: white">
                                        <a href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->kategori->n_kategori }}</a>
                                    </span><br>
                                    <div class="-mt-10">
                                        <i class="fas fa-clock fa-xs text-grey"></i>
                                        <span style="color: grey; margin-left: -10px">{{ substr($i->created_at, 0, 10) }}</span>
                                    </div>
                                    <h4 class="-mt-15"><a href="{{ route('artikel') .'?post='.$i->id}}">{{ $i->judul }}</a></h4>
                                </div>
                            </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>