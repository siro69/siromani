
@include('employer.navbar');
@include('employer.pages.jobpost', ['categories' => $categories, 'locations' => $locations])
@include('employer.footer');

