<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto Formal</title>
    <style>
        @page {
            margin: 0mm;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

        body {
            margin: 3mm;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 0.3rem;
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
    <table class="table mb-0">
        <tr>
            <td class="p-0 text-center ">
                <img src="{{ public_path($setting->url_logo) }}" alt="" height="40px">
            </td>
            <td class="text-right p-0">
                <h2 class="p-0">{{ $setting->name }}</h2>
                <h4 class="p-0">
                    {{ $setting->address }} <br>
                    {{ $setting->phone }} <br>
                    {{ $setting->email }}
                </h4>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="text-right p-0">
                <h4 class="p-0">Fecha: {{ $data->created_at->format('d-m-Y') }}</h4>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h4 class="text-center">RECETA</h4>
            </td>
        </tr>
    </table>
    <table class="table">
        <tr >
            <td colspan="2" style="padding-top:2px;padding-bottom:2px;">
                <b>Paciente:</b> {{ $data->patient->firstname }} {{ $data->patient->lastname }} {{ $data->patient->second_surname }}
            </td>
        </tr>
        <tr>
            <td style="padding-top:2px;padding-bottom:2px;">
                <b>DNI:</b> {{ $data->patient->dni }}
            </td>
            <td style="padding-top:2px;padding-bottom:2px;">
                <b>Edad:</b> {{ $data->patient->age }}
            </td>
        </tr>
    </table>
    <table class="table">
        <tr>
            <td class="text-center" style="padding-top:0;padding-bottom:0;">
                <b>Medicamentos</b>
            </td>
            <td class="text-center" style="padding-top:0;padding-bottom:0;">
                <b>Dosis</b>
            </td>
            <td class="text-center" style="padding-top:0;padding-bottom:0;">
                <b>Instrucciones</b>
            </td>
        </tr>
        @foreach ($data->medication_prescription as $item)
        <tr>
            <td  style="padding-top:2px;padding-bottom:2px;">{{ $item->medicine }}</td>
            <td  style="padding-top:2px;padding-bottom:2px;">{{ $item->dose }}</td>
            <td  style="padding-top:2px;padding-bottom:2px;">{{ $item->instructions }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3" style="padding-top:4px;padding-bottom:4px;">
                <b>Observaciones:</b> {{ $data->observations }}
            </td>
        </tr>
    </table>
</body>
</html>
