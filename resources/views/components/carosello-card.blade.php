<div class="card card mb-5 " style="width: 18rem;">
    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper mySwiper-{{$index}}" 
    thumbs-swiper=".mySwiper2-{{$index}}" space-between="10" navigation="true" >
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
    </swiper-slide>
  </swiper-container>

  <swiper-container class="mySwiper2 mySwiper2-{{$index}}" space-between="10" slides-per-view="4" free-mode="true"
    watch-slides-progress="true">
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
    </swiper-slide>
    <swiper-slide>
      <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
    </swiper-slide>
  </swiper-container>  
    <div class="card-body ">
      <h5 class="card-title text-center">{{$article->titolo}}</h5>
      <hr>
      <p class="card-text ">Categoria: <strong>{{$article->category->name}}</strong></p>
      <p class="card-text text-truncate">{{$article->descrizione}}</p>
      <p class="card-text">€ {{$article->prezzo}}</p>
      
      <div class="card-footer m-3 text-body-secondary">
        Pubblicato il: {{$article->created_at->format('d/m/y')}} <hr> - Autore: {{$article->user->name}}
      </div>
      <a href="{{route('showArticle', compact('article'))}}" class="btn hvr-forward btn-warning">Visualizza Articolo</a>
    </div>
</div>   


