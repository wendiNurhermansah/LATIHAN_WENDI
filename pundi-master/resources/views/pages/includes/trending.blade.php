<div class="trending-area fix">
    <div class="container">
        <div class="trending-main m-t-40">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending-top m-b-30">
                        <div class="">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators m-b-1">
                                    @foreach( $trending_top as $i )
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    @foreach( $trending_top as $i )
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div class="zoom-effect">
                                            <div class="kotak">
                                                <img class="bdr-5" style="width: 730px; height: 530px; object-fit: cover; object-position: center;-o-object-fit: cover" src="{{ config('app.path_url').'artikel/'.$i->gambar }}">
                                            </div>
                                            <div class="carousel-caption">
                                                <div class="">
                                                    <span class="bdr-5 p-2 capital f-b ktg-trendingTop">
                                                        <a href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a>
                                                    </span>
                                                    <h2 class="m-t-20">
                                                        <a class="f-b text-white" href="{{ route('artikel') .'?post='.$i->id}}">
                                                            {{ $i->judul }}
                                                        </a>
                                                    </h2>
                                                    <i class="fa fa-user info-trendingTop"></i>
                                                    <a href="#" class="f-b fs-13 m-l-5 info-trendingTop">
                                                        {{ $i->user->name }}
                                                    </a>
                                                    <i class="fas fa-clock m-l-25 info-trendingTop"></i>
                                                    <a class="f-b fs-13 m-l-5 info-trendingTop">
                                                        {{ $i->created_at }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach ($trending_bottom as $i)
                            <div class="col-lg-4">
                                <div class="single-bottom mb-30">
                                    <div class="trend-bottom-img mb-10">
                                        <img style="object-fit: cover; object-position: center" src="{{ config('app.path_url').'artikel/'.$i->gambar }}" width="223" height="159" alt="photo">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <p class="fs-13 capital">
                                            <a class="f-orange" href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a>
                                        </p>
                                        <h4 class="-mt-15">
                                            <a href="{{ route('artikel') .'?post='.$i->id}}">
                                                {{ $i->judul }}
                                            </a>
                                        </h4>
                                        <div class="-mt-5" style="color: gray; margin-left: -25px">
                                            <i class="fas fa-clock fa-xs m-l-25" style="background-color: transparent !important"></i>
                                            <a class="fs-13 m-l-5" style="background-color: transparent !important">
                                                {{substr($i->created_at, 0, 10)}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @foreach ($trending_right as $i)
                    <div class="trand-right-single d-flex">
                        <div class="trand-right-img">
                            <img style="object-fit: cover; object-position: center" src="{{ config('app.path_url').'artikel/'.$i->gambar }}" width="150" height="100" alt="photo">
                        </div>
                        <div class="trand-right-cap -mt-7">
                            <p class="fs-13 capital">
                                <a class="f-orange" href="{{ route('sub_kategori','sub_kategori='.$i->sub_kategori->id) }}">{{ $i->sub_kategori->n_sub_kategori }}</a>
                            </p>
                            <h4 class="-mt-15">
                                <a href="{{ route('artikel') .'?post='.$i->id}}">
                                    {{ $i->judul }}
                                </a>
                            </h4>
                            <div class="-mt-5" style="color: gray; margin-left: -25px">
                                <i class="fas fa-clock fa-xs m-l-25" style="background-color: transparent !important"></i>
                                <a class="fs-13 m-l-5" style="background-color: transparent !important">
                                    {{substr($i->created_at, 0, 10)}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>