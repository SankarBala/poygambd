   @extends('admin.adminto.layouts.adminWrapper')


   @section('content')

       <table class="table">
           <thead class="thead-dark">
               <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Name</th>
                   <th scope="col">Email</th>
                   <th scope="col">Phone</th>
                   <th scope="col">Address</th>
                   <th scope="col">Date of birth</th>
                   <th scope="col">Action</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($users as $user)
                   <tr>
                      <th scope="row">{{ $user->id }}</th>
                       <td><a href="{{ route('admin.candidate.show', $user) }}">{{ $user->name }}</a></td>
                       <td>{{ $user->email }}</td>
                       <td>{{ $user->phone }}</td>
                       <td>{{ $user->address }}</td>
                       <td>{{ $user->dob }}</td>
                       <td>
                       <a class="btn btn-warning" href="{{ route('admin.candidate.edit', $user) }}">Edit</a>
                       <a class="btn btn-danger" href="{{ route('admin.candidate.destroy', $user) }}">Delete</a>
                       </td>
                   </tr>
               @endforeach
           </tbody>
       </table>

       <div class="d-flex justify-content-center">
           {{ $users }}
       </div>



   @endsection
