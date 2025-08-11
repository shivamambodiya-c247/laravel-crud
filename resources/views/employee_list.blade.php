<!DOCTYPE html>
<html>
<head>
    <title>Employees List</title>
</head>
<body>
    <h1>Employees</h1>
    <pre>
        <?php //print_r($employees); ?>
    </pre>
    <table cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse($employees as $key => $employee)
                    
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $employee->firstname }}</td>
                    <td>{{ $employee->email }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No employees found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
