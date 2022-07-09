<section class="py-0">
  <div class="bg-holder d-none d-md-block" style="background-image:url('rhea/public/assets/img/illustrations/form.png');background-position:right bottom;background-size:auto;">
  </div>
  <!--/.bg-holder-->

  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form action="{{route('kriteria')}}" method="post">
          {{ @csrf_field() }}
          <label for="kategori" class="form-label">Kategori Wisata : </label>
          <select class="form-select" style="color: black" name="kategori" id="kategori">
            <option disabled>Pilih Kategori</option>
            <option value="Religi">Religi</option>
            <option value="Kuliner Khas Banjar">Kuliner Khas Banjar</option>
            <option value="Taman Bermain">Taman Bermain</option>
          </select>
          <br>

          <label for="kecamatan" class="form-label">Kecamatan Sekarang : </label>
          <select class="form-select" style="color: black" name="kecamatan" id="kecamatan">
            <option disabled>Pilih Kecamatan</option>
            <option value="Banjarmasin Barat">Banjarmasin Barat</option>
            <option value="Banjarmasin Selatan">Banjarmasin Selatan</option>
            <option value="Banjarmasin Tengah">Banjarmasin Tengah</option>
            <option value="Banjarmasin Timur">Banjarmasin Timur</option>
            <option value="Banjarmasin Utara">Banjarmasin Utara</option>
          </select>
          <br>

          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>