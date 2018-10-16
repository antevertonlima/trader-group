@extends('layouts.app')

@section('content')
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-table"></i>
                        Lista
                        <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#createCategory">
                            <i class="fa fa-plus-square"></i>
                        </button>
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

<!-- Modal -->
<div class="modal fade" id="createCategory" tabindex="-1" role="dialog" aria-labelledby="createCategoryLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createCategoryLabel">Criar nova Categoria trader</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! form($form_tradercategory) !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection