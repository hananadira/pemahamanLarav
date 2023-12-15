@extends('layouts/main')
@section('container')
<section id="resume">
    <h1 class="title">Experience</h1>
    <div class="experience-details-container">
      <div class="about-containers">
        <div class="details-container">
          <h2 class="experience-sub-title">Frontend Development</h2>
          <div class="article-container">
            <article>
              <img
                class="icon"
                src="{{ asset('img/html.png') }}"
                alt="Experience icon"
              />
              <div>
                <h3>HTML</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img
                class="icon"
                src="{{ asset('img/css.png') }}"
                alt="Experience icon"
              />
              <div>
                <h3>CSS</h3>
                <p>Experienced</p>
              </div>
            </article>
            <article>
              <img
                class="icon"
                src="{{ asset('img/php.jpg') }}"
                alt="Experience icon"
              />
              <div>
                <h3>PHP</h3>
                <p>Intermediate</p>
              </div>
            </article>
            <article>
              <img
                class="icon"
                src="{{ asset('img/java.jpg') }}"
                alt="Experience icon"
              />
              <div>
                <h3>Java</h3>
                <p>Basic</p>
              </div>
            </article>
            <article>
              <img
                class="icon"
                src="{{ asset('img/js.jpg') }}"
                alt="Experience icon"
              />
              <div>
                <h3>JavaScript</h3>
                <p>Intermediate</p>
              </div>
            </article>
          </div>
        </div>
        <div class="details-container">
          <h2 class="experience-sub-title">Backend Development</h2>
          <div class="article-container">
            <article>
              <img
                class="icon"
                src="{{ asset('img/sql.jpg') }}"
                alt="Experience icon"
              />
              <div>
                <h3>SQL</h3>
                <p>Basic</p>
              </div>
            </article>
            <article>
              <img
                class="icon"
                src="{{ asset('img/node-js.jpg') }}"
                alt="Experience icon"
              />
              <div>
                <h3>Node JS</h3>
                <p>Intermediate</p>
              </div>
            </article>
            <article>
              <img
                class="icon"
                src="{{ asset('img/espress-js.jpg') }}"
                alt="Experience icon"
              />
              <div>
                <h3>Express JS</h3>
                <p>Intermediate</p>
              </div>
            </article>
            <article>
              <img
                class="icon"
                src="{{ asset('img/git.jpg') }}"
                alt="Experience icon"
              />
              <div>
                <h3>Git</h3>
                <p>Intermediate</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    <img
      src="/img/arrow.png"
      class="icon arrow"
      onclick="location.href='./#projects'"
      alt=""
    />
  </section>
@endsection