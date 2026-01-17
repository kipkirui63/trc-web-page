<h2>New Child Dedication Registration</h2>

<p><strong>Child Name:</strong> {{ $data['child_name'] }}</p>
<p><strong>Date of Birth:</strong> {{ $data['child_birthdate'] }}</p>
<p><strong>Gender:</strong> {{ $data['child_gender'] ?? 'Not specified' }}</p>

<hr>

<p><strong>Father's Name:</strong> {{ $data['father_name'] }}</p>
<p><strong>Mother's Name:</strong> {{ $data['mother_name'] }}</p>
<p><strong>Phone:</strong> {{ $data['parent_phone'] }}</p>
<p><strong>Email:</strong> {{ $data['parent_email'] }}</p>

<hr>

<p>This registration was submitted from the Children’s Ministry page.</p>
