<section class="py-0">
  <div class="bg-holder d-none d-md-block" style="background-image:url('rhea/public/assets/img/illustrations/form.png');background-position:right bottom;background-size:auto;">
  </div>
  <!--/.bg-holder-->

  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form method="post" action="{{route('kriteria')}}">
          {{ @csrf_field() }}
          <label for="kategori" class="form-label">Jarak dari kelurahan sekarang : </label>
          <input class="form-control" style="color: black" list="kategoriList" id="kategori" placeholder="Ketikan untuk mencari...">
          <datalist id="kategoriList">
            <option value="Departement Store">
            <option value="Taman">
            <option value="Taman Bermain Air">
          </datalist>
          <br>

          <label for="kelurahan" class="form-label">Area parkir : </label>
          <input class="form-control" style="color: black" list="kelurahanList" id="kelurahan" placeholder="Ketikan untuk mencari...">
          <datalist id="kelurahanList">
            <option value="Basirih">
            <option value="Belitung Selatan">
            <option value="Belitung Utara">
          </datalist>
          <br>

          <label for="kelurahan" class="form-label">Kriteria Khusus 1 : </label>
          <input class="form-control" style="color: black" list="kelurahanList" id="kelurahan" placeholder="Ketikan untuk mencari...">
          <datalist id="kelurahanList">
            <option value="Basirih">
            <option value="Belitung Selatan">
            <option value="Belitung Utara">
          </datalist>
          <br>

          <label for="kelurahan" class="form-label">Kriteria Khusus 2 : </label>
          <input class="form-control" style="color: black" list="kelurahanList" id="kelurahan" placeholder="Ketikan untuk mencari...">
          <datalist id="kelurahanList">
            <option value="Basirih">
            <option value="Belitung Selatan">
            <option value="Belitung Utara">
          </datalist>
          <br>

          <label for="kelurahan" class="form-label">Kriteria Khusus 3 : </label>
          <input class="form-control" style="color: black" list="kelurahanList" id="kelurahan" placeholder="Ketikan untuk mencari...">
          <datalist id="kelurahanList">
            <option value="Basirih">
            <option value="Belitung Selatan">
            <option value="Belitung Utara">
          </datalist>
          <br>

          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>