@extends('layouts.app')

@section('content')
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-table"></i>
                        Criar Categoria de Trade
                        <a href="{{ route('trader_categories.create') }}" 
                            class="btn btn-success btn-sm pull-right">
                            <i class="fa fa-plus-square"></i>
                        </a>
                    </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Nome</th>
                                        <th>Ações</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    
                                        @forelse ($tradercategories as $tradercategory)
                                        <tr>
                                            <td>{{ $tradercategory->id }}</td>
                                            <td>{{ $tradercategory->name }}</td>
                                            <td>
                                                <a href="{{ route('trader_categories.edit', ['id' => $tradercategory->id]) }}" 
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square"></i> 
                                                </a>
                    
                                                <a href="{{ route('trader_categories.destroy', ['id' => $tradercategory->id]) }}" 
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fa fa-minus-square"></i> 
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5"><b>Não existem algoritimos cadastradas no momento!</b></td>
                                        </tr>
                                        @endforelse
                                    
                                    </tbody>
                                </table>
                                {{ $tradercategories->links() }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection