<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" /> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        {{-- @vite('resources/css/app.css') --}}
        {{-- @stack('styles') --}}
    </head>
    <body class="">

        <div>
            <table id="myTable" class="table table-stripped">
                <thead>
                    <tr>
                        <th class="text-start text-lg">No.</th>
                        <th class="text-center w-[400px] text-lg">Indikator</th>
                        <th class="text-center text-lg">Satuan</th>
                        {{-- <th class="text-center">2016</th> --}}
                        <th class="text-center text-lg">2017</th>
                        <th class="text-center text-lg">2018</th>
                        <th class="text-center text-lg">2019</th>
                        <th class="text-center text-lg">2020</th>
                        <th class="text-center text-lg">2021</th>
                        <th class="text-center text-lg">2022</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;    
                    @endphp
                    @foreach ($dataSatuan as $filter)    
                    <tr class="mt-28">
                        <td>{{$i++}}</td>
                        <td>{{$filter->indikator}}</td>
                        <td class="text-center">{{$filter->satuan}}</td>
                        <td class="text-center">{{$filter->tahun2}}</td>
                        <td class="text-center">{{$filter->tahun3}}</td>
                        <td class="text-center">{{$filter->tahun4}}</td>
                        <td class="text-center">{{$filter->tahun5}}</td>
                        <td class="text-center">{{$filter->tahun6}}</td>
                        <td class="text-center">{{$filter->tahun7}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{-- <h1>halaman test</h1> --}}
        <script>
            let table = new DataTable('#myTable');
        </script>
        <script>
            $(document).ready( function(){
                $('#myTable').DataTable();
            });
        </script>
        <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
