<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>
<body>
    <div class="bg-dark py-3">
           <div class="container">
            <div class="h4 text-white">Customer</div>
           </div>
    </div>
    <div class="container py-3">
        {{-- container heading --}}

        <div class="d-flex justify-content-between">
            <div class="h4 ">Customer list</div>
            <div>
                <a href="{{ route('customers.create')}}" class="btn btn-primary">Create</a>
            </div>
        </div>

        @if (session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
        @endif

        @if (session()->has('delete'))
         <div class="alert alert-success">
            {{session()->get('delete')}}
        </div>

        @endif

        {{-- container table --}}
     <div class="card border-0 shadow-lg mt-2">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>ID Card Number</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>Actions</th>

                </tr>
              @if($customers->isNotEmpty())

              @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->id_card_number }}</td>
            <td>{{ $customer->gender }}</td>
            <td>{{ $customer->birthdate }}</td>
            <td>
                {{-- <a href="{{ route('customers.show', $customer->id) }}">View</a> --}}
                <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

                @else
                   <tr>
                    <td colspan="6">record not found</td>
                   </tr>
                @endif

            </table>
        </div>
     </div>




    </div>

</body>
</html>

