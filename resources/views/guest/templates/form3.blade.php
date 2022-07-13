<section class="py-0">

  <!--/.bg-holder-->

  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-2">
      <div class="col-md-7 col-lg-12 text-center text-md-start py-2">
        <iframe width="100%" height="380px" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDPzPiD9U3YSEDK8eKmc1j5n0bubvgMozw
          &origin=-3.3150176337889925, 114.59254571548408
          &destination=-3.307391455554714, 114.60430451890048">

        </iframe>
      </div>
    </div>
  </div>

  <div class="container position-relative">
    <div class="bg-holder d-none d-md-block" style="background-image:url('rhea/public/assets/img/illustrations/form.png');background-position:right;background-size:auto;">
    </div>
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-8 text-center text-md-start py-8">
        @foreach($tempat as $value)
        
        <br>
        <span>{{$loop->iteration}}
          @foreach($value as $val)
          <a> {{$val->nama}}</a>
        </span>
        <br>
        @endforeach
        @endforeach

      </div>
    </div>
  </div>

</section>