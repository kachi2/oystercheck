@extends('layouts.admin')
<style>
    .clickable-row {
        cursor: pointer;
    }
    .clickable-row:hover {
        background-color: #f0f0f0;
    }
   
</style>
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
                            <table class="table table-striped table-hover dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th class="px-2 py-3">S/N</th>
                                        <th class="px-2 py-3">User</th>
                                        <th class="px-2 py-3">Activity</th>
                                        <th class="px-2 py-3">Initiated At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($logOfUsers as $index => $log)
                                    <tr class="clickable-row" onclick="showDetails('{{ $log->id }}', '{{ $log->user->name ?? 'Unknown' }}', '{{ $log->user->phone ?? '-' }}', '{{ $log->user->email ?? '-' }}', '{{ $log->activity }}', '{{ $log->ip_address ?? '-' }}', '{{ $log->created_at->format('Y-m-d H:i') }}', {{ json_encode($log->changes) }})">
                   
                                        <td class="px-0 py-0">
                                            <div class="px-2 py-3">{{ $index + 1 }}</div>
                                        </td>
                                        <td class="px-0 py-0">
                                            <div class="px-2 py-3">{{ $log->user->name ?? 'Unknown' }}</div>
                                        </td>
                                        <td class="px-0 py-0">
                                            <div class="px-2 py-3">{{ $log->activity }}</div>
                                        </td>
                                        <td class="px-0 py-0">
                                            <div class="px-2 py-3">{{ $log->created_at->format('Y-m-d H:i') }}</div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-4 position-fixed  top-1 end-0" style="padding-left:70px">
                <div class="card">
                    <div class="card-body p-3" id="detailsCard">
                        <h4>Details</h4>
                        <h5 id="auditId">Audit Details</h5>
                        <h5>User</h5>
                        <p id="userName">Select a log to see details</p>
                        <h5>Phone Number</h5>
                        <p id="userPhone">-</p>
                        <h5>Email Address</h5>
                        <p id="userEmail">-</p>
                        <h5>Event</h5>
                        <p id="event">-</p>
                        <h5>IP Address</h5>
                        <p id="ipAddress" style="color: #6FD4BA">-</p>
                        <h5>Device</h5>
                        <p id="device">-</p>
                        <hr>
                        <h5 id="changesCount">0 Change(s)</h5>
                        <div id="changesList"></div>
                    </div>
                </div>
            </div>
            <script>
                function showDetails(auditId, userName, userPhone, userEmail, event, ipAddress, device, changes) {
                    // Set details in the card
                    // document.getElementById('auditId').innerText = 'Audit Details ' + auditId;
                    document.getElementById('auditId').innerText = 'Audit Details';
                    document.getElementById('userName').innerText = userName;
                    document.getElementById('userPhone').innerText = userPhone;
                    document.getElementById('userEmail').innerText = userEmail;
                    document.getElementById('event').innerText = event;
                    document.getElementById('ipAddress').innerText = ipAddress;
                    document.getElementById('device').innerText = device;
        
                    // Update changes
                    document.getElementById('changesCount').innerText = changes.length + ' Change(s)';
                    const changesList = document.getElementById('changesList');
                    changesList.innerHTML = ''; // Clear previous changes
                    changes.forEach((change, index) => {
                        const changeElement = document.createElement('p');
                        changeElement.innerText = `${index + 1} Change(s): ${change}`;
                        changesList.appendChild(changeElement);
                    });
                }
            </script>

        </div> <!-- end col -->
        <hr/>
    </div>                  
    
    <!-- Modal -->
    <div class="modal fade" id="depositdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tradingdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header" style="background: #fff">
                    <h5 class="modal-title text-black" id="tradingdropLabel" style="color: #000">Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Event</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex flex-row mb-3">
                                <div class="p-2">
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
                    <button type="submit" class="btn btn-primary btn-lg submitbtn w-100" data-bs-dismiss="modal" style="background-color: #0E2554"> Filter</button>
                </div>
            </div>
        </div>
    </div>

   

@endsection
