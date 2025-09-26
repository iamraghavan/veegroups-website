<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Edit Project') }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f0f2f5;
            min-height: 100vh;
        }

        .dashboard-container {
            display: flex;
            flex-direction: row;
            min-height: 100vh;
        }

        .sidebar {
            background-color: #2c3e50;
            color: #ffffff;
            width: 250px;
            padding: 20px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            transition: width 0.3s ease;
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar li {
            margin-bottom: 15px;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 10px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .form-header {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-header h1 {
            font-size: 28px;
            color: #34495e;
            margin: 0;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: #34495e;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #34495e;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input[type="text"],
        input[type="file"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #dfe6e9;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
            background-color: #f9f9f9;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #3498db;
            background-color: #ffffff;
        }

        .is-invalid {
            border-color: #e74c3c;
        }

        .invalid-feedback {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            text-align: center;
        }

        .btn-primary {
            background-color: #3498db;
            color: #ffffff;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .existing-images {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .existing-images img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #dfe6e9;
        }

        /* Desktop-specific styles */
        @media (min-width: 768px) {
            .sidebar {
                width: 300px;
            }

            .form-header {
                padding: 25px;
            }

            .form-header h1 {
                font-size: 32px;
            }

            .form-container {
                padding: 40px;
                max-width: 700px;
            }

            .btn {
                padding: 12px 30px;
                width: auto;
            }

            .existing-images img {
                width: 150px;
                height: 150px;
            }
        }

        /* Mobile-specific styles */
        @media (max-width: 767px) {
            .dashboard-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: 0;
                overflow: hidden;
                padding: 0;
                transition: height 0.3s ease;
            }

            .sidebar.active {
                height: auto;
                padding: 20px;
            }

            .main-content {
                padding: 10px;
            }

            .form-header {
                flex-direction: column;
                gap: 15px;
            }

            .hamburger {
                display: block;
                align-self: flex-start;
            }

            .form-container {
                padding: 20px;
            }

            input[type="text"],
            input[type="file"],
            textarea,
            select {
                font-size: 14px;
                padding: 10px;
            }

            .btn {
                font-size: 14px;
                padding: 10px 20px;
            }

            .existing-images img {
                width: 80px;
                height: 80px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <nav class="sidebar">
            <h2>Navigation</h2>
            <ul>
                <li><a href="{{ route('portal.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('projects.index') }}">Projects</a></li>
                <li><a href="#">Settings</a></li>
                <li>
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
</li>

<!-- Logout form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    @method('POST')
</form>

            </ul>
        </nav>
        <div class="main-content">
            <div class="form-header">
                <span class="hamburger" onclick="toggleSidebar()">&#9776;</span>
                <h1>{{ __('Edit Project') }}</h1>
            </div>

            <div class="form-container">
                <form method="POST" action="{{ route('projects.update', $project) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">{{ __('Title') }}</label>
                        <input id="title" type="text" name="title" value="{{ old('title', $project->title) }}" required maxlength="60" class="@error('title') is-invalid @enderror">
                        @error('title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea id="description" name="description" required maxlength="160" class="@error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="company">{{ __('Company') }}</label>
                        <select id="company" name="company" required class="@error('company') is-invalid @enderror">
                            <option value="Jay Vee Engineering" {{ old('company', $project->company) == 'Jay Vee Engineering' ? 'selected' : '' }}>Jay Vee Engineering</option>
                            <option value="Jay Vee Structural Engineering Pvt Ltd" {{ old('company', $project->company) == 'Jay Vee Structural Engineering Pvt Ltd' ? 'selected' : '' }}>Jay Vee Structural Engineering Pvt Ltd</option>
                            <option value="Jakuva Build Tech" {{ old('company', $project->company) == 'Jakuva Build Tech' ? 'selected' : '' }}>Jakuva Build Tech</option>
                        </select>
                        @error('company')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location">{{ __('Location') }}</label>
                        <input id="location" type="text" name="location" value="{{ old('location', $project->location) }}" required class="@error('location') is-invalid @enderror">
                        @error('location')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>{{ __('Existing Images') }}</label>
                        <div class="existing-images">
                            @if (!empty($project->images) && is_array($project->images))
                                @foreach ($project->images as $image)
                                    <img src="{{ Storage::url($image) }}" alt="Project Image">
                                @endforeach
                            @else
                                <p>{{ __('No images uploaded.') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="images">{{ __('Upload New Images (will replace existing)') }}</label>
                        <input id="images" type="file" name="images[]" multiple accept="image/*" class="@error('images.*') is-invalid @enderror">
                        @error('images.*')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        {{ __('Update Project') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }
    </script>
</body>
</html>