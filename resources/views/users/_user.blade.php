<li>
    <img src="https://pic.qqtn.com/up/2018-7/2018072918092112846.jpg" alt="{{ $user->name }}" style="height: 100px;width: 100px;" />
    <a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a>

    @can('destroy', $user)
      <form action="{{ route('users.destroy', $user->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
      </form>
    @endcan
</li>