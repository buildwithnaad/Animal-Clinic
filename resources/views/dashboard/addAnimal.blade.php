@extends('layouts.dashboard')
@section('title', 'Animais')
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
                        <h4 class="page-title mt-4">Animals</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <x-notification />
            <!-- end row -->
            <link href="{{ url('assets/dashboard/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <link href="{{ url('assets/dashboard/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <link href="{{ url('assets/dashboard/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <link href="{{ url('assets/dashboard/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}"
                rel="stylesheet" type="text/css" />
            <script src="{{ url('assets/dashboard/libs/pdfmake/build/pdfmake.min.js') }}"></script>
            <script src="{{ url('assets/dashboard/libs/pdfmake/build/vfs_fonts.js') }}"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

            <div class="card-body">
                <button type="button" class="btn btn-success my-2" id="newSaleBtn">New Animal for Sale</button>

                <div class="form-group">
                    <form action="{{ route('animalSales.store') }}" method="POST" class="my-3" id="formNewSale"
                        style="display:none;" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required
                                    placeholder="Animal name">
                            </div>
                            <div class="col-md-3">
                                <label>Type</label>
                                <input type="text" class="form-control" name="type" required
                                    placeholder="Animal type">
                            </div>
                            <div class="col-md-2">
                                <label>Age</label>
                                <input type="text" class="form-control" name="age" required placeholder="Animal age">
                            </div>
                            <div class="col-md-2">
                                <label>Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="Unsold">Unsold</option>
                                    <option value="Sold">Sold</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label>Price</label>
                                <input type="number" step="0.01" name="price" class="form-control" required
                                    placeholder="Price">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="2" placeholder="Animal description..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-3 mt-2">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Add</button>
                        <button type="button" class="btn btn-danger mt-3" id="cancelNewSale">Cancel</button>
                    </form>

                </div>
                {{-- <div class="">
                    <button type="button" id="novoAnimal" class="btn btn-success my-1">New</button>
                </div> --}}
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Type</th>
                            <th>Age</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales as $sale)
                            <tr>
                                <td>{{ $sale->name }}</td>
                                <td>
                                    @if ($sale->image)
                                        <img src="{{ asset($sale->image) }}" alt="Animal Image" height="40px"
                                            width="60px" style="object-fit: cover;">
                                    @else
                                        <span class="text-muted">No image</span>
                                    @endif
                                </td>

                                <td>{{ $sale->type }}</td>
                                <td>{{ $sale->age }}</td>
                                <td>{{ $sale->status }}</td>
                                <td>${{ number_format($sale->price, 2) }}</td>
                                <td>{{ $sale->description }}</td>
                                <td class="d-flex"
                                    style="height: 100% !important; border: none !important; border-top: 1px !important;">
                                    <a href="{{ route('animalSales.edit', $sale->id) }}"
                                        class="btn btn-warning btn-sm mr-2">Edit</a>

                                    <form action="{{ route('animalSales.destroy', $sale->id) }}" method="POST"
                                        onsubmit="return confirm('Delete this animal?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Delete</button>
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
                        <script>
                            document.write(new Date().getFullYear())
                        </script> - Desenvolvido por <strong><a href="https://porfiriodev.vercel.app/"
                                target="_blank">Porfírio</a></strong>
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


    <script>
        $('#obito_data').hide();
        $('#obito_causa').hide();

        $("#novoAnimal").click(function(e) {
            e.preventDefault();
            if ($('#formEditAnimal').is(':visible')) {
                $('#formEditAnimal').hide(100);
            }
            $("#formnovoAnimal").show(200);
            $("#novoAnimal").hide(100);
        });

        $("#cancelNew").click(function(e) {
            e.preventDefault();
            $("#formnovoAnimal").hide(200);
            $("#novoAnimal").show(100);

        });

        $("#deleteAnimal").click(function(e) {
            e.preventDefault();
            $("#formEditAnimal").hide();
            $("#formnovoAnimal").hide();

        });

        $(document).ready(function() {


            $("#flexRadioDefault2").on("change", function() {

                if ($('#flexRadioDefault2').is(':checked')) {
                    console.log('aki')
                    $('#obito_data').show(100);
                    $('#obito_data input').attr("required", true);
                    var now = new Date();
                    var today = new Date().toISOString().substr(0, 10);
                    $('#obito_data input').val(today);
                    $('#obito_causa').show(100);
                    $('#obito_causa textarea').attr("required", true);
                }
            });
            $("#flexRadioDefault1").on("change", function() {

                if ($('#flexRadioDefault1').is(':checked')) {
                    console.log('aki')
                    $('#obito_data').hide(100);
                    $('#obito_data input').removeAttr("required").val('');
                    $('#obito_causa').hide(100);
                    $('#obito_causa textarea').removeAttr("required").val('');
                }
            });
        })
    </script>

    <script src="{{ url('assets/dashboard/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Sweet alert init js-->
    <script src="{{ url('assets/dashboard/js/pages/sweet-alerts.init.js') }}"></script>
    @push('script')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const newSaleBtn = document.getElementById("newSaleBtn");
                const formNewSale = document.getElementById("formNewSale");
                const cancelNewSale = document.getElementById("cancelNewSale");

                newSaleBtn.addEventListener("click", function() {
                    formNewSale.style.display = "block";
                    newSaleBtn.style.display = "none";
                });

                cancelNewSale.addEventListener("click", function() {
                    formNewSale.style.display = "none";
                    newSaleBtn.style.display = "inline-block";
                });
            });
        </script>
    @endpush

@endsection
