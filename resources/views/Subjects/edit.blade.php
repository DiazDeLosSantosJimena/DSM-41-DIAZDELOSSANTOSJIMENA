@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Asignatura Editar</h1>
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
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Asignatura</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('subjects/' .$subjects->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <label> Nombre:</label>
                <input class="form-control" type="text" name="name" id="name"  value="{{$subjects->name}}">
                <label> Descripción:</label>
                <input class="form-control" type="text" name="description" id="description" value="{{$subjects->description}}">
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/subjects" >Cancelar</a>
                    <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')