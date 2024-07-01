@extends('layout.master')

@section('content')
    {{-- <h1>Hey there!!!!</h1> --}}
    <div class="row d-flex justify-content-center mt-4">
    <div>
        <a href="{{ route('create.post') }}" class="btn btn-warning float-end">Create</a>
    </div>
        <div class="col-md-8">
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Rehan</td>
                    <td>Rehan</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-info">Restore</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>              
    </div>
</div>
      
@endsection

