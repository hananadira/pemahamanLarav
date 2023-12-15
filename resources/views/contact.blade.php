@extends('layouts.main')
@section('container')
<section id="contact">
    <div class="col-md-6 mx-auto">
    <div class="contact-container">
    <h1 class="title">Contact Me</h1>

      <div class="mb-3 mt-5">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name">
          <small class="text-danger"></small>
      </div>
      <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email">
          <small class="text-danger"></small>
      </div>
      <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" rows="3"></textarea>
          <small class="text-danger"></small>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
    </div>
  </div>
  </section>
@endsection