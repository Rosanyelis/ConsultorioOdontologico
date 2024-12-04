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
            background-image: url("{{ public_path($setting->url_logo) }}");
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0.1;
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
<body class="watermark">

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
                <h4 class="p-0">Fecha: {{ date('d-m-Y') }}</h4>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-right py-2" >
                <h2 class="text-center">Presupuesto Odontológico N° {{ $quote->id }}</h2>
            </td>
        </tr>
    </table>



    <table class="table table-bordered" >
        <tr>
            <td colspan="2" class="text-center"><strong>DATOS DE PACIENTE</strong></td>
        </tr>
        <tr>
            <td class="text-left "><strong>PACIENTE:</strong> {{ $quote->firstname }} {{ $quote->lastname }} {{ $quote->second_surname }}</td>
            <td class="text-left "><strong>DNI:</strong> {{ $quote->dni }}</td>
        </tr>
        <tr class="">
            <td class="text-left "><strong>TELÉFONO:</strong> {{ $quote->phone }}</td>
            <td class="text-left "><strong>EMAIL:</strong> {{ $quote->email }}</td>
        </tr>
        <tr class="">
            <td class="text-left "><strong>FECHA:</strong> {{ $quote->created_at->format('d-m-Y') }}</td>
            <td class="text-left "><strong>VÁLIDO HASTA:</strong> {{ $quote->valid_end }}</td>
        </tr>
    </table>

    <table class="table table-bordered" >

        <thead>
            <tr>
                <th colspan="4" class="text-center">DETALLES DE PRESUPUESTO</th>
            </tr>
            <tr>
                <th>DESCRIPCIÓN DE TRATAMIENTO</th>
                <th>CANTIDAD</th>
                <th>COSTO</th>
                <th>SUBTOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quote->items as $key)
            <tr>
                <td class="text-center py-1">{{ $key->treatment }}</td>
                <td class="text-center py-1">{{ $key->quantity_teeths }}</td>
                <td class="text-center py-1">{{ $key->price_unit }}</td>
                <td class="text-center py-1">{{ $setting->symbol_plan }} {{ $key->subtotal }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3" class="text-right">TOTAL</th>
                <th>{{ $setting->symbol_plan }} {{ $quote->total }}</th>
            </tr>
        </tfoot>
    </table>

    @if ($setting->url_signature != null)
    <img src="{{ public_path($setting->url_signature) }}"  style="position: fixed; bottom: 2.5cm; right: 2.5cm;"   width="30%"  alt="">
    @endif
    <table class="table" style="position: fixed; bottom: 4cm">
        <tr>
            <th class="text-center">
                ________________________________<br>
                FIRMA DEL PACIENTE <br>
                {{ $quote->firstname }} {{ $quote->lastname }}
            </th>
            <th class="text-center">
                ________________________________<br>
                FIRMA DEL DR(a). <br>
                {{ $setting->name_doctor }} <br>
                mcd: {{ $setting->mcd }}
            </th>
        </tr>
    </table>

</body>
</html>
