@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <!-- Header -->
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('books.show', $book) }}" class="btn btn-outline-secondary me-3">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <h1 class="mb-1">
                    <i class="fas fa-edit text-warning"></i> Edit Buku
                </h1>
                <p class="text-muted mb-0">{{ $book->title }}</p>
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
                <form action="{{ route('books.update', $book) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">
                            <i class="fas fa-book text-primary me-2"></i>Judul Buku
                        </label>
                        <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title', $book->title) }}" 
                               placeholder="Masukkan judul buku..." required>
                        @error('title')
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Author -->
                    <div class="mb-3">
                        <label for="author" class="form-label fw-bold">
                            <i class="fas fa-user text-success me-2"></i>Penulis
                        </label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" 
                               id="author" name="author" value="{{ old('author', $book->author) }}" 
                               placeholder="Nama penulis buku..." required>
                        @error('author')
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- ISBN & Year Row -->
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <div class="mb-3">
                                <label for="isbn" class="form-label fw-bold">
                                    <i class="fas fa-barcode text-info me-2"></i>ISBN
                                </label>
                                <input type="text" class="form-control @error('isbn') is-invalid @enderror" 
                                       id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}" 
                                       placeholder="978-xxx-xxx-xxx-x" required>
                                @error('isbn')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-5">
                            <div class="mb-3">
                                <label for="publication_year" class="form-label fw-bold">
                                    <i class="fas fa-calendar text-warning me-2"></i>Tahun Terbit
                                </label>
                                <input type="number" class="form-control @error('publication_year') is-invalid @enderror" 
                                       id="publication_year" name="publication_year" value="{{ old('publication_year', $book->publication_year) }}" 
                                       min="1000" max="{{ date('Y') }}" required>
                                @error('publication_year')
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="form-label fw-bold">
                            <i class="fas fa-align-left text-secondary me-2"></i>Deskripsi
                            <small class="text-muted">(Opsional)</small>
                        </label>
                        <textarea class="form-control @error('description') is-invalid @enderror" 
                                  id="description" name="description" rows="4" 
                                  placeholder="Ceritakan tentang buku ini...">{{ old('description', $book->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                            </div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Deskripsi singkat tentang isi atau ringkasan buku
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-between">
                        <div>
                            <a href="{{ route('books.show', $book) }}" class="btn btn-outline-secondary">
                                <i class="fas fa-times me-2"></i>Batal
                            </a>
                        </div>
                        <div class="d-grid gap-2 d-md-flex">
                            <button type="submit" class="btn btn-warning btn-lg">
                                <i class="fas fa-save me-2"></i>Update Buku
                            </button>
                            <a href="{{ route('books.show', $book) }}" class="btn btn-outline-info">
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
                            <strong>Dibuat:</strong> {{ $book->created_at->format('d M Y, H:i') }}
                        </small>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">
                            <i class="fas fa-calendar-edit me-2"></i>
                            <strong>Terakhir diupdate:</strong> {{ $book->updated_at->format('d M Y, H:i') }}
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection