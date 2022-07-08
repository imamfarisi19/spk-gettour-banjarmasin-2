<section class="py-0">
  <div class="bg-holder d-none d-md-block" style="background-image:url('rhea/public/assets/img/illustrations/form.png');background-position:right bottom;background-size:auto;">
  </div>
  <!--/.bg-holder-->

  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form method="post" action="{{route('hasil')}}">
          {{ @csrf_field() }}

          <label for="kategori" class="form-label">Kategori Wisata : </label>
          <select class="form-select" style="color: black" name="kategori" id="kategori">
            <option disabled>Pilih Kategori</option>
            <option value="Religi">Religi</option>
            <option value="Kuliner Khas Banjar">Kuliner Khas Banjar</option>
            <option value="Taman Bermain">Taman Bermain</option>
          </select>
          <br>
          
          <label for="jarak" class="form-label">Jarak dari kecamatan sekarang : </label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jarak" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1"><= 5,9 KM</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jarak" id="inlineRadio2" value="2" checked>
            <label class="form-check-label" for="inlineRadio2">6 - 15,9 KM</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="jarak" id="inlineRadio3" value="3">
            <label class="form-check-label" for="inlineRadio3">>= 16 KM</label>
          </div>
          <br><br>

          <label for="area parkir" class="form-label">Area Parkir : </label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="area parkir" id="inlineRadio4" value="1">
            <label class="form-check-label" for="inlineRadio4">Tidak Ada Area Parkir</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="area parkir" id="inlineRadio5" value="2" checked>
            <label class="form-check-label" for="inlineRadio5">Bisa Parkir Sepeda Motor</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="area parkir" id="inlineRadio6" value="3">
            <label class="form-check-label" for="inlineRadio6">Bisa Parkir Mobil</label>
          </div>

          <label for="kelurahan" class="form-label">Area parkir : </label>
          <input class="form-control" style="color: black" list="kelurahanList" id="kelurahan" placeholder="Ketikan untuk mencari...">
          <datalist id="kelurahanList">
            <option value="Bisa parkir mobil">
            <option value="Bisa parkir sepeda motor">
            <option value="Tidak ada area">
          </datalist>
          <br>

          <label for="kriteriaKhusus1" class="form-label">{{ $a }} : </label>
          <input class="form-control" style="color: black" list="kriteriaKhusus1List" id="kriteriaKhusus1" placeholder="Ketikan untuk mencari...">
          <datalist id="kriteriaKhusus1List">
            <option value="sangat penting">
            <option value="mungkin penting">
            <option value="kurang penting">
          </datalist>
          <br>

          <label for="kriteriaKhusus2" class="form-label">{{ $b }} : </label>
          <input class="form-control" style="color: black" list="kriteriaKhusus2List" id="kriteriaKhusus2" placeholder="Ketikan untuk mencari...">
          <datalist id="kriteriaKhusus2List">
            <option value="sangat penting">
            <option value="mungkin penting">
            <option value="kurang penting">
          </datalist>
          <br>

          <label for="kriteriaKhusus3" class="form-label">{{ $c }} : </label>
          <input class="form-control" style="color: black" list="kriteriaKhusus3List" id="kriteriaKhusus3" placeholder="Ketikan untuk mencari...">
          <datalist id="kriteriaKhusus3List">
            <option value="sangat penting">
            <option value="mungkin penting">
            <option value="kurang penting">
          </datalist>
          <br>

          <input type="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
  </div>
</section>