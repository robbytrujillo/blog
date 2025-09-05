@extends('back.layout.template')

@section('content')

    {{--  Content  --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Article</h1>
      </div>

      <div class="container">
        <div class="mt-3">
        <button class="btn btn-primary rounded-pill mb-2" data-bs-toggle="modal" data-bs-target="#modalCreate">Create</button>
        
        @if ($errors->any())
          <div class="my-3">
            <!-- /resources/views/post/create.blade.php -->
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div>
              <!-- Create Post Form -->
            </div>
          @endif

          @if (session('success'))
              <div class="my-3">
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
            </div>
          @endif

        <table class="table table-striped table-bordered">
            <thead>
               <tr>
                 <th>No</th>
                 <th>Title</th>
                 <th>Category</th>
                 <th>Status</th>
                 <th>Publish Date</th>
                 <th>Function</th>
               </tr>
            </thead>

            <tbody>
                @foreach ($articles as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->Category->name }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->publish_date }}</td>
                    <td>
                      <div class="text-center">
                        <a href="" class="btn btn-info rounded-pill">Detail</a>
                        <a href="" class="btn btn-warning rounded-pill">Edit</a>
                        <a href="" class="btn btn-danger rounded-pill">Delete</a>
                      </div>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      </div>
      
    </main>
    
@endsection

    