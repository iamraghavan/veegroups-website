<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Projects') }}</title>
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

        .dashboard-header {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dashboard-header h1 {
            font-size: 28px;
            color: #34495e;
            margin: 0;
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
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        .btn-secondary {
            background-color: #7f8c8d;
            color: #ffffff;
        }

        .btn-secondary:hover {
            background-color: #6c7a89;
        }

        .btn-danger {
            background-color: #e74c3c;
            color: #ffffff;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: #34495e;
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .project-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-bottom: 2px solid #dfe6e9;
        }

        .project-card-content {
            padding: 20px;
        }

        .project-card h3 {
            font-size: 20px;
            color: #34495e;
            margin-bottom: 10px;
        }

        .project-card p {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 10px;
        }

        .project-actions {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
        }

        .success-message {
            background-color: #2ecc71;
            color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Desktop-specific styles */
        @media (min-width: 768px) {
            .sidebar {
                width: 300px;
            }

            .dashboard-header {
                padding: 25px;
            }

            .dashboard-header h1 {
                font-size: 32px;
            }

            .project-grid {
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            }

            .project-card-content {
                padding: 25px;
            }

            .project-card h3 {
                font-size: 22px;
            }

            .btn {
                padding: 12px 30px;
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

            .dashboard-header {
                flex-direction: column;
                gap: 15px;
            }

            .hamburger {
                display: block;
                align-self: flex-start;
            }

            .project-grid {
                grid-template-columns: 1fr;
            }

            .project-card img {
                height: 120px;
            }

            .project-card-content {
                padding: 15px;
            }

            .project-card h3 {
                font-size: 18px;
            }

            .project-card p {
                font-size: 13px;
            }

            .btn {
                font-size: 14px;
                padding: 10px 20px;
                width: 100%;
            }

            .project-actions {
                flex-direction: column;
                align-items: stretch;
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
            <div class="dashboard-header">
                <span class="hamburger" onclick="toggleSidebar()">&#9776;</span>
                <h1>{{ __('Projects') }}</h1>
                <a href="{{ route('projects.create') }}" class="btn btn-primary">
                    {{ __('Create New Project') }}
                </a>
            </div>

            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <div class="project-grid">
                @forelse ($projects as $project)
                    <div class="project-card">
                        @if (!empty($project->images) && is_array($project->images))
                            <img src="{{ Storage::url($project->images[0]) }}" alt="{{ $project->title }}">
                        @else
                            <img src="https://via.placeholder.com/300x150" alt="No Image">
                        @endif
                        <div class="project-card-content">
                            <h3>{{ $project->title }}</h3>
                            <p><strong>{{ __('Company') }}:</strong> {{ $project->company }}</p>
                            <p><strong>{{ __('Location') }}:</strong> {{ $project->location }}</p>
                            <p>{{ Str::limit($project->description, 100) }}</p>
                            <div class="project-actions">
                                <a href="{{ route('projects.edit', $project) }}" class="btn btn-secondary">
                                    {{ __('Edit') }}
                                </a>
                                <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('{{ __('Are you sure?') }}')">
                                        {{ __('Delete') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p style="text-align: center; color: #34495e;">{{ __('No projects found.') }}</p>
                @endforelse
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