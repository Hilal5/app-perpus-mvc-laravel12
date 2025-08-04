

<?php $__env->startSection('title', 'Perpustakaan Digital'); ?>

<?php $__env->startSection('content'); ?>
<style>
    /* Library Theme Styles */
    .library-header {
        background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);
        color: white;
        border-radius: 15px;
        position: relative;
        overflow: hidden;
    }
    
    .library-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="books" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse"><rect width="2" height="20" fill="rgba(255,255,255,0.1)"/><rect x="5" width="2" height="20" fill="rgba(255,255,255,0.1)"/><rect x="10" width="2" height="20" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23books)"/></svg>');
        opacity: 0.3;
    }
    
    .book-card {
        background: #fefefe;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .book-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, #FF6B6B, #4ECDC4, #45B7D1, #96CEB4);
    }
    
    .book-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .book-spine {
        background: linear-gradient(45deg, #6C5CE7, #A29BFE);
        color: white;
        padding: 0.5rem;
        border-radius: 8px 8px 0 0;
        font-weight: bold;
        font-size: 0.9rem;
        position: relative;
    }
    
    .book-content {
        padding: 1.5rem;
        padding-left: 2rem;
    }
    
    .book-title {
        color: #2d3436;
        font-weight: 700;
        font-size: 1.1rem;
        line-height: 1.4;
        margin-bottom: 0.8rem;
        font-family: 'Georgia', serif;
    }
    
    .book-author {
        color: #636e72;
        font-style: italic;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
    }
    
    .book-meta {
        font-size: 0.8rem;
        color: #74b9ff;
        background: rgba(116, 185, 255, 0.1);
        padding: 0.3rem 0.6rem;
        border-radius: 20px;
        display: inline-block;
        margin-bottom: 0.8rem;
    }
    
    .book-description {
        color: #636e72;
        font-size: 0.9rem;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .book-actions {
        border-top: 1px solid #f1f2f6;
        padding: 1rem 1.5rem;
        background: rgba(0,0,0,0.02);
    }
    
    .library-stats {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .search-library {
        background: white;
        border-radius: 25px;
        border: 2px solid #ddd;
        padding: 0.6rem 1.2rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .search-library:focus {
        border-color: #74b9ff;
        box-shadow: 0 0 0 0.2rem rgba(116, 185, 255, 0.25);
    }
    
    .empty-library {
        text-align: center;
        padding: 4rem 2rem;
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        border-radius: 20px;
        color: white;
    }
    
    .floating-add-btn {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        color: white;
        font-size: 1.5rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        transition: all 0.3s ease;
        z-index: 1000;
    }
    
    .floating-add-btn:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 25px rgba(0,0,0,0.4);
    }
    
    .library-quote {
        font-style: italic;
        color: rgba(255,255,255,0.9);
        font-size: 1.1rem;
        margin-bottom: 0;
    }
    
    .genre-badge {
        background: linear-gradient(45deg, #ff9a9e, #fecfef);
        color: #2d3436;
        padding: 0.2rem 0.8rem;
        border-radius: 15px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
    }
    
    .reading-progress {
        height: 4px;
        background: linear-gradient(90deg, #ff9a9e, #fecfef, #a18cd1, #fbc2eb);
        border-radius: 2px;
        margin-top: 1rem;
    }
</style>

<!-- Library Header -->
<div class="library-header p-4 mb-4 position-relative">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1 class="mb-2 position-relative">
                <i class="fas fa-university me-3"></i>
                Perpustakaan Digital
            </h1>
            <p class="library-quote mb-0">
                "Sebuah ruangan tanpa buku seperti tubuh tanpa jiwa" - Cicero
            </p>
        </div>
        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <div class="d-flex flex-column align-items-md-end">
                <div class="text-light mb-2">
                    <i class="fas fa-clock me-2"></i>
                    <?php echo e(now()->format('H:i')); ?> WIB
                </div>
                <div class="text-light">
                    <i class="fas fa-calendar me-2"></i>
                    <?php echo e(now()->translatedFormat('l, d F Y')); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Library Statistics -->
<?php if($books->total() > 0): ?>
<div class="library-stats">
    <div class="row text-center">
        <div class="col-6 col-md-3">
            <div class="mb-2">
                <i class="fas fa-books fa-2x"></i>
            </div>
            <h3 class="mb-0"><?php echo e($books->total()); ?></h3>
            <small>Total Koleksi</small>
        </div>
        <div class="col-6 col-md-3">
            <div class="mb-2">
                <i class="fas fa-bookmark fa-2x"></i>
            </div>
            <h3 class="mb-0"><?php echo e($books->currentPage()); ?></h3>
            <small>Halaman Aktif</small>
        </div>
        <div class="col-6 col-md-3 mt-3 mt-md-0">
            <div class="mb-2">
                <i class="fas fa-eye fa-2x"></i>
            </div>
            <h3 class="mb-0"><?php echo e($books->count()); ?></h3>
            <small>Ditampilkan</small>
        </div>
        <div class="col-6 col-md-3 mt-3 mt-md-0">
            <div class="mb-2">
                <i class="fas fa-star fa-2x"></i>
            </div>
            <h3 class="mb-0"><?php echo e(rand(85, 98)); ?>%</h3>
            <small>Rating Koleksi</small>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Search Bar -->
<div class="row mb-4">
    <div class="col-md-8 mx-auto">
        <div class="position-relative">
            <i class="fas fa-search position-absolute" style="left: 1rem; top: 50%; transform: translateY(-50%); color: #74b9ff;"></i>
            <input type="text" class="form-control search-library ps-5" 
                   placeholder="🔍 Cari buku berdasarkan judul, penulis, atau ISBN...">
        </div>
    </div>
</div>

<!-- Books Collection -->
<?php if($books->count() > 0): ?>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="text-muted">
                    <i class="fas fa-book-open me-2"></i>
                    Koleksi Buku Tersedia
                </h3>
                <div class="d-flex align-items-center">
                    <span class="badge bg-primary me-2"><?php echo e($books->count()); ?> buku</span>
                    <a href="<?php echo e(route('books.create')); ?>" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-plus me-1"></i>Tambah
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="book-card h-100">
                    <!-- Book Spine -->
                    <div class="book-spine">
                        <div class="d-flex justify-content-between align-items-center">
                            <span><?php echo e($book->publication_year); ?></span>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-link text-white p-0" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo e(route('books.show', $book)); ?>">
                                        <i class="fas fa-eye me-2"></i>Lihat Detail
                                    </a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('books.edit', $book)); ?>">
                                        <i class="fas fa-edit me-2"></i>Edit Buku
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="<?php echo e(route('books.destroy', $book)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="dropdown-item text-danger" 
                                                    onclick="return confirm('📚 Yakin ingin mengeluarkan buku ini dari perpustakaan?')">
                                                <i class="fas fa-trash me-2"></i>Hapus dari Koleksi
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Book Content -->
                    <div class="book-content">
                        <h5 class="book-title"><?php echo e($book->title); ?></h5>
                        <div class="book-author">
                            <i class="fas fa-feather-alt me-2"></i><?php echo e($book->author); ?>

                        </div>
                        
                        <div class="book-meta">
                            <i class="fas fa-barcode me-1"></i><?php echo e($book->isbn); ?>

                        </div>
                        
                        <?php if($book->description): ?>
                            <div class="book-description">
                                <i class="fas fa-quote-left me-2 text-muted"></i>
                                <?php echo e(Str::limit($book->description, 120)); ?>

                            </div>
                        <?php endif; ?>
                        
                        <!-- Random Genre Badge -->
                        <?php
                            $genres = ['Fiksi', 'Non-Fiksi', 'Sejarah', 'Sains', 'Teknologi', 'Sastra', 'Biografi', 'Misteri'];
                            $randomGenre = $genres[array_rand($genres)];
                        ?>
                        <span class="genre-badge"><?php echo e($randomGenre); ?></span>
                        
                        <!-- Reading Progress (Random) -->
                        <div class="reading-progress" style="width: <?php echo e(rand(30, 100)); ?>%"></div>
                    </div>
                    
                    <!-- Book Actions -->
                    <div class="book-actions">
                        <div class="row g-2">
                            <div class="col-4">
                                <a href="<?php echo e(route('books.show', $book)); ?>" class="btn btn-outline-info btn-sm w-100">
                                    <i class="fas fa-book-reader"></i>
                                    <div class="d-none d-lg-inline ms-1">Baca</div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="<?php echo e(route('books.edit', $book)); ?>" class="btn btn-outline-warning btn-sm w-100">
                                    <i class="fas fa-edit"></i>
                                    <div class="d-none d-lg-inline ms-1">Edit</div>
                                </a>
                            </div>
                            <div class="col-4">
                                <form action="<?php echo e(route('books.destroy', $book)); ?>" method="POST" class="w-100">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-outline-danger btn-sm w-100" 
                                            onclick="return confirm('📚 Yakin ingin mengeluarkan buku ini dari perpustakaan?')">
                                        <i class="fas fa-archive"></i>
                                        <div class="d-none d-lg-inline ms-1">Arsip</div>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Library Pagination -->
    <?php if($books->hasPages()): ?>
        <div class="row mt-5">
            <div class="col-12">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-4 bg-light rounded">
                    <div class="mb-3 mb-md-0 text-center text-md-start">
                        <span class="text-muted">
                            <i class="fas fa-info-circle me-2"></i>
                            Halaman <?php echo e($books->currentPage()); ?> dari <?php echo e($books->lastPage()); ?> 
                            (<?php echo e($books->firstItem()); ?>-<?php echo e($books->lastItem()); ?> dari <?php echo e($books->total()); ?> buku)
                        </span>
                    </div>
                    <div>
                        <?php echo e($books->onEachSide(1)->links('pagination::bootstrap-4')); ?>

                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php else: ?>
    <!-- Empty Library -->
    <div class="empty-library">
        <div class="mb-4">
            <i class="fas fa-book-open fa-5x mb-4 opacity-75"></i>
            <h2>Perpustakaan Masih Kosong</h2>
            <p class="lead mb-4">
                Perpustakaan yang bagus dimulai dengan buku pertama yang istimewa. 
                Mari mulai membangun koleksi buku yang menginspirasi!
            </p>
            <a href="<?php echo e(route('books.create')); ?>" class="btn btn-light btn-lg">
                <i class="fas fa-plus me-2"></i>Tambahkan Buku Pertama
            </a>
        </div>
    </div>
<?php endif; ?>

<!-- Floating Add Button -->
<a href="<?php echo e(route('books.create')); ?>" class="floating-add-btn d-flex align-items-center justify-content-center" 
   title="Tambah Buku Baru">
    <i class="fas fa-plus"></i>
</a>

<!-- JavaScript for Search (Basic) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-library');
    const bookCards = document.querySelectorAll('.book-card');
    
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        bookCards.forEach(card => {
            const title = card.querySelector('.book-title').textContent.toLowerCase();
            const author = card.querySelector('.book-author').textContent.toLowerCase();
            const isbn = card.querySelector('.book-meta').textContent.toLowerCase();
            
            if (title.includes(searchTerm) || author.includes(searchTerm) || isbn.includes(searchTerm)) {
                card.closest('.col-12, .col-md-6, .col-lg-4').style.display = 'block';
            } else {
                card.closest('.col-12, .col-md-6, .col-lg-4').style.display = 'none';
            }
        });
    });
    
    // Animate cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    bookCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\mvc-project\resources\views/books/index.blade.php ENDPATH**/ ?>