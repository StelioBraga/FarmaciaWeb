@extends('layouts.app')

@section('title')
Farmacia Stock
@endsection


@section('body')

<div id="menu" class="ui secondary pointing menu" style="background:#72275C">
  <a class="item">
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a class="item active">
    Friends
  </a>
  <div class="right menu">
    <a class="ui item">
      Logout
    </a>
  </div>
</div>


<div class="ui container very padded segment">
  <h3 class="ui dividing header">
    Dividing Header
  </h3>
   
    <br>
    <br>
    {{ csrf_field() }}
    @foreach ( $produtos as $produto)
  <div class="ui relaxed top aligned divided list">
  <div class="item">
    <img class="ui small image" src="{{$produto->foto}}">
    <div class="content">
      <a class="header">{{$produto->nome}}</a>
      <div class="description">{{$produto->descricao}}</div>
      <div class="description">{{$produto->descricao}}</div>
      <div class="description">{{$produto->descricao}}</div>
      <div class="description">{{$produto->descricao}}</div>
    </div>
  </div>
  @endforeach
 
 
</div>
</div>

<!-- footer -->
  <div class="ui placeholder segment" style="margin-top:10%">
    <div class="ui center aligned container">
      <div class="ui stackable grid">
        <div class="three wide column">
          <h4 class="ui header">Localizacao</h4>
          <div class="ui link list">
            <div class="active item">Home</div>
            <a class="item">About</a>
            <a class="item">Jobs</a>
            <a class="item">Team</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui header">Localizacao</h4>
        </div>
        <div class="three wide column">
          <h4 class="ui header">Localizacao</h4>
        </div>
        <div class="three wide column">
          <h4 class="ui header">Localizacao</h4>
        </div>
        <div class="three wide column">
          <div class="ui action input">
            <input type="text" placeholder="Digite o seu E-mail...">
            <button class="ui button">Enviar</button>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection