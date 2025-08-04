

<?php $__env->startSection('title', 'Edit Buku'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <!-- Header -->
        <div class="d-flex align-items-center mb-4">
            <a href="<?php echo e(route('books.show', $book)); ?>" class="btn btn-outline-secondary me-3">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h1 class="mb-1">
                    <i class="fas fa-edit text-warning"></i> Edit Buku
                </h1>
                <p class="text-muted mb-0"><?php echo e($book->title); ?></p>
            </div>
        </div>

        <!-- Form Card -->
        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                <h5 class="mb-0">
                    <i class="fas fa-pencil-alt me-2"></i>Form Edit Buku
                </h5>
            </div>
            
            <div class="card-body">
                <form action="<?php echo e(route('books.update', $book)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    
                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">
                            <i class="fas fa-book text-primary me-2"></i>Judul Buku
                        </label>
                        <input type="text" class="form-control form-control-lg <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                               id="title" name="title" value="<?php echo e(old('title', $book->title)); ?>" 
                               placeholder="Masukkan judul buku..." required>
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle me-1"></i><?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Author -->
                    <div class="mb-3">
                        <label for="author" class="form-label fw-bold">
                            <i class="fas fa-user text-success me-2"></i>Penulis
                        </label>
                        <input type="text" class="form-control <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                               id="author" name="author" value="<?php echo e(old('author', $book->author)); ?>" 
                               placeholder="Nama penulis buku..." required>
                        <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle me-1"></i><?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- ISBN & Year Row -->
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3">
                                <label for="isbn" class="form-label fw-bold">
                                    <i class="fas fa-barcode text-info me-2"></i>ISBN
                                </label>
                                <input type="text" class="form-control <?php $__errorArgs = ['isbn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       id="isbn" name="isbn" value="<?php echo e(old('isbn', $book->isbn)); ?>" 
                                       placeholder="978-xxx-xxx-xxx-x" required>
                                <?php $__errorArgs = ['isbn'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-circle me-1"></i><?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="mb-3">
                                <label for="publication_year" class="form-label fw-bold">
                                    <i class="fas fa-calendar text-warning me-2"></i>Tahun Terbit
                                </label>
                                <input type="number" class="form-control <?php $__errorArgs = ['publication_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                       id="publication_year" name="publication_year" value="<?php echo e(old('publication_year', $book->publication_year)); ?>" 
                                       min="1000" max="<?php echo e(date('Y')); ?>" required>
                                <?php $__errorArgs = ['publication_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-circle me-1"></i><?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">
                            <i class="fas fa-align-left text-secondary me-2"></i>Deskripsi
                            <small class="text-muted">(Opsional)</small>
                        </label>
                        <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                  id="description" name="description" rows="4" 
                                  placeholder="Ceritakan tentang buku ini..."><?php echo e(old('description', $book->description)); ?></textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle me-1"></i><?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Deskripsi singkat tentang isi atau ringkasan buku
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                        <div>
                            <a href="<?php echo e(route('books.show', $book)); ?>" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Batal
                            </a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex">
                            <button type="submit" class="btn btn-warning btn-lg">
                                <i class="fas fa-save me-2"></i>Update Buku
                            </button>
                            <a href="<?php echo e(route('books.show', $book)); ?>" class="btn btn-outline-info">
                                <i class="fas fa-eye me-2"></i>Preview
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Changes Preview -->
        <div class="card mt-4 border-info">
            <div class="card-header bg-light">
                <h6 class="mb-0 text-info">
                    <i class="fas fa-history me-2"></i>Informasi Perubahan
                </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <small class="text-muted">
                            <i class="fas fa-calendar-plus me-2"></i>
                            <strong>Dibuat:</strong> <?php echo e($book->created_at->format('d M Y, H:i')); ?>

                        </small>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">
                            <i class="fas fa-calendar-edit me-2"></i>
                            <strong>Terakhir diupdate:</strong> <?php echo e($book->updated_at->format('d M Y, H:i')); ?>

                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\mvc-project\resources\views/books/edit.blade.php ENDPATH**/ ?>