<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">

    <div class="list-group list-group-flush">
        <a href="#">
            <div class="sidebar-heading">
                {{ __('Dashboard') }}
            </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-light">
            Item 1
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-light">
            Item 2
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-light">
            Item 3
        </a>
        <a href="#subMenu" data-toggle="collapse"  class="d-flex justify-content-between list-group-item list-group-item-action bg-light">
            Item 4 +
        </a>
        <div class="collapse" id="subMenu">
            <a href="#" class="list-group-item list-group-item-action bg-light pl-4">
                Sub Item 1
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-light pl-4">
                Sub Item 2
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-light pl-4">
                Sub Item 3
            </a>
        </div>
    </div>
</div>