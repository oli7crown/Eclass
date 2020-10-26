@extends('layouts.app')

@section('content')
    <div class="container box">
        <div class="col-md-10">

            <h2 align="center">ΑΝΑΚΟΙΝΩΣΕΙΣ</h2>
                <br />
            <br />
            <div align="right">
            <a href='posts/create' class="btn-primary">Νέα Δημοσίευση</a>
            </div>
            <br />
            <br />
            <table class="table-bordered table-dark">

                @foreach($posts as $row)
                    <tr>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['message']}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>



@endsection
