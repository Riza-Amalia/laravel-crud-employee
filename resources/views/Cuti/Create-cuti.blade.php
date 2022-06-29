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
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Cuti</li>
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
                        <h3>Create Data Cuti</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('simpan-cuti') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <select name="pegawai_id" id="pegawai_id" class="form-control select2"
                                    style="width: 100%;">
                                    <option disabled value>Pilih Nomor Induk</option>
                                    @foreach ($peg as $item)
                                        <option value="{{ $item->id }}">{{ $item->no_induk }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" id="tgl_cuti" name="tgl_cuti" class="form-control"
                                    placeholder="Tanggal Cuti">
                            </div>
                            <div class="form-group">
                                <input type="text" id="lama_cuti" name="lama_cuti" class="form-control"
                                    placeholder="Lama Cuti">
                            </div>
                            <div class="form-group">
                                <input type="text" id="sisa_cuti" name="sisa_cuti" class="form-control"
                                    placeholder="Sisa Cuti">
                            </div>
                            <div class="form-group">
                                <input type="text" id="keterangan" name="keterangan" class="form-control"
                                    placeholder="Keterangan">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
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
</body>

</html>
