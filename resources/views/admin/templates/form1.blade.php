<section class="py-0">
  <!--/.bg-holder-->
  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form method="post" action="{{ route('tambahKecamatan') }}">
          {{ @csrf_field() }}
          <span>Nama Kecamatan</span>
          <input type="text" id="kecamatanNama" name="kecamatanNama" class="form-control">
          <br>
          <span>Latitude</span>
          <input type="number" id="kecamatanLatitude" name="kecamatanLatitude" class="form-control">
          <br>
          <span>Longitude</span>
          <input type="number" id="kecamatanLongitude" name="kecamatanLongitude" class="form-control">
          <br>
          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>