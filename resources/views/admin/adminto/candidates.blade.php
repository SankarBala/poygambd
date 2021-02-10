   @extends('admin.adminto.layouts.adminWrapper')


   @section('content')

       <table class="table">
           <thead class="thead-dark">
               <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Name</th>
                   <th scope="col">Father Name</th>
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
                       <td>{{ $user->father }}</td>
                       <td>{{ $user->phone }}</td>
                       <td>{{ $user->address }}</td>
                       <td>{{ $user->dob }}</td>
                       <td>
                           <form id="delete-form" method="POST"
                               action="{{ route('admin.candidate.destroy', $user->id) }}">
                               {{ csrf_field() }}
                               {{ method_field('DELETE') }}

                               <div class="form-group">
                                   <a class="btn btn-warning"
                                       href="{{ route('admin.candidate.edit', $user->id) }}">Edit</a>
                                   <input type="submit" class="btn btn-danger" value="Delete">
                               </div>
                           </form>
                       </td>
                   </tr>
               @endforeach
           </tbody>
       </table>

       <div class="d-flex justify-content-center">
           {{ $users }}
       </div>



   @endsection
