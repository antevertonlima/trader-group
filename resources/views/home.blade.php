@extends('layouts.app')

@section('content')
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Você está logado!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
