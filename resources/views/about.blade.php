@extends('layouts.main')
@section('container')
<section id="about">
    <h1 class="title">About Me</h1>
    <div class="section-container">
      <div class="section__pic-container">
        <img
          class="about-pic"
          src="{{ asset('img/about.jpg') }}"
          alt="Profile Picture"
        />
      </div>
      <div class="about-details-container">
        <div class="about-containers">
          <div class="details-container">
            <img
              class="icon"
              src="{{ asset('img/experience.jpg') }}"
              alt="Experience icon"
            />
            <h3>Experience</h3>
            <p>2022<br />UI / UX</p>
          </div>
          <div class="details-container">
            <img
              class="icon"
              src="{{ asset('img/education.png') }}"
              alt="Experience icon"
            />
            <h3>Education</h3>
            <p>B.Sc. Bachelors Degree<br />M.Sc. Masters Degree</p>
          </div>
        </div>
        <div class="text-container">
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim,
            iusto. Praesentium blanditiis corporis reiciendis ipsum quasi
            earum aut nulla rerum ab eum veritatis unde fugiat repellendus
            beatae ducimus minus autem aspernatur doloremque incidunt quia,
            vitae laborum ex. Dolor aut, nostrum porro veritatis optio,
            facilis vel ea repudiandae eligendi mollitia, ipsam corporis
            sapiente! Quas, asperiores consequatur at dignissimos doloribus
            tempore exercitationem. Sed laboriosam, optio aliquam natus
            cupiditate ullam.
          </p>
        </div>
      </div>
    </div>
    <img
      src="/assets/arrow.png"
      class="icon arrow"
      onclick="location.href='./#experience'"
      alt=""
    />
  </section>
@endsection