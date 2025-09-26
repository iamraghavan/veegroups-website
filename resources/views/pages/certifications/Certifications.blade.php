@extends('layouts.app')
@section('content')

<livewire:breadcrumbs
    title="Certifications"
    :background="asset('assets/img/jve/bg/19.webp')"
    :items="[
        ['label' => 'Home', 'route' => 'index'],
        ['label' => 'Certifications']
    ]"
/>

<style>
  /* --- Table polish --- */
  .cert-card { border: 1px solid rgba(0,0,0,.06); border-radius: .75rem; overflow: hidden; }
  .cert-card .card-header {
      background: linear-gradient(180deg, #f8f9fa, #ffffff);
      border-bottom: 1px solid rgba(0,0,0,.06);
      padding: 1rem 1.25rem;
  }
  .cert-table thead th {
      white-space: nowrap;
      font-weight: 600;
      border-bottom: 1px solid rgba(0,0,0,.08)!important;
      background: #fbfbfd;
  }
  .cert-table tbody td {
      vertical-align: middle;
  }
  .hash-wrap {
      display: flex; align-items: center; gap: .5rem;
      max-width: 100%;
  }
  .hash-code {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", monospace;
      font-size: .85rem;
      background: #f6f7f9;
      border: 1px solid rgba(0,0,0,.06);
      border-radius: .375rem;
      padding: .375rem .5rem;
      margin: 0;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      max-width: 100%;
  }
  .btn-icon {
      display: inline-flex; align-items: center; gap: .5rem;
  }
  .btn-soft-primary {
      color: #0d6efd; background: rgba(13,110,253,.08); border: 1px solid rgba(13,110,253,.18);
  }
  .btn-soft-primary:hover { background: rgba(13,110,253,.12); }
  .btn-soft-dark {
      color: #212529; background: rgba(33,37,41,.06); border: 1px solid rgba(33,37,41,.15);
  }
  .btn-soft-dark:hover { background: rgba(33,37,41,.09); }
  .btn-soft-secondary {
      color: #6c757d; background: rgba(108,117,125,.1); border: 1px solid rgba(108,117,125,.2);
  }
  /* Sticky header on very small screens where horizontal scroll is likely */
  @media (max-width: 576px) {
    .table-responsive thead th { position: sticky; top: 0; z-index: 2; }
  }
</style>

<div class="page-content-wrapper section-space--inner--120">
  <div class="container">
    <div class="row">
      <div class="col-12">

        @php
          use App\Http\Controllers\CertificationController;

          $baseRel = 'assets/img/jve/docs';
          $files = [
              'GST_Certificate.pdf',
              'ISO__JAY_VEE_ENGINEERING.pdf',
              'Print_Udyam_Registration_Certificate.pdf',
          ];

          $rows = [];
          foreach ($files as $fname) {
              $abs = public_path($baseRel . '/' . $fname);
              $exists = is_file($abs);
              $rows[] = [
                  'name'    => $fname,
                  'label'   => pathinfo($fname, PATHINFO_FILENAME),
                  'exists'  => $exists,
                  'sha'     => $exists ? hash_file('sha256', $abs) : 'N/A',
                  'viewUrl' => $exists ? CertificationController::signedUrl('certifications.view', $fname) : null,
                  'dlUrl'   => $exists ? CertificationController::signedUrl('certifications.download', $fname) : null,
              ];
          }
        @endphp

        <div class="card cert-card shadow-sm">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h2 class="mb-0 fs-4">Certifications</h2>
            <span class="text-muted small">{{ count($rows) }} documents</span>
          </div>

          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped table-hover align-middle cert-table mb-0">
                <thead>
                  <tr>
                    <th style="width: 90px;">S.No</th>
                    <th>Name</th>
                    <th class="w-50">SHA-256</th>
                    <th style="width: 260px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($rows as $i => $row)
                  <tr>
                    <td class="fw-semibold">{{ $i + 1 }}</td>

                    <td>
                      <div class="d-flex flex-column">
                        <span class="fw-semibold">{{ $row['label'] }}</span>
                        <span class="text-muted small">{{ $row['name'] }}</span>
                      </div>
                    </td>

                    <td>
                      <div class="hash-wrap">
                        <code class="hash-code" title="{{ $row['sha'] }}">{{ $row['sha'] }}</code>
                        @if($row['exists'])
                          <button type="button"
                                  class="btn btn-sm btn-soft-secondary"
                                  data-copy="{{ $row['sha'] }}"
                                  title="Copy SHA-256">
                            {{-- copy icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                              <path d="M4 1a2 2 0 0 0-2 2v7h1V3a1 1 0 0 1 1-1h7V1z"/>
                              <path d="M5 4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"/>
                            </svg>
                            <span class="visually-hidden">Copy</span>
                          </button>
                        @endif
                      </div>
                    </td>

                    <td>
                      @if($row['exists'])
                        <div class="d-flex gap-2 flex-wrap">
                          <a href="{{ $row['viewUrl'] }}"
                             target="_blank"
                             class="btn btn-sm btn-soft-primary btn-icon"
                             aria-label="View {{ $row['label'] }}">
                            {{-- eye icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8"/>
                              <path d="M8 5.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5"/>
                            </svg>
                            <span>View</span>
                          </a>

                          <a href="{{ $row['dlUrl'] }}"
                             class="btn btn-sm btn-soft-dark btn-icon"
                             aria-label="Download {{ $row['label'] }}">
                            {{-- download icon --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                              <path d="M.5 9.9V14h15V9.9h-1V13H1.5V9.9z"/>
                              <path d="M7.5 1h1v7.1l2.1-2.1.7.7L8 10.9 4.7 6.7l.7-.7 2.1 2.1z"/>
                            </svg>
                            <span>Download</span>
                          </a>
                        </div>
                      @else
                        <span class="badge bg-danger">Missing</span>
                      @endif
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>

          {{-- Optional helper: show note if any are missing --}}
          @if(collect($rows)->contains(fn($r) => !$r['exists']))
            <div class="card-footer bg-transparent">
              <p class="text-danger mb-0">
                One or more files were not found in
                <code>public/{{ $baseRel }}</code>. Please upload them and refresh.
              </p>
            </div>
          @endif
        </div>

      </div>
    </div>
  </div>
</div>

{{-- Lightweight copy-to-clipboard script (no dependencies) --}}
<script>
  document.addEventListener('click', function (e) {
    const btn = e.target.closest('button[data-copy]');
    if (!btn) return;
    const text = btn.getAttribute('data-copy') || '';
    if (!text) return;

    navigator.clipboard.writeText(text).then(() => {
      const original = btn.title || 'Copy SHA-256';
      btn.title = 'Copied!';
      btn.classList.add('active');
      setTimeout(() => {
        btn.title = original;
        btn.classList.remove('active');
      }, 1200);
    }).catch(() => {
      // fallback prompt if clipboard blocked
      window.prompt('Copy SHA-256', text);
    });
  }, false);
</script>

@endsection
