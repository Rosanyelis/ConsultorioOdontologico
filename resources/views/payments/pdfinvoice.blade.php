<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturas y abonos</title>
    <style>
        @page {
            margin: 4mm;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        body {
            margin: 3mm;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 16px;
            /* line-height: 2; */
            color: #000;

        }
        .watermark{
            background-image: url("{{ public_path($setting->url_logo) }}");
            background-size: contain;
            background-attachment: fixed;
            background-origin: content-box;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.1;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0rem;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #000;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.45rem;
            vertical-align: middle;
        }

        .table thead th {
            vertical-align: bottom;
        }
        .table-bordered {
            border: 1px solid #0194d0;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #0194d0;
        }
        .text-center{
            text-align: center !important;
        }
        .text-right{
            text-align: right !important;
        }
        .text-left{
            text-align: left !important;
        }
        .lh-n{
            line-height: normal;
        }
        .p-0{
            padding:0px !important;
        }
    </style>
</head>
<body class="watermark" >
    <table class="table" >
        <tr>
            <td width="50%" class="p-1 text-left " style="border-right: 1px solid #0194d0;">
                <img src="{{ public_path($setting->url_logo) }}" alt="" width="100%">
            </td>
            <td width="50%" class="p-1">
                <h3 class="py-4 px-0" style="font-weight: normal">
                    <img src="{{ public_path('images/icons/pin.png') }}" alt="" width="18px">  {{ $setting->address }}
                </h3>
                <h3 class="py-4 px-0" style="font-weight: normal">
                    <img src="{{ public_path('images/icons/telefono.png') }}" alt="" width="18px">  {{ $setting->phone }}
                </h3>
                <h3 class="py-4 px-0" style="font-weight: normal">
                    <img src="{{ public_path('images/icons/correo-electronico.png') }}" alt="" width="18px">  {{ $setting->email }}
                </h3>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-right py-2" style="border-top: 1px solid #0194d0;">
                <h4 class="p-0">Fecha: {{ $data->created_at->format('d-m-Y') }}</h4>
            </td>
        </tr>
    </table>
    <table class="table table-bordered" style="margin-top: 0; ">
        <tr >
            <td style="padding-top:2px;padding-bottom:2px;">
                <b>Paciente:</b> {{ $data->patient->firstname }} {{ $data->patient->lastname }} {{ $data->patient->second_surname }}
            </td>
            <td style="padding-top:2px;padding-bottom:2px;">
                <b>DNI:</b> {{ $data->patient->dni }}
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top:2px;padding-bottom:2px;">
                <b>Telefono:</b> {{ $data->patient->phone }}
            </td>
        </tr>
    </table>

        <table id="servicio" class="table table-bordered">
            <thead>
                <tr>
                    <th>Nº Factura: N° #0000{{ $data->id }}</th>
                    <th>Estatus: {{ $data->status }}</th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center text-uppercase">Detalles de Factura</th>
                </tr>

                <tr>
                    <th>Descripción de Tratamiento</th>
                    <th>Costo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->invoice_details as $item)
                <tr class="text-center">
                    <td>{{ $item->treatment }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td class="text-right text-uppercase"><h5>Total</h5></td>
                    <td><h5>{{ $setting->symbol_plan }} {{ $data->total }}</h5></td>
                </tr>
            </tfoot>
        </table>

        <table id="servicio" class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="4" class="text-center text-uppercase">Abonos Realizados</th>
                </tr>
                <tr class=" text-uppercase">
                    <th>Fecha</th>
                    <th>Metodo de Pago</th>
                    <th>Referencia</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->payments as $item)
                <tr class="text-center">
                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                    <td>{{ $item->pay_method }}</td>
                    <td>{{ $item->pay_number_reference }}</td>
                    <td>{{ $item->pay_amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>

