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
            @foreach($projects as $project)
                <div class="glass-card project-card">
                    <div class="project-thumb">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="project-img">
                        <div class="project-overlay"></div>
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
                                <a href="{{ $project['github_url'] }}" class="project-link-btn" aria-label="GitHub Repo">
                                    <i data-lucide="github"></i>
                                </a>
                                <a href="{{ $project['demo_url'] }}" class="project-link-btn" aria-label="Live Demo">
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
