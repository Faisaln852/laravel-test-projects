<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('user.index')}}">User</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Teacher
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('teacher.index')}}">Add & view Teachers</a></li>
              <li><a class="dropdown-item" href="{{route('create.assign.students')}}">Assign Teacher to student</a></li>
              <li><a class="dropdown-item" href="{{route('select.teacher')}}">See Teacher's Student</a></li>

            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Student
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('student.index')}}">Add & View Students</a></li>
              <li><a class="dropdown-item" href="{{route('select.students')}}">See Student's Teachers</a></li>
            </ul>
          </li>

      </div>
    </div>
  </nav>
