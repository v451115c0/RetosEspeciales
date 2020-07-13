@extends('kaizentaishi.layout') <!---- quitar ".test" al pasar a productivo-->

@section('titulo')
    Nikken | Equipo Taishi
@endsection

@section('reto')
    Equipo Taishi
@endsection

@section('kaizenphp1')
<div style="display: none">
    @php
        $num = 1;
        $vpfinal = 0;
        $frontales = 0;
        $nofrontales = 0;
        $nombre = "";
        $pais = "";
        $bandera = "";
        $rango = "";
        $rangoN = "";
        $VpAcumulado = "";
        $VgpAcumulado = "";
        $incorporados = 0;
    @endphp
    @foreach ($response as $row)
        @php
            $num++;
            $vpfinal = $vpfinal + $row->VpTotal;
        @endphp
        @if ($row->lvel == 1)
            @php $frontales++; @endphp
        @else
            @php $nofrontales++; @endphp
        @endif
    @endforeach
    @foreach ($sponsor as $data)
        @php
            $rangoN = $data->Rango;
        @endphp
        {{ $nombre = $data->Nombre }}
        @switch($data->Pais)
            @case('LAT')
                {{ $pais = 'México' }}
                {{ $bandera = 'mexico.png' }}
                @break
            @case('COL')
                {{ $pais = 'Colombia' }}
                {{ $bandera = 'colombia.png' }}
                @break
            @case('CRI')
                {{ $pais = 'Costa Rica' }}
                {{ $bandera = 'costarica.png' }}
                @break
            @case('PAN')
                {{ $pais = 'Panamá' }}
                {{ $bandera = 'panama.png' }}
                @break
            @case('ECU')
                {{ $pais = 'Ecuador' }}
                {{ $bandera = 'ecuador.png' }}
                @break
            @case('PER')
                {{ $pais = 'Perú' }}
                {{ $bandera = 'peru.png' }}
                @break
            @case('SLV')
                {{ $pais = 'El Salvador' }}
                {{ $bandera = 'salvador.png' }}
                @break
            @case('GTM')
                {{ $pais = 'Guatemala' }}
                {{ $bandera = 'guatemala.png' }}
                @break
            @case('CHL')
                {{ $pais = 'Chile' }}
                {{ $bandera = 'chile.png' }}
                @break
        @endswitch
        @switch($data->Rango)
            @case(1)
                {{ $rango = "Directo" }}
                @break
            @case(3)
                {{ $rango = "Ejecutivo" }}
                @break
            @case(5)
                {{ $rango = "Plata" }}
                @break
            @case(6)
                {{ $rango = "ORO" }}
                @break
            @case(7)
                {{ $rango = "Platino" }}
                @break
            @case(8)
                {{ $rango = "Diamante" }}
                @break
            @case(9)
                {{ $rango = "Diamante Real" }}
                @break
        @endswitch
        {{ $rango }}
        {{ $VpAcumulado = $data->VpAcumulado }}
        {{ $VgpAcumulado = $data->VgpAcumulado }}
    @endforeach
</div>
@endsection

@section('kaizen')
<div class="row layout-spacing">
    <div class="col-lg-3">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row"> 
                    <div class="col-md-12 text-black text-center">
                        <p class="pointer" data-toggle="modal" data-target=".bd-example-modal-lg-img">Da clic para consultar las bases aquí</p>
                    </div>           
                </div>
            </div>
            <div class="widget-content widget-content-area text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <a href="javascript:void(0)">
                                <img src="{{asset('retos/img/Taishi_Banner.png')}}" width="75%" data-toggle="modal" data-target=".bd-example-modal-lg-img">
                            </a>
                            <div class="modal fade bd-example-modal-lg bd-example-modal-lg-img" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header graph text-center" style="background-color: #ffc137;">
                                            <button type="button" class="close" style="color: #ffffff;" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body graph-body">
                                            <div class="row">
                                                <div class="col-lg-12 text-center" id="trimestre1">
                                                    <img src="{{asset('retos/img/Taishi_Banner.png')}}" width="100%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                        <h4>{{ $nombre }}</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group col-md-12">
                            <img src="{{asset('retos/img/Taishi_Logo.png')}}" width="100%">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group col-md-12">
                            <p>Pais:</p>
                            <div class="input-group">
                                <input id="" type="text" name="" value="{{ $pais }}" class="form-control-rounded-left form-control" readonly>
                                <div class="input-group-append">
                                    <span class="form-control-rounded-right input-group-text" id="basic-addon1">
                                        <img src="{{asset('retos/img/' . $bandera)}}" width="20px">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <p>Rango:</p>
                            <input id="" type="text" name="" value="{{ $rango }}" class="form-control-rounded form-control" required="" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group col-md-12">
                            <p>VP Acumulado:</p>
                            <input id="VpAcumulado" type="text" name="VpAcumulado" value="{{ number_format($VpAcumulado) }}" class="form-control-rounded form-control" required="" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <p>VGP Acumulado:</p>
                            <input id="VgpAcumulado" type="text" name="VgpAcumulado" value="{{ number_format($VgpAcumulado) }}" class="form-control-rounded form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group col-md-12">
                            <p>Incorporados Frontales:</p>
                            <input id="incdosFrontales" type="text" name="incdosFrontales" value="{{$frontales}}" class="form-control-rounded form-control" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <p>Incorporados de Grupo Personal:</p>
                            <input id="indosGP" type="text" name="indosGP" value="{{$nofrontales}}" class="form-control-rounded form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-group col-md-12">
                            <p>Total VP incorporados Grupo Personal:</p>
                            <input type="text" id="vpFinalpoint" class="form-control-rounded form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="alert alert-success  br-50 mb-4 personal-shadow text-center text-black" role="alert">
    <i class="flaticon-cancel-12 close" data-dismiss="alert"></i>
    @php
        setlocale(LC_TIME, 'es_ES');
        $dia = Date('d');
        $mes = Date('m');
        $meses = ['', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Abril', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        $mes = DateTime::createFromFormat('!m', $mes);
        $mes = strftime("%B", $mes->getTimestamp());
        $mesnum = Date('m');
        $mesnum = str_replace('0', '', $mesnum);
    @endphp
    <strong>Fecha de actualizacion: </strong>{{ $dia }} de {{ $meses[$mesnum] }} a las {{ $lastUpdate }} hora México.
</div>

<div class="row layout-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header text-center">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Genealogía Incorporaciones 2020</h4>
                    </div>                 
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                    <table id="zero-config" class="table table-striped table-hover table-bordered sticky-thead" style="width:100%">
                        <thead>
                            @php
                                $num = 1;
                                $vpfinal = 0;
                            @endphp
                            <tr>
                                <th style="color: gray" class="text-center">Código Incorporado</th>
                                <th style="color: gray" class="text-center">Nombre Incorporado</th>
                                <th style="color: gray" class="text-center">País</th>
                                <th style="color: gray" class="text-center">Rango</th>
                                <th style="color: gray" class="mesvp1">Teléfono</th>
                                <th style="color: gray" class="mesvp1">Correo</th>
                                <th style="color: gray" class="text-center">Fecha incorporación</th>
                                <th style="color: gray" class="mesvp1">VP Enero</th>
                                <th style="color: gray" class="mesvp2">VP Febrero</th>
                                <th style="color: gray" class="mesvp3">VP Marzo</th>
                                <th style="color: gray" class="mesvp4">VP Abril</th>
                                <th style="color: gray" class="mesvp5">VP Mayo</th>
                                <th style="color: gray" class="mesvp6">VP Junio</th>
                                <th style="color: gray" class="mesvp7">VP Julio</th>
                                <th style="color: gray" class="mesvp8">VP Agosto</th>
                                <th style="color: gray" class="mesvp9">VP Septiembre</th>
                                <th style="color: gray" class="mesvp9">VP Octubre</th>
                                <th style="color: gray" class="mesvp9">VP Noviembre</th>
                                <th style="color: gray" class="mesvp9">VP Diciembre</th>
                                <th style="color: gray" class="text-center">VP total 2020</th>
                                <th style="color: gray" class="text-center">Nivel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($response as $row)
                                <span style="display: none">
                                    @switch($row->RangoA)
                                        @case(1)
                                            {{ $rango = "Directo" }}
                                            @break
                                        @case(3)
                                            {{ $rango = "Ejecutivo" }}
                                            @break
                                        @case(5)
                                            {{ $rango = "Plata" }}
                                            @break
                                        @case(6)
                                            {{ $rango = "ORO" }}
                                            @break
                                        @case(7)
                                            {{ $rango = "Platino" }}
                                            @break
                                        @case(8)
                                            {{ $rango = "Diamante" }}
                                            @break
                                        @case(9)
                                            {{ $rango = "Diamante Real" }}
                                            @break
                                    @endswitch
                                    @php
                                        $pais = "";
                                        $bandera = "";
                                    @endphp
                                    @switch($row->Pais)
                                        @case('LAT')
                                            @php $pais = 'México' @endphp
                                            @php $bandera = 'mexico.png '@endphp
                                            @break
                                        @case('COL')
                                            @php $pais = 'Colombia' @endphp
                                            @php $bandera = 'colombia.png' @endphp
                                            @break
                                        @case('CRI')
                                            @php $pais = 'Costa Rica' @endphp
                                            @php $bandera = 'costarica.png' @endphp
                                            @break
                                        @case('PAN')
                                            @php $pais = 'Panamá' @endphp
                                            @php $bandera = 'panama.png' @endphp
                                            @break
                                        @case('ECU')
                                            @php $pais = 'Ecuador' @endphp
                                            @php $bandera = 'ecuador.png' @endphp
                                            @break
                                        @case('PER')
                                            @php $pais = 'Perú' @endphp
                                            @php $bandera = 'peru.png' @endphp
                                            @break
                                        @case('SLV')
                                            @php $pais = 'El Salvador' @endphp
                                            @php $bandera = 'salvador.png' @endphp
                                            @break
                                        @case('GTM')
                                            @php $pais = 'Guatemala'@endphp
                                            @php $bandera = 'guatemala.png' @endphp
                                            @break
                                        @case('CHL')
                                            @php $pais = 'Chile' @endphp
                                            @php $bandera = 'chile.png' @endphp
                                            @break
                                    @endswitch
                                </span>
                                <tr>
                                    <td>{{ $row->associateid }}</td>
                                    <td>{{ $row->Nombre }}</td>
                                    <td class="text-center">
                                        <img src="{{asset("retos/img/$bandera")}}" width="15px">
                                        {{ $pais }}
                                    </td>
                                    <td>{{ $rango }}</td>
                                    <td class="mesvp1">{{ $row->Telefono }}</td>
                                    <td class="mesvp1">{{ $row->Email }}</td>
                                    <td>{{ $row->FechaIncorp }}</td>
                                    <td class="mesvp1">{{ number_format($row->VpEnero) }}</td>
                                    <td class="mesvp2">{{ number_format($row->VpFebrero) }}</td>
                                    <td class="mesvp3">{{ number_format($row->VpMarzo) }}</td>
                                    <td class="mesvp4">{{ number_format($row->VpAbril) }}</td>
                                    <td class="mesvp5">{{ number_format($row->VpMayo) }}</td>
                                    <td class="mesvp6">{{ number_format($row->VpJunio) }}</td>
                                    <td class="mesvp7">{{ number_format($row->VpJulio) }}</td>
                                    <td class="mesvp8">{{ number_format($row->VpAgosto) }}</td>
                                    <td class="mesvp9">{{ number_format($row->VpSeptiembre) }}</td>
                                    <td class="mesvp9">{{ number_format($row->VpOctubre) }}</td>
                                    <td class="mesvp9">{{ number_format($row->VpNoviembre) }}</td>
                                    <td class="mesvp9">{{ number_format($row->VpDiciembre) }}</td>
                                    <td>{{ number_format($row->VpTotal) }}</td>
                                    <td>
                                        @if ($row->lvel != 1)
                                            Grupo Personal
                                        @else
                                            Frontal
                                        @endif
                                    </td>
                                </tr>
                                @php
                                    $num++;
                                    $vpfinal = $vpfinal + $row->VpTotal;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr class="table-dark">
                                <th colspan="5">Total Volumen Incorporados</th>
                                <th colspan="2">
                                    <span id="vpFinalLabel">@php echo number_format($vpfinal, 2); @endphp</span>
                                    <script>
                                        $("#vpFinalpoint").val($("#vpFinalLabel").text());
                                    </script>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5>
                            <span class="flaticon-left-arrow-12"></span>
                            Desliza para ver tu Genealogía
                            <span class="flaticon-arrow-left"></span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('kaizenphp2')
<div style="display: none">
    {{ $rangoN }}
    @if ($rangoN < 7)
        <script>
            function alertaTaishi(){
                swal({
                    title: 'No cumples con los requisitos para este programa.',
                    text: "Recuerda que puedes participar solo si eres rango Platino o Superior",
                    type: 'warning',
                    padding: '2em'
                })
            }
            alertaTaishi();
        </script>
    @else
        <input type="hidden" id="associateid" value="{{ $associateid }}">
        <script>
            var URLactual = window.location;
            function updateTaishi(){
                var associateid = $('#associateid').val();
                var data = { sponsorid: associateid }
                $.ajax({
                    type: 'GET',
                    url: URLactual + '/updatetaishi',
                    data: data,
                    success: function(Response) {
                        var frontalesFaltantes = $('#incdosFrontales').val();
                        var grupalesFaltantes = $("#indosGP").val();
                        var VpAcumulado = $("#VpAcumulado").val();
                        var VgpAcumulado = $("#VgpAcumulado").val();
                        var totalVolumenInc = $("#vpFinalpoint").val();

                        if(Response != ''){
                            swal({
                                title: 'Felicidades!',
                                text: "Has cumplido el reto Taishi!",
                                type: 'success',
                                padding: '2em'
                            })
                        }
                        else{
                            swal({
                                title: 'Aún no cumples con el reto Taishi.',
                                text: "Recuerda que necesitas: 3 Incorporaciones frontales,3 Incorporaciones grupales, 5,000 VP, 80,000 VGP y 5,000 VP acumulados de incorporaciones para cumplir el reto.",
                                type: 'warning',
                                padding: '2em'
                            })
                        }
                    }
                });
            }
            updateTaishi();
        </script>
    @endif
</div>
@endsection

@section('scripts')
    <script>
        $(".mesvp1").hide();
        $(".mesvp2").hide();
        $(".mesvp3").hide();
        $(".mesvp4").hide();
        $(".mesvp5").hide();
        $(".mesvp6").hide();
        $(".mesvp7").hide();
        $(".mesvp8").hide();
        $(".mesvp9").hide();

        function setHora(){
            fecha = new Date();
            hora = fecha.getHours();
            minuto = fecha.getMinutes();
            var ampm = hora >= 12 ? 'pm' : 'am';
            updateHour = hora + ":00:00 " + ampm;
            $("#hora").text(updateHour);
            setTimeout("setHora()",1000)
        }

        setHora()
    </script>
@endsection