<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>customer-create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="bg-dark py-3">
           <div class="container">
            <div class="h4 text-white">Customers</div>
           </div>
    </div>
    <div class="container py-3">
        {{-- container heading --}}

        <div class="d-flex justify-content-between">
            <div class="h4 ">Add Customers Info</div>
            <div>
                <a href="{{ route('customers.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        {{-- container table --}}
        <form action="{{route('customers.store')}}" method="post" enctype="multipart/form-data">
        @csrf
       <div class="card border-0 shadow-lg mt-2">
          <div class="card-body">
            <div class="mb-3">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>
            <div class="mb-3">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>
            <div class="mb-3">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="mb-3">
                <label for="id_card_number">ID Card Number:</label>
                <input type="text" name="id_card_number" id="id_card_number" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="birthdate">Birthdate:</label>
                <input type="date" name="birthdate" id="birthdate" required>
            </div>


        </div>
     </div>
         <button class="btn btn-primary mt-3" >Save Customer</button>
    </form>

    </div>

</body>
</html>
