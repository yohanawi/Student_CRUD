@extends('layouts.app')

@section('content')
    <div class="col-lg-12 text-center">
        <h1 class="page-title">View Student</h1>
    </div>
    <div class="d-flex mt-5 justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Age</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->image }}</td>
                        <td>{{ $student->age }}</td>
                        <td>
                            @if ($student->status == 0)
                                <span class="badge text-bg-warning">Inactive</span>
                            @else
                                <span class="badge text-bg-success">Active</span>
                            @endif
                        </td>
                        <td>

                            <a href="{{ route('student.status', $student->id) }}" class="btn btn-success"><i
                                    class="fa-solid fa-circle-check"></i></a>
                            <a href="javascript:void(0)" class="btn btn-info"><i class="fa-solid fa-edit"
                                    onclick="studentEditModal({{ $student->id }})"></i></a>
                            <a href="{{ route('student.delete', $student->id) }}" class="btn btn-danger"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="studentEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="studentEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="studentEditLabel">Update Student</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="studentEditContent">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 10vh;
            color: #000
        }
    </style>
@endpush

@push('js')
    <script>
        function studentEditModal(student_id) {
            var data = {
                student_id: student_id,
            };
            $.ajax({
                url: "{{ route('student.edit') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "GET",
                dataType: '',
                data: data,
                success: function(response) {
                    $('#studentEdit').modal('show');
                    $('#studentEditContent').html(response);

                }
            });
        }
    </script>
@endpush
