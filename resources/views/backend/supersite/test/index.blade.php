@extends('backend.supersite.layouts.master')
@section('title', 'This is page title')
@section('css')
    <link rel="stylesheet" href="{{asset('./backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('./backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('js')
    <script src="{{asset('./backend/assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('./backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('./backend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('./backend/assets/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('./backend/assets/dist/js/demo.js')}}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Key</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data['rows'] as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->key }}</td>
                            <td>
                                @if($row->status == 'publish')
                                    <span class="text text-success">Publish</span>
                                @else
                                    <span class="text text-danger">Unpublish</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="#">View</a>
                                <a class="btn btn-info btn-sm" href="#">Edit</a>
                                <a class="btn btn-danger btn-sm" href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
