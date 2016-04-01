@extends('layouts.app')

@section('content')

	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>
				<a href="{{ url('dashboard')}}"><i class="icon-home2 position-left"></i> Home</a>
			</li>
			<li>
				<a href="form_inputs_basic.html">Forms</a>
			</li>
			<li class="active">Basic inputs</li>
		</ul>
			</li>
		</ul>
		<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
	</div>

		<!-- Form horizontal -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Create User Role</h5>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">	
			<h3>Edit {!! $edit_user->name !!}</h3>
			
			{!!Form::model($edit_user, [ 'url' => 'user/update/'. $edit_user->id, 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal' ] ) !!}

					@include('manage_user.form_edit', ['model' => $edit_user])
				</form>
			</div>
		</div>
		<!-- /form horizontal -->

@endsection

