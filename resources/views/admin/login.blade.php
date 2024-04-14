<x-logintemp-layout>
    <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh">
        <form class="w-50 border border-2 p-5 shadow-lg" method="POST" action="{{ route('admin.verifylogin') }}">
            @csrf
            @if (Session::has('error'))
                <p class="text-danger">{{ session::get('error') }}</p>
            @endif
            <h3 class="text-center text-uppercase mb-4">Admin Login</h3>
            <div class="form-floating mb-3 w-100">
                <input type="email" class="form-control" id="floatingInput" name="email"
                    placeholder="name@example.com" />
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating w-100">
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password" />
                <label for="floatingPassword">Password</label>
            </div>

            <button type="submit" class="btn btn-primary w-50 mt-3">Login</button>
    </div>
    </form>
</x-logintemp-layout>
