<section class="section-padding" id="portofolio">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <i data-lucide="layers"></i>
                <span>Galeri Showcase</span>
            </div>
            <h2 class="section-title">Karya & <span class="text-gradient-blue">Projek Unggulan</span></h2>
            <p class="section-subtitle">Beberapa aplikasi dan sistem digital yang telah saya kembangkan dengan fokus pada performa dan UI modern.</p>
        </div>

        <div class="projects-grid">
            @foreach($projects as $index => $project)
                <div class="glass-card project-card"
                    data-project-index="{{ $index }}"
                    data-title="{{ $project['title'] }}"
                    data-category="{{ $project['category'] }}"
                    data-description="{{ $project['description'] }}"
                    data-image="{{ $project['image'] }}"
                    data-demo="{{ $project['demo_url'] }}"
                    data-tags="{{ implode(',', $project['tags']) }}"
                    style="cursor: pointer;">
                    <div class="project-thumb">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="project-img">
                        <div class="project-overlay"></div>
                        <!-- Hover overlay hint -->
                        <div class="project-hover-hint">
                            <i data-lucide="zoom-in" style="width:28px;height:28px;"></i>
                            <span>Lihat Detail</span>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-category">{{ $project['category'] }}</span>
                        <h3 class="project-title">{{ $project['title'] }}</h3>
                        <p class="project-desc">{{ $project['description'] }}</p>

                        <div class="project-footer">
                            <div class="tag-list">
                                @foreach($project['tags'] as $tag)
                                    <span class="tech-tag">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <div class="project-links">
                                <a href="{{ $project['demo_url'] }}" class="project-link-btn" aria-label="Live Demo" onclick="event.stopPropagation()">
                                    <i data-lucide="external-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Project Detail Modal -->
<div class="project-modal-overlay" id="projectModalOverlay">
    <div class="project-modal glass-card" id="projectModal">
        <button class="modal-close-btn" id="modalCloseBtn" aria-label="Tutup">
            <i data-lucide="x"></i>
        </button>

        <div class="modal-image-wrap">
            <img src="" alt="" class="modal-image" id="modalImage">
            <div class="modal-image-overlay"></div>
            <span class="modal-category-badge" id="modalCategory"></span>
        </div>

        <div class="modal-body">
            <h2 class="modal-title" id="modalTitle"></h2>
            <p class="modal-description" id="modalDescription"></p>

            <div class="modal-tags" id="modalTags"></div>

            <div class="modal-actions">
                <a href="#" class="btn-primary" id="modalDemoBtn" target="_blank">
                    <i data-lucide="link"></i>
                    <span>Live Demo</span>
                </a>
                <a href="#" class="btn-secondary" id="modalGithubBtn" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>
                    <span>Kode Sumber</span>
                </a>
            </div>
        </div>
    </div>
</div>
