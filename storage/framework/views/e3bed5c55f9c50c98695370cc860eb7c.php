

<?php $__env->startSection('page-title', 'Volunteer Applications'); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .volunteer-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .volunteer-card .card-header {
            background: linear-gradient(135deg, #2FA4A9 0%, #268387 100%);
            border: none;
            padding: 20px 25px;
        }
        
        .table-volunteers {
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table-volunteers thead th {
            background: #f8f9fa;
            border: none;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            color: #6c757d;
            padding: 15px 20px;
            white-space: nowrap;
        }
        
        .table-volunteers tbody tr {
            transition: all 0.2s ease;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .table-volunteers tbody tr:hover {
            background: #f8f9fa;
            transform: scale(1.01);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        .table-volunteers tbody td {
            padding: 15px 20px;
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
        
        .badge-date {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            background: #2FA4A9;
            color: white;
        }
        
        .btn-delete {
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid #dc3545;
            background: white;
            color: #dc3545;
            transition: all 0.3s ease;
        }
        
        .btn-delete:hover {
            background: #dc3545;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
        }
        
        .skills-cell {
            max-width: 250px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .email-link {
            color: #2FA4A9;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .email-link:hover {
            color: #268387;
            text-decoration: underline;
        }
    </style>

    <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="border-radius: 10px; border-left: 4px solid #28a745;">
        <strong><i class="flaticon-381-check mr-2"></i>Success!</strong> <?php echo e(session('success')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-12">
            <div class="card volunteer-card">
                <div class="card-header">
                    <h4 class="card-title mb-0 text-white">
                        <i class="flaticon-381-heart mr-2"></i>
                        Volunteer Applications
                        <span class="badge badge-light ml-2" style="background: rgba(255,255,255,0.3); color: white;"><?php echo e($volunteers->total()); ?> Total</span>
                    </h4>
                </div>
                <div class="card-body">
                    <?php if($volunteers->count() > 0): ?>
                        <div class="table-responsive">
                            <table class="table table-volunteers">
                                <thead>
                                    <tr>
                                        <th>Volunteer</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Skills</th>
                                        <th>Availability</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $volunteers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $volunteer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-avatar mr-3" style="background: linear-gradient(135deg, <?php echo e(['#2FA4A9', '#F4D35E', '#8B1E3F'][($index + $volunteers->firstItem()) % 3]); ?> 0%, <?php echo e(['#268387', '#E6B91C', '#6F1832'][($index + $volunteers->firstItem()) % 3]); ?> 100%);">
                                                        <?php echo e(strtoupper(substr($volunteer->full_name, 0, 1))); ?>

                                                    </div>
                                                    <div>
                                                        <strong class="d-block"><?php echo e($volunteer->full_name); ?></strong>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo e($volunteer->email); ?>" class="email-link">
                                                    <?php echo e($volunteer->email); ?>

                                                </a>
                                            </td>
                                            <td><?php echo e($volunteer->phone ?? 'N/A'); ?></td>
                                            <td>
                                                <div class="skills-cell" title="<?php echo e($volunteer->skills ?? 'Not specified'); ?>">
                                                    <?php echo e($volunteer->skills ?? 'Not specified'); ?>

                                                </div>
                                            </td>
                                            <td><?php echo e($volunteer->availability ?? 'Not specified'); ?></td>
                                            <td>
                                                <span class="badge badge-date">
                                                    <?php echo e($volunteer->created_at->format('M d, Y')); ?>

                                                </span>
                                            </td>
                                            <td>
                                                <form action="<?php echo e(route('admin.volunteers.delete', $volunteer->id)); ?>" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this volunteer application?')">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-delete btn-sm">
                                                        <i class="flaticon-381-trash mr-1"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 d-flex justify-content-between align-items-center">
                            <div class="text-muted">
                                Showing <?php echo e($volunteers->firstItem()); ?> to <?php echo e($volunteers->lastItem()); ?> of <?php echo e($volunteers->total()); ?> entries
                            </div>
                            <div>
                                <?php echo e($volunteers->links()); ?>

                            </div>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-5">
                            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-3">
                                <circle cx="50" cy="50" r="50" fill="#f8f9fa"></circle>
                                <path d="M50 30C38.95 30 30 38.95 30 50C30 61.05 38.95 70 50 70C61.05 70 70 61.05 70 50C70 38.95 61.05 30 50 30Z" fill="#dee2e6"></path>
                            </svg>
                            <h5 class="text-muted mb-2">No Volunteer Applications Yet</h5>
                            <p class="text-muted">When people submit volunteer applications, they will appear here.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Noksoft Ideas\Documents\Projects\AYE\resources\views/admin/volunteers.blade.php ENDPATH**/ ?>