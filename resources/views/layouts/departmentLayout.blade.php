<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/department/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/department/complaints.css') }}">

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
            <button class="dash tabBtn nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-dashboard" type="button" role="tab" aria-controls="v-pills-dashboard"
                aria-selected="true"><img src="{{ asset('images/dashboard .png') }}" alt="dashboard">
                <span>Dashboard</span></button>
            <button class="prof tabBtn nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                aria-selected="false"><img src="{{ asset('images/user.png') }}" alt="profile"><span>My
                    Profile</span></button>
            <button class="compl tabBtn nav-link" id="v-pills-complaints-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-complaints" type="button" role="tab" aria-controls="v-pills-complaints"
                aria-selected="false"><img src="{{ asset('images/register.png') }}" alt="complaints"><span>
                    Complaints</span></button>
            <button class="tasks tabBtn nav-link" id="v-pills-tasks-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-tasks" type="button" role="tab" aria-controls="v-pills-tasks"
                aria-selected="false"><img src="{{ asset('images/tasks.png') }}" alt="complaints"><span>
                    Tasks</span></button>
            <button class="workers tabBtn nav-link" id="v-pills-workers-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-workers" type="button" role="tab" aria-controls="v-pills-workers"
                aria-selected="false"><img src="{{ asset('images/worker.png') }}" alt="complaints"><span>
                    Workers</span></button>
        </div>
        <button type="button" class="btn btn-primary logoutBtn"><img src="{{ asset('images/logout.png') }}"><span>Log
                out</span></button>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab tab-pane fade show active" id="v-pills-dashboard" role="tabpanel"
                aria-labelledby="v-pills-dashboard-tab" tabindex="0">dahboard</div>
            <div class="tab tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">profile</div>
            <div class="tab tab-pane fade" id="v-pills-complaints" role="tabpanel"
                aria-labelledby="v-pills-complaints-tab" tabindex="0">
                <h2>Complaints</h2>
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
                                    <th scope="col">Task</th>
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
                                            <div class="<?php if ($complaint['Status'] === 'Pending') {
                                                echo 'pending';
                                            } ?>">{{ $complaint->Status }}</div>
                                        </td>
                                        <td>{{ $complaint->Task}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="options">
                    <button type="submit" class="btn btn-primary btnSub" id="createTask" disabled>Create Task</button>
                </div>
            </div>
            <div class="tab tab-pane fade" id="v-pills-tasks" role="tabpanel" aria-labelledby="v-pills-tasks-tab"
                tabindex="0">tasks</div>
            <div class="tab tab-pane fade" id="v-pills-workers" role="tabpanel" aria-labelledby="v-pills-workers-tab"
                tabindex="0">workers</div>
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

                document.getElementById('createTask').disabled = false;
            });

        });

        document.getElementById('createTask').addEventListener('click', function() {

            // if (selectedID !== null) {
            //     window.location.href = `/student/editComplaint/${selectedID}`;
            // }

        });
    </script>
</body>

</html>
