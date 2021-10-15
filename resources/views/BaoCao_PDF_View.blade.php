<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Báo Cáo PDF</title>
    <style>
        /* Thêm dòng này để không bị lỗi Font Tiếng Việt */
        body {
            font-family: DejaVu Sans;
        }

        /* Style cho bảng */
        table,
        td,
        th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h4>Đơn vị báo cáo: CÔNG TY DỊCH VỤ MOBIFONE KHU VỰC 4</h4>
    <h1 style="text-align: center;">BÁO CÁO DOANH SỐ...</h1>

    <table>
        <thead>
            <tr>
                <th rowspan="2">STT</th>
                <th rowspan="2">Mã ĐL</th>
                <th rowspan="2">Tên Đại lý</th>
                <th rowspan="2">MOBIEZ</th>
                <th rowspan="2">AIRTIME</th>
                <th rowspan="2">Mã thẻ</th>
                <th colspan="8">Thẻ cào</th>
            </tr>
            <tr>
                <th>10</th>
                <th>20</th>
                <th>30</th>
                <th>50</th>
                <th>100</th>
                <th>200</th>
                <th>300</th>
                <th>500</th>
            </tr>
        </thead>
        <tbody>
            @isset($reports)
            @foreach($reports as $report)
            <tr>
                <td>{{$report->dealerCode}}</td>
                <td>{{$report->dealerName}}</td>
                <td>{{$report->mobiez}}</td>
                <td>{{$report->airtime}}</td>
                <td>{{$report->cardCode}}</td>
                <td></td>   <!--Thêm 1 cái <td> rỗng để fix lỗi rỗng cột cuối card500-->
                <td>{{$report->card10}}</td>
                <td>{{$report->card20}}</td>
                <td>{{$report->card30}}</td>
                <td>{{$report->card50}}</td>
                <td>{{$report->card100}}</td>
                <td>{{$report->card200}}</td>
                <td>{{$report->card300}}</td>
                <td>{{$report->card500}}</td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</body>

</html>