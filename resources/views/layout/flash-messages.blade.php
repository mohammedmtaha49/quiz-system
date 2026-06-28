@if(session('success'))
<div class="mb-4 rounded-xl bg-emerald-50 px-4 py-3
            text-emerald-700 ring-1 ring-emerald-200">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="mb-4 rounded-xl bg-red-50 px-4 py-3
            text-red-700 ring-1 ring-red-200">
    {{ session('error') }}
</div>
@endif