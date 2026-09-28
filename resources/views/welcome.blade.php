@extends('layouts.app')

@section('title', 'Belva | Portfolio')

@section('content')
    @include('components.sections.home')
    @include('components.sections.about')
    @include('components.sections.education')
    @include('components.sections.projects')
    @include('components.sections.certifications')
    @include('components.sections.organizations')
    @include('components.sections.skills')
    @include('components.sections.contact')
@endsection