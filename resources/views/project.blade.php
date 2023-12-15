@extends('layouts.main')
@extends('layouts.porto')
@include('layouts.porto')
@section('container')
    <div class="container">
        <div class="display-3 text-center fw-bold">My Project</div>
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/project-1.png') }}" alt="project 1" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Project One</h1>
                        </div>
                    </div>
                </div>   

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/project-1.png') }}" alt="project 1" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Project One</h1>
                        </div>
                    </div>
                </div>  

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/project-1.png') }}" alt="project 1" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Project One</h1>
                        </div>
                    </div>
                </div>  

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/project-1.png') }}" alt="project 1" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Project One</h1>
                        </div>
                    </div>
                </div>  

                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('img/project-1.png') }}" alt="project 1" class="card-img-top" height="300px">
                            <hr />
                            <h1 class="text-center">Project One</h1>
                        </div>
                    </div>
                </div>  

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- script owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
        });
    </script>
@endpush