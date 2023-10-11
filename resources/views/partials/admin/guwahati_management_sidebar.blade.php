<li class="nav-item">
    
    
    
    <a class="nav-link collapsed" href="#collapseTwoGuwahatioffice" data-toggle="collapse" data-target="#collapseTwoGuwahatioffice" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Office Management (Guwahati)</span>
    </a>
    <div id="collapseTwoGuwahatioffice" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">
                Office Management:</h6>
            <a class="collapse-item" href="{{route('admin.admissionenquiries.index','guwahati')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Admission Enquiries</span></a>
            <a class="collapse-item" href="{{route('admin.entercourse.index')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Enter Course</span></a>
            <a class="collapse-item" href="{{route('admin.studentAdmission.index','guwahati')}}">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Student Admission</span></a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#collapseTwo" data-toggle="collapse" data-target="#collapseTwoAssignment" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Assignments</span>
    </a>
    <div id="collapseTwoAssignment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{route('admin.assignments.index')}}">Create Assignments</a>
            <a class="collapse-item" href="{{route('admin.assignments.submission','upsc')}}">UPSC </a>
            <a class="collapse-item" href="{{route('admin.assignments.submission','apsc')}}">APSC </a>
            <a class="collapse-item" href="{{route('admin.assignments.submission','recorded')}}">RECORDED </a>
            <a class="collapse-item" href="{{route('admin.assignments.submission','study material')}}">STUDY MATERIAL </a>
        </div>
    </div>
</li>