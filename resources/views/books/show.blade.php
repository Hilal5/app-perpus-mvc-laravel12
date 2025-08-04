@extends('layouts.app')

@section('title', $book->title)

@section('content')
<div class="row">
    <!-- Main Content -->
    <div class="col-12 col-lg-8">
        <!-- Book Header Card -->
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-start">
                    <div class="mb-2 mb-md-0">
                        <h1 class="h3 mb-1">{{ $book->title }}</h1>
                        <p class="mb-0 opacity-75">
                            <i class="fas fa-user me-2"></i>{{ $book->author }}
                        </p>
                    </div>
                    <span class="badge bg-light text-dark fs-6">
                        {{ $book->publication_year }}
                    </span>
                </div>
            </div>
            
            <div class="card-body">
                <!-- Book Details -->
                <div class="row g-3 mb-4">
                    <div class="col-6 col-md-3">
                        <div class="border rounded p-3 text-center h-100">
                            <i class="fas fa-barcode fa-2x text-info mb-2"></i>
                            <h6 class="mb-1">ISBN</h6>
                            <small class="text-muted font-monospace">{{ $book->isbn }}</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="border rounded p-3 text-center h-100">
                            <i class="fas fa-calendar fa-2x text-warning mb-2"></i>
                            <h6 class="mb-1">Tahun Terbit</h6>
                            <small class="text-muted">{{ $book->publication_year }}</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="border rounded p-3 text-center h-100">
                            <i class="fas fa-plus-circle fa-2x text-success mb-2"></i>
                            <h6 class="mb-1">Ditambahkan</h6>
                            <small class="text-muted">{{ $book->created_at->format('d M Y') }}</small>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="border rounded p-3 text-center h-100">
                            <i class="fas fa-edit fa-2x text-primary mb-2"></i>
                            <h6 class="mb-1">Diupdate</h6>
                            <small class="text-muted">{{ $book->updated_at->format('d M Y') }}</small>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                @if($book->description)
                    <div class="mb-4">
                        <h5 class="border-bottom pb-2 mb-3">
                            <i class="fas fa-align-left text-secondary me-2"></i>Deskripsi
                        </h5>
                        <div class="bg-light rounded p-3">
                            <p class="mb-0 lh-lg">{{ $book->description }}</p>
                        </div>
                    </div>
                @endif

                <!-- Action Buttons -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                    </a>
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">
                        <i class="fas fa-edit me-2"></i>Edit Buku
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="fas fa-trash me-2"></i>Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="col-12 col-lg-4">
        <!-- Quick Actions -->
        <div class="card shadow-sm mb-4">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="fas fa-bolt text-warning me-2"></i>Aksi Cepat
                </h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('books.edit', $book) }}" class="btn btn-outline-warning btn-sm">
                        <i class="fas fa-edit me-2"></i>Edit Buku Ini
                    </a>
                    <a href="{{ route('books.create') }}" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-plus me-2"></i>Tambah Buku Baru
                    </a>
                    <a href="{{ route('books.index') }}" class="btn btn-outline-info btn-sm">
                        <i class="fas fa-list me-2"></i>Lihat Semua Buku
                    </a>
                </div>
            </div>
        </div>

        <!-- Book Info -->
        <div class="card shadow-sm">
            <div class="card-header">
                <h6 class="mb-0">
                    <i class="fas fa-info-circle text-info me-2"></i>Informasi Buku
                </h6>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <i class="fas fa-book text-primary me-2"></i>
                        <strong>Judul:</strong> {{ $book->title }}
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-user text-success me-2"></i>
                        <strong>Penulis:</strong> {{ $book->author }}
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-hashtag text-secondary me-2"></i>
                        <strong>ID:</strong> #{{ $book->id }}
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-clock text-muted me-2"></i>
                        <strong>Dibuat:</strong> {{ $book->created_at->diffForHumans() }}
                    </li>
                    <li class="mb-0">
                        <i class="fas fa-sync text-muted me-2"></i>
                        <strong>Diupdate:</strong> {{ $book->updated_at->diffForHumans() }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">
                    <i class="fas fa-exclamation-triangle me-2"></i>Konfirmasi Hapus
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3">
                    <i class="fas fa-trash-alt fa-3x text-danger mb-3"></i>
                    <h6>Yakin ingin menghapus buku ini?</h6>
                </div>
                <div class="alert alert-warning">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>{{ $book->title }}</strong> akan dihapus secara permanen dan tidak dapat dikembalikan.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Batal
                </button>
                <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash me-2"></i>Ya, Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
