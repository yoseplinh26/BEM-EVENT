@extends('admin.layout.main')

@section('plugin-css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css">
@endsection

@section('plugin-js')
    <!-- jQuery -->





    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>
    <!-- Page specific script -->

    

  

    @section('content')
 
    <div class="content-wrapper ">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
    
                        <h1 class="m-0">
    
                            Acara
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                          <li class="breadcrumb-item active">Kategori</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    
    
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
    
                    @if (session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
    
                    <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                            <h3 class="card-title">Form Tambah Acara</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/admin/acara" method="POST" name="contact"  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Tema</label>
                                    <input type="text" name="tema" class="form-control">

        
                                    </div>  
                                    
                                    <div class="form-group">
                                        <label>Kuota</label>
                                    <input type="number" name="kuota" class="form-control">
                                    </div>  

                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="kategori" class="form-control" >

                                            <option value="">--- Pilih Kategori ----</option>
                                            @foreach ($kategori as $kg)                                        
                                            <option value="{{$kg->id}}">{{$kg->category_name}}</option>
                                            @endforeach
                                    
                                        </select>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" ></textarea>
                                    </div>  
        
        

                                    <div class="form-group">
                                        <label>Tanggal Acara</label>
                                        <input type="date" name="tanggal_acara" class="form-control" 
        
                                        >
                                    </div>

                                    <div class="form-group">
                                        <label>Lokasi</label>
                                        <select name="lokasi" class="form-control" >

                                            <option value="">--- Pilih Lokasi ----</option>
                                            <option value="GD 5">GD 5</option>
                                            <option value="GD 6">GD 6</option>
                                            <option value="GD 7">GD 7</option>
                                            <option value="GD 8">GD 8</option>
                                            <option value="GD 9">GD 9</option>
                                            <option value="GSG">GSG</option>
                                            <option value="Auditorium">Auditorium</option>
                                        </select>
                                    </div>
        
                                </div>
                
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>    
                </div>

              
     
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card" >
                            <div class="card-header">List Kategori</div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tema</th>
                                            <th>Kuota</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($acara as $index=> $ac)
                                        <tr>
                                            <td>{{$index++}}</td>
                                            <td>{{$ac->tema}}</td>
                                            <td>{{$ac->kuota}}</td>
                                            <td>{{$ac->deskripsi}}</td>
                                            <td>{{$ac->category_name}}</td>
                                            <td>
                                                <form action="/admin/acara/{{$ac->id}}" method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <input type="hidden" name="id_acara" value="{{$ac->id}}">
                                                    <button 
                                                    onclick="return confirm('Yakin untuk menghapus data ini ?')"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                      
                        </div>


                      
                    </div>
                </div>
            </div>
        </section>
    
     
        
    
    </div>    
    
    </div>  

        
    


 
      
    @endsection