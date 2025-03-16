<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">User Profile</h1>
        
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header text-center">
                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle mb-3">
                <h3>{{ $name ?? 'John Doe' }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $email ?? 'john.doe@example.com' }}</p>
                <p><strong>Joined:</strong> {{ $joined ?? 'January 1, 2023' }}</p>
                <p><strong>About Me:</strong> {{ $about ?? 'I am a web developer passionate about creating scalable solutions.' }}</p>
                <a href="/edit-profile" class="btn btn-primary w-100">Edit Profile</a>
            </div>
        </div>
    </div>
</body>
</html>
