<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')
        <!-- ---------------------- -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Sisa Cuti</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Sisa Cuti</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="{{ route('data-cuti') }}" class="btn btn-success">Kembali</i></a>
                        </div>
                        {{-- <div class="card-tools mr-2">
                            <div class="dropdown show">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Sort
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('ambil-cuti') }}">Cuti > 1</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nomor</th>
                                <th>Nomor Induk</th>
                                <th>Nama</th>
                                <th>Sisa Cuti</th>
                                {{-- <th>Keterangan</th>
                                <th>Aksi</th> --}}
                            </tr>
                            @foreach ($dtCuti as $index => $item)
                                <tr>
                                    <td>{{ $index + $dtCuti->firstItem() }}</td>
                                    <td>{{ $item->pegawai->no_induk }}</td>
                                    <td>{{ $item->pegawai->nama }}</td>
                                    {{-- <td>{{ date('d-m-Y', strtotime($item->tgl_cuti)) }}</td> --}}
                                    <td>{{ $item->sisa_cuti }}</td>
                                    {{-- <td>{{ $item->keterangan }}</td> --}}
                                    {{-- <td>
                                        <a href="{{ url('edit-cuti', $item->id) }}"><i class="fas fa-edit"></i></a>
                                        |
                                        <a href="{{ url('delete-cuti', $item->id) }}"><i class="fas fa-trash-alt"
                                                style="color: red"></i></a>
                                    </td> --}}
                                </tr>
                            @endforeach

                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $dtCuti->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    @include('Template.script')
    @include('sweetalert::alert')
</body>

</html>
