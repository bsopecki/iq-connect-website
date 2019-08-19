{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')

  @include('layouts.components.hero')
  @include('layouts.components.about-us')

  {{-- @php $sections = get_field('components') @endphp
  
  @if($sections)
    @foreach ($sections as $section)
      @php ($sectionName = $section['acf_fc_layout']) @endphp
        @include('layouts.components.' . $sectionName, ['data'=>$section])
    @endforeach
  @endif --}}

@endsection