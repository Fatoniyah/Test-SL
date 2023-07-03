<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <h1>Customer Details</h1>
    <table class="table table-striped">
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>ID:</td>
            <td>{{ $customer->id }}</td>
        </tr>
        <tr>
            <td>First Name:</td>
            <td>{{ $customer->first_name }}</td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td>{{ $customer->last_name }}</td>
        </tr>
        <tr>
            <td>Address:</td>
            <td>{{ $customer->address }}</td>
        </tr>
        <tr>
            <td>ID Card Number:</td>
            <td>{{ $customer->id_card_number }}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{ $customer->gender }}</td>
        </tr>
        <tr>
            <td>Birthdate:</td>
            <td>{{ $customer->birthdate }}</td>
        </tr>
    </table>
    <a href="{{ route('customers.index') }}" class="btn btn-primary">Back to List</a>

