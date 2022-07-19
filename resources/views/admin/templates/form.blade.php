<section class="py-0">
  <!--/.bg-holder-->
  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form method="post" action="{{route('tempatWisata')}}">
          {{ @csrf_field() }}
          <span>Nama</span>
          <input type="text" id="tempatWisataNama" name="tempatWisataNama" class="form-control">
          <br>
          <span>Link titik google map</span>
          <input type="text" id="tempatWisataLink" name="tempatWisataLink" class="form-control">
          <br>
          <label for="tempatWisataKategori" class="form-label">kategori wisata : </label>
          <br>
          <select class="form-select" style="color: black" name="tempatWisataKategori" id="tempatWisataKategori">
            <option disabled>Kategori Wisata</option>
            <option value="13" selected>Religi</option>
            <option value="14">Kuliner Khas Banjar</option>
            <option value="15">Taman Bermain</option>
          </select>
          <br>
          <span>Kelurahan</span>
          <input type="text" id="tempatWisataKelurahan" name="tempatWisataKelurahan" class="form-control">
          <br>
          <span>Latitude</span>
          <input type="number" id="tempatWisataLatitude" name="tempatWisataLatitude" class="form-control">
          <br>
          <span>Longitude</span>
          <input type="number" id="tempatWisataLongitude" name="tempatWisataLongitude" class="form-control">
          <br>
          <label for="tempatWisataDeskripsi">Deskripsi</label>
          <br>
          <textarea id="tempatWisataDeskripsi" name="tempatWisataDeskripsi" rows="3" cols="55">
          </textarea>
          <br>
          <br>
          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>