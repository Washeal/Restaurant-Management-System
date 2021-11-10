<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="{{asset('assets/vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
				<img src="{{asset('assets/vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				    <li>
						<a href="{{url('dashboard')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Dashbord</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">User</span>
						</a>
						<ul class="submenu">
							<li><a href="{{url('/users')}}">Manage User</a></li>
							<li><a href="{{url('roles')}}">Role</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">HR</span>
						</a>
						<ul class="submenu">
							<li><a href="{{url('/employee')}}">Manage Employee</a></li>
							<li><a href="{{url('/position')}}">Manage Position</a></li>
							<li><a href="{{url('/depertment')}}">Manage Depertment</a></li>
							
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Table</span>
						</a>
						<ul class="submenu">
							<li><a href="{{url('/tables')}}">Table List</a></li>
							<li><a href="{{url('/tables/create')}}">Create Table</a></li>
							
							
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Manu</span>
						</a>
						<ul class="submenu">
							<li><a href="{{url('/manus')}}">Table List</a></li>
							<li><a href="{{url('/manus/create')}}">Create Table</a></li>
							
							
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Customer</span>
						</a>
						<ul class="submenu">
							<li><a href="{{url('/customer')}}">Customer List</a></li>
							<li><a href="{{url('/customer/create')}}">Create Customer</a></li>
							
							
						</ul> 
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Order</span>
						</a>
						<ul class="submenu">
							<li><a href="{{url('/invoice')}}">Create Customer</a></li>
							<li><a href="{{url('/order')}}">Order List</a></li>
							
							
						</ul> 
					</li>
					
				</ul>
			</div>
		</div>
	</div>