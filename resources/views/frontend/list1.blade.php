<x-app-web-layout>

  <div class="container mt-3">
    <div class="card">
      <div class="card-header">Donors List
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
      <div class="card-body">
        <table class="table table-striped table bordered">
          <thead class="table-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">Address</th>
              <th scope="col">Contact Number</th>
              <th scope="col">Email</th>
              <th scope="col">Donor Type</th>
              <th scope="col">Donation Type</th>
              <th scope="col">Donation Purpose</th>
              <th scope="col">Donation Amount</th>
            </tr>
          </thead>
          <tbody>

            @foreach($donors as $donors)
        <tr key={index}>
          <th scope="row">{{$donors->id}}</th>
          <td>{{$donors->donorName}}</td>
          <td>{{$donors->donorAddress}}</td>
          <td>{{$donors->donorPhone}}</td>
          <td>{{$donors->donorEmail}}</td>
          <td>{{$donors->donorType}}</td>
          <td>{{$donors->donationType}}</td>
          <td>{{$donors->donationPurpose}}</td>
          <td>{{$donors->donationAmount}}</td>
        </tr>
      @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</x-app-web-layout>

<script>
</script>