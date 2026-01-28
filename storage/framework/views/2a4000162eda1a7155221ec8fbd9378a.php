<?php $__env->startSection('page-title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
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
                            <h3 class="text-white mb-2">Welcome back, <?php echo e(Auth::user()->name); ?>! 👋</h3>
                            <p class="text-white mb-0 opacity-75">Here's what's happening with AYE Sickle Cell Foundation today.</p>
                        </div>
                        <div class="col-md-4 text-right">
                            <h5 class="text-white mb-1"><?php echo e(now()->format('l')); ?></h5>
                            <p class="text-white mb-0 opacity-75"><?php echo e(now()->format('F d, Y')); ?></p>
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
                    <h2 class="stat-number"><?php echo e($stats['total_contacts']); ?></h2>
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
                    <h2 class="stat-number"><?php echo e($stats['total_volunteers']); ?></h2>
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
                    <h2 class="stat-number"><?php echo e($stats['recent_contacts']); ?></h2>
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
                    <h2 class="stat-number"><?php echo e($stats['recent_volunteers']); ?></h2>
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
                    <?php if($recentContacts->count() > 0): ?>
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
                                    <?php $__currentLoopData = $recentContacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-avatar mr-3" style="background: linear-gradient(135deg, <?php echo e(['#8B1E3F', '#2FA4A9', '#F4D35E'][$index % 3]); ?> 0%, <?php echo e(['#6F1832', '#268387', '#E6B91C'][$index % 3]); ?> 100%);">
                                                        <?php echo e(strtoupper(substr($contact->name, 0, 1))); ?>

                                                    </div>
                                                    <strong><?php echo e($contact->name); ?></strong>
                                                </div>
                                            </td>
                                            <td><?php echo e($contact->email); ?></td>
                                            <td>
                                                <span class="badge badge-time" style="background: #8B1E3F; color: white;">
                                                    <?php echo e($contact->created_at->diffForHumans()); ?>

                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <a href="<?php echo e(route('admin.contacts')); ?>" class="btn btn-view-all" style="background: linear-gradient(135deg, #8B1E3F 0%, #6F1832 100%); color: white; border: none;">
                                View All Contacts <i class="flaticon-381-right ml-2"></i>
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-3">
                                <circle cx="40" cy="40" r="40" fill="#f8f9fa"></circle>
                                <path d="M40 25C31.716 25 25 31.716 25 40C25 48.284 31.716 55 40 55C48.284 55 55 48.284 55 40C55 31.716 48.284 25 40 25Z" fill="#dee2e6"></path>
                            </svg>
                            <p class="text-muted mb-0">No contact submissions yet.</p>
                        </div>
                    <?php endif; ?>
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
                    <?php if($recentVolunteers->count() > 0): ?>
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
                                    <?php $__currentLoopData = $recentVolunteers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $volunteer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-avatar mr-3" style="background: linear-gradient(135deg, <?php echo e(['#2FA4A9', '#F4D35E', '#8B1E3F'][$index % 3]); ?> 0%, <?php echo e(['#268387', '#E6B91C', '#6F1832'][$index % 3]); ?> 100%);">
                                                        <?php echo e(strtoupper(substr($volunteer->full_name, 0, 1))); ?>

                                                    </div>
                                                    <strong><?php echo e($volunteer->full_name); ?></strong>
                                                </div>
                                            </td>
                                            <td><?php echo e($volunteer->email); ?></td>
                                            <td>
                                                <span class="badge badge-time" style="background: #2FA4A9; color: white;">
                                                    <?php echo e($volunteer->created_at->diffForHumans()); ?>

                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-3">
                            <a href="<?php echo e(route('admin.volunteers')); ?>" class="btn btn-view-all" style="background: linear-gradient(135deg, #2FA4A9 0%, #268387 100%); color: white; border: none;">
                                View All Volunteers <i class="flaticon-381-right ml-2"></i>
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-3">
                                <circle cx="40" cy="40" r="40" fill="#f8f9fa"></circle>
                                <path d="M40 25C31.716 25 25 31.716 25 40C25 48.284 31.716 55 40 55C48.284 55 55 48.284 55 40C55 31.716 48.284 25 40 25Z" fill="#dee2e6"></path>
                            </svg>
                            <p class="text-muted mb-0">No volunteer applications yet.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Noksoft Ideas\Documents\Projects\AYE\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>