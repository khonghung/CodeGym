<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class='col-12'>
            <div class='row'>
                <h1>Danh sach khach hang</h1>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Ten Khach Hang</th>
                            <th scope="col">Ngay sinh</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($customers) == 0)
                            <tr>
                                <td colspan="4"> Khong co du lieu </td>
                            </tr>

                        @else
                            @foreach ($customers as $key => $customer)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $customer['name'] }}</td>
                                    <td>{{ $customer['bod'] }}</td>
                                    <td>{{ $customer['email'] }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</body>

</html>
