@extends('layouts.front')
@section('content')
    <!-- Main -->
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 m-auto">
                    <div class="page-header breadcrumb-wrap">
                        <div class="breadcrumb">
                            <a href="{{route('front')}}" rel="nofollow"><i class="fas fa-home mr-10"></i> Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container mb-30">
                {{--                <div class="row flex-row-reverse">--}}
                {{--                    <div class="col-lg-4-2">--}}
                {{--                        <div class="product-list mb-50">--}}
                {{--                            @foreach($announcements as $announcement)--}}
                {{--                                @if(Auth::user()->id==$announcement->user_id)--}}
                {{--                                    <!-- Single Product -->--}}
                {{--                                    <div class="product-card">--}}
                {{--                                        <div class="product-img-col">--}}
                {{--                                            <div class="product-img ">--}}
                {{--                                                <div class="product-img-inner">--}}
                {{--                                                    <a href="view-product.html">--}}
                {{--                                                        @php--}}
                {{--                                                            $name = '';--}}
                {{--                                                            if (count($announcement->images)) {--}}
                {{--                                                                $name = $announcement->images[0]->name;--}}
                {{--                                                            }--}}
                {{--                                                        @endphp--}}
                {{--                                                        <img style="width: 180px" src="{{ asset('storage/' . $name) }}"--}}
                {{--                                                             alt="">--}}
                {{--                                                        @php--}}
                {{--                                                            $name = '';--}}
                {{--                                                        @endphp--}}
                {{--                                                    </a>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <div class="product-badge">--}}
                {{--                                                <span--}}
                {{--                                                    class="best">{{\App\Models\Announcement::TYPES[$announcement->type]}}</span>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="product-content">--}}
                {{--                                            <h2>--}}
                {{--                                                <a href="view-product.html">{{$announcement->description}}</a>--}}
                {{--                                            </h2>--}}
                {{--                                            <div class="product-price">--}}
                {{--                                                <span>{{$announcement->price}}</span> so'm--}}
                {{--                                            </div>--}}
                {{--                                            <div class="rating d-inline-block">--}}
                {{--                                                @if (!empty($announcement->ratings[0]))--}}
                {{--                                                    @livewire('rate.rate-star-livewire',['elon'=>$announcement])--}}
                {{--                                                    (@livewire('rate.rate-livewire',['elon'=>$announcement]))--}}
                {{--                                                @endif--}}
                {{--                                            </div>--}}

                {{--                                            <div class="pro-action">--}}
                {{--                                                <a aria-label="Quick view" class="product-btn"--}}
                {{--                                                   href="{{ route('ad-show', $announcement) }}">--}}
                {{--                                                    <i class="fi-rs-eye"></i>--}}
                {{--                                                </a>--}}
                {{--                                                @livewire('myanno-livewire', ['elon'=>$announcement])--}}
                {{--                                                <a aria-label="Compare" class="product-btn" href="#"><i--}}
                {{--                                                        class="fi-rs-search"></i></a>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                    <!-- /Single Product -->--}}
                {{--                                @endif--}}
                {{--                            @endforeach--}}
                {{--                        </div>--}}
                {{--                        {{$announcements->links()}}--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="row justify-content-center">
                    @foreach ($announcements as $announcement)
                        @if (Auth::user()->id==$announcement->user_id)
                            <div class="col-lg-4">
                                <div class="card mb-25">
                                    <div class="card-body">

                                            <a href="{{ route('ad-show', $announcement) }}">
                                                <div class="wishlist-img"> <div class="product-badge">
                                                <span
                                                    class="best">{{\App\Models\Announcement::TYPES[$announcement->type]}}</span>
                                                    </div>
                                                @php
                                                    $name = '';
                                                    if (count($announcement->images)) {
                                                        $name = $announcement->images[0]->name;
                                                    }
                                                @endphp
                                                <img src="{{ asset('storage/' . $name) }}"
                                                     alt="">
                                                @php
                                                    $name = '';
                                                @endphp
                                            </a>

                                        <a href="#" class="wishlist-delete-btn">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                        <div class="wishlist-content-wrap">
                                            <h2>
                                                <a
                                                    href="view-product.html">{{ $announcement->title }}</a>
                                            </h2>
                                            <div class="wishlist-card-bottom mt-0">
                                                <div class="product-price">
                                                    <span>{{$announcement->price}}</span> so'm
                                                </div>
                                                <div class="rating d-inline-block">
                                                    @if (!empty($announcement->ratings[0]))
                                                        @livewire('rate.rate-star-livewire',['elon'=>$announcement])
                                                        (@livewire('rate.rate-livewire',['elon'=>$announcement]))
                                                    @endif
                                                </div>

                                                <div class="product-inner-details">
                                                    <a aria-label="Quick view" class="product-btn"
                                                       href="{{ route('ad-show', $announcement) }}">
                                                        <i class="fi-rs-eye"></i>
                                                    </a>
                                                    </a>
                                                    @livewire('myanno-livewire', ['elon'=>$announcement])
                                                    <a aria-label="Compare" class="product-btn" href="#"><i
                                                            class="fi-rs-search"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                {{$announcements->links()}}
            </div>

    </main>

    <!-- /Main -->
@endsection
