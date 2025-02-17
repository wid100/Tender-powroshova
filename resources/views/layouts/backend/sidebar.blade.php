<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img src="{{ asset('assets/images/logo.png') }}" class="w-75" alt="">
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">web apps</li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                  <i class="link-icon" data-feather="anchor"></i>
                  <span class="link-title">Tenders</span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                  <ul class="nav sub-menu">
                    <li class="nav-item">
                        <ul class="nav sub-menu">
                            @foreach ($years as $year)
                            <li class="nav-item">
                                <a href="{{ route('admin.tenders.year', ['year' => $year]) }}" class="nav-link">{{ $year }}</a>
                            </li>
                            @endforeach

                        </ul>
                    </li>
                  </ul>
                </div>
              </li>


            <li class="nav-item">
                <ul class="nav sub-menu">
                    {{-- <li class="nav-item">
                        <a href="{{ route('admin.tender.index') }}" class="nav-link">Tender</a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('admin.participate.index') }}" class="nav-link">Participate</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a href="{{ route('admin.participate.draft') }}" class="nav-link">Draft Participate</a>
                    </li> --}}

                </ul>
            </li>




        </ul>


    </div>
</nav>
