@extends('layouts.main')

@section('container')
<section id="profile">
      <div class="section__pic-container">
        <img src="{{ asset('img/hana.jpg') }}" alt="John Doe profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">{{ $say }}</p>
        <h1 class="title">{{ $name }}</h1>
        <p class="section_text_p2">{{ $desc }}</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./assets/resume-example.pdf')"
          >
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='/contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="/assets/linkedin.jpg"
            class="icon"
            onclick="location.href='https://linkedin.com/hananadira';"
            alt=""
          />
          <img
            src="/assets/github.png"
            class="icon"
            onclick="location.href='https://github.com/hananadira'"
            alt=""
          />
          <img
            src="/assets/instagram.jpg"
            class="icon"
            onclick="location.href='https://instagram.com/nanannss14'"
            alt=""
          />
        </div>
      </div>
    </section>
@endsection
  