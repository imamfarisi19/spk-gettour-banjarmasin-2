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
          <input class="form-control" style="color: black" list="kategoriList" id="kategori" name="kategori" placeholder="Ketikan untuk mencari...">
          <datalist id="kategoriList">
            <option value="Religi">
            <option value="Kuliner Khas Banjar">
            <option value="Taman Bermain">
          </datalist>
          <br>

          <label for="kecamatan" class="form-label">Kecamatan Sekarang : </label>
          <input class="form-control" style="color: black" list="kecamatanList" id="kecamatan" name="kecamatan" placeholder="Ketikan untuk mencari...">
          <datalist id="kecamatanList">
            <option value="Banjarmasin Barat">
            <option value="Banjarmasin Selatan">
            <option value="Banjarmasin Tengah">
            <option value="Banjarmasin Timur">
            <option value="Banjarmasin Utara">
          </datalist>
          <br>

          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>