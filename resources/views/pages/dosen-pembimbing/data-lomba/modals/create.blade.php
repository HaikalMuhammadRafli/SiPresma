<!-- Modal header -->
<div class="flex items-center justify-between px-4 py-3 border-b rounded-t-xl bg-primary border-gray-200">
    <h3 class="text-sm font-semibold text-white">
        <i class="fa-solid fa-file-circle-plus me-1"></i>
        Ajukan Lomba Baru
    </h3>
    <button type="button" class="text-white bg-transparent text-sm text-center cursor-pointer" data-modal-hide="modal">
        <i class="fa-solid fa-xmark"></i>
        <span class="sr-only">Close modal</span>
    </button>
</div>

<!-- Modal body -->
@include('pages.mahasiswa.data-lomba.partials.form', [
    'action' => route('mahasiswa.data-lomba.store'),
    'method' => 'POST',
    'buttonText' => 'Ajukan Lomba',
    'buttonIcon' => 'fa-solid fa-paper-plane',
])