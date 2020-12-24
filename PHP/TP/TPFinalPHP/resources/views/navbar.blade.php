<nav class="navbar navbar-expand-lg navbar-light bg-dark mb-3">
    <a class="navbar-brand text-white" href="{{ route('promotions.index') }}">Gigaplanning</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <div class="position">
                    <div class="svg-wrapper">
                        <svg height="40" width="200">
                            <rect id="shape" height="40" width="200" />
                            <div id="text">
                                <a href="{{ route('promotions.index') }}"><span class="spot"></span>Liste des promotions</a>
                            </div>
                        </svg>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <div class="position">
                    <div class="svg-wrapper">
                        <svg height="40" width="200">
                            <rect id="shape" height="40" width="200" />
                            <div id="text">
                                <a href="{{ route('modules.index') }}"><span class="spot"></span>Liste des modules</a>
                            </div>
                        </svg>
                    </div>
                </div>
            </li>
            <li class="nav-item active">
                <div class="position">
                    <div class="svg-wrapper">
                        <svg height="40" width="200">
                            <rect id="shape" height="40" width="200" />
                            <div id="text">
                                <a href="{{ route('students.index') }}"><span class="spot"></span>Liste des élèves</a>
                            </div>
                        </svg>
                    </div>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Recherche" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    </div>
</nav>