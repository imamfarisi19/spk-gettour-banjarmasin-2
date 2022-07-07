<section class="py-0">
  <div class="bg-holder d-none d-md-block" style="background-image:url('rhea/public/assets/img/illustrations/form.png');background-position:right bottom;background-size:auto;">
  </div>
  <!--/.bg-holder-->

  <div class="container position-relative">
    <div class="row align-items-center min-vh-75 my-lg-4">
      <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
        <form method="post" action="{{route('hasil')}}">
          {{ @csrf_field() }}
          <label for="" class="form-label">Jarak dari kelurahan sekarang : </label>
          <input class="form-control" style="color: black" list="kategoriList" id="kategori" placeholder="Ketikan untuk mencari...">
          <datalist id="kategoriList">
            <option value="<= 5,9 KM">
            <option value="6 - 15,9 KM">
            <option value=">= 16 KM">
          </datalist>
          <br>

          <label for="kelurahan" class="form-label">Area parkir : </label>
          <input class="form-control" style="color: black" list="kelurahanList" id="kelurahan" placeholder="Ketikan untuk mencari...">
          <datalist id="kelurahanList">
            <option value="Tidak ada area parkir">
            <option value="Bisa parkir sepeda motor">
            <option value="Bisa parkir mobil">
          </datalist>
          <br>
          
          @foreach($kriteriaTambahanUntukSaws as $value)
          {{$value->penjelasan}};
          @endforeach

          <label for="kriteriaKhusus1" class="form-label">Kriteria Khusus 1 : </label>
          <input class="form-control" style="color: black" list="kriteriaKhusus1List" id="kriteriaKhusus1" placeholder="Ketikan untuk mencari...">
          <datalist id="kriteriaKhusus1List">
            <option value="sangat penting">
            <option value="mungkin penting">
            <option value="kurang penting">
          </datalist>
          <br>

          <label for="kriteriaKhusus2" class="form-label">Kriteria Khusus 2 : </label>
          <input class="form-control" style="color: black" list="kriteriaKhusus2List" id="kriteriaKhusus2" placeholder="Ketikan untuk mencari...">
          <datalist id="kriteriaKhusus2List">
            <option value="sangat penting">
            <option value="mungkin penting">
            <option value="kurang penting">
          </datalist>
          <br>

          <label for="kriteriaKhusus3" class="form-label">Kriteria Khusus 3 : </label>
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