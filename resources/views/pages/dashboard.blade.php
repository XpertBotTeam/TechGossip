<x-layout>

    <div class="container">
        <h2>Users List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Date created</th>
                </tr>
              </thead>
              <tbody>

@foreach ($users as $user)
        <tr>
          <td>{{$user -> username}}</td>
          <td>{{$user -> email}}</td>
          <td>{{$user -> created_at}}</td>
        </tr>
   @endforeach

</tbody>
</table>
</div>
  
</x-layout>