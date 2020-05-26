@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
            <form action="{{route('saveContact')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Nom</label>
                        <input name="nom" type="text" class="form-control" placeholder="Enter name">
                      </div>
                      <div class="form-group">
                        <label>Prenom</label>
                        <input name="prenom" type="text" class="form-control" placeholder="Enter firstname">
                      </div>
                    <button type="submit" class="btn btn-primary">envoyer</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection