@extends('layouts.app')

@section('content')


<div class="container box">

    <h3 align="center"> <strong>Φόρμα Επικοινωνίας</strong></h3><br />

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
    
    <form method="post" action="{{url('/contact/send')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Ονοματεπώνυμο</label>
            <input placeholder="Γιώργος Παπαδημητρίου" type="text" name="name" class="form-control">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Αριθμός Μητρώου:</label>
            <input placeholder="46952" type="text"  name="am" class="form-control" value="" />
            @error('am')
            <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
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
        <div class="form-group">
            <label>Εισάγετε το <strong>e-mail</strong> σας:</label>
            <input  placeholder="auto46952@uniwa.gr" type="text" name="email" class="form-control" value="" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Εισάγετε το μήνυμα σας:</label>
            <textarea placeholder="Καλημέρα σας, θα ήθελα μια βεβαίωση σπουδών. Καλή συνέχεια." name="message" class="form-control"></textarea>
            @error('message')
            <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input  type="submit" name="send" class="btn btn-info" value="Αποστολή" />

@endsection
