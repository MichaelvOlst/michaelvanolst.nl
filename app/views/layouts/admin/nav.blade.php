<nav class="admin-nav">

    	<ul>
            <li>
                <a href={{ URL::route('admin') }}> 
                    <i class="fa fa-home"> </i>
                    Dashboard
                </a>
            </li>
    		<li>
    			<a href={{ URL::route('admin.project.create') }}> 
    				<i class="fa fa-folder-open"> </i>
                    Projects
    			</a>
    		</li>
    		<li>
    			<a href={{ URL::route('admin.admin.create') }}> 
    				<i class="fa fa-user"></i>
                    Admins
    			</a>
    		</li>
    		<li>
    			<a href={{ URL::route('admin.about.create') }}> 
    				<i class="fa fa-info"></i>
                    About
    			</a>
    		</li>
    		<li>
    			<a href={{ URL::route('admin.skills.create') }}> 
    				<i class="fa fa-wrench"> </i>
                    Skills
    			</a>
    		</li>
            <li>
                <a href={{ URL::route('logout')}}> 
                    <i class="fa fa-sign-out"> </i>
                    Sign out
                </a>
            </li>
    	</ul>
    </nav>