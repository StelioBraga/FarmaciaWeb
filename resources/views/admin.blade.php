@extends('layouts.app')
@section('title')
Farmacia Stock
@endsection

@section('body')
<div id="sidenav" class="ui inverted left fixed vertical menu">
      <a class="active item">
          Farmacia 
        </a>
        
        <div class="item">
          <div class="header">Produtos</div>
          <div class="menu">
            <a class="item" href="{{route('create')}}" >Adicionar</a>
            <a class="item">Listar</a>
            <a class="item" href="{{route('promocao')}}">Adicionar Promocoes</a>
          </div>
        </div>
        <div class="item">
          <div class="header">Usuario</div>
          <div class="menu">
            <a class="item">Adicionar</a>
            <a class="item" href="{{route('admin')}}">Listar</a>
          </div>
        </div>
        </div>
        <a class="item">Features</a>
        <a class="item">Testimonials</a>
        <a class="item">Sign-in</a>
      </div>


      <div id="uimini" class="ui mini menu">
        <div class="right menu">
          <div class="ui dropdown item">
            Language <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item">English</a>
              <a class="item">Russian</a>
              <a class="item">Spanish</a>
            </div>
          </div>
          <div class="item">
              <div class="ui primary button">Sign Up</div>
          </div>
        </div>
      </div>

      <div id="uifixed" class="ui fixed container"  >


        <div class="ui segment">
         
          <h2 class="ui dividing left header">Lita de Produtos Farmacos</h2>
          <form action="{{route('adminSearch')}}" method="get">
          {{ csrf_field() }}
          <div class="ui right aligned basic segment">
          <div class="ui large input focus">
              <input name="nomedoproduto" type="text" placeholder="Procurar...">
            </div>
            <button type="submit" class="ui primary basic button" style="margin-left: 14px">Continuar</button> 
            
            </form>
           
        </div>
          <form method="post" action="{{ route('show') }}">
          {{ csrf_field() }}
          <table class="ui celled table">
         
              <thead>
                <tr><th>#Id</th>
                <th>Nome</th>
                <th>Referencia</th>
                <th>Categoria</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Validade</th>
                <th>Preco</th>
                <th>Accão</th>
                <th></th>
              </tr></thead>
              <tbody>
                <tr>
                @foreach ($produtos  as $produto)
                  <td data-label="Id">{{$produto->id}}</td>
                  <td data-label="Name">{{$produto->nome}}</td>
                  <td data-label="Referencia">{{$produto->nome}}</td>
                  <td data-label="Job">{{$produto->nome}}</td>
                  <td data-label="Job">{{$produto->nome}}</td>
                  <td data-label="Job">{{$produto->nome}}</td>
                  <td data-label="Job">{{$produto->nome}}</td>
                  <td data-label="Job">{{$produto->nome}}</td>
                  <td data-label="Job">
                  <button class="mini ui primary basic button">Ver</button>
                  <button class="mini ui positive basic button">Actualizar</button>
                  </td>
                  <td data-label="Job">
                  <form action="{{route('delete',$produto->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="mini ui negative basic button" type="submit">Apgar</button>
                  </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </forme>
          


@endsection