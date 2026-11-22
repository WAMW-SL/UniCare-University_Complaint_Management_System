<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/student/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/student/complaints.css') }}">
    <link rel="stylesheet" href="{{ asset('css/student/dashboard.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="d-flex align-items-start sidebar">
        <div class="all">
            <img class="profile" src="{{ asset('images/profile.png') }}" alt="profile">
            <div class="status">
                <span class="name">@yield('name')</span>
                <span>@yield('role')</span>
            </div>
        </div>
        <div class="tabs nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="dash tabBtn nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                aria-selected="true"><img src="{{ asset('images/dashboard .png') }}" alt="dashboard">
                <span>Dashboard</span></button>
            <button class="prof tabBtn nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                aria-selected="false"><img src="{{ asset('images/user.png') }}" alt="profile"><span>My
                    Profile</span></button>
            <button class="compl tabBtn nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                aria-selected="false"><img src="{{ asset('images/register.png') }}" alt="complaints"><span>My
                    Complaints</span></button>
        </div>
        <button type="button" class="btn btn-primary logoutBtn"><img src="{{ asset('images/logout.png') }}"><span>Log
                out</span></button>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab tab-pane fade show active" id="v-pills-home" role="tabpanel"
                aria-labelledby="v-pills-home-tab" tabindex="0">
                <h3 class="welcome">Welcome, Nimal Fernando!</h3>
                <div class="cards">
                    @php
                        $count = app(App\Http\Controllers\Student\DashboardController::class)->showComplaintCount();
                    @endphp
                    <div class="card">
                        <div class="cardName">
                            <img src="{{ asset('images/counter.png') }}">
                            <span>Complaints Count</span>
                        </div>
                        <h2>{{ $count['total'] }}</h2>
                    </div>
                    <div class="card">
                        <div class="cardName">
                            <img src="{{ asset('images/pending.png') }}">
                            <span>Pending</span>
                        </div>
                        <h2>{{ $count['pending'] }}</h2>
                    </div>

                    <div class="card">
                        <div class="cardName">
                            <img src="{{ asset('images/progress.png') }}">
                            <span>In Progress</span>
                        </div>
                        <h2>{{ $count['progress'] }}</h2>
                    </div>

                    <div class="card">
                        <div class="cardName">
                            <img src="{{ asset('images/resolved.png') }}">
                            <span>Resolved</span>
                        </div>
                        <h2>{{ $count['resolved'] }}</h2>
                    </div>
                    <div class="card">
                        <div class="cardName">
                            <img src="{{ asset('images/assign.png') }}">
                            <span>Assigned</span>
                        </div>
                        <h2>{{ $count['assigned'] }}</h2>
                    </div>

                </div>
            </div>
            <div class="tab tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">@yield('profile')</div>
            <div class="tab tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">
                @php
                    $complaints = app(App\Http\Controllers\Student\DashboardController::class)->showComplaintData();
                @endphp
                <div class='btnSet'>
                    <a type="button" class="add btn btn-primary" href="{{ route('student.submitComplaint') }}">Add</a>
                    <button type="button" class="edit btn btn-primary" id="editBtn" disabled>Edit</button>
                    <button type="button" class="del btn btn-primary" id="delBtn" disabled>Delete</button>
                </div>

                <div class="outerbg">
                    <div class="tblbg">
                        <table class="table tbl">
                            <thead>
                                <tr>
                                    <th scope="col">Complaint ID</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Submitted Date</th>
                                    <th scope="col">Submitted Time</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complaints as $complaint)
                                    <tr class="complaintRow" data-id="{{ $complaint->Complaint_ID }}">
                                        <td>{{ $complaint->Complaint_ID }}</td>
                                        <td>{{ $complaint->Description }}</td>
                                        <td>{{ $complaint->Category }}</td>
                                        <td>{{ $complaint->Submitted_Date }}</td>
                                        <td>{{ $complaint->Submitted_Time }}</td>
                                        <td>
                                            <div class="{{ strtolower(str_replace(" ","-",$complaint->Status)) }}">{{ $complaint->Status }}</div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <img class="logo" src="{{ asset('images/logo.png') }}">
        <span>UniCare</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous">
    </script>
    <script>
        let selectedID = null;

        document.querySelectorAll('.complaintRow').forEach(row => {

            row.addEventListener('click', function() {

                document.querySelectorAll('.complaintRow').forEach(r => {
                    r.classList.remove('selected');
                });

                this.classList.add('selected');

                selectedID = this.dataset.id;

                document.getElementById('editBtn').disabled = false;
                document.getElementById('delBtn').disabled = false;
            });

        });

        document.getElementById('editBtn').addEventListener('click', function() {

            if (selectedID !== null) {
                window.location.href = `/student/editComplaint/${selectedID}`;
            }

        });
        document.getElementById('delBtn').addEventListener('click', function() {

            if (selectedID !== null) {
                window.location.href = `/student/deleteComplaintData/${selectedID}`;
            }

        });
    </script>
</body>

</html>
