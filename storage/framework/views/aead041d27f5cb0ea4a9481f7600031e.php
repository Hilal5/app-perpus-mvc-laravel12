<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Manajemen Buku'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom Responsive Styles */
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        
        .card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        
        .btn-group-responsive {
            display: flex;
            flex-wrap: wrap;
            gap: 0.25rem;
        }
        
        .btn-group-responsive .btn {
            flex: 1;
            min-width: 60px;
        }
        
        @media (max-width: 576px) {
            .btn-group-responsive {
                flex-direction: column;
            }
            
            .btn-group-responsive .btn {
                width: 100%;
                margin-bottom: 0.25rem;
            }
            
            .card-body {
                padding: 1rem 0.75rem;
            }
            
            .card-title {
                font-size: 1rem;
            }
            
            .navbar-brand {
                font-size: 1.25rem;
            }
            
            .container {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }
        }
        
        .pagination-sm .page-link {
            padding: 0.25rem 0.5rem;
            font-size: 0.8rem;
        }
        
        .book-info {
            font-size: 0.9rem;
            line-height: 1.4;
        }
        
        .book-description {
            color: #6c757d;
            font-size: 0.85rem;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Responsive Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('books.index')); ?>">
                <i class="fas fa-book"></i> Manajemen Buku
            </a>
            
            <!-- Mobile menu button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('books.index')); ?>">
                            <i class="fas fa-list"></i> Daftar Buku
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('books.create')); ?>">
                            <i class="fas fa-plus"></i> Tambah Buku
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container-fluid px-3 px-md-4 py-4">
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i><?php echo e(session('success')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i><?php echo e(session('error')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Auto hide alerts after 5 seconds
        setTimeout(function() {
            let alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                let bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\mvc-project\resources\views/layouts/app.blade.php ENDPATH**/ ?>