<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <main>
        <section class="p-4">
            <div class="container mt-4">
                <h2>Contributor Details</h2>
                <div class="card">
                    <div class="card-body">

                        <p><strong>Full Name:</strong> {{ $contributor->full_name ?? 'N/A'  }}</p>
                        <p><strong>Email:</strong> {{ $contributor->email ?? 'N/A' }}</p>
                        <p><strong>Module Name:</strong> {{ $contributor->module_name ?? 'N/A' }}</p>
                        <p><strong>User Type:</strong> {{ $contributor->user_type ?? 'N/A' }}</p>
                        <p><strong>Options:</strong> {{ $contributor->options ?? 'N/A' }}</p>
                        <p><strong>Lesson Name:</strong> {{ $contributor->lesson_name ?? 'N/A' }}</p>
                        <p><strong>Lesson Content:</strong> {{ $contributor->lesson_content ?? 'N/A' }}</p>
                        @if($contributor->upload_file)
                            <p><strong>Upload File:</strong> 
                                <img src="{{ asset('storage/' . $contributor->upload_file) }}" alt="Uploaded image" class="img-fluid" style="max-width: 600px;">
                            </p>
                        @else
                            <p><strong>Upload File:</strong> No file uploaded</p>
                        @endif
                        @if($contributor->additional_url)
                            <p><strong>Additional URL:</strong> 
                                <a href="{{ $contributor->additional_url }}" target="_blank">Visit Link</a>
                            </p>
                        @else
                            <p><strong>Additional URL:</strong> No URL provided</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="p-4">
            <div class="container">
                <h5>Previous comments on the post</h5>
                    <ul class="list-group">
                        @foreach($comments as $comment)
                            <li class="list-group-item">
                                <p>{{ $comment->comment }}</p>
                            </li>
                        @endforeach
                    </ul>
            </div>
        </section>

        <section class="p-4">
            <div class="container">
                <h5>Post Comment</h5>
                <form action="/add-comment" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div>
                        <textarea name="comment" id="" cols="60" rows="10"></textarea>
                        <input type="hidden" name="contributor_id" value="{{ $contributor->id }}">
                    </div>

                    <div>
                        <input type="submit" value="Post Comment" class="btn btn-primary mt-2" />
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>