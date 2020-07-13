@extends('kaizentaishi.layout')

@section('titulo')
    Nikken | {{ $NombreReto }}
@endsection

@section('styles')

@endsection

@section('reto')
    {{ $NombreReto }}
@endsection

@section('kaizen')
<div class="row layout-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">

                </div>
            </div>
            <div class="widget-content widget-content-area text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <img src="{{asset('retos/img/mantenimiento.jpg')}}" width="70%">
                            <b>
                                <h2>
                                    {{ $mensaje }}
                                </h2>
                            </b>
                            <button class="btn btn-gradient-warning btn-rounded mb-4 mr-2" onclick="window.history.back();">Regresar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        swal.queue([{
            type: 'warning',
            title: 'Este reto se encuentra inhabilitado, por ahora solo puede visualizar el Reto Ser Pro',
            allowOutsideClick: false,
        }]);
    </script>
@endsection