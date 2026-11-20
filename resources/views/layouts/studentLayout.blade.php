<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/student/layoutWithDashboard.css') }}">

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
                aria-labelledby="v-pills-home-tab" tabindex="0">@yield('dashboard')</div>
            <div class="tab tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">@yield('profile')</div>
            <div class="tab tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">@yield('complaints')</div>
        </div>
    </div>
    <div class="header">
        <img class="logo" src="{{ asset('images/logo.png') }}">
        <span>UniCare</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous">
    </script>
</body>

</html>
