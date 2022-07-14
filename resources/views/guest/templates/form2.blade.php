<section class="py-0">
  <div class="bg-holder d-none d-md-block" style="background-image:url('rhea/public/assets/img/illustrations/form.png');background-position:right;background-size:auto;">
  </div>
  <!--/.bg-holder-->

  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form method="post" action="{{route('hasil')}}">
          {{ @csrf_field() }}

          <label for="jarak" class="form-label">Jarak Ke Tempat Wisata : </label>
          <select class="form-select" style="color: black" name="jarak" id="jarak">
            <option disabled>Seberapa jauh jarak ke tempat wisata yang anda inginkan</option>
            <option value="1">Dekat</option>
            <option value="2" selected>Sedang</option>
            <option value="3">Jauh</option>
          </select>
          <br>

          <label for="areaParkir" class="form-label">Area Parkir : </label>
          <select class="form-select" style="color: black" name="areaParkir" id="areaParkir">
            <option disabled>Bagaimana area parkir yang anda perlukan</option>
            <option value="1">Tidak ada area parkir</option>
            <option value="2" selected>area parki kecil</option>
            <option value="3">area parkir luas</option>
          </select>
          <br>

          <label for="kriteriaKhusus1" class="form-label">{{ $a }} : </label>
          <select class="form-select" style="color: black" name="kriteriaKhusus1" id="kriteriaKhusus1">
            <option disabled>Seberapa perlu kriteria ini bagi anda</option>
            <option value="1">Sangat penting</option>
            <option value="2" selected>Mungkin penting</option>
            <option value="3">Kurang penting</option>
          </select>
          <br>

          <label for="kriteriaKhusus2" class="form-label">{{ $b }} : </label>
          <select class="form-select" style="color: black" name="kriteriaKhusus2" id="kriteriaKhusus2">
            <option disabled>Seberapa perlu kriteria ini bagi anda</option>
            <option value="1">Sangat penting</option>
            <option value="2" selected>Mungkin penting</option>
            <option value="3">Kurang penting</option>
          </select>
          <br>

          <label for="kriteriaKhusus3" class="form-label">{{ $c }} : </label>
          <select class="form-select" style="color: black" name="kriteriaKhusus3" id="kriteriaKhusus3">
            <option disabled>Seberapa perlu kriteria ini bagi anda</option>
            <option value="1">Sangat penting</option>
            <option value="2" selected>Mungkin penting</option>
            <option value="3">Kurang peting</option>
          </select>
          <br>

          <input type="hidden" class="form-control" value="{{$idKategori}}" id="idKategori" name="idKategori">
          <input type="hidden" class="form-control" value="{{$idKecamatan}}" id="idKecamatan" name="idKecamatan">

          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>