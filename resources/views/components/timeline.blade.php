<section class="section-padding" id="pengalaman">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <i data-lucide="briefcase"></i>
                <span>Jejak Langkah</span>
            </div>
            <h2 class="section-title">Pendidikan & <span class="text-gradient-blue">Pengalaman</span></h2>
            <p class="section-subtitle">Perjalanan akademis dan rekam jejak profesional dalam mengembangkan produk digital berkualitas tinggi.</p>
        </div>

        <!-- Toggle Switcher -->
        <div class="timeline-toggle-wrapper">
            <div class="timeline-toggle-box">
                <button class="toggle-option active" data-target="experience">
                    <i data-lucide="building-2" style="width: 16px; margin-right: 6px; display: inline-block; vertical-align: middle;"></i> Pengalaman
                </button>
                <button class="toggle-option" data-target="education">
                    <i data-lucide="graduation-cap" style="width: 16px; margin-right: 6px; display: inline-block; vertical-align: middle;"></i> Pendidikan
                </button>
            </div>
        </div>

        <!-- Experience Timeline -->
        <div class="timeline-container" id="timelineExperience">
            @foreach($experience as $exp)
                <div class="timeline-item">
                    <div class="timeline-node"></div>
                    <div class="glass-card timeline-card">
                        <span class="timeline-period">{{ $exp['period'] }}</span>
                        <h3 class="timeline-role">{{ $exp['role'] }}</h3>
                        <h4 class="timeline-company">{{ $exp['company'] }}</h4>
                        <p class="timeline-desc">{{ $exp['description'] }}</p>

                        <ul class="timeline-bullets">
                            @foreach($exp['highlights'] as $highlight)
                                <li>{{ $highlight }}</li>
                            @endforeach
                        </ul>

                        <div class="tag-list">
                            @foreach($exp['tags'] as $tag)
                                <span class="tech-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Education Timeline -->
        <div class="timeline-container" id="timelineEducation" style="display: none;">
            @foreach($education as $edu)
                <div class="timeline-item">
                    <div class="timeline-node"></div>
                    <div class="glass-card timeline-card">
                        <span class="timeline-period">{{ $edu['period'] }}</span>
                        <h3 class="timeline-role">{{ $edu['degree'] }}</h3>
                        <h4 class="timeline-company">{{ $edu['institution'] }}</h4>
                        <p class="timeline-desc">{{ $edu['description'] }}</p>

                        <ul class="timeline-bullets">
                            @foreach($edu['highlights'] as $highlight)
                                <li>{{ $highlight }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
