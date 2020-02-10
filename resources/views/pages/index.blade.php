@extends('layouts.app')

@section('count_cart') {{$orders->count() ?? 0}} @endsection

@section('content')

  <main role="main">

    <section>
        <div class="container">


            <div id="pizzaCarousel" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#pizzaCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#pizzaCarousel" data-slide-to="1"></li>
                <li data-target="#pizzaCarousel" data-slide-to="2"></li>
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://man-man.nl/app/uploads/2015/12/wat-eten-we-pizza-header.jpg" alt="Pizza Banner" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="https://loadium.com/wp-content/uploads/2018/04/distributed-load-testing-on-the-cloud-e1533059530267.jpg" alt="Pizza Banner" width="1100" height="500">
                </div>
                <div class="carousel-item">
                  <img src="https://shaker.life/wp-content/uploads/2017/12/genuine-pizza-1100x500.jpg" alt="Pizza Banner" width="1100" height="500">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#pizzaCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#pizzaCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>

            </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          @foreach($products as $product)
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" src="{{asset($product->image)}}">
              <div class="card-body">
                  <h4>{{$product->name}}</h4>
              <p class="card-text">{{$product->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="{{route('basket.add', ['id'=>$product->id])}}" class="btn btn-sm btn-outline-secondary">Buy</a>
                  </div>
                <small>
                 ${{$product->price_dollar}}
                </small>
                </div>
              </div>
            </div>
          </div>
          @endforeach

      </div>
    </div>
  </div>




  </main>

  <footer class="bg-dark">
    <div class="container py-3">
      <p class="float-right">
        <a href="#" class="text-light">Back to top</a>
      </p>
      <p class="text-center text-light"> &copy; PizzaAmorizza</p>
      <p></p>
    </div>
  </footer>

@endsection
