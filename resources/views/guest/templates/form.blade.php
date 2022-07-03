<section class="py-0">
    <div class="bg-holder d-none d-md-block" style="background-image:url('rhea/public/assets/img/illustrations/form.png');background-position:right bottom;background-size:contain;">
    </div>
    <!--/.bg-holder-->

    <div class="container position-relative">
        <div class="row align-items-center min-vh-75 my-lg-8">
            <div class="col-md-7 col-lg-6 text-center text-md-start py-8">
            <form action="/action_page.php">
            <label for="kategori">Kategori Wisata : </label>
            <br>
            <select name="kategori" id="kategori">
              <option value="1"><= 5,9 km</option>
              <option value="2">6 - 15,9 km</option>
              <option value="3">16 - 30,9 km</option>
              <option value="4">>= 31 km</option>
            </select>
            <br><br>

            <label for="kelurahan">Kelurahan Sekarang : </label>
            <br>
            <select name="kelurahan" id="kelurahan">
              <option value="1">Rp0 - Rp10.000</option>
              <option value="2">Rp11.000 - Rp20.999</option>
              <option value="3">Rp21.000 - Rp50.999</option>
              <option value="4">>= Rp51.000</option>
            </select>
            <br><br>
            
            <input type="submit" class="btn btn-primary" value="Submit">
          </form>
            </div>
        </div>
    </div>
</section>