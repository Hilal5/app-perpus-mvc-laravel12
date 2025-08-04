@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="mb-2">
                <i class="fas fa-plus-circle text-primary"></i> Tambah Buku Baru
            </h1>
            <p class="text-muted">Lengkapi form di bawah untuk menambahkan buku ke koleksi</p>
        </div>

        <!-- Form Card -->
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    <i class="fas fa-edit me-2"></i>Form Tambah Buku
                </h5>
            </div>
            
            <div class="card-body">
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    
                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">
                            <i class="fas fa-book text-primary me-2"></i>Judul Buku
                        </label>
                        <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title') }}" 
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
                               id="author" name="author" value="{{ old('author') }}" 
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
                                       id="isbn" name="isbn" value="{{ old('isbn') }}" 
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
                                       id="publication_year" name="publication_year" value="{{ old('publication_year', date('Y')) }}" 
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
                                  placeholder="Ceritakan tentang buku ini...">{{ old('description') }}</textarea>
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
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('books.index') }}" class="btn btn-outline-secondary btn-lg me-md-2">
                            <i class="fas fa-times me-2"></i>Batal
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save me-2"></i>Simpan Buku
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Help Card -->
        <div class="card mt-4 border-info">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-info">
                            <i class="fas fa-lightbulb me-2"></i>Tips:
                        </h6>
                        <ul class="small text-muted mb-0">
                            <li>Pastikan judul buku ditulis dengan benar</li>
                            <li>ISBN harus unik untuk setiap buku</li>
                            <li>Tahun terbit tidak boleh melebihi tahun sekarang</li>
                        </ul>
                    </div>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <h6 class="text-info">
                            <i class="fas fa-question-circle me-2"></i>Bantuan:
                        </h6>
                        <p class="small text-muted mb-0">
                            Jika mengalami kesulitan, pastikan semua field yang wajib sudah diisi dengan benar.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection