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
                                    <h4 class="page-title mt-4">Animais</h4>
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
        <form role="form" action="{{ route('animais.store') }}" method="POST" enctype="multipart/form-data" id="formnovoAnimal" autocomplete="on" style="display: none;">                                 
            @csrf                                 
            <div class="column">                                     
                <div class="col-md-12 col-12 justify-content-center">                                         
                    <h4>New Animal</h4>                                             
                    <div class="col-md-12 d-flex my-3">                                                 
                        <div id="nome" class="col-md-4">                                                     
                            <label>Name</label>                                                     
                            <input type="text" required class="form-control" name="animal_nome" placeholder="Enter the animal's name" value="">                                                 
                        </div>                                                 
                        <div id="chip" class="col-md-3">                                                     
                            <label>Chip Number</label>                                                     
                            <input type="text" required class="form-control" name="chip" placeholder="Enter the chip number" value="">                                                 
                        </div>                                                 
                        <div id="tipo" class="col-md-3">                                                     
                            <label>Animal Type</label>                                                     
                            <select class='form-control select2' name='tipo' required>                                                         
                                <option value="" selected>Select...</option>                                                         
                                <option value="Felino" >Feline</option>                                                         
                                <option value="Canino" >Canine</option>                                                         
                                <option value="Equino" >Equine</option>                                                         
                                <option value="Caprino" >Caprine</option>                                                         
                                <option value="Bovino" >Bovine</option>                                                         
                                <option value="Ave" >Bird</option>                                                         
                                <option value="Reptil" >Reptile</option>                                                     
                            </select>                                                 
                        </div>                                             
                    </div>                                             
                    <div class="col-md-12 d-flex my-3">                                                 
                        <div id="raca" class="col-md-4">                                                     
                            <label>Breed</label>                                                     
                            <input required type="text" class="form-control" name="raca" placeholder="Enter the animal's breed" value="">                                                 
                        </div>                                                 
                        <div id="porte" class="col-md-3">                                                     
                            <label>Size</label>                                                     
                            <input required type="text" class="form-control" name="porte" placeholder="Enter the animal's size" value="">                                                 
                        </div>                                                 
                        <div id="porte" class="col-md-3">                                                     
                            <label>Approximate Age</label>                                                     
                            <input required type="text" class="form-control" name="idade" placeholder="Ex: 5 years" value="">                                                 
                        </div>                                              
                    </div>                                             
                    <div class="col-md-12 d-flex my-3 align-items-center" >                                                 
                        <h5 class="ml-2 mt-2">Deceased?</h5><br>                                                 
                        <div class="form-check mr-3 ml-2 mt-1">                                                     
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>                                                     
                            <label class="form-check-label" for="flexRadioDefault1">                                                         
                                No                                                     
                            </label>                                                 
                        </div>                                                 
                        <div class="form-check mr-5 mt-1">                                                     
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >                                                     
                            <label class="form-check-label" for="flexRadioDefault2">                                                         
                                Yes                                                     
                            </label>                                                 
                        </div>                                                 
                        <!-- <div id="obito_data" class="col-md-3">                                                     
                            <label>Date of Death</label>                                                     
                            <input type="date" class="form-control" name="obito_data" placeholder="Enter the date of death">                                                 
                        </div> -->                                             
                    </div>                                             
                    <div class="col-md-6 d-flex my-3">                                                 
                        <div id="obito_data" class="col-md-4">                                                     
                            <label>Date of Death</label>                                                     
                            <input type="date" class="form-control" name="obito_data" placeholder="Enter the date of death">                                                 
                        </div>                                             
                    </div>                                             
                    <div class="col-md-6 d-flex my-3">                                                 
                        <div class="col-md-3" id="obito_causa">                                                     
                            <textarea style="width:470px;" type="text" class="form-control" name="obito_causa" placeholder="Enter the reason for death"></textarea>                                                 
                        </div>                                             
                    </div>                                           
                    <div class="d-flex justify-content-start">                                             
                        <button type="submit" class="btn btn-success my-1 mr-2" name="addAnimal" value="adicionarAnimal">Add</button>                                             
                        <button type="button" class="btn btn-danger my-1" id="cancelNew" name="cancelNew" value="cancelNew">Cancel</button>                                          
                    </div>                                     
                </div>                             
        </form>                              
    </div>                              
    <div class="">                                 
        <button type="button" id="novoAnimal" class="btn btn-success my-1">New</button>                             
    </div>                                            
    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">                                             
        <thead>                                                 
            <tr>                                                     
                <th>ID</th>                                                     
                <th>Name</th>                                                     
                <th>Chip Number</th>                                                     
                <th>Type</th>                                                     
                <th>Size</th>                                                     
                <th>Breed</th>                                                     
                <th>Age</th>                                                     
                <th>Deceased?</th>                                                     
                <th></th>                                                 
            </tr>                                             
        </thead>                                             
        <tbody>                                             
        @foreach ($animals as $animal)                                                 
            <tr>                                                     
                <td>{{$animal->id}}</td>                                                      
                <td>{{$animal->animal_nome}}</td>                                                      
                <td>{{$animal->chip}}</td>                                                      
                <td>{{$animal->tipo}}</td>                                                      
                <td>{{$animal->porte}}</td>                                                      
                <td>{{$animal->raca}}</td>                                                      
                <td>{{preg_replace('/[^0-9]/','',$animal->idade)}}</td>                                                      
                @if($animal->obito_data)                                                     
                <!-- <td>{{$animal->obito_data}}</td> -->                                                     
                <td><span style='font-size:20px; color:green'>&#10004;</span></td>                                                     
                @else                                                     
                <td><span style='font-size:20px; color:red'>&#10006;</span></td>                                                     
                @endif                                                     
                <td class="d-flex justify-content-end">                                                      
                    <a href="{{ route('animais.edit', $animal->id) }}" class="btn btn-warning mx-1" ><i class="fas fa-pencil-alt"></i></a>                                                          
                    <form action="{{ route('animais.destroy', $animal->id)}}" method="POST" onsubmit="return confirm('Do you want to delete this animal?');">                                                              
                        @csrf                                                             
                        @method('DELETE')                                                              
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>                                                      
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
                                    <script>document.write(new Date().getFullYear())</script> - Desenvolvido por <strong><a href="https://porfiriodev.vercel.app/" target="_blank">Porfírio</a></strong>
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

                $("#novoAnimal").click(function(e){
                    e.preventDefault();
                    if($('#formEditAnimal').is(':visible')){
                        $('#formEditAnimal').hide(100);
                    }
                    $("#formnovoAnimal").show(200);
                    $("#novoAnimal").hide(100);
                });

                $("#cancelNew").click(function(e){
                        e.preventDefault();
                        $("#formnovoAnimal").hide(200);
                        $("#novoAnimal").show(100);

                });

                    $("#deleteAnimal").click(function(e){
                        e.preventDefault();
                        $("#formEditAnimal").hide();
                        $("#formnovoAnimal").hide();

                });

            $(document).ready(function() {


                $("#flexRadioDefault2").on( "change", function() {

                    if($('#flexRadioDefault2').is(':checked')){
                        console.log('aki')
                        $('#obito_data').show(100);
                        $('#obito_data input').attr("required",true);
                        var now = new Date();
                        var today = new Date().toISOString().substr(0, 10);
                        $('#obito_data input').val(today);
                        $('#obito_causa').show(100);
                        $('#obito_causa textarea').attr("required",true);
                    }
                });
                $("#flexRadioDefault1").on( "change", function() {

                    if($('#flexRadioDefault1').is(':checked')){
                        console.log('aki')
                        $('#obito_data').hide(100);
                        $('#obito_data input').removeAttr("required").val('');
                        $('#obito_causa').hide(100);
                        $('#obito_causa textarea').removeAttr("required").val('');
                    }
                });
            })
            </script>

            <script src="{{url('assets/dashboard/libs/sweetalert2/sweetalert2.min.js')}}"></script>

            <!-- Sweet alert init js-->
            <script src="{{url('assets/dashboard/js/pages/sweet-alerts.init.js')}}"></script>
@endsection
