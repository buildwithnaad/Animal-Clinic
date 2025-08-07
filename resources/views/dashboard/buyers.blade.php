@extends('layouts.dashboard')
@section('title', 'Clients')
@section('dash-body')
           <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->


            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                    <h4 class="page-title mt-4">Adoptions</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <!-- end row -->
                        <link href="{{url('assets/dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                        <link href="{{url('assets/dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                        <link href="{{url('assets/dashboard/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                        <link href="{{url('assets/dashboard/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                        <script src="{{url('assets/dashboard/libs/pdfmake/build/pdfmake.min.js')}}"></script>
                        <script src="{{url('assets/dashboard/libs/pdfmake/build/vfs_fonts.js')}}"></script>
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
                        crossorigin="anonymous"></script>

                        <div class="card-body">
                        <div class="form-group">
                            <form role="form" action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data" id="formnovoCliente" autocomplete="on" style="display: none;">
                                @csrf
                                    <div class="column">
                                        <div class="col-md-12 col-12">
                                            <h4>Adoptions</h4>
                                            <input type="hidden" name="status" value="Ativo">
                                            <div class="col-md-3 d-flex justify-content-between">
                                                <div class="form-check mr-3 ml-2 mt-1">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    CPF
                                                </label>
                                                </div>
                                                <div class="form-check mr-5 mt-1">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        CNPJ
                                                    </label>
                                                </div>
                                                <div class="" id="cpf" >
                                                <input type="text" class="form-control cpf" name="cpf" placeholder="___.___.___-__" value=""  >
                                                </div>
                                                <div class="" id="cnpj" >
                                                <input type="text" class="form-control cnpj" name="cnpj" placeholder="__.___.___/____-__" value=""  >
                                                </div>
                                            </div>

                                            <div class="col-md-12 d-flex my-1">
                                                <div id="nome" class="col-md-6">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="nome" placeholder="Enter the Name" value="">
                                                </div>
                                                <div id="data_nascimento" class="col-md-3">
                                                    <label>Date of Birth</label>
                                                    <input type="date" class="form-control" name="data_nascimento" placeholder="Insira a data to nascimento" value="">
                                                </div>
                                                <div id="razao_social" class="col-md-6">
                                                    <label>Company Name</label>
                                                    <input type="text" class="form-control" name="razao_social" placeholder="Insira a razão social" value="">
                                                </div>
                                                <div id="nome_fantasia" class="col-md-6">
                                                    <label>Trade Name</label>
                                                    <input type="text" class="form-control" name="nome_fantasia" placeholder="Enter the Name fantasia" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 d-flex my-1">
                                                <div id="endereco" class="col-md-6">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="endereco" placeholder="Enter the Address" value="">
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-success my-1 mr-2" name="addCliente" value="adicionarCliente">Add</button>
                                            <button type="button" class="btn btn-danger my-1" id="cancelNew" name="cancelNew" value="cancelNew">Cancel</button>
                                        </div>
                                    </div>
                            </form>



                            </div>

                            <div class="">
                                <button type="button" id="novoCliente" class="btn btn-success my-1">New</button>
                            </div>



                                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Animal</th>
        <th>Price</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    @foreach ($adoptions as $adoption)
        <tr>
            <td>{{ $adoption->id }}</td>
            <td>{{ $adoption->full_name }}</td>
            <td>{{ $adoption->email }}</td>
            <td>{{ $adoption->phone }}</td>
            <td>{{ $adoption->animal_name }}</td>
            <td>Rs {{ number_format($adoption->animal_price) }}</td>
            <td>{{ Str::limit($adoption->address, 50) }}</td>
            <td class="d-flex justify-content-end">

                {{-- Reply Button --}}
                <a href="mailto:{{ $adoption->email }}" class="btn btn-primary mx-1" title="Reply via Email">
                    <i class="fas fa-reply"></i>
                </a>

                {{-- Delete Button --}}
                <form action="{{ route('adoption.destroy', $adoption->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this adoption?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" title="Delete">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>

            </td>
        </tr>
    @endforeach
</tbody>

                                        </table>

                                    </div> <!-- end card body-->

                    </div><!--  container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="text-md-right justify-content-end d-none d-sm-block">
                                    <script>document.write(new Date().getFullYear())</script> - Developed By <strong><a href="" target="_blank">Naad Ali</a></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

@endsection
