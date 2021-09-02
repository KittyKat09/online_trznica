<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td style="width: 40%; text-align:left">
                <h4>Primatelj:</h4>
                <h3 style="font-family:Cambria">{{ $name }}</h3>
                <pre>
{{ $address }}
{{ $postcode }}, {{ $city }}

<br /><br />
{{ date('d m Y h:m:s') }}
Način plaćanja: pouzećem
</pre>


            </td>
            <td style="text-align:center">
                <img src="" alt="Logo" width="64" class="logo"/>
            </td>
            <td style="width: 40%; text-align:right">
                <h4>Pošiljatelj:</h4>
                <h3>Moja tržnica</h3>
                <pre>
                    https://moja.tržnica.com

                    Vukovarska 58
                    51 000 Rijeka
                    Hrvatska
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Narudžba:</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Identifikacijski <br> br. proizvoda</th>
            <th>Naziv</th>
            <th>Kolicina</th>
            <th>Cijena</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($content as $item)
            <tr>
                <td style="text-align:center">{{ $item[0] }}</td>
                <td style="text-align:center">{{ $item[1] }}</td>
                <td style="text-align:center">{{ $item[3] }}</td>
                <td style="text-align:center">{{ $item[2] }}</td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td></td>
            <td style="text-align:right">Ukupno:</td>
            <td style="text-align:center" class="gray">{{ $total }}</td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td style="width: 50%; text-align:right">
                &copy; {{ date('Y') }} {{ config('app.url') }} - Sva prava pridržana.
            </td>
            <td style="width: 50%; text-align:right">
            </td>
        </tr>

    </table>
</div>
</body>
</html>
