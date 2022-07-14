<section class="py-0">

  <!--/.bg-holder-->
  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-12 text-center text-md-start py-2">
        @foreach($r as $value)
        <figure class="figure">
          <img src="rhea/public/assets/img/tempat/{{$value->id}}.jpg" class="figure-img img-fluid rounded" alt="image of tourism">
          <figcaption class="figure-caption mid" style="color:black; font-size:24px;">
            <a href="{{$value->linkInternet}}" target="_blank" style="font-size:30px;">Lihat Peta</a>
          </figcaption>
          <figcaption class="figure-caption" style="color:black; font-size:24px;">Deskripsi</figcaption>
          <figcaption class="figure-caption" style="color:black; font-size:18px;">{{$value->deskripsi}}</figcaption>
        </figure>
        @endforeach
      </div>
    </div>
  </div>

</section>