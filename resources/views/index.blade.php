@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Project </h2>
            </div>

            <!-- Botão para adiconar produto -->
            <div class="pull-right">
                <a class="btn btn-success" href="/products/create" title="Adicionar um produto"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>
    <!-- -->

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Nº</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Data da Criação</th>
            <th>Ações</th>
        </tr>
        <!-- devolve em cada linha cada produto -->
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->name }}</td>
                <td> {{ $product->name }} </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                        <!-- ver os detalhes do produto especifico -->
                        <a href="{{ route('products.show', $product->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                        <!-- -->

                        <!-- para editar -->
                        <a href="{{ route('products.edit', $product->id) }}" title="edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>
                        <!-- -->

                        <!-- para eliminar um produto -->
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                        <!-- -->
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection