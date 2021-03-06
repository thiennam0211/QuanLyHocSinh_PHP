@extends('master.master')
@section('content')
<h2 class="d-flex justify-content-center mb-5">Sửa Phụ Huynh</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="d-flex justify-content-center">
        <form name="PhuHuynh" action="{{route('LuuSuaPH')}}" method="post" onsubmit="return KiemTraPH();">
          {{csrf_field()}}
          <div class="form-group">
            <input name="maph" readonly="readonly" class="form-control" type="text" placeholder="Họ tên cha" value="<?php echo ($PhuHuynh[0]->MaPH) ?>" />
          </div>
          <div class="form-group">
            <td>Học tên cha</td>
            <br>
            <input name="hotencha" class="form-control" type="text" placeholder="Họ tên cha" value="<?php echo ($PhuHuynh[0]->HoTenCha) ?>" />
            <br>
            <td>Họ tên mẹ</td>
            <br>
            <input name="hotenme" class="form-control" type="text" placeholder="Họ tên mẹ" value="<?php echo ($PhuHuynh[0]->HoTenMe) ?>" />
            <br>
            <td>Số điện thoại cha</td>
            <br>
            <input name="sdtcha" class="form-control" type="text" placeholder="Số điện thoại cha" value="<?php echo ($PhuHuynh[0]->SDTCha) ?>" />
            <br>
            <td> Số điện thoại mẹ</td>
            <br>
            <input name="sdtme" class="form-control" type="text" placeholder="Số điện thoại mẹ" value="<?php echo ($PhuHuynh[0]->SDTMe) ?>" />
            <br>
            <td>Địa chỉ</td>
            <br>

            <input name="diachi" class="form-control" type="text" placeholder="Địa chỉ" value="<?php echo ($PhuHuynh[0]->DiaChi) ?>" />
            <br>
            <td>Mã học sinh</td>

            <input name="mahs" class="form-control" type="text" placeholder="MaHS" value="<?php echo ($PhuHuynh[0]->MaHS) ?>" />
          </div>
          <div>
            <input class="btn btn-primary" type="submit" value="Lưu" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function KiemTraPH() {
    let hotencha = document.forms["PhuHuynh"]["hotencha"].value;
    if (hotencha == "") {
      alert("Tên cha không được rỗng");
      document.forms["PhuHuynh"]["hotencha"].focus();
      return false;
    }
    return true;
    let hotenme = document.forms["PhuHuynh"]["hotenme"].value;
    if (hotenme == "") {
      alert("Tên mẹ không được rỗng");
      document.forms["PhuHuynh"]["hotenme"].focus();
      return false;
    }
    return true;

    let sdtcha = document.forms["PhuHuynh"]["sdtcha"].value;
    if (sdtcha == "") {
      alert("Số điện thoại cha không được rỗng");
      document.forms["PhuHuynh"]["sdtcha"].focus();
      return false;
    }
    return true;

    let sdtme = document.forms["PhuHuynh"]["sdtme"].value;
    if (sdtme == "") {
      alert("Số điện thoại mẹ không được rỗng");
      document.forms["PhuHuynh"]["sdtme"].focus();
      return false;
    }
    return true;

    let diachi = document.forms["PhuHuynh"]["diachi"].value;
    if (hotencha == "") {
      alert("Địa chỉ không được rỗng");
      document.forms["PhuHuynh"]["diachi"].focus();
      return false;
    }
    return true;

    let mahs = document.forms["PhuHuynh"]["mahs"].value;
    if (hotencha == "") {
      alert("Mã học sinh không được rỗng");
      document.forms["PhuHuynh"]["mahs"].focus();
      return false;
    }
    return true;
  }
</script>
@endsection