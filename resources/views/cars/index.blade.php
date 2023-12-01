@extends('layouts.container')

@section('title')
    All Lessons
@endsection


@section('m-content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="col-md-12">
                    <!-- All Cars -->
                    <div class="card">
                        <h5 class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                All Lessons
                                <a href="{{ route('cars-create') }}" class="btn btn-info">
                                    New Lesson &nbsp; <span class="tf-icons fa-solid fa-angles-right"></span>
                                </a>
                            </div>
                        </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped" id="CarTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        {{-- <th>Price</th> --}}
                                        {{-- <th>Color</th> --}}
                                        <th>Description</th>
                                        {{-- <th>Num Cars</th> --}}
                                        <th>picture</th>
                                        <th>Created</th>
                                        <th>Actions</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                @if (count($cars) > 0)
                                    <tbody class="table-border-bottom-0">
                                        @php
                                            $count = 1;
                                        @endphp
                                        @foreach ($cars as $car)
                                            <tr>
                                                <td>{{ $count++ }}</td>
                                                <td>{{ $car->name }}</td>
                                                <td>{{ $car->lesson_type }}</td>
                                                {{-- <td>{{ $car->price }} $ </td> --}}
                                                {{-- <td>{{ $car->color }}</td> --}}
                                                <td>{{ $car->description }}</td>
                                                {{-- <td>{{ $car->number_of_cars }}</td> --}}
                                                <td class="col-2">
                                                    <img class="img-fluid"
                                                        src="{{ asset('users/cars/' . $car->picture) }}" />
                                                </td>
                                                <td>{{ $car->created_at->diffforhumans() }}</td>
                                                {{-- <td>{{ $car->updated_at->diffforhumans() }}</td> --}}
                                                <td>
                                                    <a href="{{ route('cars-edit', ['id' => $car->id]) }}"
                                                        id="{{ $car->id }}"
                                                        class="btn btnEditCar btn-sm btn-s rounded-pill btn-icon btn-outline-info">
                                                        <span class="tf-icons bx bx-edit"></span>
                                                    </a>
                                                    <a href="" id="{{ $car->id }}"
                                                        class="btn btnDeleteCar btn-sm btn-s rounded-pill btn-icon btn-outline-danger">
                                                        <span class="tf-icons fa-solid fa-trash"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>
                        </div>
                        <div class="card-footer">
                            {{ $cars->links('pagination::bootstrap-4') }}

                        </div>
                    </div>
                    <!-- All Users -->
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
    <!-- Content wrapper -->
@endsection


@section('scripts')
    @if (session('success'))
        <script>
            toastr.success('{{ session('+success+') }}');
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.error('{{ session('+error+') }}');
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.btnDeleteCar', function(e) {
                e.preventDefault();
                var id = this.id;  
                

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: `/admin/cars/destroy/${id}`,  
                            dataType: "JSON",
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    response.success,
                                    'success'
                                );
                                $("#CarTable").load(location.href + " #CarTable");
                            }
                        });
                    }
                });
            });

        });
    </script>
@endsection
