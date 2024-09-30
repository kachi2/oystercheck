@extends('layouts.admin')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            
                            <h4 class="page-title">Activity Reports</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">View And Monitor All Account Activities from here</li>
                            </ol> 
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="ay-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div><!--end col-->  
                    </div><!--end row-->                                                              
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>

       
        <div class="row pt-3">
            <div class="col-md-8">
                <div class="card">
                    
                    <div class="card-body p-2">
                        <div class="d-flex justify-content-between">
                            <h4>Activity Log</h4>
                            <div class="p-2" data-bs-toggle="modal" data-bs-target="#depositdrop">
                                <i data-feather="list" style="width: 18px; height: 18px;"></i> 
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table  class="table table-striped table-hover dt-responsive  " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="px-2 py-3">S/N</th>
                                        <th class="px-2 py-3">Activity</th>
                                        <th class="px-2 py-3">Initiated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="">
                                                <div class="px-2 py-3">1</div>
                                            </a>
                                        </td>
                                       
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="#">
                                                <div class="px-2 py-3">John Doe viewed an Address verification </div>
                                            </a>
                                        </td>
                                        
                                        
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="#">
                                                <div class="px-2 py-3">2024-9-11</div>
                                            </a>
                                        </td>
    
                                    </tr>
                                    <tr>
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="">
                                                <div class="px-2 py-3">2</div>
                                            </a>
                                        </td>
                                       
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="#">
                                                <div class="px-2 py-3">Hart Doe viewed an Identity verification </div>
                                            </a>
                                        </td>
                                        
                                        
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="#">
                                                <div class="px-2 py-3">2024-9-11</div>
                                            </a>
                                        </td>
    
                                    </tr>
                                    <tr>
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="">
                                                <div class="px-2 py-3">3</div>
                                            </a>
                                        </td>
                                       
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="#">
                                                <div class="px-2 py-3">Hart Doe viewed an Identity verification </div>
                                            </a>
                                        </td>
                                        
                                        
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="#">
                                                <div class="px-2 py-3">2024-9-11</div>
                                            </a>
                                        </td>
    
                                    </tr>
                                    <tr>
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="">
                                                <div class="px-2 py-3">4</div>
                                            </a>
                                        </td>
                                       
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="#">
                                                <div class="px-2 py-3">Hart Doe viewed an Identity verification </div>
                                            </a>
                                        </td>
                                        
                                        
                                        <td class="px-0 py-0">
                                            <a class="table-link" href="#">
                                                <div class="px-2 py-3">2024-9-11</div>
                                            </a>
                                        </td>
    
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-3">
                        <h4>Details</h4>
                        <h5>Audit Details #651beaefa3f7a132572146ea</h5>
                        <h5>User</h5>
                        <p>Morgan Consortium</p>
                        <h5>Phone Number</h5>
                        <p>+2349153414314</p>
                        <h5>Email Address</h5>
                        <p>johndoe@morgansconsortium.com</p>
                        <h5>Event</h5>
                        <p>Update</p>
                        <h5>IP Address</h5>
                        <p style="color: #6FD4BA">212.46.32.324</p>
                        <h5>Device</h5>
                        <p>12th September 2024, 4:45pm</p>
                        <hr>
                        <h5>1 Change(s)</h5>
                        <p>receiveNotificationWhenAddressReportlsReady:</p>
                        <h5>2 Change(s)</h5>
                        <p>receiveNotificationWhenAddressReportlsReady:</p>
                        <h5>3 Change(s)</h5>
                        <p>receiveNotificationWhenAddressReportlsReady:</p>
                        <h5>4 Change(s)</h5>
                        <p>receiveNotificationWhenAddressReportlsReady:</p>
                        <h5>5 Change(s)</h5>
                        <p>receiveNotificationWhenAddressReportlsReady:</p>
                        <h5>6 Change(s)</h5>
                        <p>receiveNotificationWhenAddressReportlsReady:</p>
                      
                        <p><snap style="color: #6FD4BA">+</snap> <b>true</b></p>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->

        <hr/>

        
    </div>                  

       <!-- Modal -->
        <div class="modal  fade" id="depositdrop"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background: #fff">
                    <h5 class="modal-title text-black"  id="tradingdropLabel" style="color: #000" >Filter </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Event</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row mb-3">
                                <div class="p-2 ">
                                    <button type="button" class="card btn btn-outline-secondary">Today</button>
                                </div>
                                <div class="p-2">
                                    <button type="button" class="card btn btn-outline-secondary">Last 7 days</button>
                                </div>
                                <div class="p-2">
                                    <button type="button" class="card btn btn-outline-secondary">Last 30 days</button>
                                </div>
                                <div class="p-2">
                                    <button type="button" class="card btn btn-outline-secondary">YTD</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-flex justify-content-between"> 
                        <div class="form-group col-md-5 d-flex">
                            <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            <input type="text" id="daterange" class="form-control" placeholder="Start date - End date">
                        </div>
                    </div>
                    
                    <div class="mb-3 mt-3">
                        <label for="floatingInput" class="form-label"> Event </label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected> Select event</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="floatingInput" class="form-label"> Resource </label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected> Select resource</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-lg submitbtn w-100"  data-bs-dismiss="modal" style="background-color: #0E2554"> Filter</button>

                </div>
            </div>
            </div>
        </div>


@endsection