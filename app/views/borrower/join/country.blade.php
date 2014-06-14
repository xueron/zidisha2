@extends('layouts.master')

@section('content')
    {{ BootstrapForm::open(array('controller' => 'BorrowerJoinController@postCountry', 'translationDomain' => 'borrower.join.select-country')) }}

    {{ BootstrapForm::select('country', $form->getCountries()->toKeyValue('id', 'name'), 'KE') }}

    {{ BootstrapForm::submit('continue') }}

    {{ BootstrapForm::close() }}
    <br/>
    <br/>
    {{ link_to_route('lender:join', 'Join as lender') }}
@stop
