<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contributor Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <main>
<section class="py-4">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Firstname</th>
                        <th>Email</th>
                        <th>Module Name</th>
                        <th>User Type</th>
                        <th>Options</th>
                        <th>Lesson Name</th>
                        <th>Lesson Content</th>
                        <th>Upload File</th>
                        <th>Additional URL</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contributors as $key => $contributor)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $contributor->full_name }}</td>
                            <td>{{ $contributor->email }}</td>
                            <td>{{ $contributor->module_name }}</td>
                            <td>{{ $contributor->user_type }}</td>
                            <td>{{ $contributor->options }}</td>
                            <td>{{ $contributor->lesson_name }}</td>
                            <td>{{ $contributor->lesson_content }}</td>
                            <td>
                                @if($contributor->upload_file)
                                    <a href="{{ asset('storage/' . $contributor->upload_file) }}" target="_blank" class="btn btn-sm btn-primary">
                                        View File
                                    </a>
                                @else
                                    <span class="text-muted">No file</span>
                                @endif
                            </td>
                            <td>
                                @if($contributor->additional_url)
                                    <a href="{{ $contributor->additional_url }}" target="_blank" class="btn btn-sm btn-info">
                                        Visit Link
                                    </a>
                                @else
                                    <span class="text-muted">No URL</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="/details/{{ $contributor->id }}">View Details</a>
                            </td>

                            <td>
                                <a class="btn btn-sm btn-danger" href="/remove/{{ $contributor->id }}">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center text-muted">No contributors found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

    </main>
</body>
</html>