    <div class="row" style="margin-top: 25px;">
        <div class="col-md-8 col-sm-12">
            {!! Form::open(['route' => 'contact.store']) !!}

            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! Form::submit('Search', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
            <br />
        </div>
    </div>