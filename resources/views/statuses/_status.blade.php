<li id="status-{{ $status->id }}">
  <a href="{{ route('users.show', $user->id )}}">
    <img src="https://pic.qqtn.com/up/2018-7/2018072918092112846.jpg" alt="{{ $user->name }}" style="height: 50px;width: 50px;" />
  </a>
  <span class="user">
    <a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>
  </span>
  <span class="timestamp">
    {{ $status->created_at->diffForHumans() }}
  </span>
  <span class="content">{{ $status->content }}</span>
</li>