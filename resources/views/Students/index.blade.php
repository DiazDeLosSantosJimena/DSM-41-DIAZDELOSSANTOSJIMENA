@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Estudiantes</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar al estudiante?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Información del estudiante</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/students">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista De Estudiantes</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="students/create"  ><i class="fa-solid fa-layer-group"></i></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Asignatura</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Asignatura</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr>
                                             <td>2</td>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr> 
                                            <td>3</td>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>
                                                
                                            <div class="row col-12">
                                                <div class="col-4">                                                
                                                    <a class="btn btn-success m-3" href="#"  ><i class="fa-regular fa-eye"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a class="btn btn-warning m-3" href="students/{student}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                </div>
                                                <div class="col-4">
                                                    <a type="button" class="btn btn-danger m-3" data-toggle="modal" data-target="#logoutModal"><i class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </div>
                                           
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                    </div>
          
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('layouts.footer')

