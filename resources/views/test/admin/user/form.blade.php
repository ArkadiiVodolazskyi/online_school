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
            <select class="" name="">
                <option>-- select --</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{ $item->roles->first() == $role ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="">
            <input type="password" name="password" value="" placeholder="password">
        </div>

        <div class="">
            <input type="password" name="password" value="" placeholder="password confirmation">
        </div>

        <input type="submit" value="submit">
    </form>
</x-test-admin-app-layout>
