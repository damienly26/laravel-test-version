@extends('layouts/layout')

@section('title', 'Task')

@section('main')
  <div class="task-list">
  @foreach($tasks as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
          <h3>{{ $task->title }}</h3>
					<p>{{ $task->description }}</p>
          <p>{{ \Carbon\Carbon::parse($task->created_at)->format('d/m/Y')}}</p>
				</div>
			</div>
      <div class="card-footer">
				<a href="/delete" class="card-footer-item">Delete task ></a>
			</div>
    </div>
    @endforeach
  </div>
@endsection
