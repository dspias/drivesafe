@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">
                        Name
                    </th>
                    <th scope="col">
                        mobile Number
                    </th>
                    <th scope="col">
                        plate No
                    </th>
                    <th scope="col">
                        Remining points
                    </th>
                    <th scope="col">
                        status
                    </th>
                </tr>
              </thead>
              <tbody>
                @foreach($drivers as $driver)
                    <tr>
                        <td>{{ $driver->name}}</td>

                        <td>{{ $driver->mobile_number }}</td>

                        <td>{{  $driver->plate_no }}</td>

                        <td>
                            {{ $driver->point }}
                        </td>

                        <td>
                            <?php
                                $status = "";
                                if($driver->point >= 800){
                                    $status = "excellent";
                                }
                                elseif($driver->point > 200 && $driver->point < 800){
                                    $status = "Good";

                                } elseif( $driver->point >= 100 && $driver->point <= 200 ) {
                                    $status = "partially dangerous";
                                } elseif ($driver->point < 100 ) {
                                    $status = "potentially dangerous";
                                }
                            ?>
                            {{ $status }}

                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            </div>
            
        </div>
    </div>
</div>
@endsection