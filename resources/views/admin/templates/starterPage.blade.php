<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tempat Wisata</h1>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-6">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <table class="table table-striped table-sm table-responsive">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">nama</th>
                                <th scope="col">aktif</th>
                                <th scope="col">peta</th>
                                <th scope="col">kategori Wisata</th>
                                <th scope="col">kelurahan</th>
                                <th scope="col">latitude</th>
                                <th scope="col">longitude</th>
                                <th scope="col">deskripsi</th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($s as $value)
                            <tr>
                                <th scope="row">{{$value->id}}</th>
                                <td style="word-wrap: break-word;min-width: 60px;max-width: 60px;">{{$value->nama}}</td>
                                <td>{{$value->isAktif}}</td>
                                <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">{{$value->linkInternet}}</td>
                                <td>{{$value->kategoriWisataId}}</td>
                                <td>{{$value->kelurahanId}}</td>
                                <td style="word-wrap: break-word;min-width: 60px;max-width: 60px;">{{$value->latitude}}</td>
                                <td style="word-wrap: break-word;min-width: 60px;max-width: 60px;">{{$value->longitude}}</td>
                                <td>{{$value->deskripsi}}</td>
                                <td>
                                    <div class="d-grid gap-4">
                                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">aktivasi</button>
                                        <button class="btn btn-outline-success" type="button">tambah</button>
                                        <button class="btn btn-outline-warning" type="button">ubah</button>
                                        <button class="btn btn-outline-danger" type="button">hapus</button>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
                <!-- /.col-md-6 -->
                <div class="col-3">

                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>