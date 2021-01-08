<div class="welcome-nav">
    <div class="container-fluid">
        <div class="w-100 d-flex justify-content-between align-items-center px-md-2">
            <div class="mr-auto d-flex">
                <a href="#" class="btn circle rounded-circle flex-center mx-1 mx-md-3">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
                <a href="#" class="btn circle rounded-circle flex-center mx-1 mx-md-3">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                </a>
            </div>
            <div class="text-center ml-auto mr-auto d-none d-md-flex">
                <h3 class="display">
                    <img class="img-responsive" style="height:80px;" src="{{ asset('img/icons/logo-clear.png') }}"
                        alt="">
                    {{ config('app.name') }}
                </h3>
            </div>
            <ul class="ml-md-auto d-flex mr-2">
                <a href="#" class="btn right mx-md-2">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </a>
                <a href="#" class="btn right mx-md-2">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </a>
                <a href="#" class="btn right flex-center mx-md-2">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                 <a href="#" class="btn right flex-center mx-md-2 d-md-none">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
            </ul>
        </div>
        <div class="clearfix"></div>
        <hr class="hr-slim">
       <!-- Nav tabs -->
       <ul class="nav " id="navId">
           <li class="nav-item">
               <a href="#tab1Id" class="nav-link active">Active</a>
           </li>
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
               <div class="dropdown-menu">
                   <a class="dropdown-item" href="#tab2Id">Action</a>
                   <a class="dropdown-item" href="#tab3Id">Another action</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#tab4Id">Action</a>
               </div>
           </li>
           <li class="nav-item">
               <a href="#tab5Id" class="nav-link">Another link</a>
           </li>
           <li class="nav-item">
               <a href="#" class="nav-link disabled">Disabled</a>
           </li>
       </ul>
    </div>
</div>
