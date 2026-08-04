<section class="section-padding" id="keahlian">
    <div class="container">
        <div class="section-header">
            <div class="section-tag">
                <i data-lucide="cpu"></i>
                <span>Kompetensi Utama</span>
            </div>
            <h2 class="section-title">Keahlian & <span class="text-gradient-blue">Teknologi</span></h2>
            <p class="section-subtitle">Daftar instrumen teknologi dan kompetensi teknis yang saya kuasai dalam membangun solusi digital end-to-end.</p>
        </div>

        <!-- Skills Category Tabs -->
        <div class="skills-tab-nav">
            <button class="tab-btn active" data-tab="fullstack">
                <i data-lucide="layers" style="width: 16px; margin-right: 6px;"></i> Programming
            </button>
            <button class="tab-btn" data-tab="tools">
                <i data-lucide="wrench" style="width: 16px; margin-right: 6px;"></i> Tools & Design
            </button>
            <button class="tab-btn" data-tab="soft">
                <i data-lucide="brain" style="width: 16px; margin-right: 6px;"></i> Soft Skills
            </button>
        </div>

        <!-- Frontend & Backend Skills Grid -->
        <div class="skills-grid active" id="skills-fullstack">
            @foreach($skills['fullstack'] as $skill)
                <div class="glass-card skill-card">
                    <div class="skill-info">
                        <div class="skill-name-wrapper">
                            <div class="skill-icon-box">
                                <i data-lucide="{{ $skill['icon'] }}"></i>
                            </div>
                            <span class="skill-name">{{ $skill['name'] }}</span>
                        </div>
                        <span class="skill-percentage">{{ $skill['level'] }}%</span>
                    </div>
                    <div class="skill-bar-bg">
                        <div class="skill-bar-fill" data-level="{{ $skill['level'] }}"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Tools Skills Grid -->
        <div class="skills-grid" id="skills-tools" style="display: none;">
            @foreach($skills['tools'] as $skill)
                <div class="glass-card skill-card">
                    <div class="skill-info">
                        <div class="skill-name-wrapper">
                            <div class="skill-icon-box">
                                <i data-lucide="{{ $skill['icon'] }}"></i>
                            </div>
                            <span class="skill-name">{{ $skill['name'] }}</span>
                        </div>
                        <span class="skill-percentage">{{ $skill['level'] }}%</span>
                    </div>
                    <div class="skill-bar-bg">
                        <div class="skill-bar-fill" data-level="{{ $skill['level'] }}"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Soft Skills Grid -->
        <div class="skills-grid" id="skills-soft" style="display: none;">
            @foreach($skills['soft'] as $skill)
                <div class="glass-card skill-card">
                    <div class="skill-info">
                        <div class="skill-name-wrapper">
                            <div class="skill-icon-box">
                                <i data-lucide="{{ $skill['icon'] }}"></i>
                            </div>
                            <span class="skill-name">{{ $skill['name'] }}</span>
                        </div>
                        <span class="skill-percentage">{{ $skill['level'] }}%</span>
                    </div>
                    <div class="skill-bar-bg">
                        <div class="skill-bar-fill" data-level="{{ $skill['level'] }}"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
