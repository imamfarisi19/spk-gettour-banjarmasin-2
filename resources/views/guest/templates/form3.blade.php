<section class="py-0">

  <!--/.bg-holder-->

  <div class="bg-holder d-none d-md-block" style="background-image:url('rhea/public/assets/img/illustrations/form.png');background-position:right;background-size:auto;">
  </div>

  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-12 text-center text-md-start py-2">

        @foreach($tempatFix as $value)
        <span>{{$loop->iteration}}
          <a href="detail?category={{$value->id}}">
            {{$value->nama}}
          </a>
        </span>
        <br>
        @endforeach

      </div>
    </div>
  </div>

</section>
<input type="hidden" name="tempat" id="" value="">
<!-- <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-2">
      <div class="col-md-7 col-lg-12 text-center text-md-start py-2">
        <iframe width="100%" height="380px" style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyDPzPiD9U3YSEDK8eKmc1j5n0bubvgMozw
          &origin={{$K[0]->latitude}}, {{$K[0]->longitude}}
          &destination={{$tempatFix[0]->latitude}}, {{$tempatFix[0]->longitude}}">
        </iframe>
      </div>
    </div>
  </div> -->