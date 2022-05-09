@extends('home')
<main-component>
@section('content')
<the-header></the-header>
@if($page === 'enter')
    <enter-view>
@elseif($page === 'companyview')
    <company-view>
@elseif($page === 'vacancyresponse')
    <vacancy-response>
@elseif($page === 'companyresponse')
    <company-response>
@elseif($page === 'studentaccount')
    <student-account>
@elseif($page === 'companyvacancy')
    <company-vacancy>
@elseif($page === 'categoryvacancy')
    <category-vacancy>
@elseif($page === 'vacancyview')
    <vacancy-view>
@elseif($page === 'vacanyedit')
    <vacancy-edit>
@elseif($page === 'companyinformation')
    <company-information>
@elseif($page === 'studentinformation')
    <student-information>
@elseif($page === 'studentfeedback')
    <student-feedback>
@elseif($page === 'companyfeedback')
    <company-feedback>
@endif
@endsection
