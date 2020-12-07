@extends('layouts.master')
@section('content')
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                <h3 class="page-title">Charts</h3>
                <div class="row">
                    <div class="col-6">
                        <div class="container-fluid">
                            <canvas id="myChart"></canvas>
                        </div>
                        <script>
                            let myChart = document.getElementById('myChart').getContext('2d');

                            let massPopChart = new Chart(myChart,{
                                type : 'line',
                                data:{
                                    labels:['januari','Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                                    datasets:[{
                                        label:'Pemasukan',
                                        data:[
                                            50,
                                            80,
                                            90,
                                            50,
                                            0,

                                        ]
                                    }]
                                },
                                options:{}
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
