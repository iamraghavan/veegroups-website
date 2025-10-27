{{-- resources/views/livewire/project-grid-posts.blade.php --}}
<div class="project-grid-post__area section-space--inner--120" x-data="{ imgModalOpen: false, modalSrc: null }" @keydown.escape.window="imgModalOpen = false; modalSrc = null;">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-4">
                <!-- section title + controls -->
                <div class="section-title-area section-space--bottom--30">
                    <h2 class="title title--style4 section-space--bottom--20">
                        Extremely intellectual &amp; challenging <span class="highlight">projects.</span>
                    </h2>

                    <!-- Unit selector -->
                    <div class="mb-3">
                        <label class="form-label">Our two units</label>
                        <div class="list-group">
                            @foreach($units as $unit)
                                <button
                                    wire:click="selectUnit({{ $unit['id'] }})"
                                    type="button"
                                    class="list-group-item list-group-item-action @if($selectedUnit == $unit['id']) active @endif"
                                >
                                    <strong>{{ $unit['title'] }} — {{ $unit['name'] }}</strong>
                                    <div class="small">{{ \Illuminate\Support\Str::limit($unit['address'], 60) }}</div>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Selected unit details -->
                    @if(!empty($currentUnit))
                        <div class="card mb-3">
                            <div class="card-body small">
                                <strong class="d-block">{{ $currentUnit['name'] }}</strong>
                                <div>{{ $currentUnit['address'] }}</div>
                                @if(!empty($currentUnit['phone']))
                                    <div>Phone: {{ $currentUnit['phone'] }}</div>
                                @endif
                                @if(!empty($currentUnit['email']))
                                    <div>Email: {{ $currentUnit['email'] }}</div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <!-- View mode + search -->
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <button wire:click="setViewMode('grid')" type="button" class="btn btn-sm btn-outline-secondary @if($viewMode === 'grid') active @endif" title="Grid view">Grid</button>
                        <button wire:click="setViewMode('list')" type="button" class="btn btn-sm btn-outline-secondary @if($viewMode === 'list') active @endif" title="List view">List</button>
                        <a href="#" class="ht-btn ht-btn--default ht-btn--default--style2 ms-auto">OUR MISSION</a>
                    </div>

                    <div class="mb-3">
                        <input wire:model.debounce.300ms="search" type="search" class="form-control form-control-sm" placeholder="Search projects...">
                    </div>
                </div>
            </div>

            <div class="col-xl-8 offset-xl-1 col-md-8">
                <!-- project grid post wrapper -->
                <div class="project-grid-post__wrapper">
                    <div class="row">
                        @forelse($filteredProjects as $project)
                            @if($viewMode === 'grid')
                                <div class="col-md-6 mb-4">
                                    <div class="project-grid-post__single card h-100">
                                        <div class="project-grid-post__image">
                                            <img
                                                src="{{ $project['image'] }}"
                                                loading="lazy"
                                                class="img-fluid card-img-top"
                                                alt="{{ $project['title'] }}"
                                                style="cursor:pointer;"
                                                @click="modalSrc='{{ asset($project['image']) }}'; imgModalOpen = true"
                                            >
                                        </div>
                                        <div class="project-grid-post__content card-body">
                                            <h3 class="project-grid-post__title h5">{{ $project['title'] }}</h3>
                                            <p class="project-grid-post__text small">{{ $project['excerpt'] }}</p>
                                            <a href="{{ $project['link'] }}" class="see-more-link">SEE MORE <i class="ion-arrow-right-c"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-12 mb-3">
                                    <div class="d-flex align-items-start gap-3">
                                        <div style="flex:0 0 150px;">
                                            <img
                                                src="{{ $project['image'] }}"
                                                loading="lazy"
                                                class="img-fluid rounded"
                                                alt="{{ $project['title'] }}"
                                                style="cursor:pointer;"
                                                @click="modalSrc='{{ asset($project['image']) }}'; imgModalOpen = true"
                                            >
                                        </div>
                                        <div>
                                            <h4 class="mb-1">{{ $project['title'] }}</h4>
                                            <p class="mb-1 small">{{ $project['excerpt'] }}</p>
                                            <a href="{{ $project['link'] }}" class="see-more-link">SEE MORE <i class="ion-arrow-right-c"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <div class="col-12">
                                <div class="alert alert-info mb-0">No projects found.</div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image modal -->
    <template x-if="imgModalOpen">
        <div class="modal-backdrop fade show" style="position:fixed; inset:0; display:flex; align-items:center; justify-content:center; z-index:1050; background:rgba(0,0,0,0.6);" @click="imgModalOpen=false; modalSrc=null">
            <div class="card" @click.stop style="max-width:90%; max-height:90%; overflow:auto;">
                <div class="card-body p-2">
                    <button type="button" class="btn-close float-end" aria-label="Close" @click="imgModalOpen=false; modalSrc=null"></button>
                    <img :src="modalSrc" alt="Preview" style="max-width:100%; max-height:80vh; display:block; margin:0 auto;">
                </div>
            </div>
        </div>
    </template>
</div>
