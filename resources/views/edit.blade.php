@extends('layout.app')
@section('contact')
<div class="row">


    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
        <a href="{{url('/')}} "> <button type="submit" class="btn btn-primary"> Show all </button></a>

        <h3>Contact List<td></td>
            <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
            <form action="{{url('update/'.$contact->id)}}" method="POST">
                @method('patch')
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" name="FirstName" id="inputFirstName" required value="{{$contact->fname}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputLastName" >Last Name</label>
                            <input type="text" name="LastName" class="form-control" id="inputLastName" required value="{{$contact->lname}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" required value="{{$contact->email}}">
                </div>

                <input type="submit" class="btn btn-primary" value="Edit new ">
            </form>
        </div>
    </div>
</div>
@endsection
