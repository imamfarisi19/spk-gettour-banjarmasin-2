<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="adminBeranda" class="brand-link">
    <span class="brand-text ">Get Tour Administration</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('AdminLTE-3.2.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{route('kecamatan')}}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Kecamatan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('logout')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Log out
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Button trigger modal -->

<!-- Modal kecamatan -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-sm table-responsive">
          <thead class="table-dark">
            <tr>
              <th scope="col">id</th>
              <th scope="col">nama</th>
              <th scope="col">latitude</th>
              <th scope="col">longitude</th>
            </tr>
          </thead>
          <tbody>
            @foreach($k as $value)
            <tr>
              <th scope="row">{{$value->id}}</th>
              <td style="word-wrap: break-word;min-width: 60px;max-width: 60px;">{{$value->nama}}</td>
              <td>{{$value->latitude}}</td>
              <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">{{$value->longitude}}</td>
              <td>
                <div class="d-grid gap-4">
                  <button class="btn btn-outline-primary" type="button">aktivasi</button>
                  <button class="btn btn-outline-success" type="button " data-toggle="modal" data-target="#modalTambah">tambah</button>
                  <button class="btn btn-outline-warning" type="button">ubah</button>
                  <button class="btn btn-outline-danger" type="button">hapus</button>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="modalTambah" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTambah">tambah kecamatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>