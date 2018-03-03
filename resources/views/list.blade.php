@extends('inc.header')

@section('title','List')

@section('content')
<div class="row">
  <div class="offset-2 col-md-8 text-center">
    @if(session('msg'))
      <br><div class="alert alert-success">{{ session('msg') }}</div>
    @endif
    @if(count($users) < 1)
      <div class="alert alert-warning">{{ "No User is Registered."}}</div>
    @else
    <table class="table table-hover table-bordered">
        <th>Sr No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email ID</th>
        <th>Phone No.</th>
        <?php $index = 1; ?>
        @foreach($users as $user)
          <tr>
            <td>{{ $users->perPage() * ($users->currentPage() - 1) + $index }}</td>
            <td>{{ $user->fname }}</td>
            <td>{{ $user->lname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
          </tr>
        <?php $index++; ?>
        @endforeach
    </table>
    @endif
  </div>
</div>
 <div style="float:right">
  {!! $users->render("pagination::bootstrap-4") !!}
 </div>
@endsection