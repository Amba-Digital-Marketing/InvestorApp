@guest


@else

<div class="sidebar">

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="material-icons">dashboard</i>
                <p>{{ __('Dashboard') }}</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('company.index') }}">
              <i class="material-icons">dashboard</i>
                <p>{{ __('Company') }}</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('investors.index') }}">
              <i class="material-icons">dashboard</i>
                <p>{{ __('Manage Investors') }}</p>
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="{{ route('investment.index') }}">
              <i class="material-icons">dashboard</i>
                <p>{{ __('Manage Investments') }}</p>
            </a>
          </li>





    </ul>


<aside class="app-sidebar">



</aside>
@endguest
</div>


