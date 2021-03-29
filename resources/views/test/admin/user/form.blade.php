<x-test-admin-app-layout>
    <h1>User</h1>
    <form class="" action="" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $item->id }}">
        <div class="">
            <input type="text" name="name" value="{{ $item->name }}" placeholder="name">
        </div>

        <div class="">
            <input type="email" name="email" value="{{ $item->email }}" placeholder="email">
        </div>

        <div class="">
            <label>Role: </label>
                @foreach ($roles as $role)
                    <div class="">
                        <label>
                            <input type="radio" name="role" value="{{ $role->id }}" {{ $item->roles->first() && $item->roles->first()->id == $role->id ? 'checked' : '' }}>
                            {{ $role->name }}
                        </label>
                        <p>{{ $role->description }}</p>
                    </div>
                @endforeach
        </div>

        <div class="">
            <input type="password" name="password" value="" placeholder="password">
        </div>

        <div class="">
            <input type="password" name="password_confirmation" value="" placeholder="password confirmation">
        </div>

        <input type="submit" value="submit">
    </form>
</x-test-admin-app-layout>
