@extends('admin.layout.index')
@section('content')



    <div class="container d-flex justify-content-center">
        <table class="table table-dark table-striped text-center">
            <thead>
                <tr>
                    <th>Tổng sản phẩm</th>
                    <th>Tổng tiền</th>
                    <th>Tổng đơn hàng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $products }}</td>
                    <td>{{ $revenue }}</td>
                    <td>{{ $orders }}</td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- resources/views/charts.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Sản phẩm', 'Đơn hàng', 'Doanh thu'],
                datasets: [{
                    label: 'Statistics',
                    data: [{{ $products }}, {{ $orders }}, {{ $revenue }}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

@endsection
