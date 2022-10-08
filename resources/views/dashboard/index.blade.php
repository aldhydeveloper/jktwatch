@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">New Product</h4>
                        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel"
                            id="owl-carousel-basic">
                            <div class="item">
                                <img src="assets/images/dashboard/Rectangle.jpg" alt="">
                                <h5>Product examp 1</h5>
                                <p>Category : Man</p>
                                <p>Price : Rp. 3.000.000</p>
                            </div>
                            <div class="item">
                                <img src="assets/images/dashboard/Img_5.jpg" alt="">
                                <h5>Product examp 2</h5>
                                <p>Category : Sports</p>
                                <p>Price : Rp. 5.000.000</p>
                            </div>
                            <div class="item">
                                <img src="assets/images/dashboard/img_6.jpg" alt="">
                                <h5>Product examp 3</h5>
                                <p>Category : Women</p>
                                <p>Price : Rp. 1.5000.000</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="card-title mb-1">Recent Posts </h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="preview-list">
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-primary">
                                                <i class="mdi mdi-file-document"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Example Watch 1</h6>
                                                <p class="text-muted mb-0">Man, 35mm</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">15 minutes ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-success">
                                                <i class="mdi mdi-cloud-download"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Example Watch 2</h6>
                                                <p class="text-muted mb-0">Sports, 35mm</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">1 hour ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="mdi mdi-clock"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Example Watch 3</h6>
                                                <p class="text-muted mb-0">Women, 35mm</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">35 minutes ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-danger">
                                                <i class="mdi mdi-email-open"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Example Watch 4</h6>
                                                <p class="text-muted mb-0">Womet, 35mm</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">55 minutes ago</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-warning">
                                                <i class="mdi mdi-chart-pie"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <h6 class="preview-subject">Example Watch 5</h6>
                                                <p class="text-muted mb-0">Womet, 35mm</p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted">50 minutes ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Image </th>
                                        <th> Name </th>
                                        <th> Category </th>
                                        <th> Sub Category </th>
                                        <th> Price </th>
                                        <th> Detail </th>
                                        <th> Upload Date </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="img/logo_white_circle_black.png" alt="logo"></td>
                                        <td> Example Watch1 </td>
                                        <td> Man </td>
                                        <td> 36mm </td>
                                        <td> Rp 3.000.000 </td>
                                        <td> Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                                        <td>
                                            08 Oct 2022
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
