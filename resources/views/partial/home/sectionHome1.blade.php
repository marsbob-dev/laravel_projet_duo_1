  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>{{$homeCont[0]->paraHome}}</h1>
          <ul>
            <li><i class="{{$compoCont[9]->paraComp}}"></i>{{$homeCont[1]->paraHome}}</li>
            <li><i class="{{$compoCont[9]->paraComp}}"></i>{{$homeCont[2]->paraHome}}</li>
            <li><i class="{{$compoCont[9]->paraComp}}"></i>{{$homeCont[3]->paraHome}}</li>
          </ul>
          <div class="mt-3">
            <a href="#about" class="btn-get-started scrollto">{{$homeCont[4]->paraHome}}</a>
            <a href="" class="btn-get-quote">{{$homeCont[5]->paraHome}}</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->