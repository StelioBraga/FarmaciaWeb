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
            <a class="item" herf="{{ route('create' )}}" >Adicionar Produtos</a>
            <a class="item" href="{{route('admin')}}">Listar Produtos</a>
            <a class="item" href="{{route('promocao')}}">Adicionar Promocoes</a>
          </div>
        </div>
        <div class="item">
          <div class="header">Usuario</div>
          <div class="menu">
            <a class="item">Adicionar Usuario</a>
            <a class="item">Listar</a>
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
         
          <h2 class="ui dividing left header">Adicionar uma Promocão</h2>
          <div class="ui left aligned basic segment">
          <form class="ui form" action="{{ route('savepromo') }}" method="post">
              @csrf
              <h4 class="ui dividing header">Adicionar um novo Produto</h4>
              <div class="field">
                <label>Foto</label>
                <div class="two fields">
                  <div class="field">
                    <input type="file" name="photo" placeholder="Nome">
                  </div>
                </div>
              </div>
              <div class="field">
                <label>Descricão da Promocão</label>
              
                  <div class="field">
                    <input type="text" name="descricao" placeholder="Nome">
                  </div>
                  
                </div>
              </div>
               
              <input class="ui left button" type="submit"  value="Submit Order" />
            </form>
       
@endsection