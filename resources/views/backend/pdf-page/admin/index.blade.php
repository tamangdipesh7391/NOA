<table class="table table-hover table-striped">
    <thead>
    <tr>
        <th>S.n</th>
        <th>Name</th>
        <th>Username</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Role</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key=>$admin)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$admin['name']}}</td>
            <td>{{$admin['username']}}</td>
            <td>{{$admin['gender']}}</td>
            <td>{{$admin['email']}}</td>
            <td>{{$admin['role']}}</td>
        </tr>
    @endforeach

    </tbody>
</table>
