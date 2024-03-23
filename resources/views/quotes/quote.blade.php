<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto Formal</title>
    <style>
        @page {
            margin: 0cm;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        body {
            margin: 1cm;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.85rem;
            line-height: 1.5;
            color: #000;

        }
        .watermark{
            background-image: url("{{ public_path('images/whitedentalcare_377x238.png') }}");
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.3;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 0.5rem;
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
            vertical-align: top;
        }

        .table thead th {
            vertical-align: bottom;
        }
        .table-bordered {
            border: 1px solid #000;
        }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #000;
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
<body class="watermark">

    <table class="table">
        <tr class="p-0">
            <td class="text-center">
                <img width="150"  src="{{ asset('images/whitedentalcare_377x238.png') }}" alt="">
            </td>
            <td class="text-center" style="vertical-align: middle !important;">
                <h2>PRESUPUESTO ODONTOLÓGICO</h2>
            </td>
        </tr>
    </table>

    <table class="table" style="margin-top: 2rem">
        <tr>
            <th colspan="2" class="text-left p-0">PACIENTE:  {{ $patient['name'] }}</th>
        </tr>
        <tr class="p-0">
            <th colspan="2" class="text-left p-0">DIRECCIÓN: {{ $patient['address'] }}</th>
        </tr>
        <tr class="p-0">
            <th class="text-left p-0">TELÉFONO: {{ $patient['phone'] }}</th>
            <th class="text-left p-0">MCD: {{ $patient['mcd'] }}</th>
        </tr>
        <tr class="p-0">
            <th class="text-left p-0">FECHA: {{ $patient['date'] }}</th>
            <th class="text-left p-0">VÁLIDO HASTA: {{ $patient['datevalid'] }}</th>
        </tr>
    </table>

    <table class="table table-bordered" style="margin-top: 3rem">
        <thead>
            <th>DESCRIPCIÓN DE TRATAMIENTO</th>
            <th>TIEMPO</th>
            <th>CANTIDAD</th>
            <th>COSTO</th>
        </thead>
        <tbody>
            @foreach ($quote->quote as $key)
            <tr>
                <td>{{ $key->type }}</td>
                <td class="text-center">{{ $key->time }}</td> 
                <td class="text-center">{{ $key->qty }}</td>
                <td class="text-center">{{ $key->price }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-right">TOTAL</th>
                <th>$ {{ $quote->total }}</th>
            </tr>
        </tfoot>
    </table>

    <table class="table" style="margin-top: 6rem">
        <tr>
            <th class="text-center">________________________________<br> FIRMA DEL PACIENTE</th>
            <th class="text-center">________________________________<br> FIRMA DEL DR.</th>
        </tr>
    </table>

    <table class="table" style="margin-top: 3rem">
        <tr>
            <th class="text-center lh-n">
                <h3><strong>WHITE DENTAL CARE</strong></h3>
                <h4>GUTIERREZ 2807 SECTOR CENTRO</h4>
                <h4>NUEVO LAREDO, TAMPS</h4>
            </th>
        </tr>
    </table>
</body>
</html>
