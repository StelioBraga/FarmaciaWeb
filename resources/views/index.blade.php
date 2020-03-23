@extends('layouts.app')

@section('title')
Farmacia Stock
@endsection


@section('body')

<div id="menu" class="ui secondary pointing menu" style="background:#72275C,color:white">
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
    <div class="item">
      <form action="{{route('search')}}" method="get">
          {{ csrf_field() }}
          <div class="ui large input focus">
              <input name="nomedoproduto" type="text" placeholder="Procurar...">
            </div>
        <button type="submit" class="ui primary basic button" style="margin-left: 14px">Pesquisar</button> 
      </form>
    </div>
  </div>
</div>


<div class="ui three top attached mini steps">
  <div class="step">
    <i class="truck icon"></i>
    <div class="content">
      <div class="title">Eficiencia</div>
      <div class="description">Veja os nossos produtos em poucos cliques</div>
    </div>
  </div>
  <div class="active step">
    <i class="payment icon"></i>
    <div class="content">
      <div class="title">Diversidade</div>
      <div class="description">Encontre Variedades De Produtos</div>
    </div>
  </div>
  <div class="disabled step">
    <i class="info icon"></i>
    <div class="content">
      <div class="title">Qualidade</div>
      <div class="description">Qualidade Garantida</div>
    </div>
  </div>
</div>

<div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIxnI_4lCamfxcAYP25XeS45L2z_vFkG1anNXbObINgoqrHPT2">
        </div>
        @foreach ($promocoes as $promocao)
        <div class="swiper-slide">{{$promocao->foto}}</div>
        @endforeach
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        <div class="swiper-slide">Slide 10</div>
      </div>
      
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
 </div>
  <div class="ui center aligned header">
  <h2 class="ui center aligned header">
  Separamos essas ofertas pra você!
  </h2>
  <button class="ui violet basic button">Ver Todos</button>
  </div>
  
  <div class="ui  centered grid" style="margin-top: 40px;">
 
      <div class="ui link cards">
      <div class="card">
        <div class="image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIxnI_4lCamfxcAYP25XeS45L2z_vFkG1anNXbObINgoqrHPT2">
        </div>
        <div class="content">
          <div class="header">Matt Giampietro</div>
        </div>
        <div class="extra content">
          <span class="right floated">
            Joined in 2013
          </span>
          <span>
            <i class="user icon"></i>
            75 Friends
          </span>
        </div>
      </div>

      <div class="card">
        <div class="image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIxnI_4lCamfxcAYP25XeS45L2z_vFkG1anNXbObINgoqrHPT2">
        </div>
        <div class="content">
          <div class="header">Matt Giampietro</div>
        </div>
        <div class="extra content">
          <span class="right floated">
            Joined in 2013
          </span>
          <span>
            <i class="user icon"></i>
            75 Friends
          </span>
        </div>
      </div>
      
      <div class="card">
        <div class="image">
          <img src="https://www.drogariaminasbrasil.com.br/media/product/1aa/papel-higienico-personal-jasmin-30-metros-com-04-rolos-e10.jpg">
        </div>
        <div class="content">
          <div class="header">Molly</div>
        </div>
        <div class="extra content">
          <span class="right floated">
            Joined in 2011
          </span>
          <span>
            <i class="user icon"></i>
            35 Friends
          </span>
        </div>
      </div>


      <div class="card">
        <div class="image">
          <img src="https://www.drogariaminasbrasil.com.br/media/product/1aa/papel-higienico-personal-jasmin-30-metros-com-04-rolos-e10.jpg">
        </div>
        <div class="content">
          <div class="header">Elyse</div>
          
        </div>
        <div class="extra content">
          <span class="right floated">
            Joined in 2014
          </span>
          <span>
            <i class="user icon"></i>
            151 Friends
          </span>
    </div>
    </div>
    </div>
    </div> 
  </div> 

  <div class="ui center aligned header">
  <h2 class="ui center aligned header">
   Medicamentos
  </h2>
  <button class="ui violet basic button">Ver Todos</button>
  </div>
  
  <div class="ui  centered grid" style="margin-top: 40px;">
      <div class="ui link cards">
      <div class="card">
        <div class="image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIxnI_4lCamfxcAYP25XeS45L2z_vFkG1anNXbObINgoqrHPT2">
        </div>
        <div class="content">
          <div class="header">Matt Giampietro</div>
        </div>
        <div class="extra content">
          <span class="right floated">
            Joined in 2013
          </span>
          <span>
            <i class="user icon"></i>
            75 Friends
          </span>
        </div>
      </div>

      <div class="card">
        <div class="image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIxnI_4lCamfxcAYP25XeS45L2z_vFkG1anNXbObINgoqrHPT2">
        </div>
        <div class="content">
          <div class="header">Matt Giampietro</div>
        </div>
        <div class="extra content">
          <span class="right floated">
            Joined in 2013
          </span>
          <span>
            <i class="user icon"></i>
            75 Friends
          </span>
        </div>
      </div>
      
      <div class="card">
        <div class="image">
          <img src="https://www.drogariaminasbrasil.com.br/media/product/1aa/papel-higienico-personal-jasmin-30-metros-com-04-rolos-e10.jpg">
        </div>
        <div class="content">
          <div class="header">Molly</div>
        </div>
        <div class="extra content">
          <span class="right floated">
            Joined in 2011
          </span>
          <span>
            <i class="user icon"></i>
            35 Friends
          </span>
        </div>
      </div>


      <div class="card">
        <div class="image">
          <img src="https://www.drogariaminasbrasil.com.br/media/product/1aa/papel-higienico-personal-jasmin-30-metros-com-04-rolos-e10.jpg">
        </div>
        <div class="content">
          <div class="header">Elyse</div>
          
        </div>
        <div class="extra content">
          <span class="right floated">
            Joined in 2014
          </span>
          <span>
            <i class="user icon"></i>
            151 Friends
          </span>
    </div>
    </div>
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