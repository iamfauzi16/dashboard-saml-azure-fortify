<x-app-dashboard-layout title="User Lists">
    @push('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    @endpush
    <div class="col-12">
        <h3>Users</h3>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">User Lists</h3>
                        <a href="{{ route('users.create') }}" class="btn btn-success  mb-3">Create User</a>
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Create At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->image_url)
                                                    <img src="{{ $user->image_url }}" class="rounded-circle bg-body p-1">
                                                @else
                                                    <img src="https://www.transparentpng.com/download/user/gray-user-profile-icon-png-fP8Q1P.png"
                                                        class="rounded-circle bg-body p-1">
                                                @endif
                                            </td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('users.edit', $user) }}"
                                                        class="btn btn-primary btn-sm"> <i class="ti-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); document.getElementById('destroy').submit()"><i
                                                            class="ti-trash"></i></a>
    
                                                    <form action="{{ route('users.destroy', $user) }}" method="post"
                                                        id="destroy" hidden>
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
            integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
        <script>
            let table = new DataTable('#myTable', {
                responsive: true
            });
        </script>
    @endpush

</x-app-dashboard-layout>
