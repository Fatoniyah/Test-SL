<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h1>Edit Customer</h1>
<form action="{{ route('customers.update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" value="{{ $customer->first_name }}"><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" value="{{ $customer->last_name }}"><br>

    <label for="address">Address:</label>
    <input type="text" name="address" value="{{ $customer->address }}"><br>

    <label for="id_card_number">ID Card Number:</label>
    <input type="text" name="id_card_number" value="{{ $customer->id_card_number }}"><br>

    <label for="gender">Gender:</label>
    <select name="gender">
        <option value="Male" {{ $customer->gender == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ $customer->gender == 'Female' ? 'selected' : '' }}>Female</option>
    </select><br>

    <label for="birthdate">Birthdate:</label>
    <input type="date" name="birthdate" value="{{ $customer->birthdate }}"><br>

    <button type="submit">Update</button>
</form>
