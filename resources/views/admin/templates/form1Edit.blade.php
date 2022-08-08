<section class="py-0">
  <!--/.bg-holder-->
  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form method="post" action="{{ url('updateKecamatan', $kec->id) }}">
          {{ @csrf_field() }}
          <span>Nama Kecamatan</span>
          <input type="text" id="nama" name="nama" class="form-control" value="{{ $kec->nama }}">
          <br>
          <span>Latitude</span>
          <input type="number" id="latitude" name="latitude" class="form-control" value="{{ $kec->latitude }}">
          <br>
          <span>Longitude</span>
          <input type="number" id="longitude" name="longitude" class="form-control" value="{{ $kec->longitude }}">
          <br>
          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>