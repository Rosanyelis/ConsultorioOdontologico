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

    <table class="table">
        <tr class="p-0">
            <td class="text-center">
                <img width="150"  src="{{ asset($setting->url_logo) }}" alt="">
            </td>
            <td class="text-center" style="vertical-align: middle !important;">

                <h2 class="p-0">{{ $setting->name }}</h2>
                <h4 class="p-0">
                    {{ $setting->address }} <br>
                    {{ $setting->phone }} <br>
                    {{ $setting->email }}
                </h4>
            </td>
        </tr>
    </table>

    <table class="table" style="margin-top: 2rem">
        <tr>
            <td colspan="2" class="text-left p-0"><strong>PACIENTE:</strong> {{ $data->firstname }} {{ $data->lastname }} {{ $data->second_surname }}</td>
        </tr>
        <tr class="p-0">
            <td class="text-left p-0"><strong>DNI:</strong> {{ $data->dni }}</td>
            <td class="text-left p-0"><strong>TELÉFONO:</strong> {{ $data->phone }}</td>
        </tr>
        <tr class="p-0">
            <td class="text-left p-0"><strong>FECHA DE NACIMIENTO:</strong> {{ $data->birthdate }}</td>
            <td class="text-left p-0"><strong>EDAD:</strong> {{ $data->age }}</td>
        </tr>
    </table>

    @foreach ($data->dental_history as $item)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">Historia Clinica #0000{{ $item->id }}</th>
                <th class="text-center">Fecha: {{ $item->created_at->format('d/m/Y') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" class="text-left lh-n">
                    <strong>Observaciones:</strong>{{ $item->observations }}
                </td>
            </tr>
            <tr >
                <td colspan="2" class="text-center lh-n">
                    <strong>Tratamientos aplicados:</strong>
                </td>
            </tr>
            <tr>
                <td class="text-center">
                    <strong>Dientes afectados:</strong>
                </td>
                <td>
                    <strong>Tratamiento:</strong>
                </td>
            </tr>
            @foreach ($item->dental_history_details as $hs)
            <tr>
                <td class="text-center">
                    {{ $hs->teeths_id }}
                </td>
                <td>
                    {{ $hs->treatment }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endforeach
</body>
</html>
