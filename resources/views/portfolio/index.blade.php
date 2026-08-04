@extends('layouts.app')

@section('title', $profile['name'] . ' | ' . $profile['title'])

@section('content')
    <!-- Hero / Profile Section -->
    @include('components.hero')

    <!-- Keahlian / Skills Section -->
    @include('components.skills')

    <!-- Pendidikan & Pengalaman Section -->
    @include('components.timeline')

    <!-- Karya / Portofolio Section -->
    @include('components.projects')

    <!-- Kontak Section (Sebelum Footer) -->
    @include('components.contact')
@endsection
