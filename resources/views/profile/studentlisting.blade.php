                                <!DOCTYPE html>
                                <html lang="en">
                                <head>
                                    <meta charset="UTF-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                    <title>Records Listing</title>
                                    <!-- Bootstrap CSS via CDN -->
                                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
                                </head>
                                <body>
                                <div class="container mt-5">

                                    <h2 class="mb-4 text-center">All Records</h2>

                                    {{-- Session Messages --}}
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    {{-- Create Record Button --}}
                                    <div class="mb-3">
                                        <a href="{{ route('section.create') }}" class="btn btn-success">Create Record</a>
                                    </div>

                                    {{-- Records Table --}}
                                    <table class="table table-bordered table-striped">
                                        <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($records as $index => $record)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->email }}</td>
                                                <td>{{ ucfirst($record->gender) }}</td>
                                                <td>
                                                    <form action="{{ url('/section/' . $record->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Records Found</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>

                                    <div class="mt-3">
                                        <a href="{{ route('register') }}" class="btn btn-primary">Back to Form</a>
                                    </div>

                                </div>

                                <!-- Bootstrap JS Bundle via CDN -->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
                                </body>
                                </html>
