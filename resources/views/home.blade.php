<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <main>
    <section class="contributor-form-section">
        <div class="container">
            <div class="contributor-form-container">
                
                <form id="contributor-step-form"
                    class="container mt-4"
                    action="{{ url('/submit-contributor-form') }}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="mb-3">
                        <label for="full-name" class="form-label">Full Name <span class="text-danger">*</span></label>
                        <input type="text" id="full-name" name="full_name" class="form-control" placeholder="Type Your Full Name">
                    </div>

                    <div class="mb-3">
                        <label for="email-address" class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="email" id="email-address" name="email" class="form-control" placeholder="Type Your Email Address">
                    </div>

                    <div class="mb-3">
                        <label for="module-name" class="form-label">Module Name</label>
                        <input type="text" id="module-name" name="module_name" class="form-control" placeholder="Type Your Module Name">
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="user-type" class="form-label">User Type</label>
                            <select name="user_type" id="user-type" class="form-select">
                                <option value="">Select User Type</option>
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="options" class="form-label">Options</label>
                            <select name="options" id="options" class="form-select">
                                <option value="">Select as Grow or Lead</option>
                                <option value="grow">Grow</option>
                                <option value="lead">Lead</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h3>Lessons</h3>

                        <div class="mb-3">
                            <label for="lesson-name" class="form-label">Lesson Name</label>
                            <input type="text" id="lesson-name" name="lesson_name" class="form-control" placeholder="Type Your Lesson Name">
                        </div>

                        <div class="mb-3">
                            <label for="lesson-content" class="form-label">Lesson Content</label>
                            <textarea id="lesson-content" name="lesson_content" class="form-control" rows="6" placeholder="Type your content..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="upload-file" class="form-label">Upload Image</label>
                            <input type="file" name="upload_file" id="upload-file" class="form-control" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="additional-url" class="form-label">Additional URL</label>
                            <input type="text" name="additional_url" id="additional-url" class="form-control" placeholder="https://example.com">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
</main>
</body>
</html>