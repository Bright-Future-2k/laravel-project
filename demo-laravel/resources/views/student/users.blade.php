{{-- @extends('book.indexBook')
@section('title','Create')
@section('body') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td{
            text-align: center;
            vertical-align: center;
            height: 30px;
            weight: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table border="1">
                <tr>
                    <td colspan="20" style="text-align: center; vertical-align:center"> BẢN VẼ THIẾT KẾ </td>
                </tr>
                @for ($i = 0; $i < 28; $i++)
                    <tr style="text-align: center; vertical-align:center"></tr>
                @endfor
    
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align:center ">Dự án</td>
                    <td colspan="7" style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center">Mã dự án</td>
                    <td rowspan="2" style="text-align: center; vertical-align:center">KÝ HIỆU CỬA</td>
                    <td rowspan="2" style="text-align: center; vertical-align:center"></td>
                    <td rowspan="2" style="text-align: center; vertical-align:center">SỐ LƯỢNG</td>
                    <td rowspan="2" style="text-align: center; vertical-align:center"></td>
                    <td rowspan="2" style="text-align: center; vertical-align:center">BỘ</td>
                    <td colspan="3" style="text-align: center; vertical-align:center">KHÁCH HÀNG PHÊ DUYỆT</td>
                </tr>
    
                <tr>
                    <td colspan="2" style="text-align: center; vertical-align:center">Khách hàng</td>
                    <td colspan="7" style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" rowspan="2" style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
    
                <tr>
                    <td colspan="2"  style="text-align: center; vertical-align:center">Địa chỉ</td>
                    <td colspan="7" style="text-align: center; vertical-align:center"></td>
                    <td rowspan="2" style="text-align: center; vertical-align:center">QUY CÁCH</td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
    
                <tr>
                    <td colspan="12" style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
                    
                <tr>
                    @for ($i = 0; $i < 12; $i++)
                        <td style="text-align: center; vertical-align:center"></td>
                    @endfor
                    <td style="text-align: center; vertical-align:center">RỘNG x CAO</td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
    
                <tr>
                    @for ($i = 0; $i < 12; $i++)
                        <td style="text-align: center; vertical-align:center"></td>
                    @endfor
                    <td style="text-align: center; vertical-align:center">HỆ PROFILE</td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
                    
                <tr>
                    @for ($i = 0; $i < 9; $i++)
                        <td style="text-align: center; vertical-align:center"></td>
                    @endfor
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                    <td  style="text-align: center; vertical-align:center">LOẠI KÍNH</td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
                    
                <tr>
                    @for ($i = 0; $i < 12; $i++)
                        <td style="text-align: center; vertical-align:center"></td>
                    @endfor
                    <td rowspan="5" class="text-center" style="text-align: center; vertical-align:center">PHỤ KIỆN</td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
                    
                <tr>
                    @for ($i = 0; $i < 12; $i++)
                        <td style="text-align: center; vertical-align:center"></td>
                    @endfor
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
                    
                <tr>
                    <td colspan="3" style="text-align: center; vertical-align:center">Thiết kế</td>
                    <td colspan="3" style="text-align: center; vertical-align:center">Kiểm</td>
                    <td colspan="3" style="text-align: center; vertical-align:center">Duyệt</td>
                    <td colspan="3" style="text-align: center; vertical-align:center">Kinh doanh</td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
    
                <tr>
                    <td colspan="3" rowspan="4" style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" rowspan="4" style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" rowspan="4" style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" rowspan="4" style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
    
                <tr>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
    
                <tr>
                    <td style="text-align: center; vertical-align:center">HƯỚNG NHÌN</td>
                    <td colspan="4" style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center"></td>
                </tr>
    
                <tr>
                    <td style="text-align: center; vertical-align:center">VỊ TRÍ</td>
                    <td colspan="4" style="text-align: center; vertical-align:center"></td>
                    <td colspan="3" style="text-align: center; vertical-align:center">Số trang: 1/1</td>
                </tr>
        </table>
    </div>
</body>
</html>

{{-- @endsection --}}