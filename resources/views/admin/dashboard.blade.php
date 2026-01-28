@extends('layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
    <style>
        .stat-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .stat-card-primary {
            background: linear-gradient(135deg, #8B1E3F 0%, #6F1832 100%);
        }

        .stat-card-secondary {
            background: linear-gradient(135deg, #2FA4A9 0%, #268387 100%);
        }

        .stat-card-accent {
            background: linear-gradient(135deg, #F4D35E 0%, #E6B91C 100%);
        }

        .stat-card-mixed {
            background: linear-gradient(135deg, #8B1E3F 0%, #2FA4A9 100%);
        }

        .stat-card .card-body {
            padding: 30px 20px;
        }

        .stat-icon-wrapper {
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .stat-icon {
            font-size: 32px;
            color: white;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .activity-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .activity-card .card-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border-bottom: 2px solid #8B1E3F;
            padding: 20px 25px;
        }

        .table-modern {
            border-collapse: separate;
            border-spacing: 0;
        }

        .table-modern thead th {
            background: #f8f9fa;
            border: none;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            color: #6c757d;
            padding: 15px 20px;
        }

        .table-modern tbody tr {
            transition: all 0.2s ease;
        }

        .table-modern tbody tr:hover {
            background: #f8f9fa;
            transform: scale(1.01);
        }

        .table-modern tbody td {
            padding: 15px 20px;
            border-bottom: 1px solid #f0f0f0;
            vertical-align: middle;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            font-size: 1.1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .badge-time {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .btn-view-all {
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-view-all:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
    </style>

    <!-- Welcome Banner -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card" style="background: linear-gradient(135deg, #8B1E3F 0%, #6F1832 100%); border: none; border-radius: 15px; overflow: hidden;">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="text-white mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h3>
                            <p class="text-white mb-0 opacity-75">Here's what's happening with AYE Sickle Cell Foundation today.</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <h5 class="text-white mb-1">{{ now()->format('l') }}</h5>
                            <p class="text-white mb-0 opacity-75">{{ now()->format('F d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Row -->
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card stat-card stat-card-primary">
                <div class="card-body text-center">
                    <div class="stat-icon-wrapper">
                        <i class="flaticon-381-network stat-icon"></i>
                    </div>
                    <h2 class="stat-number">{{ $stats['total_contacts'] }}</h2>
                    <p class="stat-label mb-0">Total Contacts</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card stat-card stat-card-secondary">
                <div class="card-body text-center">
                    <div class="stat-icon-wrapper">
                        <i class="flaticon-077-menu-1 stat-icon"></i>
                    </div>
                    <h2 class="stat-number">{{ $stats['total_volunteers'] }}</h2>
                    <p class="stat-label mb-0">Total Volunteers</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card stat-card stat-card-accent">
                <div class="card-body text-center">
                    <div class="stat-icon-wrapper">
                        <i class="flaticon-381-add stat-icon"></i>
                    </div>
                    <h2 class="stat-number">{{ $stats['recent_contacts'] }}</h2>
                    <p class="stat-label mb-0">New Contacts (7d)</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-4">
            <div class="card stat-card stat-card-mixed">
                <div class="card-body text-center">
                    <div class="stat-icon-wrapper">
                        <i class="flaticon-381-heart stat-icon"></i>
                    </div>
                    <h2 class="stat-number">{{ $stats['recent_volunteers'] }}</h2>
                    <p class="stat-label mb-0">New Volunteers (7d)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="row">
        <div class="col-xl-6 mb-4">
            <div class="card activity-card">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        <i class="flaticon-381-network mr-2" style="color: #8B1E3F;"></i>
                        Recent Contact Submissions
                    </h4>
                </div>
                <div class="card-body">
                    @if($recentContacts->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-modern">
                                <thead>
                                    <tr>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentContacts as $index => $contact)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-avatar mr-3" style="background: linear-gradient(135deg, {{ ['#8B1E3F', '#2FA4A9', '#F4D35E'][$index % 3] }} 0%, {{ ['#6F1832', '#268387', '#E6B91C'][$index % 3] }} 100%);">
                                                        {{ strtoupper(substr($contact->name, 0, 1)) }}
                                                    </div>
                                                    <strong>{{ $contact->name }}</strong>
                                                </div>
                                            </td>
                                            <td>{{ $contact->email }}</td>
                                            <td>
                                                <span class="badge badge-time" style="background: #8B1E3F; color: white;">
                                                    {{ $contact->created_at->diffForHumans() }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('admin.contacts') }}" class="btn btn-view-all" style="background: linear-gradient(135deg, #8B1E3F 0%, #6F1832 100%); color: white; border: none;">
                                View All Contacts <i class="flaticon-381-right ml-2"></i>
                            </a>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-3">
                                <circle cx="40" cy="40" r="40" fill="#f8f9fa"></circle>
                                <path d="M40 25C31.716 25 25 31.716 25 40C25 48.284 31.716 55 40 55C48.284 55 55 48.284 55 40C55 31.716 48.284 25 40 25Z" fill="#dee2e6"></path>
                            </svg>
                            <p class="text-muted mb-0">No contact submissions yet.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-xl-6 mb-4">
            <div class="card activity-card">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        <i class="flaticon-381-heart mr-2" style="color: #2FA4A9;"></i>
                        Recent Volunteer Applications
                    </h4>
                </div>
                <div class="card-body">
                    @if($recentVolunteers->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-modern">
                                <thead>
                                    <tr>
                                        <th>Volunteer</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recentVolunteers as $index => $volunteer)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-avatar mr-3" style="background: linear-gradient(135deg, {{ ['#2FA4A9', '#F4D35E', '#8B1E3F'][$index % 3] }} 0%, {{ ['#268387', '#E6B91C', '#6F1832'][$index % 3] }} 100%);">
                                                        {{ strtoupper(substr($volunteer->full_name, 0, 1)) }}
                                                    </div>
                                                    <strong>{{ $volunteer->full_name }}</strong>
                                                </div>
                                            </td>
                                            <td>{{ $volunteer->email }}</td>
                                            <td>
                                                <span class="badge badge-time" style="background: #2FA4A9; color: white;">
                                                    {{ $volunteer->created_at->diffForHumans() }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('admin.volunteers') }}" class="btn btn-view-all" style="background: linear-gradient(135deg, #2FA4A9 0%, #268387 100%); color: white; border: none;">
                                View All Volunteers <i class="flaticon-381-right ml-2"></i>
                            </a>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-3">
                                <circle cx="40" cy="40" r="40" fill="#f8f9fa"></circle>
                                <path d="M40 25C31.716 25 25 31.716 25 40C25 48.284 31.716 55 40 55C48.284 55 55 48.284 55 40C55 31.716 48.284 25 40 25Z" fill="#dee2e6"></path>
                            </svg>
                            <p class="text-muted mb-0">No volunteer applications yet.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
