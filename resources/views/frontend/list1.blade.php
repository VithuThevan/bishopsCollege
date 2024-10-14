<x-app-web-layout>

  <div class="container mt-3">
    <div class="card shadow-lg">
      <div class="card-header d-flex justify-content-between align-items-center">
        <span>Donors List</span>
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
          class="btn btn-danger">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>

      <div class="card-body">
        <!-- Dropdown to select items per page -->
        <div class="mb-3 d-flex justify-content-end align-items-center">
          <label for="itemsPerPage" class="mx-2">Show:</label>
          <div class="dropdown">
            <select class="form-control form-control-lg w-auto shadow-sm bg-light rounded-pill" id="itemsPerPage"
              name="itemsPerPage" onchange="changeItemsPerPage()">
              <option value="10" {{ request('itemsPerPage') == 10 ? 'selected' : '' }}>10</option>
              <option value="25" {{ request('itemsPerPage') == 25 ? 'selected' : '' }}>25</option>
              <option value="50" {{ request('itemsPerPage') == 50 ? 'selected' : '' }}>50</option>
              <option value="100" {{ request('itemsPerPage') == 100 ? 'selected' : '' }}>100</option>
            </select>
            <i class="fas fa-caret-down"></i>
          </div>
        </div>

        <!-- Responsive table -->
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
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
              @foreach($donors as $donor)
              <tr>
                <th scope="row">{{$donor->id}}</th>
                <td>{{$donor->donorName}}</td>
                <td>{{$donor->donorAddress}}</td>
                <td>{{$donor->donorPhone}}</td>
                <td>{{$donor->donorEmail}}</td>
                <td>{{$donor->donorType}}</td>
                <td>{{$donor->donationType}}</td>
                <td>{{$donor->donationPurpose}}</td>
                <td>{{$donor->donationAmount}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <!-- Beautified Pagination links -->
        <div class="d-flex justify-content-center mt-4">
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-lg">
              @if ($donors->onFirstPage())
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              @else
              <li class="page-item">
                <a class="page-link" href="{{ $donors->appends(['itemsPerPage' => request('itemsPerPage')])->previousPageUrl() }}" tabindex="-1">Previous</a>
              </li>
              @endif

              @for ($i = 1; $i <= $donors->lastPage(); $i++)
              <li class="page-item {{ $i == $donors->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $donors->appends(['itemsPerPage' => request('itemsPerPage')])->url($i) }}">{{ $i }}</a>
              </li>
              @endfor

              @if ($donors->hasMorePages())
              <li class="page-item">
                <a class="page-link" href="{{ $donors->appends(['itemsPerPage' => request('itemsPerPage')])->nextPageUrl() }}">Next</a>
              </li>
              @else
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-disabled="true">Next</a>
              </li>
              @endif
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>

</x-app-web-layout>

<script>
  // Function to reload the page when items per page are changed
  function changeItemsPerPage() {
    const itemsPerPage = document.getElementById("itemsPerPage").value;
    window.location.href = `?itemsPerPage=${itemsPerPage}`;
  }
</script>
