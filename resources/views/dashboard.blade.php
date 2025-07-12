@extends('layouts.dashboard')

@section('content')
    <div class="alert alert-success text-center">
        You're logged in!
    </div>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>
    
@endsection