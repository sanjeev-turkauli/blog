<div>
    <div>
        <div class="container-fluid bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                                @if(Auth::check())
                                <div class="flex-shrink-0 dropdown">
                                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="data:image/jpeg;base64,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" alt="mdo" width="32" height="32" class="rounded-circle">
                                    </a>
                                    <ul class="dropdown-menu text-small shadow rounded-0" aria-labelledby="dropdownUser2">
                                        <li><a class="dropdown-item" href="#">New project...</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0)" wire:click.prevent="logOut">Sign out</a></li>
                                    </ul>
                                </div>
                                @else
                                <button class="btn btn-primary" wire:click.prevent="logIn">Login</button>
                                @endif
                            </div>



                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    </nav>
</div>