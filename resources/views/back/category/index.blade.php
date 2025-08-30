

@extends('back.layout.template')

@section('content')

    {{--  Content  --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories</h1>
      </div>

      <div class="container">
        <div class="mt-3">
        <button class="btn btn-primary rounded-pill mb-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>
        <table class="table table-striped table-bordered">
            <thead>
               <tr>
                 <th>No</th>
                 <th>Name</th>
                 <th>Slug</th>
                 <th>Created At</th>
                 <th>Function</th>
               </tr>
            </thead>

            <tbody>
                @foreach ($categories as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                      <div class="text-center">
                        <button class="btn btn-warning rounded-pill"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                        <button class="btn btn-danger rounded-pill"><i class="fa-solid fa-trash"></i>Delete</button>
                      </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      </div>

    {{--  Modal Create  --}}
    @include('back.category.create-modal')
      
    </main>
    
@endsection

    