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
    Resultado da Pesquisa
  </h3>
    
    {{ csrf_field() }}
    
   
  <div class="ui relaxed top aligned divided list">

  <form action="{{route('search')}}" method="get">
  {{ csrf_field() }}
  <div class="ui right aligned basic segment">
   <div class="ui large input focus">
      <input name="nomedoproduto" type="text" placeholder="Procurar...">
   </div>
  <button type="submit" class="ui primary basic button" style="margin-left: 14px">Pesquisar</button> 
  </div>
  </form>
  
  @foreach ($produtos  as $produto)
  <div class="item">
    <img class="ui tiny image" src="{{$produto->foto}}">
    <div class="content">
    
      <a class="header">{{$produto->nome}}</a>
      <div class="description">{{$produto->descricao}}</div>
    </div>
  </div>
  @endforeach
  <div class="item">
    <img class="ui tiny image" src="https://www.drogariaminasbrasil.com.br/media/product/1aa/papel-higienico-personal-jasmin-30-metros-com-04-rolos-e10.jpg">
    <div class="content">
      <a class="header">Stevie Feliciano</a>
      <br>
      <div class="description">Last seen watching <a><b>Bob's Burgers</b></a> 10 hours ago.</div>
    </div>
  </div>
  <div class="item">
    <img class="ui tiny image" src="https://www.drogariaminasbrasil.com.br/media/product/1aa/papel-higienico-personal-jasmin-30-metros-com-04-rolos-e10.jpg">
    <div class="content">
      <a class="header">Elliot Fu</a>
      <br>
      <div class="description">Last seen watching <a><b>The Godfather Part 2</b></a> yesterday.</div>
    </div>
  </div>
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