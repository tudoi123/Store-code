@extends('layoutsadmin.appadmin')

@section('body')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Contact Management</h1>
</div>
<hr/>

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Note</th>

            </tr>
        </thead>
        <tbody>
            @if($contacts->count() > 0)
                @foreach($contacts as $contact)
                    <tr>
                        <td class="align-middle">{{ $contact->id }}</td>
                        <td class="align-middle">{{ $contact->name }}</td>
                        <td class="align-middle">{{ $contact->email }}</td>
                        <td class="align-middle">{{ $contact->phone }}</td>
                        <td class="align-middle">{{ $contact->note }}</td>
                        
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">No contacts found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
