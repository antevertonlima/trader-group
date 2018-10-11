@extends('layouts.app')

@section('content')
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Criar Categoria de Trade</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {!! form($form_tradercategory) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
