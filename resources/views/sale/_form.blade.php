{!! Form::open(['url' => 'sale', 'method' => 'post']) !!}

	<div class="form-group" {{ $errors->has('customer_id') ? 'has-error' : '' }}>
		{!! Form::label('customer_id', 'Select Customer', ['class' => 'col-sm-3']) !!}
		<div class="col-sm-9">
			{!! Form::select('customer_id', $customerId, null, ['class' => 'form-control', 'placeholder' => 'Select Customer', 'id' => 'for-customer-balance']) !!}
			<span class="help-block text-danger">
					{{ $errors->first('customer_id') }}
				</span>
		</div>
	</div>

	<div class="form-group" {{ $errors->has('product_id') ? 'has-error' : '' }}>
		{!! Form::label('product_id', 'Select Product', ['class' => 'col-sm-3']) !!}
		<div class="col-sm-9">
			{!! Form::select('product_id', $productId, null, ['class' => 'form-control', 'placeholder' => 'Select Product', 'id' => 'extra']) !!}
			<span class="help-block text-danger">
				{{ $errors->first('product_id') }}
			</span>
		</div>
	</div>

	<div class="form-group" {{ $errors->has('quantity') ? 'has-error' : '' }}>
		{!! Form::label('quantity', 'Quantity', ['class' => 'col-sm-3']) !!}
		<div class="col-sm-9">
			{!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => 'Enter Quantity', 'id' => 'quantity']) !!}
			<span class="help-block text-danger">
				{{ $errors->first('quantity') }}
			</span>
		</div>
	</div>

	<div class="form-group" {{ $errors->has('price') ? 'has-error' : '' }}>
		{!! Form::label('price', 'Price', ['class' => 'col-sm-3 control-label']) !!}
		<div class="col-sm-9">
			{!! Form::number('price', null, ['class' => 'form-control', 'id' => 'total_price']) !!}
			<span class="help-block text-danger">
				{{ $errors->first('price') }}
			</span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{!! Form::submit('submit', ['class' => 'btn btn-primary ', ]) !!}
		</div>
	</div>

{!! Form::close() !!}