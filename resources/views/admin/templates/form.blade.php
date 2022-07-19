<section class="py-0">
  <!--/.bg-holder-->
  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form method="post" action="{{route('tempatWisata')}}">
          {{ @csrf_field() }}

          <input type="text" id="tempatWisatNama" name="tempatWisatNama" class="form-control">
          <br>
          <input type="text" id="tempatWisatNama" name="tempatWisatNama" class="form-control">
          <br>
          <input type="text" id="tempatWisatNama" name="tempatWisatNama" class="form-control">
          <br>
          <input type="text" id="tempatWisatNama" name="tempatWisatNama" class="form-control">
          <br>
          <input type="text" id="tempatWisatNama" name="tempatWisatNama" class="form-control">
          <br>
          <input type="text" id="tempatWisatNama" name="tempatWisatNama" class="form-control">
          <br>
          <label for="jarak" class="form-label">Jarak Ke Tempat Wisata : </label>
          <select class="form-select" style="color: black" name="jarak" id="jarak">
            <option disabled>Seberapa jauh jarak ke tempat wisata yang anda inginkan</option>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
          </select>
          <br>

          <label for="areaParkir" class="form-label">Area Parkir : </label>
          <select class="form-select" style="color: black" name="areaParkir" id="areaParkir">
            <option disabled>Bagaimana area parkir yang anda perlukan</option>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
          </select>
          <br>

          <label for="kriteriaKhusus1" class="form-label"> : </label>
          <select class="form-select" style="color: black" name="kriteriaKhusus1" id="kriteriaKhusus1">
            <option disabled>Seberapa perlu kriteria ini bagi anda</option>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
          </select>
          <br>

          <label for="kriteriaKhusus2" class="form-label"> : </label>
          <select class="form-select" style="color: black" name="kriteriaKhusus2" id="kriteriaKhusus2">
            <option disabled>Seberapa perlu kriteria ini bagi anda</option>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
          </select>
          <br>

          <label for="kriteriaKhusus3" class="form-label"> : </label>
          <select class="form-select" style="color: black" name="kriteriaKhusus3" id="kriteriaKhusus3">
            <option disabled>Seberapa perlu kriteria ini bagi anda</option>
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
          </select>
          <br>
          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>