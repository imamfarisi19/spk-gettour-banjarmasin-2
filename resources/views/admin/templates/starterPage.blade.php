<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tempat Wisata</h1>
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
                    @include('admin.templates.form')
                    <br>
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
                                @if($value->isAktif == 1)
                                <td>True</td>
                                @else
                                <td>False</td>
                                @endif
                                <td style="word-wrap: break-word;min-width: 160px;max-width: 160px;">{{$value->linkInternet}}</td>
                                @foreach($w as $valueW)
                                @if ($value->kategori_wisata_id == $valueW->id)
                                <td>{{$valueW->nama}}</td>
                                @endif
                                @endforeach
                                @foreach($r as $valueR)
                                @if ($value->kelurahan_id == $valueR->id)
                                <td>{{$valueR->nama}}</td>
                                @endif
                                @endforeach
                                <td style="word-wrap: break-word;min-width: 60px;max-width: 60px;">{{$value->latitude}}</td>
                                <td style="word-wrap: break-word;min-width: 60px;max-width: 60px;">{{$value->longitude}}</td>
                                <td>{{$value->deskripsi}}</td>
                                <td>
                                    <div class="d-grid gap-4">
                                        <button class="btn btn-outline-primary" type="button">aktivasi</button>
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