@extends('layout.app')
@section('contact')
<div class="row">

    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
        <a href="{{url('contact')}} "> <button type="submit" class="btn btn-primary"> insert Contact </button></a>

            <h3>Contact List<td></td>
            </h1>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">&nbsp</th>
                            <th scope="col">&nbsp</th>
                        </tr>
                    </thead>
    <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <th scope="row">{{$contact->id}}</th>
                        <td>{{$contact->fname}}</td>
                        <td>{{$contact->lname}}</td>
                        <td>{{$contact->email}}</td>
                        <td>
                            <form action="{{url('destroy/'. $contact->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger"> Delete</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{url('edit/'.$contact->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary"> edit</button>
                            </form>

                        </td>
                   </tr>
                    @endforeach


                    </tbody>
                </table>
        </div>
    </div>
</div>

@endsection
