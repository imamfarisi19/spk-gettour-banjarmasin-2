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
            <option value="Departement Store">
            <option value="Gereja">
            <option value="Masjid">
            <option value="Restoran Non Banjar">
            <option value="Tempat Bermain Anak">
            <option value="Taman">
            <option value="Taman Bermain Air">
          </datalist>
          <br>

          <label for="kelurahan" class="form-label">Kelurahan Sekarang : </label>
          <input class="form-control" style="color: black" list="kelurahanList" id="kelurahan" name="kelurahan" placeholder="Ketikan untuk mencari...">
          <datalist id="kelurahanList">
            <option value="Basirih">
            <option value="Belitung Selatan">
            <option value="Belitung Utara">
            <option value="Kuin Cerucuk">
            <option value="Kuin Selatan">
            <option value="Pelambuan">
            <option value="Telaga Biru">
            <option value="Telawang">
            <option value="Teluk Tiram">
            <option value="Basirih Selatan">
            <option value="Kelayan Barat">
            <option value="Kelayan Dalam">
            <option value="Kelayan Tengah">
            <option value="Kelayan Timur">
            <option value="Kelayan Selatan">
            <option value="Mantuil">
            <option value="Murung Raya">
            <option value="Pekauman">
            <option value="Pemurus Baru">
            <option value="Pemurus Dalam">
            <option value="Tanjung Pagar">
            <option value="Antasan Besar">
            <option value="Tanjung Pagar">
            <option value="Antasan Besar">
            <option value="Gadang">
            <option value="Kertak Baru Ilir">
            <option value="Kertak Baru Ulu">
            <option value="Kelayan Luar">
            <option value="Mawar">
            <option value="Melayu">
            <option value="Pasar Lama">
            <option value="Pekapuran Laut">
            <option value="Seberang Masjid">
            <option value="Sungai Baru">
            <option value="Teluk Dalam">
            <option value="Benua Anyar">
            <option value="Karang Mekar">
            <option value="Kebun Bunga">
            <option value="Kuripan">
            <option value="Pekapuran Raya">
            <option value="Pemurus Luar">
            <option value="Pengambangan">
            <option value="Sungai Bilu">
            <option value="Sungai Lulut">
            <option value="Alalak Utara">
            <option value="Alalak Tengah">
            <option value="Alalak Selatan">
            <option value="Antasan Kecil Timur">
            <option value="Kuin Utara">
            <option value="Pangeran">
            <option value="Sungai Andai">
            <option value="Sungai Jingah">
            <option value="Sungai Miai">
            <option value="Sungai Mufti">
          </datalist>
          <br>

          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>