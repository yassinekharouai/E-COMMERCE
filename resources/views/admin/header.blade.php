<header class="header">   
  <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
              <div class="close-btn">Close <i class="fa fa-close"></i></div>
              <form id="searchForm" action="#">
                  <div class="form-group">
                      <input type="search" name="search" placeholder="What are you searching for...">
                      <button type="submit" class="submit">Search</button>
                  </div>
              </form>
          </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
              <!-- Navbar Header-->
              <a href="index.html" class="navbar-brand">
                  <div class="brand-text brand-big visible text-uppercase">
                      <strong class="text-primary">Dark</strong><strong>Admin</strong>
                  </div>
                  <div class="brand-text brand-sm">
                      <strong class="text-primary">D</strong><strong>A</strong>
                  </div>
              </a>
              <!-- Sidebar Toggle Btn-->
              <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          
          <!-- Logout Button -->
          <div class="list-inline-item logout">
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="logout-btn">
                      <i class="fa fa-sign-out"></i>
                      <span class="logout-text">Logout</span>
                  </button>
              </form>
          </div>
      </div>
  </nav>
</header>

<style>
  .logout-btn {
      background-color: #ff4d4d;
      color: white;
      border: none;
      padding: 8px 15px;
      border-radius: 4px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 8px;
  }
  
  .logout-btn:hover {
      background-color: #ff3333;
      transform: translateY(-1px);
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }
  
  .logout-btn i {
      font-size: 14px;
  }
  
  .logout-text {
      font-size: 14px;
  }
  
  @media (max-width: 768px) {
      .logout-text {
          display: none;
      }
      .logout-btn {
          padding: 8px 10px;
      }
  }
</style>