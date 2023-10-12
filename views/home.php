<div class="container mt-3">
  <div class="row">
    <div class="col-12 h4">
      Search Contacts
      <span class="htmx-indicator">
        Searching...
      </span>
      <input class="form-control"
        type="search"
        name="search"
        placeholder="Begin Typing To Search Users..."
        hx-post="/search"
        hx-trigger="keyup changed delay:500ms, search"
        hx-target="#search-results"
        hx-indicator=".htmx-indicator">
      <table class="table">
        <thead class="fw-bold h6">
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody id="search-results">
        </tbody>
      </table>
    </div>
  </div>
</div>