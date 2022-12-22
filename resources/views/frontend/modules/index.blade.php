@extends('frontend.layouts.master')
@section('title', 'Welcome to Our Visited Website')
@section('slider')
    @include('frontend.includes.slide')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <article>
                    <h3 class="bg-light p-2">Recent Post</h3>
                    <div class="d-flex flex-column gap-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="#"><img src="{{ asset('/') }}frontend/assets/images/slider/slider_1.webp"
                                        alt="" class="card_image"></a>
                                <h2><a href="#" class="nav-link mt-3">Home Design Contact Me</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque doloremque, nihil dicta,
                                    alias harum exercitationem iusto dolorum provident quisquam iure reprehenderit ea
                                    debitis voluptate reiciendis placeat consequatur consequuntur fuga adipisci?</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                <div class="d-flex justify-content-between mt-4">
                                    <p><a href="#" class="nav-link">Author Name</a></p>
                                    <p>Comments <span class="text-primary">4</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <a href="#"><img
                                        src="{{ asset('/') }}frontend/assets/images/slider/9d9dd9e4-e84a-402e-ba8f-daa659e6e6c5-PhotoWord_003.webp"
                                        alt="" class="card_image"></a>
                                <h2><a href="#" class="nav-link mt-3">Home Design Contact Me</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque doloremque, nihil dicta,
                                    alias harum exercitationem iusto dolorum provident quisquam iure reprehenderit ea
                                    debitis voluptate reiciendis placeat consequatur consequuntur fuga adipisci?</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                <div class="d-flex justify-content-between mt-4">
                                    <p><a href="#" class="nav-link">Author Name</a></p>
                                    <p>Comments <span class="text-primary">4</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <a href="#"><img src="{{ asset('/') }}frontend/assets/images/slider/slider_1.webp"
                                        alt="" class="card_image"></a>
                                <h2><a href="#" class="nav-link mt-3">Home Design Contact Me</a></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque doloremque, nihil dicta,
                                    alias harum exercitationem iusto dolorum provident quisquam iure reprehenderit ea
                                    debitis voluptate reiciendis placeat consequatur consequuntur fuga adipisci?</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                <div class="d-flex justify-content-between mt-4">
                                    <p><a href="#" class="nav-link">Author Name</a></p>
                                    <p>Comments <span class="text-primary">4</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-4">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </article>
            </div>
            <div class="col-md-4 mx-auto">
                <aside>
                    <h3 class="bg-light p-2">Category List</h3>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="nav-link">News</a>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="nav-link">Network</a>
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="nav-link">Entertainment</a>
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="nav-link">Js</a>
                            <span class="badge bg-primary rounded-pill">2</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="#" class="nav-link">Sports</a>
                            <span class="badge bg-primary rounded-pill">1</span>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
@endsection
