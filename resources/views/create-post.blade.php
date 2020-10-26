@extends('layouts.app')

@section('content')


    <div class="container box">

        <h3 align="center"> <strong>Δημιουργία Δημοσίευσης</strong></h3><br />
        <div align="right">
        <a href='/posts'>ΔΗΜΟΣΙΕΥΣΕΙΣ</a>
        </div>
        <br />

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <form method="post" action="{{url('/posts/send')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Ονοματεπώνυμο:</label>
                <input placeholder="Καθηγήτρια Μαθηματικών: Ελένη Βλαχάκη" type="text" name="name" class="form-control" value="" />
            </div>

            <div class="form-group" >
                <label>Παρακαλώ επιλέξτε Τμήμα:</label>
                <br />
                <select name="depart">
                    <option>Αλλο</option>
                    <option>Τμήμα Βιομηχανικής Σχεδίασης και Παραγωγής</option>
                    <option>Τμήμα Ναυπηγών</option>
                    <option>Τμήμα Ηλεκτρολόγων</option>
                    <option>Τμήμα Ηλεκτρονικών</option>
                    <option>Τμήμα Οικονομικών</option>

                </select>
            </div>

            <div class="form-group" align="center">
                <label><h2>Τι σκέφτεστε; </h2></label>
                <textarea placeholder="Βγήκαν οι βαθμοί στο μάθημα: Μαθηματικά ΙΙΙ. Καλή Συνέχεια!" name="message" class="form-control"></textarea>
            </div>
            <div class="form-group" align="right">
                <input  type="submit" name="send" class="btn btn-info" value="Ανάρτηση" />

@endsection
