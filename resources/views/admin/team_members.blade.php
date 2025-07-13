@extends('layouts.dashboard')

@section('content')
    <div class="alert alert-success text-center">
        TEAM MEMBERS
    </div>
    <div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>ROLE</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($allusers as $alluser)
                    <tr>
                        <td>{{ $alluser->name }}</td>
                        <td>{{ $alluser->role }}</td>
                        <td>
                            <a href="{{ route('admin.show', $id = $alluser->id) }}"><i class="bi bi-eye"></i></a>
                            /
                            <form action="{{ route('admin.delete', $alluser->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-link text-danger"
                                    onclick="return confirm('Are you sure you want to delete this user?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>

                            {{-- <form action="{{ route('admin.hide', $alluser->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-link text-danger"
                                    onclick="return confirm('Are you sure you want to hide this user?')">
                                    <i class="bi bi-eye-slash"></i>
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="text-align: center">NO USERS</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
