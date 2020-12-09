<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: navajowhite;
    }
</style>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header" style="background-color: cornflowerblue">
            Thêm mới đại lý phân phối
        </div>
        <div class="card-body">
            <form action="{{route('agency.store')}}" method="post">
                @csrf
                <fieldset >
                    <table class="table" style="width: 1000px; border: 1px solid black">
                        <tr>
                            <td>Mã số đại lý <input type="number" name="id">
                                @if($errors->any())
                                    <p style="color:red;">{{$errors->first('id')}}</p>
                                @endif
                            </td>
                            <td rowspan="2">Địa chỉ <input class="form-control @error('address') border-danger @enderror()" type="text" name="address" style="height: 120px">
                                @if($errors->any())
                                    <p style="color:red;">{{$errors->first('address')}}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Tên đại lý <input type="text" name="agencyName" class="form-control @error('agencyName') border-danger @enderror()">
                                @if($errors->any())
                                    <p style="color:red;">{{$errors->first('agencyName')}}</p>
                                @endif</td>
                        </tr>
                        <tr>
                            <td>Số điện thoại <input type="number" name="numberPhone" class="form-control @error('numberPhone') border-danger @enderror()">
                                @if($errors->any())
                                    <p style="color:red;">{{$errors->first('numberPhone')}}</p>
                                @endif</td>
                            </td>
                            <td>Tên quản lý <input type="text" name="managerName" class="form-control @error('managerName') border-danger @enderror()">
                                @if($errors->any())
                                    <p style="color:red;">{{$errors->first('managerName')}}</p>
                                @endif</td>
                            </td>
                        </tr>
                        <tr>
                            <td>Email <input type="email" name="email" class="form-control @error('email') border-danger @enderror()">
                                @if($errors->any())
                                    <p style="color:red;">{{$errors->first('email')}}</p>
                                @endif</td>
                            </td>
                            <td>Trạng thái <input type="text" name="status"  class="form-control @error('status') border-danger @enderror()">
                                @if($errors->any())
                                    <p style="color:red;">{{$errors->first('status')}}</p>
                                @endif</td>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Thêm"></td>
                        </tr>
                    </table>
                    <a class="btn btn-primary" href="{{route('agency.index')}}">back</a>

                </fieldset>

            </form>

        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
