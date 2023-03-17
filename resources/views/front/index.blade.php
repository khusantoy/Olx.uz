@extends('layouts.front')

@section('title')
    OLX
@endsection


@section('content')
    <main class="main">
        <!-- Top Products -->
        <section class="product-tab-section product-section">
            <div class="container">
                <div class="tab-pane" id="beauty" role="tabpanel">

                   @livewire('elonlar.index-livewire')
                </div>
                
                @livewire('elonlar.viewmore')

            </div>
        </section>
        <!-- /Top Products -->
    </main>
@endsection
