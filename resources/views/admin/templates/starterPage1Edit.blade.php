<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ubah Kecamatan</h1>
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
                    @include('admin.templates.form1Edit')
                    <br>
                    <table class="table table-striped table-sm table-responsive">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">nama</th>
                                <th scope="col">latitude</th>
                                <th scope="col">longitude</th>
                                <th scope="col">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kecamatan as $val)
                            <tr>
                                <th scope="row">{{$val->id}}</th>
                                <td>{{$val->nama}}</td>
                                <td>{{$val->latitude}}</td>
                                <td>{{$val->longitude}}</td>
                                <td>
                                    <a href="{{ url('ubahKecamatan',$val->id) }}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{ url('hapusKecamatan',$val->id) }}"><i class="fas fa-trash-alt" style="color:red"></i></a>
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

<!-- <form method="post" action="{{route('hapusKecamatan')}}">
                                        {{ @csrf_field() }}
                                        <button type="submit" class="btn btn-danger">hapus</button>
                                    </form> -->